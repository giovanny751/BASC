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
            <a href="#">Lista Tipos Documento</a>
        </li>
    </ul>
</div>
<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i> TIPOS DE DOCUMENTO    </h5>
</div>
<div class='well'>
<form action="<?php echo base_url('index.php/').'/Tipo_documento/consult_tipo_documento'; ?>" method="post" >
    <div class="row">
                    <div class="col-md-6">
                    <label for="tipDoc_Descripcion">
                    Tipo de documento                        </label>
                </div>
                <div class="col-md-6">
                    
                                        <script>
                        $('document').ready(function() {
                            $('#tipDoc_Descripcion').autocomplete({
                                source: "<?php echo base_url("index.php//Tipo_documento/autocomplete_tipDoc_Descripcion") ?>",
                                minLength: 3
                            });
                        });
                    </script>
                                            <input type="text" value="<?php echo (isset($post['tipDoc_Descripcion'])?$post['tipDoc_Descripcion']:'' ) ?>" class="form-control obligatorio  " id="tipDoc_Descripcion" name="tipDoc_Descripcion">
                                            <br>
                </div>

                </div>
    <button class="btn btn-success">Consultar</button>
</form>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                                    <th>Tipo de documento</th>
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
        <a href="<?php echo base_url()."/index.php/Tipo_documento/index" ?>" class="btn btn-success" >Nuevo</a>
    </div>
</div>
<?php  if(isset($campo)){ ?>
<form action="<?php echo base_url('index.php/')."/Tipo_documento/edit_tipo_documento"; ?>" method="post" id="editar">
    <input type="hidden" name="<?php echo $campo ?>" id="<?php echo $campo ?>2">
    <input type="hidden" name="campo" value="<?php echo $campo ?>">
</form>
<form action="<?php echo base_url('index.php/')."/Tipo_documento/delete_tipo_documento"; ?>" method="post" id="delete">
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
