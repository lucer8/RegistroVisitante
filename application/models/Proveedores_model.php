<?php

class Proveedores_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function ObtenerProveedores(){
        $this->db->select('CatalogoProveedor_Id,CatalogoProveedor_Nombre');
        $this->db->from('CatalogoProveedor');
        $query = $this->db->get();
        return $query->result_array();
    }
}
