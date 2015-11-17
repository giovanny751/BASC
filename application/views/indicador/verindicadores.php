<script type="text/javascript">
    $(".menINDICADORES").addClass("active open");
    $(".subMenLISTADO_INDICADORES").addClass("active");
</script>
<div class="page-bar" style="background-color: transparent !important;">
    <ul class="page-breadcrumb">
        <li class="devolver">
            <i class="fa fa-home"></i>
            <a href="<?php echo base_url("index.php/presentacion/principal") ?>">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Indicadores</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Listado Indicadores</a>
        </li>
    </ul>
</div>
<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>VER INDICADORES
    </h5>
</div>
<div class='well'>
    <form method="post" id="f4">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control">
                        <option value="">::Seleccionar::</option>
                        <?php foreach($tipo as $ti) {?>
                            <option value="<?php echo $ti->tip_id ?>"><?php echo $ti->tip_tipo ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="dimensionUno"><?php echo $empresa[0]->Dim_id ?></label>
                    <select name="dimensionUno" id="dimensionUno" class="form-control">
                        <option value="">::Seleccionar::</option>
                        <?php foreach($dimension as $d1) {?>
                            <option value="<?php echo $d1->dim_id ?>"><?php echo $d1->dim_descripcion ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="dimesionDos"><?php echo $empresa[0]->Dimdos_id ?></label>
                    <select name="dimesionDos" id="dimesionDos" class="form-control">
                        <option value="">::Seleccionar::</option>
                        <?php foreach($dimension2 as $d2) {?>
                            <option value="<?php echo $d2->dim_id ?>"><?php echo $d2->dim_descripcion ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align: center">
                <div class="form-group">
                    <label>&nbsp;</label><button type="button" class="btn btn-danger" id="limpiar">Limpiar</button>
                    <label>&nbsp;</label><button type="button" class="btn btn-success" id="consultar">Consultar</button>
                </div>
            </div>
        </div>
    </form>
    <hr>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
            <th>Tipo</th>
            <th>Indicador</th>
            <th>Dimensión</th>
            <th>Dimensión 2</th>
            <th>Que miede</th>
            <th>Frecuencia</th>
            <th>Valor Mínimo</th>
            <th>Valor Máximo</th>
            <th>Responsable</th>
            <th>Opciones</th>
            </thead>
            <tbody id="bodyIndicador">
            </tbody>
        </table>
    </div>
</div>
<form method="post" id="fEnvio" action="<?php echo base_url("index.php/indicador/nuevoindicador") ?>">
    <input type="hidden" name="ind_id" id="ind_id">
</form>
<script>
    $("body").on("click",".modificar",function(){
        $('#ind_id').val($(this).attr('ind_id'));
        $('#fEnvio').submit();
    });
    $("body").on("click","#limpiar",function(){
        $('select,input').val("");
    });
    $("body").on("click","#consultar",function(){
        var datos = $("#f4").serialize();
        var url = "<?php echo base_url("index.php/indicador/consultarindicador") ?>";
        $.post(url,datos)
                .done(function(msg){
                    var tbody = "";
                    $('#bodyIndicador *').remove();
                    $.each(msg,function(indice,val){
                        tbody += "<tr>";
                        tbody += "<td>"+val.tip_tipo+"</td>";
                        tbody += "<td>"+val.ind_indicador+"</td>";
                        tbody += "<td>"+val.uno+"</td>";
                        tbody += "<td>"+val.dos+"</td>";
                        tbody += "<td>"+val.ind_mide+"</td>";
                        tbody += "<td>"+val.ind_frecuencia+"</td>";
                        tbody += "<td>"+val.ind_minimo+"</td>";
                        tbody += "<td>"+val.ind_maximo+"</td>";
                        tbody += "<td>"+val.nombre+"</td>";
                        tbody += '<td><i class="fa fa-pencil-square-o fa-2x modificar btn btn-info" title="Modificar" ind_id="'+ val.ind_id+'"></i></td>'; 
                        tbody += "</tr>";
                    })
                    $('#bodyIndicador').append(tbody);
                    alerta("verde","Exito al consultar");
                })
                .fail(function(){
                    alerta("rojo","Error al consultar");
                });
        
    });
</script>