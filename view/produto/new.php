<?php
require '../../header.php';
require '../helper.php';

$form->_row();
	$form->_container();
		$form->_col(12);
			//se requisicao enviada
			if(isset($_REQUEST['action'])):
				$form->_col(12);
					echo '<pre>';
					print_r($_REQUEST);
					$new_produto = new Produto('');
					$new_produto->create($_REQUEST);
				$form->col_();
			endif;

	  		$tag->h1();
	    		$tag->printer('Novo Produto');
	  		$tag->h1;

	  		$form->_form(['method'=>'post', 'name'=>'new-user', 'enctype'=>'multipart/form-data', 'class'=>'form-group', 'data-toggle'=>'validator']);
		  		//a funcao helper abaixo vai gerar um campo nome junto com um label
		  		helper_form_input($config['labels']['NOME'], ['name'=>'nome', 'class'=>'form-control', 'id'=>'nome']);

		  		//preco
		  		helper_form_input($config['labels']['PRECO'], ['name'=>'preco', 'class'=>'form-control', 'id'=>'preco']);

		  		//quantidade em estoque
		  		helper_form_input($config['labels']['ESTOQUE'], ['name'=>'estoque', 'class'=>'form-control', 'id'=>'estoque']);
		  		
		  		//botao submit e voltar 
		  		helper_form_button_submit_and_back($config['base_url'].$config['produtos']['produtos_path']);

		  	$form->form_();
	  	$form->col_();;
	$form->_container();
$form->row_();

require '../../footer.php';
