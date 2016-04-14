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

//exibe os botoes na data-table
function helper_componentes_buttons($modulo, $id){
	global $form, $config;
	//parametros aceitaveis
	//produtos_new_path - produtos_edit_path - produtos_delete_path
	$view_path 		= $config['base_url'].$config['produtos'][$modulo[0]];
	$edit_path 		= $config['base_url'].$config['produtos'][$modulo[1]];
	$delete_path 	= $config['base_url'].$config['produtos'][$modulo[2]];
	
	$form->td('<a href="'.$view_path.'?id='.$id.'" class="icon-link"><span class="glyphicon glyphicon-list-alt"></span></a>');
	$form->td('<a href="'.$edit_path.'?id='.$id.'" class="icon-link"><span class="glyphicon glyphicon-wrench"></span></a>');
	$form->td('<a href="#id_url" class="icon-link" data-toggle="modal" data-id="'.$delete_path.'?id='.$id.'" data-target=".bs-example-modal-sm" ><span class="glyphicon glyphicon-minus-sign"></span></a>');
}

//chama um modal

function helper_modal_alert_confirm(){
	global $form, $tag, $config;
	
	$tag->printer('
		<script type="text/javascript">
			$(document).on("click", ".icon-link, .delete-bt", function () {
			     var myId = $(this).data(\'id\');
				 var link = document.getElementById(\'btnYes\');
				 link.href = myId;
			});
		</script>
		');
	
	//display de alert para cnfirmar exclusão
	$tag->div('class="modal fade bs-example-modal-sm" id="id_url" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"');
		$tag->div('class="modal-dialog"');
			$tag->div('class="modal-content alert alert-danger" role="danger"');
				
				$tag->div('class="modal-header"');	
					//botao de X de fechar
					$tag->button('type="button" class="close" data-dismiss="modal" aria-label="Close"');
						$tag->span('aria-hidden="true"');
							$tag->imprime('&times;');
						$tag->span;
					$tag->button;
					
					//titulo
					$tag->h3();
						$tag->imprime($config['labels']['modal_delete_msg']);
					$tag->h3;
				$tag->div; //fim header
			
				$tag->div('class="modal-body"');
					$tag->div('class="alert alert-danger" role="alert"');
						$tag->imprime($config['labels']['modal_warning_msg1']);
						$tag->br();
						$tag->imprime($config['labels']['modal_warning_msg2']);
					$tag->div;
				$tag->div;
			
				$tag->div('class="modal-footer"');
						
					$tag->a('href="" id="btnYes" class="btn btn-success"');
						$tag->imprime($config['labels']['modal_yes_msg']);
					$tag->a;
				
					$tag->a('href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-danger"');
						$tag->imprime($config['labels']['modal_no_msg']);
					$tag->a;
				$tag->div;
				
			$tag->div;
		$tag->div;
	$tag->div;
	//fim do display de alerte
}