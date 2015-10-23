<div class="col-md-12">
    <div class="portlet green-meadow box">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>NUEVO DOCUMENTO
            </div>
            <div class="tools">
                <!--                <a href="javascript:;" class="collapse" data-original-title="" title="">
                                </a>-->
                <!--                <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title="">
                                </a>
                                <a href="javascript:;" class="reload" data-original-title="" title="">
                                </a>-->
                <!--                <a href="javascript:;" class="remove" data-original-title="" title="">
                                </a>-->
                <button type="button" id="nuevoregistro" class="btn btn-default" data-toggle="modal" data-target="#myModal">Grupo</button>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="row">
                        <label class="col-lg-6 col-md-6 col-sm-6 col-xs-6" for="nombredocumento">
                            Nombre Documento
                        </label>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" name="nombredocumento" id="nombredocumento" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-6 col-md-6 col-sm-6 col-xs-6" for="tipo">
                            Tipo
                        </label>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="">::Seleccionar::</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label for="encabezado">Encabezado</label>
                            <textarea id="encabezado" name="encabezado" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="row">
                        <label class="col-lg-6 col-md-6 col-sm-6 col-xs-6" for="fechadesde">
                            Fecha desde
                        </label>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" name="fechadesde" id="fechadesde" class="fecha form-control">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            Fecha hasta
                        </label>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" for="fechahasta">
                            <input type="text" name="fechahasta" id="fechahasta" class="fecha form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label for="piepagina">Píe de página</label>
                            <textarea id="piepagina" name="piepagina" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <th>Orden Grupo</th>
                        <th>Orden Subgrupo</th>
                        <th>Nombre campo</th>
                        <th>Tipo</th>
                        <th>lista valores</th>
                        <th>Nombre campo a mostrar</th>
                        <th>orden</th>
                        <th>obligatorio</th>
                        <th>Fecha desde</th>
                        <th>Fecha hasta</th>
                        <th>Agregar Subgrupo</th>
                        <th>Agregar campo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">GRUPO</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label for="" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Grupo</label>
                        <div for="" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" id="grupo" name="grupo" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label for="" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Orden Grupo</label>
                        <div for="" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" id="orden" name="orden" class="form-control">
                        </div>
                    </div>
                </div>
            </div>  
            <div class="modal-footer">
                <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="guardargrupo">Guardar</button>
            </div>
        </div>
    </div>
</div>