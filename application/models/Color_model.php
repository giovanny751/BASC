<?php

class Color_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function consult($id) {
        try {
            $this->db->where("col_id", $id);
            $aceptacion = $this->db->get("color");
            return $aceptacion->result();
        } catch (exception $e) {
            
        }
    }
    function detail() {
        try {
            $this->db->order_by("col_color");
            $color = $this->db->get("color");
            return $color->result();
        } catch (exception $e) {
            
        }
    }
    function delete($id,$color) {
        //Confirmamos si es el id que deseamos eliminar con el estado
        try {
            $this->db->where("col_color", $color);
            $this->db->where("col_id",$id);
            $this->db->delete("color");
        } catch (exception $e) {
            
        }
    }
    
    
    function exist($estado, $color) {
        try {
            $this->db->where("estAce_id", $estado);
            $this->db->where("col_color", $color);
            $color = $this->db->get("color");
            return $color->result();
        } catch (exception $e) {
            
        }
    }

    function create($estado, $color) {
        try {
            $this->db->set("estAce_id", $estado);
            $this->db->set("col_color", $color);
            $this->db->insert("color");
        } catch (exception $e) {
            
        }
    }
    function update($color,$id) {
        try {
            $this->db->set("col_color", $color);
            $this->db->where("col_id",$id);
            $this->db->update("color");
        } catch (exception $e) {
            
        }
    }

    function colorxestado($estado) {
        try {
            $this->db->order_by("col_color");
            $this->db->where("estAce_id", $estado);
            $color = $this->db->get("color");
            return $color->result();
        } catch (exception $e) {
            
        }
    }

}

?>