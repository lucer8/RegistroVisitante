<?php


defined('BASEPATH') or exit('No direct script access allowed');

class RegistroDatos_Comentarios extends RV_Controller
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $usuarioId = $this->session->userdata('Usuario_Id');
        if (!isset($usuarioId)) {
            redirect(base_url() . 'Ingreso_Sistema');
        }
    }

    //Funciones
    public function index()
    {
        $data = array(
            "view" => "FormularioRegistro_Encuesta",
        );

        $this->load->view('plantilla', $data);
    }

    public function InsertarComentarios()
    {
        $data = array(
            'Opiniones_NombreCompleto' => $this->input->post("Opiniones_NombreCompleto"),
            'Opiniones_Email' => $this->input->post("Opiniones_Email"),
            'Opiniones_Telefono' => $this->input->post("Opiniones_Telefono")
        );

        $this->db->insert('Opiniones', $data);
        redirect(base_url("Msj_Final"));
    }
}
