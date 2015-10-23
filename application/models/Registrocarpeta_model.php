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
        $this->db->where("pla_id",$pla_id);
        $carpeta = $this->db->get("registro_carpeta");
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


}

?>