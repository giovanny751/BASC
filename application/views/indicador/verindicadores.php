<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>VER INDICADORES
    </h5>
</div>
<div class='well'>
    <div class="row">
        <form method="post" id="frmlistaindicadores">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="tipo">Tipo</label><input type="text" name="tipo" id="tipo" class="form-control">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="dimension">Dimensión 1</label><input type="text" name="dimension" id="dimension" class="form-control">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="dimensiondos">Dimensión 2</label><input type="text" name="dimensiondos" id="dimensiondos" class="form-control">
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align: center">
            <div class="form-group">
                <label>&nbsp;</label><button type="button" class="btn btn-danger limpiar">Limpiar</button>
                <label>&nbsp;</label><button type="button" class="btn btn-success" id="consultar">Consultar</button>
            </div>
        </div>
    </div>
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
            <tbody id="bodyuser">
            </tbody>
        </table>
    </div>    
</div>
<script>
    $('#consultar').click(function () {

        $.post(
                "<?php echo base_url("index.php/indicador/listaindicadores") ?>",
                $('#frmlistaindicadores').serialize()
        ).done(function(msg){
            $('#bodyuser *').remove();
            var fila = "";
            $.each(msg,function(key,val){
                fila += "<tr>";
                fila += "<td>"+val.tip_tipo+"</td>";
                fila += "<td>"+val.ind_indicador+"</td>";
                fila += "<td>"+val.uno+"</td>";
                fila += "<td>"+val.dos+"</td>";
                fila += "<td>"+val.ind_mide+"</td>";
                fila += "<td>"+val.ind_frecuencia+"</td>";
                fila += "<td>"+val.ind_minimo+"</td>";
                fila += "<td>"+val.ind_maximo+"</td>";
                fila += "<td>"+val.nombre+"</td>";
                fila += "<td></td>";
                fila += "</tr>";
            });
            $('#bodyuser').append(fila);
            alerta("verde","Resultados exitosos");
        }).fail(function(msg){
            alerta("rojo","Por favor comunicarse con el administrador")
        });

    });
</script>