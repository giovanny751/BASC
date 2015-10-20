<?php

class Empleado_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {

        $this->db->insert("empleado", $data);
        return $this->db->insert_id();
    }

    function update($data, $id) {
        $this->db->where("emp_id", $id);
        $this->db->update("empleado", $data);

//        echo $this->db->last_query();die;
    }
    function valormaxid(){
        $this->db->select("max(emp_id) as maximo",false);
        $maxId = $this->db->get("empleado");
        return $maxId->result();
    }

    function detail() {

        $empleado = $this->db->get("empleado");
        return $empleado->result();
    }

    function delete($id) {
        $this->db->where("emp_id", $id);
        $this->db->delete("empleado");
    }

    function filtroempleados($cedula, $nombre, $apellido, $codigo, $cargo, $estado, $contratosvencidos,$tipocontrato) {

        if (!empty($tipocontrato))
            $this->db->where('tipo_contrato.TipCon_Id', $tipocontrato);
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
            $this->db->where("Emp_FechaFinContrato <", date('Y-m-d'));
        $this->db->join("estados", "estados.est_id = empleado.est_id");
        $this->db->join("cargo", "cargo.car_id = empleado.car_id");
        $this->db->join("tipo_contrato", "tipo_contrato.TipCon_Id = empleado.TipCon_Id");
        $empleado = $this->db->get("empleado");
//        echo $this->db->last_query();die;
        return $empleado->result();
    }

    function contratosvencidos() {

        $this->db->where("Emp_FechaFinContrato <", date('Y-m-d'));
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
        $this->db->where("emp_id", $id);
        $empleado = $this->db->get("empleado");
        return $empleado->result();
    }

    function empleadoxcargo($id) {

        $this->db->where("car_id", $id);
        $empleado = $this->db->get("empleado");
        return $empleado->result();
    }

    function consultaempleadoflechas($idEmpleadoCreado, $metodo) {
        switch ($metodo) {
            case "flechaIzquierdaDoble":
                $this->db->where("Emp_Id = (select min(Emp_Id) from empleado)");
                break;
            case "flechaIzquierda":
                $this->db->where("Emp_Id < '" . $idEmpleadoCreado . "' ");
                $this->db->order_by("Emp_Id desc");
                break;
            case "flechaDerecha":
                $this->db->where("Emp_Id > '" . $idEmpleadoCreado . "' ");
                $this->db->order_by("Emp_Id asc");
                break;
            case "flechaDerechaDoble":
                $this->db->where("Emp_Id = (select max(Emp_Id) from empleado)");
                break;
            default :
                die;
                break;
        }
        $usuario = $this->db->get("empleado", 1);
        return $usuario->result();
    }
    
    function validacedula($cedula){
        
        $this->db->where("Emp_Cedula",$cedula);
        $empleado = $this->db->get("empleado");
        return $empleado->result();
    }

    function empleado_registro($post) {
//        $this->db->select('count(Emp_Id) dd'); //
//        $this->db->where('Emp_Id', $post['Emp_Id']);
//        $datos = $this->db->get('empleado_registro');
//        $datos = $datos->result();
//        if ($datos[0]->dd == 0){
            $this->db->insert('empleado_registro', $post);
            return $this->db->insert_id();
//        }
//        else {
//            $this->db->where('Emp_Id', $post['Emp_Id']);
//            $this->db->update('empleado_registro', $post);
//        }
//        echo $this->db->last_query();die;
    }

}

?>