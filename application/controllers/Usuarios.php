<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends RV_Controller
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Usuarios_model', 'um');
        $this->load->model('Roles_model', 'rm');
        $this->load->model('EstatusUsuario_model', 'eum');


       $usuarioId = $this->session->userdata('Usuario_Id');
        $rolId = $this->session->userdata('PersonaRol_Id');
         if (!isset($usuarioId)) {
             redirect(base_url().'Ingreso_Sistema');
         }
         if (($rolId)==3) {
             redirect(base_url().'Registro');
         }
         if (($rolId)==2) {
             redirect(base_url().'Departamento');
         }
       }
    
    //Funciones
    public function index()
    {
        $usuarios = $this->um->ObtenerUsuarios();
        $roles = $this->rm->ObtenerRoles();

        $data = array(
            "view" => "Usuarios",
            "usuario" => $usuarios,
            "rol" => $roles,

        );
        $this->load->view('plantilla', $data);
    }

    public function RegistrarUsuarios()
    {
        $contrasena = $this->input->post("Usuario_Contraseña");
        $contrasena = md5($contrasena);

        $data = array(
            'Usuario_Nombre' => $this->input->post("Usuario_Nombre"),
            'PersonaRol_Id' => $this->input->post("PersonaRol_Id"),
            'Usuario_Contraseña' => $contrasena,
        );


        $this->db->insert('Usuario', $data);

        redirect(base_url("Configuracion_Sistema"));
    }

    /*************************************************************************** */
    //Activar o desactivar Usuario
	public function actualizarEstatusUsuario()
	{
		$usuarioId = $this->input->post('Usuario_Id');
		$estatus = $this->input->post('Estatus_Valor');
		$resultado = $this->eum->actualizarEstatusUsuario($usuarioId, $estatus);
		echo json_encode($resultado);
	}
    /****************************************************************************** */
}
