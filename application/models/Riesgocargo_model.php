<?php

class Riesgocargo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function guardarcargo($data) {
        try {
            $this->db->insert_batch("riesgo_cargo", $data);
        } catch (exception $e) {
            
        }
    }

    function detailxid($id) {
        try {
            $this->db->where("rie_id", $id);
            $tarea = $this->db->get("riesgo_cargo");
            return $tarea->result();
        } catch (exception $e) {
            
        }
    }

    function eliminarcargoriesgo($idRiesgo) {
        try {
            $this->db->where("rie_id", $idRiesgo);
            $this->db->delete("riesgo_cargo");
        } catch (exception $e) {
            
        }
    }

}

?>