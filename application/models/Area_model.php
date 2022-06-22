<?php

class Area_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function ObtenerAreas(){
        $this->db->select('*');
        $this->db->from('Area');
        $query = $this->db->get();
        return $query->result_array();
    }
}
