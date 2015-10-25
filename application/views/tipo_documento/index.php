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
<div class="col-md-12">
    <div class="portlet green-meadow box">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>TIPOS DE DOCUMENTO
            </div>
            <div class="tools">
                <!--                <a href="javascript:;" class="collapse" data-original-title="" title="">
                                </a>-->
                <!--                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                                </a>
                                <a href="javascript:;" class="reload" data-original-title="" title="">
                                </a>-->
                <!--                <a href="javascript:;" class="remove" data-original-title="" title="">
                                </a>-->
                <span id="boton_guardar">
                    <button class="btn btn-success" >Guardar</button> 
                    <input class="btn btn-danger" type="reset" value="Limpiar">
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
                <?php if (isset($post['campo'])) { ?>
                    <input type="hidden" name="<?php echo $post['campo'] ?>" value="<?php echo $post[$post['campo']] ?>">
                    <input type="hidden" name="campo" value="<?php echo $post['campo'] ?>">
                <?php } ?>
                <div class="row">
                    <span id="boton_cargar" style="display: none">
                        <h2>Cargando ...</h2>
                    </span>
                </div>
                <div class="row"><div style="float: right"><b>Los campos en * son obligatorios</b></div></div>
            </form>
        </div>
    </div>
</div>
<script>
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


</script>
