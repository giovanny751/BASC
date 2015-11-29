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
             foreach ($tipo as $t): 
                $costopresupuestado += $t->tar_costopresupuestado;
                $numerotareas += $t->numerotareas; ?>
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
<script>
    $('document').ready(function(){
        
    });
</script>    