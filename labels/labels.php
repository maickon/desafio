<?php

//configuracao dos nomes que aparecem no formulario
//e dos nomes de campo no DB
$labels = 
	[
		//botoes da tabela
		'new'			=> 'Novo',
		'update'		=> 'Atualizar',
		'delete' 		=> 'Deletar',
		'view'	 		=> 'Visualizar',
		'back'			=> 'Voltar',
		//labels para produtos view
		'produto' 		=> 'Produtos',
		'id'			=> '#ID',
		'nome' 			=> 'Nome',
		'estoque'		=> 'Produtos em estoque',
		'preco' 		=> 'Preço',
		
		//labels para produtos view DB
		'id_db'			=> 'id',
		'nome_db' 		=> 'nome',
		'estoque_db'	=> 'estoque_inicial',
		'preco_db' 		=> 'preco',


		//mensagens de alerta
		'success_msg'	=> 'Registro cadastrado com sucesso',
		'danger_msg'	=> 'Um erro ocorreu. Registro não pode ser cadastrado.',
		'warning_msg'	=> 'Já existe um registro com este nome!',

		//mensagens do modal
		'modal_delete_msg' 		=> 'Apagar dados',
		'modal_warning_msg1'	=> 'Você tem certeza que deseja deletar isto?',
		'modal_warning_msg2'	=> 'Ao fazer isso você estará apagando estas informações de vez da base de dados.',
		'modal_yes_msg'			=> 'Sim',
		'modal_no_msg'			=> 'Não'

	];