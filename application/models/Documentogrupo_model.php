<?php

class Documentogrupo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function creaciongrupo($data){
         $this->db->insert("documento_grupo",$data);
         return $this->db->insert_id();
    }
    function actualizaciongrupo($data,$id){
        $this->db->where("docGru_id",$id);
         $this->db->update("documento_grupo",$data);
    }
    function detailgroup(){
        $this->db->order_by("documento_grupo.docGru_orden");
        $grupo = $this->db->get("documento_grupo");
        return $grupo->result();
    }
    function eliminargrupo($id){
        $this->db->where("docGru_id",$id);
        $this->db->delete("documento_grupo");
    }
    function consultagrupo($id){
        $this->db->where("docGru_id",$id);
        $grupo = $this->db->get("documento_grupo");
        return $grupo->result();
    }
}

?>