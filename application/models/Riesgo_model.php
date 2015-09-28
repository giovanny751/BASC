<?php

class Riesgo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        $this->db->insert("riesgo", $data);
        return $this->db->insert_id();
    }
    function filtrobusqueda($cargo,$clasificacion,$dimension2,$dimension,$tipo){
        
        if(!empty($cargo))$this->db->where("car_id",$cargo);
        if(!empty($clasificacion))$this->db->where("cla_id",$clasificacion);
        if(!empty($dimension2))$this->db->where("dim2_id",$dimension2);
        if(!empty($dimension))$this->db->where("dim1_id",$dimension);
        if(!empty($tipo))$this->db->where("tip_id",$tipo);
        
        $this->db->select("riesgo.rie_id");
        $this->db->select("dimension2.dim_descripcion des2");
        $this->db->select("dimension.dim_descripcion des1");
        $this->db->select("riesgo.rie_zona");
        $this->db->select("riesgo.rie_descripcion");
        $this->db->select("riesgo.rie_fecha");
        $this->db->select("tipo.tip_tipo");
        $this->db->join("tipo","tipo.tip_id = riesgo.tip_id ");
        $this->db->join("dimension2","dimension2.dim_id = riesgo.dim2_id");
        $this->db->join("dimension","dimension.dim_id = riesgo.dim1_id");
        $riesgo =$this->db->get("riesgo");
        return $riesgo->result();
    }
    function riesgocargo($riesgocargo){
        
        $this->db->insert_batch("riesgo_cargo",$riesgocargo);
        
    }
}

?>