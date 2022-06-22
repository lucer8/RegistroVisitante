<?php

class Usuarios_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function ObtenerUsuarios(){
        $this->db->select('*');
        $this->db->from('Usuario');
        $query = $this->db->get();
        return $query->result_array();



        
    }
    
}