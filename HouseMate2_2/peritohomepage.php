<head>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<title>Inicio</title>
</head>
<body id="intro">
<?php
    include("Header/barranav3.php");
?>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad">
    <div class="panel panel-info">
            <ul  class="nav nav-tabs">
                <li id='me' class='active negro'><a href='#home' data-toggle='tab'><?=$lang['peri-pendiente'];?></a></li>
                <li id='me2' class='negro'><a href='#home2' data-toggle='tab'><?=$lang['peri-pendienteobj'];?></a></li>
            </ul>
  <div class="panel-body">
      <div id='myTabContent' class='tab-content'>
          <!--Objetos-->
                  <div class='tab-pane fade active in' id='home'>
                        <div id="mostrar1">
                        </div>
                  </div>
                  <!--Inmuebles-->
                  <div class='tab-pane fade' id='home2'>
                      <center>
                              <br>
                              <div class="row">
                                  <div class="col col-sm-2">
                                      <p>Holi 2</p>
                                  </div>
                              </div>
                              <br>
                          <div class="panel-footer">
                              <div class="row row-centered">
                                  <div class="col col-sm-8">
                                      <p>Holi 2</p>
                                  </div>
                              </div>
                          </div>
                      </center>
                    </div>
              <!-- Fin de contenido de pestañas -->
            </div>
        <!-- Fin de pane body -->
        </div>
      <!-- Fin de row -->
    </div>
<!-- Fin de contenedor -->
</div>

<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
<script type='text/javascript' src='js/aprobarperi.js'></script>
</body>
