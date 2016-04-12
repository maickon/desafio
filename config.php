<?php

require 'db/database.php';
require 'routes/routes.php';

//arquivo de configuracao
$config = 
[	
	//configuracao do DB
	'data_base' 	=> $data_base,
	//configuracao das pastas
	'core_path' 	=> 'core/',
	'css_path' 		=> 'css/',
	'db_path' 		=> 'db/',
	'img_path' 		=> 'images/',
	'js_path' 		=> 'js/',
	'produtos' 		=> $routes,
	//nome do projeto
	'project_name'	=> 'Projeto de Desafio'

];