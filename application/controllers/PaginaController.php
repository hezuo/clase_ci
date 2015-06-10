<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaController extends CI_Controller {

    public function index()
    {
        echo 'index';
    }

    public function homepage()
    {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('paginas/homepage');
    }
    
    public function contacto()
    {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->helper('form');
        
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