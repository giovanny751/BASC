<!-- Colorear Menu -->
<script type="text/javascript">
        $(".menORGANIZACIÓN").addClass("active open");
        $(".subMenCONTRATOS").addClass("active");
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
            <a href="#">Tipo Contrato</a>
        </li>
    </ul>
</div>
<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i> TIPO DE CONTRATO    </h5>
</div>
<div class='well'>
    <form action="<?php echo base_url('index.php/') . "/Tipo_contrato/save_tipo_contrato"; ?>" method="post" onsubmit="return campos()"  enctype="multipart/form-data" id="frmcontrato">
        <div class="row">
            <div class="col-md-12">
                <label for="TipCon_Descripcion">
                    *Tipo de contrato                        
                </label>
            </div>
            <div class="col-md-12">
                <input type="text" value="<?php echo (isset($datos[0]->TipCon_Descripcion) ? $datos[0]->TipCon_Descripcion : '' ) ?>" class=" form-control obligatorio  " id="TipCon_Descripcion" name="TipCon_Descripcion">
                <br>
            </div>
        </div>
        <?php if (isset($post['campo'])) { ?>
            <input type="hidden" name="<?php echo $post['campo'] ?>" value="<?php echo $post[$post['campo']] ?>">
            <input type="hidden" name="campo" value="<?php echo $post['campo'] ?>">
        <?php } ?>
    </form>
    <div class="row">
        <span id="boton_guardar">
            <button type="button" class="btn btn-success"  id="btnguardar"  >Guardar</button> 
            <input class="btn btn-success" type="reset" value="Limpiar">
            <a href="<?php echo base_url('index.php') . "/Tipo_contrato/consult_tipo_contrato" ?>" class="btn btn-success">Listado </a>
        </span>
        <span id="boton_cargar" style="display: none">
            <h2>Cargando ...</h2>
        </span>
    </div>
    <div class="row"><div style="float: right"><b>Los campos en * son obligatorios</b></div></div>

</div>
<script>

    $('#btnguardar').click(function () {
        var tipo = $('#TipCon_Descripcion').val();
        $.post("<?php echo base_url("index.php/tipo_contrato/exist") ?>"
                , {tipo: tipo}
        )
                .done(function (msg) {
                    if (msg == 1) {
                        $('#TipCon_Descripcion').val("");
                        $('#TipCon_Descripcion').focus();
                        alerta("amarillo", "Tipo de contrato ya existe en el sistema")
                    } else {
                        $('#frmcontrato').submit();
                    }
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
