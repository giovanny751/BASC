<?php

class Registrocarpeta_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    function detail(){
        
        $carpeta = $this->db->get("registro_carpeta");
        return $carpeta->result();
    }
    function detailxplan($pla_id){
        
        $this->db->where("registro_carpeta.pla_id",$pla_id);
        $this->db->select("registro_carpeta.regCar_id");
        $this->db->select("registro_carpeta.regCar_nombre");
        $this->db->select("registro.reg_version");
        $this->db->select("registro.reg_descripcion");
        $this->db->select("registro.reg_fechaCreacion");
        $this->db->select("registro.reg_id");
        $this->db->select("registro.reg_archivo");
        $this->db->select("registro.reg_tamano");
        $this->db->join("registro","registro.regCar_id = registro_carpeta.regCar_id","LEFT");
        $carpeta = $this->db->get("registro_carpeta");
        return $carpeta->result();
    }
    function detailxplancarpetas($pla_id){
        
        $this->db->where("registro_carpeta.pla_id",$pla_id);
        $carpeta = $this->db->get("registro_carpeta");
        return $carpeta->result();
    }
    function detailxid($regCar_id){
        $this->db->select("regCar_id as uno, regCar_nombre as dos,regCar_descripcion as tres");
        $this->db->where("regCar_id",$regCar_id);
        $carpeta = $this->db->get("registro_carpeta");
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

    function create($nombre,$descripcion,$pla_id) {
        $data = array(
          "regCar_nombre"=>$nombre,  
          "regCar_descripcion"=>$descripcion,
          "regCar_fechaCreacion"=>date('Y-m-d H:i:s'),
          "pla_id"=> $pla_id 
        );
        $this->db->insert("registro_carpeta",$data);
        return $this->db->insert_id();
    }
    function cargarcarpetas($regCar_id){
        
        $this->db->where("regCar_id",$regCar_id);
        $carpeta = $this->db->get("registro_carpeta");
//        echo $this->db->last_query();die;
        return $carpeta->result();
    }
    function eliminarcarpeta($regCar_id){
        
        $this->db->where("regCar_id",$regCar_id);
        $this->db->delete("registro_carpeta");
    }
    function modificarpeta($nombre,$descripcion,$regCar_id){
        
        $this->db->where("regCar_id",$regCar_id);
        $this->db->set("regCar_nombre",$nombre);
        $this->db->set("regCar_descripcion",$descripcion);
        $this->db->update("registro_carpeta");
        
    }
}

?>