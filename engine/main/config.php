<?php

class Config {
	private $data = array();
	
	public function __construct() {
		if(is_readable(APPLICATION_DIR . 'config.php')) {
			require_once(APPLICATION_DIR . 'config.php');
			$this->data = array_merge($this->data, $config);
			return true;
		}
		exit('Error: Configuration file not found! Path: ' . APPLICATION_DIR . 'config.php');
	}
	
	public function __set($key, $val){
		$this->data[$key] = $val;
	}
    
	public function __get($key){
		if(isset($this->data[$key])){
			return $this->data[$key];
		}
		return false;
	}
}
?>