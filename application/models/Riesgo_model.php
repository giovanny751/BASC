<?php

class Riesgo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        $this->db->insert("riesgo", $data);
    }


}

?>