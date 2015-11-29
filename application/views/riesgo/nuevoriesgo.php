<div class="row">
    <div class="col-md-6">
        <?php if(empty($rie_id)){ ?>
        <div class="circuloIcon" id="guardar" title="Guardar"><i class="fa fa-floppy-o fa-3x"></i></div>
        <?php }else{ ?>
        <div class="circuloIcon" id="actualizar" title="Actualizar "><i class="fa fa-pencil-square-o fa-3x"></i></div>
        <?php }?>
        <!--<div class="circuloIcon" ><i class="fa fa-trash-o fa-3x"></i></div>-->
        <a href="<?php echo base_url()."/index.php/planes/nuevoplan" ?>"><div class="circuloIcon" title="Nuevo Plan" ><i class="fa fa-folder-open fa-3x"></i></div></a>
    </div>
    <div class="col-md-6">
        <div id="posicionFlecha">
            <div class="flechaHeader IzquierdaDoble" metodo="flechaIzquierdaDoble"><i class="fa fa-step-backward fa-2x"></i></div>
            <div class="flechaHeader Izquierda" metodo="flechaIzquierda"><i class="fa fa-arrow-left fa-2x"></i></div>
            <div class="flechaHeader Derecha" metodo="flechaDerecha"><i class="fa fa-arrow-right fa-2x"></i></div>
            <div class="flechaHeader DerechaDoble" metodo="flechaDerechaDoble"><i class="fa fa-step-forward fa-2x"></i></div>
            <a href="<?php echo base_url('index.php/Planes/listadoplanes') ?>"><div class="flechaHeader Archivo" metodo="documento"><i class="fa fa-sticky-note fa-2x"></i></div></a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tituloCuerpo">
            <span class="txtTitulo">RIESGO</span>
        </div>
    </div>
