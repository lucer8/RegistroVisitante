<?php

class RegistroProveedor_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function RegistrarProveedor(){
        $this->db->select('*');
        $this->db->from('CatalogoProveedor');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    
}
