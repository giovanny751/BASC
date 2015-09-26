<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Indicador extends My_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('miscellaneous');
        $this->load->helper('security');
        validate_login($this->session->userdata('usu_id'));
    }

    function nuevoindicador(){
        
        $this->layout->view("indicador/nuevoindicador");
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */