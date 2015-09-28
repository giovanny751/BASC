<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Administrativo extends My_Controller {

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

    function creacionempleados() {

        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->data['empleado'] = "";
            if (!empty($this->input->post('emp_id'))) {
                $this->load->model('Empleado_model');
                $this->data['empleado'] = $this->Empleado_model->consultaempleadoxid($this->input->post('emp_id'));
            }

            $this->load->model('Tipocontrato_model');
            $this->load->model('Sexo_model');
            $this->load->model('Estadocivil_model');

            $this->load->model('Tipoaseguradora_model');
            $this->load->model('Dimension2_model');
            $this->load->model('Dimension_model');
            $this->load->model('Cargo_model');
            $this->load->model('Tipo_aseguradora__model');
            $this->data['cargo'] = $this->Cargo_model->detail();
            $this->data['tipocontrato'] = $this->Tipocontrato_model->detail();
            $this->data['sexo'] = $this->Sexo_model->detail();
            $this->data['estadocivil'] = $this->Estadocivil_model->detail();
            $this->data['aseguradoras'] = $this->Tipo_aseguradora__model->aseguradoras();
            $this->data['tipoaseguradora'] = $this->Tipoaseguradora_model->detail();
            $this->data['dimension'] = $this->Dimension_model->detail();
            $this->data['dimension2'] = $this->Dimension2_model->detail();

            $this->layout->view("administrativo/creacionempleados", $this->data);
        }
    }

    function guardarempleado() {
        $this->load->model('Empleado_model');

        $data = array(
            'Emp_codigo' => $this->input->post('codigo'),
            'Emp_Cedula' => $this->input->post('cedula'),
            'TipDoc_id' => $this->input->post('tipodocumento'),
            'Emp_Nombre' => $this->input->post('nombre'),
            'Emp_Apellidos' => $this->input->post('apellidos'),
            'sex_Id' => $this->input->post('sexo'),
            'Emp_FechaNacimiento' => $this->input->post('fechadenacimiento'),
            'Emp_Estatura' => $this->input->post('estatura'),
            'Emp_Peso' => $this->input->post('peso'),
            'Emp_Telefono' => $this->input->post('telefono'),
            'Emp_Direccion' => $this->input->post('direccion'),
            'Emp_Contacto' => $this->input->post('contacto'),
            'Emp_TelefonoContacto' => $this->input->post('telefonocontacto'),
            'Emp_Email' => $this->input->post('email'),
            'EstCiv_id' => $this->input->post('estadocivil'),
            'TipCon_Id' => $this->input->post('tipocontrato'),
            'Emp_FechaInicioContrato' => $this->input->post('fechainiciocontrato'),
            'Emp_FechaFinContrato' => $this->input->post('fechafincontrato'),
            'Emp_PlanObligatorioSalud' => $this->input->post('planobligatoriodesalud'),
            'Emp_FechaAfiliacionArl' => $this->input->post('fechaafiliacionarl'),
            'TipAse_Id' => $this->input->post('tipoaseguradora'),
            'Ase_Id' => $this->input->post('nombreaseguradora'),
            'Dim_id' => $this->input->post('dimension1'),
            'Dim_IdDos' => $this->input->post('dimension2'),
            'Est_id' => $this->input->post('estado'),
            'Car_id' => $this->input->post('cargo'),
            'emp_fondo' => $this->input->post('fondo')
        );

        $this->Empleado_model->create($data);
    }

    function guardaractualizacion() {
        $this->load->model('Empleado_model');

        $data = array(
            'Emp_codigo' => $this->input->post('codigo'),
            'Emp_Cedula' => $this->input->post('cedula'),
            'TipDoc_id' => $this->input->post('tipodocumento'),
            'Emp_Nombre' => $this->input->post('nombre'),
            'Emp_Apellidos' => $this->input->post('apellidos'),
            'sex_Id' => $this->input->post('sexo'),
            'Emp_FechaNacimiento' => $this->input->post('fechadenacimiento'),
            'Emp_Estatura' => $this->input->post('estatura'),
            'Emp_Peso' => $this->input->post('peso'),
            'Emp_Telefono' => $this->input->post('telefono'),
            'Emp_Direccion' => $this->input->post('direccion'),
            'Emp_Contacto' => $this->input->post('contacto'),
            'Emp_TelefonoContacto' => $this->input->post('telefonocontacto'),
            'Emp_Email' => $this->input->post('email'),
            'EstCiv_id' => $this->input->post('estadocivil'),
            'TipCon_Id' => $this->input->post('tipocontrato'),
            'Emp_FechaInicioContrato' => $this->input->post('fechainiciocontrato'),
            'Emp_FechaFinContrato' => $this->input->post('fechafincontrato'),
            'Emp_PlanObligatorioSalud' => $this->input->post('planobligatoriodesalud'),
            'Emp_FechaAfiliacionArl' => $this->input->post('fechaafiliacionarl'),
            'TipAse_Id' => $this->input->post('tipoaseguradora'),
            'Ase_Id' => $this->input->post('nombreaseguradora'),
            'Dim_id' => $this->input->post('dimension1'),
            'Dim_IdDos' => $this->input->post('dimension2'),
            'Car_id' => $this->input->post('cargo'),
            'emp_fondo' => $this->input->post('fondo')
        );

        $this->Empleado_model->update($data, $this->input->post('emp_id'));
    }

    function consultatipoaseguradoras() {
        $this->load->model('Tipoaseguradora_model');
        $data = $this->Tipoaseguradora_model->consultatipoaseguradora($this->input->post("id"));
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function listadoempleados() {
        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->load->model('Tipo_documento_model');
            $this->load->model('Tipocontrato_model');
            $this->load->model("Estados_model");
            $this->load->model('Cargo_model');
            $this->data['cargo'] = $this->Cargo_model->detail();
            $this->data['estado'] = $this->Estados_model->detail();
            $this->data['tipocontrato'] = $this->Tipocontrato_model->detail();
//        var_dump($this->data['tipocontrato']);die;
            $this->data["tipodocumento"] = $this->Tipo_documento_model->detail();
            $this->layout->view("administrativo/listadoempleados", $this->data);
        }
    }

    function consultaempleados() {
        $this->load->model('Empleado_model');
        $cedula = $this->input->post('cedula');
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $codigo = $this->input->post('codigo');
        $cargo = $this->input->post('cargo');
        $estado = $this->input->post('estado');
        $contratosvencidos = $this->input->post('contratosvencidos');
        $this->data['listado'] = $this->Empleado_model->filtroempleados($cedula, $nombre, $apellido, $codigo, $cargo, $estado, $contratosvencidos);
        $this->output->set_content_type('application/json')->set_output(json_encode($this->data['listado']));
    }

    function consultacontratosvencidos() {
        $this->load->model('Empleado_model');
        $this->data['listado'] = $this->Empleado_model->contratosvencidos();
        $this->output->set_content_type('application/json')->set_output(json_encode($this->data['listado']));
    }

    function eliminarempleado() {
        $this->load->model('Empleado_model');
        $this->Empleado_model->eliminarempleado($this->input->post('id'));
    }

    function creacionusuarios() {
        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->load->model('Sexo_model');
            $this->load->model('Cargo_model');
            $this->load->model('Empleado_model');
            $this->load->model('Estados_model');
            $this->load->model('User_model');
            $this->data['empleado'] = $this->Empleado_model->detail();
            $this->data['estado'] = $this->Estados_model->detail();
            $this->data['sexo'] = $this->Sexo_model->detail();
            $this->data['cargo'] = $this->Cargo_model->detail();
            $this->data['usuario'] = "";
            $user = $this->input->post('usu_id');
            if (!empty($user)) {
                $this->data['usuario'] = $this->User_model->consultausuarioxid($this->input->post('usu_id'));
//            var_dump($this->data['usuario']);die;
            }
            $this->layout->view("administrativo/creacionusuarios", $this->data);
        }
    }

    function listadousuarios() {
        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->load->model('Tipo_documento_model');
            $this->load->model('Estados_model');
            $this->load->model('User_model');
            $this->load->model('Roles_model');
            $this->data['roles'] = $this->Roles_model->roles();
            $this->data['estado'] = $this->Estados_model->detail();
            $this->data["tipodocumento"] = $this->Tipo_documento_model->detail();
            $this->data["usuarios"] = $this->User_model->consultageneral();
            $this->layout->view("administrativo/listadousuarios", $this->data);
        }
    }

    function consultarusuario() {
        $this->load->model('User_model');
        $this->data['usuarios'] = $this->User_model->filteruser(
                $this->input->post('apellido')
                , $this->input->post('cedula')
                , $this->input->post('estado')
                , $this->input->post('nombre')
        );
        $this->output->set_content_type('application/json')->set_output(json_encode($this->data['usuarios']));
    }

    function guardarusuario() {
        $this->load->model('User_model');

        $consultaexistencia = $this->User_model->consultausuarioxcedula($this->input->post('cedula'));
        if (empty($consultaexistencia)) {
            $data[] = array(
                'usu_contrasena' => $this->input->post('contrasena'),
                'est_id' => $this->input->post('estado'),
                'usu_politicas' => '0',
                'usu_cedula' => $this->input->post('cedula'),
                'usu_nombre' => $this->input->post('nombres'),
                'usu_apellido' => $this->input->post('apellidos'),
                'usu_usuario' => $this->input->post('usuario'),
                'usu_email' => $this->input->post('email'),
                'sex_id' => $this->input->post('genero'),
                'car_id' => $this->input->post('cargo'),
                'emp_id' => $this->input->post('empleado'),
                'usu_cambiocontrasena' => $this->input->post('cambiocontrasena'),
                'usu_fechaCreacion' => date('Y-m-d H:i:s')
            );
            $this->User_model->create($data);
        }
    }

    function actualizarusuario() {
        $this->load->model('User_model');
        $data = array(
            'usu_contrasena' => $this->input->post('contrasena'),
            'est_id' => $this->input->post('estado'),
            'usu_cedula' => $this->input->post('cedula'),
            'usu_nombre' => $this->input->post('nombres'),
            'usu_apellido' => $this->input->post('apellidos'),
            'usu_usuario' => $this->input->post('usuario'),
            'usu_email' => $this->input->post('email'),
            'sex_id' => $this->input->post('genero'),
            'car_id' => $this->input->post('cargo'),
            'emp_id' => $this->input->post('empleado'),
            'usu_cambiocontrasena' => $this->input->post('cambiocontrasena'),
            'usu_fechaCreacion' => date('Y-m-d H:i:s')
        );

        $this->User_model->update($data, $this->input->post('usuid'));
    }

    function consultaorganigrama($datosmodulos = null, $html = null) {
        $tipo = 2;
        $this->load->model('Cargo_model');
        $menu = $this->Cargo_model->consultaorganigrama($datosmodulos);
        $i = array();

        foreach ($menu as $modulo)
            $i[$modulo['car_id']][$modulo['car_nombre']][] = array($modulo['idjefe']);
        if ($datosmodulos == 'prueba')
            $html .='<ul id="org" style="display:none">';
        else
            $html .='<ul id="org" style="display:none">';

//        var_dump($i);die;

        foreach ($i as $padre => $nombrepapa)
            foreach ($nombrepapa as $nombrepapa => $menuidpadre)
                foreach ($menuidpadre as $modulos => $menu):
                    $html .= "<li><p style='margin-top:20px'>" . strtoupper($nombrepapa) . "</p>";
                    $html .=$this->consultaorganigrama($padre, null);
                    $html .= "</li>";
                endforeach;
        $html.="</ul>";
        return $html;
    }

    function organigrama() {
        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->data["organigrama"] = $this->consultaorganigrama();
            $this->layout->view("administrativo/organigrama", $this->data);
        }
    }

    function cargos() {
        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->load->model('Cargo_model');
            $this->data["cargo"] = $this->Cargo_model->detail();
            $this->layout->view("administrativo/cargos", $this->data);
        }
    }

    function cargoriesgo() {
        try {
            $this->load->model('Cargo_model');
            $riesgocargo = $this->Cargo_model->cargoriesgo($this->input->post('car_id'));
            $this->output->set_content_type('application/json')->set_output(json_encode($riesgocargo));
        } catch (exception $e) {
            
        }
    }

    function dimensionunoriesgo() {
        try {
            $this->load->model('Dimension_model');
            $riesgocargo = $this->Dimension_model->dimensionunoriesgo($this->input->post('dim_id'));
            $this->output->set_content_type('application/json')->set_output(json_encode($riesgocargo));
        } catch (exception $e) {
            
        }
    }

    function dimensiondosriesgo() {
        try {
            $this->load->model('Dimension2_model');
            $riesgocargo = $this->Dimension2_model->dimensionunoriesgo($this->input->post('dim_id'));
            $this->output->set_content_type('application/json')->set_output(json_encode($riesgocargo));
        } catch (exception $e) {
            
        }
    }

    function consultausuarioscargo() {

        $this->load->model('Empleado_model');
        $this->data["cargo"] = $this->Empleado_model->empleadoxcargo($this->input->post('cargo'));
        $this->output->set_content_type('application/json')->set_output(json_encode($this->data["cargo"]));
    }

    function consultausuariosflechas() {
        $this->load->model("User_model");
        $idUsuarioCreado = $this->input->post("idUsuarioCreado");
        $metodo = $this->input->post("metodo");
        $campos = $this->User_model->consultausuariosflechas($idUsuarioCreado, $metodo);
        if (!empty($campos)) {
            $this->output->set_content_type('application/json')->set_output(json_encode($campos[0]));
        }
    }

    function consultaempleadoflechas() {
        $this->load->model("Empleado_model");
        $idEmpleadoCreado = $this->input->post("idEmpleadoCreado");
        $metodo = $this->input->post("metodo");
        $campos = $this->Empleado_model->consultaempleadoflechas($idEmpleadoCreado, $metodo);
        if (!empty($campos)) {
            $this->output->set_content_type('application/json')->set_output(json_encode($campos[0]));
        }
    }

    function consultacargoxid() {
        $this->load->model('Cargo_model');
        $this->data["cargo"] = $this->Cargo_model->consultacargoxid($this->input->post('car_id'));
        $this->output->set_content_type('application/json')->set_output(json_encode($this->data["cargo"][0]));
    }

    function guardarcargo() {

        $this->load->model('Cargo_model');

        $cargo = $this->input->post("cargo");
        $cargojefe = $this->input->post("cargojefe");
        $porcentaje = $this->input->post("porcentaje");
        $data = array();
        for ($i = 0; $i < count($cargo); $i++) {
            $data[$i] = array(
                "car_nombre" => $cargo[$i],
                "car_jefe" => $cargojefe[$i],
                "car_porcentajearl" => $porcentaje[$i],
            );
        }

        $this->Cargo_model->create($data);
        $this->data["cargo"] = $this->Cargo_model->detail();
        $this->output->set_content_type('application/json')->set_output(json_encode($this->data["cargo"]));
    }

    function eliminarcargo() {

        $this->load->model('Cargo_model');
        $consulta = $this->Cargo_model->consultahijos($this->input->post('id'));
        if ($consulta > 0) {
            echo 1;
        } else {
            $this->Cargo_model->delete($this->input->post('id'));
            $this->data["cargo"] = $this->Cargo_model->detail();
            $this->output->set_content_type('application/json')->set_output(json_encode($this->data["cargo"]));
        }
    }

    function modificacioncargo() {
        try {
            $this->load->model('Cargo_model');

            $this->Cargo_model->update(
                    $this->input->post('cargo')
                    , $this->input->post('jefe')
                    , $this->input->post('cotizacion')
                    , $this->input->post('car_id')
            );
        } catch (exception $e) {
            
        }
    }

    function dimension2() {
        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->load->model('Dimension2_model');
            $this->data['dimension'] = $this->Dimension2_model->detail();
            $this->layout->view("administrativo/dimension2", $this->data);
        }
    }

    function consultadimensionxid2() {

        $this->load->model('Dimension2_model');
        $this->data['dimension'] = $this->Dimension2_model->consultadimensionxid($this->input->post('dim_id'));
        $this->output->set_content_type('application/json')->set_output(json_encode($this->data['dimension'][0]));
    }

    function guardarmodificaciondimension2() {
        try {
            $this->load->model('Dimension2_model');
            $this->Dimension2_model->guardarmodificaciondimension(
                    $this->input->post('descripcion'), $this->input->post('dimid')
            );
        } catch (exception $e) {
            
        }
    }

    function guardardimension2() {
        $this->load->model('Dimension2_model');
        $data[0] = array(
            "dim_descripcion" => $this->input->post('descripcion')
        );
        $this->Dimension2_model->create($data);
        $dimension = $this->Dimension2_model->detail();
        $this->output->set_content_type('application/json')->set_output(json_encode($dimension));
    }

    function eliminardimension2() {
        $this->load->model('Dimension2_model');
        $this->Dimension2_model->delete($this->input->post('id'));
    }

    function actualizardimension2() {
        $this->load->model('Dimension_model');
    }

    function dimension() {
        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->load->model('Dimension_model');
            $this->data['dimension'] = $this->Dimension_model->detail();
            $this->layout->view("administrativo/dimension", $this->data);
        }
    }

    function consultadimensionxid() {

        $this->load->model('Dimension_model');
        $this->data['dimension'] = $this->Dimension_model->consultadimensionxid($this->input->post('dim_id'));
        $this->output->set_content_type('application/json')->set_output(json_encode($this->data['dimension'][0]));
    }

    function guardarmodificaciondimension() {

        $this->load->model('Dimension_model');
        $this->Dimension_model->guardarmodificaciondimension(
                $this->input->post('descripcion'), $this->input->post('dimid')
        );
    }

    function guardardimension() {
        $this->load->model('Dimension_model');
        $data[0] = array(
            "dim_descripcion" => $this->input->post('descripcion')
        );
        $this->Dimension_model->create($data);
        $dimension = $this->Dimension_model->detail();
        $this->output->set_content_type('application/json')->set_output(json_encode($dimension));
    }

    function eliminardimension() {
        $this->load->model('Dimension_model');
        $this->Dimension_model->delete($this->input->post('id'));
    }

    function actualizardimension() {
        $this->load->model('Dimension_model');
    }

    function empresa() {
        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->load->model("Empresa_model");
            $this->load->model('Tamano_empresa_model');
            $this->load->model('Numero_empleados_model');
            $this->load->model('Ingreso_model');
            $this->data['ciudad'] = $this->Ingreso_model->ciudades();
            $this->data['tamano'] = $this->Tamano_empresa_model->detail();
            $this->data['numero'] = $this->Numero_empleados_model->detail();
            $this->data['informacion'] = $this->Empresa_model->detail();
//        var_dump($this->data['informacion']);die;
            $this->layout->view("administrativo/empresa", $this->data);
        }
    }

    function guardarempresa() {


        $this->load->model("Empresa_model");
        $data[] = array(
            "emp_razonSocial" => $this->input->post("razonsocial"),
            "emp_nit" => $this->input->post("nit"),
            "emp_direccion" => $this->input->post("direccion"),
            "ciu_id" => $this->input->post("ciudad"),
            "tam_id" => $this->input->post("tamano"),
            "numEmp_id" => $this->input->post("empleados"),
            "actEco_id" => $this->input->post("actividadeconomica"),
            "Dim_id" => $this->input->post("dimension1"),
            "Dimdos_id" => $this->input->post("dimension2"),
            "emp_representante" => $this->input->post("representante")
//            "emp_logo"=>$this->input->post("")
        );
        $datos = $this->Empresa_model->detail();
        if (count($datos) == 0)
            $this->Empresa_model->create($data);
        else
            $this->Empresa_model->update($data[0]);
    }

    function autocompletar() {
        $info = auto("User", "usu_id", "usu_nombre", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }

    function autocompletaruapellido() {
        $info = auto("User", "usu_id", "usu_apellido", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }

    function autocompletaruacedula() {
        $info = auto("User", "usu_id", "usu_cedula", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }

    function autocompletarcedula() {
        $info = auto("empleado", "Emp_Id", "Emp_Cedula", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }

    function autocompletarnombre() {
        $info = auto("empleado", "Emp_Id", "Emp_Nombre", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }

    function autocompletarapellido() {
        $info = auto("empleado", "Emp_Id", "Emp_Apellido", $this->input->get('term'));
        $this->output->set_content_type('application/json')->set_output(json_encode($info));
    }

    function riesgo() {
        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->layout->view("administrativo/riesgo");
        }
    }

    function clasificacionriesgo() {
        if ($this->consultaacceso($this->data["usu_id"])) {
            $this->layout->view("administrativo/clasificacionriesgo");
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */