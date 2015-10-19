<div class="col-md-12">
    <div class="portlet green-meadow box">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>REGISTRO
            </div>
            <div class="tools">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal3">Nueva carpeta</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Nuevo registro</button>
                <!--                <a href="javascript:;" class="collapse" data-original-title="" title="">
                                </a>-->
                <!--                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                                </a>
                                <a href="javascript:;" class="reload" data-original-title="" title="">
                                </a>-->
                <!--                <a href="javascript:;" class="remove" data-original-title="" title="">
                                </a>-->
            </div>
        </div>
        <div class="portlet-body">
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
                    <button type="button" class="btn btn-danger">Limpiar</button>
                    <button type="button" class="btn btn-success" id="consultar">Consultar</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table class="table table-bordered table-hover" id="datatable_ajax">
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
            </div>
        </div>
    </div>
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
    jQuery(document).ready(function () {
        TableAjax.init();

    });

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

    var TableAjax = function () {

        var initPickers = function () {
            //init date pickers
            $('.date-picker').datepicker({
                rtl: Metronic.isRTL(),
                autoclose: true
            });
        }

        var handleRecords = function () {

            var grid = new Datatable();

            grid.init({
                src: $("#datatable_ajax"),
                onSuccess: function (grid) {
                    // execute some code after table records loaded
                },
                onError: function (grid) {
                    // execute some code on network or other general error  
                },
                onDataLoad: function (grid) {
                    // execute some code on ajax data load
                },
                loadingMessage: 'Cargando...',
                dataTable: { // here you can define a typical datatable settings from http://datatables.net/usage/options 

                    // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                    // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/scripts/datatable.js). 
                    // So when dropdowns used the scrollable div should be removed. 
                    //"dom": "<'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'<'table-group-actions pull-right'>>r>t<'row'<'col-md-8 col-sm-12'pli><'col-md-4 col-sm-12'>>",

                    "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

                    "lengthMenu": [
                        [10, 20, 50, 100, 150, -1],
                        [10, 20, 50, 100, 150, "All"] // change per page values here
                    ],
                    "pageLength": 10, // default record count per page
                    "ajax": {
                        "url": "<?php echo base_url("index.php/tareas/listadoregistrotable") ?>", // ajax source
                    },
                    "order": [
                        [1, "asc"]
                    ]// set first column as a default sort by asc
                }
            });

            // handle group actionsubmit button click
            grid.getTableWrapper().on('click', '.table-group-action-submit', function (e) {
                e.preventDefault();
                var action = $(".table-group-action-input", grid.getTableWrapper());
                if (action.val() != "" && grid.getSelectedRowsCount() > 0) {
                    grid.setAjaxParam("customActionType", "group_action");
                    grid.setAjaxParam("customActionName", action.val());
                    grid.setAjaxParam("id", grid.getSelectedRows());
                    grid.getDataTable().ajax.reload();
                    grid.clearAjaxParams();
                } else if (action.val() == "") {
                    Metronic.alert({
                        type: 'danger',
                        icon: 'warning',
                        message: 'Please select an action',
                        container: grid.getTableWrapper(),
                        place: 'prepend'
                    });
                } else if (grid.getSelectedRowsCount() === 0) {
                    Metronic.alert({
                        type: 'danger',
                        icon: 'warning',
                        message: 'No record selected',
                        container: grid.getTableWrapper(),
                        place: 'prepend'
                    });
                }
            });
        }

        return {
            //main function to initiate the module
            init: function () {

                initPickers();
                handleRecords();
            }

        };

    }();

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