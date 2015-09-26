<?php

class Tipo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function detail() {

        $tipo = $this->db->get("tipo");
        return $tipo->result();
    }


}

?>