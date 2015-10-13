<?php

class Actividadeconomica_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function detail() {
        $this->db->select("*",false);
        $actividad = $this->db->get("actividad_economica");
        return $actividad->result();
    }
    function create($data){
        
        $this->db->insert_batch("actividad_hijo",$data);
    }


}

?>