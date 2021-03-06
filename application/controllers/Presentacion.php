<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Presentacion extends My_Controller {

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

    function menu() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->layout->view("presentacion/prueba");
        else:
            $this->layout->view("permisos");
        endif;
    }

    function principal() {
        $this->load->model('Tipo_model');
        $this->load->model('Planes_model');
        $this->data['tipo'] = $this->Tipo_model->avanceciclophva();
        $id = $this->data['user']['emp_id'];
        $this->data['inicio'] = $this->Ingreso_model->admin_inicio();
        $this->data['content'] = $this->modulos('prueba', null, $this->data['user']['usu_id']);
        
        
        $id_plan=$this->input->post('pla_id');
        if(!isset($id_plan)){
            $id_plan=$this->Planes_model->min_plan();
        }
        $this->data['tareas'] = $this->Planes_model->tareaxplan($id_plan);
        $this->data['id_plan']=$id_plan;
        $this->data['plan_grant'] = $this->Planes_model->plan_grant($id_plan);
        
        $this->layout->view('presentacion/principal', $this->data);
    }

    function modulos($datosmodulos, $html = null, $usuarioid) {
        $tipo = 2;
        $menu = $this->Ingreso_model->menu($datosmodulos, $usuarioid, $tipo);
        $i = array();
        foreach ($menu as $modulo)
            $i[$modulo['menu_id']][$modulo['menu_nombrepadre']][$modulo['menu_idpadre']] [] = array($modulo['menu_idhijo'], $modulo['menu_controlador'], $modulo['menu_accion']);
        if ($datosmodulos == 'prueba')
            $html .="<ul class='nav navbar-nav'>";
        else
            $html .="<ul class='dropdown-menu'>";
        foreach ($i as $padre => $nombrepapa)
            foreach ($nombrepapa as $nombrepapa => $menuidpadre)
                foreach ($menuidpadre as $modulos => $menu)
                    foreach ($menu as $submenus):
                        $html .= "<li><a href='" . base_url("index.php/" . $submenus[1] . "/" . $submenus[2]) . "' >" . strtoupper($nombrepapa) . "</a>";
                        if (!empty($submenus[0]))
                            $html .=$this->modulos($submenus[0], null, $usuarioid);
                        $html .= "</li>";
                    endforeach;
        $html.="</ul>";
        return $html;
    }

    function principal_menu() {
        return $menu = $this->load->view('presentacion/modulos');
    }

    function administracionmenu() {
        $this->load->view('presentacion/menu', $this->data);
    }

    function consultadatosmenu() {
        $idgeneral = $this->input->post('idgeneral');
        if (!empty($idgeneral)) {
            $datos = $this->Ingreso_model->consultamenu($idgeneral);
            $this->output->set_content_type('application/json')->set_output(json_encode($datos[0]));
        } else {
            redirect('auth/login', 'refresh');
        }
    }

    public function creacionmenu() {
        $this->data['hijo'] = $this->input->post('menu');
        $this->data['nombrepadre'] = $this->input->post('nombrepadre');
        $this->data['idgeneral'] = $this->input->post('idgeneral');
        if (empty($this->data['idgeneral']))$this->data['hijo'] = 0;
        $this->data['menu'] = $this->Ingreso_model->consultahijos($this->data['idgeneral']);
        if (!empty($this->data['idgeneral'])) $this->data['menu'] = $this->Ingreso_model->hijos($this->data['idgeneral']);
        $this->layout->view('presentacion/creacionmenu', $this->data);
    }

    function guardarmodulo() {
        try {
            if (!empty($this->data['user'])) {
                $modulo = $this->input->post('modulo');
                $padre = $this->input->post('padre');
                $general = $this->input->post('general');
                $actualizamodulo = $this->Ingreso_model->actualizahijos($general);
                $guardamodulo = $this->Ingreso_model->guardarmodulo($modulo, $padre, $general);
                $menu = $this->Ingreso_model->cargamenu($general);
                $this->output->set_content_type('application/json')->set_output(json_encode($menu));
            } else {
                redirect('auth/login', 'refresh');
            }
        } catch (exception $e) {
            
        }
    }

    function guardaatribustosmodulo() {
        try {
            $idgeneral = $this->input->post('idgeneral');
            if (!empty($idgeneral)) {
                $controlador = $this->input->post('controlador');
                $accion = $this->input->post('accion');
                $estado = $this->input->post('estado');
                $nombre = $this->input->post('nombre');

                $this->Ingreso_model->guardaatributos($idgeneral, $controlador, $accion, $estado, $nombre);
            } else {
                redirect('auth/login', 'refresh');
            }
        } catch (exception $e) {
            
        }
    }

    function consultarolxrolidusuario() {
        try {
            $this->data['rol'] = $this->Roles_model->totalroles($this->input->post('id'));
            $this->output->set_content_type('application/json')->set_output(json_encode($this->data['rol']));
        } catch (exception $e) {
            
        }
    }

    function permisosporrol() {
        $idrol = $this->input->post('idrol');
        $idusuario = $this->input->post('idusuario');
        $data = array();
        for ($i = 0; $i < count($idrol); $i++) {
            $data[$i] = array("" => $idrol, "" => $idusuario);
        }

        $permisos = $this->permisorolporusuario('prueba', $idrol, $idusuario);
        echo $permisos;
    }

    function eliminarmodulo() {
        $idgeneral = $this->input->post('idgeneral');
        if (!empty($idgeneral))
            $eliminar = $this->Ingreso_model->eliminar($idgeneral);
    }

    function permisosmenu($iduser, $datosmodulos = 'prueba', $dato = null) {
        $menu = $this->Ingreso_model->menu($iduser, $datosmodulos, 1);
        $i = array();
        foreach ($menu as $modulo)
            $i[$modulo['menu_id']][$modulo['menu_nombrepadre']][$modulo['menu_idpadre']][$modulo['modulo_menuid']] [] = $modulo['menu_idhijo'];

        if ($datosmodulos == 'prueba')
            echo "<ul class='principal'>";
        else
            echo "<ul>";
        foreach ($i as $padre => $nombrepapa)
            foreach ($nombrepapa as $nombrepapa => $menuidpadre)
                foreach ($menuidpadre as $modulos => $menu)
                    foreach ($menu as $permiosos => $menuprincipal)
                        foreach ($menuprincipal as $submenus):
                            if (!empty($permiosos))
                                echo "<li><a href=''>" . strtoupper($nombrepapa) . "</a><input type='checkbox' checked='checked' value='" . $padre . "' name='" . $padre . "' papa='" . $padre . "'>";
                            else
                                echo "<li><a href=''>" . strtoupper($nombrepapa) . "</a><input type='checkbox'  value='" . $padre . "' name='" . $padre . "' papa='" . $padre . "'>";
                            if (!empty($submenus))
                                $this->permisosmenu($iduser, $submenus);
                            echo "</li>";
                        endforeach;
        echo "</ul>";
    }

    function retornamenutotal() {
        return $this->permisosmenu($this->input->post('usuario'));
    }

    function savepermissionsuser() {

        $this->data['user'] = $this->input->post('usuario');
        $eliminarpermisos = $this->Ingreso_model->eliminarpermisos($this->data['user']);
        $usuario = $this->input->post();
        $datos = array();
        foreach ($usuario as $papa => $modulos) {
            $datos[] = array('usu_id' => $this->data['user'], 'modulo_menuid' => $modulos);
        }

        $guardarpermisos = $this->Ingreso_model->permisosmodulo($datos);
    }

    function permisoroles($datosmodulos, $html = null, $s = null, $numero = 1) {
        $menu = $this->Ingreso_model->permisoroles($datosmodulos);
        $i = array();
        if (count($menu))
            foreach ($menu as $modulo)
                $i[$modulo['menu_id']][$modulo['menu_nombrepadre']][$modulo['menu_idpadre']] [] = array($modulo['menu_idhijo'], $modulo['menu_controlador'], $modulo['menu_accion']);
        $html .="<ul>";
        foreach ($i as $padre => $nombrepapa)
            foreach ($nombrepapa as $nombrepapa => $menuidpadre)
                foreach ($menuidpadre as $modulos => $menu)
                    foreach ($menu as $submenus):
                        $html .= "<li>" . strtoupper($nombrepapa)
                                . "<span  style='float: right;'>"
                                . "<input title='Mostrar Menu' type='checkbox' class='seleccionados " . ($s == null ? '' : $s) . "'  atr='" . str_replace(' ', '', strtoupper($nombrepapa)) . "' name='permisorol[]' value='" . $padre . "' >"
                                . "<input title='Crear'        type='checkbox' class='crear2 " . ($s == null ? '' : $s) . "_c'  atr='" . str_replace(' ', '', strtoupper($nombrepapa)) . "' name='crear[]' value='" . $padre . "' >"
                                . "<input title='Modificar'    type='checkbox' class='modificar2 " . ($s == null ? '' : $s) . "_m'  atr='" . str_replace(' ', '', strtoupper($nombrepapa)) . "' name='modificar[]' value='" . $padre . "' >"
                                . "<input title='Eliminar'     type='checkbox' class='eliminar2 " . ($s == null ? '' : $s) . "_e'  atr='" . str_replace(' ', '', strtoupper($nombrepapa)) . "' name='eliminar[]' value='" . $padre . "' ></span>";
                        if (!empty($submenus[0]))
                            $html .=$this->permisoroles($submenus[0], ' ', str_replace(' ', '', strtoupper($nombrepapa)), 2);
                        $html .= "</li>";
                    endforeach;
        $html.="</ul>";
        if ($numero = 1)
            $html .="</div>";
        return $html;
    }

    function roles() {
        if ($this->consultaacceso($this->data["usu_id"])):
            $this->data['content'] = "<table border='0' width='100%'>" . $this->permisoroles('prueba', null) . "</table>";
            $this->data['roles'] = $this->Roles_model->roles();
            $this->layout->view('presentacion/roles', $this->data);
        else:
            $this->layout->view("permisos");
        endif;
    }

    function guardarroles() {
        $nombre = $this->input->post('nombre');
        if (!empty($nombre)) {
            $permisorol = $this->input->post('permisorol');
            $id = $this->Roles_model->guardarrol($nombre);
            $insert = array();
            for ($i = 0; $i < count($permisorol); $i++) {
                $insert[] = array('rol_id' => $id, 'menu_id' => $permisorol[$i]);
            }
            if (!empty($insert)) {
                $this->Roles_model->insertapermisos($insert);
            }
            $roles = $this->Roles_model->rolesall();
            echo json_encode($roles);
            die;
        } else {
            $id = $this->input->post('rol');
            $this->Roles_model->eliminpermisosrol($id);
            $this->Roles_model->modificarrol($id);
        }
        $permisorol = $this->input->post('permisorol');
        $crear = $this->input->post('crear');
        $modificar = $this->input->post('modificar');
        $eliminar = $this->input->post('eliminar');
        $insert = array();
        $c = 0;
        $m = 0;
        $e = 0;
        for ($i = 0; $i < count($permisorol); $i++) {
            if (isset($crear[$c]))
                if ($crear[$c] == $permisorol[$i]) {
                    $crear2 = $crear[$c];
                    $c++;
                } else
                    $crear2 = 0;
            else
                $crear2 = 0;
            if (isset($modificar[$m]))
                if ($modificar[$m] == $permisorol[$i]) {
                    $modificar2 = $modificar[$m];
                    $m++;
                } else
                    $modificar2 = 0;
            else
                $modificar2 = 0;
            if (isset($eliminar[$e]))
                if ($eliminar[$e] == $permisorol[$i]) {
                    $eliminar2 = $eliminar[$e];
                    $e++;
                } else
                    $eliminar2 = 0;
            else
                $eliminar2 = 0;

            $insert[] = array('rol_id' => $id, 'menu_id' => $permisorol[$i], 'perRol_crear' => $crear2, 'perRol_modificar' => $modificar2, 'perRol_eliminar' => $eliminar2);
        }
        $this->Roles_model->insertapermisos($insert);
        $roles = $this->Roles_model->rolesall();
        echo json_encode($roles);
    }

    function eliminarrol() {
        $id = $this->input->post('id');
        $this->Roles_model->eliminarrol($id);
        $this->Roles_model->eliminpermisosrol($id);
    }

    function guardaratributosmenu() {
        $this->Ingreso_model->guardaratributosmenu($this->input->post('nombre'), $this->input->post('controlador'), $this->input->post('accion'), $this->input->post('estado'), $this->input->post('id'));
    }

    function actualizarIcono() {
        try {
            $nuevoIcono = $this->input->post('nuevoIcono');
            $idgeneral = $this->input->post('idgeneral');
            $this->Ingreso_model->actualizarIcono($nuevoIcono, $idgeneral);
        } catch (Exception $e) {
            
        }
    }

    function permisousuarios($datosmodulos, $html = null, $idusuario) {

        $tipo = 1;
        $menu = $this->Ingreso_model->menu($datosmodulos, $idusuario, $tipo);
        $i = array();

        foreach ($menu as $modulo)
            $i[$modulo['menu_id']][$modulo['menu_nombrepadre']][$modulo['menu_idpadre']] [] = array($modulo['menu_idhijo'], $modulo['menu_controlador'], $modulo['menu_accion'], $modulo['menudos']);
        if ($datosmodulos == 'prueba')
            $html .="<ul>";
        else
            $html .="<ul>";
        foreach ($i as $padre => $nombrepapa)
            foreach ($nombrepapa as $nombrepapa => $menuidpadre)
                foreach ($menuidpadre as $modulos => $menu)
                    foreach ($menu as $submenus):
                        if ($submenus[3] == $padre) {
                            $checked = 'checked';
                        } else {
                            $checked = '';
                        }
                        $html .= "<li> <div>" . strtoupper($nombrepapa) . "</div><div align='center'><input type='checkbox' " . $checked . " name='permisousuario[]' value='" . $padre . "'></div>";
                        if (!empty($submenus[0]))
                            $html .=$this->permisousuarios($submenus[0], null, $idusuario);
                        $html .= "</li>";
                    endforeach;
        $html.="</ul>";
        return $html;
    }

    function permisos() {
        echo $this->permisousuarios('prueba', null, $this->input->post('id'));
    }

    function guardarpermisos() {
        $rol = $this->input->post('idrol');
        $usuario = $this->input->post('idusuario');
        $this->Ingreso_model->eliminarpermisosusuario($usuario);
//        $this->Ingreso_model->actualizausuariorol($usuario);
        $data = array();
        $i = 0;
        for ($i = 0; $i < count($rol); $i++) {
            $data[$i] = array(
                "rol_id" => $rol[$i],
                "usu_id" => $usuario
            );
        }
        $this->Ingreso_model->permisosusuariomenu($data);
    }

    function rolesasignados() {
        $roles = $this->Ingreso_model->rolesasignados($this->input->post('id'));
        echo json_encode($roles);
    }

    function recordarcontrasena() {
        $this->layout->view('presentacion/recordarcontrasena');
    }

    function guardarcontrasena() {
        try {
            $this->Ingreso_model->guardarcontrasena($this->input->post('password'), $this->data['user']['usu_id']);
        } catch (exception $e) {
            
        }
    }

    function rol() {
        $this->data['roles'] = $this->Roles_model->rolxusuario($this->session->userdata('usu_id'));
        $this->layout->view("presentacion/rol", $this->data);
    }

    function guardarroldefecto() {
        $this->load->model("User_model");
        $rol = $this->input->post("rol");
        $usu_id = $this->session->userdata('usu_id');
        $this->User_model->rolxdefecto($rol, $usu_id);
    }
    function buscar_rol_usuario(){
        $this->load->model("User_model");
        echo $dato=$this->User_model->buscar_rol_usuario($this->input->post());
    }
    function obtener_clasificacion($id){
        $this->load->model('Planes_model');
        return $this->Planes_model->obtener_clasificacion($id);
    }
    function obtener_tipo($id){
        $this->load->model('Planes_model');
        return $this->Planes_model->obtener_tipo($id);
    }
    function guardarMetodos(){
        try{
            $metodoEliminar = $this->input->post("TxtMetodoEliminar");
            $metodoConsultar = $this->input->post("TxtMetodoConsultar");
            $metodoActualizar = $this->input->post("TxtMetodoActualizar");
            $metodoInsertar = $this->input->post("TxtMetodoInsertar");
            
            
        }catch(exception $e){
            
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */