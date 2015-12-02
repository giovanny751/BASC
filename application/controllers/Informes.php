<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Informes extends My_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Ingreso_model');
        $this->load->model('Roles_model');
        $this->load->helper('security');
        $this->load->helper('miscellaneous');
        $this->data["usu_id"] = $this->session->userdata('usu_id');
        validate_login($this->data["usu_id"]);
    }

    function informeactividades(){
        
        
        $this->layout->view("informes/informeactividades");
    }
    function phva(){
        $this->load->model('Tipo_model');
        $this->data['tipo'] = $this->Tipo_model->avanceciclophva();
        $this->layout->view("informes/informephva",$this->data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */