<?php

class Tarea_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        $this->db->insert("tarea", $data);
        return $this->db->insert_id();
    }
    function tareanorma($data){
        
        $this->db->insert_batch("norma_tarea",$data);
    }


}

?>