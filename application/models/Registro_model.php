<?php

class Registro_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        
        $this->db->insert("registro",$data);
        return $this->db->insert_id();
    }


}

?>