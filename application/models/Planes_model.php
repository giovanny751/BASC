<?php

class Planes_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function detail(){
        $this->db->where("est_id",1);
        $planes = $this->db->get("planes");
        return $planes->result();
    }
    function create($data) {
         $this->db->insert_batch("planes",$data);
    }
//    function filtrobusqueda($codigo,$nombre,$fecha,$estado,$responsable){
    function filtrobusqueda($responsable,$estado){
//        $this->db->where('planes.est_id !=',3);
//        if(!empty($nombre))$this->db->where('pla_nombre',$nombre);
//        if(!empty($fecha))$this->db->where('pla_fechaInicio',$fecha);
//        if(!empty($estado))$this->db->where('est_id',$estado);
        if(!empty($responsable))$this->db->where('planes.emp_id',$responsable);
        if(!empty($estado))$this->db->where("planes.est_id",$estado);
        $this->db->select("planes.*");
        $this->db->select("empleado.Emp_Nombre");
        $this->db->select("empleado.Emp_Apellidos");
        $this->db->join("empleado","empleado.Emp_id = planes.emp_id"); 
        $planes = $this->db->get("planes");
        return $planes->result();
    }
    function delete($id){
        
        $this->db->where('pla_id',$id);
        $this->db->set('est_id',3);
        $this->db->update('planes');
    }
    function planxid($pla_id){
        
       $this->db->where('pla_id',$pla_id); 
       $planes = $this->db->get("planes");
        return $planes->result(); 
    }
    function responsables(){
        
        $this->db->select("empleado.Emp_Id");
        $this->db->select("empleado.Emp_Nombre");
        $this->db->select("empleado.Emp_Apellidos");
        $this->db->distinct("empleado.Emp_Id");
        $this->db->distinct("empleado.Emp_Nombre");
        $this->db->distinct("empleado.Emp_Apellidos");
        $this->db->join("empleado","empleado.Emp_Id = planes.emp_id");
        $planes = $this->db->get("planes");
        return $planes->result(); 
    }
    
    function actualizar($data,$pla_id){
        $this->db->where('pla_id',$pla_id); 
        $this->db->update("planes",$data);
        
    }
    
    function actividadhijoxplan($id, $cantidad = null, $orden,$inicia = null){
        
        if (!empty($orden)):
            $data = array(
                "actHij_padreid",
                "actHij_fechaInicio",
                "actHij_fechaFinalizacion",
                "actHij_presupuestoTotal",
                "actHij_descripcion"
            );
            $this->db->order_by($data[$orden], "asc");
        endif;
        if($cantidad == -1)$cantidad = "";
        
        $this->db->select("actividad_hijo.actHij_padreid");
        $this->db->select("actividad_hijo.actHij_fechaInicio");
        $this->db->select("actividad_hijo.actHij_fechaFinalizacion");
        $this->db->select("actividad_hijo.actHij_presupuestoTotal");
        $this->db->select("actividad_hijo.actHij_descripcion");
        $this->db->where("planes.pla_id",$id);
        $this->db->join("actividad_hijo","actividad_hijo.pla_id = planes.pla_id");
        if(!empty($inicia))
        $planes = $this->db->get("planes",$inicia ,$cantidad);
        else
            $planes = $this->db->get("planes",$cantidad);
        
//        echo $this->db->last_query();die;
        
        return $planes->result(); 
        
    }
    function actividadhijoxplancount($id, $cantidad = null, $orden,$inicia = null){
        
        
        $this->db->select("actividad_hijo.actHij_padreid");
        $this->db->select("actividad_hijo.actHij_fechaInicio");
        $this->db->select("actividad_hijo.actHij_fechaFinalizacion");
        $this->db->select("actividad_hijo.actHij_presupuestoTotal");
        $this->db->select("actividad_hijo.actHij_descripcion");
        $this->db->where("planes.pla_id",$id);
        $this->db->join("actividad_hijo","actividad_hijo.pla_id = planes.pla_id");
        $planes = $this->db->get("planes");
        return $planes->result(); 
        
    }
    function tareaxplan($id, $cantidad = null, $orden,$inicia = null){
        
        if (!empty($orden)):
            $data = array(
                "tar_id",
                "car_id",
                "tip_tipo",
                "tar_nombre",
                "tar_fechaInicio",
                "tar_fechaFinalizacion",
                "diferencia",
                "Emp_Nombre"
            );
            $this->db->order_by($data[$orden], "asc");
        endif;
        if($cantidad == -1)$cantidad = "";
        
        $this->db->select("CONCAT('<button type=".'"button"'."  class=".'"btn btn-success editarhistorial"'." tar_id='".",tarea.tar_id,"."' data-toggle=".'"modal"'." data-target=".'"#myModal0"'." >Nuevo avance</button>')");
        $this->db->select("tarea.car_id");
        $this->db->select("tipo.tip_tipo");
        $this->db->select("tar_nombre");
        $this->db->select("tarea.tar_fechaInicio");
        $this->db->select("tarea.tar_fechaFinalizacion");
        $this->db->select("DATEDIFF((tar_fechaFinalizacion),(tar_fechaInicio)) as diferencia");
        $this->db->select("empleado.Emp_Nombre");
        $this->db->where("planes.pla_id",$id);
        $this->db->join("tarea","tarea.pla_id = planes.pla_id");
        $this->db->join("empleado","empleado.emp_id = tarea.emp_id","LEFT");
        $this->db->join("tipo","tipo.tip_id = tarea.tip_id","LEFT");
        if(!empty($inicia))
        $planes = $this->db->get("planes",$inicia ,$cantidad);
        else
            $planes = $this->db->get("planes",$cantidad);   
        return $planes->result(); 
        
    }
    function tareaxplancount($id, $cantidad = null, $orden,$inicia = null){
        
        $this->db->select("'falta'");
        $this->db->select("'falta'");
        $this->db->select("tipo.tip_tipo");
        $this->db->select("tar_nombre");
        $this->db->select("tarea.tar_fechaInicio");
        $this->db->select("tarea.tar_fechaFinalizacion");
        $this->db->select("DATEDIFF((tar_fechaFinalizacion),(tar_fechaInicio)) as diferencia");
        $this->db->select("empleado.Emp_Nombre");
        $this->db->where("planes.pla_id",$id);
        $this->db->join("tarea","tarea.pla_id = planes.pla_id");
        $this->db->join("empleado","empleado.emp_id = tarea.emp_id","LEFT");
        $this->db->join("tipo","tipo.tip_id = tarea.tip_id","LEFT");
        $planes = $this->db->get("planes");
        return $planes->num_rows();
    }
    function tareaxplaninactivas($id, $cantidad = null, $orden,$inicia = null){
        
        if (!empty($orden)):
            $data = array(
                "tar_id",
                "tarea.car_id",
                "tip_tipo",
                "tar_nombre",
                "tar_fechaInicio",
                "tar_fechaFinalizacion",
                "diferencia",
                "Emp_Nombre"
            );
            $this->db->order_by($data[$orden], "asc");
        endif;
        if($cantidad == -1)$cantidad = "";
        
        
        $this->db->select("planes.pla_id");
        $this->db->select("tarea.tar_id");
        $this->db->select("tipo.tip_tipo");
        $this->db->select("tar_nombre");
        $this->db->select("tarea.tar_fechaInicio");
        $this->db->select("tarea.tar_fechaFinalizacion");
        $this->db->select("DATEDIFF((tar_fechaFinalizacion),(tar_fechaInicio)) as diferencia");
        $this->db->select("empleado.Emp_Nombre");
        $this->db->where("planes.pla_id",$id);
        $this->db->where("tarea.est_id",2);
        $this->db->join("tarea","tarea.pla_id = planes.pla_id");
        $this->db->join("empleado","empleado.emp_id = tarea.emp_id","LEFT");
        $this->db->join("tipo","tipo.tip_id = tarea.tip_id","LEFT");
        if(!empty($inicia))
        $planes = $this->db->get("planes",$inicia ,$cantidad);
        else
            $planes = $this->db->get("planes",$cantidad);
        return $planes->result(); 
        
    }
    function tareaxplaninactivascount($id, $cantidad = null, $orden,$inicia = null){
        
        $this->db->select("'falta'");
        $this->db->select("'falta'");
        $this->db->select("tipo.tip_tipo");
        $this->db->select("tar_nombre");
        $this->db->select("tarea.tar_fechaInicio");
        $this->db->select("tarea.tar_fechaFinalizacion");
        $this->db->select("DATEDIFF((tar_fechaFinalizacion),(tar_fechaInicio)) as diferencia");
        $this->db->select("empleado.Emp_Nombre");
        $this->db->where("planes.pla_id",$id);
        $this->db->where("tarea.est_id",2);
        $this->db->join("tarea","tarea.pla_id = planes.pla_id");
        $this->db->join("empleado","empleado.emp_id = tarea.emp_id","LEFT");
        $this->db->join("tipo","tipo.tip_id = tarea.tip_id","LEFT");
        $planes = $this->db->get("planes");
        
    }
    
        

}

?>