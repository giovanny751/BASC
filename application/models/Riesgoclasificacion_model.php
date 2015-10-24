<?php 
class Riesgoclasificacion_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function detail(){

        $datos = $this->db->get("riesgo_clasificacion");
        return $datos->result();
    }
    function detailandtipo(){

        $this->db->select("riesgo_clasificacion.rieCla_id");
        $this->db->select("riesgo_clasificacion.rieCla_categoria");
        $this->db->select("riesgo_clasificacion_tipo.rieClaTip_tipo");
        $this->db->join("riesgo_clasificacion_tipo","riesgo_clasificacion_tipo.rieCla_id = riesgo_clasificacion.rieCla_id","LEFT");
        $datos = $this->db->get("riesgo_clasificacion");
        return $datos->result();
    }
    function detailxcategoria($categoria){
        
        $this->db->where("rieCla_categoria",$categoria);
        $datos = $this->db->get("riesgo_clasificacion");
        return $datos->result();
    }
    
    function create($categoria){
        
        $this->db->set("rieCla_categoria",$categoria);
        $this->db->insert("riesgo_clasificacion");
    }

}
?>