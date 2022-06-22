<?php


defined('BASEPATH') or exit('No direct script access allowed');

class RegistroDependencias extends RV_Controller
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Sector_model', 'sm');
        
        $usuarioId = $this->session->userdata('Usuario_Id');
		if (!isset($usuarioId)) {
			redirect(base_url().'Ingreso_Sistema');
		}
    }

    //Funciones
    public function index(){

        $sector = $this->sm->ObtenerSectores();

        $data = array(
            "view" => "RegistroDependencia",
            "sectores" => $sector,

        );

        $this->load->view('plantilla', $data);
    }
    public function RegistrarDependencia(){
        $data = array(
            'CatalogoDependencia_Nombre' => $this->input->post("CatalogoDependencia_Nombre"),
            'Sectores_Id' => $this->input->post("Sectores_Id")
        );

        $this->db->insert('CatalogoDependencia', $data);
        redirect(base_url("Registro"));

     
    }
}