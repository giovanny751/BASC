<div class="widgetTitle">
    <h5>
        <i class="glyphicon glyphicon-ok"></i>CREACIÓN INDICADOR
    </h5>
</div>
<div class='well'>
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
        <form method="post" id="indicador">
            <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6 ">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="indicador"><span class="campoobligatorio">*</span>Indicador</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">    
                        <input type="text" name="indicador" id="indicador" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="tipo">Tipo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">       
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="mide"><span class="campoobligatorio">*</span>Que Mide</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <textarea name="mide" id="mide" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="dimensionuno">Dimensión 1</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 "> 
                        <select name="dimensionuno" id="dimensionuno" class="form-control" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($dimension as $d1) { ?>
                                <option value="<?php echo $d1->dim_id ?>"><?php echo $d1->dim_descripcion ?></option>
                            <?php } ?>
                        </select> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="dimensiondos">Dimensión 2</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <select  name="dimensiondos" id="dimensiondos" class="form-control" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($dimension2 as $d2) { ?>
                                <option value="<?php echo $d2->dim_id ?>"><?php echo $d2->dim_descripcion ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="frecuencia"><span class="campoobligatorio">*</span>Frecuencia</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <input type="text" name="frecuencia" id="frecuencia" class="form-control">
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="cargo">Cargo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <select name="cargo" id="cargo" class="form-control">
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($cargo as $c) { ?>
                                <option value="<?php echo $c->car_id ?>"><?php echo $c->car_nombre ?></option> 
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="cargo">Empleado</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <select name="nombreempleado" id="nombreempleado" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="minimo">Valor mínimo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <input type="text" name="minimo" id="minimo" class="form-control">
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="maximo">Valor máximo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <input type="text" name="maximo" id="maximo" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6 ">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="estado"><span class="campoobligatorio">*</span>Estado</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <select name="estado" id="estado" class="form-control" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($estados as $e) { ?>
                                <option value="<?php echo $e->est_id ?>"><?php echo $e->est_nombre ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="objetivo"><span class="campoobligatorio">*</span>Objetivo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <textarea id="objetivo" name="objetivo" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="observaciones">Observaciones</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <textarea id="observaciones" name="observaciones" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="row" style="text-align:center">
        <button type="button" class="btn btn-success" id="guardar">Guardar</button>
    </div>
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
                            <tbody>
                                <tr>
                                    <td colspan="5" style="text-align:center">Ingresar Informaciòn</td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tab2" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                        Fecha
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                        <input type="text" name="fecha" id="fecha" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                        <label for="valor">Valor</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                        <input type="text" name="valor" id="valor" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sx-3 col-sm-3">
                                        <label for="usuario">Usuario</label>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sx-9 col-sm-9">
                                        <input type="text" name="usuario" id="usuario" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6">
                                <label for="comentarios">Comentarios</label>
                                <textarea name="comentarios" id="comentarios" class="form-control"></textarea>
                            </div>
                            <div class="row" style="text-align: center">
                                <button type="button" class="btn btn-success">Guardar</button>
                            </div>
                        </div>

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
            window.location = "<?php echo base_url("index.php/tareas/listadoplanes"); ?>";
        }

    });
    $("#guardar").click(function () {

        $.post("<?php echo base_url("index.php/indicador/guardarindicador") ?>"
                , $("#riesgos").serialize()
                ).done(function (msg) {

        })
                .fail(function (msg) {

                });

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