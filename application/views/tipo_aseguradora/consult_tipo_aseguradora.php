<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i> TIPO ASEGURADORA    </h5>
</div>
<div class='well'>
<form action="<?php echo base_url('index.php/').'/Tipo_aseguradora/consult_tipo_aseguradora'; ?>" method="post" >
    <div class="row">
                    <div class="col-md-3">
                    <label for="TipAse_Nombre">
                    Tipo aseguradora                        </label>
                </div>
                <div class="col-md-3">
                    
                                        <script>
                        $('document').ready(function() {
                            $('#TipAse_Nombre').autocomplete({
                                source: "<?php echo base_url("index.php//Tipo_aseguradora/autocomplete_TipAse_Nombre") ?>",
                                minLength: 3
                            });
                        });
                    </script>
                                            <input type="text" value="<?php echo (isset($post['TipAse_Nombre'])?$post['TipAse_Nombre']:'' ) ?>" class="form-control obligatorio  " id="TipAse_Nombre" name="TipAse_Nombre">
                                            <br>
                </div>

                            <div class="col-md-3">
                    <label for="ase_id">
                    Aseguradora                        </label>
                </div>
                <div class="col-md-3">
                    
                                        <script>
                        $('document').ready(function() {
                            $('#ase_id').autocomplete({
                                source: "<?php echo base_url("index.php//Tipo_aseguradora/autocomplete_ase_id") ?>",
                                minLength: 3
                            });
                        });
                    </script>
                                            <input type="text" value="<?php echo (isset($post['ase_id'])?$post['ase_id']:'' ) ?>" class="form-control obligatorio  " id="ase_id" name="ase_id">
                                            <br>
                </div>

                </div>
    <button class="btn btn-success">Consultar</button>
</form>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                                    <th>Tipo aseguradora</th>
                                    <th>Aseguradora</th>
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
<div class="row">
    <div class="col-md-12" style="float:right">
        <a href="<?php echo base_url()."/index.php/Tipo_aseguradora/index" ?>" class="btn btn-success" >Nuevo</a>
    </div>
</div>
<?php  if(isset($campo)){ ?>
<form action="<?php echo base_url('index.php/')."/Tipo_aseguradora/edit_tipo_aseguradora"; ?>" method="post" id="editar">
    <input type="hidden" name="<?php echo $campo ?>" id="<?php echo $campo ?>2">
    <input type="hidden" name="campo" value="<?php echo $campo ?>">
</form>
<form action="<?php echo base_url('index.php/')."/Tipo_aseguradora/delete_tipo_aseguradora"; ?>" method="post" id="delete">
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
