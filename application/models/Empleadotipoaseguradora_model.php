<?php

class Empleadotipoaseguradora_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        $this->db->insert_batch("empleado_tipo_aseguradora",$data);
    }
    
    function consult_empleado($idEmpleado){
        $this->db->select("eta.*");
        $this->db->select("ta.tipAse_nombre");
        $this->db->select("a.ase_nombre");
        $this->db->join("tipo_aseguradora as ta","ta.tipAse_id = eta.tipAse_id");
        $this->db->join("aseguradoras as a","a.ase_id = eta.ase_id");
        $this->db->where("eta.emp_id = '".$idEmpleado."'");
        $resultado = $this->db->get("empleado_tipo_aseguradora as eta");
        return $resultado->result();
    }


}

?>