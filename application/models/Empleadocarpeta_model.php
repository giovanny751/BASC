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


}

?>