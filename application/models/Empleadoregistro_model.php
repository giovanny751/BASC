<?php

class Empleadoregistro_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function detail() {
        $this->db->join("empleado","empleado.emp_id = empleado_registro.emp_id");
        $data = $this->db->get("empleado_registro");
        return $data->result();
    }



}

?>