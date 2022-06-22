<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Registro extends RV_Controller
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Registro_model', 'rm');
        $this->load->model('Procedencia_model', 'pm');
        $this->load->model('Area_model', 'am');
        $this->load->model('Dependencias_model', 'dm');
        $this->load->model('Proveedores_model', 'pro');

        $usuarioId = $this->session->userdata('Usuario_Id');
        if (!isset($usuarioId)) {
            redirect(base_url() . 'Ingreso_Sistema');
        }
    }
    //Funciones
    public function index()
    {
        $edad = $this->rm->ObtenerEdades();
        $procedencia = $this->pm->ObtenerProcedencias();
        $area = $this->am->ObtenerAreas();
        $proveedor = $this->pro->ObtenerProveedores();
        $dependencia = $this->dm->ObtenerDependencias();

        $data = array(
            "view" => "Formulario",
            "edades" => $edad,
            "procedencias" => $procedencia,
            "areas" => $area,
            "proveedores" => $proveedor,
            "dependencias" => $dependencia,


        );
        $this->load->view('plantilla', $data);
    }
    public function RegistroDatosPersona()
    {
        $this->db->trans_begin();

        $data = array(
            'Persona_Nombre' => $this->input->post("Persona_Nombre"),
            'Persona_ApellidoP' => $this->input->post("Persona_ApellidoP"),
            'Persona_ApellidoM' => $this->input->post("Persona_ApellidoM"),
            'Persona_Sexo' => $this->input->post("Persona_Sexo"),
            'Persona_Telefono' => $this->input->post("Persona_Telefono"),
            'Persona_Email' => $this->input->post("Persona_Email"),
            'Edad_Id' => $this->input->post("Edad_Id")

        );

        $this->db->insert('Persona', $data);

        $persona_id = $this->db->insert_id();
        if (!$persona_id) {
            $this->db->trans_rollback();
            return false;
        }
        $data = array(
            'Visitante_MotivoVisita' => $this->input->post("Visitante_MotivoVisita"),
            'Persona_Id' => $persona_id

        );

        $this->db->insert('Visitante', $data);

        $visitante_id = $this->db->insert_id();
        if (!$visitante_id) {
            $this->db->trans_rollback();

            return false;
        }
        $data = array(
            'Procedencia_Id' => $this->input->post("Procedencia_Id"),
            'Area_Id' => $this->input->post("Area_Id"),
            'CatalogoDependencia_Id' => $this->input->post("CatalogoDependencia_Id"),
            'CatalogoProveedor_Id' => $this->input->post("CatalogoProveedor_Id"),
            'Persona_Id' => $persona_id
        );

        $this->db->insert('Formulario', $data);
        /*print_r($data);
            die();*/

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
            redirect(base_url("AprobacionRegistro"));
        }
    }
}
