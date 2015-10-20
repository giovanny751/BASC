<?php 
class Indicador_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function create($data){
        
        $this->db->insert("indicador",$data);
    }
    function search($tipo,$dimension,$dimensiondos){
        
        if(!empty($tipo))$this->db->where("",$tipo);
        if(!empty($dimension))$this->db->where("",$dimension);
        if(!empty($dimensiondos))$this->db->where("",$dimensiondos);
        
        $this->db->select("tipo.tip_tipo");
        $this->db->select("indicador.ind_indicador");
        $this->db->select("dimension.dim_descripcion as uno");
        $this->db->select("dimension2.dim_descripcion as dos");
        $this->db->select("indicador.ind_mide");
        $this->db->select("indicador.ind_frecuencia");
        $this->db->select("indicador.ind_minimo");
        $this->db->select("indicador.ind_maximo");
        $this->db->select("CONCAT(`empleado`.`Emp_Nombre`,' ',`empleado`.`Emp_Apellidos`) as nombre",false);
        $this->db->join("dimension","dimension.dim_id = indicador.dim_id","LEFT");
        $this->db->join("dimension2","dimension2.dim_id = indicador.dimdos_id","LEFT");
        $this->db->join("tipo","tipo.tip_id = indicador.tip_id","LEFT");
        $this->db->join("cargo","cargo.car_id = indicador.car_id","LEFT");
        $this->db->join("empleado","empleado.emp_id = indicador.emp_id","LEFT");
        $indicadores = $this->db->get("indicador");
        return $indicadores->result();
    }
}
?>
