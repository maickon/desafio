<?php
//configuracao do DB
require 'db/database.php';
//configuracao de urls
require 'routes/routes.php';
//configuracao de labels
require 'labels/labels.php';

//arquivo de configuracao
$config = 
[	
	//configuracao do DB
	'data_base' 	=> $data_base,
	//configuracao das pastas
	'base_url'		=> 'http://127.0.0.1/desafio-luxfacta/',
	'base_path'		=> 'C:/xampp/htdocs/desafio-luxfacta/',
	'core_path' 	=> 'core/',
	'css_path' 		=> 'css/',
	'db_path' 		=> 'db/',
	'img_path' 		=> 'images/',
	'js_path' 		=> 'js/',
	'produtos' 		=> $routes,
	//labels
	'labels' 		=> $labels,
	//nome do projeto
	'project_name'	=> 'Projeto de Desafio'

];