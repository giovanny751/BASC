<?php 
class Riesgoclasificaciontipo_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    
    
    function create($categoria,$tipo){
        
        $this->db->set("rieCla_id",$categoria);
        $this->db->set("rieClaTip_tipo	",$tipo);
        $this->db->insert("riesgo_clasificacion_tipo");
    }
    function exist($categoria,$tipo){
        
        $this->db->where("riesgo_clasificacion_tipo.rieCla_id",$categoria);
        $this->db->where("riesgo_clasificacion_tipo.rieClaTip_tipo",$tipo);
        $data = $this->db->get("riesgo_clasificacion_tipo");
        return $data->result();
    }
    
    function tipoxcategoria($categoria){
        $this->db->where("rieCla_id",$categoria);
        $data = $this->db->get("riesgo_clasificacion_tipo");
        return $data->result();
    }
    
}
?>
