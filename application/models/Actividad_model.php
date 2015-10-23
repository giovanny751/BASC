<?php

class Actividad_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function detail() {

        $actividad = $this->db->get("actividad");
        return $actividad->result();
    }
    function create($data){
        
        $this->db->insert_batch("actividad_hijo",$data);
    }
    function search($idpadre){
        $this->db->where("actHij_padreid",$idpadre);
        $actividad = $this->db->get("actividad_hijo");
        return $actividad->result();  
    }


}

?>