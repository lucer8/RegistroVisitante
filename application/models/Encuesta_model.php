<?php

class Encuesta_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function RegistroEncuesta()
    {
        $this->db->select('*');
        $this->db->from('Encuesta');
        $query = $this->db->get();
        return $query->result_array();
    }
}
