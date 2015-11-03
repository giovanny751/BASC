<script type="text/javascript">
    $(".menNUEVA_TAREA").addClass("active open");
    $(".subMenCREACIÓN_TAREAS").addClass("active");
</script>
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
                <button type="button" id="" class="btn btn-danger">Eliminar</button>
            </div>   
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
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
                                <option  <?php
                                echo (!empty($pla_id) && $pla_id == $p->pla_id ) ? "selected" : "";
                                echo (!empty($tarea->pla_id) && $tarea->pla_id == $p->pla_id) ? "selected" : "";
                                ?> value="<?php echo $p->pla_id ?>"><?php echo $p->pla_nombre ?></option>
                                <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="actividad">Actividad</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="actividad" id="actividad" class="form-control" >
                            <option value="">::Seleccionar::</option>
                            <?php
                            if (!empty($hijo))
                                foreach ($hijo as $h):
                                    ?>
                                    <option <?php echo ($h->actHij_id == $tarea->actHij_id) ? "selected" : ""; ?> value='<?php echo $h->actHij_id ?>'><?php echo $h->actHij_nombre ?></option>
                                    <?php
                                endforeach;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="dimensionuno">Sucursal</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="dimensionuno" id="dimensionuno" class="form-control" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($dimension as $d1) { ?>
                                <option  <?php echo ((!empty($tarea->dim_id)) && $tarea->dim_id == $d1->dim_id) ? "selected" : ""; ?> value="<?php echo $d1->dim_id ?>"><?php echo $d1->dim_descripcion ?></option>
                            <?php } ?>
                        </select> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="dimensiondos">Area de Trabajo</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select  name="dimensiondos" id="dimensiondos" class="form-control" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($dimension2 as $d2) { ?>
                                <option  <?php echo ((!empty($tarea->dim2_id)) && $tarea->dim2_id == $d2->dim_id) ? "selected" : ""; ?> value="<?php echo $d2->dim_id ?>"><?php echo $d2->dim_descripcion ?></option>
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
                        <?php
                        if (isset($tarea->emp_id)) {
                            foreach ($tarea_norma as $value) {
                                $g[] = $value->nor_id;
                            }
                        } else {
                            $g[] = 0;
                        }
                        ?>
                        <?php echo listaMultiple2("articulosnorma[]", "norma", "form-control", "norma", "nor_id", "nor_norma", $g, null, null) ?>
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
                            <?php if(!empty($empleado)){
                                foreach($empleado as $e):
                            ?>
                            <option <?php echo ($e->Emp_Id == $tarea->emp_id)?"Selected":"";?> value='<?php echo $e->Emp_Id ?>'><?php echo $e->Emp_Nombre." ".$e->Emp_Apellidos ?></option>
                            <?php        
                                endforeach;
                            }?>
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
                        <textarea name="descripcion" id="descripcion" rows="10" class="form-control"><?php echo (!empty($tarea->tar_descripcion)) ? $tarea->tar_descripcion : ""; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label for="estado">Fecha de creación</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <input type="text" value="<?php echo (!empty($tarea->tar_fechaCreacion)) ? $tarea->tar_fechaCreacion : date('Y-m-d'); ?>" name="fechacreacion" id="fechacreacion" readonly="readonly" class="form-control" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label for="fechamodificacion">Fecha de modificación</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <input type="text" value="<?php echo (!empty($tarea->tar_fechaUltimaMod)) ? $tarea->tar_fechaUltimaMod : ""; ?>" name="fechamodificacion" id="fechamodificacion" readonly="readonly" class="form-control" >
                            </div>
                        </div>
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
                            <?php foreach ($categoria as $ca) { ?>
                                <option value="<?php echo $ca->rieCla_id ?>"><?php echo $ca->rieCla_categoria ?></option>
                            <?php } ?>
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
    <?php if (!empty($tarea->tar_id)): ?>
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>AVANCES
                </div>
                <div class="tools">
                    <!--                    <a class="collapse" href="javascript:;" data-original-title="" title=""> </a>
                                        <a class="config" data-toggle="modal" href="#portlet-config" data-original-title="" title=""> </a>
                                        <a class="reload" href="javascript:;" data-original-title="" title=""> </a>
                                        <a class="remove" href="javascript:;" data-original-title="" title=""> </a>-->
                </div>
            </div>
            <div class="portlet-body">
                <div class="tabbable tabbable-tabdrop">
                    <ul class="nav nav-tabs">
                        <li <?php  echo (empty($avance))?"class='active'":""; ?>>
                            <a data-toggle="tab" href="#tab1">Avance</a>
                        </li>
                        <li <?php  echo (!empty($avance))?"class='active'":""; ?>>
                            <a data-toggle="tab" href="#tab2">Agragar Avance</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab3">Registros</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane <?php  echo (empty($avance))?"active":""; ?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet">
                                        <div class="portlet-body">
                                            <div class="table-container">
                                                <table  class="table table-striped table-bordered table-hover" id="datatable_ajax1">
                                                    <thead>
                                                    <thead style="background-color: blue;color: white;">
                                                    <th>Editar</th>
                                                    <th>Fecha</th>
                                                    <th>Resumen</th>
                                                    <th>Usuario</th>
                                                    <th>Horas</th>
                                                    <th>Costo</th>
                                                    <th>Comentarios</th>
                                                    </thead>
                                                    <tbody class="datatable_ajax12">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: life time stats -->
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-pane <?php  echo (!empty($avance))?"active":""; ?>">
                            <form method="post" id="guardaravance">
                                <input type="hidden" value="<?php echo (!empty($tarea->tar_id)) ? $tarea->tar_id : ""; ?>" name="idtarea" id="interno">
                                <input type="hidden" value="<?php echo (!empty($avance[0]->avaTar_id))?$avance[0]->avaTar_id:"";   ?>" name="avaTar_id" id="avaTar_id">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                                <label for="fecha">Fecha</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                                
                                                <input value="<?php echo (!empty($avance[0]->avaTar_fecha))?$avance[0]->avaTar_fecha:"";   ?>"  type="text" style="text-align:center" name="fecha" id="fecha" class="form-control fecha avance">
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
                                                    <option <?php echo ((!empty($avance[0]->avaTar_progreso)) && ($avance[0]->avaTar_progreso == $i))?"selected":"";  ?> value="<?php echo $i; ?>"><?php echo $i . " " . "%"; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                                <label for="horastrabajadas">Horas Trabajadas</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                                <input value="<?php echo (!empty($avance[0]->avaTar_horasTrabajadas))?$avance[0]->avaTar_horasTrabajadas:"";?>" style="text-align:center" type="text" name="horastrabajadas" id="horastrabajadas" class="form-control avance number">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                                <label for="costo">Costo</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                                <input value="<?php echo (!empty($avance[0]->avaTar_costo))?$avance[0]->avaTar_costo:""; ?>" type="text" style="text-align:center" name="costo" id="costo" class="form-control avance">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sx-12 col-sm-12">
                                                <label for="comentarios">Comentarios</label>
                                                <textarea  name="comentarios" id="comentarios" class="form-control avance"><?php echo (!empty($avance[0]->avaTar_comentarios))?$avance[0]->avaTar_comentarios:""; ?></textarea>
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
                            <div class="portlet box blue" style="margin-top: 30px;">
                                <div class="portlet-title">
                                    <div class="caption">

                                    </div>
                                    <div class="tools">                                        
                                        <i class=" btn btn-default fa fa-folder-o carpeta" data-toggle="modal" data-target="#modalCarpeta" ></i>
                                        <i class="fa fa-file-archive-o  btn btn-default"  id="nuevoregistro" data-toggle="modal" data-target="#myModal"></i>
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
                <p>   </p>
                <p>   </p>
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
                            <input type="hidden" value="<?php echo $tarea->tar_id; ?>" name="tar_id" id="tar_id_carRegistro"/>
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
                                            <option value="<?php echo $carp->tarCar_id ?>"><?php echo $carp->tarCar_nombre ?></option>
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
    <input type="hidden" id="tareid" name="tareid" />



</div> 
<div id='planes'></div>
<script>
    
    $('body').delegate(".eliminarregistro","click",function(){
        var puntero = $(this).attr("car_id");
       $.post(
               "<?php echo base_url("index.php/tareas/eliminarregistrocarpeta") ?>",
                {carpeta : puntero}
                )
                .done(function(msg){
                    $("#"+puntero).remove();
                    alerta("verde","Registro eliminado correctamente");
                }) 
                .fail(function(msg){
                    alerta("rojo","Error, por favor comunicarse con el administrador del sistema")
                }) 
        
    });
    
    $('body').delegate(".carpeta","click",function(){
        $('#nombrecarpeta').val("");
        $('#descripcioncarpeta').val("");
        $('#tarCar_id').remove();
        $('#actualizar').text("Guardar").attr("id","guardarcarpeta").removeAttr("car_id");
    });
    
    $("body").delegate("#actualizar","click",function(){
        
        $.post(
                "<?php echo base_url("index.php/tareas/actualizarcarpeta") ?>",
                $('#frmcarpetaregistro').serialize()
                ).done(function(msg){
                    $("a[href='#collapse_"+msg.uno+"r']").text(msg.dos+" - "+msg.tres);
                }).fail(function(msg){
                    alerta("rojo","Error, por favor comunicarse con el administrador del sistema");
                });
        
    });
    
    $('body').delegate(".editarcarpeta","click",function(){
        
        $.post(
                "<?php echo base_url("index.php/tareas/consultacarpeta")?>",
                {carpeta : $(this).attr("car_id")}
                ).done(function(msg){
                    $('#nombrecarpeta').val(msg.dos);
                    $('#descripcioncarpeta').val(msg.tres);
                    $('#frmcarpetaregistro').append("<input type='hidden' value='"+msg.uno+"' name='tarCar_id' id='tarCar_id'>");
                    $('#guardarcarpeta').text("Actualizar").attr("id","actualizar").attr("car_id",msg.uno);
                    $("#modalCarpeta").modal("show");
                }).fail(function(){
                    alerta("Error, por favor comunicarse con el administrador del sistema")
                });
        
    });
    
    $('document').ready(function () {
        jQuery(document).ready(function () {
            TableAjax.init();

        });

        $('#clasificacionriesgo').change(function () {

            $.post(
                    "<?php echo base_url("index.php/riesgo/consultatiporiesgoxclasificacion") ?>",
                    {categoria: $(this).val()}
            )
                    .done(function (msg) {
                        $('#tiposriesgos *').remove();
                        var option = "<option value=''>::Seleccionar::</option>";
                        $.each(msg, function (key, val) {
                            option += "<option value='" + val.rieClaTip_id + "'>" + val.rieClaTip_tipo + "</option>";
                        });
                        $('#tiposriesgos').append(option);
                    }).fail(function (msg) {
                alerta("rojo", "fallo al traer los tipos de riesgo");
            });
        });
    });

    function tabla() {
        var url = '<?php echo base_url("index.php/tareas/listadoavance2") ?>';
        var tar_id = $('#interno').val();
        $.post(url, {tar_id: tar_id})
                .done(function (msg) {
                    $('.datatable_ajax12').html('');
                    var html = "";
                    $.each(msg, function (key, val) {
                        html += "<tr>"
                                + "<td>"
                                + "<a href='javascript:' class='avances_ fa fa-pencil-square-o fa-2x btn btn-info' avaTar_id='" + val.avaTar_id + "' ></a>"
                                + "<i class='fa fa-times btn btn-danger eliminaravance'  avaTar_id='" + val.avaTar_id + "'></i></td>"
                                + "<td>" + val.avaTar_fecha + "</td>"
                                + "<td>" + val.tar_nombre + "</td>"
                                + "<td>" + val.nombre + "</td>"
                                + "<td>" + val.avaTar_horasTrabajadas + "</td>"
                                + "<td>" + val.avaTar_costo + "</td>"
                                + "<td>" + val.avaTar_comentarios + "</td>"
                                + "</tr>";
                    });
                    $('.datatable_ajax12').html(html);
                })
                .fail(function () {
                    alerta("rojo","Error, comunicarse con el administrador del sistema")
                })
    }
    tabla();
    
    $('body').delegate('.eliminaravance','click',function(){
        var puntero = $(this);
        $.post(
                "<?php echo base_url("index.php/tareas/eliminaravance") ?>",
                {avaTar_id : $(this).attr("avaTar_id")}
                ).done(function(msg){
                    puntero.parents("tr").remove();
                    alerta("verde","Avance eliminado correctamente")
                }).fail(function(){
                    alerta("rojo","Error, Comunicarse con el administrador del sistema");
                })
        
    });

    $('document').ready(function () {

        $('#plan').change(function () {
            var plan = $(this).val();
            $.post(
                    "<?php echo base_url("index.php/tareas/consultaractividadpadre") ?>",
                    {plan: plan}
            ).done(function (msg) {
                $('#actividad *').remove();
                var option = "<option value=''>::Seleccionar::</option>";
                $.each(msg, function (key, val) {
                    option += "<option value='" + val.actPad_id + "'>" + val.actPad_nombre + " - " + val.actPad_codigo + "</option>";
                })
                $('#actividad').append(option);
                $('#actividad').val('<?php echo (isset($tarea->act_id) ? $tarea->act_id : '') ?>');
                $('#dimensionuno').val('<?php echo (isset($tarea->dim2_id) ? $tarea->dim2_id : '') ?>');
                $('#dimensiondos').val('<?php echo (isset($tarea->dim_id) ? $tarea->dim_id : '') ?>');

                //alerta("verde", "Actividades padres cargadas correctamente");
            }).fail(function () {
                alerta("rojo", "Error por favor comunicarse con el administrador");
            });
        });
        $('#cargo').change(function () {
            $.post(
                    "<?php echo base_url("index.php/administrativo/consultausuarioscargo") ?>",
                    {
                        cargo: $(this).val()
                    }
            ).done(function (msg) {
                var data = "<option value=''>::Seleccionar::</option>";
                $('#nombreempleado *').remove();
                $.each(msg, function (key, val) {
                    data += "<option value='" + val.Emp_Id + "'>" + val.Emp_Nombre + " " + val.Emp_Apellidos + "</option>"
                });
                $('#nombreempleado').append(data);
                $('#nombreempleado').val('<?php echo (isset($tarea->emp_id) ? $tarea->emp_id : '') ?>');
            }).fail(function (msg) {
                alerta("rojo","Error, por favor comunicarse con el administrador del sistema");
            });
        });
    });
    $('#gavance').click(function () {
        $.post(
                "<?php echo base_url("index.php/tareas/guardaravance") ?>",
                $('#guardaravance').serialize()
                ).done(function (msg) {
            $('.avance').val("");
            $('.avance').prop("checked", false);
            alerta("verde", "Avance guardado correctamente");
            $('.datatable_ajax12 *').remove();
            tabla()
        }).fail(function () {
            alerta("Error", "Error por favor comunicarse con el administrador");
        });
    });
    function primer() {
        $.post(
                "<?php echo base_url("index.php/tareas/consulta") ?>", {idtarea: '<?php echo (!empty($tarea->tar_id)) ? $tarea->tar_id : ""; ?>'}
        ).done(function (msg) {
            $('.avance').val("");
            $('.avance').prop("checked", false);
            var html = "";
            $.each(msg, function (key, val) {
                html += "<tr>"
                        + "<td><a href='javascript:' class='avances_' avaTar_id='" + val.avaTar_id + "' >editar</a></td>"
                        + "<td>" + val.avaTar_fecha + "</td>"
                        + "<td></td>"
                        + "<td>" + val.nombre + "</td>"
                        + "<td>" + val.avaTar_horasTrabajadas + "</td>"
                        + "<td>" + val.avaTar_costo + "</td>"
                        + "<td>" + val.avaTar_comentarios + "</td>"
                        + "</tr>";
            })
            $('.datatable_ajax1').html(html)
        }).fail(function () {
            alerta("Error", "Error por favor comunicarse con el administrador");
        });
    }
//    primer();

    $('body').delegate('.avances_', 'click', function () {
        var avaTar_id = $(this).attr('avaTar_id');
        var url = "<?php echo base_url("index.php/tareas/consulta2") ?>";
        $.post(url, {avaTar_id: avaTar_id})
                .done(function (msg) {
                    $('#avaTar_id').val(msg.avaTar_id)
                    $('#fecha').val(msg.avaTar_fecha)
                    $('#progreso').val(msg.avaTar_progreso)
                    $('#horastrabajadas').val(msg.avaTar_horasTrabajadas)
                    $('#costo').val(msg.avaTar_costo)
                    $('#comentarios').val(msg.avaTar_comentarios)
                    $('.tabbable a[href="#tab2"]').tab('show')
                })
                .fail(function () {
                    alerta("Error", "Error por favor comunicarse con el administrador");
                })
    });
    $('document').ready(function(){
    $('.tabbable a[href="#tab2"]').click(function () {
        $('#avaTar_id').val('')
        $('#fecha').val('')
        $('#progreso').val('')
        $('#horastrabajadas').val('')
        $('#costo').val('')
        $('#comentarios').val('')
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
                        var form = "<form method='post' id='enviotarea' action='<?php echo base_url("index.php/planes/nuevoplan") ?>'>";
                            form += "<input type='hidden' value='"+msg.pla_id+"' name='pla_id'>";
                            form += "</form>"
                        $('#planes').append(form);
                        $('#enviotarea').submit();
                alerta("verde", "Datos guardados correctamente");
            }).fail(function (msg) {
                alerta("rojo", "Error por favor comunicarse con el administrador");
            });
        }
    });




