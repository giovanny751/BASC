<?php 
class Tipo_aseguradora__model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function save_tipo_aseguradora($post){
        if(isset($post['campo'])){ 
        $this->db->where($post["campo"],$post[$post["campo"]]);
        $id=$post[$post["campo"]];
            unset($post['campo']);
            $this->db->update('tipo_aseguradora',$post);
        }else{
            $this->db->insert('tipo_aseguradora',$post);
            $id=$this->db->insert_id();
        }
        return $id;
        
    }
    function delete_tipo_aseguradora($post){
        $this->db->set('ACTIVO','N');
        $this->db->where($post["campo"],$post[$post["campo"]]);
        $this->db->update('tipo_aseguradora');
    }
    function edit_tipo_aseguradora($post){
        $this->db->where($post["campo"],$post[$post["campo"]]);
        $datos=$this->db->get('tipo_aseguradora',$post);
        return $datos=$datos->result();
    }
    function consult_tipo_aseguradora($post){
            if(isset($post['TipAse_Id']))
        if($post['TipAse_Id']!="")
        $this->db->like('TipAse_Id',$post['TipAse_Id']);
                    if(isset($post['TipAse_Nombre']))
        if($post['TipAse_Nombre']!="")
        $this->db->like('TipAse_Nombre',$post['TipAse_Nombre']);
                    if(isset($post['activo']))
        if($post['activo']!="")
        $this->db->like('activo',$post['activo']);
                                    $this->db->select('TipAse_Nombre');
                        $this->db->where('ACTIVO','S');
        $datos=$this->db->get('tipo_aseguradora');
        $datos=$datos->result();
        return $datos;
    }
    function validatipoaseguradora($nombre){
        
        $this->db->where("TipAse_Nombre",$nombre);
        $data = $this->db->get("tipo_aseguradora");
        return $data->result();
    }
    function aseguradoras(){
        $this->db->where("activo","S");
        $aseguradora = $this->db->get("aseguradoras");
        return $aseguradora->result();
    }
}
?>
