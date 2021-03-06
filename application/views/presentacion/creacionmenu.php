<style type="text/css">
    .item:hover{
        cursor: pointer;
        background-color: #f5f5f5 !important;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="tituloCuerpo">
            <span class="txtTitulo">ADMINISTRACIÓN DE MODULOS</span>
        </div>
    </div>
</div>
<div class="cuerpoContenido">
    <div class="page-bar" style="background-color: transparent !important;">
        <ul class="page-breadcrumb">
            <?php if (!empty($nombrepadre)) { ?>
                <?= $nombrepadre ?>
            <?php } else { ?>
                <li class="devolver">
                    <i class="fa fa-home"></i>
                    <a href="<?= base_url("index.php/presentacion/creacionmenu") ?>">Principal</a>
                    <i class="fa fa-angle-right"></i>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="row">
        <form method="post" id="formulario">
            <table class="tablesst" >
                <thead>
                <th>Icono</th>
                <th>Nombre</th>
                <th>Opción</th>
                <th>Seguridad</th>
                <th>Sub Modulo</th>
                </thead>
                <tbody id="cuerpomodulo">
                    <?php if (empty($menu)) { ?><tr><td colspan="3" align="center">No Existen Datos</td></tr><?php } ?>
                    <?php foreach ($menu as $modulo) { ?>
                        <tr id="<?= $modulo['menu_id'] ?>">
                            <td>
                    <center>
                        <button type="button" data-toggle="modal" data-target="#modalIconos"  class="btn iconos" idgeneral="<?= $modulo['menu_id'] ?>"><span class="<?= $modulo['mod_icons'] ?>"></span></button>
                    </center>
                    </td>
                    <td><?= $modulo['menu_nombrepadre'] ?></td>
                    <td align="center"><button type="button" data-toggle="modal" data-target="#myModal"  class="btn btn-info opciones"  idgeneral="<?= $modulo['menu_id'] ?>" nombre="<?= $modulo['menu_nombrepadre'] ?>" idpadre="<?= $modulo['menu_id'] ?>" >Opción</button>
                        <!--<button  >Option</button>-->
                    </td>
                    <td style="text-align: center"><button type="button"  class="btn btn-success metodos">Metodos</button></td>
                    <td align="center"><input type="radio" class="submodulo" idgeneral="<?= $modulo['menu_id'] ?>" idpadre="<?= $modulo['menu_idpadre'] ?>" nombrepadre="<?= $modulo['menu_nombrepadre'] ?>" name="submodulo" menu="<?= $modulo['menu_idhijo'] ?>"></td>
                    </tr>    
                <?php } ?>
                </tbody>    
            </table>
            <input type="hidden" id="menu" name="menu">
            <input type="hidden" id="nombrepadre" name="nombrepadre">
            <input type="hidden" id="idgeneral" name="idgeneral">
        </form> 
    </div>    
    <div id="desicion">
        <input type="hidden" id="papa">

    </div>    
</div>    

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Modificacion</h4>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                <div class=" marginV20">
                    <div class="widgetTitle">
                        <h5><i class="glyphicon glyphicon-pencil"></i> Editar</h5>
                    </div>
                    <div class="well">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                                <label>Nombre</label><input type="text" id="nombre" class="form-control">
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                                <label>Controlador</label><input type="text" name="controlador" id="controlador"  class="form-control">
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                                <label>Accion</label><input type="text" name="accion" id="accion"  class="form-control">
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                                <label>Estado</label>
                                <select id="estado"  class="form-control">
                                    <option value="">-Seleccionar-</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
            <div class="modal-footer">
                <div class="row marginV10">
                    <div class='col-md-2 col-lg-2 col-sm-2 col-sx-2 margenlogo' align='center' >
                        <button type="button" class="btn btn-success guardar">Guardar</button>
                    </div>
                    <div class='col-md-2 col-lg-2 col-sm-2 col-sx-2 margenlogo' align='center' >
                        <button type="button"  class="btn btn-danger eliminar">Eliminar</button>
                    </div>
                    <div class='col-md-2 col-lg-2 col-sm-2 col-sx-2 margenlogo' align='center' >
                        <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>    
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Creacion de Menu</h4>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                <div class=" marginV20">
                    <div class="widgetTitle">
                        <h5><i class="glyphicon glyphicon-pencil"></i> Nuevo</h5>
                    </div>
                    <div class="well">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                                <label>Nombre Menu</label><input type="text" placeholder="Modulo" id="modulo" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
            <div class="modal-footer">
                <div class="row marginV10">
                    <div class='col-md-12 col-lg-12 col-sm-12 col-sx-12 margenlogo' align='right' >
                        <button type="button" general="<?= $idgeneral ?>" padre="<?= $hijo ?>" class="btn btn-success" id="guardar">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Creacion de Menu</h4>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                <form method="post" id="FrmMetodos">
                    <div class=" marginV20">
                        <div class="widgetTitle">
                            <h5><i class="glyphicon glyphicon-pencil"></i> Consultar</h5>
                        </div>
                        <div class="well">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                                    <button type="button" class="agregarmetodo btn btn-success">+</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-lg-5 col-sm-5 col-sx-5">
                                    <label>Clase</label>
                                    <input type="text" placeholder="Modulo" id="modulo" name="TxtClaseConsultar[]" class="form-control">
                                </div>
                                <div class="col-md-5 col-lg-5 col-sm-5 col-sx-5">
                                    <label>Metodo</label><input type="text" placeholder="Modulo" id="modulo" name="TxtMetodoConsultar[]" class="form-control">
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-sx-2">
                                    <button type="button" class="eliminarmetodo btn btn-danger">-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" marginV20">
                        <div class="widgetTitle">
                            <h5><i class="glyphicon glyphicon-pencil"></i> Eliminar</h5>
                        </div>
                        <div class="well">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                                    <button type="button" class="agregarmetodo btn btn-success">+</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-lg-5 col-sm-5 col-sx-5">
                                    <label>Clase</label>
                                    <input type="text" placeholder="Modulo" id="modulo" name="TxtClaseEliminar[]" class="form-control">
                                </div>
                                <div class="col-md-5 col-lg-5 col-sm-5 col-sx-5">
                                    <label>Metodo</label><input type="text" placeholder="Modulo" name="TxtMetodoEliminar[]" id="modulo" class="form-control">
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-sx-2">
                                    <button type="button" class="eliminarmetodo btn btn-danger">-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" marginV20">
                        <div class="widgetTitle">
                            <h5><i class="glyphicon glyphicon-pencil"></i> Actualizar</h5>
                        </div>
                        <div class="well">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                                    <button type="button" class="agregarmetodo btn btn-success">+</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-lg-5 col-sm-5 col-sx-5">
                                    <label>Clase</label>
                                    <input type="text" placeholder="Modulo" id="modulo" name="TxtClaseActualizar[]" class="form-control">
                                </div>
                                <div class="col-md-5 col-lg-5 col-sm-5 col-sx-5">
                                    <label>Metodo</label><input type="text" placeholder="Modulo" name="TxtMetodoActualizar[]" id="modulo" class="form-control">
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-sx-2">
                                    <button type="button" class="eliminarmetodo btn btn-danger">-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" marginV20">
                        <div class="widgetTitle">
                            <h5><i class="glyphicon glyphicon-pencil"></i> Insertar</h5>  
                        </div>
                        <div class="well">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-sx-12">
                                    <button type="button" class="agregarmetodo btn btn-success">+</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-lg-5 col-sm-5 col-sx-5">
                                    <label>Clase</label>
                                    <input type="text" placeholder="Modulo" id="modulo" name="TxtClaseInsertar[]" class="form-control">
                                </div>
                                <div class="col-md-5 col-lg-5 col-sm-5 col-sx-5">
                                    <label>Metodo</label><input type="text" placeholder="Modulo" name="TxtMetodoInsertar[]" id="modulo" class="form-control">
                                </div>
                                <div class="col-md-2 col-lg-2 col-sm-2 col-sx-2">
                                    <button type="button" class="eliminarmetodo btn btn-danger">-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>		
            <div class="modal-footer">
                <div class="row marginV10">
                    <div class='col-md-12 col-lg-12 col-sm-12 col-sx-12 margenlogo' align='right' >
                        <button type="button" class="btn btn-success" id="guardarmetodos">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
<form method="post" id="redireccion">
    <input type="hidden" name="idgeneral" id="idgeneral2">
    <input type="hidden" name="nombrepadre" id="nombrepadre2">
</form>
<script>

    $('body').delegate("click", ".guardarmetodos", function () {
        $.post("<?php echo base_url("index.php/presentacion/guardarMetodos") ?>",$('#FrmMetodos').serialize())
                .done(function (msg) {
                    
                })
                .fail(function (msg) {

                });
    });

    $('body').delegate(".metodos", "click", function () {
        $('#myModal5').modal("show");
    });

    $('body').delegate(".eliminarmetodo", "click", function () {
        $(this).parent().parent().remove();
    });

    $('body').delegate(".agregarmetodo", "click", function () {

        var html = '<div class="row"><div class="col-md-5 col-lg-5 col-sm-5 col-sx-5">\n\
                                        <label>Clase</label>\n\
                                        <input type="text" placeholder="Modulo" id="modulo" class="form-control">\n\
                                    </div>\n\
                                    <div class="col-md-5 col-lg-5 col-sm-5 col-sx-5">\n\
                                        <label>Metodo</label><input type="text" placeholder="Modulo" id="modulo" class="form-control">\n\
                                    </div>\n\
                                    <div class="col-md-2 col-lg-2 col-sm-2 col-sx-2">\n\
                                        <button type="button" class="eliminarmetodo btn btn-danger">-</button>\n\
                                    </div></div>';
        $(this).parents('.well').append(html);
    });

    $('#desicion').hide();
    $('body').delegate(".opciones", "click", function () {
        var idgeneral = $(this).attr('idgeneral');
        $('.eliminar').attr('generalid', idgeneral);
        $('.guardar').attr('generalid', idgeneral);
        $.post("<?= base_url('index.php/presentacion/consultadatosmenu') ?>",
                {idgeneral: idgeneral}, function (data) {
            $('.modal-backdrop').css('z-index', '-1');
            $('#nombre').val(data['menu_nombrepadre']);
            $('#papa').val(data['menu_idpadre']);
            $('#controlador').val(data['menu_controlador']);
            $('#accion').val(data['menu_accion']);
            $('#estado').val(data['menu_estado']);
        });
    });

    $('body').delegate('.eliminar', 'click', function () {
        $.post("<?= base_url('index.php/presentacion/eliminarmodulo') ?>",
                {idgeneral: $(this).attr('generalid')})
                .done(function (msg) {
                    $('#myModal').modal('hide');
                }).fail(function (msg) {

        });
    });
    $('.page-breadcrumb a').click(function () {
        var papa = $(this).attr('padre');
        $('a').each(function (key, val) {
            if ($(this).attr('padre') > papa) {
                $(this).remove();
            }
        });
        $('#idgeneral2').val(papa);
        $('#nombrepadre2').val($('.page-breadcrumb').html());
        $('#redireccion').attr('href', "<?= base_url('index.php/presentacion/menu') ?>");
        $('#redireccion').submit();
    });
    $('#guardar').click(function () {
        $.post("<?= base_url('index.php/presentacion/guardarmodulo') ?>", {modulo: $('#modulo').val(), padre: $(this).attr('padre'), general: $(this).attr('general')}, function (data) {
            $('#cuerpomodulo *').remove();
            var tabla = "";
            $.each(data, function (key, val) {
                tabla += "<tr><td>" + val.menu_nombrepadre + "</td><td align='center'><button class='btn btn-info opciones' data-target='#myModal' data-toggle='modal' idpadre='" + val.menu_idpadre + "' nombre='" + val.menu_nombrepadre + "' idgeneral='" + val.menu_id + "' type='button'>Opcion</button></td><td align='center'><input menu='" + val.menu_idhijo + "' nombrepadre='" + val.menu_nombrepadre + "' idgeneral='" + val.menu_id + "' type='radio' name='submodulo' class='submodulo'></td></tr>";
            });
            $('#cuerpomodulo').append(tabla);
            $('#modulo').val('');
            $('#myModal2').modal('hide');
            $.notific8('Los Datos en Formacion Fueron Guardados.', {
                horizontalEdge: 'bottom',
                life: 5000,
                theme: 'amethyst',
                heading: 'EXITO'
            });
        });
    });
    $('body').delegate('.guardar', 'click', function () {

        $.post("<?= base_url('index.php/presentacion/guardaratributosmenu') ?>"
                , {id: $(this).attr('generalid')
                    , nombre: $('#nombre').val()
                    , controlador: $('#controlador').val()
                    , accion: $('#accion').val()
                    , estado: $('#estado').val()
                }, function (data) {
            $('#myModal').modal('hide');
        });
    });
    $('body').delegate(".submodulo", "click", function () {
        $('#menu').val($(this).attr('menu'));
        $('#idgeneral').val($(this).attr('idgeneral'));
        $("#nombrepadre").val($(".page-breadcrumb").html() + "<li><a padre='" + $(this).attr('menu') + "'>" + $(this).attr('nombrepadre') + "</a><i class='fa fa-angle-right'></i></li>")
        //$('#nombrepadre').val($('.devolver b').html() + "<i class='glyphicon glyphicon-chevron-right'></i><a padre='" + $(this).attr('menu') + "'>" + $(this).attr('nombrepadre') + "</a>");
        $('#formulario').attr('href', "<?= base_url('index.php/presentacion/menu') ?>");
        $('#formulario').submit();
    });
    /*---------------- ICONOS ---------------*/
    var botonIcono;
    $("body").on("click", ".iconos", function () {
        botonIcono = $(this);
    });
    $("body").on("click", ".item", function () {
        var nombreIcono = $(this).children("span").attr('class');
        if (confirm("Deseas cambiar Icono ?")) {
            var url = "<?= base_url('index.php/presentacion/actualizarIcono') ?>";
            var idgeneral = botonIcono.attr("idgeneral");
            $.post(url, {nuevoIcono: nombreIcono, idgeneral: idgeneral})
                    .done(function (msg) {
                        botonIcono.children("span").attr("class", nombreIcono)
                        $('#modalIconos').modal('toggle');
                    })
                    .fail(function (msg) {
                        alert("Error en el momento de cambiar el icono");
                    })
        }
    });
</script>    