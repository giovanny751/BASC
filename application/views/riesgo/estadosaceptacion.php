<script type="text/javascript">
    $(".menRIESGOS").addClass("active open");
    $(".subMenESTADOS_DE_ACEPTACIÓN").addClass("active");
</script>
<div class="widgetTitle">
    <h5>
        <i class="glyphicon glyphicon-ok"></i>ESTADOS DE ACEPTACIÓN
    </h5>
</div>
<div class='well'>
    <div class="row">
        <div class="form-inline">
            <div class="form-group">
                <label for="estadoaceptacion">Estado de aceptación</label>
                <input type="text" name="estadoaceptacion" id="estadoaceptacion" class="form-control">
                <button type="button" class="btn btn-success estado">Agregar</button>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
            <th>Estados</th>
            <th>Color</th>
            <th>Acción</th>
            </thead>
            <tbody id="bodyestado">
                <?php foreach ($estadoaceptacion as $ea): ?>
                    <tr>
                        <td><?php echo $ea->estAce_estado ?></td>
                        <td><?php echo $ea->col_color ?></td>
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
                        <form method="post" id="frmestadocolor">
                        <div class="col-sm-offset-2 col-sm-8">
                            <div class="form-group">
                                <label for="estados">Estados</label>
                                <select name="estados" id="estados" class="form-control">
                                    <option value="">::Seleccionar::</option>
                                    <?php foreach ($estadoaceptacionxcolor as $ec): ?>
                                        <option value="<?php echo $ec->estAce_id ?>"><?php echo $ec->estAce_estado ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" name="color" id="color" class="form-control">
                            </div>
                        </div>
                            </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary " id="guardarmodificacion">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
//    $('#estadoaceptacion').autocomplete({
//        source: "<?php echo base_url("index.php/riesgo/autocompletarestadoaceptacion") ?>",
//        minLength: 1
//    });
    $('#guardarmodificacion').click(function(){
        
        $.post(
                "<?php echo base_url("index.php/riesgo/guardarcolorxestado") ?>",
                $('#frmestadocolor').serialize()    
                )
                .done(function(msg){
                    
                    $('#bodyestado *').remove();
                    var fila = "";
                    $.each(msg,function(key,val){
                        fila += "<tr>";
                        fila += "<td>"+val.estAce_estado+"</td>";
                        fila += "<td>"+val.col_color+"</td>";
                        fila += "<td></td>";
                        fila += "</tr>";
                    })
                    $('#bodyestado').append(fila);
                }).fail(function(msg){
                    alerta("rojo","error en el sistema por favor comunicarse con el administrador");
                });
        
    });
    
    $('.estado').click(function () {

        var estadoaceptacion = $('#estadoaceptacion').val();

        $.post("<?php echo base_url("index.php/riesgo/guardaestadoaceptacion") ?>",
                {estadoaceptacion: estadoaceptacion}
        ).done(function (msg) {
            if (msg != 1) {
                $('#bodyestado *').remove();
                var body = "";
                $.each(msg, function (key, val) {
                    body += "<tr>";
                    body += "<td>" + val.estAce_estado + "</td>";
                    body += "<td></td>";
                    body += "<td></td>";
                    body += "</tr>";
                });
                $('#bodyestado').append(body);
                alerta("verde", "Estado guardado con exito")
            } else {
                alerta("amarillo","Estado ya existe en el sistema")
            }
        })
                .fail(function (msg) {
alerta("rojo", "Error por favor comunicarse con el administrador del sistema");
                })
                ;
    });
</script>    