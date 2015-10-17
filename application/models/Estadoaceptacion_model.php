<?php

class Estadoaceptacion_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function search($estado) {
        $this->db->where("estAce_estado",$estado);
        $aceptacion =$this->db->get("estado_aceptacion");
        return $aceptacion->result();
    }
    function insert($estado) {
        $this->db->set("estAce_estado",$estado);
        $this->db->insert("estado_aceptacion");
    }
    function detail(){
        $aceptacion =$this->db->get("estado_aceptacion");
        return $aceptacion->result();
    }
    function detailandcolor(){
        $this->db->select("estado_aceptacion.estAce_id");
        $this->db->select("estado_aceptacion.estAce_estado");
        $this->db->select("color.col_color");
        $this->db->join("color","color.estAce_id = estado_aceptacion.estAce_id","LEFT");
        $aceptacion = $this->db->get("estado_aceptacion");
        return $aceptacion->result();
    }
    function consultxname($name){
        
        $this->db->where("estAce_estado",$name);
        $data = $this->db->get("estado_aceptacion");
        return $data->result();
        
    }
}

?>