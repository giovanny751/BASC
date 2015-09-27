<?php

class Categoria_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function search($categoria) {
        $this->db->where("cat_categoria",$categoria);
        $categoria =$this->db->get("categoria");
        return $categoria->result();
    }
    function insert($categoria) {
        $this->db->set("cat_categoria",$categoria);
        $this->db->insert("categoria");
    }


}

?>