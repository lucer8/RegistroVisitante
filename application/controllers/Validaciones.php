<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Validaciones extends RV_Controller {
    
    //Constructor
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');

    }
    
    //Funciones
    public function index() {
        $data = array(
            "view" => "MensajeRegistroVisitante",            
        );
        
        $this->load->view('plantilla', $data);
    }
}
