<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Indicador extends My_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('miscellaneous');
        $this->load->helper('security');
        $this->data["usu_id"] = $this->session->userdata('usu_id');
        validate_login($this->data["usu_id"]);
    }

    function nuevoindicador() {
        $this->load->model('Estados_model');
        $this->load->model('Cargo_model');
        $this->load->model('Empleado_model');
        $this->load->model('Dimension2_model');
        $this->load->model('Dimension_model');
        $this->load->model('Tipo_model');
        $this->load->model('Empresa_model');
        $this->data['empresa'] = $this->Empresa_model->detail();
        if (!empty($this->data['empresa'][0]->Dim_id) && !empty($this->data['empresa'][0]->Dimdos_id)) {
            $this->data['tipo'] = $this->Tipo_model->detail();
            $this->data['estados'] = $this->Estados_model->detail();
            $this->data['cargo'] = $this->Cargo_model->allcargos();
            $this->data['dimension'] = $this->Dimension_model->detail();
            $this->data['dimension2'] = $this->Dimension2_model->detail();
            if (!empty($this->input->post("ind_id"))) {
                $this->data["ind_id"] = $this->input->post("ind_id");
            }
            $this->layout->view("indicador/nuevoindicador", $this->data);
        } else {
            redirect('index.php/administrativo/empresa', 'location');
        }
    }

    function verindicadores() {
        $this->load->model('Tipo_model');
        $this->load->model('Dimension2_model');
        $this->load->model('Dimension_model');
        $this->data['dimension'] = $this->Dimension_model->detail();
        $this->data['dimension2'] = $this->Dimension2_model->detail();
        $this->data['tipo'] = $this->Tipo_model->detail();
        $this->layout->view("indicador/verindicadores", $this->data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */