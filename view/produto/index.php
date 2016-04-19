<?php
require '../../init.php';
require '../../header.php';
require '../helper.php';

//chama a mensagem de alert 
helper_modal_alert_confirm();
$tag->link(['rel'=>'stylesheet', 'type'=>'text/css', 'href'=>''.$config['css_path'].'index.css']);
$tag->script('src="'.$config['js_path'].'index.js"'); $tag->script;	

$form->_row();
	$form->_container();
		$tag->br();
		$form->_col(12);
			if(isset($_GET['status']) && ($_GET['status'] == 'del'))
				new Flashmsg('success',$config['labels']['flash_delete_success_msg']);
		$form->col_();

		$form->_col(12);
			
			$form->_col(5);
		  		$tag->span('class="title"');
		    		$tag->printer($config['labels']['produto']);
		  		$tag->span;
		  	$form->col_();
		  	$options = [ 	//link 		  // label
		  					[ '#',$config['labels']['disponiveis']   ], 
		  					[ '#',$config['labels']['indisponiveis'] ],
		  					[ '#',$config['labels']['todos'] ]
		  				];

		  	$options_column = [ 		//link 		  // label
		  					[ '#',$config['labels']['id']   ], 
		  					[ '#',$config['labels']['nome'] ],
		  					[ '#',$config['labels']['preco'] ],
		  					[ '#',$config['labels']['estoque'] ]
		  				];


		  	$form->_col(2);
				helper_single_button_dropdown($config['labels']['listar'], $options);
			$form->col_();

		  	$form->_col(2);
				helper_single_button_dropdown($config['labels']['listar_coluna'], $options_column, 'load_colum_option_');
			$form->col_();

			$form->_col(2);	
			    $tag->a('href="#" onClick="reset();" class="btn btn-default"');
			    	$tag->printer($config['labels']['reset_filtro_btn']);
			    $tag->a;
			$form->col_();

			$form->_col(1);	
			    $tag->a('href="'.$config['produtos']['produtos_new_file'].'" data-bind="click: addProduto" class="btn btn-primary"');
			    	$tag->printer($config['labels']['new']);
			    $tag->a;
			$form->col_();

	    	$tag->table('id="example" class="display table table-striped table-bordered dataTable no-footer"');
		      	$tag->thead();
		        	$tag->tr('id="head" role="row"');
		        		$form->th($config['labels']['id']);
			        	
						$form->th($config['labels']['nome']);
						
						$form->th($config['labels']['preco']);
					
						$form->th($config['labels']['estoque']);

						$form->th($config['labels']['view']);

						$form->th($config['labels']['update']);

						$form->th($config['labels']['delete']);
		        	$tag->tr;
		      	$tag->thead;

		      	$tag->tbody('id="prod-linha"');
			  //       foreach($produtos as $a):
					// 	$tag->tr();
					// 		$form->td($a['id']);
					// 		$form->td($a['nome']);
					// 		$form->td($a['preco']);
					// 		$form->td($a['estoque_inicial']);
							
					// 		//parametros aceitaveis
					// 		//produtos_view_path - produtos_edit_path - produtos_delete_path
					// 		helper_componentes_buttons(['produtos_view_path','produtos_edit_path','produtos_delete_path'],$a['id']);
					// 	$tag->tr;
					// endforeach;
		      	$tag->tbody;
		    $tag->table;


	    	$tag->br();
	  	$form->col_();
	$form->_container();
$form->row_();

$tag->div;
require '../../footer.php';
