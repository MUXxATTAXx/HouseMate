<head>
	<link href='css/appeal.css' rel='stylesheet'/>
	<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
    <title>Inicio</title>
</head>
<body id="intro">
<?php
    include("Header/barranav2.php");
?>
<br>
<div class="panel panel-default">
    <div class="panel-heading">

        <div class="panel-body">
	<div class="row">
        <div class="row">
            <div class="col-md-9">
                      <h2><?php echo $land['noticias'] ?></h2>
            </div>
            <div class="col-md-3">
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <div class="carousel-inner">
		<?php 
		include ('Call/housein.php');
		?>
                
            </div>
        </div>
		
    </div>

            </div>
        </div>
        
        </div>
<!--
<div id="refrem">
    <div id="barrabusqueda">
        <p class="pD2">Barra de Busqueda</p>
    </div>
    <div id="BarraLateral">
        <p class="pD2">Barra Lateral</p>
    </div>
    <div id="contenido">
        <p class="pD2">Contenido</p>
    </div>
</div>
-->
</body>
