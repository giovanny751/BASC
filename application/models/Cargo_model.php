<?php

class Cargo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        try {
            $this->db->insert_batch("cargo", $data);
//        echo $this->db->last_query();
        } catch (exception $e) {
            
        }
    }

    function update($nombre, $jefe, $porcentaje, $id) {
        try {
            $this->db->where("car_id", $id);
            $this->db->set("car_nombre", $nombre);
            $this->db->set("car_jefe", $jefe);
            $this->db->set("car_porcentajearl", $porcentaje);
            $this->db->update("cargo");
        } catch (exception $e) {
            
        }
    }

    function detail() {
        try {
            $this->db->select("cargo.car_id");
            $this->db->select("cargo.car_nombre");
            $this->db->select("c.car_nombre as jefe");
            $this->db->select("c.car_id as idjefe");
            $this->db->select("cargo.car_porcentajearl");
            $this->db->where("cargo.est_id ", 1);
            $this->db->join("cargo as c", "cargo.car_jefe = c.car_id", "left");
            $cargo = $this->db->get("cargo");
            return $cargo->result();
        } catch (exception $e) {
            
        }
    }

    function allcargos() {
        try {
            $this->db->where("est_id", 1);
            $cargo = $this->db->get("cargo");
            return $cargo->result();
        } catch (exception $e) {
            
        }
    }

    function delete($id) {
        try {
            $this->db->where("car_id", $id);
            $this->db->set("est_id", "3");
            $this->db->update("cargo");
        } catch (exception $e) {
            
        }
    }

    function consultahijos($id) {
        try {
            $this->db->where("c.car_id", $id);
            $this->db->join("cargo as c", "cargo.car_jefe = c.car_id", "left");
            $this->db->where("cargo.est_id", 1);
            $cantidad = $this->db->count_all_results("cargo");
            return $cantidad;
        } catch (exception $e) {
            
        }
    }

    function consultaEmpleados($id) {
        $this->db->select("count(car_id) as car", false);
        $this->db->where("car_id", $id);
        $datos = $this->db->get("empleado");
        $datos = $datos->result();
        return $datos[0]->car;
    }

    function consultacargoxid($car_id) {
        try {
            $this->db->select("cargo.car_id");
            $this->db->select("cargo.car_nombre");
            $this->db->select("c.car_nombre as jefe");
            $this->db->select("cargo.car_porcentajearl");
            $this->db->select("c.car_id as idjefe");
            $this->db->where("cargo.est_id ", 1);
            $this->db->join("cargo as c", "cargo.car_jefe = c.car_id", "left");
            $this->db->where("cargo.car_id", $car_id);
            $cargo = $this->db->get("cargo");
            return $cargo->result();
        } catch (exception $e) {
            
        }
    }

    function consultaorganigrama($id = null) {
        try {
            $this->db->select("cargo.car_id");
            $this->db->select("cargo.car_nombre");
            $this->db->select("c.car_nombre as jefe");
            $this->db->select("cargo.car_porcentajearl");
            $this->db->select("c.car_id as idjefe");
            $this->db->where("cargo.est_id ", 1);
            $this->db->join("cargo as c", "cargo.car_jefe = c.car_id", "left");
            if (empty($id))
                $this->db->where("c.car_id IS NULL");
            if (!empty($id))
                $this->db->where("c.car_id", $id);
            $cargo = $this->db->get("cargo");
            return $cargo->result_array();
        } catch (exception $e) {
            
        }
    }

    function cargoriesgo($id = NULL) {
        try {
            if (!empty($id))
                $this->db->where("cargo.car_id", $id);
            $this->db->select("riesgo.rie_descripcion");
            $this->db->distinct("riesgo.rie_descripcion");
            $this->db->join("riesgo_cargo", "riesgo_cargo.car_id = cargo.car_id");
            $this->db->join("riesgo", "riesgo.rie_id = riesgo_cargo.rie_id");
            $cargo = $this->db->get("cargo");
            return $cargo->result();
        } catch (exception $e) {
            
        }
    }

    function existe($cargo, $cargojefe) {
        try {
            $this->db->where("car_nombre", $cargo);
            $this->db->where("car_jefe", $cargojefe);
            $this->db->where("est_id", 1);
            $cargo = $this->db->get("cargo");
            return $cargo->result();
        } catch (exception $e) {
            
        }
    }

}

?>