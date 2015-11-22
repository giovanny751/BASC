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
        $this->load->model("Indicadortipo_model");
        $this->data['indicadortipo'] = $this->Indicadortipo_model->detail();
        $this->data['empresa'] = $this->Empresa_model->detail();
        if (!empty($this->data['empresa'][0]->Dim_id) && !empty($this->data['empresa'][0]->Dimdos_id)) {
            $this->data['tipo'] = $this->Tipo_model->detail();
            $this->data['estados'] = $this->Estados_model->detail();
            $this->data['cargo'] = $this->Cargo_model->allcargos();
            $this->data['dimension'] = $this->Dimension_model->detail();
            $this->data['dimension2'] = $this->Dimension2_model->detail();
            if (!empty($this->input->post("ind_id"))) {
                $this->load->model("Indicadorvalores_model");
                $this->load->model("Indicadorcarpeta_model");
                
                $carpeta = $this->Indicadorcarpeta_model->consultaIndicadoryRegistroxInd($this->input->post("ind_id"));
                $i = array();
                foreach($carpeta as $c){
                    $i[$c->indCar_id][$c->indCar_nombre." - ".$c->indCar_descripcion] = array(1,1,1,1,1);
                }
                $this->data['carpeta'] = $i;
//                var_dump($this->data['carpeta']);die;
                $this->data['valores'] = $this->Indicadorvalores_model->consultaIndicadorxId($this->input->post("ind_id"));
                $this->data["ind_id"] = $this->input->post("ind_id");
                $this->data["indicador"] = $this->Indicador_model->detailxid($this->input->post("ind_id"))[0];
                $this->data["empleado"] = $this->Empleado_model->empleadoxcargo($this->data["indicador"]->car_id);
            }
            $this->layout->view("indicador/nuevoindicador", $this->data);
        } else {
            redirect('index.php/administrativo/empresa', 'location');
        }
    }

    function verindicadores() {
        $this->load->model('Indicadortipo_model');
        $this->load->model('Dimension2_model');
        $this->load->model('Dimension_model');
        $this->load->model('Empresa_model');
        $this->data['empresa'] = $this->Empresa_model->detail();
        if (!empty($this->data['empresa'][0]->Dim_id) && !empty($this->data['empresa'][0]->Dimdos_id)) {
            $this->data['dimension'] = $this->Dimension_model->detail();
            $this->data['dimension2'] = $this->Dimension2_model->detail();
            $this->data['tipo'] = $this->Indicadortipo_model->detail();
            $this->layout->view("indicador/verindicadores", $this->data);
        }else {
            redirect('index.php/administrativo/empresa', 'location');
        }
    }
    
    function guardarindicador(){
        $this->load->model("Indicador_model");
        $data = array(
            "ind_indicador" => $this->input->post("indicador"),
            "indTip_id" => $this->input->post("tipo"),
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
    
    function actualizarindicador(){
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
        $this->Indicador_model->actualizar($this->input->post("ind_id"),$data);
    }
        function consultaIndicadorFlechas() {
        try {
            $this->load->model("Indicador_model");
            $this->load->model('Empleado_model');
            $idIndicador = $this->input->post("idIndicador");
            $metodo = $this->input->post("metodo");
            $campos["campos"] = $this->Indicador_model->consultaIndicadorFlechas($idIndicador, $metodo)[0];
            if (!empty($campos)) {
                $data["empleado"] = $this->Empleado_model->empleadoxcargo($campos["campos"]->car_id);
                $campos = array_merge($campos,$data);
                $this->output->set_content_type('application/json')->set_output(json_encode($campos));
            }else{
                $this->output->set_content_type('application/json')->set_output("vacio");
            }
        } catch (Exception $e) {
            echo $e;die;
        }
    }
    
    function consultarindicador(){
        $this->load->model("Indicador_model");
        $tabla = $this->Indicador_model->search($this->input->post("tipo"),$this->input->post("dimensionUno"),$this->input->post("dimesionDos"));
        $i = array();
        foreach($tabla as $t){
            $i["Json"][$t->indTip_id][$t->indTip_tipo][] = array(
                    "ind_id"=>$t->ind_id,
                    "ind_indicador"=>$t->ind_indicador,
                    "dimuno"=>$t->dimuno,
                    "dimdos"=>$t->dimdos,
                    "ind_mide"=>$t->ind_mide,
                    "ind_frecuencia"=>$t->ind_frecuencia,
                    "ind_minimo"=>$t->ind_minimo,
                    "ind_maximo"=>$t->ind_maximo,
                    "nombre"=>$t->nombre
            );
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($i));
    }
    function guardarvalores(){
        $this->load->model("Indicadorvalores_model");
        $data = array(
                    "indVal_comentario"=>$this->input->post("comentarios"),
                    "usu_id"=>$this->input->post("usuario"),
                    "indVal_valor"=>$this->input->post("valor"),
                    "ind_id"=>$this->input->post("ind_id"),
                    "usu_idcreacion"=>$this->data["usu_id"],
                    "indVal_fechaCreacion"=>date("Y-m-d H:i:s")
                );
        $this->Indicadorvalores_model->guardarvalores($data);
        $data = $this->Indicadorvalores_model->consultaIndicadorxId($this->input->post("ind_id"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    function guardarcarpetatarea(){
        
        $this->load->model("Indicadorcarpeta_model");
        $data = array(
                    "indCar_nombre"=>$this->input->post("nombrecarpeta"),
                    "indCar_descripcion"=>$this->input->post("descripcioncarpeta"),
                    "ind_id"=>$this->input->post("ind_id")
                );
        $id = $this->Indicadorcarpeta_model->guardarCarpeta($data);
        $data = $this->Indicadorcarpeta_model->consultaCarpetaxId($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
    }
    function tipoindicador(){
        $this->load->model("Indicadortipo_model");
        $this->data["tipoindicadores"] = $this->Indicadortipo_model->detail();
        $this->layout->view("indicador/tipoindicador",$this->data);
    }
    function guardarmodificaciontipoindicador() {
        try {
            $this->load->model('Indicadortipo_model');
            $this->Indicadortipo_model->guardarmodificaciondimension(
                    $this->input->post('tipIndTipo'), $this->input->post('tipIndid')
            );
            $data = $this->Indicadortipo_model->tipoIndicadorxId($this->input->post('tipIndid'));
            $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
        } catch (exception $e) {
            
        }
    }
    function consultaIndicadorxid() {

        $this->load->model('Indicadortipo_model');
        $this->data['tipoIndicador'] = $this->Indicadortipo_model->consultadimensionxid($this->input->post('tipoIndicador'));
        $this->output->set_content_type('application/json')->set_output(json_encode($this->data['tipoIndicador'][0]));
    }
    function eliminarindicador() {
        $this->load->model('Indicadortipo_model');
        $this->Indicadortipo_model->delete($this->input->post('id'));
    }
    function guardarTipoIndicador() {
        $this->load->model('Indicadortipo_model');
        $data[0] = array(
            "indTip_tipo" => $this->input->post('tipoindicador')
        );
        if (empty($this->Indicadortipo_model->consultxname($this->input->post('tipoindicador')))) {
            $this->Indicadortipo_model->create($data);
            $dimension = $this->Indicadortipo_model->detail();
            $this->output->set_content_type('application/json')->set_output(json_encode($dimension));
        } else
            echo 1;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */