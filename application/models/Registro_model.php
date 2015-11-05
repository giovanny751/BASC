<?php

class Registro_model extends CI_Model {

    function __construct() { 
        parent::__construct();
    }

    function create($data) {

        $this->db->insert("registro", $data);
        return $this->db->insert_id();
    }

    function detailxid($id, $cantidad = null, $orden, $inicia = null) {
        if (!empty($orden)):
            $data = array(
                "registro.reg_id",
                "registro.tar_id",
                "registro.regCar_id",
                "registro.reg_version",
                "registro.reg_descripcion",
                "registro.reg_ruta",
                "registro.pla_id",
                "registro.reg_fechaCreacion",
                "registro.reg_fechaModificacion",
                "registro.userCreator"
            );
            $this->db->order_by($data[$orden], "asc");
        endif;
        if ($cantidad == -1)
            $cantidad = "";
        $this->db->select("registro.reg_id");
        $this->db->select("registro.tar_id");
        $this->db->select("registro.regCar_id");
        $this->db->select("registro.reg_version");
        $this->db->select("registro.reg_descripcion");
        $this->db->select("registro.reg_ruta");
        $this->db->select("registro.pla_id");
        $this->db->select("registro.reg_fechaCreacion");
        $this->db->select("registro.reg_fechaModificacion");
        $this->db->select("registro.userCreator");
        $this->db->join("tarea","tarea.tar_id = registro.tar_id","LEFT");
        $this->db->join("planes","planes.pla_id = registro.pla_id","LEFT");
        if (!empty($inicia))
            $avance = $this->db->get("registro", $inicia, $cantidad);
        else
            $avance = $this->db->get("registro", $cantidad);
        
//        echo $this->db->last_query();die;
        
        return $avance->result_array();
    }

    function detailxidcount($id, $cantidad = null, $orden, $inicia = null) {

        $this->db->join("tarea","tarea.tar_id = registro.tar_id","LEFT");
        $this->db->join("planes","planes.pla_id = registro.pla_id","LEFT");
        $avance = $this->db->get("registro");
        return $avance->num_rows();
    }
    function guardar_registro($post){
        $this->db->insert("registro",$post);
    }
    function registroxcarpeta($carpeta){
         $this->db->where("regCar_id",$carpeta);
//         $this->db->join("empleado","empleado.emp_id = registro.emp_id");
        $registro = $this->db->get("registro");
        return $registro->result();
    }
    function eliminarregistro($id){
        
        $this->db->where("reg_id",$id);
        $this->db->delete("registro");
    }
    function detallexidregitro($id){
        $this->db->where("reg_id",$id);
        $registro = $this->db->get("registro");
        return $registro->result();
    }
    function eliminar_actividad_hijo($post){
        $this->db->where("actHij_id",$post['actHij_id']);
        $this->db->delete("actividad_hijo");
    }
    function editar_actividad_hijo($post){
        $this->db->select("MIN(tarea.tar_fechaInicio) as minimo",false);
        $this->db->select("MAX(tarea.tar_fechaFinalizacion) as maximo",false);
        $this->db->select("actividad_hijo.*",false);
        $this->db->where("actividad_hijo.actHij_id",$post['acthij_id']);
        $this->db->join("tarea","tarea.actHij_id = actividad_hijo.actHij_padreid","LEFT");
        $this->db->group_by("actividad_hijo.actHij_id");
        $datos=$this->db->get("actividad_hijo");
//        echo $this->db->last_query();die;
        return $datos->result();
    }
    function consultaxcarpeta($car_id){
        
        $this->db->where("actHij_padreid",$car_id);
        $registro = $this->db->get("actividad_hijo");
        return $registro->result();
    }

}

?>