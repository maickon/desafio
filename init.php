<?php
require 'config.php';

//carrega uma classe quando instanciada
//por padrao o nome da pasta de cada classe
//deve ser igual ao nome da classe

function __autoload($class){
	global $config;
	if(file_exists($config['core_path'].strtolower($class).DIRECTORY_SEPARATOR.strtolower($class).'.class.php')):
		require $config['core_path'].strtolower($class).DIRECTORY_SEPARATOR.strtolower($class).'.class.php';
	elseif(file_exists('../'.$config['core_path'].strtolower($class).DIRECTORY_SEPARATOR.strtolower($class).'.class.php')):
		require '../'.$config['core_path'].strtolower($class).DIRECTORY_SEPARATOR.strtolower($class).'.class.php';
	endif;
}

$tag = new Tags;