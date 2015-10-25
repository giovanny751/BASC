<?php

class Empleadoregistro_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function detail() {
        $this->db->select("empleado_carpeta.empCar_id");
        $this->db->select("empleado_carpeta.empCar_nombre");
        $this->db->select("CONCAT(empleado.Emp_Nombre,' ',empleado.Emp_Apellidos) as nombreempleado ",false);
        $this->db->select("empleado_registro.empReg_archivo");
        $this->db->select("empleado_registro.empReg_descripcion");
        $this->db->select("empleado_registro.empReg_version");
        $this->db->select("empleado_registro.empReg_id");
        $this->db->select("empleado_registro.empReg_tamano");
        $this->db->select("empleado_registro.empgReg_fecha");
        $this->db->join("empleado_registro","empleado_carpeta.empCar_id = empleado_registro.empReg_carpeta","LEFT");
        $this->db->join("empleado","empleado.emp_id = empleado_registro.emp_id","LEFT");
        $data = $this->db->get("empleado_carpeta");
        return $data->result();
    }
        function empleado_registro($post) {
            $this->db->insert('empleado_registro', $post);
            return $this->db->insert_id();
    }
    function detallexcarpeta($id){
        
        $this->db->select("empleado_registro.*");
        $this->db->select("CONCAT(empleado.Emp_Nombre,' ',empleado.Emp_Apellidos) as nombre",false);
        $this->db->where("empReg_carpeta",$id);
        $this->db->join("empleado","empleado.emp_id = empleado_registro.emp_id ");
        $data = $this->db->get("empleado_registro");
        return $data->result(); 
    }



}

?>