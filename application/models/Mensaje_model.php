<?php
class Mensaje_model extends CI_Model {

	
	public function guardarMensaje($input){
		$data = array(
				'ciudad' => $input['ciudades'],
				'correo' => $input['correo'],
				'remitente' => $input['remitente'],
				'mensaje' => $input['mensaje']
		);
		
		$this->db->insert('mensaje', $data);
	}
	public function listar(){
	//	$this->db->where('id > 10');
	//	$this->db->join("miotratabla",'a', 'a.id');
	//	$result = $this->db->get('mensaje');
		$id = 10;
			$result = $this->db->query('select * from mensaje where id > ?', array('id' => 1));
		
		return $result->result();
	}
}