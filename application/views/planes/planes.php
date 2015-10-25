<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>PLANES
    </h5>
</div>
<div class='well'>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-resm-4 col-xs-4">
            <button type="button" id="guardarplan" class="guardar btn btn-success">
                <?php echo (!empty($plan[0]->pla_id)) ? "Actualizar" : "Guardar"; ?>
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
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <?php if (!empty($plan[0]->pla_id)) { ?>

                <form method="post" id="frmdireccionar">
                    <input type="hidden" value="<?php echo $plan[0]->pla_id ?>" name="pla_id">
                </form>
                <button type="button" class="btn btn-default direccionar" num="1">
                    Nueva tarea
                </button>
                <button  type="button" class="btn btn-default direccionar" num="2">
                    Nuevo registro
                </button>
            <?php } ?>
        </div>
    </div>
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
                    <label for="costoreal">Costo Real</label>
                    <input type="text" name="costoreal" id="costoreal" class="form-control" readonly="readonly" value="<?php echo (!empty($plan[0]->pla_costoReal) ) ? $plan[0]->pla_costoReal : ""; ?>"/>
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
                    <label for="estado"><span class="campoobligatorio">*</span>Estado</label>
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
                <div class="tabbable tabbable-tabdrop">
                    <ul class="nav nav-tabs">
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
                        <li>
                            <a data-toggle="tab" href="#tab5">Gráfica de Grantt</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab6">Registros</a>
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
                                    <?php if (empty($tareas)) { ?>
                                        <tr>
                                            <td colspan="8">
                                    <center>
                                        <b>
                                            No hay tareas asociadas al plan
                                        </b>
                                    </center>
                                    </td>
                                    </tr>
                                    <?php
                                } else {
                                    foreach ($tareas as $tar) {
                                        ?>
                                        <tr>
                                            <td><button type="button"  class="btn btn-success editarhistorial" tar_id='tarea.tar_id' data-toggle="modal" data-target="#myModal0" >Nuevo avance</button></td>
                                            <td></td>
                                            <td><?php echo $tar->tip_tipo ?></td>
                                            <td><?php echo $tar->tar_nombre ?></td>
                                            <td><?php echo $tar->tar_fechaInicio ?></td>
                                            <td><?php echo $tar->tar_fechaFinalizacion ?></td>
                                            <td><?php echo $tar->diferencia ?></td>
                                            <td><?php echo $tar->Emp_Nombre ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
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
                            <div class="portlet box blue" style="margin-top: 30px;">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>Actividades
                                    </div>
                                    <div class="tools">
                                        <button type="button" class="btn btn-default crear_padre" data-toggle="modal" data-target="#myModal"><i class="fa fa-clipboard carpeta" title='ACTIVIDAD PADRE'></i></button>
                                        <button type="button" class="btn btn-default nuevo_hijo" data-toggle="modal" data-target="#myModal8"><i class="fa fa-file-o carpeta" title='ACTIVIDAD HIJO'></i></button>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="panel-group accordion" id="accordion1">
                                        <?php
                                        $i = 1;
                                        foreach ($actividades as $id => $nom):
                                            foreach ($nom as $nombre => $num):
                                                ?>
                                                <div class="panel panel-default" id="<?php echo $id ?>">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_<?php echo $id . 'c'; ?>" aria-expanded="false"> 
                                                                <i class="fa fa-folder-o carpeta"></i>&nbsp;<?php echo $nombre ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse_<?php echo $id . 'c'; ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                        <div class="panel-body">
                                                            <table class="table table-hover table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="6">
                                                                            <span>
                                                                                <button class="btn btn-default editar_padre" actPad_id="<?php echo $id ?>" data-target="#myModal" data-toggle="modal" type="button">EDITAR ACTIVIDAD PADRE</button>
                                                                            </span>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Nombre</th>
                                                                        <th>Fecha inicio</th>
                                                                        <th>Fecha fin</th>
                                                                        <th>Presupuesto</th>
                                                                        <th>Descripción</th>
                                                                        <th>Acción</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($num as $numero => $campo): ?>
                                                                        <tr>
                                                                            <td><?php echo $campo[4] ?></td>
                                                                            <td><?php echo $campo[0] ?></td>
                                                                            <td><?php echo $campo[1] ?></td>
                                                                            <td><?php echo $campo[2] ?></td>
                                                                            <td><?php echo $campo[3] ?></td>
                                                                            <td>
                                                                                <i class="fa fa-times eliminar btn btn-danger" actHij_id="<?php echo $campo[5] ?>" title="Eliminar"></i>
                                                                                <i class="fa fa-pencil-square-o modificar btn btn-info" data-target="#myModal8" data-toggle="modal" actHij_id="<?php echo $campo[5] ?>" title="Modificar"></i>
                                                                            </td>
                                                                        </tr>   
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>

                                                            <?php
                                                            foreach ($num as $numero => $campo):
                                                                ?>

                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                $i++;
                                            endforeach;
                                        endforeach;
                                        ?>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 

                        <div id="tab5" class="tab-pane">

                        </div>
                        <div id="tab6" class="tab-pane">
                            <div class="portlet box blue" style="margin-top: 30px;">
                                <div class="portlet-title">
                                    <div class="caption">
                                        
                                    </div>
                                    <div class="tools">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal4"><i class="fa fa-folder-o carpeta"></i></button>
                                        <button type="button" class="btn btn-default" id="nuevoregistro" data-toggle="modal" data-target="#myModal15"><i class="fa fa-file-archive-o carpeta"></i></button>
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
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_<?php echo $idcar . 'r'; ?>" aria-expanded="false"> 
                                                                        <i class="fa fa-folder-o carpeta"></i>&nbsp;<?php echo $nombrecar ?>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_<?php echo $idcar . 'r'; ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                                <div class="panel-body">
                                                                    <table class="table table-hover table-bordered">
                                                                        <thead>
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
                                                                                        <i class="fa fa-times fa-2x eliminar btn btn-danger" title="Eliminar" usu_id=""></i>
                                                                                        <i class="fa fa-pencil-square-o fa-2x modificar btn btn-info" title="Modificar" usu_id="" ></i>
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
                                <input type="hidden" value="" name="actPad_id" id="actPad_id"/>
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
            <div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">NUEVO REGISTRO</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="frmagregarregistro">
                                <input type="hidden" value="<?php echo (!empty($plan[0]->pla_id)) ? $plan[0]->pla_id : ""; ?>" name="pla_id" id="pla_id"/>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <label for="idactividad">Carpeta:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <select id="carpeta" name="carpeta" class="form-control ">
                                            <option value="">::Seleccionar::</option>
                                            <?php foreach ($carpetas as $carp): ?>
                                                <option value="<?php echo $carp->regCar_id ?>"><?php echo $carp->regCar_descripcion ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <label for="version">Versión:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <input type="text" id="version" name="version" class="form-control ">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <label for="reg_descripcion">Descripción:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <textarea id="reg_descripcion" name="reg_descripcion" class="form-control "></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <label for="archivo">Adjuntar archivo:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                        <input type="file" id="archivo" name="archivo" class="form-control ">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" id="btnguardarregistro">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">NUEVA CARPETA</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="frmcarpetaregistro">
                                <input type="hidden" value="<?php echo (!empty($plan[0]->pla_id)) ? $plan[0]->pla_id : ""; ?>" name="pla_id" id="pla_id"/>
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" id="guardarcarpeta">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">AGREGAR AVANCE</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="guardaravance">
                                <input type="hidden" value="" name="idtarea" id="internotarea">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                                <label for="fecha">Fecha</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                                <input type="text" style="text-align:center" name="fecha" id="fecha" class="form-control fecha avance" value="<?php echo date("Y-m-d") ?>">
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
                                                <input style="text-align:center" type="text" name="horastrabajadas" id="horastrabajadas" class="form-control avance number">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                                <label for="costo">Costo</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                                <input type="text" style="text-align:center" name="costo" id="costo" class="form-control avance">
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-success" id="gavance">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">ACTIVIDAD HIJO</h4>
                        </div>
                        <div class="modal-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <form method="post" id="f6">
                                    <input type="hidden" value="<?php echo $plan[0]->pla_id; ?>" name="pla_id">
                                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><label for="idpadre">Id Padre</label></div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <select id="idpadre" name="idpadre" class="form-control idpadre2">
                                            <option value="">::Seleccionar::</option>
                                            <?php foreach ($actividadpadre as $ap): ?>
                                                <option value="<?php echo $ap->actPad_id ?>  "><?php echo $ap->actPad_nombre ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><label for="nombre">Nombre</label></div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><input type="text" id="nombre" name="nombre" class="form-control nombre2"></div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="fechainicio">Fecha Inicio</label>
                                                <input type="text" class="form-control fecha fechainicio2" id="fechainicio" name="fechainicio" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="fechafinalizacion">Fecha Finalización</label>
                                                <input type="text" class="form-control fecha" id="fechafinalizacion" name="fechafinalizacion" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="peso">Peso</label>
                                                <input type="text" class="form-control" id="peso" name="peso" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="riesgosancion">Riesgo Sanción</label>
                                                <input type="text" class="form-control" id="riesgosancion" name="riesgosancion" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="tipo">Tipo</label>
                                                <select class="form-control" id="tipo" name="tipo" >
                                                    <option value="">::Seleccionar::</option>
                                                    <?php foreach ($tipo as $t) { ?>
                                                        <option value="<?php echo $t->tip_id; ?>"><?php echo $t->tip_tipo; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="presupuestototal">Presupuesto Total</label>
                                                <input type="text" class="form-control number" id="presupuestototal" name="presupuestototal" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="costoreal">Costo Real</label>
                                                <input type="text" class="form-control number costoreal2" id="costoreal" name="costoreal" />
                                                <input type="hidden" name="actHij_id" id="actHij_id" class="form-control" readonly="readonly" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                        <div class="form-group">
                                            <label for="descripcion">Descripción</label>
                                            <textarea class="form-control descripcion2" id="descripcion" name="descripcion"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="modoverificacion">Modo Verificación</label>
                                            <textarea class="form-control" id="modoverificacion" name="modoverificacion"></textarea>
                                        </div>
                                    </div>
                            </div>
                            </form>  
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" id="guardar">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<script>

    $('body').delegate('.accordion-toggle', "click", function () {

            if ($(this).attr('aria-expanded') == "true") {
                $(this).children('.carpeta').removeClass('fa fa-folder-open-o');
                $(this).children('.carpeta').addClass('fa fa-folder-o');
            } else {
                $(this).children('.carpeta').removeClass('fa fa-folder-o');
                $(this).children('.carpeta').addClass('fa fa-folder-open-o');
            }
        });

    $('#guardarcarpeta').click(function() {
        if (obligatorio("carbligatorio")) {
            $.post("<?php echo base_url("index.php/planes/guardarcarpetaregistro") ?>",
                    $('#frmcarpetaregistro').serialize()
                    ).done(function(msg) {
                var option = "<option value='" + msg.uno + "'>" + msg.dos + "</option>"
                var contenido = "<table class='table table-hover table-bordered'>\n\
                                        <thead>\n\
                                            <th>Nombre de archivo</th>\n\
                                            <th>Descripción</th>\n\
                                            <th>Versión</th>\n\
                                            <th>Responsable</th>\n\
                                            <th>Tamaño</th>\n\
                                            <th>Fecha</th>\n\
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
                agregarregistro('accordion5', msg, contenido, 'r');
                $('.carbligatorio').val("");
                $('#myModal4').modal("toggle")
                alerta("verde", "Carpeta agregada con exito")
            }).fail(function(msg) {
                alerta("rojo", "ha ocurrido un error por favor cumunicarse con el administrador del sistema")
            });
        }

    });
    $('.direccionar').click(function() {

        if ($(this).attr('num') == 1)
            $('#frmdireccionar').attr("action", "<?php echo base_url("index.php/tareas/nuevatarea") ?>");
        if ($(this).attr('num') == 2)
            $('#frmdireccionar').attr("action", "<?php echo base_url("index.php/tareas/registro") ?>");
        $('#frmdireccionar').submit();
    });
    $('body').delegate(".editarhistorial", "click", function() {
        $('#internotarea').val($(this).attr('tar_id'));
    });
    jQuery(document).ready(function() {
        TableAjax.init();
    });
    $('#guardar').click(function() {
        $.post(
                "<?php echo base_url("index.php/planes/guardaractividadhijo") ?>",
                $('#f6').serialize()
                ).done(function(msg) {
            var body = "";
            var id = "";
            $.each(msg, function(key, val) {
                id = val.actHij_padreid;
                body += "<tr>";
                body += "<td>" + val.actHij_nombre + "</td>";
                body += "<td>" + val.actHij_fechaInicio + "</td>";
                body += "<td>" + val.actHij_fechaFinalizacion + "</td>";
                body += "<td>" + val.actHij_presupuestoTotal + "</td>";
                body += "<td>" + val.actHij_descripcion + "</td>";
                body += "<td>" +
                        '<i class="fa fa-times eliminar btn btn-danger" title="Eliminar" acthij_id="' + val.actHij_id + '"></i><i class="fa fa-pencil-square-o modificar btn btn-info" title="Modificar" acthij_id="' + val.actHij_id + '" data-toggle="modal" data-target="#myModal8"></i>'
                        + "</td>";
                body += "</tr>";
            });
            $('#' + id).find('table tbody *').remove();
            $('#' + id).find('table tbody').append(body);
            $('#myModal8').modal("toggle")
            $('#myModal8').find('input[type="text"],select,textarea').val("");
            alerta("verde", "Datos guardados correctamente");
        }).fail(function(msg) {
            alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
        });
    });
    var TableAjax = function() {

        var initPickers = function() {
            //init date pickers
            $('.date-picker').datepicker({
                rtl: Metronic.isRTL(),
                autoclose: true
            });
        }

        var handleRecords = function() {

            var grid = new Datatable();
            grid.init({
                src: $("#datatable_ajax2"),
                onSuccess: function(grid) {
                    // execute some code after table records loaded
                },
                onError: function(grid) {
                    // execute some code on network or other general error  
                },
                onDataLoad: function(grid) {
                    // execute some code on ajax data load
                },
                loadingMessage: 'Cargando...',
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
            grid.getTableWrapper().on('click', '.table-group-action-submit', function(e) {
                e.preventDefault();
                grid.setAjaxParam("xyz", "1");
                var action = $(".table-group-action-input", grid.getTableWrapper());
                if (action.val() != "" && grid.getSelectedRowsCount() > 0) {
                    grid.setAjaxParam("xyz", "group_action");
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
            init: function() {

                initPickers();
                handleRecords();
            }

        };
    }();
    $('#gavance').click(function() {

        $.post(
                "<?php echo base_url("index.php/tareas/guardaravance") ?>",
                $('#guardaravance').serialize()
                ).done(function() {
            $('.avance').val("");
            $('.avance').prop("checked", false);
            $('#myModal0').modal("toggle")
            $('#fecha').val("<?php echo date("Y-m-d") ?>");
            alerta("verde", "Avance guardado correctamente");
        }).fail(function() {
            alerta("Error", "Error por favor comunicarse con el administrador");
        });
    });
    $('#guardaractividadpadre').click(function() {
        numero = $('#accordion1').last('div').attr("id");
        if (obligatorio('acobligatorio')) {

            $.post("<?php echo base_url("index.php/planes/guardaractividadpadre") ?>",
                    $('#formactividadpadre').serialize()
                    )
                    .done(function(msg) {
                        $('#myModal').modal("toggle")
                        if ($('#actPad_id').val() != '') {
//                            console.log($('a[href="#collapse_'+$('#actPad_id').val()+'c"]').text());
                            $('a[href="#collapse_' + $('#actPad_id').val() + 'c"]').text(msg.dos)
                            alerta('verde', 'Datos Actualizados');
                            return false
                        }
                        $('.acobligatorio').val('');
                        var option = "<option value='" + msg.uno + "'>" + msg.dos + "</option>";
                        $('#idpadre').append(option);
                        var contenido = '<table class="table table-hover table-bordered">\n\
                                                        <thead>\n\
                                                            <th>Nombre</th>\n\
                                                            <th>Fecha inicio</th>\n\
                                                            <th>Fecha fin</th>\n\
                                                            <th>Presupuesto</th>\n\
                                                            <th>Descripción</th>\n\
                                                        </thead> \n\
                                                        <tbody>\n\
                                                            <tr>\n\
                                                                <td colspan="5">\n\
                                                                    <center><b>Agregar Actividad Hijo</b></center>\n\
                                                                </td>\n\
                                                            </tr>\n\
                                                        </tbody>\n\
                                                    </table>';
                        agregarregistro('accordion1', msg, contenido, 'c');
                        $('#myModal').modal("toggle")
                        alerta("verde", "Actividad padre guardada con exito");
                    })
                    .fail(function() {
                        alerta("error", "Error por favor comunicarse con el administrador del sistema");
                    })
        }

    });
    function agregarregistro(tabla, msg, contenido, destino) {
        var acordeon = '<div class="panel panel-default" id="' + msg.uno + '">\n\
                                            <div class="panel-heading">\n\
                                                <h4 class="panel-title">\n\
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_' + msg.dos + destino + '" aria-expanded="false">\n\
                                                        ' + msg.dos + '\n\
                                                    </a>\n\
                                                </h4>\n\
                                            </div>\n\
                                            <div id="collapse_' + msg.dos + destino + '" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">\n\
                                                <div class="panel-body">\n\
                                                    ' + contenido + '\n\
                                                </div>\n\
                                            </div>\n\
                                    </div>';
        $('#' + tabla).append(acordeon);
    }

    $(".flecha").click(function() {
        var url = "<?php echo base_url("index.php/administrativo/consultausuariosflechas") ?>";
        var idUsuarioCreado = $("#usuid").val();
        var metodo = $(this).attr("metodo");
        if (metodo != "documento") {
            $.post(url, {idUsuarioCreado: idUsuarioCreado, metodo: metodo})
                    .done(function(msg) {
                        $("input[type='text'],select").val("");
                        $("#usuid").val(msg.usu_id);
                        $("#cedula").val(msg.usu_cedula);
                        $("#nombres").val(msg.usu_nombre);
                        $("#apellidos").val(msg.usu_apellido);
                        $("#usuario").val(msg.usu_usuario);
                        $("#contrasena").val(msg.usu_contrasena);
                        $("#email").val(msg.usu_email);
                        $("#genero").val(msg.sex_id);
                        $("#estado").val(msg.est_id); //estado
                        $("#cargo").val(msg.car_id); //cargo
                        $("#empleado").val(msg.emp_id); //empleado
                        if (msg.cambiocontrasena == "1") {
                            $("#cambiocontrasena").is(":checked");
                        }
                    })
                    .fail(function(msg) {
                        alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
                        $("input[type='text'], select").val();
                    })
        } else {
            window.location = "<?php echo base_url("index.php/planes/listadoplanes"); ?>";
        }

    });
    $('#cargo').change(function() {

        $.post(
                "<?php echo base_url("index.php/administrativo/consultausuarioscargo") ?>",
                {
                    cargo: $(this).val()
                }
        ).done(function(msg) {
            var data = "";
            $('#empleado *').remove();
            $.each(msg, function(key, val) {
                data += "<option value='" + val.Emp_Id + "'>" + val.Emp_Nombre + " " + val.Emp_Apellidos + "</option>"
            });
            $('#empleado').append(data);
        }).fail(function(msg) {

        });
    });
    $('#guardarplan').click(function() {
        if (obligatorio('obligatorio') == true) {
            $.post(
                    "<?php
    echo (empty($plan[0]->pla_id)) ? base_url('index.php/planes/guardarplan') : base_url('index.php/tareas/actualizarplan');
    ?>",
                    $('#f7').serialize()
                    ).done(function(msg) {
                if ($(this).text() == "Actualizar") {

                } else {
                    $('input,select,textarea').val("");
                }
                alerta("verde", "Datos guardados correctamente");
            }).fail(function(msg) {
                alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
            });
        }
    });
    $('#btnguardarregistro').click(function() {
        var file_data = $('#archivo').prop('files')[0];
        var form_data = new FormData();
        form_data.append('archivo', file_data);
        form_data.append('pla_id', $('#pla_id').val());
        form_data.append('regCar_id', $('#carpeta').val());
        form_data.append('reg_version', $('#version').val());
        form_data.append('reg_descripcion', $('#reg_descripcion').val());
        $.ajax({
            url: '<?php echo base_url("index.php/planes/guardarregistroempleado") ?>',
            dataType: 'text', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(result) {
                $('#carpeta').val('');
                $('#version').val('');
                $('#reg_descripcion').val('');
                $('#archivo').val('');
                $("#myModal15").modal("toggle")

                alerta('verde', 'Registro guardado con exito.');
            }
        });
    })
    $('.editar_padre').click(function() {
        var j = $(this).attr('actPad_id')
        $('#actPad_id').val(j);
        var url = '<?php echo base_url("index.php/tareas/consultar_actividad_padre") ?>';
        $.post(url, {actPad_id: $(this).attr('actPad_id')})
                .done(function(msg) {
                    $('#idactividad').val(msg.actPad_nombre);
                    $('#nombreactividad').val(msg.actPad_codigo);
//                    alerta('verde','Registro actualizado con exito.')
                })
                .fail(function() {
                    alerta('rojo', 'Error al guardar');
                })
    })
    $('.crear_padre').click(function() {
        $('#actPad_id').val('');
        $('#idactividad').val('');
        $('#nombreactividad').val('');
    })
    $('body').delegate('.eliminar', 'click', function() {
        if ($(this).attr('acthij_id') == '')
            return false;
        var r = confirm('Desea eliminar el registro')
        if (r == false) {
            return false;
        }
        $(this).parent().parent().remove();
        var url = '<?php echo base_url("index.php/tareas/eliminar_actividad_hijo") ?>';
        $.post(url, {actHij_id: $(this).attr('actHij_id')})
                .done(function() {

                    alerta('verde', 'Eliminado con exito')
                }).fail(function() {
//            alerta('rojo', 'Error al Eliminar')
        })
    });
    $('body').delegate('.modificar', 'click', function() {
        var acthij_id = $(this).attr('acthij_id');
        if (acthij_id == "")
            return false;
        var url = '<?php echo base_url("index.php/tareas/editar_actividad_hijo") ?>';
        $.post(url, {acthij_id: acthij_id})
                .done(function(msg) {
                    $('.nombre2').val(msg.actHij_nombre)
                    $('.idpadre2').val(msg.actHij_padreid)
                    $('.fechainicio2').val(msg.actHij_fechaInicio)
                    $('.descripcion2').val(msg.actHij_descripcion)
                    $('#fechafinalizacion').val(msg.actHij_fechaFinalizacion)
                    $('#modoverificacion').val(msg.actHij_modoVerificacion)
                    $('#peso').val(msg.actHij_peso)
                    $('#riesgosancion').val(msg.actHij_riesgoSancion)
                    $('#tipo').val(msg.tip_id)
                    $('#presupuestototal').val(msg.actHij_presupuestoTotal)
                    $('.costoreal2').val(msg.actHij_costoReal)
                    $('#actHij_id').val(msg.actHij_id)
                })
                .fail(function() {
                    alerta('rojo', 'Error al consultar')
                })

    })
    $('.nuevo_hijo').click(function() {
        $('#actHij_id').val('')
    })
</script>