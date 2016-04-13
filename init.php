<?php
//troque o caminho abaixo pelo caminho onde se localiza o seu projeto.
define('PATH_CONFIG','C:/xampp/htdocs/desafio-luxfacta/config.php');

//este caminho deve ser alterado confoem a localizacao do projeto.
if(file_exists(PATH_CONFIG)):
	require PATH_CONFIG;
else:
	trigger_error('Por favor, altere o caminho atribuido a varável <b>PATH_CONFIG</b> na terceira linha do arquivo init.php.',256);
endif;

//carrega uma classe quando instanciada
//por padrao o nome da pasta de cada classe
//deve ser igual ao nome da classe

function __autoload($class){
	global $config;
	$core_path = $config['base_path'].$config['core_path'].strtolower($class).DIRECTORY_SEPARATOR.strtolower($class).'.class.php';
	if(file_exists($core_path)):
		require $core_path;
	else:
		trigger_error('A classe '.$class.' não foi carregada com sucesso.',256);
	endif;
}

//objetos globais para o sistema
$tag 	= new Tags;
$form 	= new Form;