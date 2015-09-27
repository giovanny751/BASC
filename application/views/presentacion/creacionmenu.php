<style type="text/css">
    .item:hover{
        cursor: pointer;
        background-color: #f5f5f5 !important;
    }
</style>
<div class="alert alert-info"><center><b>ADMINISTRACIÓN DE MODULOS</b></center></div>
<div class="row">
    <button type="button" data-toggle="modal" data-target="#myModal2"  class="btn btn-info opciones">Nuevo Modulo</button>
</div>
<?php if (!empty($nombrepadre)) {
    ?> <div padre="<?= $hijo ?>"  class="row devolver" ><b><?= $nombrepadre ?></b></div>
<?php } else { ?>
    <div class="row devolver"><b>Principal</b></div>
<?php } ?>

<div class="row">
    <form method="post" id="formulario">
        <div class="table-responsive">
            <table class="table" align="center" border="1">
                <thead>
                <th>Icono</th>
                <th>Nombre</th>
                <th>Opción</th>
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
                            <td align="center"><input type="radio" class="submodulo" idgeneral="<?= $modulo['menu_id'] ?>" idpadre="<?= $modulo['menu_idpadre'] ?>" nombrepadre="<?= $modulo['menu_nombrepadre'] ?>" name="submodulo" menu="<?= $modulo['menu_idhijo'] ?>"></td>
                        </tr>    
                    <?php } ?>
                </tbody>    
            </table>
        </div>
        <input type="hidden" id="menu" name="menu">
        <input type="hidden" id="nombrepadre" name="nombrepadre">
        <input type="hidden" id="idgeneral" name="idgeneral">
    </form> 
</div>    
<div id="desicion">
    <input type="hidden" id="papa">
    
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
<form method="post" id="redireccion">
    <input type="hidden" name="idgeneral" id="idgeneral2">
    <input type="hidden" name="nombrepadre" id="nombrepadre2">
</form>

