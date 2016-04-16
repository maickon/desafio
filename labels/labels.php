<?php

//configuracao dos nomes que aparecem no formulario
//e dos nomes de campo no DB
$labels = 
	[
		//botoes da tabela
		'new'			=> 'Novo',
		'update'		=> '<div class="icon-link">Editar</div>',
		'delete' 		=> '<div class="icon-link">Deletar</div>',
		'view'	 		=> '<div class="icon-link">Visualizar</div>',
		'back'			=> 'Voltar',
		'cancel'		=> 'Cancelar',
		'listar'		=> 'Listar',
		'disponiveis'	=> 'Produtos disponíveis',
		'indisponiveis'	=> 'Produtos indisponíveis',
		//labels para produtos view
		'produto' 		=> 'Produtos',
		'new_produto' 	=> 'Novo Produto',
		'edit_produto' 	=> 'Editar Produto',
		'view_produto' 	=> 'Visualizar Produto',
		'id'			=> '#ID',
		'nome' 			=> 'Nome',
		'estoque'		=> 'Quantidade em estoque',
		'preco' 		=> 'Preço',
		
		//labels para produtos view DB
		'id_db'			=> 'id',
		'nome_db' 		=> 'nome',
		'estoque_db'	=> 'estoque_inicial',
		'preco_db' 		=> 'preco',


		//mensagens de alerta
		'success_msg'	=> 'Registro cadastrado com sucesso',
		'update_msg' 	=> 'Registro atualizado com sucesso.',
		'danger_msg'	=> 'Um erro ocorreu. Registro não pode ser cadastrado.',
		'warning_msg'	=> 'Já existe um registro com este nome!',

		'flash_delete_success_msg' => 'Registro deletado com sucesso.',

		//mensagens do modal
		'modal_delete_msg' 		=> 'Apagar dados',
		'modal_warning_msg1'	=> 'Você tem certeza que deseja deletar isto?',
		'modal_warning_msg2'	=> 'Ao fazer isso você estará apagando estas informações de vez da base de dados.',
		'modal_yes_msg'			=> 'Sim',
		'modal_no_msg'			=> 'Não',
		'modal_delete_msg1'		=> 'Você está prestes a deletar um produto. Este processo é irreversível.',
		'modal_delete_msg2'		=> 'Você tem certeza disso?',
		'modal_delete_confirm_msg' => 'Confirmar para deletar produto'


	];