<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroProveedores extends RV_Controller {
    
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
            "view" => "RegistroProveedor",            
        );
        
        $this->load->view('plantilla', $data);
    }
    
    public function RegistrarProveedor(){
        $data = array(
            'CatalogoProveedor_Nombre' => $this->input->post("CatalogoProveedor_Nombre"),
            'CatalogoProveedor_NumeroProveedor' => $this->input->post("CatalogoProveedor_NumeroProveedor"),
            'CatalogoProveedor_RFC' => $this->input->post("CatalogoProveedor_RFC"),
            'CatalogoProveedor_Estatus' => $this->input->post("CatalogoProveedor_Estatus"),
            'CatalogoProveedor_GirosProveedor' => $this->input->post("CatalogoProveedor_GirosProveedor"),
            'CatalogoProveedor_Tipo' => $this->input->post("CatalogoProveedor_Tipo"),
            'CatalogoProveedor_CalleNo' => $this->input->post("CatalogoProveedor_CalleNo"),
            'CatalogoProveedor_Colonia' => $this->input->post("CatalogoProveedor_Colonia"),
            'CatalogoProveedor_CP' => $this->input->post("CatalogoProveedor_CP"),
            'CatalogoProveedor_Region' => $this->input->post("CatalogoProveedor_Region"),
            'CatalogoProveedor_Pais' => $this->input->post("CatalogoProveedor_Pais"),
            'CatalogoProveedor_Estado' => $this->input->post("CatalogoProveedor_Estado"),
            'CatalogoProveedor_Ciudad' => $this->input->post("CatalogoProveedor_Ciudad"),
            'CatalogoProveedor_Telefono' => $this->input->post("CatalogoProveedor_Telefono"),
            'CatalogoProveedor_Email' => $this->input->post("CatalogoProveedor_Email"),
            'CatalogoProveedor_RepresentanteLegal' => $this->input->post("CatalogoProveedor_RepresentanteLegal")
        );

      $this->db->insert('CatalogoProveedor', $data);
      
    }
}
