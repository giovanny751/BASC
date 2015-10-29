<?php 
class Actividadpadre_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function create($id,$nombre,$pla_id,$actPad_id){
        
          $this->db->set("actPad_codigo",$nombre);
          $this->db->set("actPad_nombre",$id);
          $this->db->set("pla_id",$pla_id);
          if(empty($actPad_id)){
             $this->db->insert("actividad_padre"); 
          }else{
              $this->db->where("actPad_id",$actPad_id);
              $this->db->update("actividad_padre"); 
          }
            
    }
    function consultar_actividad_padre($actPad_id){
        $this->db->where('actPad_id',$actPad_id);
        $retult=$this->db->get('actividad_padre');
        return $retult->result();
    }
    function detailxid($id){
        $this->db->where("actividad_padre.pla_id",$id);
        $this->db->join("planes","planes.pla_id = actividad_padre.pla_id");
        $plan = $this->db->get("actividad_padre");
        return $plan->result();
    }
    function searchregister($idactividad,$descripcion,$pla_id){
        
        $this->db->select("actPad_id as uno, actPad_nombre as dos, actPad_codigo as tres");
        $this->db->where("actPad_nombre",$idactividad);
        $this->db->where("actPad_codigo",$descripcion);
        $this->db->where("pla_id",$pla_id);
        $data = $this->db->get("actividad_padre");
        return $data->result();
    }
    function cargardatos($actividad){
        $this->db->where("actPad_id",$actividad);
        $data = $this->db->get("actividad_padre");
        return $data->result();
    }
    function eliminaractividad($actividad){
        $this->db->where("actPad_id",$actividad);
        $data = $this->db->delete("actividad_padre");
    }
    function modificardatos($actividad,$id,$nombre){
        $this->db->where("actPad_id",$actividad);
        $this->db->set("actPad_nombre",$id);
        $this->db->set("actPad_codigo",$nombre);
        $this->db->update("actividad_padre");
    }
}
?>
