<?php

class Notificacion_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function detail() {

        $notificacion = $this->db->get("notificacion");
        return $notificacion->result();
    }


}

?>