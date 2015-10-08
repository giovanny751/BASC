<?php

class Norma_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function detail() {
        $this->db->order_by("nor_norma");
        $norma =$this->db->get("norma");
        return $norma->result();
    }


}

?>