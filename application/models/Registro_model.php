<?php

class Registro_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function ObtenerEdades(){
        $this->db->select('*');
        $this->db->from('Edad');
        $query = $this->db->get();
        return $query->result_array();
    }

     public function RegistroDatosPersona(){
        $this->db->select('*');
        $this->db->from('Persona');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function RegistroDatosVisitante(){
        $this->db->select('*');
        $this->db->from('Visitante');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function RegistroDatosFormulario(){
        $this->db->select('*');
        $this->db->from('Formulario');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    
    
    
    
}
