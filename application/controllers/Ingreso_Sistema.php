<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Ingreso_Sistema extends RV_Controller
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        /*$this->load->helper('url');*/
        $this->load->model('Login_model', 'lm');
    }

    //Funciones
    public function index()
    {
        $data = array(
            "view" => "Login",
        );

        $this->load->view('plantilla', $data);
        $this->load->view('Login_js');
    }
    public function ingresar()
    {
        $usuario = $this->input->post('usuario');
        $contrasena = $this->input->post('contrasena');
        $datosU = $this->lm->ObtenerUsuario($usuario, $contrasena);

        if ($datosU['total'] == 1) {
            $this->session->set_userdata($datosU['datos']);
        }
        echo json_encode($datosU);
    }
    public function cerrarSesion()
    {
        $this->session
            ->unset_userdata(
                array(
                    'Usuario_Id', 'Usuario_Nombre', 'Persona_Rol',
                )
            );
        $this->session->sess_destroy();
        redirect(base_url().'Ingreso_Sistema');
    }
}
