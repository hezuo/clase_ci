<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{ 
		$this->load->database();
		$this->load->helper(array('form', 'url','html'));
		
		
		$this->load->model('mensaje_model');
		$this->load->model('procesarPago_model');
		$data['mensajes'] = $this->mensaje_model->listar();
		
		$this->load->view('shared/header');
		$this->load->view('admin/listar', $data);
		$this->load->view('shared/footer');
	}
}
