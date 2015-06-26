
<link rel='shortcut icon' type='image/x-icon' href='../../img/favicon.ico'/>	
<link href='../../css/bootstrap.min.css' rel='stylesheet'/>
<head><link href='../../css/appeal.css' rel='stylesheet'/>
<link href='../../css/bootstrap.min.css' rel='stylesheet'/>
<link href='../../css/intro.css' rel='stylesheet'/>
<link href='../../css/estilo.css' rel='stylesheet'/>
<link href="../../css/bootstrap-table.css" rel="stylesheet">
<link href="../../css/empresatag.css" rel="stylesheet">
 <title><?php 
session_start();
include("../../conexion.php");
include("../Call/Lenguaje/lenguaje.php");
 
 echo $lang['Empresa'] ?></title>
</head>

<body id="intro">
<?php
	include "../../conexion.php";
	include "../Lenguaje/lenguaje.php";
    echo("
<meta charset=utf-8 />
    ");

?>
<br><br>
<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-6">
		<div class="alert alert-dismissible alert-warning">
		  <h3>Ooopps!</h3>
		  <p><?php echo $lang['nocuentaop'] ?><a href="../../mejorar_perfil.php" class="alert-link"><?php echo " ".$lang['Aqui'] ?></a></p>
		</div>
	</div>
</div>