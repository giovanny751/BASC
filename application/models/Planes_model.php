<?php

class Planes_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function create($data) {
         $this->db->insert_batch("planes",$data);
    }
    function filtrobusqueda($codigo,$nombre,$fecha,$estado,$responsable){
        $this->db->where('est_id !=',3);
        if(!empty($codigo))$this->db->where('pla_id',$codigo);
        if(!empty($nombre))$this->db->where('pla_nombre',$nombre);
        if(!empty($fecha))$this->db->where('pla_fechaInicio',$fecha);
        if(!empty($estado))$this->db->where('est_id',$estado);
        if(!empty($responsable))$this->db->where('pla_responsable',$responsable);
        $planes = $this->db->get("planes");
        return $planes->result();
    }
    function delete($id){
        
        $this->db->where('pla_id',$id);
        $this->db->set('est_id',3);
        $this->db->update('planes');
    }
    function planxid($pla_id){
        
       $this->db->where('pla_id',$pla_id); 
       $planes = $this->db->get("planes");
        return $planes->result(); 
    }

}

?>