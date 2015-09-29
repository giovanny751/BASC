<?php

class Tarea_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        $this->db->insert("tarea", $data);
        return $this->db->insert_id();
    }
    function tareanorma($data){
        
        $this->db->insert_batch("norma_tarea",$data);
    }
    function consultaTareasFlechas($idTarea,$metodo){
        switch ($metodo){
            case "flechaIzquierdaDoble":
                $this->db->where("tar_id = (select min(tar_id) from tarea)");
                break;
            case "flechaIzquierda":
                $this->db->where("tar_id < '".$idTarea."' ");
                $this->db->order_by("tar_id desc");
                break;
            case "flechaDerecha":
                $this->db->where("tar_id > '".$idTarea."' ");
                $this->db->order_by("tar_id asc");
                break;
            case "flechaDerechaDoble":
                $this->db->where("tar_id = (select max(tar_id) from tarea)");
                break;
            default :
                die;
                break;
        }
        $usuario = $this->db->get("tarea",1);
        return $usuario->result();
    }

}

?>