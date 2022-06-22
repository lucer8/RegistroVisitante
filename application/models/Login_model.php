<?php

class Login_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function ObtenerUsuario($usuario,$contrasena){
        $contrasena = md5($contrasena);
        $consulta = $this->db->select(array('Usuario_Id', 'Persona_Id', 'PersonaRol_Id'))
            ->where(array('Usuario_Nombre' => $usuario, 'Usuario_Contraseña' => $contrasena))
            ->get('Usuario');
        return array(
            'total' => $consulta->num_rows(),
            'datos' => $consulta->row_array()
        );

    }
}
