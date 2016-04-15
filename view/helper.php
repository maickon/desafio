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
		$form->link_button('Voltar', $path);
		echo "  ";
		$form->input_submit(['class'=>'btn btn-default', 'type'=>'submit', 'name'=>'action', 'value'=> 'Cadastrar']);
	$form->col_();
}

function helper_form_button_update_and_back($path, $size = 4){
	global $tag, $form;
	$form->_col($size);
		$form->link_button('Voltar', $path);
		echo "  ";
		$form->input_submit(['class'=>'btn btn-default', 'type'=>'submit', 'name'=>'action', 'value'=> 'Atualizar']);
	$form->col_();
}

//exibe os botoes na data-table
function helper_componentes_buttons($modulo, $id){
	global $form, $tag, $config;
	//parametros aceitaveis
	//produtos_new_path - produtos_edit_path - produtos_delete_path
	$view_path 		= $config['base_url'].$config['produtos'][$modulo[0]];
	$edit_path 		= $config['base_url'].$config['produtos'][$modulo[1]];
	$delete_path 	= $config['base_url'].$config['produtos'][$modulo[2]];

	$form->td('<a href="'.$view_path.'?id='.$id.'"><div class="icon-link"><span class="glyphicon glyphicon-list-alt"></span></div></a>');
	$form->td('<a href="'.$edit_path.'?id='.$id.'"><div class="icon-link"><span class="glyphicon glyphicon-wrench"></span></div></a>');
	$form->td('<a href="#" data-href="'.$delete_path.'?id='.$id.'" data-toggle="modal" data-target="#confirm-delete"><div class="icon-link"><span class="glyphicon glyphicon-minus-sign"></span></div></a>');
}

//chama um modal

function helper_modal_alert_confirm(){
	global $form, $tag, $config;

	$tag->div('class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"');
	
		$tag->div('class="modal-dialog"');
            $tag->div('class="modal-content"');
            
                $tag->div('class="modal-header"');
                    $tag->button('type="button" class="close" data-dismiss="modal" aria-hidden="true"');
                    	$tag->printer('&times;');
                	$tag->button;
                    
                    $tag->h4('class="modal-title" id="myModalLabel"');
                    	$tag->printer($config['labels']['modal_delete_confirm_msg']);
                    $tag->h4;
                $tag->div;
            
                $tag->div('class="modal-body"');
                    $tag->p();
                    	$tag->printer($config['labels']['modal_delete_msg1']);
                    $tag->p;
                    
                    $tag->p();
 	                   $tag->printer($config['labels']['modal_delete_msg2']);
                    $tag->p;
                    
                    $tag->p('class="debug-url"');
                    	$tag->printer('');
                   	$tag->p;
                $tag->div;
                
                $tag->div('class="modal-footer"');
                    $tag->button('type="button" class="btn btn-default" data-dismiss="modal"');
                    	$tag->printer($config['labels']['cancel']);
                    $tag->button;

                    $tag->a('class="btn btn-danger btn-ok"');
                    	$tag->printer($config['labels']['delete']);
                    $tag->a;
                $tag->div;
            $tag->div;
        $tag->div;	
	$tag->div;
}