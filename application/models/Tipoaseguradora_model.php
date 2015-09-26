<?php

class Tipoaseguradora_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function detail() {

        $tipoaseguradora = $this->db->get("tipo_aseguradora");
        return $tipoaseguradora->result();
    }
    function consultatipoaseguradora($id) {

        $this->db->where("TipAse_Id",$id);
        $tipoaseguradora = $this->db->get("tipo_aseguradora");
        return $tipoaseguradora->result();
    }


}

?>