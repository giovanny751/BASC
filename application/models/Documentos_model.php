<?php

class Documentos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function guardardocumento($data){
        
        $this->db->insert("documentos",$data);
    }
}

?>