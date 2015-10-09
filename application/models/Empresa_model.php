<?php

class Empresa_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function create($data) {

         $this->db->insert_batch("empresa",$data);
         $this->db->select('*');
        $datos = $this->db->get('empresa');
        $datos = $datos->result();
//        print_r($datos);
        return $datos;
    }
        function detail(){
        $empresa = $this->db->get("empresa");
        return $empresa->result();
    }
    
    function update($data){
        
        $this->db->update("empresa",$data);
        $this->db->select('*');
        $datos = $this->db->get('empresa');
        $datos = $datos->result();
//        print_r($datos);
        return $datos;
        
        
    }


}

?>