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
        $this->load->model('Color_model');
        $this->load->model('Categoria_model');
        $this->load->model('Estadoaceptacion_model');
        $this->data['estadoaceptacion'] = $this->Estadoaceptacion_model->detail();
        $this->data['categoria'] = $this->Categoria_model->detail();
        $this->data['color'] = $this->Color_model->detail();
        $this->data['tipo'] = $this->Tipo_model->detail();
        $this->data['dimension'] = $this->Dimension_model->detail();
        $this->data['dimension2'] = $this->Dimension2_model->detail();
        $this->data['cargo'] = $this->Cargo_model->allcargos();
        $this->layout->view("riesgo/nuevoriesgo", $this->data);
    }
    function busquedariesgo(){
        
        try{
            $this->load->model('Riesgo_model');
            $riesgos = $this->Riesgo_model->filtrobusqueda(
                    $this->input->post("cargo"),
                    $this->input->post("clasificacion"),
                    $this->input->post("dimensiondos"),
                    $this->input->post("dimensionuno"),
                    $this->input->post("tipo")
                    );
            
        $this->output->set_content_type('application/json')->set_output(json_encode($riesgos));
        }catch(exception $e){
            
        }
        
    }
    function guardarriesgo(){
        try{
            $this->load->model('Riesgo_model');
            $riesgo = array(
              "car_id"=>$this->input->post("cargo"),  
              "act_id"=>$this->input->post("actividades"),  
              "cat_id"=>$this->input->post("categoria"),  
              "col_id"=>$this->input->post("color"),  
              "rie_descripcion"=>$this->input->post("descripcion"),  
              "dim1_id"=>$this->input->post("dimensionuno"),  
              "dim2_id"=>$this->input->post("dimensiondos"),  
              "est_id"=>$this->input->post("estado"),  
              "rie_fecha"=>$this->input->post("fecha"),  
              "rie_observaciones"=>$this->input->post("observaciones"),  
              "rie_requisito"=>$this->input->post("requisito"),  
              "tip_id"=>$this->input->post("tipo"),  
              "rie_zona"=>$this->input->post("zona")
            );
            $this->Riesgo_model->create($riesgo);
        }catch(Exception $e){
            
        }
    }
    
    function clasificacionriesgo() {

        $this->layout->view("riesgo/clasificacionriesgo");
    }
    function guardarcategoria(){
        try{
            $this->load->model('Categoria_model');
            $categoria = $this->Categoria_model->search($this->input->post("categoria"));
            if(!empty($categoria)){
                
            }else{
                $categoria = $this->Categoria_model->insert($this->input->post("categoria"));
            }
        }catch(exception $e){
            
        }
    }
    function autocompletarcategoria() {
        $info = auto("categoria", "cat_id", "cat_categoria", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }
    function autocompletarestadoaceptacion() {
        $info = auto("estado_aceptacion", "estAce_id", "estAce_estado", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
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
        $this->load->model('Estadoaceptacion_model');
        $this->data['estadoaceptacion'] = $this->Estadoaceptacion_model->detail();
        $this->layout->view("riesgo/estadosaceptacion",$this->data);
    }
    
    function guardaestadoaceptacion(){
        
        try{
            $this->load->model('Estadoaceptacion_model');
            $this->Estadoaceptacion_model->insert($this->input->post("estadoaceptacion"));
        }catch(exception $e){
            
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */