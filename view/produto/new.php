<?php
require '../../header.php';
require '../helper.php';

$form->_row();
	$form->_container();
		$tag->div('class="col-md-12 col-md-offset-4"');
			//se requisicao enviada
			if(isset($_REQUEST['action'])):
				$form->_col(12);
					$new_produto = new Produto('');
					$new_produto->create($_REQUEST);
				$form->col_();
			endif;
			
	  		$tag->span('class="title"');
	    		$tag->printer('Novo Produto');
	  		$tag->span;

	  		$form->_form(['method'=>'post', 'name'=>'new-user', 'enctype'=>'multipart/form-data', 'class'=>'form-group', 'data-toggle'=>'validator']);
		  		$form->_col(12);
		  			//a funcao helper abaixo vai gerar um campo nome junto com um label
		  			helper_form_input($config['labels']['nome'], ['name'=>'nome', 'class'=>'form-control', 'id'=>'nome']);
		  		$form->col_();
		  		
		  		$form->_col(12);
		  			//preco
			  		helper_form_input($config['labels']['preco'], ['name'=>'preco', 'class'=>'form-control', 'id'=>'preco']);
		  		$form->col_();
		
		  		$form->_col(12);
		  			//quantidade em estoque
		  			helper_form_input($config['labels']['estoque'], ['name'=>'estoque_inicial', 'class'=>'form-control', 'id'=>'estoque']);
		  		$form->col_();
		  		
		  		$form->_col(12);
		  			//botao submit e voltar 
		  			helper_form_button_submit_and_back($config['base_url'].$config['produtos']['produtos_path']);
		  		$form->col_();	
		  	$form->form_();
	  	$tag->div;
	$form->_container();
$form->row_();

require '../../footer.php';
