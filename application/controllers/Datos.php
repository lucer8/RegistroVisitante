
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Datos extends RV_Controller
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Informes_model', 'im');


        $usuarioId = $this->session->userdata('Usuario_Id');
        $rolId = $this->session->userdata('PersonaRol_Id');
        if (!isset($usuarioId)) {
            redirect(base_url() . 'Ingreso_Sistema');
        }
        if (($rolId) == 3) {
            redirect(base_url() . 'Registro');
        }
    }
    public function informesDatos()
    {
        $Datos = $this->im->ObtenerInf();

        $data = array(
            "view" => "datosObtenidos",
            "datos" => $Datos,
        );
        $this->load->view('plantilla', $data);
    }
}
