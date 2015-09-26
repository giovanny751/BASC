<div class="widgetTitle">
    <h5>
        <i class="glyphicon glyphicon-ok"></i>CREACIÓN INDICADOR
    </h5>
</div>
<div class='well'>
    <div class="row">
        <form method="post" id="riesgo">
            <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6 ">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="descripcion">Descripción</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 "> 
                        <input type="text" name="descripcion" id="descripcion" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="categoria">Categoría</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="tipo">Tipo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="dimensionuno">Dimensión 1</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select name="dimensionuno" id="dimensionuno" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="dimensiondos">Dimensión 2</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select name="dimensiondos" id="dimensiondos" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="zona">Lugar/Zona</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <input type="text" name="zona" id="zona" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="requisito">Requisito legal asociado</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <input type="text" name="requisito" id="requisito" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="observaciones">Observaciones</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <textarea name="observaciones" id="observaciones" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="estado">Estado aceptacion del riesgo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <select name="estado" id="estado" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="color">Color</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">
                        <input type="text" name="color" id="color" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6 ">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="actividades">Actividades</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <textarea name="actividades" id="actividades" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="cargos">Cargos</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 "> 
                        <select name="cargos" id="cargos" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="fecha">Fecha</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 "> 
                        <input type="text" name="fecha" id="fecha" class="form-control">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="row" style="text-align:center">
        <button type="button" class="btn btn-success" id="guardar">Guardar</button>
    </div>
</div>
<script>
    $("#guardar").click(function () {

        $.post("<?php echo base_url("index.php/administrativo/guardarriesgo") ?>"
                , $("#riesgos").serialize()
                ).done(function (msg) {

        })
                .fail(function (msg) {

                });

    });
</script>    