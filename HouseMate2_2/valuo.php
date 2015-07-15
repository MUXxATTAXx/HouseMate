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
<div class="panel-heading">
      <label><?= $lang['ValuoR']  ?></label>
</div>
  <div class="panel-body">
<?php
$empresa = $_GET['super'];
$query = mysql_query("Select * FROM inmueble where IdInmueble = '$empresa'");
while ($row = mysql_fetch_array($query))
{
  ?>

  <div class="row">

      <div class="col-sm-6">
        <div class="row">
        <label><?= $lang['Direccion']  ?>:</label>
      </div>
      <div class="row">
        <label><?= $row['Direccion']  ?></label>
      </div>
      </div>
      <div class="col-sm-3">
        <div class="row">
        <label><?= $lang['ages']  ?>:</label>
      </div>
      <div class="row">
        <label><?= $row['age']  ?></label>
      </div>
      </div>
      <div class="col-sm-3">
        <div class="row">
        <label><?= $lang['agev']  ?>:</label>
      </div>
      <div class="row">
        <label>75</label>
      </div>
      </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <div class="row">
        <label></label>
      </div>
      <div class="row">
        <input class="form-control">
      </div>
    </div>
    <div class="col-sm-6">
    </div>
  </div>
<?php
}
?>
    </div>
      <!-- Fin de row -->
    </div>
<!-- Fin de contenedor -->
</div>

<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
<script type='text/javascript' src='js/aprobarperi.js'></script>
<script src='js/bootstrap-table.js' type='text/javascript'></script>
</body>
