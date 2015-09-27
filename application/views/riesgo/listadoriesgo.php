<div class="widgetTitle">
    <h5>
        <i class="glyphicon glyphicon-ok"></i>VER RIESGOS
    </h5>
</div>
<div class='well'>
    <div class="row">
        <div class="col-lg-3 col-sm-3 col-md-3">
            <div class="form-group">
                <label for="clasificacion">Clasificación</label>
                <input type="text" class="form-control" name="clasificacion" id="clasificacion">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select class="form-control" name="tipo" id="tipo" >
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($tipo as $t) { ?>
                        <option value="<?php echo $t->tip_id ?>"><?php echo $t->tip_tipo ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3">
            <div class="form-group">
                <label for="dimensionuno">Dimensión 1</label>
                <select class="form-control" name="dimensionuno" id="dimensionuno" >
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($dimension as $d1) { ?>
                        <option value="<?php echo $d1->dim_id ?>"><?php echo $d1->dim_descripcion ?></option>
                    <?php } ?>
                </select> 
            </div>
            <div class="form-group">
                <label for="dimensiondos">Dimensión 2</label>
                <select class="form-control" name="dimensiondos" id="dimensiondos" >
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($dimension2 as $d2) { ?>
                        <option value="<?php echo $d2->dim_id ?>"><?php echo $d2->dim_descripcion ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3">
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <select class="form-control" name="cargo" id="cargo">
                    <option value="">::Seleccionar::</option>
                    <?php foreach ($cargo as $c) { ?>
                        <option value="<?php echo $c->car_id ?>"><?php echo $c->car_nombre ?></option> 
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-danger" style="margin-top: 28px">Limpiar</button>
                <button type="button" class="btn btn-success" style="margin-top: 28px">Buscar</button>
            </div>
        </div>
    </div>
    <div class="row">
        <table class='table table-bordered table-hover'>
            <thead>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Dimensión 1</th>
            <th>Dimensión 2</th>
            <th>Lugar/Zona</th>
            <th>Actividades</th>
            <th>Cargo</th>
            <th>Fecha Creación</th>
            <th>Estado de aceptación</th>
            <th>Tareas(activas)</th>
            </thead>
            <tbody>
                <tr>
                    <td colspan="10"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>