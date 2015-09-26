<div class="widgetTitle">
    <h5>
        <i class="glyphicon glyphicon-ok"></i>ESTADOS DE ACEPTACIÓN
    </h5>
</div>
<div class='well'>
    <div class="row">
        <div class="form-group">
            <label>Estado de aceptación</label>
            <input type="text" name="categoria" id="cat">
            <button type="button" class="btn btn-success categoria">Agregar</button>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
            <th>Estados</th>
            <th>Color</th>
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
                        <div class="col-sm-offset-2 col-sm-8">
                            <div class="form-group">
                                <label for="estados">Estados</label>
                                <input type="text" name="estados" id="estados" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" name="color" id="color" class="form-control">
                            </div>
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
    $('#categoria').click(function () {

        var categoria = $('#categoria').val();

        $.post("<?php echo base_url("index.php/administrativo/guardarcategoria") ?>",
                {categoria: categoria}
        ).done(function (msg) {

        })
                .fail(function (msg) {

                })
                ;
    });
</script>    