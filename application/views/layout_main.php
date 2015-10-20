<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title></title> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<script src="<?= base_url('js/jquery-1.10.2.js') ?>" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  
<!-- BEGIN GLOBAL MANDATORY STYLES --> 
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/global/plugins/uniform/css/uniform.default.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') ?>" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->

<link href="<?= base_url('assets/global/plugins/fullcalendar/fullcalendar.min.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') ?>" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="<?= base_url('assets/admin/pages/css/tasks.css') ?>" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?= base_url('assets/global/css/components.css') ?>" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/global/css/plugins.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/admin/layout/css/layout.css') ?>" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/admin/layout/css/themes/blue.css') ?>" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?= base_url('assets/admin/layout/css/custom.css') ?>" rel="stylesheet" type="text/css"/>

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/global/plugins/select2/select2.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/global/plugins/bootstrap-datepicker/css/datepicker.css') ?>"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/global/plugins/clockface/css/clockface.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') ?>"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') ?>"/>

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/global/plugins/jquery-notific8/jquery.notific8.min.css') ?>"/>
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?= base_url('assets/admin/pages/css/error.css') ?>" rel="stylesheet" type="text/css"/>
<!-- Autocompletable -->
<link rel="stylesheet" href="<?= base_url('css/jquery-ui.css') ?>">



<script type="text/javascript" src="<?= base_url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/global/plugins/clockface/js/clockface.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/global/plugins/bootstrap-daterangepicker/moment.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') ?>"></script> 

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>


<!-- Flechas para cambio de usuario, empleados y más cosas -->
<link rel="stylesheet" href="<?= base_url('css/flechas.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/estilos.css'); ?>"/>

<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="<?= base_url('assets/global/plugins/fullcalendar/fullcalendar.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->


</head>
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
<div class="page-header -i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="../../assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="<?=  base_url("uploads/logo_nygsoft.jpg") ?>"/>
                                <span class="username username-hide-on-mobile">
                                    Usuario 
                                </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo base_url("index.php/presentacion/recordarcontrasena") ?>" >
                                    <i class="icon-lock"></i> Cambio de contraseña </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("index.php/presentacion/rol") ?>">
                                    <i class="icon-calendar"></i> Cambiar de Rol </a>
                                </li>
                               
                                <li class="divider">
                                </li>
                                
                                <li>
                                    <a href="<?php echo base_url("index.php/login/logout") ?>">
                                    <i class="icon-key"></i> Salir </a>
                                </li>
                            </ul>
                        </li>
				<!-- END USER LOGIN DROPDOWN -->
                    </ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<?php
function modulos($datosmodulos, $idusuario, $dato = null) {

    $ci = &get_instance();
    $ci->load->model("ingreso_model");
    $user = null;
    $menu = $ci->ingreso_model->menu($datosmodulos, $idusuario, 2);
    $i = array();
    foreach ($menu as $modulo)
        $i[$modulo['menu_id']][$modulo['menu_nombrepadre']][$modulo['menu_idpadre']] [] = array($modulo['menu_idhijo'], $modulo['menu_controlador'], $modulo['menu_accion'],$modulo['mod_icons']);
    if ($datosmodulos == 'prueba'){
    echo "<ul class='page-sidebar-menu' data-keep-expanded='false' data-auto-scroll='true' data-slide-speed='200'>"

        . "<li class='sidebar-toggler-wrapper'>
                        <div class='sidebar-toggler'>
                        </div>
                </li>";
    }
    else{
    echo"<ul class='sub-menu'>";
    
    }
    foreach ($i as $padre => $nombrepapa)
        foreach ($nombrepapa as $nombrepapa => $menuidpadre)
            foreach ($menuidpadre as $modulos => $menu)
                foreach ($menu as $submenus):
                    if ($submenus[1] == "" && $submenus[2] == "") {
                        (!empty($submenus[3]))?$icon = $submenus[3]:$icon = "icon-folder";
                        echo "<li class='men".str_replace(" ","_",strtoupper($nombrepapa))."'><a href='#'><i class='".$icon."'></i><span class='title'>" . strtoupper($nombrepapa) . "</span><span class='arrow'></span></a>";
                    } else {
                        echo "<li class='subMen".str_replace(" ","_",strtoupper($nombrepapa))."'><a href='" . base_url("index.php/" . $submenus[1] . "/" . $submenus[2]) . "'>" . strtoupper($nombrepapa) . "</a>";
                    }
                    if (!empty($submenus[0]))
                        modulos($submenus[0], $idusuario);
                    echo "</li>";
                endforeach;
    echo "</ul>";
}
?>
<div class="page-container">
    
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <?php echo modulos('prueba', $id, null); ?>
        </div>
    </div>
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						
						<a href="<?php echo base_url("index.php/tareas/listadoplanes") ?>" class="more">
						PLANES <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						
						<a href="<?php echo base_url("index.php/tareas/listadotareas") ?>" class="more">
						TAREAS <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<a href="<?php echo base_url("index.php/indicador/verindicadores") ?>" class="more">
						INDICADORES <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<a href="<?php echo base_url("index.php/riesgo/listadoriesgo") ?>" class="more">
						RIESGO <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						
						<a href="<?php echo base_url("index.php/documento/documento") ?>" class="more">
						 DOCUMENTOS<i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
            <?php echo $content_for_layout ?>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/global/plugins/jquery.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('js/jquery.blockUI.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/jquery-migrate.min.js') ?>" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?= base_url('assets/global/plugins/jquery-ui/jquery-ui.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/jquery.blockui.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/jquery.cokie.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/uniform/jquery.uniform.min.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?= base_url('assets/global/plugins/select2/select2.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url('assets/global/scripts/metronic.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/admin/layout/scripts/layout.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/admin/layout/scripts/quick-sidebar.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/admin/layout/scripts/demo.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/admin/pages/scripts/index.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/admin/pages/scripts/tasks.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/global/scripts/datatable.js') ?>"></script>
<!--<script src="<?= base_url('assets/admin/pages/scripts/table-ajax.js') ?>"></script>-->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url('assets/global/plugins/jquery-notific8/jquery.notific8.min.js') ?>"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="<?= base_url('assets/admin/pages/scripts/ui-notific8.js') ?>"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="<?= base_url('js/organigrama/jquery.jOrgChart.js') ?>"></script>
<script src="<?= base_url('js/organigrama/prettify.js') ?>"></script>


<style>
    tbody{
        color: black;
    }
    thead{
        background-color: blue !important;
        color: while !important;
    }
    .obligado{
        background-color: rgb(250, 255, 189);
    }
    .caption {
        display: inline-block;
        float: left;
        font-size: 18px;
        font-weight: 400;
        line-height: 18px;
        padding: 10px 0;
    }
    .portlet.box, .portlet-title {
        border-bottom: 1px solid #eee;
        color: #fff;
        margin-bottom: 0;
        padding: 0 10px;
    }
    .row{
        margin-top: 1%;
    }
    .container{
        padding-top: 83px;

    }
    * { 
        font-family: "calibri", Garamond, 'Comic Sans'; 
        font: 12px/2em sans-serif;
    }
    .campoobligatorio{
        color:red;
        font-size:16px;
    }
    i{
        cursor:pointer;
    }
    .table tbody tr td {
        border: 1px solid #CCC !important;
    }

    .table tr th {
        border: 1px solid #CCC !important;
        background-color: #008ac9;
        color: #FFF
    }

    .table thead tr td {
        border: 1px solid #CCC !important;
        background-color: #008ac9;
        color: #FFF
    }
</style>
<script>
jQuery(document).ready(function() { 
    Metronic.init(); // init metronic core componets
    Layout.init(); // init layout
    QuickSidebar.init(); // init quick sidebar
    Demo.init(); // init demo features
    Index.init();   
    Index.initDashboardDaterange();
    Index.initJQVMAP(); // init index page's custom scripts
    Index.initCalendar(); // init index page's custom scripts
    Index.initCharts(); // init index page's custom scripts
    Index.initChat();
    Index.initMiniCharts();
    Tasks.initDashboardWidget();
    UINotific8.init();
    
});

$('.portlet').find('label,h4').css('color','black');
    $('.limpiar').click(function () {
        $('select,input').val('');
    });
//    --------------------------------------------------------------------------
//COLORES DE ALERTAS DE METRONIC
//    --------------------------------------------------------------------------
    function alerta(color, texto)
    {
        switch (color) {
            case "rojo":
                var alerta = 'ruby sticky';
                break;
            case "morado":
                var alerta = 'amethyst sticky';
                break;
            case "azul":
                var alerta = 'teal sticky';
                break;
            case "amarillo":
                var alerta = 'lemon sticky';
                break;
            case "verde":
                var alerta = 'lime sticky';
                break;
            case "naranja":
                var alerta = 'tangerine sticky';
                break;
            default:
                break;
        }
        $.notific8('', {
            horizontalEdge: 'bottom',
            life: 5000,
            theme: alerta,
            heading: texto
        });
    }
    $('body').delegate('.number', 'keypress', function(tecla) {
        if (tecla.charCode > 0 && tecla.charCode < 48 || tecla.charCode > 57)
            return false;
    });
    $('body').delegate('.float', 'keypress', function(tecla) {
        if(tecla.charCode == 46) return true;
        if ((tecla.charCode > 0 && tecla.charCode < 48) || (tecla.charCode > 57)  )
            return false;
    });
    function obligatorio(clase) {
        var i = 0;
        $('.' + clase).each(function (key, val) {
            if ($(this).val() != "")
                $(this).removeClass('obligado');
            else {
                $(this).addClass('obligado');
                i++;
            }
        });
        if (i == 0)
            return true;
        else{
            alerta('naranja',"FALTAN CAMPOS POR LLENAR");
            return false;
            }
    }
    
    function email(classemail){
        var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
        //Se utiliza la funcion test() nativa de JavaScript
        if (regex.test($('.'+classemail).val().trim())) {
            $("."+classemail).removeClass('obligado');
            return true;
        }
        else {
            $("."+classemail).addClass('obligado');
            alerta("amarillo","Correo no valido")
            return false;
        }
    }
    
    $(".email").change(function(){
        email("email");
    });


    $('.fecha').datepicker({
        format: "yyyy-mm-dd"
    });

    $(function () {
        //Se pone para que en todos los llamados ajax se bloquee la pantalla mostrando el mensaje Procesando...
        $.blockUI.defaults.message = 'Procesando...';
        $(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
    });
</script>
