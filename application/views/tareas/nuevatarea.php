<!--<script type="text/javascript">
        $(".menNUEVA_TAREA").addClass("active open");
        $(".subMenCREACIÓN_TAREAS").addClass("active");
</script>-->
<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>NUEVA TAREA
    </h5>
</div>
<div class='well'>
    <form method="post" id="f8">
        <input type="hidden" value="<?php echo (!empty($tarea->tar_id)) ? $tarea->tar_id : ""; ?>" name="id" id="interno">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <button type="button" id="guardartarea" class="btn btn-success">
                    <?php echo (!empty($tarea->tar_id)) ? "Actualizar" : "Guardar"; ?>
                </button>
                <button type="button" id="guardartarea" class="btn btn-danger">Eliminar</button>
            </div>   
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">

                <center>
                    <div class="flecha flechaIzquierdaDoble" metodo="flechaIzquierdaDoble"></div>
                    <div class="flecha flechaIzquierda" metodo="flechaIzquierda"></div>
                    <div class="flecha flechaDerecha" metodo="flechaDerecha"></div>
                    <div class="flecha flechaDerechaDoble" metodo="flechaDerechaDoble"></div>
                    <div class="flecha documento" metodo="documento"></div>
                </center>
            </div>
        </div>
        <div class="row" style="margin-bottom: 30px">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="nombre"><span class="campoobligatorio">*</span>Nombre</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="nombre" id="nombre" class="form-control obligatorio" value="<?php echo (!empty($tarea->tar_nombre)) ? $tarea->tar_nombre : ""; ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="plan"><span class="campoobligatorio">*</span>Plan</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="plan" id="plan" class="form-control obligatorio" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($planes as $p) { ?>
                                <option  <?php echo (!empty($tarea->pla_id) && $tarea->pla_id == $p->pla_id) ? "selected" : ""; ?> value="<?php echo $p->pla_id ?>"><?php echo $p->pla_nombre ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="actividad">Actividad</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="actividad" id="actividad" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="dimensionuno">Sucursal (Dim1)</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="dimensionuno" id="dimensionuno" class="form-control" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($dimension as $d1) { ?>
                                <option  <?php echo (!empty($tarea->dim_id) && $tarea->dim_id == $d1->dim_id) ? "selected" : ""; ?> value="<?php echo $d1->dim_id ?>"><?php echo $d1->dim_descripcion ?></option>
                            <?php } ?>
                        </select> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="dimensiondos">Area de Trabajo (Dim2)</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select  name="dimensiondos" id="dimensiondos" class="form-control" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($dimension2 as $d2) { ?>
                                <option  <?php echo (!empty($tarea->dim2_id) && $tarea->dim2_id == $d2->dim_id) ? "selected" : ""; ?> value="<?php echo $d2->dim_id ?>"><?php echo $d2->dim_descripcion ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="tipo"><span class="campoobligatorio">*</span>Tipo</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="tipo" id="tipo" class="form-control obligatorio" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($tipo as $t) { ?>
                                <option  <?php echo (!empty($tarea->tip_id) && $tarea->tip_id == $t->tip_id) ? "selected" : ""; ?> value="<?php echo $t->tip_id ?>"><?php echo $t->tip_tipo ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="norma">Artículos Norma</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <?php echo listaMultiple2("articulosnorma[]", "norma", "form-control", "norma", "nor_id", "nor_norma", null, null, null) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="fechaIncio">Fecha Incio</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="fechaIncio" id="fechaIncio" class="form-control fecha"  value="<?php echo (!empty($tarea->tar_fechaInicio)) ? $tarea->tar_fechaInicio : ""; ?>" />
                    </div> 
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="fechafinalizacion">Fecha Finalización</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="fechafinalizacion" id="fechafinalizacion" class="form-control fecha"  value="<?php echo (!empty($tarea->tar_fechaFinalizacion)) ? $tarea->tar_fechaFinalizacion : ""; ?>"/>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="costrospresupuestados">Costos Presupuestados</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="costrospresupuestados" id="costrospresupuestados" class="form-control"  value="<?php echo (!empty($tarea->tar_costopresupuestado)) ? $tarea->tar_costopresupuestado : ""; ?>"/>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="peso">Peso</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="peso" id="peso" class="form-control"  value="<?php echo (!empty($tarea->tar_peso)) ? $tarea->tar_peso : ""; ?>" />
                    </div> 
                </div>
                <div class="alert alert-info" role="alert" style='margin-top:10px;font-weight: bold;text-align: center;'>Responsable</div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="cargo">Cargo</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="cargo" id="cargo" class="form-control">
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($cargo as $c) { ?>
                                <option  <?php echo (!empty($tarea->car_id) && $tarea->car_id == $c->car_id) ? "selected" : ""; ?> value="<?php echo $c->car_id ?>"><?php echo $c->car_nombre ?></option> 
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="nombreempleado">Nombre</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="nombreempleado" id="nombreempleado" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="tareapadre">Tarea Padre</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="tareapadre" id="tareapadre" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label for="estado">Estado</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <select name="estado" id="estado" class="form-control" >
                                    <option value="">::Seleccionar::</option>
                                    <?php foreach ($estados as $e) { ?>
                                        <option <?php echo (!empty($tarea->est_id) && $tarea->est_id == $e->est_id) ? "selected" : ""; ?>  value="<?php echo $e->est_id ?>"><?php echo $e->est_nombre ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="descripcion">Descripción</label>
                        <textarea  value="<?php echo (!empty($tarea->tar_descripcion)) ? $tarea->tar_descripcion : ""; ?>" name="descripcion" id="descripcion" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <p class="alert alert-info"  style='margin-top:10px;font-weight: bold;text-align: center;'>Riesgos</p>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="clasificacionriesgo">Clasificación de riesgo</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name='clasificacionriesgo' id='clasificacionriesgo' class="form-control">
                            <option value=''>::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="tiposriesgos">Tipos de Riesgos</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name='tiposriesgos' id='tiposriesgos' class="form-control">
                            <option value=''>::Seleccionar::</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <?php if(!empty($tarea->tar_id)):?>
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>
            </div>
            <div class="tools">
                <a class="collapse" href="javascript:;" data-original-title="" title=""> </a>
                <a class="config" data-toggle="modal" href="#portlet-config" data-original-title="" title=""> </a>
                <a class="reload" href="javascript:;" data-original-title="" title=""> </a>
                <a class="remove" href="javascript:;" data-original-title="" title=""> </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="tabbable tabbable-tabdrop">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#tab1">Avance</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab2">Agragar Avance</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab3">Registros</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane active">
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
                                    <td colspan="6" style="text-align:center">Ingresar Informaciòn</td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tab2" class="tab-pane">
                        <form method="post" id="guardaravance">
                            <input type="hidden" value="<?php echo (!empty($tarea->tar_id)) ? $tarea->tar_id : ""; ?>" name="idtarea" id="interno">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                            <label for="fecha">Fecha</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                            <input type="text" name="fecha" id="fecha" class="form-control fecha avance">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                            <label for="progreso">Progreso</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                            <select name="progreso" id="progreso" class="form-control avance" style="text-align: center">
                                                <option value="">::Seleccionar::</option>
                                                <?php for ($i = 1; $i < 101; $i++) { ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i . " " . "%"; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                            <label for="horastrabajadas">Horas Trabajadas</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                            <input type="text" name="horastrabajadas" id="horastrabajadas" class="form-control avance">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                            <label for="costo">Costo</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                            <input type="text" name="costo" id="costo" class="form-control avance">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sx-12 col-sm-12">
                                            <label for="comentarios">Comentarios</label>
                                            <textarea name="comentarios" id="comentarios" class="form-control avance"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <center><h4>Notificar a:</h4></center>
                                    </div>
                                    <?php foreach ($notificacion as $n): ?>
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                                <label for="creotarea"><?php echo $n->not_notificacion ?></label>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                                <input type="checkbox" name="notificar[]" value="<?php echo $n->not_id ?>" id="creotarea" class="form-control avance">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                            </div>
                        </form>
                        <div class="row" style="text-align: center">
                            <button type="button" class="btn btn-success" id="gavance">Guardar</button>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane">

                        <table class="table table-bordered table-hover">
                            <thead>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Versión</th>
                            <th>Responsable</th>
                            <th>Tamaño</th>
                            <th>Fecha</th>
                            <th>Acción</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="7"></td>
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
    <?php endif; ?>
    <input type="hidden" id="tareid" name="tareid" />
</div>
<script>
    $('#gavance').click(function () {

        $.post(
                "<?php echo base_url("index.php/tareas/guardaravance") ?>",
                $('#guardaravance').serialize()
                ).done(function () {
            $('.avance').val("");
            $('.avance').prop("checked", false);
            alerta("verde", "Avance guardado correctamente");
        }).fail(function () {
            alerta("Error", "Error por favor comunicarse con el administrador");
        });

    });

    $(".flecha").click(function () {
        var url = "<?php echo base_url("index.php/tareas/consultaTareasFlechas") ?>";
        var idTarea = $("#tareid").val();
        var metodo = $(this).attr("metodo");
        if (metodo != "documento") {
            $.post(url, {idTarea: idTarea, metodo: metodo})
                    .done(function (msg) {
                        $("#riesgos input[type='text'],#riesgos select").val("");
                        $("#tareid").val(msg.tar_id);
                    })
                    .fail(function (msg) {
                        alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
                        $("input[type='text'], select").val();
                    })
        } else {
            window.location = "<?php echo base_url("index.php/tareas/listadotareas"); ?>";
        }
    });
    $('#guardartarea').click(function () {

        if (obligatorio("obligatorio")) {
            $.post("<?php echo base_url("index.php/tareas/guardartarea") ?>",
                    $('#f8').serialize()
                    ).done(function (msg) {
                alerta("verde", "Datos guardados correctamente");
                if($("#interno").val() == ""){
                    $('input,select,textarea').val("");
                }

            }).fail(function (msg) {
                alerta("rojo", "Error por favor comunicarse con el administrador");
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
            $.each(msg, function (key, val) {
                data += "<option value='" + val.Emp_Id + "'>" + val.Emp_Nombre + " " + val.Emp_Apellidos + "</option>"
            });
            $('#nombreempleado').append(data);
        }).fail(function (msg) {

        })
    });
</script>    