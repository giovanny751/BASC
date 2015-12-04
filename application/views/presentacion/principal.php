<div class="col-md-12">
    <div class="portlet green-meadow box">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>Graficas 
            </div>
            <div class="tools">
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