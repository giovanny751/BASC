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
                    <label for="cedula">Tipo</label><input type="text" name="cedula" id="cedula" class="form-control">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="nombre">Dimensión 1</label><input type="text" name="nombre" id="nombre" class="form-control">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="form-group">
                    <label for="apellido">Dimensión 2</label><input type="text" name="apellido" id="apellido" class="form-control">
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

</script>