<?php

class Comentarios_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function InsertarComentarios(){
        $this->db->select('*');
        $this->db->from('Opiniones');
        $query = $this->db->get();
        return $query->result_array();
    }
}