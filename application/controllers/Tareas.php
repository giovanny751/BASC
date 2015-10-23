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
            $this->load->model("Riesgoclasificacion_model");
            if (!empty($this->input->post("tar_id"))):
                $this->data['tarea'] = $this->Tarea_model->detailxid($this->input->post("tar_id"))[0];
//                $this->data['tarea'] = $this->data['tarea'];
            endif;
            $this->data['pla_id'] = "";
            if(!empty($this->input->post("pla_id"))){
                $this->data['pla_id'] = $this->input->post("pla_id");
            }
            $this->data['categoria'] = $this->Riesgoclasificacion_model->detail();
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

        $this->load->model('Avancetarea_model');
        $cantidad = $this->input->post("length");
        $orden = $this->input->post("order[0][column]");
        $inicia = intval($_REQUEST['start']);
        $tabla = $this->Avancetarea_model->detailxid(1, $cantidad, $orden, $inicia);
        $alldatacount = $this->Avancetarea_model->detailxidcount(1, $cantidad, $orden, $inicia);
        $data = array();
        $data['data'] = arregloconsulta($tabla);
        $data["draw"] = intval($_REQUEST['draw']);
        $data['recordsTotal'] = $alldatacount;
        $data['recordsFiltered'] = $alldatacount;
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function listadotareasxplanfiltro() {

        $this->load->model('Planes_model');
        $cantidad = $this->input->post("length");
        $orden = $this->input->post("order[0][column]");
        $inicia = intval($_REQUEST['start']);
//        $this->data['tareaxplan'] = $this->Planes_model->tareaxplan(1,$cantidad,$orden,$inicia);
        $tabla = $this->Planes_model->tareaxplan(7, $cantidad, $orden, $inicia);
        $alldatacount = $this->Planes_model->tareaxplancount(7, $cantidad, $orden, $inicia);
        $data = array();
        $data['data'] = arregloconsulta($tabla);
        $data["draw"] = intval($_REQUEST['draw']);
        $data['recordsTotal'] = $alldatacount;
        $data['recordsFiltered'] = $alldatacount;
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    function listadotareasxactividadhijo(){
        
        $this->load->model('Planes_model');
        $cantidad = $this->input->post("length");
        $orden = $this->input->post("order[0][column]");
        $inicia = intval($_REQUEST['start']);
//        $this->data['tareaxplan'] = $this->Planes_model->tareaxplan(1,$cantidad,$orden,$inicia);
        $tabla = $this->Planes_model->actividadhijoxplan(7, $cantidad, $orden, $inicia);
        $alldatacount = $this->Planes_model->actividadhijoxplancount(7, $cantidad, $orden, $inicia);
        $data = array();
        $data['data'] = arregloconsulta($tabla);
        $data["draw"] = intval($_REQUEST['draw']);
        $data['recordsTotal'] = $alldatacount;
        $data['recordsFiltered'] = $alldatacount;
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        
    }

    function listadotareasinactivasxplanfiltro() {

        $this->load->model('Planes_model');
        $cantidad = $this->input->post("length");
        $orden = $this->input->post("order[0][column]");
        $inicia = intval($_REQUEST['start']);
//$this->data['tareaxplaninactivas'] = $this->Planes_model->tareaxplaninactivas($this->input->post('pla_id'));
        $tabla = $this->Planes_model->tareaxplaninactivas(6, $cantidad, $orden, $inicia);
        $alldatacount = $this->Planes_model->tareaxplaninactivascount(6, $cantidad, $orden, $inicia);
        $data = array();
        $data['data'] = arregloconsulta($tabla);
        $data["draw"] = intval($_REQUEST['draw']);
        $data['recordsTotal'] = $alldatacount;
        $data['recordsFiltered'] = $alldatacount;
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function guardaravance() {

        try {
            $this->load->model('Avancetarea_model');
            $this->load->model('Avancenotificacion_model');
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
            $id = $this->Avancetarea_model->create($data);
            $notificar = array();
            if (!empty($this->input->post("notificar"))):
                $notificacion = $this->input->post("notificar");
                for ($i = 0; $i < count($notificacion); $i++) {
                    $notificar[$i] = array(
                        "not_id" => $notificacion[$i],
                        "avaTar_id" => $id
                    );
                }
                $this->Avancenotificacion_model->create($notificar);
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
                $consultaxid = $this->Tarea_model->detailxid($this->input->post('id'));
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
                $consultaxid = $this->Tarea_model->detailxid($idtarea);
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

    function listadoactividades() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->load->model('Estados_model');
            $this->layout->view("tareas/listadoactividades");
        else:
            $this->layout->view("permisos");
        endif;
    }

    function registro() {
//        if ($this->consultaacceso($this->data["usu_id"])):
        $this->load->model('Registrocarpeta_model');
        $this->load->model('Planes_model');
        $this->data['carpeta'] = $this->Registrocarpeta_model->detail();
        $this->data['plan'] = $this->Planes_model->detail();
        $this->layout->view("tareas/registro",$this->data);
    }
    function tareaxidplan(){
        
        try{
            $this->load->model('Tarea_model');
            $this->data['tarea'] = $this->Tarea_model->detailxidplan($this->input->post('pla_id'));
            $this->output->set_content_type('application/json')->set_output(json_encode($this->data['tarea']));
        }catch(exception $e){
            
        }
        
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
                "actHij_padreid" => $this->input->post("idpadre"),
                "actHij_nombre" => $this->input->post("nombre"),
                "actHij_fechaInicio" => $this->input->post("fechainicio"),
                "actHij_fechaFinalizacion" => $this->input->post("fechafinalizacion"),
                "actHij_peso" => $this->input->post("peso"),
                "actHij_riesgoSancion" => $this->input->post("riesgosancion"),
                "tip_id" => $this->input->post("tipo"),
                "actHij_presupuestoTotal" => $this->input->post("presupuestototal"),
                "actHij_costoReal" => $this->input->post("costoreal"),
                "actHij_descripcion" => $this->input->post("descripcion"),
                "actHij_modoVerificacion" => $this->input->post("modoverificacion"),
                "pla_id" => $this->input->post("pla_id"),
                "actHij_fechaCreacion" => date("Y-m-d H:i:s")
            );
            $this->Actividad_model->create($data);
            $data = $this->Actividad_model->search($this->input->post("idpadre"));
            $this->output->set_content_type('application/json')->set_output(json_encode($data));
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
            $this->load->model("Notificacion_model");
            $this->load->model("Actividad_padre__model");
            $this->load->model("Registrocarpeta_model");
            $this->data['plan'] = array();
            if (!empty($this->input->post('pla_id'))) {
                $carpeta = $this->Registrocarpeta_model->detailxplan($this->input->post('pla_id'));
                $this->data['carpetas'] = $carpeta;
                $d = array();
                foreach($carpeta as $c){
                    $d[$c->regCar_id][$c->regCar_nombre][] = array(1,1,1,1,5,5);
                }
                $this->data['carpeta'] = $d;
                $this->data["actividadpadre"] = $this->Actividad_padre__model->detail($this->input->post('pla_id'));
                $this->data['plan'] = $this->Planes_model->planxid($this->input->post('pla_id'));
                $actividades = $this->Planes_model->actividadhijoxplan($this->input->post('pla_id'));
                $i = array();
                foreach($actividades as $ac){
                    $i[$ac->actPad_id][$ac->actPad_nombre][] = array(
                       $ac->actHij_fechaInicio ,
                       $ac->actHij_fechaFinalizacion ,
                       $ac->actHij_presupuestoTotal ,
                       $ac->actHij_descripcion,
                       $ac->actHij_nombre 
                    );
                }
                $this->data["actividades"] = $i;
                
//                echo "<pre>";
//                var_dump($this->data["actividades"]);die;
            }
            $this->data['notificacion'] = $this->Notificacion_model->detail();
            $this->data['norma'] = $this->Norma_model->detail();
            $this->data['estado'] = $this->Estados_model->detail();
            $this->data['cargo'] = $this->Cargo_model->allcargos();
            $this->layout->view("tareas/planes", $this->data);
        else:
            $this->layout->view("permisos");
        endif;
    }
    function guardarcarpetaregistro(){
        $this->load->model("Registrocarpeta_model");
        $this->Registrocarpeta_model->create($this->input->post("nombrecarpeta"),
        $this->input->post("descripcioncarpeta"),
        $this->input->post("pla_id")
               );
        $data = $this->Registrocarpeta_model->detailxplan($this->input->post("pla_id"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
        
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
            $actividades = $this->Actividadpadre_model->searchregister(
                    $this->input->post("idactividad"), 
                    $this->input->post("nombreactividad"), 
                    $this->input->post("pla_id")
                    );
            
//            var_dump($actividades);die;
            
            $this->output->set_content_type('application/json')->set_output(json_encode($actividades[0]));
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
//        $planes = $this->Planes_model->filtrobusqueda(
//                $this->input->post("codigo"), $this->input->post("nombre"), $this->input->post("fecha"), $this->input->post("estado"), $this->input->post("responsable"));
        $planes = $this->Planes_model->filtrobusqueda(
                 $this->input->post("nombre"),
                 $this->input->post("responsable"),
                 $this->input->post("estado")
                );
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
    
    function guardarcarpeta(){
        
        $this->load->model("Registrocarpeta_model");
        $this->Registrocarpeta_model->create(
                $this->input->post("nombrecarpeta"),
                $this->input->post("descripcioncarpeta")
                );
    }
    function guardarregistro() {
        try {
            $post = $this->input->post();
            $this->load->model('Registro_model');

            if (isset($_FILES['archivo']['name']))
                if (!empty($_FILES['archivo']['name']))
                    $post['empReg_archivo'] = basename($_FILES['archivo']['name']);
                
            $targetPath = "./uploads/empleado";
            if (!file_exists($targetPath)) {
                mkdir($targetPath, 0777, true);
            }
            $targetPath = "./uploads/registro/" ;
            
            $data = array(
                "pla_id"=>$this->input->post("plan"),
                "tar_id"=>$this->input->post("tarea"),
                "regCar_id"=>$this->input->post("carpeta"),
                "reg_version"=>$this->input->post("version"),
                "reg_descripcion"=>$this->input->post("descripcion"),
                "reg_fechaCreacion"=>date('Y-m-d H:i:s'),
                "userCreator"=>$this->data["usu_id"],
                "reg_ruta"=>$targetPath
            );    
                
            
            
            $this->Registro_model->create($data);
            
            if (!file_exists($targetPath)) {
                mkdir($targetPath, 0777, true);
            }

            $target_path = $targetPath . '/' . basename($_FILES['archivo']['name']);
            if (move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) {
                
            }
            redirect('index.php/tareas/registro', 'location');
        } catch (exception $e) {
            
        }
    }
    
    function listadoregistrotable() {

                $this->load->model('Registro_model');
                $cantidad = $this->input->post("length");
                $orden = $this->input->post("order[0][column]");
                $inicia = intval($_REQUEST['start']);
                $tabla = $this->Registro_model->detailxid(1, $cantidad, $orden, $inicia);
                $alldatacount = $this->Registro_model->detailxidcount(1, $cantidad, $orden, $inicia);
                $data = array();
                $data['data'] = arregloconsulta($tabla);
                $data["draw"] = intval($_REQUEST['draw']);
                $data['recordsTotal'] = $alldatacount;
                $data['recordsFiltered'] = $alldatacount;
                $this->output->set_content_type('application/json')->set_output(json_encode($data));
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
    function autocompleteactividadhijo() {
        $info = auto("actividad_hijo", "actHij_id", "actHij_nombre", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }
    function autocompletetareas() {
        $info = auto("tarea", "tar_id", "tar_nombre", $this->input->get('term'));
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