<?php

class Color_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function detail() {
        $this->db->order_by("col_color");
        $color =$this->db->get("color");
        return $color->result();
    }


}

?>