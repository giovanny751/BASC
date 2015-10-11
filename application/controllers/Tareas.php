<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tareas extends My_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Ingreso_model');
        $this->load->model('Roles_model');
        $this->load->helper('miscellaneous');
        $this->load->helper('security');
        $this->data["usu_id"] = $this->session->userdata('usu_id');
        validate_login($this->data["usu_id"]);
    }

    function nuevatarea() {

        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->load->model('Estados_model');
            $this->load->model('Tarea_model');
            $this->load->model('Cargo_model');
            $this->load->model('Planes_model');
            $this->load->model('Dimension2_model');
            $this->load->model('Dimension_model');
            $this->load->model('Tipo_model');
            $this->load->model('Notificacion_model');
            if (!empty($this->input->post("tar_id"))):
                $this->data['tarea'] = $this->Tarea_model->detailxid($this->input->post("tar_id"))[0];
//                $this->data['tarea'] = $this->data['tarea'];
            endif;
            $this->data['notificacion'] = $this->Notificacion_model->detail();
            $this->data['estados'] = $this->Estados_model->detail();
            $this->data['tipo'] = $this->Tipo_model->detail();
            $this->data['planes'] = $this->Planes_model->detail();
            $this->data['cargo'] = $this->Cargo_model->allcargos();
            $this->data['dimension'] = $this->Dimension_model->detail();
            $this->data['dimension2'] = $this->Dimension2_model->detail();
            $this->layout->view("tareas/nuevatarea", $this->data);
        } else {
            $this->layout->view("permisos");
        }
    }

    function listadoavance() {

        $this->load->model('AvanceTarea_model');
        $cantidad = $this->input->post("length");
        $orden = $this->input->post("order[0][column]");
        $inicia = intval($_REQUEST['start']);
        $tabla = $this->AvanceTarea_model->detailxid(1,$cantidad,$orden,$inicia);
        $total = count($tabla);
        $sEcho = intval($_REQUEST['draw']);
        
        $data = array();
        $d = 0;
        foreach ($tabla as $total => $num):
//            echo $total;
            $i = 0;
            foreach ($num as $campo => $valor):
                $data['data'][$d][$i] =  $valor;
                $i++;
            endforeach;
            $d++;
        endforeach;
        $data["draw"] = $sEcho;
        $data['recordsTotal'] = count($tabla);
        $data['recordsFiltered'] = count($tabla);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function guardaravance() {

        try {
            $this->load->model('AvanceTarea_model');
            $this->load->model('AvanceNotificacion_model');
            $data[] = array(
                "tar_id" => $this->input->post('idtarea'),
                "avaTar_fecha" => $this->input->post("fecha"),
                "avaTar_progreso" => $this->input->post("progreso"),
                "avaTar_horasTrabajadas" => $this->input->post("horastrabajadas"),
                "avaTar_costo" => $this->input->post("costo"),
                "avaTar_comentarios" => $this->input->post("comentarios"),
                "avaTar_fechaCreacion" => date("Y-m-d H:i:s"),
                "usu_id" => $this->data["usu_id"]
            );
            $id = $this->AvanceTarea_model->create($data);
            $notificar = array();
            if (!empty($this->input->post("notificar"))):
                $notificacion = $this->input->post("notificar");
                for ($i = 0; $i < count($notificacion); $i++) {
                    $notificar[$i] = array(
                        "not_id" => $notificacion[$i],
                        "avaTar_id" => $id
                    );
                }
                $this->AvanceNotificacion_model->create($notificar);
            endif;
        } catch (exception $e) {
            
        }
    }

    function guardartarea() {
        try {
            $this->load->model('Tarea_model');


            if (!empty($this->input->post('id'))):
                $data = array(
                    "act_id" => $this->input->post("actividad"),
                    "car_id" => $this->input->post("cargo"),
                    "claRie_id" => $this->input->post("clasificacionriesgo"),
                    "tar_costopresupuestado" => $this->input->post("costrospresupuestados"),
                    "tar_descripcion" => $this->input->post("descripcion"),
                    "dim_id" => $this->input->post("dimensiondos"),
                    "dim2_id" => $this->input->post("dimensionuno"),
                    "est_id" => $this->input->post("estado"),
                    "tar_fechaInicio" => $this->input->post("fechaIncio"),
                    "tar_fechaUltimaMod" => date("Y-m-d H:i:s"),
                    "tar_fechaFinalizacion" => $this->input->post("fechafinalizacion"),
                    "tar_nombre" => $this->input->post("nombre"),
                    "emp_id" => $this->input->post("nombreempleado"),
                    "tar_peso" => $this->input->post("peso"),
                    "pla_id" => $this->input->post("plan"),
                    "tip_id" => $this->input->post("tipo"),
                    "tipRie_id" => $this->input->post("tiposriesgos")
                );
                $idtarea = $this->input->post('id');
                $actualizar = $this->Tarea_model->update($data, $idtarea);
                $consultaxid = $this->Tarea_model->detailxid($data);
            else:
                $data = array(
                    "act_id" => $this->input->post("actividad"),
                    "car_id" => $this->input->post("cargo"),
                    "claRie_id" => $this->input->post("clasificacionriesgo"),
                    "tar_costopresupuestado" => $this->input->post("costrospresupuestados"),
                    "tar_descripcion" => $this->input->post("descripcion"),
                    "dim_id" => $this->input->post("dimensiondos"),
                    "dim2_id" => $this->input->post("dimensionuno"),
                    "est_id" => $this->input->post("estado"),
                    "tar_fechaInicio" => $this->input->post("fechaIncio"),
                    "tar_fechaCreacion" => date("Y-m-d H:i:s"),
                    "tar_fechaFinalizacion" => $this->input->post("fechafinalizacion"),
                    "tar_nombre" => $this->input->post("nombre"),
                    "emp_id" => $this->input->post("nombreempleado"),
                    "tar_peso" => $this->input->post("peso"),
                    "pla_id" => $this->input->post("plan"),
                    "tip_id" => $this->input->post("tipo"),
                    "tipRie_id" => $this->input->post("tiposriesgos")
                );
                $idtarea = $this->Tarea_model->create($data);

            endif;
            $articulosnorma = $this->input->post("articulosnorma");
            $data = array();
            if (!empty($articulosnorma)) {
                for ($i = 0; $i < count($articulosnorma); $i++):
                    $data[$i] = array(
                        "nor_id" => $articulosnorma[$i],
                        "tar_id" => $idtarea
                    );
                endfor;
                $this->Tarea_model->tareanorma($data);
            }
            $this->output->set_content_type('application/json')->set_output(json_encode($consultaxid[0]));
        } catch (Exception $e) {
            
        }
    }

    function listadotareas() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->load->model('Planes_model');
            $this->load->model('Tarea_model');
            $this->data["planes"] = $this->Planes_model->detail();
            $this->data["tareas"] = $this->Tarea_model->detail();
            $this->data["responsables"] = $this->Tarea_model->responsables();
            $this->layout->view("tareas/listadotareas", $this->data);
        else:
            $this->layout->view("permisos");
        endif;
    }

    function consultatareas() {

        try {
            $this->load->model('Tarea_model');
            $this->data["tareas"] = $this->Tarea_model->filtrobusqueda(
                    $this->input->post("Plan"), $this->input->post("filtrotarea"), $this->input->post("responsable")
            );
            $this->output->set_content_type('application/json')->set_output(json_encode($this->data["tareas"]));
        } catch (exception $e) {
            
        }
    }

    function actividadhijo() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->load->model('Tipo_model');
            $this->data['tipo'] = $this->Tipo_model->detail();
            $this->layout->view("tareas/actividadhijo", $this->data);
        else:
            $this->layout->view("permisos");
        endif;
    }

    function listadoactividades() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->load->model('Estados_model');
            $this->layout->view("tareas/listadoactividades");
        else:
            $this->layout->view("permisos");
        endif;
    }

    function registro() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->layout->view("tareas/registro");
        else:
            $this->layout->view("permisos");
        endif;
    }

    function agregarregistro() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->layout->view("tareas/agregarregistro");
        else:
            $this->layout->view("permisos");
        endif;
    }

    function guardaractividadhijo() {
        try {
            $this->load->model('Actividad_model');
            $data[] = array(
                "pad_id" => $this->input->post("idpadre"),
                "act_nombre" => $this->input->post("nombre"),
                "act_fechaInicio" => $this->input->post("fechainicio"),
                "act_fechaFinalizacion" => $this->input->post("fechafinalizacion"),
                "act_peso" => $this->input->post("peso"),
                "act_riesgoSancion" => $this->input->post("riesgosancion"),
                "tip_id" => $this->input->post("tipo"),
                "act_presupuestoTotal" => $this->input->post("presupuestototal"),
                "act_costoReal" => $this->input->post("costoreal"),
                "act_descripcion" => $this->input->post("descripcion"),
                "act_modoVerificacion" => $this->input->post("modoverificacion"),
            );
            $this->Actividad_model->create($data);
        } catch (exception $e) {
            
        }
    }

    function planes() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->load->model('User_model');
            $this->load->model("Estados_model");
            $this->load->model("Cargo_model");
            $this->load->model("Planes_model");
            $this->load->model("Norma_model");
            $this->data['plan'] = array();
            if (!empty($this->input->post('pla_id'))) {
                $this->data['plan'] = $this->Planes_model->planxid($this->input->post('pla_id'));
                $this->data['tareaxplan'] = $this->Planes_model->tareaxplan($this->input->post('pla_id'));
                $this->data['tareaxplaninactivas'] = $this->Planes_model->tareaxplaninactivas($this->input->post('pla_id'));
//                var_dump($this->data['tareaxplan']);die;
            }
            $this->data['norma'] = $this->Norma_model->detail();
            $this->data['estado'] = $this->Estados_model->detail();
            $this->data['cargo'] = $this->Cargo_model->allcargos();
            $this->layout->view("tareas/planes", $this->data);
        else:
            $this->layout->view("permisos");
        endif;
    }

    function actualizarplan() {
        try {
            $data = array(
                "pla_avanceProgramado" => $this->input->post("avanceprogramado"),
                "pla_avanceReal" => $this->input->post("avancereal"),
                "car_id" => $this->input->post("cargo"),
                "pla_costoReal" => $this->input->post("costoreal"),
                "pla_descripcion" => $this->input->post("descripcion"),
                "pla_eficiencia" => $this->input->post("eficiencia"),
                "emp_id" => $this->input->post("empleado"),
                "est_id" => $this->input->post("estado"),
                "pla_fechaFin" => $this->input->post("fechafin"),
                "pla_fechaInicio" => $this->input->post("fechainicio"),
                "pla_nombre" => $this->input->post("nombre"),
                "nor_id" => $this->input->post("norma"),
                "pla_presupuesto" => $this->input->post("presupuesto")
            );
            $this->load->model("Planes_model");
            $this->Planes_model->actualizar($data, $this->input->post('pla_id'));
        } catch (Exception $e) {
            
        }
    }

    function guardaractividadpadre() {

        try {
            $this->load->model("Actividadpadre_model");
            $this->Actividadpadre_model->create(
                    $this->input->post("idactividad"), $this->input->post("nombreactividad"), $this->input->post("pla_id")
            );
        } catch (exception $e) {
            
        }
    }

    function consultaractividadpadre() {

        $this->load->model("Actividadpadre_model");
        $data = $this->Actividadpadre_model->detailxid($this->input->post('plan'));
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function guardarplan() {
        try {
            $this->load->model("Planes_model");
            $data[] = array(
                'est_id' => $this->input->post('estado'),
                'pla_nombre' => $this->input->post('nombre'),
                'pla_descripcion' => $this->input->post('descripcion'),
                'pla_fechaInicio' => $this->input->post('fechainicio'),
                'pla_fechaFin' => $this->input->post('fechafin'),
                'pla_avanceProgramado' => $this->input->post('avanceprogramado'),
                'pla_presupuesto' => $this->input->post('presupuesto'),
                'pla_avanceReal' => $this->input->post('avancereal'),
                'pla_costoReal' => $this->input->post('costoreal'),
                'pla_eficiencia' => $this->input->post('eficiencia'),
                'emp_id' => $this->input->post('empleado'),
                'car_id' => $this->input->post('cargo'),
                'nor_id' => $this->input->post('norma')
            );
            $this->Planes_model->create($data);
        } catch (exception $e) {
            
        }
    }

    function listadoplanes() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->load->model("Estados_model");
            $this->load->model("Planes_model");
            $this->data['responsable'] = $this->Planes_model->responsables();
            $this->data['estados'] = $this->Estados_model->finalizados();
            $this->layout->view("tareas/listadoplanes", $this->data);
        else:
            $this->layout->view("permisos");
        endif;
    }

    function consultaplanes() {
        $this->load->model("Planes_model");
        $planes = $this->Planes_model->filtrobusqueda(
                $this->input->post("codigo"), $this->input->post("nombre"), $this->input->post("fecha"), $this->input->post("estado"), $this->input->post("responsable"));
        $this->output->set_content_type('application/json')->set_output(json_encode($planes));
    }

    function eliminarplan() {
        try {
            $this->load->model("Planes_model");
            $this->Planes_model->delete($this->input->post('id'));
        } catch (exception $e) {
            
        }
    }

    function listadoregistros() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->layout->view("tareas/listadoregistros");
        else:
            $this->layout->view("permisos");
        endif;
    }

    function configuracionsistema() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->layout->view("tareas/configuracionsistema");
        else:
            $this->layout->view("permisos");
        endif;
    }

    function autocompletar() {
        $info = auto("planes", "pla_id", "pla_nombre", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }

    function autocompletarfechainicio() {
        $info = auto("planes", "pla_id", "pla_fechaInicio", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }

    function autocompletarresponsable() {
        $info = auto("planes", "pla_id", "pla_nombre", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }

    function consultaTareasFlechas() {
        try {
            $this->load->model("Tarea_model");
            $idTarea = $this->input->post("idTarea");
            $metodo = $this->input->post("metodo");
            $campos = $this->Tarea_model->consultaTareasFlechas($idTarea, $metodo);
            if (!empty($campos)) {
                $this->output->set_content_type('application/json')->set_output(json_encode($campos[0]));
            }
        } catch (Exception $e) {
            
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */