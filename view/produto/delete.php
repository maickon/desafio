<?php
require '../../init.php';
require '../../header.php';
require '../helper.php';

$produto = new Produto('');

$delete_at_produto = $produto->select($produto->getTable(), null, [['id','=', $_GET['id'] ? $_GET['id'] : ' ']]);
$delete = $produto->delete_data($delete_at_produto);

if($delete == 1):
	header("Location:".$config['base_url'].$config['produtos']['produtos_path'].'?status=del');
else:
	header("Location:".$config['base_url'].$config['produtos']['produtos_path'].'?status=error');
endif;