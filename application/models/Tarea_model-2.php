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
    function filtrobusqueda($Plan,$filtrotarea,$responsable){
        //$this->db->where('planes.est_id !=',3);
//        if(!empty($Plan))$this->db->where('tar_id',$Plan);
//        if(!empty($filtrotarea))$this->db->where('tar_id',$filtrotarea);
//        if(!empty($responsable))$this->db->where('tar_id',$responsable);
        $this->db->select("tarea.*");
//        $this->db->select("empleado.Emp_Nombre");
//        $this->db->select("empleado.Emp_Apellidos");
//        $this->db->join("empleado","empleado.Emp_id = planes.emp_id"); 
        $tarea = $this->db->get("tarea");
        return $tarea->result();
    }

}

?>