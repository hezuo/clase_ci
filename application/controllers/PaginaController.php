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
        $this->load->view('shared/header');
        $this->load->view('paginas/contacto');
        $this->load->view('shared/footer');
    }
}