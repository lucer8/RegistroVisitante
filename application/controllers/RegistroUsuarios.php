<?php


defined('BASEPATH') or exit('No direct script access allowed');

class RegistroUsuarios extends RV_Controller
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Usuarios_model', 'um');
        
        $usuarioId = $this->session->userdata('Usuario_Id');
		if (!isset($usuarioId)) {
			redirect(base_url().'Ingreso_Sistema');
		}
        $usuarioId = $this->session->userdata('Usuario_Id');
        $rolId = $this->session->userdata('PersonaRol_Id');
         if (!isset($usuarioId)) {
             redirect(base_url().'Ingreso_Sistema');
         }
         if (($rolId)==3) {
             redirect(base_url().'Registro');
         }
         if (($rolId)==2) {
             redirect(base_url().'Departamento');
         }
    }

    //Funciones
    public function index(){

        $usuario = $this->um->ObtenerUsuarios();

        $data = array(
            "view" => "Usuarios",
            "usuarios" => "usuario",
        );

        $this->load->view('plantilla', $data);
    }
}
