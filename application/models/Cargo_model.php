<?php

class Cargo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        $this->db->insert_batch("cargo", $data);
    }

    function update($nombre,$jefe,$porcentaje,$id) {
        $this->db->where("car_id",$id);
        $this->db->set("car_nombre",$nombre);
        $this->db->set("car_jefe",$jefe);
        $this->db->set("car_porcentajearl",$porcentaje);
        $this->db->update("cargo");
    }

    function detail() {
        $this->db->select("cargo.car_id");
        $this->db->select("cargo.car_nombre");
        $this->db->select("c.car_nombre as jefe");
        $this->db->select("c.car_id as idjefe");
        $this->db->select("cargo.car_porcentajearl");
        $this->db->where("cargo.est_id ",1);
        $this->db->join("cargo as c","cargo.car_jefe = c.car_id","left");
        $cargo = $this->db->get("cargo");
        return $cargo->result();
    }
    function allcargos(){
        $cargo = $this->db->get("cargo");
        return $cargo->result();
    }

    function delete($id) {
        $this->db->where("car_id", $id);
        $this->db->set("est_id","3");
        $this->db->update("cargo");
    }
    function consultahijos($id){
        
        $this->db->where("c.car_id", $id);
        $this->db->join("cargo as c","cargo.car_jefe = c.car_id","left");
        $this->db->where("cargo.est_id",1);
        $cantidad = $this->db->count_all_results("cargo");
        return $cantidad;
    }
    function consultacargoxid($car_id){
        $this->db->select("cargo.car_id");
        $this->db->select("cargo.car_nombre");
        $this->db->select("c.car_nombre as jefe");
        $this->db->select("cargo.car_porcentajearl");
        $this->db->select("c.car_id as idjefe");
        $this->db->where("cargo.est_id ",1);
        $this->db->join("cargo as c","cargo.car_jefe = c.car_id","left");
        $this->db->where("cargo.car_id",$car_id);
        $cargo = $this->db->get("cargo");
        return $cargo->result();
    }
    
    function consultaorganigrama($id = null){
        
        
        $this->db->select("cargo.car_id");
        $this->db->select("cargo.car_nombre");
        $this->db->select("c.car_nombre as jefe");
        $this->db->select("cargo.car_porcentajearl");
        $this->db->select("c.car_id as idjefe");
        $this->db->where("cargo.est_id ",1);
        $this->db->join("cargo as c","cargo.car_jefe = c.car_id","left");
        if(empty($id))$this->db->where("c.car_id IS NULL");
        if(!empty($id))$this->db->where("c.car_id",$id);
        $cargo = $this->db->get("cargo");
//        echo $this->db->last_query();die;
        return $cargo->result_array();
        
    }
    function cargoriesgo(){
        
        $this->db->select("riesgo.rie_descripcion");
        $this->db->distinct("riesgo.rie_descripcion");
        $this->db->join("riesgo_cargo","riesgo_cargo.car_id = cargo.car_id");
        $this->db->join("riesgo","riesgo.rie_id = riesgo_cargo.rie_id");
        $cargo = $this->db->get("cargo");
        return $cargo->result();
        
    }

}

?>