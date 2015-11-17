<?php

class Indicadortipo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        $this->db->insert_batch("indicador_tipo", $data);
    }

    function update($data) {
        $this->db->update("indicador_tipo", $data);
    }

    function detail() {
        $tipoind = $this->db->get("indicador_tipo");
        return $tipoind->result();
    }

    function consultxname($name) {
        $this->db->where("indTip_tipo", $name);
        $tipoIndicador = $this->db->get("indicador_tipo");
        return $tipoIndicador->result();
    }

    function delete($id) {
        $this->db->where("indTip_id", $id);
        $this->db->delete("indicador_tipo");
    }

    function consultadimensionxid($indTip_id) {
        $this->db->where("indTip_id", $indTip_id);
        $dim = $this->db->get("indicador_tipo");
        return $dim->result();
    }

    function guardarmodificaciondimension($Tipo, $id) {
        $this->db->where("indTip_id", $id);
        $this->db->set("indTip_tipo", $Tipo);
        $this->db->update("indicador_tipo");
    }
    function tipoIndicadorxId($id){
        $this->db->where("indTip_id", $id);
        $tipoIndicador = $this->db->get("indicador_tipo");
        return $tipoIndicador->result();
    }

}

?>