<?php

class Dependencias_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function ObtenerDependencias(){
        $this->db->select('*');
        $this->db->from('CatalogoDependencia');
        $query = $this->db->get();
        return $query->result_array();
    }
}
