<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Coment extends RV_Controller {
    
    //Constructor
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Comentarios_model', 'cm');

        $usuarioId = $this->session->userdata('Usuario_Id');
		if (!isset($usuarioId)) {
			redirect(base_url().'Ingreso_Sistema');
		}

    }
    
    //Funciones
    public function index() {
        $valor = $this->input->get('valor');
        $data = array(
            "view" => "Comentarios",            
        );
        
        $this->load->view('plantilla', $data);
    }
    public function InsertarComentarios(){
        $data = array(
            'Opiniones_NombreCompleto' => $this->input->post("Opiniones_NombreCompleto"),
            'Opiniones_Email' => $this->input->post("Opiniones_Email"),
            'Opiniones_Telefono' => $this->input->post("Opiniones_Telefono"),
            'Opiniones_Comentarios' => $this->input->post("Opiniones_Comentarios")
        );

      $this->db->insert('Opiniones', $data);
      redirect(base_url("Msj_Final"));

      
    }
}
