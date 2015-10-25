<?php

class Actividad_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function detail() {

        $actividad = $this->db->get("actividad");
        return $actividad->result();
    }
    function create($data,$post){
        if($post['actHij_id']==""){
        $this->db->insert("actividad_hijo",$data);
        }else{
        $this->db->where("actHij_id",$post['actHij_id']);    
        $this->db->update("actividad_hijo",$data);    
        }
    }
    function search($idpadre){
        $this->db->where("actHij_padreid",$idpadre);
        $actividad = $this->db->get("actividad_hijo");
        return $actividad->result();  
    }


}

?>