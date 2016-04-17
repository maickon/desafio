<?php
//configuracao do DB
require 'config/db/database.php';
//configuracao de urls
require 'config/routes/routes.php';
//configuracao de labels
require 'config/labels/labels.php';
//configuracao de menus
require 'config/menus/menu.php';

//arquivo de configuracao
$config = 
[	
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
	//listagem de itens de menu
	'menu' 			=> $menu,
	//nome do projeto
	'project_name'	=> 'Projeto de Desafio'

];