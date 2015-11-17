<?php

class Indicadorcarpeta_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function guardarCarpeta($data){
        $this->db->insert("indicador_carpeta",$data);
        return $this->db->insert_id();
    }
    function consultaCarpetaxId($id){
        $this->db->where("indCar_id",$id);
        $valor = $this->db->get("indicador_carpeta");
        return $valor->result();
    }
    function consultaIndicadoryRegistroxInd($id){
        $this->db->where("ind_id",$id);
        $valor = $this->db->get("indicador_carpeta");
        return $valor->result();
    }
}

?>