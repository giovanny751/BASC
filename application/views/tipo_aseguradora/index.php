<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i> TIPO ASEGURADORA    </h5>
</div>
<div class='well'>
    <form action="<?php echo base_url('index.php/') . "/Tipo_aseguradora/save_tipo_aseguradora"; ?>" method="post" onsubmit="return campos()"  enctype="multipart/form-data">
        <div class="row">


            <div class="col-md-3">
                <label for="TipAse_Nombre">
                    *                             Tipo aseguradora                        </label>
            </div>
            <div class="col-md-3">
                <input type="text" value="<?php echo (isset($datos[0]->TipAse_Nombre) ? $datos[0]->TipAse_Nombre : '' ) ?>" class=" form-control obligatorio  " id="TipAse_Nombre" name="TipAse_Nombre">


                <br>
            </div>



            <div class="col-md-3">
                <label for="ase_id">
                    *                             Aseguradora                        </label>
            </div>
            <div class="col-md-3">
                <select class="form-control" id="ase_id" name="ase_id">
                    <option value="">::Seleccionar::</option>
                    <?php foreach($aseguradoras as $a){ ?>
                    <option <?php echo (!empty($datos[0]->ase_id) && $a->ase_id == $datos[0]->ase_id )?"selected":"";?>  value="<?php echo $a->ase_id ?>"><?php echo $a->ase_nombre ?></option>
                    <?php } ?>
                </select>
                <!--<input type="text" value="<?php echo (isset($datos[0]->ase_id) ? $datos[0]->ase_id : '' ) ?>" class=" form-control obligatorio  " id="ase_id" name="ase_id">-->
                <br>
            </div>

        </div>
        <?php if (isset($post['campo'])) { ?>
            <input type="hidden" name="<?php echo $post['campo'] ?>" value="<?php echo $post[$post['campo']] ?>">
            <input type="hidden" name="campo" value="<?php echo $post['campo'] ?>">
        <?php } ?>
        <div class="row">
            <span id="boton_guardar">
                <button class="btn btn-success" >Guardar</button> 
                <input class="btn btn-success" type="reset" value="Limpiar">
                <a href="<?php echo base_url('index.php') . "/Tipo_aseguradora/consult_tipo_aseguradora" ?>" class="btn btn-success">Listado </a>
            </span>
            <span id="boton_cargar" style="display: none">
                <h2>Cargando ...</h2>
            </span>
        </div>
        <div class="row"><div style="float: right"><b>Los campos en * son obligatorios</b></div></div>
    </form>
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
    $('.fecha').datepicker({dateFormat: 'yy-mm-dd'});


</script>
