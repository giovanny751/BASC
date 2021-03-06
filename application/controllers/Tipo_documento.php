<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tipo_documento extends My_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('Tipo_documento__model');
        $this->load->helper('security');
        $this->load->helper('miscellaneous');
        $this->load->library('tcpdf/tcpdf.php');
        $this->data["usu_id"] = $this->session->userdata('usu_id');
        validate_login($this->data["usu_id"]);
    }

    function index() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->data['post'] = $this->input->post();
            $this->layout->view('tipo_documento/index', $this->data);
        else:
            $this->layout->view("permisos");
        endif;
    }

    function consult_tipo_documento() {
//        if ($this->consultaacceso($this->data["usu_id"])):
            $post = $this->input->post();
            $this->data['post'] = $this->input->post();
            $this->data['datos'] = $this->Tipo_documento__model->consult_tipo_documento($post);
            $this->layout->view('tipo_documento/consult_tipo_documento', $this->data);
//        else:
//            $this->layout->view("permisos");
//        endif;
    }

    function save_tipo_documento() {
        $post = $this->input->post();
        $id = $this->Tipo_documento__model->save_tipo_documento($post);
        //redirect('index.php/Tipo_documento/consult_tipo_documento', 'location');
    }

    function delete_tipo_documento() {
        $post = $this->input->post();
        $this->Tipo_documento__model->delete_tipo_documento($post);
        redirect('index.php/Tipo_documento/consult_tipo_documento', 'location');
    }

    function edit_tipo_documento() {
        $this->data['post'] = $this->input->post();
        if (!isset($this->data['post']['campo']))
            redirect('index.php/Tipo_documento/consult_tipo_documento', 'location');
        $this->data['datos'] = $this->Tipo_documento__model->edit_tipo_documento($this->data['post']);
        $this->layout->view('tipo_documento/index', $this->data);
    }
    function autocomplete_tipDoc_Descripcion() {
        $info = auto("tipo_documento", "tipDoc_tipo", "tipDoc_Descripcion", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }

}

?>
