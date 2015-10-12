<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>ACTIVIDAD HIJO
    </h5>
</div>
<div class='well'>
    <form method="post" id="f6">
        <input type="hidden" value="<?php echo $plan; ?>" name="pla_id">
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
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><label for="idpadre">Id Padre</label></div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><input type="text" id="idpadre" name="idpadre" class="form-control"></div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><label for="nombre">Nombre</label></div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><input type="text" id="nombre" name="nombre" class="form-control"></div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="row">
                    <div class="form-group">
                        <label for="fechainicio">Fecha Inicio</label>
                        <input type="text" class="form-control fecha" id="fechainicio" name="fechainicio" />
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
                            <?php foreach($tipo as $t){?>
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
                        <input type="text" class="form-control number" id="costoreal" name="costoreal" />
                    </div>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" style="width: 765px; height: 209px;"></textarea>
                </div>
                <div class="form-group">
                    <label for="modoverificacion">Modo Verificación</label>
                    <textarea class="form-control" id="modoverificacion" name="modoverificacion" style="width: 757px; height: 296px;"></textarea>
                </div>
            </div>
        </div>
    </form>    
    <div class="row" style="text-align: center">
        <button type="button" id="guardar" class="btn btn-success">Guardar</button>
    </div>    
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
    $('#guardar').click(function () {
        $.post(
                "<?php echo base_url("index.php/tareas/guardaractividadhijo") ?>",
                $('#f6').serialize()
                ).done(function (msg) {
                    $('input[type="text"],select,textarea').val("");
            alerta("verde", "Datos guardados correctamente");
        }).fail(function (msg) {
            alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
        });
    });
</script>