</div>
<div class='cuerpoContenido'>
    <div class="row">
        <form method="post" id="riesgos">
            <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6 ">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="descripcion"><span class="campoobligatorio">*</span>Descripción</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 "> 
                        <input type="text" name="descripcion" id="descripcion" class="form-control obligatorio" value="<?php echo ((!empty($riesgo->rie_descripcion)) ? $riesgo->rie_descripcion:""); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="categoria"><span class="campoobligatorio">*</span>Clasificación</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select name="categoria" id="categoria" class="form-control obligatorio">
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($categoria as $ca) { ?>
                                <option <?php echo (!empty($riesgo->rieCla_id) && $riesgo->rieCla_id == $ca->rieCla_id) ? "selected" : ""; ?> value="<?php echo $ca->rieCla_id ?>"><?php echo $ca->rieCla_categoria ?></option>
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
                            <?php 
                            if (!empty($rie_id)):
                                foreach ($tipo as $t): ?>
                                    <option <?php echo ((!empty($riesgo->rieClaTip_id)) && ($t->rieClaTip_id == $riesgo->rieClaTip_id))?"selected":"" ; ?> value="<?php echo $t->rieClaTip_id ?>"><?php echo $t->rieClaTip_tipo ?></option> <?php
                                endforeach;
                            endif;
                            ?>
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
                                <option <?php echo ((!empty($riesgo->dim1_id)) && ($d1->dim_id == $riesgo->dim1_id))? "selected" : ""; ?> value="<?php echo $d1->dim_id; ?>"><?php echo $d1->dim_descripcion ; ?></option>
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
                                <option <?php echo ((!empty($riesgo->dim2_id)) && ($d2->dim_id == $riesgo->dim2_id)?"selected":"") ?> value="<?php echo $d2->dim_id ?>"><?php echo $d2->dim_descripcion ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="zona">Lugar/Zona</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <input type="text" name="zona" id="zona" class="form-control" value="<?php echo ((!empty($riesgo->rie_zona)) ? $riesgo->rie_zona:""); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="requisito">Requisito legal asociado</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <input type="text" name="requisito" id="requisito" class="form-control" value="<?php echo ((!empty($riesgo->rie_requisito)) ? $riesgo->rie_requisito:""); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="observaciones">Observaciones</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <textarea name="observaciones" id="observaciones" class="form-control"><?php echo ((!empty($riesgo->rie_observaciones)) ? $riesgo->rie_observaciones:""); ?></textarea>
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
                                <option <?php echo ((!empty($riesgo->estAce_id)) && ($ec->estAce_id == $riesgo->estAce_id)?"selected":"") ?> value="<?php echo $ec->estAce_id ?>"><?php echo $ec->estAce_estado ?></option>
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
                            <?php 
                            if (!empty($rie_id)):
                                foreach ($color as $co): ?>
                                    <option <?php echo ((!empty($riesgo->col_id)) && ($co->col_id == $riesgo->col_id)?"selected":"") ?> value="<?php echo $co->col_id ?>"><?php echo $co->col_color ?></option> <?php
                                endforeach;
                            endif;
                            ?>
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
                        <?php
                        if (!empty($rie_id)){
                            foreach ($cargoId as $value) {
                                $select[] = $value->car_id;
                            }
                        }else{
                            $select[] = 0;
                        }
                        ?>
                        <?php echo listaMultiple2("cargo[]", "cargo", "form-control", "cargo", "car_id", "car_nombre", $select, null, null) ?> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="fecha">Fecha</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 "> 
                        <input type="text" name="fecha" id="fecha" class="form-control fecha" value="<?php echo ((!empty($riesgo->rie_fecha)) ? $riesgo->rie_fecha:""); ?>">
                    </div>
                </div>
            </div>
            <input type="hidden" name="rie_id" id="rie_id" value="<?php echo (!empty($rie_id))? $rie_id:""; ?>" />
        </form>
    </div>
    <?php if (!empty($rie_id)): ?>
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                </div>
                <div class="tools">
                </div>
            </div>
            <div class="portlet-body">
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
                            <table class="tablesst" id="datatable_ajax">
                                <thead >
                                    <th>Editar</th>
                                    <th>Nuevo avance</th>
                                    <th>Avance</th>
                                    <th>Tipo</th>
                                    <th>Nombre de la Tarea</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Fin</th>
                                    <th>Duración presupuestada (Horas)</th>
                                    <th>Responsables</th>
                                </thead> 
                                <tbody>
                                    <?php if (empty($tareas)) { ?>
                                        <tr>
                                            <td colspan="9">
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
                                            <td style="text-align: center"><i class='fa fa-pencil btn btn-default editartarea' tar_id='<?php echo $tar->tar_id ?>' ></i></td>
                                            <td style="text-align: center"><i class='fa fa-bookmark-o btn btn-default nuevoavance' tar_id='<?php echo $tar->tar_id ?>' ></i></td>
                                            <td><?php echo $tar->progreso ?></td>
                                            <td><?php echo $tar->tip_tipo ?></td>
                                            <td><?php echo $tar->tar_nombre ?></td>
                                            <td><?php echo $tar->tar_fechaInicio ?></td>
                                            <td><?php echo $tar->tar_fechaFinalizacion ?></td>
                                            <td style="text-align:center"><?php echo $tar->diferencia ?></td>
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
                            <table class="tablesst" id="datatable_ajax2">
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
                                    <?php foreach ($tareasinactivas as $ti): ?>
                                        <tr>
                                            <td><i class='fa fa-pencil btn btn-default editartarea' tar_id='<?php echo $ti->tar_id ?>' ></i></td>
                                            <td></td>
                                            <td><?php echo $ti->tip_tipo ?></td>
                                            <td><?php echo $ti->tar_nombre ?></td>
                                            <td><?php echo $ti->tar_fechaInicio ?></td>
                                            <td><?php echo $ti->tar_fechaFinalizacion ?></td>
                                            <td><?php echo $ti->diferencia ?>&nbsp;Días</td>
                                            <td><?php echo $ti->nombre ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab3" class="tab-pane">

                            <table class="tablesst">
                                <thead>
                                <th>Acción</th>
                                <th>Fecha</th>
                                <th>Resumen</th>
                                <th>Usuario</th>
                                <th>Horas</th>
                                <th>Costo</th>
                                <th>Comentarios</th>
                                </thead>
                                <tbody class="datatable_ajax12">
                                    <tr>
                                        <td colspan="7"></td>
                                    </tr>
                                </tbody>
                            </table>   

                        </div>
                        <div id="tab4" class="tab-pane">

                            <table class="tablesst">
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
                            <table class="tablesst">
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
</div>
<script>
$('document').ready(function(){
        $('body').delegate(".editarhistorial","click",function(){
        
        var form = "<form method='post' id='frmFormAvance' action='<?php echo base_url("index.php/tareas/nuevatarea")?>'>";
            form += "<input type='hidden' name='avaTar_id' value='"+$(this).attr("avaTar_id")+"'>"
            form += "<input type='hidden' name='tar_id' value='"+$(this).attr("tar_id")+"'>"
            form += "</form>";
            $("body").append(form);
            $('#frmFormAvance').submit();
    })
    $('body').delegate(".eliminaravance", "click", function () {
        var puntero = $(this);
        $.post(
                "<?php echo base_url("index.php/tareas/eliminaravance") ?>",
                {avaTar_id: $(this).attr("avaTar_id")}
        ).done(function (msg) {
            puntero.parents("tr").remove();
            alerta("verde", "Avance eliminado correctamente");
        }).fail(function (msg) {
            alerta("rojo", "Error, por favor comunicarse con el administrador del sistema")
        });
    });
    
    function tabla() {
        var url = '<?php echo base_url("index.php/riesgo/listadoavance2") ?>';
        var clasificacionriesgo = $('#categoria').val();
        $.post(url, {clasificacionriesgo: clasificacionriesgo})
                .done(function (msg) {
                    $('.datatable_ajax12').html('');
                    var html = "";
                    var totalhoras = 0;
                    var costo = 0;
                    $.each(msg, function (key, val) {
                        totalhoras += parseInt(val.avaTar_horasTrabajadas);
                        costo += parseInt( val.avaTar_costo);
                        html += "<tr>"
                                + "<td>"
                                + "<a href='javascript:' class='editarhistorial fa fa-pencil-square-o fa-2x btn btn-info' avaTar_id='" + val.avaTar_id + "' tar_id='"+val.tar_id+"' ></a>"
                                + "<i class='fa fa-times btn btn-danger eliminaravance'  avaTar_id='" + val.avaTar_id + "'></i></td>"
                                + "<td>" + val.avaTar_fecha + "</td>"
                                + "<td>" + val.tar_nombre + "</td>"
                                + "<td>" + val.nombre + "</td>"
                                + "<td>" + val.avaTar_horasTrabajadas + "</td>"
                                + "<td>" + val.avaTar_costo + "</td>"
                                + "<td>" + val.avaTar_comentarios + "</td>"
                                + "</tr>";
                    });
                    html += "<tr>\n\
                                        <td colspan='4' style='text-align:right;'><b>Total</b></td>\n\
                                        <td>"+totalhoras+"</td>\n\
                                        <td>"+costo+"</td>\n\
                                        <td></td>\n\
                                        </tr>"
                    $('.datatable_ajax12').html(html);
                })
                .fail(function () {
                    alerta("rojo","Error, comunicarse con el administrador del sistema")
                })
    }
    tabla();
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
});

    
    
    

    $(".flechaHeader").click(function () {
        var url = "<?php echo base_url("index.php/riesgo/consultaRiesgoFlechas") ?>";
        var idRiesgo = $("#rie_id").val();
        var metodo = $(this).attr("metodo");
        if (metodo != "documento") {
            $.post(url, {idRiesgo: idRiesgo, metodo: metodo})
                    .done(function (msg) {
                        $("#riesgos").find("#tipo,#color").html("<option value=''>::Seleccionar::</option>");
                        $("#riesgos").find("input[type='text']").val("");
                        $("#riesgos").find("select").val("");
                        $("#rie_id").val(msg.campos.rie_id);
                        $("#descripcion").val(msg.campos.rie_descripcion);
                        $("#categoria").val(msg.campos.cat_id);
                        $("#dimensionuno").val(msg.campos.dim1_id);
                        $("#dimensiondos").val(msg.campos.dim2_id);
                        $("#zona").val(msg.campos.rie_zona);
                        $("#requisito").val(msg.campos.rie_requisito);
                        $("#observaciones").val(msg.campos.rie_observaciones);
                        $("#fecha").val(msg.campos.rie_fecha);
                        $("#estado").val(msg.campos.estAce_id);
                        var selectTipo = "";
                        $.each(msg.tipo,function(indice,val){
                            selectTipo += "<option "+((val.rieClaTip_id == msg.campos.rieClaTip_id) ? "selected" : "")+" value='"+val.rieClaTip_id+"'>"+val.rieClaTip_tipo+"</option>";
                        });
                        $("#tipo").append(selectTipo);
                        var selectColor = "";
                        $.each(msg.color,function(indice,val){
                            selectColor += "<option "+((val.col_id == msg.campos.col_id) ? "selected" : "")+" value='"+val.col_id+"'>"+val.col_color+"</option>";
                        });
                        $("#color").append(selectColor);
                        $.each(msg.cargoId,function(indice,val){
                            $('#cargo option[value=' + val.car_id + ']').attr('selected', true);
                        });
                        //pendiente actividades
                        //$("#actividades").val(msg.act_id);
                    })
                    .fail(function (msg) {
                        alerta("rojo", "Error en el sistema por favor comunicarse con el administrador del sistema");
                        $("input[type='text'], select").val();
                    })
        } else {
            window.location = "<?php echo base_url("index.php/riesgo/listadoriesgo"); ?>";
        }
    });
    $("body").on("click","#guardar",function(){
        if (obligatorio("obligatorio")) {
            $.post("<?php echo base_url("index.php/riesgo/guardarriesgo") ?>"
                    , $("#riesgos").serialize()
                    ).done(function (msg) {
                         alerta("verde", "Guardado");  
                        if(confirm("Desea guardar otro riesgo?")){
                            $("#riesgos").find("input").val("");
                            $("#riesgos").find("textarea").val("");
                            $("#riesgos").find("select").val("");
                            $("#riesgos").find("#tipo").html("<option>::Seleccionar::</option>");
                        }else{
                            window.location = "<?php echo base_url("index.php/riesgo/listadoriesgo"); ?>";
                        }
            })
                    .fail(function (msg) {
                        alerta("rojo", "Error en el sistema por favor comunicarse con el administrador del aplicativo");
                    });
        }
    });
    $("body").on("click","#actualizar",function(){
        if (obligatorio("obligatorio")) {
            $.post("<?php echo base_url("index.php/riesgo/actualizarriesgo") ?>"
                    , $("#riesgos").serialize()
                    ).done(function (msg) {
                         alerta("verde", "Actualizado");  
                    })
                    .fail(function (msg) {
                        alerta("rojo", "Error en el sistema por favor comunicarse con el administrador del aplicativo");
                    });
        }
    });
</script>    