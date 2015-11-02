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
        
        $this->load->model('Indicador_model');
        $this->data['empresa'] = $this->Empresa_model->detail();
        if (!empty($this->data['empresa'][0]->Dim_id) && !empty($this->data['empresa'][0]->Dimdos_id)) {
            $this->data['tipo'] = $this->Tipo_model->detail();
            $this->data['estados'] = $this->Estados_model->detail();
            $this->data['cargo'] = $this->Cargo_model->allcargos();
            $this->data['dimension'] = $this->Dimension_model->detail();
            $this->data['dimension2'] = $this->Dimension2_model->detail();
            if (!empty($this->input->post("ind_id"))) {
                $this->data["ind_id"] = $this->input->post("ind_id");
                $this->data["indicador"] = $this->Indicador_model->detailxid($this->input->post("ind_id"))[0];
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
    
    function guardarindicador(){
        $this->load->model("Indicador_model");
        $data = array(
            "ind_indicador" => $this->input->post("indicador"),
            "tip_id" => $this->input->post("tipo"),
            "ind_mide" => $this->input->post("mide"),
            "dim_id" => $this->input->post("dimensionuno"),
            "dimdos_id" => $this->input->post("dimensiondos"),
            "ind_frecuencia" => $this->input->post("frecuencia"),
            "car_id" => $this->input->post("cargo"),
            "emp_id" => $this->input->post("nombreempleado"), 
            "ind_minimo" => $this->input->post("minimo"), 
            "ind_maximo" => $this->input->post("maximo"), 
            "est_id" => $this->input->post("estado"), 
            "ind_objetivo" => $this->input->post("objetivo"), 
            "ind_observaciones" => $this->input->post("observaciones"), 
        );
        $this->Indicador_model->create($data);
    }
    
    function consultarindicador(){
        $this->load->model("Indicador_model");
        $tabla = $this->Indicador_model->search($this->input->post("tipo"),$this->input->post("dimensionUno"),$this->input->post("dimesionDos"));
        $this->output->set_content_type('application/json')->set_output(json_encode($tabla));
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */