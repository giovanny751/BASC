<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>ACTIVIDADES
    </h5>
</div>
<div class='well'>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
            <th>Fecha inicio</th>
            <th>Fecha Fin</th>
            <th>Presupuesto</th>
            <th>Descripción</th>
            <th>Opciones</th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <i class="fa fa-times fa-2x eliminar btn btn-danger" title="Eliminar" emp_id="'+val.emp_id+'"></i>
                        <i class="fa fa-pencil-square-o fa-2x modificar btn btn-info" title="Modificar"  emp_id="'+val.emp_id+'"  data-toggle="modal" data-target="#myModal">
                        </i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row" style="text-align: center">
        <a href="<?php echo base_url("index.php/tareas/actividadhijo") ?>"><button type="button" class="btn btn-info">Crear actividad padre</button></a>
        <a href="<?php echo base_url("index.php/tareas/actividadhijo") ?>"><button type="button" class="btn btn-info">Crear actividad hijo</button></a>
    </div>
</div>