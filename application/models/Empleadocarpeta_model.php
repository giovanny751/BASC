<?php

class Empleadocarpeta_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($carpeta,$descripcion,$empleado) {
        $data = array(
            "empCar_nombre"=>$carpeta,
            "empCar_descripcion"=>$descripcion,
            "emp_id"=>$empleado
        );
        $this->db->insert("empleado_carpeta",$data);
    }
    function detail(){
        
        $carpeta = $this->db->get("empleado_carpeta");
        return $carpeta->result();
        
    }
    function search($nombre,$descripcion,$empleado){
        
        $this->db->where("empCar_nombre",$nombre);
        $this->db->where("empCar_descripcion",$descripcion);
        $this->db->where("emp_id",$empleado);
        $carpeta = $this->db->get("empleado_carpeta");
        return $carpeta->result();
    }
    function cargarcarpeta($car_id){
        
        $this->db->where("empCar_id",$car_id);
        $carpeta = $this->db->get("empleado_carpeta");
        return $carpeta->result();
    }
    function actualizacarpeta($empCar_id,$nombre,$descripcion){
        
        $this->db->where("empCar_id",$car_id);
        $this->db->set("empCar_nombre",$nombre);        
        $this->db->set("empCar_descripcion",$descripcion);        
        $carpeta = $this->db->update("empleado_carpeta");
        
    }
}

?>