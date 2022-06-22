<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Encuesta extends RV_Controller
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Encuesta_model', 'em');
        
        $usuarioId = $this->session->userdata('Usuario_Id');
		if (!isset($usuarioId)) {
			redirect(base_url().'Ingreso_Sistema');
		}
    }

    //Funciones
    public function index()
    {
        $data = array(
            "view" => "Encuesta",
        );

        $this->load->view('plantilla', $data);
    }
    public function RegistroEncuesta(){
        $data = array(
            'Encuesta_Respuesta' => $this->input->post("Encuesta_Respuesta")

        );
        /*$this->input->post();*/
        $this->db->insert('Encuesta', $data);
        redirect(base_url("Coment"));
    }
}
