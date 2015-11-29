<div class="row">
    <div class="col-md-6">
        <div class="circuloIcon categoria" ><i class="fa fa-floppy-o fa-3x"></i></div>
        <a href="<?php echo base_url()."/index.php/riesgo/nuevoriesgo" ?>"><div class="circuloIcon" title="Nuevo Riesgo" ><i class="fa fa-folder-open fa-3x"></i></div></a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tituloCuerpo">
            <span class="txtTitulo">CLASIFICACIÓN DE RIESGO</span>
        </div>
    </div>
</div>
<div class='cuerpoContenido'>
    <div class="row">
        <div class="form-group">
            <label>Categoria</label>
            <input type="text" name="categoria" id="cat">
        </div>
    </div>
    <div class="row">
        <table class="tablesst">
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
        <button type="button" class="btn-sst" data-toggle="modal" data-target="#myModal">Nuevo</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="text-align: center;"> <div class="circuloIcon" id="guardartipo" ><i class="fa fa-floppy-o fa-3x"></i></div> NUEVO TIPO DE RIESGO</h4>
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