<?php

class Riesgo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    function guardarriesgo($data){
        $this->db->insert("riesgo",$data);
    }
    function atualizarriesgo($id,$data){
        $this->db->where("rie_id",$id);
        $this->db->update("riesgo",$data);
    }

    function create($data) {
        $this->db->insert("riesgo", $data);
        return $this->db->insert_id();
    }
    function detailxid($id){
        $this->db->where("rie_id",$id);
        $tarea = $this->db->get("riesgo");
        return $tarea->result();
    }
    function filtrobusqueda($cargo,$categoria,$dimension,$dimension2,$tipo){ 
        
        if(!empty($cargo))$this->db->where("riesgo_cargo.rieCar_id",$cargo);
        if(!empty($categoria))$this->db->where("riesgo.cat_id",$categoria);
        if(!empty($dimension2))$this->db->where("riesgo.dim2_id",$dimension2);
        if(!empty($dimension))$this->db->where("riesgo.dim1_id",$dimension);
        if(!empty($tipo))$this->db->where("riesgo.rieClaTip_id",$tipo);
        
        $this->db->select("riesgo.rie_id");
        $this->db->select("dimension2.dim_descripcion des2");
        $this->db->select("dimension.dim_descripcion des1");
        $this->db->select("estado_aceptacion.estAce_estado as estado");
        $this->db->select("riesgo.rie_zona");
        $this->db->select("riesgo.rie_descripcion");
        $this->db->select("riesgo.rie_fecha");
        $this->db->select("riesgo_clasificacion_tipo.rieClaTip_tipo");
        $this->db->select("riesgo_clasificacion.rieCla_id");
        $this->db->select("riesgo_clasificacion.rieCla_categoria");
        $this->db->join("riesgo_clasificacion","riesgo_clasificacion.rieCla_id = riesgo.rieCla_id ");
        $this->db->join("riesgo_clasificacion_tipo","riesgo_clasificacion_tipo.rieClaTip_id = riesgo.rieClaTip_id ","left");
        $this->db->join("dimension2","dimension2.dim_id = riesgo.dim2_id");
        $this->db->join("dimension","dimension.dim_id = riesgo.dim1_id");
        $this->db->join("estado_aceptacion","estado_aceptacion.estAce_id = riesgo.estAce_id");
        $this->db->join("riesgo_cargo","riesgo_cargo.rie_id = riesgo.rie_id","left");
        $riesgo =$this->db->get("riesgo");
        
//        echo $this->db->last_query();die;
        
        return $riesgo->result();
    }
    function riesgocargo($riesgocargo){
        
        $this->db->insert_batch("riesgo_cargo",$riesgocargo);
        
    }
    
    function consultaRiesgoFlechas($idRiesgo,$metodo){
            switch ($metodo){
                case "flechaIzquierdaDoble":
                    $this->db->where("rie_id = (select min(rie_id) from riesgo)");
                    break;
                case "flechaIzquierda":
                    $this->db->where("rie_id < '".$idRiesgo."' ");
                    $this->db->order_by("rie_id desc");
                    break;
                case "flechaDerecha":
                    $this->db->where("rie_id > '".$idRiesgo."' ");
                    $this->db->order_by("rie_id asc");
                    break;
                case "flechaDerechaDoble":
                    $this->db->where("rie_id = (select max(rie_id) from riesgo)");
                    break;
                default :
                    die;
                    break;
            }
        $usuario = $this->db->get("riesgo",1);
        //echo $this->db->last_query();die;
        return $usuario->result();
    }
}

?>