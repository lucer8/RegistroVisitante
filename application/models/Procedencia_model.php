<?php

class Procedencia_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function ObtenerProcedencias(){
        $this->db->select('*');
        $this->db->from('Procedencia');
        $query = $this->db->get();
        return $query->result_array();
    }
}
