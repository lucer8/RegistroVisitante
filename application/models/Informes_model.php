<?php

class Informes_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function ObtenerInf()
    {
        //print_r($this->input->post());
        $this->db->select('*');

        //Procedencia
        $this->db
            ->select("Persona_Sexo", "Area_Nombre", "Edad_Rango", "Procedencia_Nombre", "Persona_FechaCreacion")
            ->from('Formulario')
            ->join('Persona', "Persona.Persona_Id = Formulario.Persona_Id", 'left')
            ->join('Area', "Area.Area_Id = Formulario.Area_Id", 'left')
            ->join('Procedencia', "Procedencia.Procedencia_Id = Formulario.Procedencia_Id", 'left')
            ->join('Edad', "Edad.Edad_Id = Persona.Edad_Id", 'left');

        if ($this->input->post("Procedencia")) {
            $this->db->where('Procedencia_Nombre', $this->input->post("Procedencia"));
        }
        //Area
        if ($this->input->post("Area")) {
            $this->db->where('Area_Nombre', $this->input->post("Area"));
        }

        //Edad
        if ($this->input->post("Edad")) {
            $this->db->where('Edad_Rango', $this->input->post("Edad"));
        }

        //Sexo
        if ($this->input->post("Persona_Sexo")) {
            $this->db->where('Persona_Sexo', $this->input->post("Persona_Sexo"));
        }
        //Fecha inicial
        if ($this->input->post("fechaI") != "") {
            $timestamp = strtotime($this->input->post("fechaI"));
            $new_date = date("d-m-Y", $timestamp);
            $this->db->where('Persona_FechaCreacion >=', $new_date);
        }
        //Fecha termino
        if ($this->input->post("fechaT") != "") {
            $timestamp = strtotime($this->input->post("fechaT"));
            $new_date = date("d-m-Y", $timestamp);
            $this->db->where('Persona_FechaCreacion <=', $new_date . ' 23:59:59');
        }
        $query = $this->db->get();
        //print_r($this->db);
        //print_r("<pre>");
        //print_r($query->result_array());
        //print_r("</pre>");
        return $query->result_array();
    }
}
