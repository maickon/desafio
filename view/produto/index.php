<?php
require '../../header.php';

$tag->div(['class'=>'container-fluid']);
	$tag->div(['class'=>'row']);
		$tag->div(['class'=>'col-md-12']);
	  		$tag->h1();
	    		$tag->printer('Produtos');
	  		$tag->h1;
	    	$tag->table('class="table table-striped table-bordered dataTable no-footer" id="example"');
	      	$tag->thead();
	        	$tag->tr('role="row"');
		        	$tag->th();
		            	$tag->printer('#id');
		          	$tag->th;
		          
					$tag->th();
						$tag->printer('Nome');
					$tag->th;

					$tag->th();
						$tag->printer('Preço');
					$tag->th;

					$tag->th();
						$tag->printer('Estoque');
					$tag->th;
	        	$tag->tr;
	      	$tag->thead;

	      	$tag->tbody();
		        $tag->tr('data-bind="foreach: produtos"');
		        	$tag->td('data-bind="text: $index"');
		        	$tag->td;

		        	$tag->td('data-bind="text: produto"');
		        	$tag->td; 
		        $tag->tr;
	      	$tag->tbody;
	    $tag->table;

	    $tag->br();

	    $tag->button('data-bind="click: addPerson" class="btn btn-primary"');
	    	$tag->printer('Add');
	    $tag->button;

	    $tag->a('href="'.$config['produtos']['produtos_new_path'].'" data-bind="click: addProduto" class="btn btn-primary"');
	    	$tag->printer('New');
	    $tag->a;

	  $tag->div;
	$tag->div;
$tag->div;

require '../../footer.php';