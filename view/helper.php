<?php
//lista de funcoes de uso geral para formularios

function helper_form_input($name, $parameters, $size = 4){
	global $form;
	$form->_col($size);
		$form->label($name, ['id' => 'label_'.$parameters['name']]);
		$form->input($parameters);
	$form->col_();
}

function helper_form_button_submit_and_back($path, $size = 4){
	global $tag, $form;
	$form->_col($size);
		$form->br();
		$form->link_button('Voltar', $path);
		echo "  ";
		$form->input_submit(['class'=>'btn btn-default', 'type'=>'submit', 'name'=>'action', 'value'=> 'Cadastrar']);
	$form->col_();
}

function helper_form_button_update_and_back($path, $size = 4){
	global $tag, $form;
	$form->_col(4);
		$form->br();
		$form->link_button('Voltar', $path);
		echo "  ";
		$form->input_submit(['class'=>'btn btn-default', 'type'=>'submit', 'name'=>'action', 'value'=> 'Atualizar']);
	$form->col_();
}