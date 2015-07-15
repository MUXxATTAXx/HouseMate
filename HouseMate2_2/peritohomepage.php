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

                <li id='me2' class='negro'><a href='#home2' data-toggle='tab'><?=$lang['peri-pendienteobj'];?></a></li>
            </ul>
  <div class="panel-body">
      <div id='myTabContent' class='tab-content'>
          <!--Objetos-->

                  <!--Inmuebles-->
                  <div class='tab-pane fade active in' id='home2'>
                      <center>
                        <table class='table table-striped table-hover' data-toggle='table'  data-query-params='queryParams' data-page-list='[5, 10, 20, 50, 100, 200]' data-pagination='true'>
                        <thead>
                          <tr>
                      <th><?=$lang['Nombre']?></th>
                      <th>Rating</th>
                      <th><?=$lang['Perfil']?></th>
                      <th><?=$lang['mensaje']?></th>
                      <th><?= $lang['Valuo'] ?></th>
                      <th><?= $lang['Empresa'] ?></th>
                      </tr>
                      </thead>
                        <?php

                        $query = mysql_query("Select * from inmueble inner join usuario on inmueble.Dueno = usuario.idusuario
                       inner join tbusuario on usuario.TempId = tbusuario.idusuario  where aprovado = '0'");
                        while ($row = mysql_fetch_array($query))
                        { ?>
                          <tr>
                            <td>
                              <?= $row['nombre'].$row['apellido'] ?>
                            </td>

                            <td>
                              <?= $row['Rating'] ?>
                            </td>

                            <td>
                              <center><a href="enviar_msj.php?destin=<?=$row['usuario'] ?>" class="glyphicon glyphicon-envelope btn btn-sm btn-primary"></a></center>
                            </td>
                            <td>
                              <center><a href="perfil.php?usuario=<?=$row['usuario'] ?>" class="glyphicon glyphicon-user btn btn-sm btn-primary"></a></center>
                            </td>
                            <td>
                              <?php $valordi = $row['Empresa'];
                              if($valordi != "")
                              {
                                echo "<a href='valuo.php?super=".$row['IdInmueble']."' class='glyphicon glyphicon-usd btn btn-sm btn-success'></a>";
                              } ?>
                            </td>
                            <td>
                              <a href="Empresawatch.php?empresa=<?=$row['Empresa'] ?>" class="glyphicon glyphicon-briefcase btn btn-sm btn-info"></a>
                            </td>

                          </tr>
                          <?php
                        }
                        ?>
                          <div class="panel-footer">

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

<script src='js/bootstrap-table.js' type='text/javascript'></script>
</body>
