<script type="text/javascript">
        $(".menNUEVA_TAREA").addClass("active open");
        $(".subMenLISTADO_TAREAS").addClass("active");
</script>
<div class="row">
    <form method="post" id="f9">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <label for="Plan">Plan</label>
            <select name="Plan" id="Plan" class="form-control">
                <option value=""></option>
            </select>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <label for="filtrotarea">Filtro Tareas</label>
            <select name="filtrotarea" id="filtrotarea" class="form-control">
                <option value=""></option>
            </select>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <label for="responsable">Responsable</label>
            <select name="responsable" id="responsable" class="form-control">
                <option value=""></option>
            </select>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <div style="margin-top: 28px"><button type="button" class="btn btn-success" id="consultar">Consultar</button></div>
        </div>
    </form>
</div>
<div class="row">
    <table class="table table-bordered table-hover">
        <thead>
        <th>AGREGAR HISTORIA</th>
        <th>AVANCE</th>
        <th>TIPO</th>
        <th>NOMBRE DE LA TAREA</th>
        <th>FECHA INICIO</th>
        <th>FECHA FIN</th>
        <th>DURACIÓN PRESUPUESTADA</th>
        <th>RESPONSABLES</th>
        <th>ACCIÓN</th>
        </thead>
        <tbody id="cargaTarea">
            <tr>
                <td colspan="9"><center>Consultar Registros</center></td>
            </tr>
        </tbody>
    </table>
</div>
<form method="post" id="f13" action="<?php echo base_url("index.php/tareas/nuevatarea") ?>">
    <input type="hidden" name="tar_id" id="tar_id">
</form>
<script type="text/javascript">
    $('body').delegate('.modificar', "click", function () {
        $('#pla_id').val($(this).attr('pla_id'));
        $('#f13').submit();
    });
    $('.limpiar').click(function () {
        $('select,input').val("");
    });
    $('#consultar').click(function () {
        $.post("<?php echo base_url("index.php/tareas/consultatareas") ?>",
                $('#f9').serialize()
                ).done(function (msg) {
            var body = ""
            $('#cargaTarea *').remove()
            $.each(msg, function (key, val) {
               
            })
            $('#cargaTarea').append(body)
            alerta("verde", "Consulta exitosa");
        })
                .fail(function (msg) {
                    alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
                })
    });
</script>