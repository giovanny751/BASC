<!-- Colorear Menu -->
<script type="text/javascript">
        $(".menORGANIZACIÓN").addClass("active open");
        $(".subMenEMPLEADOS").addClass("active");
        $(".subMenLISTADO_EMPLEADOS").addClass("active");
</script>

<div class="page-bar" style="background-color: transparent !important;">
    <ul class="page-breadcrumb">
        <li class="devolver">
            <i class="fa fa-home"></i>
            <a href="<?php echo base_url("index.php/presentacion/principal") ?>">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Organización</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="<?php echo base_url("index.php/administrativo/empresa") ?>">Empresa</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Listado Empleados</a>
        </li>
    </ul>
</div>
<div class="widgetTitle" >
    <a href="<?php echo base_url("index.php/administrativo/creacionempleados") ?>">
        <button type="button" class="btn btn-default">Nuevo empleado</button>
    </a> 
    <h5>
        &nbsp;&nbsp;&nbsp;&nbsp;LISTADO EMPLEADOS
    </h5> 
</div>
<div class='well'>
    <form method="post" id="f2">
        <div class="row">
            <div class="form-group">
                <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2" for="cedula">Cédula</label>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><input type="text" name="cedula" id="cedula" class="form-control"></div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2" for="nombre">Nombre</label>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><input type="text" name="nombre" id="nombre" class="form-control"></div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2" for="apellido">Apellido</label>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><input type="text" name="apellido" id="apellido" class="form-control"></div>
            </div>
            
        </div>
        <div class="row">
            <div class="form-group">
                <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2" for="dim1">
                    <?php echo $empresa[0]->Dim_id ?>
                </label>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <select id="dimension1" name="dimension1" class="form-control">
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($dimension as $d) { ?>
                        <option  <?php echo (!empty($empleado[0]->Dim_id) && $empleado[0]->Dim_id == $d->dim_id) ? "selected" : ""; ?> value="<?php echo $d->dim_id ?>"><?php echo $d->dim_descripcion ?></option>
                    <?php } ?>
                    </select>    
                </div>
                <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2" for="dim2">
                    <?php echo $empresa[0]->Dimdos_id ?>
                </label>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <select id="dimension2" name="dimension2" class="form-control">
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($dimension2 as $d2) { ?>
                        <option  <?php echo (!empty($empleado[0]->Dim_IdDos) && $empleado[0]->Dim_IdDos == $d2->dim_id) ? "selected" : ""; ?> value="<?php echo $d2->dim_id ?>"><?php echo $d2->dim_descripcion ?></option>
                    <?php } ?>
                    </select>
                </div>
                <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3" for="dim2">
                    Contratos vencidos 
                </label>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <input type="checkbox" value="1" name="contratosvencidos" class="form-control">
                </div>
            </div>    
        </div>    
        <div class="row">
            <div class="form-group">
            <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2" for="tipocontrato">
                    Tipo Contrato
                </label>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <select name="tipocontrato" id="tipocontrato" class="form-control">
                        <option value="">::Seleccionar::</option>
                        <?php foreach ($tipocontrato as $tp) { ?>
                            <option value="<?php echo $tp->TipCon_Id ?>"><?php echo $tp->TipCon_Descripcion ?></option>
                        <?php } ?>
                    </select>
                </div>
            <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2" for="cargo">
                    Cargo
                </label>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <select name="cargo" id="cargo" class="form-control">
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($cargo as $c) { ?>
                        <option value="<?php echo $c->car_id ?>"><?php echo $c->car_nombre ?></option>
                    <?php } ?>
                </select>
                </div>
            <label class="col-lg-2 col-md-2 col-sm-2 col-xs-2" for="estado">
                    Estado
                </label>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <select name="estado" id="estado" class="form-control">
                        <option value="">::Seleccionar::</option>
                        <?php foreach ($estado as $e) { ?>
                            <option value="<?php echo $e->est_id ?>"><?php echo $e->est_nombre ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: right">
                <div class="form-group" style="margin-top: 29px">
                    <label>&nbsp;</label><button type="button" class="btn btn-danger limpiar">Limpiar</button>
                    <label>&nbsp;</label><button type="button" class="btn btn-success consultar">Consultar</button>
                </div>
            </div>
        </div>
    </form>   
    <hr>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
            <th>Cédula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Estado</th>
            <th>Tipo contrato</th>
            <th>Cargo</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
            <th>Opciones</th>
            </thead>
            <tbody id="bodyempleados">
                <tr>
                    <td colspan="10"><center>Consultar Registros</center></td> 
            </tr>
            </tbody>
        </table>
    </div> 
</div> 


<form id="f10" method="post" action="<?php echo base_url("index.php/administrativo/creacionempleados") ?>">
    <input type="hidden" value="" name="emp_id" id="emp_id">
</form>
<script>
    $('#cedula').autocomplete({
        source: "<?php echo base_url("index.php/administrativo/autocompletarcedula") ?>",
        minLength: 3
    });
    $('#nombre').autocomplete({
        source: "<?php echo base_url("index.php/administrativo/autocompletarnombre") ?>",
        minLength: 3
    });
    $('#apellido').autocomplete({
        source: "<?php echo base_url("index.php/administrativo/autocompletarapellido") ?>",
        minLength: 3
    });
    

    $('body').delegate(".modificar", "click", function () {
        $("#emp_id").val($(this).attr("emp_id"));
        $("#f10").submit();
    });

    $('.limpiar').click(function () {
        $('select,input').val('');
    });
    $('.consultar').click(function () {
        $.post(
                "<?php echo base_url('index.php/administrativo/consultaempleados') ?>",
                $('#f2').serialize()
                ).done(function (msg) {
            $('#bodyempleados *').remove();
            var body = "";
            $.each(msg, function (key, val) {
                body += "<tr>";
                body += "<td>" + val.Emp_Cedula + "</td>";
                body += "<td>" + val.Emp_Nombre + "</td>";
                body += "<td>" + val.Emp_Apellidos + "</td>";
                body += "<td>" + val.Emp_Telefono + "</td>";
                body += "<td>" + val.est_nombre + "</td>";
                body += "<td>" + val.TipCon_Descripcion + "</td>";
                body += "<td>" + val.car_nombre + "</td>";
                body += "<td>" + val.Emp_FechaInicioContrato + "</td>";
                body += "<td>" + val.Emp_FechaFinContrato + "</td>";
                body += '<td>\n\
                                <i class="fa fa-times fa-2x eliminar btn btn-danger" title="Eliminar" emp_id="' + val.Emp_Id + '"></i>\n\
                                <i class="fa fa-pencil-square-o fa-2x modificar btn btn-info" title="Modificar"  emp_id="' + val.Emp_Id + '"  data-toggle="modal" data-target="#myModal"></i>\n\
                                </td>';
                body += "</tr>";
            });
            $('#bodyempleados').append(body);
        }).fail(function (msg) {

        });
    });
    $('body').delegate('.eliminar', 'click', function () {
        var boton = $(this);
        if (confirm("Esta seguro de eliminar el empleado?")) {
            $.post("<?php echo base_url("index.php/administrativo/eliminarempleado") ?>"
                    , {id: $(this).attr('emp_id')}
            ).done(function (msg) {
                boton.parents('tr').remove();
                alerta("verde", "Eliminado Correctamente");
            }).fail(function (msg) {
                alerta("rojo", "Error en el sistema por favor verificar la conexion de internet");
            })
        }

    })
</script>    