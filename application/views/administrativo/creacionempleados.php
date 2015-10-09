<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>CREACIÓN EMPLEADO
    </h5>
</div>
<div class='well'>
    <form method="post" id="f1">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                <input type="text" id="estatura" name="estatura" class="form-control obligatorio"  value="<?php echo (!empty($empleado[0]->Emp_Estatura)) ? $empleado[0]->Emp_Estatura : ""; ?>"/>
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
                <input type="text" id="peso" name="peso" class="form-control"  value="<?php echo (!empty($empleado[0]->Emp_Peso)) ? $empleado[0]->Emp_Peso : ""; ?>" />
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
                <label for="dimension1">Dimensión1</label>
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
                <input type="text" id="email" name="email" class="form-control obligatorio"  value="<?php echo (!empty($empleado[0]->Emp_Email)) ? $empleado[0]->Emp_Email : ""; ?>" />
            </div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                <label for="dimension2">Dimensión2</label>
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
        <input type="hidden" id="emp_id" name="emp_id"  value="<?php echo (!empty($empleado[0]->Emp_Id)) ? $empleado[0]->Emp_Id : ""; ?>" />
    </form>
    <div class="row" style="text-align:center">
        <button type="button" id="actualizar"  class="btn btn-success">Actualizar</button>   
        <!--<button type="button" id="btnRegistro" class="btn btn-info registro">Registro exámenes</button>-->
        <button type="button" id="guardar" class="btn btn-success">Guardar</button>
    </div>
    <?php if (!empty($empleado[0]->Emp_Id)) { ?>
        <div class="portlet box blue" style="margin-top: 30px;">
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
                            <a data-toggle="tab" href="#tab1">Accidentes Reportados</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab2">Registro</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane active">
                            <div style="text-align: right"><label for="anoactual"><input type="checkbox" name="anoactual" id="anoactual">Año Actual</label></div>
                            <table class="table table-hover table-bordered">
                                <thead>
                                <th>Tipo de Lesión</th>
                                <th>Días de Incapacidad</th>
                                <th>Fecha</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></b>Resumen</b></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div id="tab2" class="tab-pane">
                            <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal">Carpeta</button>
                            <button type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal2">Registro</button>
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
                                    <tr>
                                        <td></td>
                                        <td></td>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardarcarpeta">Guardar</button>
                    </div>
                </div>
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
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <label for="tipoaseguradora">Tipo Aseguradora:</label>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                <select id="tipoaseguradora" name="tipoaseguradora[]" class="form-control">
                                    <option value="">::Seleccionar::</option>
                                    <?php 
                                    $option = "";
                                    foreach($tipoaseguradora as $ta):
                                        $option .= "<option value='".$ta->TipAse_Id."'>".$ta->TipAse_Nombre."</option>"; 
                                     endforeach;
                                    echo $option;
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <label for="nombreaseguradora">Nombre Aseguradora:</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <select id="nombreaseguradora" name="nombreaseguradora" class="form-control">
                                    <option value="">::Seleccionar::</option>
                                </select>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <button type="button" class="btn btn-danger eliminaraseguradora" >X</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
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
                        <form method="post" id="formregistro">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="nombrecarregistro">Carpeta:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="nombre" id="nombrecarregistro" id="nombrecarregistro" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="version">Versión:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="nombre" id="version" name="version" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="descripcionregistro">Descripción:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <textarea  id="descripcionregistro" name="descripcionregistro" class="form-control"></textarea>
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
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary dirigir">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<script>

    $('body').delegate(".eliminaraseguradora", "click", function () {
//        console.log($(this).parent().parent().lenght);
//        if ($(this).parent().parent().lenght > 2) {
            $(this).parents('.row').remove();
//        }
    });
    var option = "<?php echo (!empty($option))?$option:""; ?>";
    
    var filaaseguradora = '<div class="row">\n\
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">\n\
                            <label for="tipoaseguradora">Tipo Aseguradora:</label>\n\
                            </div>\n\
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">\n\
                            <select id="tipoaseguradora" name="tipoaseguradora[]" class="form-control">\n\
                            <option value="">::Seleccionar::</option>'+option+'\n\
                            </select>\n\
                            </div>\n\
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">\n\
                            <label for="nombreaseguradora">Nombre Aseguradora:</label>\n\
                            </div>\n\
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">\n\
                            <select id="nombreaseguradora" name="nombreaseguradora" class="form-control">\n\
                            <option value="">::Seleccionar::</option>\n\
                            </select>\n\
                            </div>\n\
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">\n\
                            <button type="button" class="btn btn-danger eliminaraseguradora">X</button>\n\
                            </div>\n\
                            </div>';
    $('body').delegate("#agregaraseguradora", "click", function () {

        $('#incluiraseguradoras').append(filaaseguradora);

    });

    $(function () {
        //$("#actualizar").hide();
<?php if (!empty($empleado[0])) { ?>
            $("#btnRegistro").hide();
            $("#guardar").hide();
            $("#actualizar").show();
<?php } else { ?>
            $("#actualizar").hide();
<?php } ?>
    });

    $('#guardarcarpeta').click(function () {

        $.post("<?php echo base_url("index.php/administrativo/guardarcarpeta") ?>",
                $("#formcarpeta").serialize()
                ).done(function (msg) {
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
                        console.log(msg);
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
                        $("#nombreaseguradora").val(msg.Ase_Id);
                        $("#tipoaseguradora").val(msg.TipAse_Id);
                        $("#dimension1").val(msg.Dim_id);
                        $("#dimension2").val(msg.Dim_IdDos);
                        $("#cargo").val(msg.Car_id);
                        if ($("#emp_id").val() == "") {
                            $("#actualizar").hide();
                            $("#btnRegistro").show();
                            $("#guardar").show();
                        }

                    })
                    .fail(function (msg) {
                        alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
                        $("input[type='text'], select").val();
                        $("#actualizar").hide();
                        $("#btnRegistro").show();
                        $("#guardar").show();
                    })
        } else {
            window.location = "<?php echo base_url("index.php/administrativo/listadoempleados"); ?>";
        }

    });


    $('#nombreaseguradora').change(function () {
        var id = $(this).val();
        $.post("<?php echo base_url("index.php/administrativo/consultatipoaseguradoras") ?>",
                {id: id})
                .done(function (msg) {
                    $('#tipoaseguradora *').remove();
                    var aseguradora = "";
                    $.each(msg, function (key, val) {
                        aseguradora += "<option value='" + val.TipAse_Id + "'>" + val.TipAse_Nombre + "</option>"
                    });
                    $('#tipoaseguradora').append(aseguradora);
                })
                .fail(function (msg) {

                });

    });

    $('#guardar').click(function () {

        if (obligatorio('obligatorio') == true)
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
                        } else {
                            window.location.href = '<?php echo base_url("index.php/administrativo/listadoempleados") ?>';
                        }
                    }).fail(function (msg) {
                alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
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
</script>    