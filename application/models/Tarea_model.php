<?php

class Tarea_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        $this->db->insert("tarea", $data);
        return $this->db->insert_id();
    }
    function tareanorma($data){
        
        $this->db->insert_batch("norma_tarea",$data);
    }
    function traer_tarea_registro($data){
        $this->db->where("pla_id",$data['pla_id']);
        $this->db->where("tar_id",$data['tar_id']);
        $this->db->join("user","user.usu_id=tarea_registro.usu_id");
        $datos=$this->db->get("tarea_registro");
        return $datos->result();
    }
    function update($data,$idtarea){
        $this->db->where("tar_id",$idtarea);
        $this->db->update("tarea",$data);
    }
    function eliminartarea($tar_id){
        $this->db->where("tar_id",$tar_id);
        $this->db->delete("tarea");
    }
    function detail(){
        $this->db->order_by("tar_nombre");
        $tarea = $this->db->get("tarea");
        return $tarea->result();
    }
    function detailxid($id){
        $this->db->where("tar_id",$id);
        $tarea = $this->db->get("tarea");
        return $tarea->result();
    }
    function tarea_norma($id){
        $this->db->where("tar_id",$id);
        $tarea = $this->db->get("norma_tarea");
        return $tarea->result();
    }
    function detailxidplan($id){
        $this->db->where("pla_id",$id);
        $tarea = $this->db->get("tarea");
        return $tarea->result();
    }
    
    function responsables(){
        
        $this->db->join("empleado","empleado.Emp_id = tarea.emp_id");
        $tarea = $this->db->get("tarea");
        return $tarea->result();
    }
    
    function filtrobusqueda($plan,$tarea,$responsable){
        
        if(!empty($plan))$this->db->where("planes.pla_id",$plan);
        if(!empty($tarea))$this->db->where("tarea.tar_id",$tarea);
        if(!empty($responsable))$this->db->where("emp_id",$responsable);
        $this->db->select("tarea.tar_fechaInicio");
        $this->db->select("DATEDIFF((tar_fechaFinalizacion),(tar_fechaInicio)) diferencia");
        $this->db->select("tarea.tar_nombre");
        $this->db->select("tarea.tar_fechaFinalizacion");
        $this->db->select("empleado.Emp_Nombre");
        $this->db->select("tarea.tar_id");
        $this->db->select("tipo.tip_tipo");
        $this->db->select("planes.pla_nombre");
        $this->db->select("planes.pla_id");
        $this->db->order_by("planes.pla_id");
        $this->db->order_by("tarea.tar_id");
        $this->db->join("tarea","planes.pla_id = tarea.pla_id","left");
        $this->db->join("avance_tarea","avance_tarea.tar_id = tarea.tar_id ","LEFT");
        $this->db->join("tipo","tipo.tip_id = tarea.tip_id","left");
        $this->db->join("empleado","empleado.Emp_id = tarea.emp_id","left");
        $this->db->group_by('tarea.tar_id');
        $tarea = $this->db->get("planes");
        return $tarea->result();
        
    }
    
    function consultaTareasFlechas($idTarea,$metodo){
        switch ($metodo){
            case "flechaIzquierdaDoble":
                $this->db->where("tar_id = (select min(tar_id) from tarea)");
                break;
            case "flechaIzquierda":
                $this->db->where("tar_id < '".$idTarea."' ");
                $this->db->order_by("tar_id desc");
                break;
            case "flechaDerecha":
                $this->db->where("tar_id > '".$idTarea."' ");
                $this->db->order_by("tar_id asc");
                break;
            case "flechaDerechaDoble":
                $this->db->where("tar_id = (select max(tar_id) from tarea)");
                break;
            default :
                die;
                break;
        }
        $usuario = $this->db->get("tarea",1);
        return $usuario->result();
    }
    function fechaFinalTareaxPlan($pla_id){
        $this->db->select("MAX(tar_fechaFinalizacion) as fechafinalizacion",false);
        $this->db->where("pla_id",$pla_id);
        $fecha = $this->db->get("tarea");
        return $fecha->result();
    }
    function tareaxRiesgo($id) {
//    function tareaxplan($id, $cantidad = null, $orden,$inicia = null){

        $planes = $this->db->query("select avaTar_id,tar_fechaInicio,Emp_Nombre,tip_tipo,tar_nombre,diferencia,tar_fechaFinalizacion,MAX(avaTar_fechaCreacion) as ultimafechacreacion,tar_id,progreso from (
                    SELECT 
                    avance_tarea.avaTar_fechaCreacion as avaTar_fechaCreacion,
                    tarea.tar_id,
                    avance_tarea.avaTar_id,
                    `avance_tarea`.`avaTar_progreso` as `progreso`, `tarea`.`car_id`, 
                    `tipo`.`tip_tipo`, `tar_nombre`, `tarea`.`tar_fechaInicio`, 
                    `tarea`.`tar_fechaFinalizacion`, 
                    timestampdiff(HOUR, (tar_fechaInicio),(tar_fechaFinalizacion)) as diferencia, 
                    `empleado`.`Emp_Nombre` 
                    FROM `planes` 
                    JOIN `tarea` ON `tarea`.`pla_id` = `planes`.`pla_id` 
                    LEFT JOIN `avance_tarea` ON `avance_tarea`.`tar_id` = `tarea`.`tar_id` 
                    LEFT JOIN `empleado` ON `empleado`.`emp_id` = `tarea`.`emp_id` 
                    LEFT JOIN `tipo` ON `tipo`.`tip_id` = `tarea`.`tip_id` 
                    WHERE `planes`.`pla_id` = '".$id."' AND `tarea`.`est_id` = 1
                    ORDER BY avance_tarea.avaTar_fechaCreacion desc
                    ) tabla
                    GROUP BY tar_id
                    ");
        
//        echo $this->db->last_query();die;
        
        return $planes->result();
    }
}

?>