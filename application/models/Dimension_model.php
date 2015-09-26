<?php

class Dimension_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        $this->db->insert_batch("dimension", $data);
    }

    function update($data) {
        $this->db->update("dimension", $data);
    }

    function detail() {
        $this->db->where("est_id",1);
        $cargo = $this->db->get("dimension");
        return $cargo->result();
    }

    function delete($id) {
        $this->db->where("dim_id", $id);
        $this->db->set("est_id",3);
        $this->db->update("dimension");
    }
    function consultadimensionxid($dimid){
        $this->db->where("dim_id",$dimid);
        $this->db->where("est_id",1);
        $dim = $this->db->get("dimension");
        return $dim->result();
    }
    function guardarmodificaciondimension($descripcion,$id){
        $this->db->where("dim_id",$id);
        $this->db->set("dim_descripcion",$descripcion);
        $this->db->update("dimension");
    }
}

?>