<div class="widgetTitle">
    <h5>
        <i class="glyphicon glyphicon-ok"></i>CREACIÓN INDICADOR
    </h5>
</div>
<div class='well'>
    <div class="row">
        <form method="post" id="indicador">
            <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6 ">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="indicador">Indicador</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">    
                        <input type="text" name="indicador" id="indicador" class="form-control">
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
                        <label for="mide">Que Mide</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <select name="mide" id="mide" class="form-control">
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
                        <label for="frecuencia">Frecuencia</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <input type="text" name="frecuencia" id="frecuencia" class="form-control">
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="cargo">Cargo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <select name="cargo" id="cargo" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="cargo">Empleado</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <select name="empleado" id="empleado" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="minimo">Valor mínimo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <input type="text" name="minimo" id="minimo" class="form-control">
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="maximo">Valor máximo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <input type="text" name="maximo" id="maximo" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sx-6 col-sm-6 ">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="estado">Estado</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <select name="estado" id="estado" class="form-control">
                            <option value="">::Seleccionar::</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="objetivo">Objetivo</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <textarea id="objetivo" name="objetivo" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sx-4 col-sm-4 ">
                        <label for="observaciones">Observaciones</label>
                    </div>    
                    <div class="col-lg-8 col-md-8 col-sx-8 col-sm-8 ">   
                        <textarea id="observaciones" name="observaciones" class="form-control"></textarea>
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

        $.post("<?php echo base_url("index.php/indicador/guardarindicador") ?>"
                , $("#riesgos").serialize()
                ).done(function (msg) {

        })
                .fail(function (msg) {

                });

    });
</script> 