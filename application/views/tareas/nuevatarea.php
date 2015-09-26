<div class="widgetTitle" >
    <h5>
        <i class="glyphicon glyphicon-ok"></i>NUEVA TAREA
    </h5>
</div>
<div class='well'>
    <form method="post" id="f8">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="nombre"><span class="campoobligatorio">*</span>Nombre</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="nombre" id="nombre" class="form-control obligatorio" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="plan"><span class="campoobligatorio">*</span>Plan</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="plan" id="plan" class="form-control obligatorio" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="actividad">Actividad</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="actividad" id="actividad" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="sucursal">Sucursal (Dim1)</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="sucursal" id="sucursal" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="areadetrabajo">Area de Trabajo (Dim2)</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="areadetrabajo" id="areadetrabajo" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="tipo"><span class="campoobligatorio">*</span>Tipo</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="tipo" id="tipo" class="form-control obligatorio" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="articulosnorma">Articulos Norma</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="articulosnorma" id="articulosnorma" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="fechaIncio">Fecha Incio</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="fechaIncio" id="fechaIncio" class="form-control fecha" />
                    </div> 
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="fechafinalizacion">Fecha Finalizacion</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="fechafinalizacion" id="fechafinalizacion" class="form-control fecha" />
                    </div> 
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="costrospresupuestados">Costos Presupuestados</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="costrospresupuestados" id="costrospresupuestados" class="form-control" />
                    </div> 
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="peso">Peso</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="text" name="peso" id="peso" class="form-control" />
                    </div> 
                </div>
                <div class="alert alert-info" role="alert" style='margin-top:10px;font-weight: bold;text-align: center;'>Responsable</div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="cargo">Cargo</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="cargo" id="cargo" class="form-control">
                            <option value="">::Seleccionar::</option>
                            <?php foreach ($cargo as $c) { ?>
                                <option value="<?php echo $c->car_id ?>"><?php echo $c->car_nombre ?></option> 
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="cargo">Nombre</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="cargo" id="cargo" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="cargo">Tarea Padre</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name="cargo" id="cargo" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label for="estado">Estado</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <select name="estado" id="estado" class="form-control" >
                                    <option value="">::Seleccionar::</option>
                                    <?php foreach ($estados as $e) { ?>
                                        <option value="<?php echo $e->est_id ?>"><?php echo $e->est_nombre ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label for="fechacreacion">Fecha Creación</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <input type="text" name="fechacreacion" id="fechacreacion" class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <label for="fechacreacion">Fecha ultima modificación</label>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <input type="text" name="fechaultimamod" id="fechaultimamod" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <p class="alert alert-info"  style='margin-top:10px;font-weight: bold;text-align: center;'>Riesgos</p>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="clasificacionriesgo">Clasificación de riesgo</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name='clasificacionriesgo' id='clasificacionriesgo' class="form-control">
                            <option value=''>::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="tiposriesgos">Tipos de Riesgos</label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <select name='tiposriesgos' id='tiposriesgos' class="form-control">
                            <option value=''>::Seleccionar::</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="text-align:center;margin-top: 28px;">
            <center><button type="button" id="guardartarea" class="btn btn-success">Guardar</button></center>
        </div>
    </form>
</div>
<script>
    $('#guardartarea').click(function () {

        $.post("<?php echo base_url("index.php/tareas/guardartarea") ?>",
                $('#f8').serialize()
                ).done(function (msg) {

        }).fail(function (msg) {

        });

    });
</script>    