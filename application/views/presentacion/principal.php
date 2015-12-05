<div class="col-md-12">
    <div class="portlet green-meadow box">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>Graficas 
            </div>
            <div class="tools">
                <form action="<?php echo base_url('index.php/presentacion/principal'); ?>" method="post" id="form1">
                    <?php echo lista("pla_id", "pla_id", "form-control ", "planes", "pla_id", "pla_nombre", $id_plan, array(), /* readOnly? */ false); ?> 
                </form>

                <?php
                $tipo_t = "";
                $valores_t = "";
                foreach ($tipo as $t):
                    $tipo_t.='"' . $t->tip_tipo . '",';
                    $valores_t.='' . $t->numerotareas . ',';
                endforeach;
                ?> 
            </div>
        </div>
        <div class="portlet-body">

        </div>
    </div>
</div> 
<script type="text/javascript" src="<?php echo base_url('js/graficas/Chart.min.js') ?>"></script>
<div class="grafica"></div>
<center>
    <div style="width:35%">
        <canvas id="canvas" height="450" width="450"></canvas>
    </div>    
</center>

<div class="table-responsive">
    <div id="grafica_granf">
        <form id="formulario_grant">
            <input type="text" id="fecha_maxima" name="fecha_maxima" value="<?php echo (isset($plan_grant[0][0]->fecha_maxima) ? $plan_grant[0][0]->fecha_maxima : '') ?>">
            <input type="text" id="fecha_minima" name="fecha_minima" value="<?php echo (isset($plan_grant[0][0]->fecha_minima) ? $plan_grant[0][0]->fecha_minima : '') ?>">
            <?php foreach ($plan_grant[1] as $value) { ?>
                <input type="text" id="tar_fechaInicio" name="tar_fechaInicio[]" value="<?php echo $value->tar_fechaInicio ?>">        
                <input type="text" id="tar_nombre" name="tar_nombre[]" value="<?php echo $value->tar_nombre ?>">        
                <input type="text" id="diferencia" name="diferencia[]" value="<?php echo $value->diferencia ?>">        
                <input type="text" id="tar_fechaFinalizacion" name="tar_fechaFinalizacion[]" value="<?php echo $value->tar_fechaFinalizacion ?>">        
                <input type="text" id="ultimafechacreacion" name="ultimafechacreacion[]" value="<?php echo $value->ultimafechacreacion ?>">        
                <input type="text" id="tar_id" name="tar_id[]" value="<?php echo $value->tar_id ?>">        
                <input type="text" id="progreso" name="progreso[]" value="<?php echo $value->progreso ?>">        
            <?php } ?>                                        
        </form>
    </div>
</div>

<div id="torta1">
    <?php
//    echo "<pre>";
//    print_r($tareas);
//    echo "</pre>";
    $datos_tareas = array();
    foreach ($tareas as $key => $tar) {
        if (!isset($datos_tareas[$tar->tip_tipo]))
            $datos_tareas[$tar->tip_tipo] = $tar->progreso . " ||| ";
        else
            $datos_tareas[$tar->tip_tipo].=$tar->progreso . " ||| ";
    }
    $tipo_t = "";
    $valores_t = "";
    foreach ($datos_tareas as $key => $value) {
        $datos = explode(' ||| ', $value);
        $cantidad = count($datos);
        $datos_tareas[$key] = 0;
        $j = 0;
        for ($i = 0; $i < $cantidad; $i++) {
            if ($datos[$i] == 100) {
                $datos_tareas[$key]+=100;
                $j++;
            }
        }
        $datos_tareas[$key] = ($datos_tareas[$key] * 100) / ($cantidad * 100);
        $tipo_t.='"' . $key . '",';
        $valores_t.='' . $datos_tareas[$key] . ',';
    }


//    print_y($datos_tareas);
    ?>
</div>
<div id="torta2">

</div>
<div id="torta3">

</div>

<script>
    $('#pla_id').change(function() {
        if($(this).val()=='')
            return false;
        $('#form1').submit();
    })

<?php if (count($datos_tareas)) { ?>
        var radarChartData = {
            labels: [<?php echo $tipo_t; ?>],
            datasets: [
                {
                    label: "General",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [<?php echo $valores_t; ?>]
                },
            ]
        };
        window.onload = function() {
            window.myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData, {
                responsive: true
            });
        }
<?php } ?>
    ///////////////////////////grant////////////////////
    var url = '<?php echo base_url("grant/index.php") ?>';
    $.post(url, $('#formulario_grant').serialize())
            .done(function(msg) {
                var imagen = '<img src="<?php echo base_url("grant") ?>/imagenprueba.jpg">';
                $('#grafica_granf').html(imagen)
            })
            .fail(function() {

            })
</script>