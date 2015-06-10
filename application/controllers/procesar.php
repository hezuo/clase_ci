<?php

class procesar  extends  CI_Controller{

    public function formulario(){



    	$this->load->helper(array('form', 'url','html'));
    	
    	$this->load->library('form_validation');
    	$this->form_validation->set_rules('remitente', 'XXXX', 'required');
    	$this->form_validation->set_rules('mensaje', 'ZZZ', 'required');
    	$this->form_validation->set_rules('correo', 'YYY', 'required');
    	
    	if ($this->form_validation->run() == FALSE)
    	{
    		echo 'error';
    	}
    	else
    	{
    		echo 'success';
    	}
    	
    	
    	$data["remitente"] = array( 'name' => 'remitente',
    			'id'          => 'remitente',
    			'class'       => 'form-control',
    			'maxlength'   => '100',
    			'size'        => '50');
    	
    	$data["correo"] = array( 'name' => 'correo',
    			'id'          => 'correo',
    			'class'       => 'form-control',
    			'maxlength'   => '150');
    	
    	$data["mensaje"] = array( 'name' => 'mensaje',
    			'id'          => 'mensaje',
    			'class'       => 'form-control');
    	$data["ciudades"] = array( 'lima' => 'Lima',
    			'arequipa'          => 'Arequipa',
    			'cuzco'       => 'Cuzco',
    			'piura'       => 'Piura',
    			'trujillo'       => 'Trujillo'
    	);
    	
    	$this->load->view('shared/header');
    	$this->load->view('paginas/contacto', $data);
    	$this->load->view('shared/footer');
    }
}