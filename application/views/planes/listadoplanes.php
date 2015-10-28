<!-- Colorear Menu -->
<script type="text/javascript">
    $(".menPLAN_DE_TRABAJO").addClass("active open");
    $(".subMenLISTADO_PLANES").addClass("active");
</script>
<div class="page-bar" style="background-color: transparent !important;">
    <ul class="page-breadcrumb">
        <li class="devolver">
            <i class="fa fa-home"></i>
            <a href="<?php echo base_url("index.php/presentacion/principal") ?>">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Plan De Trabajo</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Listado Planes</a>
        </li>
    </ul>
</div>
<form method="post" id="f13" action="<?php echo base_url("index.php/planes/nuevoplan") ?>">
    <input type="hidden" name="pla_id" id="pla_id">
</form>
<div class="col-md-12">
    <div class="portlet blue box">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>LISTADO PLANES
            </div>
        </div>
        <div class="portlet-body">
            <div class="form-actions top">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a href="<?php echo base_url("index.php/planes/planes") ?>" class="btn btn-default">
                            Nuevo Plan
                        </a> 
                    </div>
                </div>
            </div>
            <form method="post" id="f9">
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2" for="nombre">Nombre</label>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><input type="text" id="nombre" name="nombre" class="form-control"></div>
                        <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2" for="estado">Estado</label>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <select id="estado" name="estado" class="form-control">
                                <option value="">::Seleccionar::</option>
                                <option value="1">Activos</option>
                                <option value="2">Inactivos</option>
                                <option value="3">Finalizados</option>
                            </select> 
                        </div>

                        <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2" for="responsable">Responsable</label>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <select id="responsable" name="responsable" class="form-control">
                                <option value="">::Seleccionar::</option>
                                <?php foreach ($responsable as $re) { ?>
                                    <option value="<?php echo $re->Emp_Id ?>"><?php echo $re->Emp_Nombre . " " . $re->Emp_Apellidos ?></option>
                                <?php } ?>
                            </select> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:right">
                        <button id="consultar" class="btn btn-success" type="button">Consultar</button>
                    </div>
                </div>   
            </form>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <table class="table table-striped table-bordered table-hover" id="sample_2">
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
                            <tr class="odd gradeX">
                                <td colspan="9">
                        <center>Consultar Registros</center>
                        </td>
                        </tr>
                        </tbody>
                    </table> 
                </div>    
            </div>    
        </div>
    </div>
</div>
<script>


    $('body').delegate('.modificar', "click", function () {
        $('#pla_id').val($(this).attr('pla_id'));
        $('#f13').submit();
    });

    $('.limpiar').click(function () {
        $('select,input').val("");
    });

//    $('#responsable').autocomplete({
//        source: "<?php echo base_url("index.php/tareas/autocompletar") ?>",
//        minLength: 3
//    });
//    $('#fecha').autocomplete({
//        source: "<?php echo base_url("index.php/tareas/autocompletarfechainicio") ?>",
//        minLength: 3
//    });
    $('#nombre').autocomplete({
        source: "<?php echo base_url("index.php/tareas/autocompletarresponsable") ?>",
        minLength: 3
    });
//    $('.limpiar').click(function () {
//        $('select,input').val('');
//    });
    $('#consultar').click(function () {
        $.post("<?php echo base_url("index.php/planes/consultaplanes") ?>",
                $('#f9').serialize()
                ).done(function (msg) {
            var body = ""
            $('#cargaplanes *').remove()
            $.each(msg, function (key, val) {
                body += "<tr class='odd gradeX'>";
                body += "<td>" + val.pla_nombre + "</td>";
                body += "<td>" + val.pla_fechaInicio + "</td>";
                body += "<td>" + val.pla_fechaFin + "</td>";
                body += "<td></td>";
                body += "<td>" + val.Emp_Nombre + " " + val.Emp_Apellidos + "</td>";
                body += "<td>" + val.pla_presupuesto + "</td>";
                body += "<td>" + val.pla_descripcion + "</td>";
                body += "<td></td>";
                body += '<td><i class="fa fa-times eliminar btn btn-default" title="Eliminar" pla_id="' + val.pla_id + '"></i>\n\
            <i class="fa fa-pencil-square-o modificar btn  btn-default" title="Modificar"  pla_id="' + val.pla_id + '"  data-toggle="modal" data-target="#myModal"></i></td>';
                body += "</tr>";
            })
            $('#cargaplanes').append(body)
            alerta("verde", "Consulta exitosa");
        })
                .fail(function (msg) {
                    alerta("rojo", "Error po favor comunicarse con el administrador");
                })
    });
    $('body').delegate('.eliminar', 'click', function () {
        var objeto = $(this);
        if (confirm("Esta seguro de eliminar el plan")) {
            $.post("<?php echo base_url("index.php/planes/eliminarplan") ?>"
                    , {
                        id: $(this).attr('pla_id')
                    }
            ).done(function (msg) {
                objeto.parents('tr').remove();
                alerta("verde", "Eliminado Correctamente");
            }).fail(function (msg) {
                alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
            })
        }
    });
</script>