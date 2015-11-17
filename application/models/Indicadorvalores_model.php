<?php

class Indicadorvalores_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function guardarvalores($data){
        $this->db->insert("indicador_valores",$data);
    }
    function consultaIndicadorxId($id){
        $this->db->where("ind_id",$id);
        $valor = $this->db->get("indicador_valores");
        return $valor->result();
    }
}

?>