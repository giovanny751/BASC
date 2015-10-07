<?php

class AvanceTarea_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function detail() {

        $avance = $this->db->get("avance_tarea");
        return $avance->result();
    }
    function create($data) {
        $this->db->insert_batch("avance_tarea", $data);
        return $this->db->insert_id();
    }

}

?>