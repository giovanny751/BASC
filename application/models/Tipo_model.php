<?php

class Tipo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function detail() {
        try {
            $tipo = $this->db->get("tipo");
            return $tipo->result();
        } catch (exception $e) {
            
        }
    }

    function detailxid($id) {
        try {
            $this->db->where("tip_id", $id);
            $tipo = $this->db->get("tipo");
            return $tipo->result();
        } catch (exception $e) {
            
        }
    }

}

?>