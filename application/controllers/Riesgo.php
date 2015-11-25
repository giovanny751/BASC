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
        $this->load->model('Tarea_model');
        $this->load->model('Dimension2_model');
        $this->load->model('Dimension_model');
        $this->load->model('Empresa_model');
        $this->load->model("Riesgoclasificacion_model");
        $this->load->model("Estadoaceptacion_model");
        $this->load->model("Riesgo_model");
        $this->load->model("Tipo_model");
        $this->load->model("Riesgoclasificaciontipo_model");
        $this->load->model("Color_model");
        $this->load->model("Riesgocargo_model");
        $this->load->model("Cargo_model");
        $this->data['categoria'] = $this->Riesgoclasificacion_model->detail();
        $this->data['estadoaceptacionxcolor'] = $this->Estadoaceptacion_model->detail();
        $this->data['empresa'] = $this->Empresa_model->detail();
        $this->data['cargo'] = $this->Cargo_model->detail();
        if (!empty($this->data['empresa'][0]->Dim_id) && !empty($this->data['empresa'][0]->Dimdos_id)) {            
            if (!empty($this->input->post("rie_id"))) {
                $this->load->model("Planes_model");
                $this->data['rie_id'] = $this->input->post("rie_id");
                $this->data['tarea'] =$this->Tarea_model->tareaxRiesgo($this->data['rie_id']);
                $this->data['riesgo'] = $this->Riesgo_model->detailxid($this->input->post("rie_id"))[0];
                $this->data['tipo'] = $this->Riesgoclasificaciontipo_model->tipoxcategoria($this->data['riesgo']->rieCla_id);
                $this->data['color'] = $this->Color_model->colorxestado($this->data['riesgo']->estAce_id);
                $this->data['cargoId'] = $this->Riesgocargo_model->detailxid($this->input->post("rie_id"));
                $this->data['tareas'] = $this->Planes_model->tareaxplanriesgo($this->data['riesgo']->rieCla_id);
                $this->data['tareasinactivas'] = $this->Planes_model->tareaxplaninactivasriesgo($this->data['riesgo']->rieCla_id);
            }
            $this->data['dimension'] = $this->Dimension_model->detail();
            $this->data['dimension2'] = $this->Dimension2_model->detail();
            $this->layout->view("riesgo/nuevoriesgo", $this->data);
        } else {
            redirect('index.php/administrativo/empresa', 'location');
        }
    }
    
    function guardarriesgo(){   
        try{
            $this->load->model('Riesgo_model');
            $this->load->model('Riesgocargo_model');
            $this->load->model('Riesgoclasificaciontipo_model');
            $data = array(
                "rie_descripcion"=>$this->input->post("descripcion"),
                "rieCla_id"=>$this->input->post("categoria"), 
                "rieClaTip_id"=>$this->input->post("tipo"),
                "dim1_id"=>$this->input->post("dimensionuno"),
                "dim2_id"=>$this->input->post("dimensiondos"),
                "rie_zona"=>$this->input->post("zona"),
                "rie_requisito"=>$this->input->post("requisito"),
                "rie_observaciones"=>$this->input->post("observaciones"),
                "estAce_id"=>$this->input->post("estado"),
                "col_id"=>$this->input->post("color"),
                "rie_fecha"=>$this->input->post("fecha"),
                "rie_fechaCreacion"=>date("Y-m-d H:i:s")
            );
            $id = $this->Riesgo_model->create($data);
            if (!empty($this->input->post("cargo"))):
                $cargo = $this->input->post("cargo");
                for($i=0;$i<count($cargo);$i++):
                   $dataCargo[] = array("car_id"=>$cargo[$i],"rie_id"=>$id);
                endfor;
                $this->Riesgocargo_model->guardarcargo($dataCargo);
            endif;
        }catch (Exception $ex){
            
        }
    }
    function actualizarriesgo(){
        try{
            $this->load->model('Riesgo_model');
            $this->load->model('Riesgocargo_model');
            $data = array(
                "rie_descripcion"=>$this->input->post("descripcion"),
                "cat_id"=>$this->input->post("categoria"), 
                "rieClaTip_id"=>$this->input->post("tipo"),
                "dim1_id"=>$this->input->post("dimensionuno"),
                "dim2_id"=>$this->input->post("dimensiondos"),
                "rie_zona"=>$this->input->post("zona"),
                "rie_requisito"=>$this->input->post("requisito"),
                "rie_observaciones"=>$this->input->post("observaciones"),
                "estAce_id"=>$this->input->post("estado"),
                "col_id"=>$this->input->post("color"),
                "rie_fecha"=>$this->input->post("fecha"),
                "rie_fechaCreacion"=>date("Y-m-d H:i:s")
            );
            $this->Riesgo_model->atualizarriesgo($this->input->post("rie_id"),$data);
            $this->Riesgocargo_model->eliminarcargoriesgo($this->input->post("rie_id"));
            if (!empty($this->input->post("cargo"))):
                $cargo = $this->input->post("cargo");
                for($i=0;$i<count($cargo);$i++):
                   $dataCargo[] = array("car_id"=>$cargo[$i],"rie_id"=>$this->input->post("rie_id"));
                endfor;
                $this->Riesgocargo_model->guardarcargo($dataCargo);
            endif;
        }catch (Exception $ex){
            
        }
    }
    
    function listadoavance2() {
        $this->load->model('Avancetarea_model');
        $clasificacion = $this->Avancetarea_model->listado_avanceriesgo($this->input->post('clasificacionriesgo'));
        $this->output->set_content_type('application/json')->set_output(json_encode($clasificacion));
    }
    
    function consultaRiesgoFlechas() {
        try {
            $this->load->model("Riesgo_model");
            $this->load->model("Riesgocargo_model");
            $this->load->model("Riesgoclasificaciontipo_model");
            $this->load->model("Color_model");
            $idRiesgo = $this->input->post("idRiesgo");
            $metodo = $this->input->post("metodo");
            $campos["campos"] = $this->Riesgo_model->consultaRiesgoFlechas($idRiesgo, $metodo)[0];die();
            if (!empty($campos)) {
                $data["tipo"] =  $this->Riesgoclasificaciontipo_model->tipoxcategoria($campos["campos"]->cat_id);
                $data["color"] =  $this->Color_model->colorxestado($campos["campos"]->estAce_id);;
                $data["cargoId"] =  $this->Riesgocargo_model->detailxid($campos["campos"]->rie_id);
                $campos = array_merge($campos,$data);
                $this->output->set_content_type('application/json')->set_output(json_encode($campos));
            }else{
                $this->output->set_content_type('application/json')->set_output("vacio");
            }
        } catch (Exception $e) {
            echo $e;die;
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
            $this->data['categoria'] = $this->Riesgoclasificacion_model->detail();
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
    
    function busquedariesgo() {
        $this->load->model("Riesgo_model");
        $planes = $this->Riesgo_model->filtrobusqueda(
            $this->input->post("cargo"),$this->input->post("categoria"), $this->input->post("dimensionuno"), $this->input->post("dimensiondos"), $this->input->post("tipo")
        );
//        echo "<pre>";
//        var_dump($planes);die;
        $i = array();
        foreach($planes as $t){
            $i["Json"][$t->rieCla_id][$t->rieCla_categoria][] = array(
                    "rie_id"=>$t->rie_id,
                    "des2"=>$t->des2,
                    "des1"=>$t->des1,
                    "estado"=>$t->estado,
                    "rie_zona"=>$t->rie_zona,
                    "rie_descripcion"=>$t->rie_descripcion,
                    "rie_fecha"=>$t->rie_fecha,
                    "rieClaTip_tipo"=>$t->rieClaTip_tipo
            );
        }
//        echo "<pre>";
//        var_dump($i);die;
        $this->output->set_content_type('application/json')->set_output(json_encode($i));
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */