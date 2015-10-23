<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Formulario extends My_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Ingreso_model');
        $this->load->model('Roles_model');
        $this->load->helper('miscellaneous');
        $this->load->helper('security');
        $this->data["usu_id"] = $this->session->userdata('usu_id');
        validate_login($this->data["usu_id"]);
    }
    function formulario(){
        
        $this->layout->view("formulario/formulario");
        
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */