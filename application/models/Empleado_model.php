<?php

class Empleado_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        try {
            $this->db->insert("empleado", $data);
            return $this->db->insert_id();
        } catch (exception $e) {
            
        }
    }

    function update($data, $id) {
        try {
            $this->db->where("emp_id", $id);
            $this->db->update("empleado", $data);
        } catch (exception $e) {
            
        }
    }

    function valormaxid() {
        try {
            $this->db->select("max(emp_id) as maximo", false);
            $maxId = $this->db->get("empleado");
            return $maxId->result();
        } catch (exception $e) {
            
        }
    }

    function detail() {
        try {
            $empleado = $this->db->get("empleado");
            return $empleado->result();
        } catch (exception $e) {
            
        }
    }

    function delete($id) {
        try {
            $this->db->where("emp_id", $id);
            $this->db->delete("empleado");
        } catch (exception $e) {
            
        }
    }

    function filtroempleados($cedula, $nombre, $apellido, $codigo, $cargo, $estado, $contratosvencidos, $tipocontrato, $dim1, $dim2) {
        try {
            if (!empty($dim1))
                $this->db->where('empleado.Dim_id', $dim1);
            if (!empty($dim2))
                $this->db->where('empleado.Dim_IdDos', $dim2);
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
            $this->db->select("(
            select count(tarea.tar_id)  
            from tarea
            join avance_tarea on avance_tarea.tar_id=tarea.tar_id
            where	avance_tarea.avaTar_progreso<100 and tarea.emp_id=empleado.Emp_Id 
            ) as tareas_emp,", false);
            $this->db->select("(
            select count(planes.pla_id)  
            from planes
            where	planes.emp_id=empleado.Emp_Id 
            ) as planes_emp,", false);
            $this->db->select("empleado.*");
            $this->db->select("estados.*");
            $this->db->select("tipo_contrato.*");
            $this->db->select("cargo.*");

            $this->db->join("estados", "estados.est_id = empleado.est_id");
            $this->db->join("cargo", "cargo.car_id = empleado.car_id");
            $this->db->join("tipo_contrato", "tipo_contrato.TipCon_Id = empleado.TipCon_Id");
            $empleado = $this->db->get("empleado");
//        echo $this->db->last_query();die;
            return $empleado->result();
        } catch (exception $e) {
            
        }
    }

    function contratosvencidos() {
        try {
            $this->db->where("Emp_FechaFinContrato <", date('Y-m-d'));
            $this->db->join("estados", "estados.est_id = empleado.est_id");
            $this->db->join("cargo", "cargo.car_id = empleado.car_id");
            $this->db->join("tipo_contrato", "tipo_contrato.TipCon_Id = empleado.TipCon_Id");
            $empleado = $this->db->get("empleado");
            return $empleado->result();
        } catch (exception $e) {
            
        }
    }

    function eliminarempleado($id) {
        try {
            $this->db->where("emp_id", $id);
            $this->db->delete("empleado");
        } catch (exception $e) {
            
        }
    }

    function consultaempleadoxid($id) {
        try {
            $this->db->select("(
            select count(tarea.tar_id)  
            from tarea
            join avance_tarea on avance_tarea.tar_id=tarea.tar_id
            where	avance_tarea.avaTar_progreso<100 and tarea.emp_id=empleado.Emp_Id 
            ) as tareas_emp,", false);
            $this->db->select("(
            select count(planes.pla_id)  
            from planes
            where	planes.emp_id=empleado.Emp_Id 
            ) as planes_emp,", false);
            $this->db->select("empleado.*");
            $this->db->where("emp_id", $id);
            $empleado = $this->db->get("empleado");
            return $empleado->result();
        } catch (exception $e) {
            
        }
    }

    function empleadoxcargo($id) {
        try {
            $this->db->select('Emp_Apellidos,Emp_Nombre,Emp_Id');
            $this->db->where("car_id", $id);
            $empleado = $this->db->get("empleado");
            return $empleado->result();
        } catch (exception $e) {
            
        }
    }

    function consultaempleadoflechas($idEmpleadoCreado, $metodo) {
        try {
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
        } catch (exception $e) {
            
        }
    }

    function validacedula($cedula) {
        try {
            $this->db->where("Emp_Cedula", $cedula);
            $empleado = $this->db->get("empleado");
            return $empleado->result();
        } catch (exception $e) {
            
        }
    }

}

?>