<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>PLANES
    </h5>
</div>
<div class='well'>
    <form method="post" id="f7">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <button type="button" id="guardarplan" class="guardar btn btn-success">
                    <?php echo (!empty($plan[0]->pla_id)) ? "Actualizar" : "Guardar"; ?>
                </button>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                <center>
                    <div class="flecha flechaIzquierdaDoble" metodo="flechaIzquierdaDoble"></div>
                    <div class="flecha flechaIzquierda" metodo="flechaIzquierda"></div>
                    <div class="flecha flechaDerecha" metodo="flechaDerecha"></div>
                    <div class="flecha flechaDerechaDoble" metodo="flechaDerechaDoble"></div>
                    <div class="flecha documento" metodo="documento"></div>
                </center>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <a href="<?php echo base_url("index.php/tareas/nuevatarea") ?>">
                    <button type="button" class="btn ">Nueva tarea</button>
                </a>
                <a href="<?php echo base_url("index.php/tareas/nuevatarea") ?>">
                    <button type="button" class="btn ">Nuevo registro</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                    <label for="nombre">
                        <span class="campoobligatorio">*</span>Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control obligatorio" value="<?php echo (!empty($plan[0]->pla_nombre) ) ? $plan[0]->pla_nombre : ""; ?>" />
                </div>
                <div class="form-group">
                    <label for="fechainicio"><span class="campoobligatorio">*</span>Fecha Inicio</label>
                    <input type="text" name="fechainicio" id="fechainicio" class="form-control fecha obligatorio"  value="<?php echo (!empty($plan[0]->pla_fechaInicio) ) ? $plan[0]->pla_fechaInicio : ""; ?>"/>
                </div>
                <div class="form-group">
                    <label for="fechafin">Fecha Fin</label>
                    <input type="text" readonly="readonly" name="fechafin" id="fechafin" class="form-control"  value="<?php echo (!empty($plan[0]->pla_fechaFin) ) ? $plan[0]->pla_fechaFin : ""; ?>"/>
                </div>
                <div class="row">
                    <div class="alert alert-info">
                        <center>Responsable</center>
                    </div>
                </div>
                <div class="form-group">
                    <label for="presupuesto">Cargo</label>
                    <select name="cargo" id="cargo" class="form-control" >
                        <option value="">::Seleccionar::</option>
                        <?php foreach ($cargo as $c) { ?>
                            <option <?php echo (!empty($plan[0]->car_id) && $c->car_id == $plan[0]->car_id) ? "selected" : ""; ?> value="<?php echo $c->car_id ?>"><?php echo $c->car_nombre ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="empleado">Empleado</label>
                    <select name="empleado" id="empleado" class="form-control">
                        <option value="">::seleccionar::</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="presupuesto">Presupuesto</label>
                    <input type="text" name="presupuesto" id="presupuesto" class="form-control"  value="<?php echo (!empty($plan[0]->pla_presupuesto) ) ? $plan[0]->pla_presupuesto : ""; ?>"/>
                </div>
                <div class="form-group">
                    <label for="costoreal"><span class="campoobligatorio">*</span>Costo Real</label>
                    <input type="text" name="costoreal" id="costoreal" class="form-control obligatorio"  value="<?php echo (!empty($plan[0]->pla_costoReal) ) ? $plan[0]->pla_costoReal : ""; ?>"/>
                </div>
                <div class="form-group">
                    <label for="norma"><span class="campoobligatorio">*</span>Norma</label>
                    <select name="norma" id="norma" class="form-control obligatorio" >
                        <option value="">::Seleccionar::</option>
                        <?php foreach ($norma as $n): ?>
                            <option <?php echo (!empty($plan[0]->nor_id) && $plan[0]->nor_id == $n->nor_id ) ? "selected" : ""; ?> value="<?php echo $n->nor_id ?>"><?php echo $n->nor_norma ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                    <label for="estado"><span class="campoobligatorio">*</span>estado</label>
                    <select name="estado" id="estado" class="form-control obligatorio">
                        <option value="">::Seleccionar::</option>
                        <?php foreach ($estado as $e) { ?>
                            <option <?php echo (!empty($plan[0]->est_id) && $e->est_id == $plan[0]->est_id) ? "selected" : ""; ?> value="<?php echo $e->est_id ?>"><?php echo $e->est_nombre ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" style=" height: 116px;"> <?php echo (!empty($plan[0]->pla_descripcion) ) ? $plan[0]->pla_descripcion : ""; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="avanceprogramado">Avance programado</label>
                    <input type="text" name="avanceprogramado" id="avanceprogramado" class="form-control"  value="<?php echo (!empty($plan[0]->pla_avanceProgramado) ) ? $plan[0]->pla_avanceProgramado : ""; ?>"/>
                </div>
                <div class="form-group">
                    <label for="avancereal">Avance real</label>
                    <input type="text" name="avancereal" id="avancereal" class="form-control"  value="<?php echo (!empty($plan[0]->pla_avanceReal) ) ? $plan[0]->pla_avanceReal : ""; ?>"/>
                </div>
                <div class="form-group">
                    <label for="eficiencia">%Eficiencia</label>
                    <select name="eficiencia" id="eficiencia" class="form-control" style="text-align:center"  value="<?php echo (!empty($plan[0]->pla_eficiencia) ) ? $plan[0]->pla_eficiencia : ""; ?>">
                        <option value="">::Seleccionar::</option>
                        <?php for ($i = 0; $i < 101; $i++) { ?>
                            <option value="<?php echo $i ?>"><?php echo $i . " " . "%" ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?php echo (!empty($plan[0]->pla_id)) ? $plan[0]->pla_id : ""; ?>" name="pla_id" id="pla_id">
    </form>    
    <hr>
    <?php if (!empty($plan[0]->pla_id)): ?>
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>
                    Tareas asociadas al plan
                </div>
                <div class="tools">
                    <a class="collapse" href="javascript:;" data-original-title="" title=""> </a>
                    <a class="config" data-toggle="modal" href="#portlet-config" data-original-title="" title=""> </a>
                    <a class="reload" href="javascript:;" data-original-title="" title=""> </a>
                    <a class="remove" href="javascript:;" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body">
                <p> Basic exemple. Resize the window to see how the tabs are moved into the dropdown </p>
                <div class="tabbable tabbable-tabdrop">
                    <ul class="nav nav-tabs">
                        <li class="dropdown pull-right tabdrop">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-angle-down"></i>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a data-toggle="tab" href="#tab5">Gráfica de Grantt</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab6">Registros</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a data-toggle="tab" href="#tab1">Tareas</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab2">Tareas Inactivas</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab3">Histórico tareas</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab4">Actividades</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane active">
                            <table class="table table-striped table-bordered table-hover" id="datatable_ajax">
                                <thead >
                                <th>Nuevo Historial</th>
                                <th>Avance</th>
                                <th>Tipo</th>
                                <th>Nombre de la Tarea</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                                <th>Duraciòn presupuestada</th>
                                <th>Responsables</th>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div id="tab2" class="tab-pane">
                            <table class="table table-striped table-bordered table-hover" id="datatable_ajax2">
                                <thead>
                                <th>Nuevo Historial</th>
                                <th>Avance</th>
                                <th>Tipo</th>
                                <th>Nombre de la tarea</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                                <th>Duración presupuestada</th>
                                <th>Responsables</th>
                                </thead>
                                <tbody >
                                </tbody>
                            </table>
                        </div>
                        <div id="tab3" class="tab-pane">

                            <table class="table table-bordered table-hover">
                                <thead>
                                <th>Fecha</th>
                                <th>Resumen</th>
                                <th>Usuario</th>
                                <th>Horas</th>
                                <th>Costo</th>
                                <th>Comentarios</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="7"></td>
                                    </tr>
                                </tbody>
                            </table>   

                        </div>
                        <div id="tab4" class="tab-pane">
                            <div style="text-align: right">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">CREAR ACTIVIDAD PADRE</button>
                            </div>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <th>Fecha inicio</th>
                                <th>Fecha fin</th>
                                <th>Presupuesto</th>
                                <th>Dirección</th>
                                <th>Acción</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="5"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <p>   </p>
                <p>   </p>
                <div class="tabbable tabbable-tabdrop">
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">ACTIVIDAD</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="formactividadpadre">
                            <input type="hidden" value="<?php echo (!empty($plan[0]->pla_id)) ? $plan[0]->pla_id : ""; ?>" name="pla_id" id="pla_id"/>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="idactividad">Id:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" id="idactividad" name="idactividad" class="form-control acobligatorio">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="nombreactividad">Nombre:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" id="nombreactividad" name="nombreactividad" class="form-control acobligatorio">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardaractividadpadre">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>
<script>
    
    jQuery(document).ready(function () {
        TableAjax.init();

    });
    var TableAjax = function () {

        var initPickers = function () {
            //init date pickers
            $('.date-picker').datepicker({
                rtl: Metronic.isRTL(),
                autoclose: true
            });
        }

        var handleRecords = function () {

            var grid = new Datatable();

            grid.init({
                src: $("#datatable_ajax2"),
                onSuccess: function (grid) {
                    // execute some code after table records loaded
                },
                onError: function (grid) {
                    // execute some code on network or other general error  
                },
                onDataLoad: function (grid) {
                    // execute some code on ajax data load
                },
                loadingMessage: 'Loading...',
                dataTable: {
                    "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.
                    "lengthMenu": [
                        [10, 20, 50, 100, 150, -1],
                        [10, 20, 50, 100, 150, "All"] // change per page values here
                    ],
                    "pageLength": 10, // default record count per page
                    "ajax": {
                        "url": "<?php echo base_url("index.php/tareas/listadotareasinactivasxplanfiltro") ?>", // ajax source
                    },
                    "order": [
                        [1, "asc"]
                    ]// set first column as a default sort by asc
                }
            });

            // handle group actionsubmit button click
            grid.getTableWrapper().on('click', '.table-group-action-submit', function (e) {
                e.preventDefault();
                var action = $(".table-group-action-input", grid.getTableWrapper());
                if (action.val() != "" && grid.getSelectedRowsCount() > 0) {
                    grid.setAjaxParam("avaTar_fecha", "group_action");
                    grid.setAjaxParam("avaTar_fecha", action.val());
                    grid.setAjaxParam("usu_id", grid.getSelectedRows());
                    grid.getDataTable().ajax.reload();
                    grid.clearAjaxParams();
                } else if (action.val() == "") {
                    Metronic.alert({
                        type: 'danger',
                        icon: 'warning',
                        message: 'Please select an action',
                        container: grid.getTableWrapper(),
                        place: 'prepend'
                    });
                } else if (grid.getSelectedRowsCount() === 0) {
                    Metronic.alert({
                        type: 'danger',
                        icon: 'warning',
                        message: 'No record selected',
                        container: grid.getTableWrapper(),
                        place: 'prepend'
                    });
                }
            });
        }
        return {
            //main function to initiate the module
            init: function () {

                initPickers();
                handleRecords();
            }

        };

    }();
    
    $('#guardaractividadpadre').click(function(){
        
        if(obligatorio('acobligatorio')){
            
            $.post("<?php echo base_url("index.php/tareas/guardaractividadpadre") ?>",
                    $('#formactividadpadre').serialize()
                    )
                    .done(function(){
                        $('.acobligatorio').val('')
                        alerta("verde","Actividad padre guardada con exito");
                    })
                    .fail(function(){
                        alerta("error","Error por favor comunicarse con el administrador del sistema");
                    })
            
        }
        
    });
    
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
            window.location = "<?php echo base_url("index.php/tareas/listadoplanes"); ?>";
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
            $('#empleado *').remove();
            $.each(msg, function (key, val) {
                data += "<option value='" + val.Emp_Id + "'>" + val.Emp_Nombre + " " + val.Emp_Apellidos + "</option>"
            });
            $('#empleado').append(data);
        }).fail(function (msg) {

        });
    });
    $('#guardarplan').click(function () {
        if (obligatorio('obligatorio') == true) {
            $.post(
                    "<?php
    echo (empty($plan[0]->pla_id)) ? base_url('index.php/tareas/guardarplan') : base_url('index.php/tareas/actualizarplan');
    ?>",
                    $('#f7').serialize()
                    ).done(function (msg) {
                if ($(this).text() == "Actualizar") {

                } else {
                    $('input,select,textarea').val("");
                }
                alerta("verde", "Datos guardados correctamente");
            }).fail(function (msg) {
                alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
            });
        }
    });
</script>