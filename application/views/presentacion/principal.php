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
//    echo "<pre>";
//    print_r($tareas);
//    echo "</pre>";
                ///grafica radar
                $datos_tareas = array();
                // torta 1
                $tarta1 = array();
                $tarta11 = array();
                $total_tareas = 0;
                foreach ($tareas as $key => $tar) {
                    $total_tareas++;
                    if (!isset($datos_tareas[$tar->tip_tipo]))
                        $datos_tareas[$tar->tip_tipo] = $tar->progreso . " ||| ";
                    else
                        $datos_tareas[$tar->tip_tipo].=$tar->progreso . " ||| ";

                    if (isset($tarta1[$tar->rieCla_id]))
                        $tarta1[$tar->rieCla_id]+=1;
                    else
                        $tarta1[$tar->rieCla_id] = 1;

                    if (isset($tarta11[$tar->tipRie_id]))
                        $tarta11[$tar->tipRie_id]+=1;
                    else
                        $tarta11[$tar->tipRie_id] = 1;
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
        </div>
        <div class="portlet-body">

        </div>
    </div>
</div> 
<script type="text/javascript" src="<?php echo base_url('js/graficas/Chart.min.js') ?>"></script>
<div class="grafica"></div>
<div class="row">
    <div class="col-md-12">
        <br><p>
        <center><h3>Grafico de Radar</h3></center>
    </div>
</div>
<center>
    <div style="width:35%">
        <canvas id="canvas" height="450" width="450"></canvas>
    </div>    
</center>
<div class="row">
    <div class="col-md-12">
        <br><p>
        <center><h3>Grafico de Gantt</h3></center>
    </div>
</div>
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
    <div class="row">
        <div class="col-md-12">
            <br><p>
            <center><h3>Grafias Circulares</h3></center>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            Clasificación de riesgo
        </div>
        <div class="col-md-6">
            Tipos de Riesgos
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <canvas id="countries" width="100%" ></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="countries2" width="100%" ></canvas>
        </div>
    </div>
</div>
<div id="torta2">

</div>
<div id="torta3">

</div>

<script>
            $('#pla_id').change(function() {
    if ($(this).val() == '')
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

            ///////////////////////////////////torta 1////////////////////////
            var pieData = [
<?php
$colores = array("#878BB6", "#4ACAB4", "#FF8153", "#FFEA88", "#CCCCCC");
$i = 0;
foreach ($tarta1 as $key => $value) {
    $nombre = @Presentacion::obtener_clasificacion($key);
    ?>
                {
                value: <?php echo ceil(($value * 100) / $total_tareas) ?>,
                        color: "<?php echo $colores[$i];
    $i++ ?>",
                        label: "<?php echo $nombre; ?>"
                },
<?php } ?>

//            {
//            value: 40,
//                    color: "#4ACAB4",
//                    label: "Red"
//            },
//            {
//            value: 10,
//                    color: "#FF8153",
//                    label: "Red"
//            },
//            {
//            value: 30,
//                    color: "#FFEA88",
//                    label: "Red"
//            }
            ];
            var pieOptions = {
            segmentShowStroke: false,
                    animateScale: true
            }
    var countries = document.getElementById("countries").getContext("2d");
            new Chart(countries).Pie(pieData, pieOptions);
            var pieData = [
<?php
$i = 0;
foreach ($tarta11 as $key => $value) {
    $nombre = @Presentacion::obtener_tipo($key);
    ?>
                {
                value: <?php echo ceil(($value * 100) / $total_tareas) ?>,
                        color: "<?php echo $colores[$i];
    $i++ ?>",
                        label: "<?php echo $nombre; ?>"
                },
<?php } ?>

            ];
            var pieOptions = {
            segmentShowStroke: false,
                    animateScale: true
            }
    var countries = document.getElementById("countries2").getContext("2d");
            new Chart(countries).Pie(pieData, pieOptions);

</script>