<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Planes extends My_Controller {

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
    
    function guardarregistroempleado() {
        try { 
            $post = $this->input->post();
            $this->load->model('Registro_model');
            $tamano = round($_FILES["archivo"]["size"] / 1024,1)." KB";
            $post["reg_tamano"] = $tamano;
            $fecha = new DateTime();
            $post["reg_fechaCreacion"] = $fecha->format('Y-m-d H:i:s');

            //Creamos carpeta con el ID del registro
            if (isset($_FILES['archivo']['name']))
                if (!empty($_FILES['archivo']['name']))
                    $post['reg_ruta'] = basename($_FILES['archivo']['name']);

            $pla_id = $post['pla_id'];
            $targetPath = "./uploads/tareas/";

            //De la carpeta idRegistro, creamos carpeta con el id del empleado
            if (!file_exists($targetPath)) {
                mkdir($targetPath, 0777, true);
            }
            $targetPath = "./uploads/tareas/". $pla_id;
            if (!file_exists($targetPath)) {
                mkdir($targetPath, 0777, true);
            }

            $post['reg_ruta']=$target_path = $targetPath . '/' . basename($_FILES['archivo']['name']);
            $post['reg_archivo']= basename($_FILES['archivo']['name']);
            if (move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) {
                
            }
            $post['userCreator'] = $this->data["usu_id"];
            if(empty($this->input->post('reg_id')))
                $this->Registro_model->guardar_registro($post);
            else
                $this->Registro_model->actualizar_registro($post,$this->input->post('reg_id'));
            $data = $this->Registro_model->registroxcarpeta($post['regCar_id']);
            $this->output->set_content_type('application/json')->set_output(json_encode($data));
        } catch (exception $e) {
            
        }
    }
    function guardarregistroriesgo() {
        try { 
            $post = $this->input->post();
            $this->load->model('Registro_model');
            $tamano = round($_FILES["archivo"]["size"] / 1024,1)." KB";
            $post["reg_tamano"] = $tamano;
            $fecha = new DateTime();
            $post["reg_fechaCreacion"] = $fecha->format('Y-m-d H:i:s');

            //Creamos carpeta con el ID del registro
            if (isset($_FILES['archivo']['name']))
                if (!empty($_FILES['archivo']['name']))
                    $post['reg_ruta'] = basename($_FILES['archivo']['name']);

            $rie_id = $post['rie_id'];
            $targetPath = "./uploads/tareas/";

            //De la carpeta idRegistro, creamos carpeta con el id del empleado
            if (!file_exists($targetPath)) {
                mkdir($targetPath, 0777, true);
            }
            $targetPath = "./uploads/tareas/". $rie_id;
            if (!file_exists($targetPath)) {
                mkdir($targetPath, 0777, true);
            }

            $post['reg_ruta']=$target_path = $targetPath . '/' . basename($_FILES['archivo']['name']);
            $post['reg_archivo']= basename($_FILES['archivo']['name']);
            if (move_uploaded_file($_FILES['archivo']['tmp_name'], $target_path)) {
                
            }
            $post['userCreator'] = $this->data["usu_id"];
            if(empty($this->input->post('reg_id')))
                $this->Registro_model->guardar_registro($post);
            else
                $this->Registro_model->actualizar_registro($post,$this->input->post('reg_id'));
            $data = $this->Registro_model->registroxcarpeta($post['regCar_id']);
            $this->output->set_content_type('application/json')->set_output(json_encode($data));
        } catch (exception $e) {
            
        }
    }
    
    function eliminarregistroplan(){
        
        $this->load->model('Registro_model');
        $this->Registro_model->eliminarregistro($this->input->post("reg_id"));
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

    function listadoactividades() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->load->model('Estados_model');
            $this->layout->view("tareas/listadoactividades");
        else:
            $this->layout->view("permisos");
        endif;
    }

    function registro() {
        $this->load->model('Registrocarpeta_model');
        $this->load->model('Planes_model');
        $this->data['carpeta'] = $this->Registrocarpeta_model->detail();
        $this->data['plan'] = $this->Planes_model->detail();
        $this->layout->view("tareas/registro", $this->data);
    }

    function tareaxidplan() {

        try {
            $this->load->model('Tarea_model');
            $this->data['tarea'] = $this->Tarea_model->detailxidplan($this->input->post('pla_id'));
            $this->output->set_content_type('application/json')->set_output(json_encode($this->data['tarea']));
        } catch (exception $e) {
            
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
        $post=  $this->input->post();
        try {
            $this->load->model('Actividad_model');
            $data = array(
                "actHij_padreid" => $this->input->post("idpadre"),
                "actHij_nombre" => $this->input->post("nombre"),
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
            $this->Actividad_model->create($data,$post);
            $data = $this->Actividad_model->search($this->input->post("idpadre"));
            $this->output->set_content_type('application/json')->set_output(json_encode($data));
        } catch (exception $e) {
            
        }
    }

    function nuevoplan() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->load->model('User_model');
            $this->load->model('Tipo_model');
            $this->load->model("Estados_model");
            $this->load->model("Cargo_model");
            $this->load->model("Planes_model");
            $this->load->model("Norma_model");
            $this->load->model("Notificacion_model");
            $this->load->model("Actividad_padre__model");
            $this->load->model("Registrocarpeta_model");
            $this->load->model("Avancetarea_model"); 
             
            $this->data['plan'] = array();  
            if (!empty($this->input->post('pla_id'))) {
                $this->data['todo_izq']=$this->Planes_model->min_id();
                $this->db->where('pla_id <',$this->input->post('pla_id'));
                $this->data['izq']=$this->Planes_model->max_id();
                if(empty($this->data['izq'])){
                $this->data['izq']=$this->data['todo_izq'];
                }
                $this->db->where('pla_id >',$this->input->post('pla_id'));
                $this->data['derecha']=$this->Planes_model->select_id();
                $this->data['max_der']=$this->Planes_model->max_id();
                
                if(empty($this->data['derecha'])){
                $this->data['derecha']=$this->data['max_der'];
                }
                $this->load->model("Tarea_model");
                $carpeta = $this->Registrocarpeta_model->detailxplan($this->input->post('pla_id'));
                $this->data['carpetas'] = $this->Registrocarpeta_model->detailxplancarpetas($this->input->post('pla_id'));
                $d = array();
                foreach ($carpeta as $c) {
                    $d[$c->regCar_id][$c->regCar_nombre." - ".$c->regCar_descripcion][] = array(
                        $c->reg_archivo, 
                        $c->reg_descripcion, 
                        $c->reg_version, 
                        $c->usu_nombre." ".$c->usu_apellido, 
                        $c->reg_tamano, 
                        $c->reg_fechaCreacion,
                        $c->reg_id
                            );
                }
                $this->data['carpeta'] = $d;
                $this->data["actividadpadre"] = $this->Actividad_padre__model->detail($this->input->post('pla_id'));
                $this->data['plan'] = $this->Planes_model->planxid($this->input->post('pla_id'));
                $actividades = $this->Planes_model->actividadhijoxplan($this->input->post('pla_id'));
                $i = array();
                foreach ($actividades as $ac) {
                    $i[$ac->actPad_id][$ac->nombre][] = array(
                        $ac->actHij_fechaInicio,
                        $ac->actHij_fechaFinalizacion,
                        $ac->actHij_presupuestoTotal,
                        $ac->actHij_descripcion,
                        $ac->actHij_nombre,
                        $ac->actHij_id,
                        $ac->fechainicio,
                        $ac->fechafin
                    );
                }
                $this->data["actividades"] = $i;
                $this->data['tipo'] = $this->Tipo_model->detail();
                $this->data['tareas'] = $this->Planes_model->tareaxplan($this->input->post('pla_id'));
                $this->data['tareasinactivas'] = $this->Planes_model->tareaxplaninactivas($this->input->post('pla_id'));
                $this->data['tareafechafinal'] = $this->Tarea_model->fechaFinalTareaxPlan($this->input->post('pla_id'));
                $this->data['plan_grant'] = $this->Planes_model->plan_grant($this->input->post('pla_id'));
                $this->data['avances'] = $this->Avancetarea_model->listadoAvancexPlan($this->input->post('pla_id'));
            }
            $this->data['notificacion'] = $this->Notificacion_model->detail();
            $this->data['norma'] = $this->Norma_model->detail();
            $this->data['estado'] = $this->Estados_model->detail();
            $this->data['cargo'] = $this->Cargo_model->allcargos();
            $this->layout->view("planes/planes", $this->data);
        else:
            $this->layout->view("permisos");
        endif;
    }
    function modificarregistro(){
        $this->load->model('Registro_model');
        $data = $this->Registro_model->detallexidregitro($this->input->post("registro"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
    }
    
    function detailxplaid(){
        
        $this->load->model("Actividadpadre_model");
        $data = $this->Actividadpadre_model->detailxplaid($this->input->post("pla_id"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    function detailxrieid(){
        
        $this->load->model("Actividadpadre_model");
        $data = $this->Actividadpadre_model->detailxplaid($this->input->post("rie_id"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    
    function eliminar_actividad_hijo(){
        $this->load->model('Registro_model');
        $id = $this->Registro_model->eliminar_actividad_hijo($this->input->post());
    }
    function editar_actividad_hijo(){
        $this->load->model('Registro_model');
        $data = $this->Registro_model->editar_actividad_hijo($this->input->post()); 
        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
    }

    function guardarcarpetaregistro() {
        $this->load->model("Registrocarpeta_model");
        $id = $this->Registrocarpeta_model->create(
                $this->input->post("nombrecarpeta"), $this->input->post("descripcioncarpeta"), $this->input->post("pla_id")
        );
        $data = $this->Registrocarpeta_model->detailxid($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
    }
    function guardarcarpetaregistroriesgo() {
        $this->load->model("Registrocarpeta_model");
        $id = $this->Registrocarpeta_model->createRiesgo(
                $this->input->post("nombrecarpeta"), 
                $this->input->post("descripcioncarpeta"), 
                $this->input->post("rie_id"),
                $this->data["usu_id"]
        );
        $data = $this->Registrocarpeta_model->detailxid($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
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

    function consultar_actividad_padre() {
        $this->load->model("Actividadpadre_model");
        $planes=$this->Actividadpadre_model->consultar_actividad_padre($this->input->post("actPad_id"));
        $this->output->set_content_type('application/json')->set_output(json_encode($planes[0]));
    }
    function guardaractividadpadre() {

        try {
            $this->load->model("Actividadpadre_model");
            $this->Actividadpadre_model->create(
                    $this->input->post("idactividad"), $this->input->post("nombreactividad"), $this->input->post("pla_id"),$this->input->post("actPad_id")
            );
            $actividades = $this->Actividadpadre_model->searchregister(
                    $this->input->post("idactividad"), $this->input->post("nombreactividad"), $this->input->post("pla_id")
            );
            $this->output->set_content_type('application/json')->set_output(json_encode($actividades[0]));
        } catch (exception $e) {
            
        }
    }

    function guardarplan() {
        try {
            $this->load->model("Planes_model");
            $data = array(
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
            echo $this->Planes_model->create($data);
        } catch (exception $e) {
            
        }
    }

    function listadoplanes() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->load->model("Estados_model");
            $this->load->model("Planes_model");
            $this->data['responsable'] = $this->Planes_model->responsables();
            $this->data['estados'] = $this->Estados_model->finalizados();
            $this->layout->view("planes/listadoplanes", $this->data);
        else:
            $this->layout->view("permisos");
        endif;
    }

    function consultaplanes() {
        $this->load->model("Planes_model");
        if(!empty($this->input->post('tareapropia')))$usu_id = $this->session->userdata('emp_id');
        else $usu_id = "";    
        $planes = $this->Planes_model->filtrobusqueda(
                $this->input->post("nombre"), 
                $this->input->post("responsable"), 
                $this->input->post("estado"),
                $usu_id
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

    function guardarcarpeta() {
        $this->load->model("Registrocarpeta_model");
        $this->Registrocarpeta_model->create(
                $this->input->post("nombrecarpeta"), $this->input->post("descripcioncarpeta")
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
            $targetPath = "./uploads/registro/";

            $data = array(
                "pla_id" => $this->input->post("plan"),
                "tar_id" => $this->input->post("tarea"),
                "regCar_id" => $this->input->post("carpeta"),
                "reg_version" => $this->input->post("version"),
                "reg_descripcion" => $this->input->post("descripcion"),
                "reg_fechaCreacion" => date('Y-m-d H:i:s'),
                "userCreator" => $this->data["usu_id"],
                "reg_ruta" => $targetPath
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
    function cargarplanescarpeta(){
        
        $this->load->model('Registrocarpeta_model');
        $data = $this->Registrocarpeta_model->cargarcarpetas(
                    $this->input->post("carpeta")
                );
        
        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
    }
    function eliminarcarpeta(){
        
        $this->load->model('Registrocarpeta_model');
        $data = $this->Registrocarpeta_model->eliminarcarpeta($this->input->post("carpeta")); 
        
    }
    function modificarpeta(){         
        $this->load->model('Registrocarpeta_model');
        $this->Registrocarpeta_model->modificarpeta(
                $this->input->post("nombrecarpeta"),
                $this->input->post("descripcioncarpeta"),
                $this->input->post("plaCar_id")
                ); 
        $data = $this->Registrocarpeta_model->cargarcarpetas($this->input->post("plaCar_id"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
        
    }
    function eliminaractividad(){
        
        $this->load->model('Actividadpadre_model');
        $data = $this->Actividadpadre_model->eliminaractividad($this->input->post("carpeta")); 
        
    }
    function datosactividad(){
        
        $this->load->model('Actividadpadre_model');
        $data = $this->Actividadpadre_model->cargardatos($this->input->post("carpeta"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
    }
    function modificaractividad(){
        
        $this->load->model('Actividadpadre_model');
         $this->Actividadpadre_model->modificardatos(
                $this->input->post("actividadpadre"),
                $this->input->post("idactividad"),
                $this->input->post("nombreactividad")
                );
        $data = $this->Actividadpadre_model->cargardatos($this->input->post("actividadpadre"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data[0]));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */