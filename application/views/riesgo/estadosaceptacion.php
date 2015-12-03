<div class="row">
    <div class="col-md-6">
        <div class="circuloIcon estado" title="Guardar" ><i class="fa fa-floppy-o fa-3x"></i></div>
        <a href="<?php echo base_url()."/index.php/riesgo/nuevoriesgo" ?>"><div class="circuloIcon" title="Nuevo Riesgo" ><i class="fa fa-folder-open fa-3x"></i></div></a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tituloCuerpo">
            <span class="txtTitulo">ESTADOS DE ACEPTACIÓN</span> 
        </div>
    </div>
</div>
<div class='cuerpoContenido'>
    <div class="row">
        <div class="form-inline">
            <div class="form-group">
                <label for="estadoaceptacion">Estado de aceptación</label>
                <input type="text" name="estadoaceptacion" id="estadoaceptacion" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <table class="tablesst">
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
        <button type="button" class="btn-sst" data-toggle="modal" data-target="#myModal">Nuevo</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel" style="text-align: center"><div class="circuloIcon" id="guardarmodificacion" ><i class="fa fa-floppy-o fa-3x"></i></div> NUEVO TIPO DE RIESGO</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-offset-2 col-sm-8">
                            
                        </div>
                    </div>
                    <div class="row">
                        <form class="form-horizontal" method="post" id="frmestadocolor">
                            <div class="form-group">
                                <label for="estados" class="col-sm-offset-2 col-sm-2">Estados</label>
                                <div class="col-sm-6">
                                    <select name="estados" id="estados" class="form-control">
                                        <option value="">::Seleccionar::</option>
                                        <?php foreach ($estadoaceptacionxcolor as $ec): ?>
                                            <option value="<?php echo $ec->estAce_id ?>"><?php echo $ec->estAce_estado ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="color" class="col-sm-offset-2 col-sm-2">Color</label>
                                <div class="col-sm-6">
                                    <input type="text" name="color" id="color" class="form-control">
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
                    alerta("verde", "Estado guardada con exito");
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