<?php
class ProcesarPago_model extends CI_Model {

	public function listar(){
		$result = $this->db->get('mensaje');
		//return $this->db->query('select * from mensaje');
		
		return $result->result();
	}
}