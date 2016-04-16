<?php
require '../../header.php';
require '../helper.php';

$produto = new Produto('');

if(isset($_POST['type']) && ($_POST['type'] == 'disponivel')){
	$produtos = $produto->select($produto->getTable(), null, [['estoque_inicial','!=', 0]]);
}elseif(isset($_POST['type']) && ($_POST['type'] == 'indisponivel')){
	$produtos = $produto->select($produto->getTable(), null, [['estoque_inicial','==', 0]]);
}else{
	$produtos = $produto->select($produto->getTable());	
}

//chama a mensagem de alert 
helper_modal_alert_confirm();

$tag->script('src="'.$config['js_path'].'index.js"'); $tag->script;	

$form->_row();
	$form->_container();
		$tag->br();
		$form->_col(12);
			if(isset($_GET['status']) && ($_GET['status'] == 'del'))
				new Flashmsg('success',$config['labels']['flash_delete_success_msg']);
		$form->col_();

		$form->_col(12);
			
			$form->_col(10);
		  		$tag->span('class="title"');
		    		$tag->printer($config['labels']['produto']);
		  		$tag->span;
		  	$form->col_();
		  	$options = [ 	//link 		  // label
		  					[ '#',$config['labels']['disponiveis']   ], 
		  					[ '#',$config['labels']['indisponiveis'] ]
		  				];

		  	$form->_col(1);
				helper_single_button_dropdown($config['labels']['listar'], $options);
			$form->col_();

			$form->_col(1);	
			    $tag->a('href="'.$config['produtos']['produtos_new_file'].'" data-bind="click: addProduto" class="btn btn-primary"');
			    	$tag->printer($config['labels']['new']);
			    $tag->a;
			$form->col_();

	    	$tag->table('id="example" class="display table table-striped table-bordered dataTable no-footer"');
		      	$tag->thead();
		        	$tag->tr('role="row"');
		        		$form->th($config['labels']['id']);
			        	
						$form->th($config['labels']['nome']);
						
						$form->th($config['labels']['preco']);
					
						$form->th($config['labels']['estoque']);

						$form->th($config['labels']['view']);

						$form->th($config['labels']['update']);

						$form->th($config['labels']['delete']);
		        	$tag->tr;
		      	$tag->thead;

		      	$tag->tbody();
			        foreach($produtos as $a):
						$tag->tr();
							$form->td($a['id']);
							$form->td($a['nome']);
							$form->td($a['preco']);
							$form->td($a['estoque_inicial']);
							
							//parametros aceitaveis
							//produtos_view_path - produtos_edit_path - produtos_delete_path
							helper_componentes_buttons(['produtos_view_path','produtos_edit_path','produtos_delete_path'],$a['id']);
						$tag->tr;
					endforeach;
		      	$tag->tbody;
		    $tag->table;


	    	$tag->br();
	  	$form->col_();
	$form->_container();
$form->row_();

require '../../footer.php';