<?php
class Flashmsg{
	
	private $form;
	private $css_class;
	
	function __construct($type, $msg){
		$this->form = new Form();
		
		switch($type):
			case 'success': 
				$this->css_class = 'alert alert-success';
				$this->alert($type, $msg);
			break;
			
			case 'info': 
				$this->css_class = 'alert alert-info'; 
				$this->alert($type, $msg);
			break;
			
			case 'warning': 
				$this->css_class = 'alert alert-warning'; 
				$this->alert($type, $msg);
			break;
			
			case 'danger': 
				$this->css_class = 'alert alert-danger';
				$this->alert($type, $msg);
			break;

			case 'update':
				$this->css_class = 'alert alert-info'; 
				$this->alert($type, $msg);
			break;
		endswitch;
	}
	
	function alert($type, $msg){
		$this->form->_div(['class'=>$this->css_class.' margin-botton', 'role'=>'alert']);
			$this->form->link_to_close();
			echo "<strong>{$type}!</strong> {$msg}";
		$this->form->div_();
	}
}