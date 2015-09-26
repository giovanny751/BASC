<?php

class Crea_formularios_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function tablas() {
        $datos = $this->db->query('show tables');
        return $datos->result();
    }

    public function info_table($post) {
        $datos = $this->db->query('describe ' . $post['tabla']);
        return $datos->result();
    }

    public function info_input() {
        
        $tipo = $this->db->get('tipo_inputs');
//        $datos = $this->db->query('select * from ');
        return $tipo->result();
    }

}
