<script type="text/javascript">
    $(".menRIESGOS").addClass("active open");
    $(".subMenLISTADO_RIESGOS").addClass("active");
</script>
<div class="page-bar" style="background-color: transparent !important;">
    <ul class="page-breadcrumb">
        <li class="devolver">
            <i class="fa fa-home"></i>
            <a href="<?php echo base_url("index.php/presentacion/principal") ?>">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Riesgos</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Listado Riesgo</a>
        </li>
    </ul>
</div>
<div class="widgetTitle">
    <h5>
        <i class="glyphicon glyphicon-ok"></i>VER RIESGOS
    </h5>
</div>
<div class='well'>
    <div class="row">
        <form method="post" id="busquedariesgo">
            <div class="col-lg-3 col-sm-3 col-md-3">
                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <select class="form-control" name="categoria" id="categoria">
                        <option value="">::Seleccionar::</option>
                        <?php foreach($categoria as $ca): ?>
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
                    <button type="button" class="btn btn-danger limpiar" style="margin-top: 28px">Limpiar</button>
                    <button type="button" class="btn btn-success buscar" style="margin-top: 28px">Buscar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <table class='table table-bordered table-hover'>
            <thead>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Dimensión 1</th>
            <th>Dimensión 2</th>
            <th>Lugar/Zona</th>
            <th>Actividades</th>
            <th>Cargo</th>
            <th>Fecha Creación</th>
            <th>Estado de aceptación</th>
            <th>Tareas(activas)</th>
            <th>Accion</th>
            </thead>
            <tbody id="inforiesgo">
                <tr>
                    <td colspan="10"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <form method="post" id="f13" action="<?php echo base_url("index.php/riesgo/nuevoriesgo") ?>">
        <input type="hidden" name="rie_id" id="rie_id">
    </form>
</div>
<script>
    $('body').delegate('.modificar', "click", function () {
        $('#rie_id').val($(this).attr('rie_id'));
        $('#f13').submit();
    });
    $('#categoria').change(function () {

        $.post(
                "<?php echo base_url("index.php/riesgo/consultatiporiesgo") ?>",
                {categoria: $(this).val()}
        ).done(function (msg) {
            $('#tipo *').remove();
            var option = "<option value=''>::Seleccionar::</option>"
            $.each(msg, function (key, val) {
                option += "<option value='" + val.rieClaTip_id + "'>" + val.rieClaTip_tipo + "</option>";
            })
            $('#tipo').append(option);
        }).fail(function (msg) {
            alerta("rojo", "Error en el sistema por favor comunicarse con el administrador del sistema");
        });

    });
    $(".limpiar").click(function(){
        $("select, input").val("");
    });
    
    $('.buscar').click(function () {

        $.post("<?php echo base_url("index.php/riesgo/busquedariesgo") ?>",
                $('#busquedariesgo').serialize()
                ).done(function (msg) {
            var tbody = "";
            $.each(msg, function (key, val) {
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
                tbody += '<td><i class="fa fa-pencil-square-o fa-2x modificar btn btn-info" title="Modificar" rie_id="'+ val.rie_id+'" ></i></td>'; 
                tbody += "</tr>";
            });
            $('#inforiesgo *').remove();
            $('#inforiesgo').append(tbody);
            alerta("verde", "Datos cargados con exito");
        }).fail(function (msg) {
            alerta("rojo", "Error en el sistema por favor comunicarse con el administrador");
        });

    });
</script>    