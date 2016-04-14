<?php
require '../../header.php';
require '../helper.php';

$tag->printer('
			<script type="text/javascript" charset="utf-8">
				$(document).ready(function() {
					$(\'#example\').DataTable();
				} );
			</script>
			');

$produto = new Produto('');
$produtos = $produto->select($produto->getTable());

$form->_row();
	$form->_container();
		$form->_col(12);
		
			$tag->br();

			$form->_col(11);
		  		$tag->span('class="title"');
		    		$tag->printer($config['labels']['produto']);
		  		$tag->span;
		  	$form->col_();
			
			$form->_col(1);	
			    $tag->a('href="'.$config['produtos']['produtos_new_file'].'" data-bind="click: addProduto" class="btn btn-primary"');
			    	$tag->printer('New');
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

		    //chama a mensagem de alert 
			helper_modal_alert_confirm();
			
			$tag->printer('
					<script type="text/javascript">
						// For demo to fit into DataTables site builder...
						$(\'#example\')
							.removeClass( \'display\' )
							.addClass(\'table table-striped table-bordered\');
					</script>
					');

	    	$tag->br();
	  	$form->col_();
	$form->_container();
$form->row_();

require '../../footer.php';