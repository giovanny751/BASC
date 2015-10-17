<div class="widgetTitle">
    <h5>
        <i class="glyphicon glyphicon-ok"></i>CLASIFICACIÓN DE RIESGO
    </h5>
</div>
<div class='well'>
    <div class="row">
        <div class="form-group">
            <label>Categoria</label>
            <input type="text" name="categoria" id="cat">
            <button type="button" class="btn btn-success categoria">Agregar</button>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
            <th>Categoría</th>
            <th>Tipo</th>
            <th>Acción</th>
            </thead>
            <tbody id="datoscategoria">
                <?php foreach ($categoria as $c): ?>
                    <tr>
                        <td><?php echo $c->rieCla_categoria ?></td>
                        <td><?php echo $c->rieClaTip_tipo ?></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Nuevo</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">NUEVO TIPO DE RIESGO</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form method="post" id="frmtipocategoria">
                            <div class="col-sm-offset-2 col-sm-8">
                                <div class="form-group">
                                    <label for="ct">Categoría</label>
                                    <select name="categoria" id="ct" class="form-control">
                                        <option value="">::Seleccionar::</option>
                                        <?php foreach ($categoria2 as $cc): ?>
                                            <option value="<?php echo $cc->rieCla_id ?>"><?php echo $cc->rieCla_categoria ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tipo">Tipo</label>
                                    <input type="text" name="tipo" id="tipo" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary " id="guardartipo">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $('#guardartipo').click(function () {

        $.post(
                "<?php echo base_url("index.php/riesgo/guardartipocategoria") ?>",
                $("#frmtipocategoria").serialize()
                )
                .done(function (msg) {
                    if (msg != 1) {
                        $('#datoscategoria *').remove();
                        var body = "";
                        $.each(msg, function (key, val) {
                            body += "<tr>";
                            body += "<td>" + val.rieCla_categoria + "</td>";
                            body += "<td>" + val.rieClaTip_tipo + "</td>";
                            body += "<td></td>";
                            body += "</tr>";
                        });
                        $('#datoscategoria').append(body);
                        alerta("verde", "Categoria guardada con exito");
                    } else {
                        alerta("amarillo", "Datos ya existentes en el sistema");
                    }
                })
                .fail(function (msg) {
                    alerta("rojo", "Error al guardar el tipo por favor comunicarse con el administrador");
                });

    });

    $('.categoria').click(function () {

        var categoria = $('#cat').val();

        $.post("<?php echo base_url("index.php/riesgo/guardarclasificacionriesgo") ?>",
                {categoria: categoria}
        ).done(function (msg) {
            if (msg != 1) {
                $('#datoscategoria *').remove();
                var body = "";
                $.each(msg, function (key, val) {
                    body += "<tr>";
                    body += "<td>" + val.rieCla_categoria + "</td>";
                    body += "<td>" + val.rieClaTip_tipo + "</td>";
                    body += "<td></td>";
                    body += "</tr>";
                });
                $('#datoscategoria').append(body);
                alerta("verde", "Categoria guardada con exito");
            } else {
                alerta("amarillo", "Datos ya existentes en el sistema");
            }
        })
                .fail(function (msg) {

                })
                ;
    });
</script>    