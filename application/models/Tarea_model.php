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
    function update($data,$idtarea){
        $this->db->where("tar_id",$idtarea);
        $this->db->update("tarea",$data);
    }
    function detail(){
        
        
        $tarea = $this->db->get("tarea");
        return $tarea->result();
        
    }
    function detailxid($id){
        $this->db->where("tar_id",$id);
        $tarea = $this->db->get("tarea");
        return $tarea->result();
    }
    
    function responsables(){
        
        $this->db->join("empleado","empleado.Emp_id = tarea.emp_id");
        $tarea = $this->db->get("tarea");
//        echo $this->db->last_query();die;
        return $tarea->result();
        
    }
    
    function filtrobusqueda($plan,$tarea,$responsable){
        
        if(!empty($plan))$this->db->where("plan_id",$plan);
        if(!empty($tarea))$this->db->where("tar_id",$tarea);
        if(!empty($responsable))$this->db->where("emp_id",$responsable);
        $this->db->select("tarea.tar_fechaInicio");
        $this->db->select("DATEDIFF((tar_fechaFinalizacion),(tar_fechaInicio)) diferencia");
        $this->db->select("tarea.tar_nombre");
        $this->db->select("tarea.tar_fechaFinalizacion");
        $this->db->select("empleado.Emp_Nombre");
        $this->db->select("tarea.tar_id");
        $this->db->select("tipo.tip_tipo");
        $this->db->join("avance_tarea","avance_tarea.tar_id = tarea.tar_id ","LEFT");
        $this->db->join("tipo","tipo.tip_id = tarea.tip_id","left");
        $this->db->join("empleado","empleado.Emp_id = tarea.emp_id","left");
        $this->db->join("planes","planes.pla_id = tarea.pla_id","left");
        $tarea = $this->db->get("tarea");
//        echo $this->db->last_query();die;
        return $tarea->result();
        
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