<?php

class Empleado_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        
        $this->db->insert("empleado", $data);
    }

    function update($data,$id) {
        $this->db->where("emp_id",$id);
        $this->db->update("empleado", $data);
        
//        echo $this->db->last_query();die;
    }

    function detail() {

        $empleado = $this->db->get("empleado");
        return $empleado->result();
    }

    function delete($id) {
        $this->db->where("emp_id", $id);
        $this->db->delete("empleado");
    }

    function filtroempleados($cedula, $nombre, $apellido, $codigo, $cargo, $estado,$contratosvencidos) {

        if (!empty($cedula))
            $this->db->where('Emp_Cedula', $cedula);
        if (!empty($nombre))
            $this->db->where('Emp_Nombre', $nombre);
        if (!empty($apellido))
            $this->db->where('Emp_Apellidos', $apellido);
        if (!empty($codigo))
            $this->db->where('Emp_codigo', $codigo);
        if (!empty($cargo))
            $this->db->where('cargo.car_id', $cargo);
        if (!empty($estado))
            $this->db->where('estados.Est_id', $estado);
        if (!empty($contratosvencidos))
            $this->db->where("Emp_FechaFinContrato <",date('Y-m-d'));
        $this->db->join("estados", "estados.est_id = empleado.est_id");
        $this->db->join("cargo", "cargo.car_id = empleado.car_id");
        $this->db->join("tipo_contrato", "tipo_contrato.TipCon_Id = empleado.TipCon_Id");
        $empleado = $this->db->get("empleado");
//        echo $this->db->last_query();die;
        return $empleado->result();
    }
    function contratosvencidos() {
        
        $this->db->where("Emp_FechaFinContrato <",date('Y-m-d'));
        $this->db->join("estados", "estados.est_id = empleado.est_id");
        $this->db->join("cargo", "cargo.car_id = empleado.car_id");
        $this->db->join("tipo_contrato", "tipo_contrato.TipCon_Id = empleado.TipCon_Id");
        $empleado = $this->db->get("empleado");
        return $empleado->result();
    }

    function eliminarempleado($id) {

        $this->db->where("emp_id", $id);
        $this->db->delete("empleado");
    }

    function consultaempleadoxid($id) {
        $this->db->where("emp_id",$id);
        $empleado = $this->db->get("empleado");
        return $empleado->result();
    }
    function empleadoxcargo($id){
        
        $this->db->where("car_id",$id);
        $empleado = $this->db->get("empleado");
        return $empleado->result();
        
    }
    function consultaempleadoflechas($idEmpleadoCreado,$metodo){
        switch ($metodo){
            case "flechaIzquierdaDoble":
                $this->db->where("Emp_Id = (select min(Emp_Id) from empleado)");
                break;
            case "flechaIzquierda":
                $this->db->where("Emp_Id < '".$idEmpleadoCreado."' ");
                $this->db->order_by("Emp_Id desc");
                break;
            case "flechaDerecha":
                $this->db->where("Emp_Id > '".$idEmpleadoCreado."' ");
                $this->db->order_by("Emp_Id asc");
                break;
            case "flechaDerechaDoble":
                $this->db->where("Emp_Id = (select max(Emp_Id) from empleado)");
                break;
            default :
                die;
                break;
        }
        $usuario = $this->db->get("empleado",1);
        return $usuario->result();
    }

}

?>