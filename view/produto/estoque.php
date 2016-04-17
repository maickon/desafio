<?php
require '../../init.php';;

$produto = new Produto('');
$produtos = $produto->update_data(['id'=>$_POST['id'], 'estoque_inicial'=>$_POST['qtd']]);


echo json_encode($produtos);