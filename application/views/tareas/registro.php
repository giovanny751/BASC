<div class="widgetTitle" >
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal3">Nueva carpeta</button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Nuevo registro</button>
    <h5>
        REGISTRO
    </h5>
</div>
<div class='well'>
    <div class="row">
        <form method="post" id="frmregistro">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="plan">Plan</label>
                <input type="text" class="form-control" name="plan" id="plan"/>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="actividad">Actividad</label>
                <input type="text" class="form-control" name="actividad" id="actividad"/>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label for="tarea">Tarea</label>
                <input type="text" class="form-control" name="tarea" id="tarea"/>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <button type="button" class="btn btn-danger">Limpiar</button>
                <button type="button" class="btn btn-success" id="consultar">Consultar</button>
            </div>
        </form>
    </div>    

    <hr>
    <table class="table table-bordered table-hover">
        <thead>
        <th>Nombre archivo</th>
        <th>Descripciòn</th>
        <th>Versiòn</th>
        <th>Categorìa</th>
        <th>Tarea</th>
        <th>Responsable</th>
        <th>Tamaño</th>
        <th>Fecha</th>
        <th>Ver Versiones</th>
        <th>Opciones</th>
        </thead>
        <tbody>
            <tr>
                <td colspan="10"></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">AGREGAR CARPETA</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="formcarpeta">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="nombrecarpeta">Nombre:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="nombre" id="nombrecarpeta" name="nombrecarpeta" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="descripcioncarpeta">Descripción:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <textarea  id="descripcioncarpeta" name="descripcioncarpeta" class="form-control"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardarcarpeta">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">AGREGAR REGISTRO</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="formregistro" enctype="multipart/form-data" action="<?php echo base_url("index.php/tareas/guardarregistro") ?>">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="plan">Plan:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" id="plan" name="plan" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="tarea">Tarea:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" id="tarea" name="tarea" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="carpeta">Carpeta:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" id="carpeta" name="carpeta" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="version">Versión:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="text" id="version" name="version" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="descripcion">Descripción:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <textarea  id="descripcion" name="descripcion" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <label for="archivocarpeta">Adjuntar archivo:</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <input type="file" id="archivocarpeta" name="archivo" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="guardarRegistro">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
<script>
    
    $('#guardarRegistro').click(function(){
        
        $('#formregistro').submit();
        
    });
    
    $('#guardarcarpeta').click(function () {
        
        $.post(
                "<?php echo base_url("index.php/tareas/guardarcarpeta") ?>",
                $('#formcarpeta').serialize()
                )
                .done(function () {
                    $('#formcarpeta').find("input,textarea").val("");
                    alerta("verde","Carpeta guardada con exito");
                })
                .fail(function () {
                    alerta("rojo","Error por favor comunicarse con el administrador del sistema")
                });

    });
    $('#consultar').click(function () {

        $.post(
                "<?php echo base_url("index.php/tareas/consultaregistro") ?>",
                $('#frmregistro').serialize()
                )
                .done(function () {

                })
                .fail(function () {

                });

    });
    $('#tarea').autocomplete({
        source: "<?php echo base_url("index.php/tareas/autocompletetareas") ?>",
        minLength: 3
    });
    $('#actividad').autocomplete({
        source: "<?php echo base_url("index.php/tareas/autocompleteactividadhijo") ?>",
        minLength: 3
    });
    $('#plan').autocomplete({
        source: "<?php echo base_url("index.php/tareas/autocompletar") ?>",
        minLength: 3
    });
</script>