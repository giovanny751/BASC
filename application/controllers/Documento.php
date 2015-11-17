<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Documento extends My_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Documentogrupo_model');
        $this->load->helper('miscellaneous');
        $this->load->helper('security');
        $this->data["usu_id"] = $this->session->userdata('usu_id');
        validate_login($this->data["usu_id"]);
    }

    function documento(){
        $grupos = $this->Documentogrupo_model->detailgroup();
        $i = array();
        foreach($grupos as $g):
            $i[$g->docGru_id][$g->docGru_orden." - ".$g->docGru_grupo] = array(1,1,1,1,1,1);
        endforeach;
        $this->data['gruposasociados'] = $i;
        
        $this->layout->view("documento/documento",$this->data);
        
    }
    function creaciongrupo(){
        try{
            
            $data = array(
                "docGru_grupo"=>$this->input->post("grupo"),
                "docGru_orden"=>$this->input->post("orden")
            );
            if(empty($this->input->post("grupoid")))
            {
                $id = $this->Documentogrupo_model->creaciongrupo($data);
            }
            else {
                $id = $this->input->post("grupoid");
                $this->Documentogrupo_model->actualizaciongrupo($data,$id);
            }
            
            $data = $this->Documentogrupo_model->consultagrupo($id);
            $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
        }catch(exception $e){
            
        }
    }
    function eliminargrupo(){
        
        $this->Documentogrupo_model->eliminargrupo($this->input->post("grupo"));
    }
    function consultagrupo(){
        
        $data = $this->Documentogrupo_model->consultagrupo($this->input->post("grupo"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
    }
    function guardardocumento(){
        $this->load->model('Documentos_model');
        $data = array(
            "doc_encabezado"=>$this->input->post("encabezado"),
            "doc_fechaDesde"=>$this->input->post("fechadesde"),
            "doc_fechaHasta"=>$this->input->post("fechahasta"),
            "doc_nombre"=>$this->input->post("nombredocumento"),
            "doc_piePagina"=>$this->input->post("piepagina"),
            "tipDoc_id"=>$this->input->post("tipo"),
            "usu_id"=>$this->data["usu_id"],
            "doc_fechaCreacion"=>date("Y-m-d H:i:s")
        );
       $data = $this->Documentos_model->guardardocumento($data); 
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */