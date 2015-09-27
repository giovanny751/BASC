<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Riesgo extends My_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('miscellaneous');
        $this->load->helper('security');
        validate_login($this->session->userdata('usu_id'));
    }

    function nuevoriesgo() {
        $this->load->model('Dimension2_model');
        $this->load->model('Dimension_model');
        $this->load->model('Cargo_model');
        $this->load->model('Tipo_model');
        $this->data['tipo'] = $this->Tipo_model->detail();
        $this->data['dimension'] = $this->Dimension_model->detail();
        $this->data['dimension2'] = $this->Dimension2_model->detail();
        $this->data['cargo'] = $this->Cargo_model->allcargos();
        $this->layout->view("riesgo/nuevoriesgo", $this->data);
    }

    function clasificacionriesgo() {

        $this->layout->view("riesgo/clasificacionriesgo");
    }

    function listadoriesgo() {
        $this->load->model('Dimension2_model');
        $this->load->model('Dimension_model');
        $this->load->model('Tipo_model');
        $this->load->model('Cargo_model');
        $this->data['cargo'] = $this->Cargo_model->allcargos();
        $this->data['tipo'] = $this->Tipo_model->detail();
        $this->data['dimension'] = $this->Dimension_model->detail();
        $this->data['dimension2'] = $this->Dimension2_model->detail();
        $this->layout->view("riesgo/listadoriesgo",$this->data);
    }

    function estadosaceptacion() {

        $this->layout->view("riesgo/estadosaceptacion");
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */