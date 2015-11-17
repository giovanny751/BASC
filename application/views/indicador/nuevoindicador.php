<style>
    label{
        color: black;
    }
</style>   
<script type="text/javascript">
    $(".menINDICADORES").addClass("active open");
    $(".subMenNUEVO_INDICADOR").addClass("active");
</script>
<div class="page-bar" style="background-color: transparent !important;">
    <ul class="page-breadcrumb">
        <li class="devolver">
            <i class="fa fa-home"></i>
            <a href="<?php echo base_url("index.php/presentacion/principal") ?>">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Indicadores</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Nuevo Indicador</a>
        </li>
    </ul>
</div>
<div class="widgetTitle">
    <h5>
        <i class="glyphicon glyphicon-ok"></i>CREACIÓN INDICADOR
    </h5>
</div>
<div class="well">
    <div class="row">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <button type="button" class="btn btn-success" id="<?php echo (!empty($ind_id)) ? "actualizar" : "guardar"; ?>">
                    <?php echo (!empty($ind_id)) ? "Actualizar" : "Guardar"; ?>
                </button>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <center>
                    <div class="flecha flechaIzquierdaDoble" metodo="flechaIzquierdaDoble"></div>
                    <div class="flecha flechaIzquierda" metodo="flechaIzquierda"></div>
                    <div class="flecha flechaDerecha" metodo="flechaDerecha"></div>
                    <div class="flecha flechaDerechaDoble" metodo="flechaDerechaDoble"></div>
                    <div class="flecha documento" metodo="documento"></div>
                </center>
            </div>
        </div>
        <div class="row">
            <form method="post" id="indicador">
                <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6 ">
                    <div class="row">
                        <label for="indicador" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            <span class="campoobligatorio">*</span>Indicador
                        </label>
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">    
                            <input type="text" name="indicador" id="indicador" class="form-control obligatorio" value="<?php echo (isset($indicador->ind_indicador)) ? $indicador->ind_indicador : "" ?>">
                        </div>
                    </div>
                    <div class="row">
                        <label for="tipo" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            Tipo
                        </label>
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">       
                            <select name="tipo" id="tipo" class="form-control" >
                                <option value="">::Seleccionar::</option>
                                <?php foreach ($indicadortipo as $t) { ?>
                                    <option <?php echo (isset($indicador->tip_id) && ($t->indTip_id == $indicador->tip_id)) ? "Selected" : ""; ?> value="<?php echo $t->indTip_id ?>"><?php echo $t->indTip_tipo ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="mide" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            <span class="campoobligatorio">*</span>Que Mide
                        </label>   
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                            <textarea name="mide" id="mide" class="form-control obligatorio"><?php echo (isset($indicador->ind_mide)) ? $indicador->ind_mide : "" ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <label for="dimensionuno" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            <?php echo $empresa[0]->Dim_id ?>
                        </label>  
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 "> 
                            <select name="dimensionuno" id="dimensionuno" class="form-control" >
                                <option value="">::Seleccionar::</option>
                                <?php foreach ($dimension as $d1) { ?>
                                    <option <?php echo (isset($indicador->dim_id) && ($d1->dim_id == $indicador->dim_id)) ? "Selected" : ""; ?> value="<?php echo $d1->dim_id ?>"><?php echo $d1->dim_descripcion ?></option>
                                <?php } ?>
                            </select> 
                        </div>
                    </div>
                    <div class="row">
                        <label for="dimensiondos" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            <?php echo $empresa[0]->Dimdos_id ?>
                        </label>  
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                            <select  name="dimensiondos" id="dimensiondos" class="form-control" >
                                <option value="">::Seleccionar::</option>
                                <?php foreach ($dimension2 as $d2) { ?>
                                    <option <?php echo (isset($indicador->dimdos_id) && ($d2->dim_id == $indicador->dimdos_id)) ? "Selected" : ""; ?> value="<?php echo $d2->dim_id ?>"><?php echo $d2->dim_descripcion ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">    
                        <label for="frecuencia" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            <span class="campoobligatorio">*</span>Frecuencia
                        </label>   
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                            <input type="text" name="frecuencia" id="frecuencia" class="form-control obligatorio" value="<?php echo (isset($indicador->ind_frecuencia)) ? $indicador->ind_frecuencia : "" ?>">
                        </div>
                    </div>
                    <div class="row">    
                        <label for="cargo" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            <span class="campoobligatorio">*</span>Cargo
                        </label>   
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                            <select name="cargo" id="cargo" class="form-control obligatorio">
                                <option value="">::Seleccionar::</option>
                                <?php foreach ($cargo as $c) { ?>
                                    <option <?php echo (isset($indicador->car_id) && ($c->car_id == $indicador->car_id)) ? "Selected" : ""; ?> value="<?php echo $c->car_id ?>"><?php echo $c->car_nombre ?></option> 
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row"> 
                        <label for="nombreempleado" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            <span class="campoobligatorio">*</span>Empleado
                        </label>   
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                            <select name="nombreempleado" id="nombreempleado" class="form-control obligatorio">
                                <option value="">::Seleccionar::</option>
                                <?php
                                if (!empty($ind_id)):
                                    foreach ($empleado as $em):
                                        ?>
                                        <option <?php echo (isset($indicador->emp_id) && ($em->Emp_Id == $indicador->emp_id)) ? "Selected" : ""; ?> value="<?php echo $em->Emp_Id ?>"><?php echo $em->Emp_Nombre . " " . $em->Emp_Apellidos ?></option>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">    
                        <label for="minimo" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            Valor mínimo
                        </label>
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                            <input type="text" name="minimo" id="minimo" class="form-control" value="<?php echo (isset($indicador->ind_minimo)) ? $indicador->ind_minimo : "" ?>">
                        </div>
                    </div>
                    <div class="row">    
                        <label for="maximo" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            Valor máximo
                        </label> 
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                            <input type="text" name="maximo" id="maximo" class="form-control" value="<?php echo (isset($indicador->ind_maximo)) ? $indicador->ind_maximo : "" ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6 ">
                    <div class="row">
                        <label for="estado" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            <span class="campoobligatorio">*</span>Estado
                        </label> 
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                            <select name="estado" id="estado" class="form-control obligatorio" >
                                <option value="">::Seleccionar::</option>
                                <?php foreach ($estados as $e) { ?>
                                    <option <?php echo ((isset($indicador->est_id) && ($e->est_id == $indicador->est_id)) || (empty($indicador->est_id) && $e->est_id == 1)) ? "Selected" : ""; ?> value="<?php echo $e->est_id ?>"><?php echo $e->est_nombre ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="objetivo" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            <span class="campoobligatorio">*</span>Objetivo
                        </label>
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                            <textarea id="objetivo" name="objetivo" class="form-control obligatorio"><?php echo (isset($indicador->ind_objetivo)) ? $indicador->ind_objetivo : "" ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <label for="observaciones" class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                            Observaciones
                        </label>
                        <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                            <textarea id="observaciones" name="observaciones" class="form-control"><?php echo (isset($indicador->ind_observaciones)) ? $indicador->ind_observaciones : "" ?></textarea>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="ind_id" name="ind_id" value="<?php echo (!empty($ind_id)) ? $ind_id : ""; ?>" />
            </form>
        </div>
    </div>
    <?php if (!empty($ind_id)): ?>
        <div class="portlet box blue">
            <div class="portlet-title">
            </div>
            <div class="portlet-body">
                <div class="tabbable tabbable-tabdrop">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#tab1">Valores</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab2">Registrar valores</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab3">Gráfica</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab4">Registros</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane active">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <th>Fecha</th>
                                <th>Comentario</th>
                                <th>Valor</th>
                                <th>Usuario</th>
                                <th>Costo</th>
                                </thead>
                                <tbody id="bodyvalores">
                                    <?php foreach ($valores as $v): ?>
                                        <tr>
                                            <td><?php echo $v->indVal_fechaCreacion ?></td>
                                            <td><?php echo $v->indVal_comentario ?></td>
                                            <td><?php echo $v->indVal_valor ?></td>
                                            <td><?php echo $v->usu_id ?></td>
                                            <td></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab2" class="tab-pane">
                            <div class="col-lg-12 col-md-12 col-sx-12 col-sm-12">
                                <form method="post" id="frmvalores">
                                    <input type="hidden" id="ind_id" name="ind_id" value="<?php echo (!empty($ind_id)) ? $ind_id : ""; ?>" />
                                    <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6">
                                        <div class="row">
                                            <label for="valor" class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                                Valor
                                            </label>
                                            <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                                <input type="text" name="valor" id="valor" class="form-control miles">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="usuario" class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                                Usuario
                                            </label>
                                            <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                                <input type="text" name="usuario" id="usuario" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6">
                                        <label for="comentarios">Comentarios</label>
                                        <textarea name="comentarios" id="comentarios" class="form-control"></textarea>
                                    </div>
                                </form>   
                            </div>
                            <div class="col-lg-12 col-md-12 col-sx-12 col-sm-12" style="text-align: center">
                                <button type="button" class="btn btn-success" id="guardarindicador">Guardar</button>
                            </div>
                        </div>
                        <div id="tab3" class="tab-pane">
                            
                        </div>
                        <div id="tab4" class="tab-pane">
                            <div class="portlet box blue" style="margin-top: 30px;">
                                <div class="portlet-title">
                                    <div class="caption">
                                    </div>
                                    <div class="tools">                                        
                                        <i class=" btn btn-default fa fa-folder-o carpeta" data-toggle="modal" data-target="#modalCarpeta" ></i>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tabbable tabbable-tabdrop">
                                        <div class="tab-content">
                                            <br>
                                            <div class="panel-group accordion" id="accordion5">
                                                <?php
                                                $o = 1;
                                                foreach ($carpeta as $idcar => $nomcar):
                                                    foreach ($nomcar as $nombrecar => $numcar):
                                                        ?>
                                                        <div class="panel panel-default" id="<?php echo $idcar ?>">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_<?php echo $idcar . 'r'; ?>" aria-expanded="false" id=""> 
                                                                        <i class="fa fa-folder-o carpeta"></i>&nbsp;<?php echo $nombrecar ?>
                                                                    </a>
                                                                    <i class="fa fa-file-archive-o nuevoregistro" car_id="<?php echo $idcar ?>" data-toggle="modal" data-target="#myModal"></i>
                                                                    <i class="fa fa-edit editarcarpeta" car_id="<?php echo $idcar ?>"></i>
                                                                    <i class="fa fa-times eliminarregistro" car_id="<?php echo $idcar ?>"></i>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_<?php echo $idcar . 'r'; ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    <table class="table table-hover table-bordered">
                                                                        <thead style="background-color: blue">
                                                                        <th>Nombre de archivo</th>
                                                                        <th>Descripción</th>
                                                                        <th>Versión</th>
                                                                        <th>Responsable</th>
                                                                        <th>Tamaño</th>
                                                                        <th>Fecha</th>
                                                                        <th>Acción</th>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php foreach ($numcar as $numerocar => $campocar): ?>
                                                                                <tr>
                                                                                    <td><?php echo $campocar[0] ?></td>
                                                                                    <td><?php echo $campocar[1] ?></td>
                                                                                    <td><?php echo $campocar[2] ?></td>
                                                                                    <td><?php echo $campocar[3] ?></td>
                                                                                    <td><?php echo $campocar[4] ?></td>
                                                                                    <td><?php echo $campocar[5] ?></td>
                                                                                    <td>
                                                                                        <i class="fa fa-times fa-2x eliminarregistro btn btn-danger" title="Eliminar" reg_id="<?php echo $campocar[6] ?>"></i>
                                                                                        <i class="fa fa-pencil-square-o fa-2x modificarregistro btn btn-info" title="Modificar" reg_id="<?php echo $campocar[6] ?>" data-target="#myModal15" data-toggle="modal"></i>
                                                                                    </td>
                                                                                </tr>   
                                                                            <?php endforeach; ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $o++;
                                                    endforeach;
                                                endforeach;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabbable tabbable-tabdrop">
                </div>
            </div>
        </div>
        <!-- Modal -->
        <!-- Carpeta -->
        <div class="modal fade" id="modalCarpeta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">NUEVA CARPETA</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="frmcarpetaregistro">
                            <input type="hidden" id="ind_id" name="ind_id" value="<?php echo (!empty($ind_id)) ? $ind_id : ""; ?>" />
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="nombrecarpeta">Nombre</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" id="nombrecarpeta" name="nombrecarpeta" class="form-control carbligatorio">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="descripcioncarpeta">Descripción:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" id="descripcioncarpeta" name="descripcioncarpeta" class="form-control carbligatorio">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer" id="opcionescarpeta">
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardarcarpeta">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registro -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">REGISTROS</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="formactividadpadre">
                            <input type="hidden" value="<?php echo $tarea->tar_id; ?>" name="tar_id" id="tar_id_registro"/>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="carpeta">Carpeta:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <select id="carpeta" name="tarCar_id" class="form-control tarRegObligatorio">
                                        <option value=""></option>
                                        <?php foreach ($carpetas as $carp): ?>
                                            <option value="<?php echo $carp->tarCar_id ?>"><?php echo $carp->tarCar_nombre . ' - ' . $carp->tarCar_descripcion ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="version">Versión:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" id="version" name="tarReg_version" class="form-control tarRegObligatorio">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="descripcion">Descripción:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <textarea id="descripcion_tarea" name="tarReg_descripcion" class="form-control tarRegObligatorio"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="nombreactividad">Adjuntar Archivo:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="file" id="nombreactividad" name="archivo" class="form-control tarRegObligatorio">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success" id="guardarregistro">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
</div>
<script>
    $(".flecha").click(function () {
        var url = "<?php echo base_url("index.php/administrativo/consultausuariosflechas") ?>";
        var idUsuarioCreado = $("#usuid").val();
        var metodo = $(this).attr("metodo");
        if (metodo != "documento") {
            $.post(url, {idUsuarioCreado: idUsuarioCreado, metodo: metodo})
                    .done(function (msg) {
                        $("input[type='text'],select").val("");
                        $("#usuid").val(msg.usu_id);
                        $("#cedula").val(msg.usu_cedula);
                        $("#nombres").val(msg.usu_nombre);
                        $("#apellidos").val(msg.usu_apellido);
                        $("#usuario").val(msg.usu_usuario);
                        $("#contrasena").val(msg.usu_contrasena);
                        $("#email").val(msg.usu_email);
                        $("#genero").val(msg.sex_id);
                        $("#estado").val(msg.est_id);//estado
                        $("#cargo").val(msg.car_id);//cargo
                        $("#empleado").val(msg.emp_id);//empleado
                        if (msg.cambiocontrasena == "1") {
                            $("#cambiocontrasena").is(":checked");
                        }
                    })
                    .fail(function (msg) {
                        alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
                        $("input[type='text'], select").val();
                    })
        } else {
            window.location = "<?php echo base_url("index.php/indicador/verindicadores"); ?>";
        }

    });
    $("body").on("click", "#actualizar", function () {
        if (obligatorio("obligatorio")) {
            $.post("<?php echo base_url("index.php/indicador/actualizarindicador") ?>", $("#indicador").serialize())
                    .done(function (msg) {
                        alerta("verde", "Actualizado");
                    })
                    .fail(function (msg) {
                        alerta("rojo", "Error al actualizar.");
                    });
        }

    });
    $("body").on("click", "#guardar", function () {
        if (obligatorio("obligatorio")) {
            $.post("<?php echo base_url("index.php/indicador/guardarindicador") ?>", $("#indicador").serialize())
                    .done(function (msg) {
                        alerta("verde", "Guardado con exito");
                        if (confirm("Desea guardar otro indicador?")) {
                            $("#indicador").find("input").val("");
                            $("#indicador").find("textarea").val("");
                            $("#indicador").find("select").val("");
                            $("#indicador").find("#nombreempleado").html("<option>::Seleccionar::</option>");
                        } else {
                            window.location = "<?php echo base_url("index.php/indicador/verindicadores"); ?>";
                        }
                    })
                    .fail(function (msg) {
                        alerta("rojo", "Error al guardar.");
                    });
        }

    });
    $('#cargo').change(function () {

        $.post(
                "<?php echo base_url("index.php/administrativo/consultausuarioscargo") ?>",
                {
                    cargo: $(this).val()
                }
        ).done(function (msg) {
            var data = "";
            $('#nombreempleado *').remove();
            data += "<option>::Seleccionar::</option>";
            $.each(msg, function (key, val) {
                data += "<option value='" + val.Emp_Id + "'>" + val.Emp_Nombre + " " + val.Emp_Apellidos + "</option>"
            });
            $('#nombreempleado').append(data);
        }).fail(function (msg) {

        })
    });

    $('#guardarindicador').click(function () {
        $.post(
                "<?php echo base_url("index.php/indicador/guardarvalores") ?>",
                $('#frmvalores').serialize()
                ).done(function (msg) {
                    var body = $("#bodyvalores *").remove();
                    $.each(msg,function(key,val){
                        body += "<tr>";
                        body += "<td>"+val.indVal_fechaCreacion+"</td>";
                        body += "<td>"+val.indVal_comentario+"</td>";
                        body += "<td>"+val.indVal_valor+"</td>";
                        body += "<td>"+val.usu_id+"</td>";
                        body += "<td></td>";
                        body += "</tr>";
                    });
                    $("#bodyvalores").append(body);
            $('#frmvalores').find('input[type="text"]').val('');
            $('#frmvalores').find('textarea').val('');
            alerta("verde", "Guardado correctamente");
        }).fail(function (msg) {
            alerta("rojo", "Error, por favor comunicarse con el administrador del sistema")
        });

    });
    $('body').delegate("#guardarcarpeta","click",function () {
        if (obligatorio("carbligatorio")) {
            $.post("<?php echo base_url("index.php/indicador/guardarcarpetatarea") ?>",
                    $('#frmcarpetaregistro').serialize()
                    ).done(function (msg) {
                var option = "<option value='" + msg.indCar_id+ "'>" + msg.indCar_nombre + " - " + msg.indCar_descripcion+"</option>"
                $('#carpeta').append(option);
                                
                var acordeon = '<div class="panel panel-default" id="' + msg.indCar_id + '">\n\
                                            <div class="panel-heading">\n\
                                                <h4 class="panel-title">\n\
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_' + msg.indCar_id  + '" aria-expanded="false">\n\
                                                        <i class="fa fa-folder-o carpeta"></i> ' + msg.indCar_nombre + " - " + msg.indCar_descripcion + '\n\
                                                    </a>\n\
                                                        <i class="fa fa-file-archive-o nuevoregistro" car_id="' + msg.indCar_id + '" data-toggle="modal" data-target="#myModal"></i>\n\
                                                        <i class="fa fa-edit" car_id="' + msg.indCar_id + '"></i>\n\
                                                        <i class="fa fa-times eliminarregistro" car_id="' + msg.indCar_id + '"></i>\n\
                                                </h4>\n\
                                            </div>\n\
                                            <div id="collapse_' + msg.indCar_id + '" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">\n\
                                                <div class="panel-body">\n\
                                                    <table class="table table-hover table-bordered">\n\
                                                        <thead>\n\
                                                            <th>Nombre de archivo</th>\n\
                                                            <th>Descripción</th>\n\
                                                            <th>Versión</th>\n\
                                                            <th>Responsable</th>\n\
                                                            <th>Tamaño</th>\n\
                                                            <th>Fecha</th>\n\
                                                            <th>Acción</th>\n\
                                                        </thead>\n\
                                                        <tbody>\n\
                                                            <tr>\n\
                                                            <td colspan="6">\n\
                                                            <center><b>No hay registros asociados</b></center>\n\
                                                            </td>\n\
                                                            </tr>\n\
                                                        </tbody>\n\
                                                </table>\n\
                                                </div>\n\
                                            </div>\n\
                                    </div>';
                $('#accordion5').append(acordeon);
                $('.carbligatorio').val("");
                $('#modalCarpeta').modal("hide");
                alerta("verde", "Carpeta agregada con exito");
            }).fail(function (msg) {
                alerta("rojo", "ha ocurrido un error por favor cumunicarse con el administrador del sistema");
            });
        }
    });
</script> 