<!-- Modal Iconos -->
<div class="modal fade" id="modalIconos" tabindex="-1" role="dialog" aria-labelledby="modalIconos">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="icon-like"></span> Iconos</h4>
            </div>
            <div class="modal-body">
                <div class="simplelineicons-demo">
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-user"></span>
                    &nbsp;user </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-user-female"></span>
                    &nbsp;user-female </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-users"></span>
                    &nbsp;users </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-user-follow"></span>
                    &nbsp;user-follow </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-user-following"></span>
                    &nbsp;user-following </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-user-unfollow"></span>
                    &nbsp;user-unfollow </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-trophy"></span>
                    &nbsp;trophy </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-speedometer"></span>
                    &nbsp;speedometer </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-social-youtube"></span>
                    &nbsp;social-youtube </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-social-twitter"></span>
                    &nbsp;social-twitter </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-social-tumblr"></span>
                    &nbsp;social-tumblr </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-social-facebook"></span>
                    &nbsp;social-facebook </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-social-dropbox"></span>
                    &nbsp;social-dropbox </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-social-dribbble"></span>
                    &nbsp;social-dribbble </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-shield"></span>
                    &nbsp;shield </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-screen-tablet"></span>
                    &nbsp;screen-tablet </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-screen-smartphone"></span>
                    &nbsp;screen-smartphone </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-screen-desktop"></span>
                    &nbsp;screen-desktop </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-plane"></span>
                    &nbsp;plane </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-notebook"></span>
                    &nbsp;notebook </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-moustache"></span>
                    &nbsp;moustache </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-mouse"></span>
                    &nbsp;mouse </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-magnet"></span>
                    &nbsp;magnet </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-magic-wand"></span>
                    &nbsp;magic-wand </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-hourglass"></span>
                    &nbsp;hourglass </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-graduation"></span>
                    &nbsp;graduation </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-ghost"></span>
                    &nbsp;ghost </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-game-controller"></span>
                    &nbsp;game-controller </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-fire"></span>
                    &nbsp;fire </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-eyeglasses"></span>
                    &nbsp;eyeglasses </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-envelope-open"></span>
                    &nbsp;envelope-open </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-envelope-letter"></span>
                    &nbsp;envelope-letter </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-energy"></span>
                    &nbsp;energy </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-emoticon-smile"></span>
                    &nbsp;emoticon-smile </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-disc"></span>
                    &nbsp;disc </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-cursor-move"></span>
                    &nbsp;cursor-move </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-crop"></span>
                    &nbsp;crop </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-credit-card"></span>
                    &nbsp;credit-card </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-chemistry"></span>
                    &nbsp;chemistry </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-bell"></span>
                    &nbsp;bell </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-badge"></span>
                    &nbsp;badge </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-anchor"></span>
                    &nbsp;anchor </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-action-redo"></span>
                    &nbsp;action-redo </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-action-undo"></span>
                    &nbsp;action-undo </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-bag"></span>
                    &nbsp;bag </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-basket"></span>
                    &nbsp;basket </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-basket-loaded"></span>
                    &nbsp;basket-loaded </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-book-open"></span>
                    &nbsp;book-open </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-briefcase"></span>
                    &nbsp;briefcase </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-bubbles"></span>
                    &nbsp;bubbles </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-calculator"></span>
                    &nbsp;calculator </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-call-end"></span>
                    &nbsp;call-end </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-call-in"></span>
                    &nbsp;call-in </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-call-out"></span>
                    &nbsp;call-out </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-compass"></span>
                    &nbsp;compass </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-cup"></span>
                    &nbsp;cup </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-diamond"></span>
                    &nbsp;diamond </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-direction"></span>
                    &nbsp;direction </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-directions"></span>
                    &nbsp;directions </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-docs"></span>
                    &nbsp;docs </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-drawer"></span>
                    &nbsp;drawer </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-drop"></span>
                    &nbsp;drop </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-earphones"></span>
                    &nbsp;earphones </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-earphones-alt"></span>
                    &nbsp;earphones-alt </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-feed"></span>
                    &nbsp;feed </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-film"></span>
                    &nbsp;film </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-folder-alt"></span>
                    &nbsp;folder-alt </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-frame"></span>
                    &nbsp;frame </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-globe"></span>
                    &nbsp;globe </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-globe-alt"></span>
                    &nbsp;globe-alt </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-handbag"></span>
                    &nbsp;handbag </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-layers"></span>
                    &nbsp;layers </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-map"></span>
                    &nbsp;map </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-picture"></span>
                    &nbsp;picture </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-pin"></span>
                    &nbsp;pin </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-playlist"></span>
                    &nbsp;playlist </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-present"></span>
                    &nbsp;present </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-printer"></span>
                    &nbsp;printer </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-puzzle"></span>
                    &nbsp;puzzle </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-speech"></span>
                    &nbsp;speech </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-vector"></span>
                    &nbsp;vector </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-wallet"></span>
                    &nbsp;wallet </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-arrow-down"></span>
                    &nbsp;arrow-down </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-arrow-left"></span>
                    &nbsp;arrow-left </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-arrow-right"></span>
                    &nbsp;arrow-right </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-arrow-up"></span>
                    &nbsp;arrow-up </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-bar-chart"></span>
                    &nbsp;bar-chart </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-bulb"></span>
                    &nbsp;bulb </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-calendar"></span>
                    &nbsp;calendar </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-control-end"></span>
                    &nbsp;control-end </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-control-forward"></span>
                    &nbsp;control-forward </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-control-pause"></span>
                    &nbsp;control-pause </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-control-play"></span>
                    &nbsp;control-play </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-control-rewind"></span>
                    &nbsp;control-rewind </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-control-start"></span>
                    &nbsp;control-start </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-cursor"></span>
                    &nbsp;cursor </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-dislike"></span>
                    &nbsp;dislike </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-equalizer"></span>
                    &nbsp;equalizer </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-graph"></span>
                    &nbsp;graph </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-grid"></span>
                    &nbsp;grid </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-home"></span>
                    &nbsp;home </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-like"></span>
                    &nbsp;like </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-list"></span>
                    &nbsp;list </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-login"></span>
                    &nbsp;login </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-logout"></span>
                    &nbsp;logout </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-loop"></span>
                    &nbsp;loop </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-microphone"></span>
                    &nbsp;microphone </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-music-tone"></span>
                    &nbsp;music-tone </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-music-tone-alt"></span>
                    &nbsp;music-tone-alt </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-note"></span>
                    &nbsp;note </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-pencil"></span>
                    &nbsp;pencil </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-pie-chart"></span>
                    &nbsp;pie-chart </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-question"></span>
                    &nbsp;question </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-rocket"></span>
                    &nbsp;rocket </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-share"></span>
                    &nbsp;share </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-share-alt"></span>
                    &nbsp;share-alt </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-shuffle"></span>
                    &nbsp;shuffle </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-size-actual"></span>
                    &nbsp;size-actual </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-size-fullscreen"></span>
                    &nbsp;size-fullscreen </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-support"></span>
                    &nbsp;support </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-tag"></span>
                    &nbsp;tag </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-trash"></span>
                    &nbsp;trash </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-umbrella"></span>
                    &nbsp;umbrella </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-wrench"></span>
                    &nbsp;wrench </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-ban"></span>
                    &nbsp;ban </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-bubble"></span>
                    &nbsp;bubble </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-camcorder"></span>
                    &nbsp;camcorder </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-camera"></span>
                    &nbsp;camera </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-check"></span>
                    &nbsp;check </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-clock"></span>
                    &nbsp;clock </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-close"></span>
                    &nbsp;close </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-cloud-download"></span>
                    &nbsp;cloud-download </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-cloud-upload"></span>
                    &nbsp;cloud-upload </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-doc"></span>
                    &nbsp;doc </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-envelope"></span>
                    &nbsp;envelope </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-eye"></span>
                    &nbsp;eye </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-flag"></span>
                    &nbsp;flag </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-folder"></span>
                    &nbsp;folder </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-heart"></span>
                    &nbsp;heart </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-info"></span>
                    &nbsp;info </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-key"></span>
                    &nbsp;key </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-link"></span>
                    &nbsp;link </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-lock"></span>
                    &nbsp;lock </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-lock-open"></span>
                    &nbsp;lock-open </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-magnifier"></span>
                    &nbsp;magnifier </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-magnifier-add"></span>
                    &nbsp;magnifier-add </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-magnifier-remove"></span>
                    &nbsp;magnifier-remove </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-paper-clip"></span>
                    &nbsp;paper-clip </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-paper-plane"></span>
                    &nbsp;paper-plane </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-plus"></span>
                    &nbsp;plus </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-pointer"></span>
                    &nbsp;pointer </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-power"></span>
                    &nbsp;power </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-refresh"></span>
                    &nbsp;refresh </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-reload"></span>
                    &nbsp;reload </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-settings"></span>
                    &nbsp;settings </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-star"></span>
                    &nbsp;star </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-symbol-female"></span>
                    &nbsp;symbol-female </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-symbol-male"></span>
                    &nbsp;symbol-male </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-target"></span>
                    &nbsp;target </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-volume-1"></span>
                    &nbsp;volume-1 </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-volume-2"></span>
                    &nbsp;volume-2 </span>
                    </span>
                    <span class="item-box">
                    <span class="item">
                    <span aria-hidden="true" class="icon-volume-off"></span>
                    &nbsp;volume-off </span>
                    </span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    
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
    $('a').click(function () {
        var papa = $(this).attr('padre');
        $('a').each(function (key, val) {
            if ($(this).attr('padre') > papa) {
                $(this).remove();
            }
        });
        $('#idgeneral2').val(papa);
        $('#nombrepadre2').val($('.devolver b').html());
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
        $('#nombrepadre').val($('.devolver b').html() + "<i class='glyphicon glyphicon-chevron-right'></i><a padre='" + $(this).attr('menu') + "'>" + $(this).attr('nombrepadre') + "</a>");
        $('#formulario').attr('href', "<?= base_url('index.php/presentacion/menu') ?>");
        $('#formulario').submit();
    });
    /*---------------- ICONOS ---------------*/
    var botonIcono;
    $("body").on("click",".iconos",function(){
        botonIcono = $(this);
    });
    $("body").on("click",".item",function(){
        var nombreIcono = $(this).children("span").attr('class');
        if(confirm("Deseas cambiar Icono ?")){
            var url = "<?= base_url('index.php/presentacion/actualizarIcono') ?>";
            var idgeneral = botonIcono.attr("idgeneral");
            $.post(url,{nuevoIcono:nombreIcono,idgeneral:idgeneral})
                    .done(function(msg){
                        botonIcono.children("span").attr("class",nombreIcono)
                        $('#modalIconos').modal('toggle');
                    })
                    .fail(function(msg){
                        alert("Error en el momento de cambiar el icono");
                    })
        }
    });
</script>    