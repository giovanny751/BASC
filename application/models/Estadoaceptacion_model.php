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


}

?>