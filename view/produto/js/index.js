$(document).ready(function(){
	$("#preco").maskMoney({
		showSymbol:true, 
		symbol:"R$", 
		decimal:".", 
		thousands:".",
		precision: 2
	});
});

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
    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});