<?php

class MyClase {

	
	
	public function claculcarTodo(){
		$ci =& get_instance();
		
		$ci->load->database();
		$ci->load->model('mensaje_model');
		$ci->load->model('procesarPago_model');
		
		
	}
}