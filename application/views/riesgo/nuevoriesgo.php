<script type="text/javascript">
    $(".menRIESGOS").addClass("active open");
    $(".subMenNUEVO_RIESGO").addClass("active");
</script>
<div class="page-bar" style="background-color: transparent !important;">
    <ul class="page-breadcrumb">
        <li class="devolver">
            <i class="fa fa-home"></i>
            <a href="<?php echo base_url("index.php/presentacion/principal") ?>">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Riesgos</a>
            <i class="fa fa-angle-right"></i>
        </li>
    </ul>
</div>
<div class="widgetTitle">
    <h5>
        <i class="glyphicon glyphicon-ok"></i>RIESGO
    </h5>
</div>
<div class='well'>
    <div class="row">
        <form method="post" id="riesgos">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <button type="button" class="btn btn-success" id="guardar">
                        <?php echo(!empty($rie_id)) ? "Actualizar" : "Guardar"; ?> 
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
            </div>
            <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6 ">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="descripcion"><span class="campoobligatorio">*</span>Descripción</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 "> 
                        <input type="text" name="descripcion" id="descripcion" class="form-control obligatorio">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="categoria"><span class="campoobligatorio">*</span>Categoría</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select name="categoria" id="categoria" class="form-control obligatorio">
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($categoria as $ca) { ?>
                                <option value="<?php echo $ca->rieCla_id ?>"><?php echo $ca->rieCla_categoria ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="tipo"><span class="campoobligatorio">*</span>Tipo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select class="form-control obligatorio" id="tipo" name="tipo" >
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="dimensionuno"><?php echo $empresa[0]->Dim_id ?></label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select type="text" name="dimensionuno" id="dimensionuno" class="form-control" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($dimension as $d1) { ?>
                                <option value="<?php echo $d1->dim_id ?>"><?php echo $d1->dim_descripcion ?></option>
                            <?php } ?>
                        </select> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="dimensiondos"><?php echo $empresa[0]->Dimdos_id ?></label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select type="text" name="dimensiondos" id="dimensiondos" class="form-control" >
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($dimension2 as $d2) { ?>
                                <option value="<?php echo $d2->dim_id ?>"><?php echo $d2->dim_descripcion ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="zona">Lugar/Zona</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <input type="text" name="zona" id="zona" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="requisito">Requisito legal asociado</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <input type="text" name="requisito" id="requisito" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="observaciones">Observaciones</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <textarea name="observaciones" id="observaciones" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="estado">Estado aceptacion del riesgo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select name="estado" id="estado" class="form-control">
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($estadoaceptacionxcolor as $ec): ?>
                                <option value="<?php echo $ec->estAce_id ?>"><?php echo $ec->estAce_estado ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="color">Color</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select name="color" id="color" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6 ">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="actividades"><span class="campoobligatorio">*</span>Actividades</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <textarea name="actividades" id="actividades" class="form-control obligatorio"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="cargos">Cargos</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 "> 
                        <?php echo listaMultiple2("cargo[]", "cargo", "form-control", "cargo", "car_id", "car_nombre", null, null, null) ?>
<!--                        <select name="cargo" id="cargo" class="form-control">
                            <option value="">::Seleccionar::</option>
                        <?php foreach ($cargo as $c) { ?>
                                    <option value="<?php echo $c->car_id ?>"><?php echo $c->car_nombre ?></option> 
                        <?php } ?>
                        </select>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="fecha">Fecha</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 "> 
                        <input type="text" name="fecha" id="fecha" class="form-control fecha">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php if (!empty($rie_id)): ?>
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
                            <a data-toggle="tab" href="#tab1">Tareas</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab2">Tareas inactivas</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab3">Avance de tareas</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab4">Gráfica de Grantt</a>
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
                                            <label for="fecha">Fecha</label>
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

                            </div>
                            <div class="row" style="text-align: center">
                                <button type="button" class="btn btn-success">Guardar</button>
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
                                <th>Nombre Archivo</th>
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
    <?php endif; ?>
    <input type="hidden" id="rieid" name="rieid" />
</div>
<script>


    $('#estado').change(function () {

        $.post(
                "<?php echo base_url("index.php/riesgo/consultaestadoxcolor") ?>",
                {estado: $(this).val()}
        ).done(function (msg) {
            $('#color *').remove();
            var option = "<option value=''>::Seleccionar::</option>"
            $.each(msg, function (key, val) {
                option += "<option value='" + val.col_id + "'>" + val.col_color + "</option>";
            })
            $('#color').append(option);
        }).fail(function (msg) {
            alerta("rojo", "Error en el sistema por favor comunicarse con el administrador del sistema");
        });

    });
    $('#categoria').change(function () {

        $.post(
                "<?php echo base_url("index.php/riesgo/consultatiporiesgo") ?>",
                {categoria: $(this).val()}
        ).done(function (msg) {
            $('#tipo *').remove();
            var option = "<option value=''>::Seleccionar::</option>"
            $.each(msg, function (key, val) {
                option += "<option value='" + val.rieClaTip_id + "'>" + val.rieClaTip_tipo + "</option>";
            })
            $('#tipo').append(option);
        }).fail(function (msg) {
            alerta("rojo", "Error en el sistema por favor comunicarse con el administrador del sistema");
        });

    });

    $(".flecha").click(function () {
        var url = "<?php echo base_url("index.php/riesgo/consultaRiesgoFlechas") ?>";
        var idRiesgo = $("#rieid").val();
        var metodo = $(this).attr("metodo");
        if (metodo != "documento") {
            $.post(url, {idRiesgo: idRiesgo, metodo: metodo})
                    .done(function (msg) {
                        $("#riesgos input[type='text'],#riesgos select").val("");
                        $("#rieid").val(msg.rie_id);
                        $("#descripcion").val(msg.rie_descripcion);
                        $("#categoria").val(msg.cat_id);
                        $("#tipo").val(msg.tip_id);
                        $("#dimensionuno").val(msg.dim1_id);
                        $("#dimensiondos").val(msg.dim2_id);
                        $("#zona").val(msg.rie_zona);
                        $("#requisito").val(msg.rie_requisito);
                        $("#observaciones").val(msg.rie_observaciones);
                        $("#estado").val(msg.est_id);
                        $("#color").val(msg.col_id);
                        $("#actividades").val(msg.act_id);
                        $("#cargos").val(msg.car_id);
                        $("#fecha").val(msg.rie_fecha);
                    })
                    .fail(function (msg) {
                        alerta("rojo", "Error en el sistema por favor comunicarse con el administrador del sistema");
                        $("input[type='text'], select").val();
                    })
        } else {
            window.location = "<?php echo base_url("index.php/riesgo/listadoriesgo"); ?>";
        }
    });
    $("#guardar").click(function () {
        if (obligatorio("obligatorio")) {
            $.post("<?php echo base_url("index.php/riesgo/guardarriesgo") ?>"
                    , $("#riesgos").serialize()
                    ).done(function (msg) {

            })
                    .fail(function (msg) {

                    });
        }
    });
</script>    