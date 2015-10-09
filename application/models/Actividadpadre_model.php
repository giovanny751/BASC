<?php 
class Actividadpadre_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function create($id,$nombre,$pla_id){
        
          $this->db->set("actPad_nombre",$nombre);
          $this->db->set("actPad_codigo",$id);
          $this->db->set("pla_id",$pla_id);
            $this->db->insert("actividad_padre");
    }
    function detailxid($id){
        $this->db->where("actividad_padre.pla_id",$id);
        $this->db->join("planes","planes.pla_id = actividad_padre.pla_id");
        $plan = $this->db->get("actividad_padre");
        return $plan->result();
    }
}
?>
