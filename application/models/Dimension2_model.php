<?php

class Dimension2_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        $this->db->insert_batch("dimension2", $data);
    }

    function update($data) {
        $this->db->update("dimension2", $data);
    }

    function detail() {
        $this->db->where("est_id", 1);
        $cargo = $this->db->get("dimension2");
        return $cargo->result();
    }
    function consultxname($name) {
        $this->db->where("dim_descripcion",$name);
        $this->db->where("est_id", 1);
        $cargo = $this->db->get("dimension2");
        return $cargo->result();
    }

    function delete($id) {
        $this->db->where("dim_id", $id);
        $this->db->set("est_id", 3);
        $this->db->update("dimension2");
    }

    function consultadimensionxid($dimid) {
        $this->db->where("dim_id", $dimid);
        $this->db->where("est_id", 1);
        $dim = $this->db->get("dimension2");
        return $dim->result();
    }

    function guardarmodificaciondimension($descripcion, $id) {
        $this->db->where("dim_id", $id);
        $this->db->set("dim_descripcion", $descripcion);
        $this->db->update("dimension2");
    }

    function dimensionunoriesgo($dimriesgo) {
        $this->db->where("dimension2.dim_id", $dimriesgo);
        $this->db->select("riesgo.rie_descripcion");
        $this->db->distinct("riesgo.rie_descripcion");
        $this->db->join("riesgo", "riesgo.dim2_id = dimension2.dim_id");
        $cargo = $this->db->get("dimension2");
//        echo $this->db->last_query();die;
        return $cargo->result();
    }

}

?>