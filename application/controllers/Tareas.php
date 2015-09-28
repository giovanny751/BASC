<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tareas extends My_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Ingreso_model');
        $this->load->model('Roles_model');
        $this->load->helper('miscellaneous');
        $this->load->helper('security');
        $this->data["usu_id"] = $this->session->userdata('usu_id');
        validate_login($this->data["usu_id"]);
    }

    function nuevatarea() {
        
        if($this->consultaacceso($this->data["usu_id"]))
        {  
            $this->load->model('Estados_model');
            $this->load->model('Cargo_model');
            $this->load->model('Planes_model');
            $this->load->model('Dimension2_model');
            $this->load->model('Dimension_model');
            $this->load->model('Tipo_model');
            $this->data['estados'] = $this->Estados_model->detail();
            $this->data['tipo'] = $this->Tipo_model->detail();
            $this->data['planes'] = $this->Planes_model->detail();
            $this->data['cargo'] = $this->Cargo_model->allcargos();
            $this->data['dimension'] = $this->Dimension_model->detail();
            $this->data['dimension2'] = $this->Dimension2_model->detail();
            $this->layout->view("tareas/nuevatarea",$this->data);
        }else{
            echo "no tiene permisos";
        }
    }

    function guardartarea() {
        try{
        $this->load->model('Tarea_model');
            $data = array(
                "act_id"=>$this->input->post("actividad"),
                "car_id"=>$this->input->post("cargo"),
                "claRie_id"=>$this->input->post("clasificacionriesgo"),
                "tar_costopresupuestado"=>$this->input->post("costrospresupuestados"),
                "tar_descripcion"=>$this->input->post("descripcion"),
                "dim_id"=>$this->input->post("dimensiondos"),
                "dim2_id"=>$this->input->post("dimensionuno"),
                "est_id"=>$this->input->post("estado"),
                "tar_fechaInicio"=>$this->input->post("fechaIncio"),
                "tar_fechaCreacion"=>$this->input->post("fechacreacion"),
                "tar_fechaAfiliacion"=>$this->input->post("fechafinalizacion"),
                "tar_fechaUltimaMod"=>$this->input->post("fechaultimamod"),
                "tar_nombre"=>$this->input->post("nombre"),
                "emp_id"=>$this->input->post("nombreempleado"),
                "tar_peso"=>$this->input->post("peso"),
                "tar_plan"=>$this->input->post("plan"),
                "tip_id"=>$this->input->post("tipo"),
                "tipRie_id"=>$this->input->post("tiposriesgos")
            );
            $idtarea = $this->Tarea_model->create($data);
            $articulosnorma = $this->input->post("articulosnorma");
            $data = array();
            for($i = 0; $i<count($articulosnorma); $i++):
                $data[$i] = array(
                    "nor_id" => $articulosnorma[$i],
                    "tar_id" => $idtarea
                );
            endfor;
            $this->Tarea_model->tareanorma($data);
            
        }catch(Exception $e){
            
        }
    }
    function listadotareas(){
        
        $this->layout->view("tareas/listadotareas");
        
    }

    function actividadhijo() {
        $this->load->model('Tipo_model');
        $this->data['tipo'] = $this->Tipo_model->detail();
        $this->layout->view("tareas/actividadhijo",$this->data);
    }
    
    function listadoactividades(){
        $this->load->model('Estados_model');
        $this->layout->view("tareas/listadoactividades");
    }
    function registro(){
        $this->layout->view("tareas/registro");
    }
    function agregarregistro(){
        $this->layout->view("tareas/agregarregistro");
    }
    
    function guardaractividadhijo() {
        $this->load->model('Actividad_model');
        $data[] = array(
            "pad_id"=>$this->input->post("idpadre"),
            "act_nombre"=>$this->input->post("nombre"),
            "act_fechaInicio"=>$this->input->post("fechainicio"),
            "act_fechaFinalizacion"=>$this->input->post("fechafinalizacion"),
            "act_peso"=>$this->input->post("peso"),
            "act_riesgoSancion"=>$this->input->post("riesgosancion"),
            "tip_id"=>$this->input->post("tipo"),
            "act_presupuestoTotal"=>$this->input->post("presupuestototal"),
            "act_costoReal"=>$this->input->post("costoreal"),
            "act_descripcion"=>$this->input->post("descripcion"),
            "act_modoVerificacion"=>$this->input->post("modoverificacion"),
        );
        $this->Actividad_model->create($data);
    }

    function planes() {
        $this->load->model('User_model');
        $this->load->model("Estados_model");
        $this->load->model("Cargo_model");
        $this->load->model("Planes_model");
        $this->data['plan'] = array();
        if(!empty($this->input->post('pla_id'))){
            $this->data['plan'] = $this->Planes_model->planxid($this->input->post('pla_id'));
        }
        $this->data['estado'] = $this->Estados_model->detail();
        $this->data['cargo'] = $this->Cargo_model->allcargos();
        $this->layout->view("tareas/planes",$this->data);
    }
    
    function actualizarplan(){
        try{
            $data = array(
                    "pla_avanceProgramado"=>$this->input->post("avanceprogramado"),
                    "pla_avanceReal"=>$this->input->post("avancereal"),
                    "car_id"=>$this->input->post("cargo"),
                    "pla_costoReal"=>$this->input->post("costoreal"),
                    "pla_descripcion"=>$this->input->post("descripcion"),
                    "pla_eficiencia"=>$this->input->post("eficiencia"),
                    "emp_id"=>$this->input->post("empleado"),
                    "est_id"=>$this->input->post("estado"),
                    "pla_fechaFin"=>$this->input->post("fechafin"),
                    "pla_fechaInicio"=>$this->input->post("fechainicio"),
                    "pla_nombre"=>$this->input->post("nombre"),
                    "nor_id"=>$this->input->post("norma"),
                    "pla_presupuesto"=>$this->input->post("presupuesto")
            ); 
            $this->load->model("Planes_model");
            $this->Planes_model->actualizar($data,$this->input->post('pla_id'));
            
        }  catch (Exception $e){
            
        }
    }

    function guardarplan() {
        $this->load->model("Planes_model");
        $data[] = array(
            'est_id' => $this->input->post('estado'),
            'pla_nombre' => $this->input->post('nombre'),
            'pla_descripcion' => $this->input->post('descripcion'),
            'pla_fechaInicio' => $this->input->post('fechainicio'),
            'pla_fechaFin' => $this->input->post('fechafin'),
            'pla_avanceProgramado' => $this->input->post('avanceprogramado'),
            'pla_presupuesto' => $this->input->post('presupuesto'),
            'pla_avanceReal' => $this->input->post('avancereal'),
            'pla_costoReal' => $this->input->post('costoreal'),
            'pla_eficiencia' => $this->input->post('eficiencia'),
            'pla_norma' => $this->input->post('norma'),
            'emp_id' => $this->input->post('empleado'),
            'car_id' => $this->input->post('cargo')
        );
        $this->Planes_model->create($data);
    }

    function listadoplanes() {
        $this->load->model("Estados_model");
        $this->load->model("Planes_model");
        $this->data['responsable'] = $this->Planes_model->responsables();
        $this->data['estados'] = $this->Estados_model->finalizados();
//        var_dump($this->data['responsable']);die;
        $this->layout->view("tareas/listadoplanes",$this->data);
    }

    function consultaplanes() {
        $this->load->model("Planes_model");
        $planes = $this->Planes_model->filtrobusqueda(
                $this->input->post("codigo"), $this->input->post("nombre"), $this->input->post("fecha"), $this->input->post("estado"), $this->input->post("responsable"));
        $this->output->set_content_type('application/json')->set_output(json_encode($planes));
    }
    function eliminarplan(){
        $this->load->model("Planes_model");
        $this->Planes_model->delete($this->input->post('id'));
    }

    function listadoregistros() {
        $this->layout->view("tareas/listadoregistros");
    }

    function configuracionsistema() {

        $this->layout->view("tareas/configuracionsistema");
    }
    function autocompletar() {
        $info = auto("planes", "pla_id", "pla_nombre", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }
    function autocompletarfechainicio() {
        $info = auto("planes", "pla_id", "pla_fechaInicio", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }
    function autocompletarresponsable() {
        $info = auto("planes", "pla_id", "pla_nombre", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */