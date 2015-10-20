<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Documento extends My_Controller {

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

    function documento(){
        
        $this->layout->view("documento/documento");
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */