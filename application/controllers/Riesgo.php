<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Riesgo extends My_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('miscellaneous');
        $this->load->helper('security');
        validate_login($this->session->userdata('usu_id'));
    }
    function nuevoriesgo(){
        $this->layout->view("riesgo/nuevoriesgo");
    }
    function clasificacionriesgo(){
        
        $this->layout->view("riesgo/clasificacionriesgo");
        
    }
    function listadoriesgo(){
        
        $this->layout->view("riesgo/listadoriesgo");
        
    }
    function estadosaceptacion(){
        
        $this->layout->view("riesgo/estadosaceptacion");
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */