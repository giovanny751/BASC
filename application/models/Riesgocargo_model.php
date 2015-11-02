<?php

class Riesgocargo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function guardarcargo($data){
        $this->db->insert_batch("riesgo_cargo",$data);
    }
    function detailxid($id){
        $this->db->where("rie_id",$id);
        $tarea = $this->db->get("riesgo_cargo");
        return $tarea->result();
    }
    
}

?>