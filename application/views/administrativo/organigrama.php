<div class="page-bar" style="background-color: transparent !important;">
    <ul class="page-breadcrumb">
        <li class="devolver">
            <i class="fa fa-home"></i>
            <a href="<?php echo base_url("index.php/presentacion/principal") ?>">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="#">Organización</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li class="devolver">
            <a href="<?php echo base_url("index.php/administrativo/empresa") ?>">Empresa</a>
            <i class="fa fa-angle-right"></i>
        </li>
        
        <li class="devolver">
            <a href="#">Organigrama</a>
        </li>
    </ul>
</div>
<div class="widgetTitle" style="text-align: center;">
    <h5>
        ORGANIGRAMA
    </h5>
</div>
<iframe src="<?php echo base_url("index.php/administrativo/loadorganigrama") ?>" frameborder="0" style="width: 100%;height: 700px;"></iframe>