<div class="row">
    <div class="col-md-6">
        <!-- <div class="circuloIcon" id="guardartarea"><i class="fa fa-floppy-o fa-3x"></i></div>
        <div class="circuloIcon" id="guardartarea" ><i class="fa fa-pencil-square-o fa-3x"></i></div>
        <div class="circuloIcon" ><i class="fa fa-trash-o fa-3x"></i></div> -->
        <a href="<?php echo base_url() . "/index.php/riesgo/nuevoriesgo" ?>"><div class="circuloIcon" title="Nuevo Riesgo" ><i class="fa fa-folder-open fa-3x"></i></div></a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tituloCuerpo">
            <span class="txtTitulo">LISTADO RIESGO</span>
        </div>
    </div>
</div>
<div class='cuerpoContenido'>
    <div class="row">
        <form method="post" id="busquedariesgo">
            <div class="col-lg-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <select class="form-control" name="categoria" id="categoria">
                        <option value="">::Seleccionar::</option>
                        <?php foreach ($categoria as $ca): ?>
                            <option value="<?php echo $ca->rieCla_id ?>"><?php echo $ca->rieCla_categoria ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <select class="form-control" name="tipo" id="tipo" >
                        <option value="">::Seleccionar::</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="dimensionuno"><?php echo $empresa[0]->Dim_id ?></label>
                    <select class="form-control" name="dimensionuno" id="dimensionuno" >
                        <option value="">::Seleccionar::</option>
                        <?php foreach ($dimension as $d1) { ?>
                            <option value="<?php echo $d1->dim_id ?>"><?php echo $d1->dim_descripcion ?></option>
                        <?php } ?>
                    </select>  
                </div>
                <div class="form-group">
                    <label for="dimensiondos"><?php echo $empresa[0]->Dimdos_id ?></label>
                    <select class="form-control" name="dimensiondos" id="dimensiondos" >
                        <option value="">::Seleccionar::</option>
                        <?php foreach ($dimension2 as $d2) { ?>
                            <option value="<?php echo $d2->dim_id ?>"><?php echo $d2->dim_descripcion ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <select class="form-control" name="cargo" id="cargo">
                        <option value="">::Seleccionar::</option>
                        <?php foreach ($cargo as $c) { ?>
                            <option value="<?php echo $c->car_id ?>"><?php echo $c->car_nombre ?></option> 
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="button" class="btn-sst limpiar" style="margin-top: 28px">Limpiar</button>
                    <button type="button" class="btn-sst buscar" style="margin-top: 28px">Buscar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row" id="bodyRiesgo"></div>
    <form method="post" id="f13" action="<?php echo base_url("index.php/riesgo/nuevoriesgo") ?>">
        <input type="hidden" name="rie_id" id="rie_id">
    </form>
</div>
<script>
    $('body').delegate('.modificar', "click", function() {
        $('#rie_id').val($(this).attr('rie_id'));
        $('#f13').submit();
    });
    $('#categoria').change(function() {
        $.post("<?php echo base_url("index.php/riesgo/consultatiporiesgo") ?>",
                {categoria: $(this).val()})
                .done(function(msg) {
                    $('#tipo *').remove();
                    var option = "<option value=''>::Seleccionar::</option>"
                    $.each(msg, function(key, val) {
                        option += "<option value='" + val.rieClaTip_id + "'>" + val.rieClaTip_tipo + "</option>";
                    })
                    $('#tipo').append(option);
                }).fail(function(msg) {
            alerta("rojo", "Error en el sistema por favor comunicarse con el administrador del sistema");
        });

    });
    $(".limpiar").click(function() {
        $("select, input").val("");
    });

    $('.buscar').click(function() {

        $.post("<?php echo base_url("index.php/riesgo/busquedariesgo") ?>",
                $('#busquedariesgo').serialize()
                ).done(function(msg) {
            $('#bodyRiesgo *').remove();
            var tbody = "";
            $.each(msg.Json, function(id, tipos) {
                $.each(tipos, function(tipo, data) {
                    tbody += "<table class='tablesst'>\n\
                                        <thead style='text-align:center;'>\n\
                                        <tr><th colspan='11'>" + tipo + "</th></tr>\n\
                                        <th>Tipo</th>\n\
                                        <th>Descripción</th>\n\
                                        <th><?php echo $empresa[0]->Dim_id ?></th>\n\
                                        <th><?php echo $empresa[0]->Dimdos_id ?></th>\n\
                                        <th>Lugar/Zona</th>\n\
                                        <th>Actividades</th>\n\
                                        <th>Cargo</th>\n\
                                        <th>Fecha Creación</th>\n\
                                        <th>Estado de aceptación</th>\n\
                                        <th>Tareas(activas)</th>\n\
                                        <th>Accion</th>\n\
                                    </thead>";
                    $.each(data, function(key, val) {
                        tbody += "<tr>";
                        tbody += "<td>" + val.rieClaTip_tipo + "</td>";
                        tbody += "<td>" + val.rie_descripcion + "</td>";
                        tbody += "<td>" + val.des1 + "</td>";
                        tbody += "<td>" + val.des2 + "</td>";
                        tbody += "<td>" + val.rie_zona + "</td>";
                        tbody += "<td></td>";
                        tbody += "<td></td>";
                        tbody += "<td>" + val.rie_fecha + "</td>";
                        tbody += "<td>" + val.estado + "</td>";
                        tbody += "<td></td>";
                        tbody += '<td class="transparent">\n\
                                            <i class="fa fa-pencil-square-o fa-2x modificar" title="Modificar" rie_id="' + val.rie_id + '" ></i>\n\
                                        </td>';
                        tbody += "</tr>";
                    });
                    tbody += "</table>";
                });
            });
            $('#bodyRiesgo').append(tbody);
            alerta("verde", "Consulta cargada con exito");
        }).fail(function(msg) {
            alerta("rojo", "Error en el sistema por favor comunicarse con el administrador");
        });

    });
</script>    