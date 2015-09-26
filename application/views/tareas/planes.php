<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>PLANES
    </h5>
</div>
<div class='well'>
    <form method="post" id="f7">
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
                    <input type="text" name="fechafin" id="fechafin" class="form-control fecha"  value="<?php echo (!empty($plan[0]->pla_fechaFin) ) ? $plan[0]->pla_fechaFin : ""; ?>"/>
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
                    <input type="text" name="norma" id="norma" class="form-control obligatorio"  value="<?php echo (!empty($plan[0]->pla_norma) ) ? $plan[0]->pla_norma : ""; ?>"/>
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
                    <textarea name="descripcion" id="descripcion" class="form-control" style="width: 556px; height: 116px;"> <?php echo (!empty($plan[0]->pla_descripcion) ) ? $plan[0]->pla_descripcion : ""; ?></textarea>
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
                    <input type="text" name="eficiencia" id="eficiencia" class="form-control"  value="<?php echo (!empty($plan[0]->pla_eficiencia) ) ? $plan[0]->pla_eficiencia : ""; ?>"/>
                </div>
            </div>
        </div>
    </form>    
    <div class="row" style="text-align: center">
        <?php if (empty($plan[0]->pla_id)) { ?>
            <button type="button" id="guardarplan" class="guardar btn btn-success">Guardar</button>
        <?php } else { ?>
            <button type="button" id="guardarplan" class="guardar btn btn-success">Guardar</button>   
        <?php } ?>
    </div>
    <hr>
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-gift"></i>
                Tab drop
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
                        <table class="table table-bordered table-hover">
                            <thead>
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
                                <tr>
                                    <td colspan="8" style="text-align:center">Ingresar Informaciòn</td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tab2" class="tab-pane">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <th>Nuevo Historial</th>
                            <th>Avance</th>
                            <th>Tipo</th>
                            <th>Nombre de la tarea</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            <th>Duración presupuestada</th>
                            <th>Responsables</th>
                            <th>Acción</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="9"></td>
                                </tr>
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
                            <th>Acción</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="7"></td>
                                </tr>
                            </tbody>
                        </table>   
                        
                    </div>
                    <div id="tab4" class="tab-pane">
                        
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
                    <div id="tab5" class="tab-pane">
                        
                    </div>
                    <div id="tab6" class="tab-pane">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <th>Nombre archivo</th>
                                <th>Descripción</th>
                                <th>Versión</th>
                                <th>Responsable</th>
                                <th>Tamaño</th>
                                <th>Fecha</th>
                                <th>Accion</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
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
    <div class="row" align="center">
        <button type="button" class="btn btn-success">Nueva tarea</button>
        <button type="button" class="btn btn-success">Nuevo registro</button>
    </div>
</div>
<script>
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

        })
    });
    $('#guardarplan').click(function () {
        if (obligatorio('obligatorio') == true) {
            $.post(
                    "<?php
        if (empty($plan[0]->pla_id))
            echo base_url('index.php/tareas/guardarplan');
        else
            echo base_url('index.php/tareas/actualizarplan');
        ?>",
                    $('#f7').serialize()
                    ).done(function (msg) {
                alerta("verde", "Datos guardados correctamente");
            }).fail(function (msg) {
                alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
            });
        }
    });
</script>