<?php

class EstatusUsuario_model extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
    }
/*************************************************************************** */
   //Para activar/desactivar Usuario
   public function actualizarEstatusUsuario($usuarioId, $estatus)
   {
       $usuarioMod = $this->session->userdata('Usuario_Id');
       $array = array(
           'Estatus' => $estatus,
           'Usuario_Modificacion' => $usuarioMod,
           'Fecha_Modificacion' => date('Y-m-d H:i:s')
       );
       $this->db->where('Usuario_Id', $usuarioId);
       $consulta = $this->db->update($this->tabla, $array);
       return $consulta;
    }
    /************************************************************************** */
}






