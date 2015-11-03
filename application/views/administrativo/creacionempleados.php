<!-- Colorear Menu -->
<script type="text/javascript">
        $(".menORGANIZACIÓN").addClass("active open");
        $(".subMenEMPLEADOS").addClass("active");
        $(".subMenCREACIÓN_EMPLEADO").addClass("active");
</script>
<div class="page-bar" style="background-color: transparent !important;">
    <ul class="page-breadcrumb">
        <li class="devolver">
                <i class="fa fa-home"></i>
                <a href="<?php echo base_url("index.php/presentacion/principal") ?>">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
        <li class="devolver">
            <a href="#">Organización</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Creación Empleados</a>
        </li>
    </ul>
</div>
<div class="widgetTitle" >
    <h5>
        <a href="<?php echo base_url("index.php/administrativo/creacionempleados") ?>" class="btn btn-default">NUEVO</a>CREACIÓN EMPLEADO
    </h5>
</div>
<div class='well'>
    <form method="post" id="f1">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <?php if (!empty($empleado[0]->Emp_Id)) { ?>
                    <button type="button" id="actualizar"  class="btn btn-success">Actualizar</button>   
                <?php } else { ?>
                    <!--<button type="button" id="btnRegistro" class="btn btn-info registro">Registro exámenes</button>-->
                    <button type="button" id="guardar" class="btn btn-success">Guardar</button>
                <?php } ?>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
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
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="cedula"><span class="campoobligatorio">*</span>Cédula</label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <input type="text" id="cedula" name="cedula" class="form-control obligatorio" value="<?php echo (!empty($empleado[0]->Emp_Cedula)) ? $empleado[0]->Emp_Cedula : ""; ?>" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="tipocontrato"><span class="campoobligatorio">*</span>Tipo Contrato</label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <select id="tipocontrato" name="tipocontrato" class="form-control obligatorio"  >
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($tipocontrato as $tp) { ?>
                        <option <?php echo (!empty($empleado[0]->TipCon_Id) && $empleado[0]->TipCon_Id == $tp->TipCon_Id) ? "selected" : ""; ?> value="<?php echo $tp->TipCon_Id ?>"><?php echo $tp->TipCon_Descripcion; ?></option>
                    <?php } ?>
                </select>
            </div>    
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="nombre"><span class="campoobligatorio">*</span>Nombres</label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <input type="text" id="nombre" name="nombre" class="form-control obligatorio"  value="<?php echo (!empty($empleado[0]->Emp_Nombre)) ? $empleado[0]->Emp_Nombre : ""; ?>" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="fechainiciocontrato"><span class="campoobligatorio">*</span>Fecha Inicio Contrato</label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <input type="text" name="fechainiciocontrato" id="fechainiciocontrato" class="form-control fecha obligatorio"  value="<?php echo (!empty($empleado[0]->Emp_FechaInicioContrato)) ? $empleado[0]->Emp_FechaInicioContrato : ""; ?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="apellidos"><span class="campoobligatorio">*</span>Apellidos</label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <input type="text" id="apellidos" name="apellidos" class="form-control obligatorio"  value="<?php echo (!empty($empleado[0]->Emp_Apellidos)) ? $empleado[0]->Emp_Apellidos : ""; ?>"/>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="fechafincontrato">Fecha Fin Contrato</label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <input type="text" name="fechafincontrato" id="fechafincontrato" class="form-control fecha"  value="<?php echo (!empty($empleado[0]->Emp_FechaFinContrato)) ? $empleado[0]->Emp_FechaFinContrato : ""; ?>"/>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="sexo"><span class="campoobligatorio">*</span>Genero</label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <select name="sexo" id="sexo" class="form-control obligatorio">
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($sexo as $s) { ?>
                        <option  <?php echo (!empty($empleado[0]->sex_Id) && $empleado[0]->sex_Id == $s->Sex_id) ? "selected" : ""; ?> value="<?php echo $s->Sex_id ?>"><?php echo $s->Sex_Sexo ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="planobligatoriodesalud"><span class="campoobligatorio">*</span>Plan Obligatorio de Salud</label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <input type="text" name="planobligatoriodesalud" id="planobligatoriodesalud" class="form-control obligatorio"  value="<?php echo (!empty($empleado[0]->Emp_PlanObligatorioSalud)) ? $empleado[0]->Emp_PlanObligatorioSalud : ""; ?>" />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="fechadenacimiento"><span class="campoobligatorio">*</span>Fecha Nacimiento</label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <input type="text" id="fechadenacimiento" name="fechadenacimiento" class="form-control fecha obligatorio"  value="<?php echo (!empty($empleado[0]->Emp_FechaNacimiento)) ? $empleado[0]->Emp_FechaNacimiento : ""; ?>"/>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="fechaafiliacionarl"><span class="campoobligatorio">*</span>Fecha Afiliacion ARL</label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <input type="text" id="fechaafiliacionarl" name="fechaafiliacionarl" class="form-control fecha obligatorio"  value="<?php echo (!empty($empleado[0]->Emp_FechaAfiliacionArl)) ? $empleado[0]->Emp_FechaAfiliacionArl : ""; ?>" />
            </div>    
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="estatura"><span class="campoobligatorio">*</span>Estatura</label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <input type="text" id="estatura" name="estatura" class="form-control obligatorio float"  value="<?php echo (!empty($empleado[0]->Emp_Estatura)) ? $empleado[0]->Emp_Estatura : ""; ?>"/>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="fondo">Fondo de Pensiones</label>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <input type="text" id="fondo" name="fondo" class="form-control"  value="<?php echo (!empty($empleado[0]->emp_fondo)) ? $empleado[0]->emp_fondo : ""; ?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="peso">Peso</label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <input type="text" id="peso" name="peso" class="form-control float"  value="<?php echo (!empty($empleado[0]->Emp_Peso)) ? $empleado[0]->Emp_Peso : ""; ?>" />
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <center><button type="button" id="aseguradora" class="btn btn-success" data-toggle="modal" data-target="#myModal3">Registrar seguradoras del empleado</button></center>
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="telefono">Teléfono</label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <input type="text" id="telefono" name="telefono" class="form-control number "  value="<?php echo (!empty($empleado[0]->Emp_Telefono)) ? $empleado[0]->Emp_Telefono : ""; ?>" />
            </div>     
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="direcion"><span class="campoobligatorio">*</span>Dirección</label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <input type="text" id="direcion" name="direccion" class="form-control obligatorio"  value="<?php echo (!empty($empleado[0]->Emp_Direccion)) ? $empleado[0]->Emp_Direccion : ""; ?>" />
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="contacto"><span class="campoobligatorio">*</span>Contacto</label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <input type="text" id="contacto" name="contacto" class="form-control obligatorio"  value="<?php echo (!empty($empleado[0]->Emp_contacto)) ? $empleado[0]->Emp_contacto : ""; ?>" />
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="telefonocontacto">Teléfono Contacto</label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <input type="text" id="telefonocontacto" name="telefonocontacto" class="form-control number"  value="<?php echo (!empty($empleado[0]->Emp_TelefonoContacto)) ? $empleado[0]->Emp_TelefonoContacto : ""; ?>" />
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="dimension1"><?php echo $empresa[0]->Dim_id ?></label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <select id="dimension1" name="dimension1" class="form-control">
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($dimension as $d) { ?>
                        <option  <?php echo (!empty($empleado[0]->Dim_id) && $empleado[0]->Dim_id == $d->dim_id) ? "selected" : ""; ?> value="<?php echo $d->dim_id ?>"><?php echo $d->dim_descripcion ?></option>
                    <?php } ?>
                </select>
            </div>    
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="email"><span class="campoobligatorio">*</span>Email</label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <input type="text" id="email" name="email" class="form-control obligatorio email"  value="<?php echo (!empty($empleado[0]->Emp_Email)) ? $empleado[0]->Emp_Email : ""; ?>" />
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="dimension2"><?php echo $empresa[0]->Dimdos_id ?></label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <select id="dimension2" name="dimension2" class="form-control">
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($dimension2 as $d2) { ?>
                        <option  <?php echo (!empty($empleado[0]->Dim_IdDos) && $empleado[0]->Dim_IdDos == $d2->dim_id) ? "selected" : ""; ?> value="<?php echo $d2->dim_id ?>"><?php echo $d2->dim_descripcion ?></option>
                    <?php } ?>
                </select>
            </div>    
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="estadocivil"><span class="campoobligatorio">*</span>Estado Civil</label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                <select id="estadocivil" name="estadocivil" class="form-control obligatorio">
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($estadocivil as $ec) { ?>
                        <option  <?php echo (!empty($empleado[0]->EstCiv_id) && $empleado[0]->EstCiv_id == $ec->EstCiv_id) ? "selected" : ""; ?> value="<?php echo $ec->EstCiv_id ?>"><?php echo $ec->EstCiv_Estado ?></option>
                    <?php } ?>
                </select>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="cargo"><span class="campoobligatorio">*</span>Cargo</label>
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <select id="cargo" name="cargo" class="form-control obligatorio">
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($cargo as $c) { ?>
                        <option  <?php echo (!empty($empleado[0]->Car_id) && $empleado[0]->Car_id == $c->car_id) ? "selected" : ""; ?> value="<?php echo $c->car_id ?>"><?php echo $c->car_nombre ?></option>
                    <?php } ?>
                </select>
            </div>    
        </div>
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">ASEGURADORAS</h4>
                    </div>
                    <div class="modal-body" id="incluiraseguradoras">
                        <div class="row" style="text-align:center">
                            <button type="button" id="agregaraseguradora" class="btn btn-success">Agregar</button>
                        </div>
                        <div id="agregarClones">
                            <?php
                            if (empty($aserguradorasxempleado)) {
                                ?>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <label>Tipo Aseguradora:</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <select  name="tipoaseguradora[]" class="form-control tipoaseguradora">
                                            <option value="">::Seleccionar::</option>
                                            <?php
                                            $option = "";
                                            foreach ($tipoaseguradora as $ta):
                                                $option .= "<option value='" . $ta->TipAse_Id . "'>" . $ta->TipAse_Nombre . "</option>";
                                            endforeach;
                                            echo $option;
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <label>Nombre Aseguradora:</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <input type="text" name="nombreaseguradora[]" class="form-control nombreaseguradora">
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <button type="button" class="btn btn-danger eliminaraseguradora" >X</button>
                                    </div>
                                </div>
                                <?php
                            }
                            else {
                                foreach ($aserguradorasxempleado as $as):
                                    ?>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <label>Tipo Aseguradora:</label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <select  name="tipoaseguradora[]" class="form-control tipoaseguradora">
                                                <option value="">::Seleccionar::</option>
                                                <?php
                                                $option = "";
                                                foreach ($tipoaseguradora as $ta):
                                                    $selected = (($as->tipAse_id == $ta->TipAse_Id) ? "selected" : "");
                                                    $option .= "<option value='" . $ta->TipAse_Id . "' " . $selected . " >" . $ta->TipAse_Nombre . "</option>";
                                                endforeach;
                                                echo $option;
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <label>Nombre Aseguradora:</label>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <input type="text" name="nombreaseguradora[]" class="form-control nombreaseguradora" value="<?php echo $as->ase_id ?>">
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                            <button type="button" class="btn btn-danger eliminaraseguradora" >X</button>
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="emp_id" name="emp_id"  value="<?php echo (!empty($empleado[0]->Emp_Id)) ? $empleado[0]->Emp_Id : ""; ?>" />
    </form>

    <?php if (!empty($empleado[0]->Emp_Id)) { ?>
        <div class="portlet box blue" style="margin-top: 30px;">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Registro
                </div>
                <div class="tools">
                    <button type="button" class="btn btn-default agregarcarpeta"  data-toggle="modal" data-target="#myModal">Carpeta</button>
                    <button type="button" class="btn btn-default"  data-toggle="modal" data-target="#myModal2" id="agregarregistro">Registro</button>
                </div>
            </div>
            <div class="portlet-body">
                <div class="tabbable tabbable-tabdrop">
                    <div class="tab-content">
                        <br>
                        <div class="panel-group accordion" id="accordion1">
                            <?php
                            $i = 1;
                            foreach ($registro as $id => $nombre):
                                foreach ($nombre as $nom => $num):
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_<?php echo $id; ?>" aria-expanded="false"> 
                                                    &nbsp;<i class="fa fa-folder-o carpeta"></i>     <?php echo $nom ?>
                                                </a>
                                                <i class="fa fa-edit editarcarpeta" car_id="<?php echo $id ?>"></i>
                                                <i class="fa fa-times eliminarcarpeta" car_id="<?php echo $id ?>"></i>
                                            </h4>
                                        </div>
                                        <div id="collapse_<?php echo $id; ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <table class="table table-hover table-bordered">
                                                    <thead>
                                                    <th>Nombre archivo</th>
                                                    <th>Descripción</th>
                                                    <th>Versión</th>
                                                    <th>Responsable</th>
                                                    <th>Tamaño</th>
                                                    <th>Fecha</th>
                                                    <th>Acción</th>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($num as $numero => $campos):

                                                            if (!empty($campos[1])):
                                                                ?>
                                                                <tr>
                                                                    <td> <a target="_blank" href="<?php echo base_url("/uploads/empleado/" . $empleado[0]->Emp_Id . "/" . $campos[4] . "/" . $campos[1]) ?>" title="descargar" ><?php echo $campos[1] ?> </a></td>
                                                                    <td><?php echo $campos[2] ?></td>
                                                                    <td><?php echo $campos[3] ?></td>
                                                                    <td><?php echo $campos[0] ?></td>
                                                                    <td><?php echo $campos[5] ?></td>
                                                                    <td><?php echo $campos[6] ?></td>
                                                                    <td>
                                                                        <i class="fa fa-times eliminar btn-danger" title="Eliminar" empReg_id="<?php echo $campos[4] ?>"></i>
                                                                        <i class="fa fa-pencil-square-o modificar  btn-info" title="Modificar" data-target='#myModal2' data-toggle='modal'  emp_id="<?php echo $campos[4] ?>" ></i>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            else:
                                                                ?>
                                                                <tr>
                                                                    <td colspan="7"><center><b>No hay registros</b></center></td>
                                                            </tr>    
                                                        <?php
                                                        endif;
                                                    endforeach;
                                                    ?>
                                                    </tbody>
                                                </table>
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
                    <p>   </p>
                    <p>   </p>
                    <div class="tabbable tabbable-tabdrop">
                    </div>
                </div>
            </div>

        <?php } ?>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">AGREGAR CARPETA</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="formcarpeta">
                            <input type="hidden" id="emp_id" name="emp_id"  value="<?php echo (!empty($empleado[0]->Emp_Id)) ? $empleado[0]->Emp_Id : ""; ?>" />
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="nombrecarpeta">Nombre:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="nombre" id="nombrecarpeta" name="nombrecarpeta" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="descripcioncarpeta">Descripción:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <textarea  id="descripcioncarpeta" name="descripcioncarpeta" class="form-control"></textarea>
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

        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">AGREGAR REGISTRO</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="formregistro" >
                            <input type="hidden" name="empReg_id" id="empReg_id" />
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="empReg_carpeta">Carpeta:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <select id="empReg_carpeta" name="empReg_carpeta" class="form-control">
                                        <option value="">::Seleccionar::</option>
                                        <?php foreach ($carpeta as $car): ?>
                                            <option value="<?php echo $car->empCar_id ?>"><?php echo $car->empCar_nombre ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="empReg_version">Versión:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" id="empReg_version" name="empReg_version" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="empReg_descripcion">Descripción:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <textarea  id="empReg_descripcion" name="empReg_descripcion" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="archivocarpeta">Adjuntar archivo:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="file" id="archivocarpeta" name="archivo" class="form-control">
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo $empleado[0]->Emp_Id ?>" name="Emp_Id" />

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardarRegistro">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $option = "";
    foreach ($tipoaseguradora as $ta):
        $option .= "<option value='" . $ta->TipAse_Id . "'>" . $ta->TipAse_Nombre . "</option>";
    endforeach;
    ?>
    <script>
        
        $('body').delegate(".modificarcarpeta","click",function(){
            
            $.post("<?php echo base_url("index.php/administrativo/modificarcarpeta") ?>",
                        $('#formcarpeta').serialize()
                ).done(function(msg){
                    
                    $('a[href="#collapse_'+msg.empCar_id+'"]').text(msg.empCar_nombre);
                    $('#myModal').modal("toggle");
                    alerta("verde","Se actualizaron los datos correctamente");
                }).fail(function(msg){
                    
                });
        });

        $('body').delegate(".agregarcarpeta","click",function(){
            $('#eliminarcarpeta').remove();
            $('#empCar_id').remove();
            $('#nombrecarpeta').val("");
            $('#descripcioncarpeta').val("");
            $('.modificarcarpeta').replaceWith('<button id="guardarcarpeta" class="btn btn-primary" type="button">Guardar</button>');
            
        });

        $('body').delegate(".eliminarcarpeta","click",function(){
                var empCar_id = $(this).attr("car_id");
                if(confirm("Esta seguro de eliminar la carpeta")){
                $('#empReg_carpeta option[value="'+empCar_id+'"]').remove();
                $.post("<?php echo base_url("index.php/administrativo/eliminarcarpeta") ?>",
                        {empCar_id : empCar_id}
                ).done(function(msg){
                    $('a[href="#collapse_'+empCar_id+'"]').parents('.panel-default').remove();
                    alerta("verde","Datos eliminados los datos correctamente");
                }).fail(function(msg){
                    alerta("verde","Error, por favor comunicarse con el administrador del sistema");
                });
            }
        });

        $('body').delegate(".editarcarpeta","click",function(){
            
            $.post(
                "<?php echo base_url("index.php/administrativo/cargarempleadocarpeta") ?>",
                {carpeta : $(this).attr("car_id")}
                )
                .done(function(msg){
                    $('#formcarpeta').append("<input type='hidden' value='"+msg.empCar_id+"' name='empCar_id' id='empCar_id' >");
                    $('#nombrecarpeta').val(msg.empCar_nombre);
                    $('#descripcioncarpeta').val(msg.empCar_descripcion);
                    $('#guardarcarpeta').replaceWith("<button type='button' empCar_id='"+msg.empCar_id+"' class='btn btn-primary modificarcarpeta'>Actualizar</button>");
                    $('#myModal').modal("show");
                })
                .fail(function(msg){
                    
                });
            
        });

        $('body').delegate('.accordion-toggle', "click", function () {

            if ($(this).attr('aria-expanded') == "true") {
                $(this).children('.carpeta').removeClass('fa fa-folder-open-o');
                $(this).children('.carpeta').addClass('fa fa-folder-o');
            } else {
                $(this).children('.carpeta').removeClass('fa fa-folder-o');
                $(this).children('.carpeta').addClass('fa fa-folder-open-o');
            }
        });

        $("#agregarregistro").click(function () {
            $('#empReg_id').val("");
            $('#empReg_carpeta').val("");
            $('#empReg_version').val("");
            $('#empReg_descripcion').val("");
            $('.archivo').remove();
            $('#empReg_id').val("");
        });


        $('body').delegate('.modificar', 'click', function () {
            $('#guardarRegistro').text("Actualizar");
            $.post(
                    "<?php echo base_url("index.php/administrativo/searchxid") ?>",
                    {empReg_id: $(this).attr("emp_id")}
            ).done(function (msg) {
                $('.archivo').remove()
                $('#regEmp_id').val(msg.empReg_id);
                $('#empReg_carpeta').val(msg.empReg_carpeta);
                $('#empReg_version').val(msg.empReg_version);
                $('#empReg_descripcion').val(msg.empReg_descripcion);
                $('#empReg_id').val(msg.empReg_id);
                var div = "<div class='row archivo'>\n\
                                <label class='col-lg-2 col-md-2 col-sm-2 col-xs-2' style='color:black'>Archivo:</label>\n\
                                <div class='col-lg-10 col-md-10 col-sm-10 col-xs-10'>\n\
                                <a target='_blank' href='<?php echo base_url("/uploads/empleado/") ?>/" + msg.emp_id + "/" + msg.empReg_id + "/" + msg.empReg_archivo + "' title='descargar' >" + msg.empReg_archivo + "</a>\n\
                                </div>\n\
                               </div>";
                $('#formregistro').append(div);
            }).fail(function (msg) {
                alerta("rojo", "Error, por favor comunicarse con el administrador del sistema")
            });
        });

        $("body").delegate('.eliminar', "click", function () {
            var apuntador = $(this);
            if(confirm("Esta seguro de eliminar el registro"))
            $.post(
                    "<?php echo base_url("index.php/administrativo/eliminarregistro"); ?>"
                    , {empReg_id: $(this).attr('empreg_id')}
            ).done(function (msg) {
                apuntador.parents('tr').remove();
                alerta("verde", "Registro eliminado correctamente");
            }).fail(function (msg) {
                alerta("rojo", "Error, por favor comunicarse con el administrador del sistema")
            })
        });

        $('#cedula').change(function () {
            var data = $(this);
            $.post(
                    "<?php echo base_url("index.php/administrativo/validarcedula") ?>",
                    {cedula: $(this).val()}
            ).done(function (msg) {
                if (msg == 1) {
                    data.val("");
                    data.focus();
                    alerta("amarillo", "Empleado ya existe en el sistema")
                }
            })
                    .fail(function (msg) {

                    });

        });

        $('body').delegate(".eliminaraseguradora", "click", function () {
            //        console.log($(this).parent().parent().lenght);
            //        if ($(this).parent().parent().lenght > 2) {
            $(this).parents('.row').remove();
            //        }
        });
        var option = "<?php echo (!empty($option)) ? $option : ""; ?>";

        function agregarClonAseguradora() {
            var cuerpo = "";
            cuerpo += '<div class="row">';
            //Campo Label
            cuerpo += '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">';
            cuerpo += '<label>Tipo Aseguradora:</label>';
            cuerpo += '</div>';
            //campo select
            cuerpo += '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">';
            cuerpo += '<select name="tipoaseguradora[]" class="form-control tipoaseguradora">';
            cuerpo += '<option value="">::Seleccionar::</option>' + option;
            cuerpo += '</select>'
            cuerpo += '</div>';
            //campo Label
            cuerpo += '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">';
            cuerpo += '<label>Nombre Aseguradora:</label>';
            cuerpo += '</div>';
            //campo select
            cuerpo += '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">';
            cuerpo += '<input type="text" name="nombreaseguradora[]" class="form-control nombreaseguradora">';
            cuerpo += '</div>';
            //campo eliminar
            cuerpo += '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">';
            cuerpo += '<button type="button" class="btn btn-danger eliminaraseguradora">X</button>'
            cuerpo += '</div>';
            cuerpo += '</div>';
            return cuerpo;
        }

        $('body').delegate("#agregaraseguradora", "click", function () {
            $('#incluiraseguradoras').find("#agregarClones").append(agregarClonAseguradora());
        });

        $(function () {
            //$("#actualizar").hide();
<?php if (!empty($empleado[0])) { ?>
                $("#btnRegistro").hide();
                $("#guardar").hide();
                $("#actualizar").show();
<?php } ?>
        });
        
        $('body').delegate("#guardarcarpeta","click",function(){
            $.post("<?php echo base_url("index.php/administrativo/guardarcarpeta") ?>",
                    $("#formcarpeta").serialize()
                    ).done(function (msg) {

                var option = "<option value='" + msg.empCar_id + "'>" + msg.empCar_nombre + "</option>";
                $('#empReg_carpeta').append(option);
                var acordeon = '<div class="panel panel-default" id="' + msg.empCar_id + '">\n\
                                                <div class="panel-heading">\n\
                                                    <h4 class="panel-title">\n\
                                                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_' + msg.empCar_id + '" aria-expanded="false">\n\
                                                            ' + msg.empCar_nombre + " - "+msg.empCar_descripcion + '\n\
                                                        </a>\n\
                                                            <i class="fa fa-edit editarcarpeta" car_id="'+ msg.empCar_id +'"></i>\n\
                                                            <i class="fa fa-times eliminarcarpeta" car_id="'+ msg.empCar_id +'"></i>\n\
                                                    </h4>\n\
                                                </div>\n\
                                                <div id="collapse_' + msg.empCar_id + '" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">\n\
                                                    <div class="panel-body">\n\
                                                        <table class="table table-hover table-bordered">\n\
                                                            <thead>\n\
                                                                <th>Nombre archivo</th>\n\
                                                                <th>Descripción</th>\n\
                                                                <th>Versión</th>\n\
                                                                <th>Responsable</th>\n\
                                                                <th>Tamaño</th>\n\
                                                                <th>Fecha</th>\n\
                                                                <th>Acción</th>\n\
                                                            </thead> \n\
                                                            <tbody>\n\
                                                                <tr>\n\
                                                                    <td colspan="7">\n\
                                                                        <center><b>No hay registros</b></center>\n\
                                                                    </td>\n\
                                                                </tr>\n\
                                                            </tbody>\n\
                                                        </table>\n\
                                                    </div>\n\
                                                </div>\n\
                                        </div>';
                $('#accordion1').append(acordeon);
                $("#myModal").modal("toggle");
                alerta("verde", "Datos guardados correctamente")
            })
                    .fail(function (msg) {
                        alerta("rojo", "Error en el sistema por favor comunicarse con el administrador");
                    });

        });

        $(".flecha").click(function () {
            var url = "<?php echo base_url("index.php/administrativo/consultaempleadoflechas") ?>";
            var idEmpleadoCreado = $("#emp_id").val();
            var metodo = $(this).attr("metodo");
            var activoActualizar = $("#actualizar").attr("activo");
            $("#actualizar").show();
            $("#btnRegistro").hide();
            $("#guardar").hide();
            if (metodo != "documento") {
                $.post(url, {idEmpleadoCreado: idEmpleadoCreado, metodo: metodo})
                        .done(function (msg) {
                            $("input[type='text'], select").val();
                            $("#emp_id").val(msg.Emp_Id);
                            $("#cedula").val(msg.Emp_Cedula);
                            $("#nombre").val(msg.Emp_Nombre);
                            $("#apellidos").val(msg.Emp_Apellidos);
                            $("#sexo").val(msg.sex_Id);
                            $("#fechadenacimiento").val(msg.Emp_FechaNacimiento);
                            $("#estatura").val(msg.Emp_Estatura);
                            $("#peso").val(msg.Emp_Peso);
                            $("#telefono").val(msg.Emp_Telefono);
                            $("#direcion").val(msg.Emp_Direccion);
                            $("#contacto").val(msg.Emp_contacto);
                            $("#telefonocontacto").val(msg.Emp_TelefonoContacto);
                            $("#email").val(msg.Emp_Email);
                            $("#estadocivil").val(msg.EstCiv_id);
                            $("#tipocontrato").val(msg.TipCon_Id);
                            $("#fechainiciocontrato").val(msg.Emp_FechaInicioContrato);
                            $("#fechafincontrato").val(msg.Emp_FechaFinContrato);
                            $("#planobligatoriodesalud").val(msg.Emp_PlanObligatorioSalud);
                            $("#fechaafiliacionarl").val(msg.Emp_FechaAfiliacionArl);
                            $("#fondo").val(msg.emp_fondo);
                            $("#dimension1").val(msg.Dim_id);
                            $("#dimension2").val(msg.Dim_IdDos);
                            $("#cargo").val(msg.Car_id);
                            if ($("#emp_id").val() == "") {
                                $("#actualizar").hide();
                                $("#btnRegistro").show();
                                $("#guardar").show();
                            }
                            $('#incluiraseguradoras').find("#agregarClones").html("");
                            var url2 = "<?php echo base_url("index.php/administrativo/consultaempleadoflechasaseguradora") ?>";
                            $.post(url2, {idEmpleadoCreado: msg.Emp_Id})
                                    .done(function (msg) {
                                        if (msg != " null") {
                                            $.each(msg, function (key, val) {
                                                $('#incluiraseguradoras').find("#agregarClones").append(agregarClonAseguradora());
                                                $('#incluiraseguradoras').find("#agregarClones").find(".tipoaseguradora:last").val(val.tipAse_id);
                                                $('#incluiraseguradoras').find("#agregarClones").find(".nombreaseguradora:last").html("<option value='" + val.ase_id + "'>" + val.ase_nombre + "</option>")
                                            });
                                        } else {
                                            $('#incluiraseguradoras').find("#agregarClones").append(agregarClonAseguradora());
                                        }
                                    })
                                    .fail(function () {
                                        alert("Error al traer empleado");
                                    })
                        })
                        .fail(function (msg) {
                            alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
                            $("#actualizar").hide();
                            $("#btnRegistro").show();
                            $("#guardar").show();
                        })

            } else {
                window.location = "<?php echo base_url("index.php/administrativo/listadoempleados"); ?>";
            }

        });

        $('#guardar').click(function () {
            if ((obligatorio('obligatorio') == true) && (email("email") == true))
            {
                $.post("<?php echo base_url('index.php/administrativo/guardarempleado') ?>",
                        $('#f1').serialize()
                        )
                        .done(function (msg) {
                            alerta("verde", "Guardado Correctamente");
                            if (confirm("¿Desea Guardar otro Empleado?")) {
                                $('select,input').val('');
                                $('input[type="checkbox"]').attr("checked", false)
                                $('#tipoaseguradora *').remove();
                                $("#agregarClones").html(agregarClonAseguradora());
                            } else {
                                window.location.href = '<?php echo base_url("index.php/administrativo/listadoempleados") ?>';
                            }
                        }).fail(function (msg) {
                    alerta("rojo", "Error en el sistema por favor comunicarse con el administrador");
                });
            }
        });
        $('#actualizar').click(function () {

            if (obligatorio('obligatorio') == true)
            {
                $.post("<?php echo base_url('index.php/administrativo/guardaractualizacion') ?>",
                        $('#f1').serialize()
                        )
                        .done(function (msg) {
                            alerta("verde", "Guardado Correctamente");
                        }).fail(function (msg) {
                    alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
                });
            }
        });

        //--------------------------------------------------------------------------
        //                              GUARDAR REGISTR0
        //--------------------------------------------------------------------------

        $('#guardarRegistro').click(function () {
            var file_data = $('#archivocarpeta').prop('files')[0];
            var form_data = new FormData();
            form_data.append('archivo', file_data);
            form_data.append('empReg_id', $('#empReg_id').val());
            form_data.append('empReg_carpeta', $('#empReg_carpeta').val());
            form_data.append('empReg_version', $('#empReg_version').val());
            form_data.append('empReg_descripcion', $('#empReg_descripcion').val());
            form_data.append('Emp_Id', $('#emp_id').val());
            $.ajax({
                url: '<?php echo base_url("index.php/administrativo/guardarregistroempleado") ?>',
                dataType: 'text', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (result) {
                    $('#collapse_' + $('#empReg_carpeta').val()).find('table tbody *').remove();
                    var filas = ""
//                console.log(result);
                    var result = jQuery.parseJSON(result);
                    $.each(result, function (key, val) {
                        filas += "<tr>";
                        filas += "<td><a target='_blank' href='<?php echo base_url("/uploads/empleado/") ?>/" + val.emp_id + "/" + val.empReg_id + "/" + val.empReg_archivo + "' title='descargar' >" + val.empReg_archivo + "</td>";
                        filas += "<td>" + val.empReg_descripcion + "</td>";
                        filas += "<td>" + val.empReg_version + "</td>";
                        filas += "<td>" + val.nombre + "</td>";
                        filas += "<td>" + val.empReg_tamano + "</td>";
                        filas += "<td>" + val.empgReg_fecha + "</td>";
                        filas += "<td>\n\
                                <i class='fa fa-times eliminar btn-danger' title='Eliminar' empReg_id='" + val.empReg_id + "'></i>\n\
                                <i class='fa fa-pencil-square-o modificar btn-info' title='Modificar' data-target='#myModal2' data-toggle='modal'  emp_id='" + val.empReg_id + "' ></i>\n\
                             </td>";
                        filas += "</tr>";
                    });
                    var numero = $('#empReg_carpeta').val();
                    $('#collapse_' + numero).find('table tbody').append(filas);
                    $('#myModal2').modal("toggle")
                }
            });
        });
//        $("body").on("click", "#guardarRegistro", function() {
//            $("#formregistro").submit();
//        });

    </script>    