<?php

class Empleadotipoaseguradora_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        $color =$this->db->insert_batch("empleado_tipo_aseguradora",$data);
    }


}

?>