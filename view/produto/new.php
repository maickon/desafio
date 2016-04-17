<?php
require '../../init.php';
require '../../header.php';
require '../helper.php';

$tag->script('src="'.$config['js_path'].'index.js"'); $tag->script;

$form->_row();
	$form->_container();
		$tag->div('class="col-md-4 col-md-offset-4"');
			$tag->br();
			//se requisicao enviada
			if(isset($_REQUEST['action'])):	
				$new_produto = new Produto('');
				$new_produto->create($_REQUEST);
			endif;
			
	  		$tag->div('class="panel panel-default"');
				$tag->div('class="panel-heading"');
					$tag->span('class="title"');
						$tag->printer($config['labels']['new_produto']);
					$tag->span;
				$tag->div;

				$tag->div('class="panel-body"');
			  		$form->_form(['method'=>'post', 'id'=>'form_produto', 'name'=>'new-user', 'enctype'=>'multipart/form-data', 'class'=>'form-group', 'data-toggle'=>'validator']);
			  		
				  			//a funcao helper abaixo vai gerar um campo nome junto com um label
				  			helper_form_input($config['labels']['nome'], ['name'=>'nome', 'class'=>'form-control', 'id'=>'nome', 'value'=>''],12);
				  				
				  			//preco
					  		helper_form_input($config['labels']['preco'], ['name'=>'preco', 'class'=>'form-control', 'id'=>'preco', 'value'=>''],12);
				
				  			//quantidade em estoque
				  			helper_form_input($config['labels']['estoque'], ['name'=>'estoque_inicial', 'class'=>'form-control', 'id'=>'estoque', 'value'=>''],12);
						$tag->div;

						$tag->div('class="panel-footer"');
				  			//botao submit e voltar 
				  			helper_form_button_submit_and_back($config['base_url'].$config['produtos']['produtos_path'], 0);
					$form->form_();
				$tag->div;		
		  	$tag->div;	
	  	$tag->div;
	$form->_container();
$form->row_();

$tag->div;
require '../../footer.php';
