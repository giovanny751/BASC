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
        $this->db->select("eta.ase_id");
        $this->db->join("tipo_aseguradora as ta","ta.tipAse_id = eta.tipAse_id");
        $this->db->where("eta.emp_id = '".$idEmpleado."'");
        $resultado = $this->db->get("empleado_tipo_aseguradora as eta");
//        echo $this->db->last_query();
        return $resultado->result();
    }
    
    function actualizatipo($idEmpleado,$datosActualizar){
        //Elimina campos
        $this->db->where("emp_id = '".$idEmpleado."'");
        $this->db->delete("empleado_tipo_aseguradora");
        //Crea Campos
        $this->db->insert_batch("empleado_tipo_aseguradora",$datosActualizar);
    }


}

?>