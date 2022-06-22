<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Roles extends RV_Controller
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Roles_model', 'rm');
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
        $roles = $this->rm->ObtenerRoles();
        $data = array(
            "view" => "Roles",
            "rol" => $roles,
        );

        $this->load->view('plantilla', $data);
    }
    public function RegistrarRoles()
    {
        $data = array(
            'PersonaRol_Tipo' => $this->input->post("PersonaRol_Tipo"),

        );

        $this->db->insert('PersonaRol', $data);

        redirect(base_url("Configuracion_Sistema"));
    }
}
