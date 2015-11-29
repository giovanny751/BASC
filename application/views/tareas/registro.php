
<div class="cuerpoContenido">
    <div class="row">
        <button type="button" class="btn-sst" data-toggle="modal" data-target="#myModal2">Nuevo registro</button>
    </div>
    <div class="row">
        <form method="post" id="frmregistro">
            <label for="plan" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Plan</label>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                <input type="text" class="form-control" name="plan" id="plan"/>
            </div>
            <label for="actividad" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Actividad</label>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                <input type="text" class="form-control" name="actividad" id="actividad"/>
            </div>
            <label for="tarea" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">Tarea</label>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <input type="text" class="form-control" name="tarea" id="tarea"/>
            </div>

        </form>

    </div>    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: right">
            <button type="button" class="btn-sst limpiar">Limpiar</button>
            <button type="button" class="btn-sst" id="consultar">Consultar</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table class="tablesst" id="datatable_ajax">
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
                <tbody id="cuerpodatos">
                    <tr>
                        <td colspan="10"></td>
                    </tr>
                </tbody>
            </table>
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
                            <label for="planregistro">Plan:</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <select id="planregistro" name="plan" class="form-control">
                                <option value=""></option>
                                <?php foreach ($plan as $pl): ?>
                                    <option value="<?php echo $pl->pla_id ?>"><?php echo $pl->pla_nombre ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label for="tarearegistro">Tarea:</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <select id="tarearegistro" name="tarea" class="form-control">
                                <option value="">::Seleccionar::</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label for="carpeta">Carpeta:</label>

                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <select id="carpeta" name="carpeta" class="form-control">
                                <option value="">::Seleccionar::</option>
                                <?php foreach ($carpeta as $c): ?>
                                    <option value="<?php echo $c->regCar_id ?>"><?php echo $c->regCar_nombre ?></option>
                                <?php endforeach; ?>
                            </select>    
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
    $('#planregistro').change(function () {

        $.post(
                "<?php echo base_url("index.php/tareas/tareaxidplan") ?>",
                {pla_id: $(this).val()}
        ).done(function (msg) {
            $('#tarearegistro *').remove();
            var option = "<option value=''>::Seleccionar::</option>";
            $.each(msg, function (key, val) {
                option += "<option value='" + val.tar_id + "'>" + val.tar_nombre + "</option>";
            });
            $('#tarearegistro').append(option);
        }).fail(function (msg) {

        });

    });

    $('#guardarRegistro').click(function () {
        $('#formregistro').submit();
    });

    $('#guardarcarpeta').click(function () {
        $.post(
                "<?php echo base_url("index.php/tareas/guardarcarpeta") ?>",
                $('#formcarpeta').serialize()
                )
                .done(function () {
                    $('#formcarpeta').find("input,textarea").val("");
                    alerta("verde", "Carpeta guardada con exito");
                })
                .fail(function () {
                    alerta("rojo", "Error por favor comunicarse con el administrador del sistema")
                });
    });
    $('#consultar').click(function () {
        $.post(
                "<?php echo base_url("index.php/tareas/consultaregistro") ?>",
                $('#frmregistro').serialize()
                )
                .done(function (msg) {
                    $('#cuerpodatos *').remove();
                    var body = ""
                    $.each(msg.Json, function (key, val) {
                        body += "<tr>";
                        body += "<td>" + (val.reg_archivo==null?'':val.reg_archivo) + "</td>";
                        body += "<td>" + (val.reg_descripcion==null?'':val.reg_descripcion) + "</td>";
                        body += "<td>" + (val.reg_version==null?'':val.reg_version) + "</td>";
                        body += "<td></td>";
                        body += "<td>" + (val.tar_nombre==null?'':val.tar_nombre) + "</td>";
                        body += "<td>" + (val.responsable==null?'':val.responsable) + "</td>";
                        body += "<td>" + (val.reg_tamano==null?'':val.reg_tamano) + "</td>";
                        body += "<td></td>";
                        body += "<td></td>";
                        body += "<td>\n\
                                    <i class='fa fa-times fa-2x eliminarregistro btn btn-danger' title='Eliminar' reg_id='" + val.reg_id + "'></i>\n\
                                    <i class='fa fa-pencil-square-o fa-2x modificarregistro btn btn-info' title='Modificar' reg_id='" + val.reg_id + "'  data-target='#myModal15' data-toggle='modal'></i>\n\
                                </td>";
                        body += "</tr>";
                    })
                    $('#cuerpodatos').append(body);
                })
                .fail(function (msg) {
                    alerta("rojo", "Error por favor comunicarse con el administrador del sistema")
                });
    });

    $('body').delegate('.eliminarregistro', 'click', function () {
        var registro = $(this);
        if (confirm("esta seguro de eliminar el registro")) {
            $.post(
                    "<?php echo base_url("index.php/tareas/eliminarregistro") ?>",
                    {registro: registro.attr("reg_id")}
            ).done(function (msg) {
                registro.parents('tr').remove();
            }).fail(function (msg) {

            });
        }
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