// -----------------------------------------------------------------------------
//                          Guardar Registro
// -----------------------------------------------------------------------------

    $('body').delegate("#guardarcarpeta","click",function () {
        if (obligatorio("carbligatorio")) {
            $.post("<?php echo base_url("index.php/tareas/guardarcarpetatarea") ?>",
                    $('#frmcarpetaregistro').serialize()
                    ).done(function (msg) {
                var option = "<option value='" + msg.uno + "'>" + msg.dos + "</option>"
                var contenido = "<table class='table table-hover table-bordered'>\n\
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
                                            <td colspan='6'>\n\
                                            <center><b>No hay registros asociados</b></center>\n\
                                            </td>\n\
                                            </tr>\n\
                                        </tbody>\n\
                                </table>";
                $('#carpeta').append(option);
                agregarregistro('accordion5', msg, contenido, 'r', 'editarcarpeta');
                $('.carbligatorio').val("");
                $('#modalCarpeta').modal("hide");
                alerta("verde", "Carpeta agregada con exito");
            }).fail(function (msg) {
                alerta("rojo", "ha ocurrido un error por favor cumunicarse con el administrador del sistema");
            });
        }
    });

    $('#guardarregistro').click(function () {
        if (obligatorio("tarRegObligatorio")) {
            //Capturamos el archivo
            var file_data = $('#nombreactividad').prop('files')[0];
            //Creamos formularios archivo
            var form_data = new FormData();
            //Agremamos Datos a enviar (Archivo)
            form_data.append('archivo', file_data);
            //Agregamos Datos a enviar
            form_data.append('pla_id', $('#plan').val());
            //        form_data.append('tarea', $('#tarea').val());
            form_data.append('tarCar_id', $('#carpeta').val());
            form_data.append('tarReg_version', $('#version').val());
            form_data.append('tar_id', $('#interno').val());
            form_data.append('tarReg_descripcion', $('#descripcion_tarea').val());
            $.ajax({
                url: '<?php echo base_url("index.php/tareas/guardar_registro_tarea") ?>',
                dataType: 'text', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (result) {
                    $('#myModal').modal('hide')
                    result = jQuery.parseJSON(result);
                    var idcarpeta = $('#carpeta').val()
                    $('#collapse_' + idcarpeta + 'r').find('table tbody *').remove();
                    var filas = "";
                    $.each(result, function (key, val) {
                        filas += "<tr>";
                        filas += "<td>" + val.tarReg_archivo + "</td>";
                        filas += "<td>" + val.tarReg_descripcion + "</td>";
                        filas += "<td>" + val.tarReg_version + "</td>";
                        filas += "<td></td>";
                        filas += "<td>" + val.tarReg_tamano + "</td>";
                        filas += "<td>" + val.tarReg_fechaCreacion + "</td>";
                        filas += "<td>";
                        filas += "<i class='fa fa-times fa-2x eliminarregistro btn btn-danger' title='Eliminar' reg_id='" + val.tarReg_id + "'></i>";
                        filas += "<i class='fa fa-pencil-square-o fa-2x modificarregistro btn btn-info' title='Modificar' reg_id='" + val.tarReg_id + "'  data-target='#myModal15' data-toggle='modal'></i>";
                        filas += "</td>";
                        filas += "</tr>";
                    });
                    $('#collapse_' + idcarpeta + 'r').find('table tbody').append(filas)
                    $('#carpeta').val('');
                    $('#version').val('');
                    $('#reg_descripcion').val('');
                    $('#archivo').val('');
                    alerta('verde', 'Registro guardado con exito.');
                }
            });
        }
    })

