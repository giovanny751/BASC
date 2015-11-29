<div class="row">
    <div class="col-md-12">
        <div class="tituloCuerpo">
            <span class="txtTitulo">AVANCE EN EL CICLO PHVA</span>
        </div>
    </div>
</div>
<div class='cuerpoContenido'>
    <table class="tablesst">
        <thead>
        <th>Tipo</th>
        <th># Tareas</th>
        <th>% Avance promedio</th>
        <th>Costo presupuestado</th>
        <th>Costo Real</th>
        </thead>
        <tbody>
            <?php
            $costopresupuestado = 0;
            $numerotareas = 0;
            $tipo_t="";
            $valores_t="";
            foreach ($tipo as $t):
                //datos para la grafiaca
            $tipo_t.='"'.$t->tip_tipo.'",';
            $valores_t.=''.$t->numerotareas.',';
                    // fin de datos para la grafica 
                    
                $costopresupuestado += $t->tar_costopresupuestado;
                $numerotareas += $t->numerotareas;
                ?>
                <tr>
                    <td><?php echo $t->tip_tipo; ?></td>
                    <td style="text-align: center"><?php echo $t->numerotareas; ?></td>
                    <td></td>
                    <td style="text-align:right"><?php echo $t->tar_costopresupuestado; ?></td>
                    <td></td>
                </tr>
<?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td><b>Resumen</b></td>
                <td style="text-align: center"><b><?= $numerotareas ?></b></td>
                <td><b></b></td>
                <td style="text-align:right"><b><?= $costopresupuestado; ?></b></td>
                <td><b></b></td>
            </tr>
        </tfoot>
    </table>
</div>
<script type="text/javascript" src="<?php echo base_url('js/graficas/Chart.min.js') ?>"></script>
<div class="grafica"></div>
<center>
    <div style="width:35%">
        <canvas id="canvas" height="450" width="450"></canvas>
    </div>    
</center>

<script>

    var radarChartData = {
        labels: [<?php echo $tipo_t; ?>],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [<?php echo $valores_t; ?>]
            },
//            {
//                label: "My Second dataset",
//                fillColor: "rgba(151,187,205,0.2)",
//                strokeColor: "rgba(151,187,205,1)",
//                pointColor: "rgba(151,187,205,1)",
//                pointStrokeColor: "#fff",
//                pointHighlightFill: "#fff",
//                pointHighlightStroke: "rgba(151,187,205,1)",
//                data: [28, 48, 40, 19]
//            }
        ]
    };
    window.onload = function() {
        window.myRadar = new Chart(document.getElementById("canvas").getContext("2d")).Radar(radarChartData, {
            responsive: true
        });
    }

</script>    