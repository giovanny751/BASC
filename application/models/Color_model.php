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
    function exist($estado,$color){
        $this->db->where("estAce_id",$estado);
        $this->db->where("col_color",$color);
        $color =$this->db->get("color");
        return $color->result();
    }
    function create($estado,$color){
        
        $this->db->set("estAce_id",$estado);
        $this->db->set("col_color",$color);
        $this->db->insert("color");
        
    }
    function colorxestado($estado){
        
        $this->db->order_by("col_color");
        $this->db->where("estAce_id",$estado);
        $color =$this->db->get("color");
        return $color->result();
        
    }


}

?>