<?php if (isset($tarea->emp_id)) { ?>
        $('#plan').trigger('change');//dim2_id
        $('#cargo').trigger('change');//dim2_id
<?php } ?>
    //--------------------------------------------------------------------------
    //                          FUNCIONES
    //--------------------------------------------------------------------------
    function agregarregistro(tabla, msg, contenido, destino, clase) {
        var acordeon = '<div class="panel panel-default" id="' + msg.uno + '">\n\
                                            <div class="panel-heading">\n\
                                                <h4 class="panel-title">\n\
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_' + msg.uno + destino + '" aria-expanded="false">\n\
                                                        <i class="fa fa-folder-o carpeta"></i> ' + msg.dos + " - " + msg.tres + '\n\
                                                    </a>\n\
                                                        <i class="fa fa-edit ' + clase + '" car_id="' + msg.uno + '"></i>\n\
                                                        <i class="fa fa-times eliminarregistro" car_id="' + msg.uno + '"></i>\n\
                                                </h4>\n\
                                            </div>\n\
                                            <div id="collapse_' + msg.uno + destino + '" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">\n\
                                                <div class="panel-body">\n\
                                                    ' + contenido + '\n\
                                                </div>\n\
                                            </div>\n\
                                    </div>';
        $('#' + tabla).append(acordeon);
    }
</script>    