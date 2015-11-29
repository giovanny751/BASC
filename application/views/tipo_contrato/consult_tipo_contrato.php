<a href="<?php echo base_url()."/index.php/Tipo_contrato/index" ?>">
<img src="<?php echo base_url('img/nueva_carpeta.png')?>" width="50px" title="Nuevo Tipo de Contrato">
</a>
<div class="row">
    <div class="col-md-12">
        <div class="tituloCuerpo">
            <span class="txtTitulo">TIPO DE CONTRATO</span>
        </div>
    </div>
</div>
<div class='cuerpoContenido'>
<form action="<?php echo base_url('index.php/').'/Tipo_contrato/consult_tipo_contrato'; ?>" method="post" >
    <div class="row">
                    <div class="col-md-12">
                    <label for="TipCon_Descripcion">
                    Tipo de contrato                        </label>
                </div>
                <div class="col-md-12">
                    
                                        <script>
                        $('document').ready(function() {
                            $('#TipCon_Descripcion').autocomplete({
                                source: "<?php echo base_url("index.php//Tipo_contrato/autocomplete_TipCon_Descripcion") ?>",
                                minLength: 3
                            });
                        });
                    </script>
                                            <input type="text" value="<?php echo (isset($post['TipCon_Descripcion'])?$post['TipCon_Descripcion']:'' ) ?>" class="form-control obligatorio  " id="TipCon_Descripcion" name="TipCon_Descripcion">
                                            <br>
                </div>

                </div>
    <button class="btn btn-success">Consultar</button>
</form>

<div class="row">
    <div class="col-md-12">
        <table class="tablesst">
            <thead>
                                    <th>N°</th>
                                    <th>Tipo de contrato</th>
                            <th>Acción</th>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $key => $value) {
                echo "<tr>";
                    $i=0;

                    foreach ($value as $key2 => $value2) {
                    echo "<td>".$value->$key2."</td>";
                    if($i==0){
                    $campo=$key2;
                    $valor="'".$value->$key2."'";
                    }
                    $i++;
                    }
                    echo "<td>"
                        . '<a href="javascript:" class="btn btn-success" onclick="editar('.$valor.')"><i class="fa fa-pencil"></i></a>'
                        . '<a href="javascript:" class="btn btn-danger" onclick="delete_('.$valor.')"><i class="fa fa-trash-o"></i></a>'
                        . "</td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
</div>
<!--<div class="row">
    <div class="col-md-12" style="float:right">
        <a href="<?php echo base_url()."/index.php/Tipo_contrato/index" ?>" class="btn btn-success" >Nuevo</a>
    </div>
</div>-->
<?php  if(isset($campo)){ ?>
<form action="<?php echo base_url('index.php/')."/Tipo_contrato/edit_tipo_contrato"; ?>" method="post" id="editar">
    <input type="hidden" name="<?php echo $campo ?>" id="<?php echo $campo ?>2">
    <input type="hidden" name="campo" value="<?php echo $campo ?>">
</form>
<form action="<?php echo base_url('index.php/')."/Tipo_contrato/delete_tipo_contrato"; ?>" method="post" id="delete">
    <input type="hidden" name="<?php echo $campo ?>" id="<?php echo $campo ?>3">
    <input type="hidden" name="campo" value="<?php echo $campo ?>">
</form>
<?php } ?>
<script>
    function editar(num) {
        $('#<?php echo $campo ?>2').val(num);
        $('#editar').submit();
    }
    function delete_(num) {
        var r=confirm('Confirma que desea eliminar el registro');
        if(r==false){
            return false;
        }
        $('#<?php echo $campo ?>3').val(num);
        $('#delete').submit();
    }

    $('body').delegate('.number', 'keypress', function (tecla) {
        if (tecla.charCode > 0 && tecla.charCode < 48 || tecla.charCode > 57)
            return false;
    });
    $('.fecha').datepicker({
        rtl: Metronic.isRTL(),
        autoclose: true
    });
</script>
