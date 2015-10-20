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
    
    function guardarindicador(){
        try{
        $this->load->model('Indicador_model');
        $data = array(
            "car_id" => $this->input->post("cargo"),
            "dimdos_id" => $this->input->post("dimensiondos"),
            "dim_id" => $this->input->post("dimensionuno"),
            "est_id" => $this->input->post("estado"),
            "ind_frecuencia" => $this->input->post("frecuencia"),
            "ind_indicador" => $this->input->post("indicador"),
            "ind_maximo" => $this->input->post("maximo"),
            "ind_mide" => $this->input->post("mide"),
            "ind_minimo" => $this->input->post("minimo"),
            "emp_id" => $this->input->post("nombreempleado"),
            "ind_objetivo" => $this->input->post("objetivo"),
            "ind_observaciones" => $this->input->post("observaciones"),
            "tip_id" => $this->input->post("tipo")
        );
        $this->Indicador_model->create($data);
        }  catch (exception $e){
            
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
    function listaindicadores(){

        $this->load->model('Indicador_model');
        $data = $this->Indicador_model->search($this->input->post("tipo"),
        $this->input->post("dimension"),
        $this->input->post("dimensiondos"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */