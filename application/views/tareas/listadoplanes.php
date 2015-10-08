<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>LISTADO PLANES
    </h5>
</div>
<div class='well'>
    <form method="post" id="f9">
        <div class="row">
            <div class="col-lg-3 col-sx-3">
                <label for="responsable">
                    Responsable
                </label>
                <select id="responsable" name="estado" class="form-control">
                    <option value="">::Seleccionar::</option>
                    <?php foreach($responsable as $re){?>
                    <option value="<?php echo $re->Emp_Id ?>"><?php echo $re->Emp_Nombre." ".$re->Emp_Apellidos ?></option>
                    <?php }?>
                </select> 
            </div>
            <div class="col-lg-3 col-sx-3">
                <label for="estado">
                    Estado
                </label>
                <select id="estado" name="estado" class="form-control">
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($estados as $e) { ?>
                        <option value="<?php echo $e->est_id ?>"><?php echo $e->est_nombre ?></option>
                    <?php } ?>
                </select>    
            </div>
            <div class="col-lg-3 col-sx-3">
                <div style="margin-top: 27px">
                    <button type="button" id="consultar" class="btn btn-success">Consultar</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sx-3">
                <label for="fecha">Nombre</label><input type="text" name="nombre" id="nombre" class="form-control">
            </div>    
            <div class="col-lg-3 col-sx-3">
                <label for="fecha">Fecha</label><input type="text" name="fecha" id="fecha" class="form-control">
            </div>  
        </div>    
    </form>
    <hr>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
            <th>Nombre</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
            <th>Fecha real</th>
            <th>Responsable</th>
            <th>Presupuesto</th>
            <th>Descripción</th>
            <th>Tareas propias</th>
            <th>Opciones</th>
            </thead>
            <tbody id="cargaplanes">
                <tr>
                    <td colspan="9"><center>Consultar Registros</center></td>
            </tr>
            </tbody>
        </table>
    </div>    
</div>
<form method="post" id="f13" action="<?php echo base_url("index.php/tareas/planes") ?>">
    <input type="hidden" name="pla_id" id="pla_id">
</form>
<script>

    $('body').delegate('.modificar', "click", function () {
        $('#pla_id').val($(this).attr('pla_id'));
        $('#f13').submit();
    });

    $('.limpiar').click(function () {
        $('select,input').val("");
    });

    $('#responsable').autocomplete({
        source: "<?php echo base_url("index.php/tareas/autocompletar") ?>",
        minLength: 3
    });
    $('#fecha').autocomplete({
        source: "<?php echo base_url("index.php/tareas/autocompletarfechainicio") ?>",
        minLength: 3
    });
    $('#nombre').autocomplete({
        source: "<?php echo base_url("index.php/tareas/autocompletarresponsable") ?>",
        minLength: 3
    });
    $('.limpiar').click(function () {
        $('select,input').val('');
    });
    $('#consultar').click(function () {
        $.post("<?php echo base_url("index.php/tareas/consultaplanes") ?>",
                $('#f9').serialize()
                ).done(function (msg) {
            var body = ""
            $('#cargaplanes *').remove()
            $.each(msg, function (key, val) {
                body += "<tr>";
                body += "<td>" + val.pla_nombre + "</td>";
                body += "<td>" + val.pla_fechaInicio + "</td>";
                body += "<td>" + val.pla_fechaFin + "</td>";
                body += "<td>" + val.Emp_Nombre + " "+val.Emp_Apellidos + "</td>";
                body += "<td>" + val.pla_presupuesto +"</td>";
                body += "<td></td>";
                body += "<td>" + val.pla_descripcion + "</td>";
                body += "<td></td>";
                body += '<td><i class="fa fa-times eliminar btn btn-danger" title="Eliminar" pla_id="' + val.pla_id + '"></i>\n\
            <i class="fa fa-pencil-square-o modificar btn btn-info" title="Modificar"  pla_id="' + val.pla_id + '"  data-toggle="modal" data-target="#myModal"></i></td>';
                body += "</tr>";
            })
            $('#cargaplanes').append(body)
            alerta("verde", "Consulta exitosa");
        })
                .fail(function (msg) {
                    alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
                })
    });
    $('body').delegate('.eliminar', 'click', function () {
        $.post("<?php echo base_url("index.php/administrativo/eliminarplan") ?>"
                , {
                    id: $(this).attr('pla_id')
                }
        ).done(function (msg) {
            $(this).parents('tr').remove();
            alerta("verde", "Eliminado Correctamente");
        }).fail(function (msg) {
            alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
        })

    });
</script>