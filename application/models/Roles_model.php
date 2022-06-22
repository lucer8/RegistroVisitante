<?php

class Roles_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function ObtenerRoles(){
        $this->db->select('*');
        $this->db->from('PersonaRol');
        $query = $this->db->get();
        return $query->result_array();
    }
}
