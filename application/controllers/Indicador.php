<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Indicador extends My_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('miscellaneous');
        $this->load->helper('security');
        validate_login($this->session->userdata('usu_id'));
    }

    function nuevoindicador(){
        $this->load->model('Estados_model');
        $this->load->model('Cargo_model');
        $this->load->model('Empleado_model');
        $this->load->model('Dimension2_model');
        $this->load->model('Dimension_model');
        
        $this->data['estados'] = $this->Estados_model->detail();
        $this->data['cargo'] = $this->Cargo_model->allcargos();
        $this->data['dimension'] = $this->Dimension_model->detail();
        $this->data['dimension2'] = $this->Dimension2_model->detail();
        $this->layout->view("indicador/nuevoindicador",$this->data);
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */