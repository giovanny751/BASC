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
        $this->load->model('Empresa_model');
        $this->load->model("Riesgoclasificacion_model");
        $this->load->model("Estadoaceptacion_model");
        $this->data['categoria'] = $this->Riesgoclasificacion_model->detail();
        $this->data['estadoaceptacionxcolor'] = $this->Estadoaceptacion_model->detail();
        $this->data['empresa'] = $this->Empresa_model->detail();
        if (!empty($this->data['empresa'][0]->Dim_id) && !empty($this->data['empresa'][0]->Dimdos_id)) {
            if (!empty($this->input->post("rie_id"))) {
                $this->data['rie_id'] = $this->input->post("rie_id");
            }
            $this->data['dimension'] = $this->Dimension_model->detail();
            $this->data['dimension2'] = $this->Dimension2_model->detail();
            $this->layout->view("riesgo/nuevoriesgo", $this->data);
        } else {
            redirect('index.php/administrativo/empresa', 'location');
        }
    }

    function consultaestadoxcolor() {

        $this->load->model("Color_model");
        $data = $this->Color_model->colorxestado($this->input->post('estado'));
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function consultatiporiesgo() {

        $this->load->model("Riesgoclasificaciontipo_model");
        $data = $this->Riesgoclasificaciontipo_model->tipoxcategoria($this->input->post("categoria"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function clasificacionriesgo() {
        $this->load->model("Riesgoclasificacion_model");

        $this->data['categoria'] = $this->Riesgoclasificacion_model->detailandtipo();
        $this->data['categoria2'] = $this->Riesgoclasificacion_model->detail();
        $this->layout->view("riesgo/clasificacionriesgo", $this->data);
    }

    function listadoriesgo() {
        $this->load->model('Dimension2_model');
        $this->load->model('Dimension_model');
        $this->load->model('Empresa_model');
        $this->load->model('Cargo_model');
        $this->load->model("Riesgoclasificacion_model");
        $this->data['empresa'] = $this->Empresa_model->detail();
        if (!empty($this->data['empresa'][0]->Dim_id) && !empty($this->data['empresa'][0]->Dimdos_id)) {
            $this->data['clasificacion'] = $this->Riesgoclasificacion_model->detail();
            $this->data['cargo'] = $this->Cargo_model->detail();
            $this->data['dimension'] = $this->Dimension_model->detail();
            $this->data['dimension2'] = $this->Dimension2_model->detail();
            $this->layout->view("riesgo/listadoriesgo", $this->data);
        } else {
            redirect('index.php/administrativo/empresa', 'location');
        }
    }

    function estadosaceptacion() {
        $this->load->model("Estadoaceptacion_model");
        $this->data['estadoaceptacion'] = $this->Estadoaceptacion_model->detailandcolor();
        $this->data['estadoaceptacionxcolor'] = $this->Estadoaceptacion_model->detail();
        $this->layout->view("riesgo/estadosaceptacion", $this->data);
    }

    function guardaestadoaceptacion() {
        $this->load->model("Estadoaceptacion_model");
        if (empty($this->Estadoaceptacion_model->consultxname($this->input->post("estadoaceptacion")))) {
            $this->Estadoaceptacion_model->insert($this->input->post("estadoaceptacion"));
            $data = $this->Estadoaceptacion_model->detail();
            $this->output->set_content_type('application/json')->set_output(json_encode($data));
        } else {
            echo 1;
        }
    }

    function guardarcolorxestado() {
        $this->load->model("Estadoaceptacion_model");
        $this->load->model("Color_model");
        if (empty($this->Color_model->exist($this->input->post("estados"), $this->input->post("color")))) {
            $this->Color_model->create($this->input->post("estados"), $this->input->post("color"));
            $data = $this->Estadoaceptacion_model->detailandcolor();
            $this->output->set_content_type('application/json')->set_output(json_encode($data));
        } else {
            echo 1;
        }
    }

    function guardarclasificacionriesgo() {
        try {
            $this->load->model("Riesgoclasificacion_model");
            if (empty($this->Riesgoclasificacion_model->detailxcategoria($this->input->post('categoria')))) {
                $this->Riesgoclasificacion_model->create($this->input->post('categoria'));
                $data = $this->Riesgoclasificacion_model->detailandtipo();
                $this->output->set_content_type('application/json')->set_output(json_encode($data));
            } else {
                echo 1;
            }
        } catch (exception $e) {
            
        }
    }

    function guardartipocategoria() {

        try {
            $this->load->model("Riesgoclasificacion_model");
            $this->load->model("Riesgoclasificaciontipo_model");
            if (empty($this->Riesgoclasificaciontipo_model->exist($this->input->post("categoria"), $this->input->post("tipo")))) {
                $this->Riesgoclasificaciontipo_model->create(
                        $this->input->post("categoria"), $this->input->post("tipo")
                );
                $data = $this->Riesgoclasificacion_model->detailandtipo();
                $this->output->set_content_type('application/json')->set_output(json_encode($data));
            } else {
                echo 1;
            }
        } catch (exception $e) {
            
        }
    }
    function consultatiporiesgoxclasificacion(){
        
        $this->load->model("Riesgoclasificaciontipo_model");
        $data = $this->Riesgoclasificaciontipo_model->tipoxcategoria($this->input->post("categoria"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */