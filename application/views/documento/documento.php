    <div class="row">
        <div class="col-md-12">
            <div class="tituloCuerpo">
                <span class="txtTitulo">NUEVO DOCUMENTO</span>
            </div>
        </div>
    </div>
    <div class="cuerpoContenido" style="color:">
        <div class="portlet-title">
            <div class="tools">
                <button type="button" id="nuevogrupo" class="btn btn-default" data-toggle="modal" data-target="#myModal">Grupo</button>
                <button type="button" id="guardardocumento" class="btn btn-primary">Guardar</button>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form method="post" id="frmdocumento">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="row">
                                <label class="col-lg-6 col-md-6 col-sm-6 col-xs-6" for="nombredocumento">
                                    <span class="campoobligatorio">*</span>Nombre Documento
                                </label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <input type="text" name="nombredocumento" id="nombredocumento" class="form-control obligatorio">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-6 col-md-6 col-sm-6 col-xs-6" for="tipo">
                                    Tipo
                                </label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="">::Seleccionar::</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="encabezado">Encabezado</label>
                                    <textarea id="encabezado" name="encabezado" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="row">
                                <label class="col-lg-6 col-md-6 col-sm-6 col-xs-6" for="fechadesde">
                                    <span class="campoobligatorio">*</span>Fecha desde
                                </label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <input type="text" name="fechadesde" id="fechadesde" class="fecha form-control obligatorio">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    Fecha hasta
                                </label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" for="fechahasta">
                                    <input type="text" name="fechahasta" id="fechahasta" class="fecha form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="piepagina">Píe de página</label>
                                    <textarea id="piepagina" name="piepagina" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="portlet-body">
                        <div class="tabbable tabbable-tabdrop">
                            <div class="tab-content">
                                <br>
                                <div class="panel-group accordion" id="accordion5">
                                    <?php
                                    $o = 1;
                                    foreach ($gruposasociados as $id => $grupos):
                                        foreach ($grupos as $grupo => $documentos):
                                            ?>
                                            <div class="panel panel-default" id="<?php echo $id ?>">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_<?php echo $id; ?>" aria-expanded="false" id="<?php echo $id; ?>id"> 
                                                            <i class="fa fa-folder-o carpeta"></i>&nbsp;<?php echo $grupo ?>
                                                        </a>
                                                        <i class="fa fa-edit editargrupo" grupoid="<?php echo $id ?>"></i>
                                                        <i class="fa fa-times eliminargrupo" grupoid="<?php echo $id ?>"></i>
                                                    </h4>
                                                </div>
                                                <div id="collapse_<?php echo $id; ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                            <th>Orden Grupo</th>
                                                            <th>Orden Subgrupo</th>
                                                            <th>Nombre campo</th>
                                                            <th>Tipo</th>
                                                            <th>lista valores</th>
                                                            <th>Nombre campo a mostrar</th>
                                                            <th>orden</th>
                                                            <th>obligatorio</th>
                                                            <th>Fecha desde</th>
                                                            <th>Fecha hasta</th>
                                                            <th>Agregar Subgrupo</th>
                                                            <th>Agregar campo</th>
                                                            <th>Editar</th>
                                                            <th>Eliminar</th>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $o++;
                                        endforeach;
                                    endforeach;
                                    ?>
                                </div> 
                            </div>
                        </div>
                    </div>                

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">GRUPO</h4>
                </div>
                <div class="modal-body">
                    <form method='post' id='frmcreaciongrupo'>
                        <input type='hidden' name="grupoid" id="grupoid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Grupo</label>
                                <div for="" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <input type="text" id="grupo" name="grupo" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label for="" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Orden Grupo</label>
                                <div for="" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <input type="text" id="orden" name="orden" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>    
                </div>  
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="guardargrupo">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('document').ready(function () {
            //------------------------------------------------------------------------------
            //                              ACORDEON DE DOCUMENTOS        
            //------------------------------------------------------------------------------        
            var grupo = $('#grupo');
            var orden = $('#orden');

            $('body').delegate("#nuevogrupo", "click", function () {
                grupo.val('');
                orden.val('');
                $('#grupoid').val('');
            });
            $('body').delegate("#guardargrupo", "click", function () {
                $.post(
                        "<?php echo base_url("index.php/documento/creaciongrupo") ?>",
                        $('#frmcreaciongrupo').serialize()
                        ).done(function (msg) {
                    if ($('#grupoid').val() != "") {
                        $('#' + $('#grupoid').val() + 'id').text(msg.docGru_orden + " - " + msg.msg.docGru_grupo);
                    } else {
                        var acordeon = '<div class="panel panel-default" id="' + msg.docGru_id + '">\n\
                                                <div class="panel-heading">\n\
                                                    <h4 class="panel-title">\n\
                                                        <a id="' + msg.docGru_id + 'id" class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_' + msg.docGru_id + '" aria-expanded="false">\n\
                                                            <i class="fa fa-folder-o carpeta"></i> ' + msg.docGru_orden + " - " + msg.docGru_grupo + '\n\
                                                        </a>\n\
                                                            <i class="fa fa-edit editargrupo" car_id="' + msg.docGru_id + '"></i>\n\
                                                            <i class="fa fa-times eliminarregistro" car_id="' + msg.docGru_id + '"></i>\n\
                                                    </h4>\n\
                                                </div>\n\
                                                <div id="collapse_' + msg.docGru_id + '" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">\n\
                                                    <div class="panel-body">\n\
                                                    <table class="table table-bordered table-hover">\n\
                                                                <thead>\n\
                                                                <th>Orden Grupo</th>\n\
                                                                <th>Orden Subgrupo</th>\n\
                                                                <th>Nombre campo</th>\n\
                                                                <th>Tipo</th>\n\
                                                                <th>lista valores</th>\n\
                                                                <th>Nombre campo a mostrar</th>\n\
                                                                <th>orden</th>\n\
                                                                <th>obligatorio</th>\n\
                                                                <th>Fecha desde</th>\n\
                                                                <th>Fecha hasta</th>\n\
                                                                <th>Agregar Subgrupo</th>\n\
                                                                <th>Agregar campo</th>\n\
                                                                <th>Editar</th>\n\
                                                                <th>Eliminar</th>\n\
                                                                </thead>\n\
                                                                <tbody>\n\
                                                                    <tr><td colspan="14"><center><b>Agregar Documento</b></center></td></tr>\n\
                                                                </tbody>\n\
                                                            </table>\n\
                                                    </div>\n\
                                                </div>\n\
                                        </div>';
                        $('#accordion5').append(acordeon);
                    }
                    grupo.val('');
                    orden.val('');
                    $('#grupoid').val('');
                    $('#myModal').modal('hide');
                    alerta("verde", "Datos guardados con exito");
                }).fail(function (msg) {
                    alerta("rojo", "Por favor comunicarse con el admistrador del sistema")
                })
            });



            $('body').delegate('.eliminargrupo', 'click', function () {
                var grupo = $(this);
                if (confirm("Esta seguro de eliminar el documento")) {
                    $.post(
                            "<?php echo base_url("index.php/documento/eliminargrupo") ?>",
                            {
                                grupo: grupo.attr("grupoid")
                            }
                    ).done(function (msg) {
                        grupo.parents('.panel-default').remove();
                        alerta("verde", "Grupo eliminado correctamente")
                    }).fail(function (msg) {
                        alerta("rojo", "Error, Por favor comunicarse con el administrador del sistema")
                    });
                }
            });
            $('body').delegate('.editargrupo', 'click', function () {
                $.post(
                        "<?php echo base_url("index.php/documento/consultagrupo") ?>",
                        {
                            grupo: grupo.attr("grupoid")
                        }
                ).done(function (msg) {
                    $('#grupo').val(msg.docGru_grupo);
                    orden.val(msg.docGru_orden);
                    $('#grupoid').val(msg.docGru_id);
                    $('#myModal').modal({
                        show: 'true'
                    });
                }).fail(function (msg) {
                    alerta("rojo", "Error, Por favor comunicarse con el administrador del sistema")
                });

            });
            //------------------------------------------------------------------------------
            //                      GUARDADO DOCUMENTOS    
            //------------------------------------------------------------------------------  

            $('body').delegate('#guardardocumento', "click", function () {
                if (obligatorio('obligatorio')) {
                    $.post(
                            "<?php echo base_url("index.php/documento/guardardocumento") ?>",
                            $('#frmdocumento').serialize()
                            ).done(function (msg) {

                        alerta("verde", "Documento guardado correctamente")
                    }).fail(function (msg) {
                        alerta("rojo", "Error,por favor comunicarse con el administrador del sistema");
                    });
                }
            });
        });
    </script>    