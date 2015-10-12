<?php

class Registrocarpeta_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($nombre,$descripcion) {
        $data = array(
          "regCar_nombre"=>$nombre,  
          "regCar_descripcion"=>$descripcion,
          "regCar_fechaCreacion"=>date('Y-m-d H:i:s')
        );
        $this->db->insert("registro_carpeta",$data);
        return $this->db->insert_id();
    }


}

?>