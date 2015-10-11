<?php

class AvanceTarea_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function detail() {

        $avance = $this->db->get("avance_tarea");
        return $avance->result();
    }

    function detailxid($id, $cantidad = null, $orden,$inicia = null) {
        if (!empty($orden)):
            $data = array(
                "avaTar_fecha",
                "tar_id",
                "nombre",
                "avaTar_horasTrabajadas",
                "avaTar_costo",
                "avaTar_comentarios"
            );
            $this->db->order_by($data[$orden], "asc");
        endif;
        if($cantidad == -1)$cantidad = "";
             
        $this->db->select("avaTar_fecha ");
        $this->db->select("tar_id ");
        $this->db->select("CONCAT(`user`.`usu_nombre`,' ',`user`.`usu_apellido`) as nombre", false);
        $this->db->select("avaTar_horasTrabajadas");
        $this->db->select("avaTar_costo ");
        $this->db->select("avaTar_comentarios");
        $this->db->where("tar_id", $id);
        $this->db->join("user", "user.usu_id = avance_tarea.usu_id");
        if(!empty($inicia))
        $avance = $this->db->get("avance_tarea", $inicia ,$cantidad);
        else
            $avance = $this->db->get("avance_tarea",$cantidad);
//        echo $this->db->last_query();die;
        return $avance->result_array();
    }
    function detailxidcount($id, $cantidad = null, $orden,$inicia = null){
        
        $this->db->select("avaTar_fecha ");
        $this->db->select("tar_id ");
        $this->db->select("CONCAT(`user`.`usu_nombre`,' ',`user`.`usu_apellido`) as nombre", false);
        $this->db->select("avaTar_horasTrabajadas");
        $this->db->select("avaTar_costo ");
        $this->db->select("avaTar_comentarios");
        $this->db->where("tar_id", $id);
        $this->db->join("user", "user.usu_id = avance_tarea.usu_id");
        $avance = $this->db->get("avance_tarea");
        return $avance->num_rows();
    }

    function create($data) {
        $this->db->insert_batch("avance_tarea", $data);
        return $this->db->insert_id();
    }

}

?>