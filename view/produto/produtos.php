<?php
require '../../init.php';;

$produto = new Produto('');

if(isset($_POST['type']) && ($_POST['type'] == 'disponivel')){
	$produtos = $produto->select($produto->getTable(), null, [['estoque_inicial','!=', 0]]);
	
}elseif(isset($_POST['type']) && ($_POST['type'] == 'indisponivel')){
	$produtos = $produto->select($produto->getTable(), null, [['estoque_inicial','=', 0]]);
}else{
	$produtos = $produto->select($produto->getTable());	
}

echo json_encode($produtos);