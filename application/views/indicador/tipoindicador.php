<!-- Colorear Menu -->
<script type="text/javascript">
    $(".menINDICADORES").addClass("active open");
    $(".menTIPOS_DE_INDICADORES").addClass("active");
</script>
<div class="page-bar" style="background-color: transparent !important;">
    <ul class="page-breadcrumb">
        <li class="devolver">
            <i class="fa fa-home"></i>
            <a href="<?php echo base_url("index.php/presentacion/principal") ?>">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Indicadores</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Tipo de indicador</a>
        </li>
    </ul>
</div>
<div class="col-lg-offset-3 col-md-offset-3 col-sx-offset-3 col-sm-offset-3 col-lg-6 col-md-6 col-sx-6 col-sm-6">
<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>TIPOS DE INDICADORES
    </h5>
</div>
<div class='well'>
    <div class="row">
        <div class="form-inline">
            <div class="form-group">
                <label for="descripcion"><span class="campoobligatorio">*</span>Tipo Indicador</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control obligatorio"/>
                <button type="button" class="btn btn-success guardar">Agregar</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
            <th style="width: 80%">Tipo</th>
            <th style="width: 20%">Opciones</th>
            </thead>
            <tbody id="bodytipoindicador">
                <?php foreach ($tipoindicadores as $d) { ?>
                    <tr id="<?php echo $d->indTip_id ?>">
                        <td class='tipo'><?php echo $d->indTip_tipo ?></td>
                        <td style="text-align: center">
                            <i class="fa fa-times fa-2x eliminar btn btn-danger" title="Eliminar" dim_id="<?php echo $d->indTip_id ?>" ></i>
                            <i class="fa fa-pencil-square-o fa-2x modificar btn btn-info" title="Modificar" dim_id="<?php echo $d->indTip_id ?>" data-toggle="modal" data-target="#myModal"></i>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tipo indicador</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8">
                            <center>
                                <input type="hidden" name="dimid" id="dimid">
                                <label for="descripcion2">Tipo indicador</label>
                                <input type="text" name="descripcion2" id="descripcion2" class="form-control" />
                            </center>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary guardarmodificacion">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.guardarmodificacion').click(function() {
        $.post(
                "<?php echo base_url("index.php/indicador/guardarmodificaciontipoindicador") ?>",
                {
                    tipIndid: $('#dimid').val(),
                    tipIndTipo: $('#descripcion2').val()
                }
        ).done(function(msg) {
            $('#'+$('#dimid').val()).find('.tipo').text(msg.indTip_tipo);
            $('#myModal').modal("hide");
            alerta("verde", "Modificado correctamente");
        }).fail(function(msg) {
            alerta("rojo", "Error, por favor comunicarse con el administrador del sistema");
        })

    });

    $('body').delegate(".modificar", "click", function() {
        $.post(
                "<?php echo base_url("index.php/indicador/consultaIndicadorxid") ?>",
                {tipoIndicador: $(this).attr('dim_id')}
        ).done(function(msg) {
            $('#dimid').val(msg.indTip_id);
            $('#descripcion2').val(msg.indTip_tipo);
        }).fail(function(msg) {
            alerta("rojo", "Error, por favor comunicarse con el administrador del sistema");
        });

    });

    $('body').delegate(".eliminar", "click", function() {
        var eliminar = $(this);
        if (confirm("Esta seguro de eliminar el tipo de indicador") == true) {
            $.post("<?php echo base_url('index.php/indicador/eliminarindicador') ?>",
                    {id: $(this).attr('dim_id')}
            ).done(function(msg) {
                eliminar.parents('tr').remove();
                alerta("verde", "Eliminado Correctamente");
            }).fail(function(msg) {
                alerta("rojo", "Error, por favor comunicarse con el administrador del sistema");
            });
        }
    });
    $('.guardar').click(function() {
        if (obligatorio('obligatorio') == true) {
            $.post("<?php echo base_url("index.php/indicador/guardarTipoIndicador") ?>"
                    , {
                        tipoindicador: $('#descripcion').val()
                    })
                    .done(function(msg) {
                        if (msg != 1) {
                            $('#bodytipoindicador *').remove();
                            var bodytipoIndicador = "";
                            $.each(msg, function(key, val) {
                                bodytipoIndicador += "<tr id='"+val.indTip_id+"'>";
                                bodytipoIndicador += "<td class='tipo'>" + val.indTip_tipo + "</td>";
                                bodytipoIndicador += '<td style="text-align:center"><i class="fa fa-times fa-2x eliminar btn btn-danger" title="Eliminar" dim_id="' + val.indTip_id + '" ></i><i class="fa fa-pencil-square-o fa-2x modificar btn btn-info" title="Modificar"  dim_id="' + val.indTip_id + '" data-toggle="modal" data-target="#myModal"></i></td>';
                                bodytipoIndicador += "</tr>";
                            });
                            $('#bodytipoindicador').append(bodytipoIndicador);
                            alerta("verde", "Guardado Correctamente");
                        } else {
                            alerta("amarillo", "datos ya existentes en el sistema");
                        }
                    })
                    .fail(function(msg) {
                        alerta("rojo", "Error, por favor comunicarse con el administrador del sistema");
                    })
        }
    });
</script>