<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class nuevo extends RV_Controller {
    
    //Constructor
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
        $usuarioId = $this->session->userdata('Usuario_Id');
		if (!isset($usuarioId)) {
			redirect(base_url().'Ingreso_Sistema');
		}
    }
    
    //Funciones
    public function index() {
        $data = array(
            "view" => "nuevo",            
        );
        
        $this->load->view('plantilla', $data);


    }
}