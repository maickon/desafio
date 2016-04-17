<?php
require '../../init.php';
require '../../header.php';
require '../helper.php';

$produto = new Produto('');
$produto_select = $produto->select($produto->getTable(), null, [['id','=', $_GET['id'] ? $_GET['id'] : ' ']]);

$tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>$config['css_path'].'index.css']);
$tag->script('src="'.$config['js_path'].'index.js"'); $tag->script;
    
$form->_row();
	$form->_container();
		$tag->div('class="col-md-4 col-md-offset-4"');
			$tag->br();
			//se requisicao enviada
			if(isset($_REQUEST['action'])):	
				$produto_edit = new Produto('');
				$produto_edit->update_data($_REQUEST);
			endif;

	  		$tag->div('class="panel panel-default"');
				$tag->div('class="panel-heading"');
					$tag->span('class="title"');
						$tag->printer($config['labels']['produto']);
					$tag->span;
				$tag->div;

				$tag->div('class="panel-body"');
			  		$form->_form(['method'=>'post', 'id'=>'form_produto', 'name'=>'new-user', 'enctype'=>'multipart/form-data', 'class'=>'form-group', 'data-toggle'=>'validator']);
			  		
				  			//a funcao helper abaixo vai gerar um campo nome junto com um label
				  			helper_form_input($config['labels']['nome'], ['name'=>'nome', 'class'=>'form-control', 'id'=>'nome', 'value'=>$produto_select[0]['nome']],12);
				  				
				  			//preco
					  		helper_form_input($config['labels']['preco'], ['name'=>'preco', 'class'=>'form-control', 'id'=>'preco', 'value'=>$produto_select[0]['preco']],12);
				
				  			//quantidade em estoque
				  			helper_form_input($config['labels']['estoque'], ['name'=>'estoque_inicial', 'class'=>'form-control', 'id'=>'estoque', 'value'=>$produto_select[0]['estoque_inicial']],12);
						$tag->div;

						$tag->div('class="panel-footer"');
				  			//botao submit e voltar 
				  			helper_form_button_update_and_back($config['base_url'].$config['produtos']['produtos_path'], 0);
					$form->form_();
				$tag->div;		
		  	$tag->div;	
	  	$tag->div;
	$form->_container();
$form->row_();

$tag->div;
require '../../footer.php';
