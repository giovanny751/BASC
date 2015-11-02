<?php

class Tareacarpeta_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    function detail(){
        
        $carpeta = $this->db->get("registro_carpeta");
        return $carpeta->result();
    }
    //Cantidad tarea
    function detailxtareas($tar_id){
        
        $this->db->where("tarea_carpeta.tar_id",$tar_id);
        $this->db->select("tarea_carpeta.tarCar_id");
        $this->db->select("tarea_carpeta.tarCar_nombre");
        $this->db->select("tarea_carpeta.tarCar_descripcion");
        $this->db->select("tarea_registro.tarReg_version");
        $this->db->select("tarea_registro.tarReg_descripcion");
        $this->db->select("tarea_registro.tarReg_fecha_creacion");
        $this->db->select("tarea_registro.tarReg_id");
        $this->db->select("tarea_registro.tarReg_archivo");
        $this->db->select("tarea_registro.tarReg_tamano");
        $this->db->join("tarea_registro","tarea_registro.tarCar_id = tarea_carpeta.tarCar_id","LEFT");
        $carpeta = $this->db->get("tarea_carpeta");
        return $carpeta->result();
    }
    function detailxtareascarpetas($tar_id){
        
        $this->db->where("tarea_carpeta.tar_id",$tar_id);
        $carpeta = $this->db->get("tarea_carpeta");
        return $carpeta->result();
    }
    function create($nombre,$descripcion,$tar_id) {
        $data = array(
          "tarCar_nombre"=>$nombre,  
          "tarCar_descripcion"=>$descripcion,
          "tarCar_fechaCreacion"=>date('Y-m-d H:i:s'),
          "tar_id"=> $tar_id 
        );
        $this->db->insert("tarea_carpeta",$data);
        return $this->db->insert_id();
    }
    function detailxid($tarCar_id){
        $this->db->select("tarCar_id as uno, tarCar_nombre as dos,tarCar_descripcion as tres");
        $this->db->where("tarCar_id",$tarCar_id);
        $carpeta = $this->db->get("tarea_carpeta");
        return $carpeta->result();
    }
    
    function detailxplannombre($pla_id,$nombre,$descripcion){
        
        $this->db->where("regCar_nombre",$nombre);
        $this->db->where("regCar_descripcion",$descripcion);
        $this->db->where("pla_id",$pla_id);
        $carpeta = $this->db->get("registro_carpeta");
        echo $this->db->last_query();die;
        return $carpeta->result();
    }

    
    function cargarcarpetas($regCar_id){
        
        $this->db->where("regCar_id",$regCar_id);
        $carpeta = $this->db->get("registro_carpeta");
//        echo $this->db->last_query();die;
        return $carpeta->result();
    }
    function eliminarcarpeta($tarCar_id){
        
        $this->db->where("tarCar_id",$tarCar_id);
        $this->db->delete("tarea_carpeta");
    }
    function modificarpeta($nombre,$descripcion,$car_id){
        
        $this->db->where("tarCar_id",$car_id);
        $this->db->set("tarCar_nombre",$nombre);
        $this->db->set("tarCar_descripcion",$descripcion);
        $this->db->update("tarea_carpeta");
        
    }
}

?>