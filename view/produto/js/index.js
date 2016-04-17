$(document).ready(function(){
    $.ajax({
      url: '../produto/produtos.php',
      method: "POST",
      data: 'type=todos',
      success : function(txt){
                  var produto = JSON.parse(txt);
                  tbody_produtos(produto);
                }
    })
});


$(document).ready(function(){
  $("#preco").maskMoney({
    showSymbol:true, 
    symbol:"R$", 
    decimal:".", 
    thousands:".",
    precision: 2
  });
});

function load_colum_option_0(){
  $("#example td:nth-child(2),th:nth-child(2)").hide();
  $("#example td:nth-child(3),th:nth-child(3)").hide();
  $("#example td:nth-child(4),th:nth-child(4)").hide();
  //$(".id_visibilidade").hide();
}

function load_colum_option_1(){
  $("#example td:nth-child(1),th:nth-child(1)").hide();
  $("#example td:nth-child(3),th:nth-child(3)").hide();
  $("#example td:nth-child(4),th:nth-child(4)").hide();
}

function load_colum_option_2(){
  $("#example td:nth-child(1),th:nth-child(1)").hide();
  $("#example td:nth-child(2),th:nth-child(2)").hide();
  $("#example td:nth-child(4),th:nth-child(4)").hide();
}

function load_colum_option_3(){
  $("#example td:nth-child(1),th:nth-child(1)").hide();
  $("#example td:nth-child(2),th:nth-child(2)").hide();
  $("#example td:nth-child(3),th:nth-child(3)").hide();
}

function aumentar_estoque(indice, id){
  var valor_estoque = $("#input_estoque_"+indice).val();
  var valor_estoque_incrementado = parseInt(valor_estoque)+1; 
  $("#input_estoque_"+indice).val(valor_estoque_incrementado);
  $.ajax({
    url: '../produto/estoque.php',
    method: "POST",
    data: 'qtd=' + valor_estoque_incrementado + '&id=' + id,
  });
}

function diminuir_estoque(indice, id){
  var valor_estoque = $("#input_estoque_"+indice).val();
  var valor_estoque_decrementado = parseInt(valor_estoque)-1;
  
  if(valor_estoque_decrementado < 0){
    valor_estoque_decrementado = 0;
  } 

  $("#input_estoque_"+indice).val(valor_estoque_decrementado);
  $.ajax({
    url: '../produto/estoque.php',
    method: "POST",
    data: 'qtd=' + valor_estoque_decrementado + '&id=' + id,
  });
}

function load_option_0(){
  $.ajax({
    url: '../produto/produtos.php',
    method: "POST",
    data: 'type=disponivel',
    success : function(txt){
               $("#prod-linha td").remove();
                var produto = JSON.parse(txt);
                tbody_produtos(produto);
              }
  });
}

function load_option_1(){
   $.ajax({
    url: '../produto/produtos.php',
    method: "POST",
    data: 'type=indisponivel',
    success : function(txt){
                $("#prod-linha td").remove();  
                var produto = JSON.parse(txt);
                tbody_produtos(produto);
              }
  });
}

function load_option_2(){
  $.ajax({
    url: '../produto/produtos.php',
    method: "POST",
    data: 'type=todos',
    success : function(txt){
               $("#prod-linha td").remove();
                var produto = JSON.parse(txt);
                tbody_produtos(produto);
              }
  });
}

function tbody_produtos(produto){
  var glyphicon_view = '<div class="icon-link"><span class="glyphicon glyphicon-list-alt"></span></div>';
  var glyphicon_edit = '<div class="icon-link"><span class="glyphicon glyphicon-wrench"></span></div>';
  var glyphicon_del  = '<div class="icon-link"><span class="glyphicon glyphicon-minus-sign"></span></div>';
  var base_path = 'view/produto/';

  var linha = "";

  for(var i=0; i<produto.length; i++){
    linha += '<tr>';  
      linha += '<td class="id_visibilidade">'+produto[i]['id']+'</td>';
      linha += '<td class="nome_visibilidade">'+produto[i]['nome']+'</td>';
      linha += '<td class="preco_visibilidade">'+produto[i]['preco']+'</td>';
      linha += '<td class="estoque_visibilidade">'; 
      linha += '<div id="btn-group" class="btn-group" role="group" aria-label="...">';
      linha += '<button onclick="aumentar_estoque('+i+','+produto[i]['id']+');" type="button" class="btn btn-default">+</button>';
      linha += '<input id="input_estoque_'+i+'" class="input_estoque btn btn-default" value="'+produto[i]['estoque_inicial']+'">';
      linha += '<button onclick="diminuir_estoque('+i+','+produto[i]['id']+');" type="button" class="btn btn-default">-</button>';
      linha += '</div>';
      linha += '</td>';
      linha += '<td><a href="view.php?id='+produto[i]['id']+'">'+glyphicon_view+'</a></td>';
      linha += '<td><a href="edit.php?id='+produto[i]['id']+'">'+glyphicon_edit+'</a></td>';
      linha += '<td><a href="#" data-href="delete.php?id='+produto[i]['id']+'" data-toggle="modal" data-target="#confirm-delete"">'+glyphicon_del+'</a></td>';
    linha += '</tr>';
  }
  
  $("#example #prod-linha").append(linha);
}

$(document).ready( function() {
  $("#form_produto").validate({
    // Define as regras
    rules:{
      nome:{
        required: true
      },
      preco:{
        required: true
      },
      estoque_inicial:{
        required: true
      }
    },
    // Define as mensagens de erro para cada regra
    messages:{
      nome:{
        required: "Digite o nome do produto.",
      },
      preco:{
        required: "Digite o valor do produto.",
      },
      estoque_inicial:{
        required: "Informe a quantidade em estoque.",
      }
    }
  });
});

$('#confirm-delete').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

// $(document).ready(function() {
//     $('#example').DataTable();
// } );  