<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>NUEVA TAREA
    </h5>
</div>
<div class='well'>
    <form method="post" id="f8">
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
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="nombre"><span class="campoobligatorio">*</span>Nombre</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="nombre" id="nombre" class="form-control obligatorio" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="plan"><span class="campoobligatorio">*</span>Plan</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="plan" id="plan" class="form-control obligatorio" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach($planes as $p){?>
                            <option value="<?php echo $p->pla_id ?>"><?php echo $p->pla_nombre ?></option>
                            <?php }?>
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
                            <?php foreach($dimension as $d1){?>
                            <option value="<?php echo $d1->dim_id  ?>"><?php echo $d1->dim_descripcion  ?></option>
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
                            <?php foreach($dimension2 as $d2){?>
                            <option value="<?php echo $d2->dim_id  ?>"><?php echo $d2->dim_descripcion  ?></option>
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
                            <?php foreach($tipo as $t ){ ?>
                            <option value="<?php echo $t->tip_id ?>"><?php echo $t->tip_tipo ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="articulosnorma">Articulos Norma</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="articulosnorma" id="articulosnorma" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="fechaIncio">Fecha Incio</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="fechaIncio" id="fechaIncio" class="form-control fecha" />
                    </div> 
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="fechafinalizacion">Fecha Finalizacion</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="fechafinalizacion" id="fechafinalizacion" class="form-control fecha" />
                    </div> 
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="costrospresupuestados">Costos Presupuestados</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="costrospresupuestados" id="costrospresupuestados" class="form-control" />
                    </div> 
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="peso">Peso</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="peso" id="peso" class="form-control" />
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
                                <option value="<?php echo $c->car_id ?>"><?php echo $c->car_nombre ?></option> 
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
                        <label for="cargo">Tarea Padre</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="cargo" id="cargo" class="form-control">
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
                                        <option value="<?php echo $e->est_id ?>"><?php echo $e->est_nombre ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label for="fechacreacion">Fecha Creación</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <input type="text" name="fechacreacion" id="fechacreacion" class="form-control fecha" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label for="fechacreacion">Fecha ultima modificación</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <input type="text" name="fechaultimamod" id="fechaultimamod" class="form-control fecha" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="10" class="form-control"></textarea>
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
        <div class="row" style="text-align:center;margin-top: 28px;">
            <center><button type="button" id="guardartarea" class="btn btn-success">Guardar</button></center>
        </div>
    </form>
</div>
<script>
    $(".flecha").click(function(){
        var url = "<?php echo base_url("index.php/administrativo/consultausuariosflechas") ?>";
        var idUsuarioCreado = $("#usuid").val();
        var metodo = $(this).attr("metodo");
        if(metodo != "documento"){
            $.post(url,{idUsuarioCreado:idUsuarioCreado,metodo:metodo})
                    .done(function(msg){
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
                        if(msg.cambiocontrasena == "1"){
                            $("#cambiocontrasena").is(":checked");
                        }
                    })
                    .fail(function(msg){
                        alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
                        $("input[type='text'], select").val();
                    })
        }else{
            window.location = "<?php echo  base_url("index.php/tareas/listadoplanes"); ?>";
        }   
        
    });
    $('#guardartarea').click(function () {

        $.post("<?php echo base_url("index.php/tareas/guardartarea") ?>",
                $('#f8').serialize()
                ).done(function (msg) {

        }).fail(function (msg) {

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