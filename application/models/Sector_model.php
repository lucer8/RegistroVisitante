<?php

class Sector_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function ObtenerSectores(){
        $this->db->select('*');
        $this->db->from('Sectores');
        $query = $this->db->get();
        return $query->result_array();
    }
}
