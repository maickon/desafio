<?php

require '../../header.php';
require '../helper.php';

$produto = new Produto('');
$produto_selecionado = $produto->select($produto->getTable(),null,[ ['id','=', $_GET['id']] ]);

$form->_row();
	$form->_container();
		$form->_col(12);
			
			$tag->br();

			$tag->div('class="panel panel-default"');
				$tag->div('class="panel-heading"');
					$tag->span('class="title"');
						$tag->printer($config['labels']['produto']);
					$tag->span;
				$tag->div;

				$tag->div('class="panel-body"');
					$tag->printer($config['labels']['id'].': '.$produto_selecionado[0]['id']);
					$tag->br();
					$tag->printer($config['labels']['nome'].': '.$produto_selecionado[0]['nome']);
					$tag->br();
					$tag->printer($config['labels']['preco'].': '.$produto_selecionado[0]['preco']);
					$tag->br();
					$tag->printer($config['labels']['estoque'].': '.$produto_selecionado[0]['estoque_inicial']);
					$tag->br();
				$tag->div;

				$tag->div('class="panel-footer"');
					
					$tag->a('href='.$config['base_url'].$config['produtos']['produtos_path'].' class="btn btn-default"');
						$tag->printer($config['labels']['back']);
					$tag->a;

					$tag->a('href="'.$config['base_url'].$config['produtos']['produtos_edit_path'].'?id='.$produto_selecionado[0]['id'].'" class="btn btn-primary"');
						$tag->printer($config['labels']['update']);
					$tag->a;

					$tag->a('href="'.$config['base_url'].$config['produtos']['produtos_delete_path'].'?id='.$produto_selecionado[0]['id'].'" class="btn btn-danger"');
						$tag->printer($config['labels']['delete']);
					$tag->a;

					$tag->a('href="'.$config['base_url'].$config['produtos']['produtos_new_path'].'" class="btn btn-success"');
						$tag->printer($config['labels']['new']);
					$tag->a;
				$tag->div;				
			$tag->div;
		$form->col_();
	$form->_container();
$form->row_();

require '../../footer.php';