<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class AprobacionRegistro extends RV_Controller {
    
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
            "view" => "MensajeRegistroVisitante",            
        );
        
        $this->load->view('plantilla', $data);
        header('Refresh:3 ; URL=http://localhost/Registro_Visitante/index.php/Registro');

    }
}
