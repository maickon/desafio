<?php
abstract class Db_persistence extends Db{
	protected $table;
	protected $path;
	protected $warning_msg;
	protected $danger_msg;
	protected $success_msg;
	protected $alert_msg;
	
	function __construct($table, $path){
		global $config;
		parent::__construct();
		$this->table = $table;
		$this->path = $path;
		$this->warning_msg 	= $config['labels']['warning_msg'];
		$this->danger_msg 	= $config['labels']['danger_msg'];
		$this->success_msg 	= $config['labels']['success_msg'];
	}
	
	function create($params){
		$fields = [];
		$values = [];
		foreach($params as $key => $attr):
			if(!empty($attr) and ($attr != 'Cadastrar') and ($key != 'file_name') and ($key != 'acceptcookiefreecounterstat') and ($key != 'PHPSESSID') and ($key != 'counter_nv') and ($key != '__utma') and ($key != '__utmz')):
				if(!is_array($attr)):
					$this->$key = $attr;
					$fields[] = $key;
					$values[] = $attr;
				endif;
			endif;
		endforeach;
				
		if($this->check_duplicate_name($values) != ' '):
			new Flashmsg('success', $this->warning_msg);
		elseif($this->insert($this->table, $fields, $values)):
			new Flashmsg('success', $this->success_msg);
		else:
			new Flashmsg('danger', $this->danger_msg);
		endif;
	}
	
	function update_data($params, $file = true){
		$fields = [];
		$values = [];
		foreach($params as $key => $attr):
			if(!empty($attr) and ($attr != 'Atualizar') and ($key != 'old_file') and ($key != 'acceptcookiefreecounterstat') and ($key != 'PHPSESSID') and ($key != 'counter_nv') and ($key != '__utma') and ($key != '__utmz')):
				if(!is_array($attr)):
					$this->$key = $attr;
					$fields[] = $key;
					$values[] = $attr;
				endif;
			endif;
		endforeach;
		
		if($this->check_duplicate_name($values) != ' '):
			new Flashmsg('warning', $this->warning_msg);	
		elseif($this->update($this->table, $fields, $values, 'id', $params['id'])):
			new Flashmsg('success', $this->success_msg);
		else:
			new Flashmsg('danger', $this->danger_msg);
		endif;
	}
	
	function delete_data($params){
		$msg = null;
		if($this->delete($this->table, [['id', '=', $params[0]['id']]])):
			$msg = 1;
		else:
			$msg = 0;
		endif;
		return $msg;;
	}
	
	function check_duplicate_name($values){
		$alert = ' ';
		$s = $this->select($this->table, ['nome']);
		for($i=0; $i<count($s); $i++):
			if($s[$i]['nome'] == $values[1]):
				$alert .= $this->alert_msg;
			endif;
		endfor;
		
		return $alert;
		
	}
}