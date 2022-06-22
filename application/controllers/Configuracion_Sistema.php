<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Configuracion_Sistema extends RV_Controller
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        
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
    public function index()
    {
        $data = array(
            "view" => "Configuracion",
        );

        $this->load->view('plantilla', $data);
    }
}
