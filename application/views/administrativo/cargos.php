<div class="row">
    <div class="circuloIcon guardarcargo" tittle="Guardar"><i class="fa fa-floppy-o fa-3x"></i></div>
<!--    <div class="circuloIcon" ><i class="fa fa-trash-o fa-3x"></i></div>
    <div class="circuloIcon" ><i class="fa fa-pencil-square-o fa-3x"></i></div>
    <div class="circuloIcon" ><i class="fa fa-folder-open fa-3x"></i></div>-->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tituloCuerpo">
            <span class="txtTitulo">
                <a href="<?php echo base_url("index.php/presentacion/principal") ?>">HOME</a>/
                <a href="<?php echo base_url("index.php/administrativo/empresa") ?>">EMPRESA</a>/
                CARGOS</span>
        </div>
    </div>
</div>
<div class='cuerpoContenido'>
<div class="row">
        <form method="post" id="formcargos" class="form-horizontal">
            <div class="form-group">
                <label for="id" class="col-md-1 control-label"><span class="campoobligatorio">*</span>Cargo</label>
                <div class="col-md-3">
                    <input type="text" class="form-control obligatorio texto" name="cargo[]" id="cargo" />
                </div>
                <label for="id" class="col-md-1 control-label">Cargo jefe directo</label>
                <div class="col-md-3">
                    <select name="cargojefe[]" id="cargojefe" class="form-control texto" >
                        <option value="">::Seleccionar::</option>
                        <?php foreach ($cargo as $d) { ?>
                            <option value="<?php echo $d->car_id ?>"><?php echo $d->car_nombre ?></option>
                        <?php } ?>
                    </select>
                </div>
                <label for="id" class="col-md-1 control-label"><span class="campoobligatorio">*</span>%Cotizacion ARL</label>
                <div class="col-md-3">
                    <input type="text" name="porcentaje[]" id="porcentaje" class="form-control obligatorio number2 texto" />
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="tablesst">
                <thead>
                <th>Cargo</th>
                <th>Cargo Jefe Directo</th>
                <th>% Cotización ARL</th>
                <th>Riesgos</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </thead>
                <tbody id="bodycargo">
                    <?php foreach ($cargo as $c) { ?>
                        <tr>
                            <td><?php echo $c->car_nombre ?></td> 
                            <td><?php echo $c->jefe ?></td> 
                            <td style="text-align:center;"><?php echo $c->car_porcentajearl ?></td> 
                            <td style="text-align: center"><i class="fa fa-child fa-2x riesgo btn btn-default" title="Riesgos" car_id="<?php echo $c->car_id ?>" data-toggle="modal" data-target="#riesgo"></i></td>
                            <td class="transparent">
                                <i class="fa fa-pencil-square-o fa-2x modificar" title="Modificar" car_id="<?php echo $c->car_id ?>"  data-toggle="modal" data-target="#myModal"></i>
                            </td> 
                            <td class="transparent">
                                <i class="fa fa-trash-o fa-2x eliminar" title="Eliminar" car_id="<?php echo $c->car_id ?>"></i>
                            </td> 
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="text-align: center;"> <div class="circuloIcon guardarmodificacion" title="Guardar"><i class="fa fa-floppy-o fa-3x"></i></div> Editar Cargo</h4>
            </div>
            <div class="modal-body form-horizontal">
                <div class="row">
                    <input type="hidden" value="" name="car_id" id="idcargo">
                    
                    <div class="form-group">
                        <label for="cargo2" class="col-sm-offset-1 col-sm-3 control-label">Cargo</label>
                        <div class="col-sm-7">
                            <input type="text"  class="form-control" id="cargo2" name="cargo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cargojefedir" class="col-sm-offset-1 col-sm-3 control-label">Cargo Jefe Directo</label>
                        <div class="col-sm-7">
                            <select name="cargojefedir" id="cargojefedir" class="form-control" >
                                <option value="">Sin Jefe</option>
                                <?php foreach ($cargo as $d) { ?>
                                    <option value="<?php echo $d->car_id ?>"><?php echo $d->car_nombre ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cotizacion" class="col-sm-offset-1 col-sm-3 control-label">Cargo</label>
                        <div class="col-sm-7">
                            <input type="text"  class="form-control" id="cotizacion" name="cotizacion">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="riesgo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">RIESGOS ASOCIADOS AL CARGO</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-offset-2 col-sx-offset-2 col-md-8 col-sx-8">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <th>RIESGOS</th>
                            </thead>
                            <tbody id="riesgocargo">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $('body').delegate(".riesgo", "click", function () {

        var car_id = $(this).attr("car_id");
        $.post(
                "<?php echo base_url("index.php/administrativo/cargoriesgo") ?>",
                {
                    car_id: car_id,
                }
        ).done(function (msg) {
            $("#riesgocargo *").remove();
            var body = "";
            $.each(msg, function (key, val) {
                body += "<tr>";
                body += "<td>" + val.rie_descripcion + "</td>";
                body += "</tr>";
            });
            $("#riesgocargo").append(body);
        }).fail(function (msg) {
            alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
        });
    });
    $('.guardarmodificacion').click(function () {
        $.post(
                "<?php echo base_url("index.php/administrativo/modificacioncargo") ?>",
                {
                    cargo: $('#cargo2').val(),
                    jefe: $('#cargojefedir').val(),
                    cotizacion: $('#cotizacion').val(),
                    car_id: $('#idcargo').val()
                }
        ).done(function (msg) {
            alerta("verde", "Modificado correctamente");
            window.location.href = '';
        }).fail(function (msg) {
            alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
        });
    });

    $('body').delegate(".modificar", "click", function () {
        $.post(
                "<?php echo base_url("index.php/administrativo/consultacargoxid") ?>",
                {
                    car_id: $(this).attr('car_id')
                }
        ).done(function (msg) {
            $('#idcargo').val(msg.car_id);
            $('#cargo2').val(msg.car_nombre);
            $('#cargojefedir').val(msg.idjefe);
            $('#cotizacion').val(msg.car_porcentajearl);
        }).fail(function (msg) {
            alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
        })

    });

    $('body').delegate(".eliminar", "click", function () {
        var fila = $(this);
        if (confirm("Esta seguro de eliminar el cargo") == true) {
            $.post("<?php echo base_url('index.php/administrativo/eliminarcargo') ?>", {id: $(this).attr('car_id')})
                    .done(function (msg) {
                        if (msg == 1) {
                            alerta("rojo", "Tiene personas a cargo");
                        } else if (msg == 2) {
                            alerta("rojo", "Existen empleados con este cargo");
                        }else {
                            $('select *').remove();
                            var select = "";
                            $.each(msg, function (key, val) {
                                select += "<option value='" + val.car_id + "'>" + val.car_nombre + "</option>";
                            });
                            $('select').append(select);
                            fila.parents('tr').remove();
                            alerta("verde", "Eliminado Correctamente");
                        }
                    })
                    .fail(function (msg) {
                        alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
                    });
        }
    });
    var agregar = '<div class="form-group" style="margin-top:10px">\n\
                <label for="cargo">Cargo</label><input type="text" name="cargo[]" id="cargo" class="form-control obligatorio" />\n\
                <label for="cargojefe">Cargo jefe directo</label><input type="text" name="cargojefe[]" id="cargojefe" class="form-control" />\n\
                <label for="porcentaje">%Cotizacion ARL</label><input type="text" name="porcentaje[]" id="porcentaje" class="form-control obligatorio number" />\n\
                <i class="fa fa-plus-circle fa-2x mas btn btn-info" style="cursor:pointer"></i>\n\
                <i class="fa fa-minus-circle fa-2x menos btn btn-danger"  style="cursor:pointer"></i>\n\
            </div>';
    $("body").delegate(".mas", "click", function () {
        $("#formcargos").append(agregar);
    });

    $('body').delegate(".menos", "click", function () {
        $(this).parents('.form-group').remove();
    });
    $('.guardarcargo').click(function () {
        if (obligatorio('obligatorio') == true) {
            $.post("<?php echo base_url('index.php/administrativo/guardarcargo') ?>",
                    $("#formcargos").serialize())
                    .done(function (msg) {
                        if (msg != 1) {
                            $('#bodycargo *').remove()
                            $('#cargojefe *').remove()
                            var body = "";
                            var option = "";
                            $.each(msg, function (key, val) {
                                body += "<tr>";
                                body += "<td>" + val.car_nombre + "</td>";
                                body += "<td>" + val.jefe + "</td>";
                                body += "<td style='text-align: center'>" + val.car_porcentajearl + "</td>";
                                body += '<td style="text-align: center"><i class="fa fa-child fa-2x riesgo btn btn-default" title="Riesgos" car_id="' + val.car_id + '" data-toggle="modal" data-target="#riesgo"></i></td>';
                                body += '<td class="transparent">\n\
                                            <i class="fa fa-pencil-square-o fa-2x modificar" title="Modificar" car_id="' + val.car_id + '"  data-toggle="modal" data-target="#myModal"></i>\n\
                                        </td>';
                                body += '<td class="transparent">\n\
                                            <i class="fa fa-trash-o fa-2x eliminar" title="Eliminar" car_id="' + val.car_id + '"></i>\n\
                                        </td>'; 
                                body += "</tr>";
                                option += "<option value='" + val.car_id + "'>" + val.car_nombre + "</option>";
                            });
                            $('#bodycargo').append(body);
                            $('#cargojefe').append(option);
                            $('.texto').val("");
                            alerta("verde", "Guardado Correctamente");
                        } else {
                            alerta("amarillo", "Cargo ya existente");
                        }
                    })
                    .fail(function (msg) {

                    })

        }
    })

</script>    