<!-- Colorear Menu -->
<script type="text/javascript">
        $(".menDOCUMENTOS").addClass("active open");
        $(".subMenTIPOS_DE_DOCUMENTOS").addClass("active");
</script>
<div class="page-bar" style="background-color: transparent !important;">
    <ul class="page-breadcrumb">
        <li class="devolver">
            <i class="fa fa-home"></i>
            <a href="<?php echo base_url("index.php/presentacion/principal") ?>">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Documentos</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Tipos Documento</a>
        </li>
    </ul>
</div>
<div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <div class="portlet green-meadow box">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>TIPOS DE DOCUMENTO
            </div>
            <div class="tools">
                <span id="boton_guardar">
                    <button class="btn btn-success" id="btnguardar">Guardar</button> 
                    <button class="btn btn-danger limpiar" type="reset" >Limpiar</button>
                    <a href="<?php echo base_url('index.php') . "/Tipo_documento/consult_tipo_documento" ?>" class="btn btn-default">Listado </a>
                </span>
            </div>
        </div>
        <div class="portlet-body">
            <form action="<?php echo base_url('index.php/') . "/Tipo_documento/save_tipo_documento"; ?>" method="post" onsubmit="return campos()"  enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-12">
                        <label for="tipDoc_Descripcion" >
                            * Tipo de documento                        
                        </label>
                        <input type="text" value="<?php echo (isset($datos[0]->tipDoc_Descripcion) ? $datos[0]->tipDoc_Descripcion : '' ) ?>" class=" form-control obligatorio  " id="tipDoc_Descripcion" name="tipDoc_Descripcion">
                    </div>
                </div>
                <div class="col-md-12" style="color:black;text-align:right;"><b>Los campos en * son obligatorios</b></div>
                <?php if (isset($post['campo'])) { ?>
                    <input type="hidden" name="<?php echo $post['campo'] ?>" value="<?php echo $post[$post['campo']] ?>">
                    <input type="hidden" name="campo" value="<?php echo $post['campo'] ?>">
                <?php } ?>
                <div class="row">
                    <span id="boton_cargar" style="display: none">
                        <h2>Cargando ...</h2>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#btnguardar').click(function () {
        var tipDoc_Descripcion = $('#tipDoc_Descripcion').val();
        $.post("<?php echo base_url("index.php/tipo_documento/save_tipo_documento") ?>"
                , {tipDoc_Descripcion: tipDoc_Descripcion}
        )
                .done(function (msg) {
                        $('#tipDoc_Descripcion').val("");
                        $('#tipDoc_Descripcion').focus();
                        alerta("verde", "Tipo de contrato guardado correctamente")
                })
                .fail(function (msg) {
                    return false
                });
    });

    function campos() {
        $('input[type="file"]').each(function (key, val) {
            var img = $(this).val();
            if (img != "") {
                var r = (img.indexOf('jpg') != -1) ? '' : ((img.indexOf('png') != -1) ? '' : ((img.indexOf('gif') != -1) ? '' : false))
                if (r === false) {
                    alert('Tipo de archivo no valido');
                    return false;
                }
            }
        });
        if (obligatorio('obligatorio') == false) {
            return false
        } else {
            $('#boton_guardar').hide();
            $('#boton_cargar').show();
            return true;
        }
    }
    $('body').delegate('.number', 'keypress', function (tecla) {
        if (tecla.charCode > 0 && tecla.charCode < 48 || tecla.charCode > 57)
            return false;
    });
    $('.fecha').datepicker({dateFormat: 'yy-mm-dd'});
</script>
