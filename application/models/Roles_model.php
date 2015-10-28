<?php

class Roles_model extends CI_Model {

    function __construct() {
        parent::__construct();
        
        
    }
    function cantidadroles($id){
        
        $this->db->select('roles.rol_id,rol_nombre');
        $this->db->distinct('roles.rol_id,rol_nombre');
        $this->db->where('permisos.usu_id',$id);
        $this->db->join('permisos','permisos.rol_id = roles.rol_id');
        $roles = $this->db->get('roles');
        return $roles->result_array();
    }
    
    function roles(){
        
        $consulta = $this->db->get('roles');
        return $consulta->result_array();
    }
    function rolesall(){
        $this->db->select("rol_id");
        $this->db->select("rol_nombre");
        $this->db->select("rol_fechaModificacion");
        $this->db->select("rol_fechaCreacion");
        $consulta = $this->db->get('roles');
        return $consulta->result();
    }
    
    function guardarrol($nombre){
        $this->db->set('rol_nombre',$nombre);
        $this->db->set('rol_fechaCreacion',date("Y-m-d"));
        $this->db->insert('roles');
        return $this->db->insert_id();
    } 
    
    function modificarrol($id){
        $this->db->where("rol_id",$id);
        $this->db->set("rol_fechaModificacion",date('Y-m-d H:i:s'));
        $this->db->update('roles');
    }
    function insertapermisos($insert){
//        var_dump($insert);die;
        $this->db->insert_batch('permisos_rol',$insert);
    }
    
    function eliminarrol($id){
        $this->db->where('rol_id',$id);
        $this->db->delete('roles');
    }
    function eliminpermisosrol($idrol){
        $this->db->where('rol_id',$idrol);
        $this->db->delete('permisos_rol');
    }
    function rolxusuario($usu_id){
        $this->db->where("rol_estado",1);
        $this->db->where("permisos.usu_id",$usu_id);
        $this->db->join("permisos","permisos.rol_id = roles.rol_id");
        $rol = $this->db->get("roles");
        return $rol->result();
    }
    function totalroles($usu_id){
        $this->db->where("permisos.usu_id",$usu_id);
        $rol = $this->db->get("permisos");
        return $rol->result();
        
    }
    function permisosusuario($iduser,$idrol){
        $data = array(
            "usu_id"=>$iduser,
            "rol_id"=>$idrol
        ); 
        $this->db->insert("permisos",$data);
    }
}