<?php
$tag->div(['class'=>'container-fluid']);
	$tag->div(['class'=>'row']);
		$tag->div(['class'=>'col-md-12']);
	  		$tag->h1();
	    		$tag->printer($config['project_name']);
	  		$tag->h1;
	    	
	    	$tag->a('href="'.$config['produtos']['produtos_new_path'].'"');
		    	$tag->printer('Novo Produto');
		    $tag->a;
		    
		    $tag->printer('|');

		    $tag->a('href="'.$config['produtos']['produtos_path'].'"');
		    	$tag->printer('Listar Produtos');
		    $tag->a;
	  $tag->div;
	$tag->div;
$tag->div;