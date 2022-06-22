<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Informes extends RV_Controller {
    
    //Constructor
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model("Informes_model");
        
        $usuarioId = $this->session->userdata('Usuario_Id');
        $rolId = $this->session->userdata('PersonaRol_Id');
         if (!isset($usuarioId)) {
             redirect(base_url().'Ingreso_Sistema');
         }
         if (($rolId)==3) {
             redirect(base_url().'Registro');
         }
       
    }
    
    //Funciones
    public function index() {
        $data = array(
            "view" => "Generar_Informes",            
        );
        
        $this->load->view('plantilla', $data);
    }
    public function informesDatos(){
        $this->Informes_model->ObtenerInf();
    }
}
