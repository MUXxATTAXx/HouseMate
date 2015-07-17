<?php

    include "Call/Lenguaje/lenguaje.php";
    echo("
    <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link class='jsbin' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css' rel='stylesheet' type='text/css' />
   <script class='jsbin' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
<script class='jsbin' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js'></script>
<meta charset=utf-8 />
    ");
    include("Header/barranav4.php");

?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo($lang['Perfil']);?></title>
	<meta charset = "utf-8" />
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/estilop.css' rel='stylesheet'/>
</head>
<body>

<h1><?php echo($lang['Perfil']);?></h1>
<div class="panel panel-default">
  <div class="panel-heading">
<?php
    include("conexion.php");
    $info = $_SESSION['user'];
    mysql_query("SET NAMES 'utf8'");
    $consulta = "SELECT * FROM tbUsuario WHERE nombre='$info'";
    $cs=mysql_query($consulta);
    while($row=mysql_fetch_array($cs)){
    echo "<h2>".$row['nombre']." ".$row['apellido']."</h2>";
    echo"<h4>";
        if($row['tipo']=="1"){echo"Administrador";}
        if($row['tipo']=="2"){echo"Cliente";}
        if($row['tipo']=="3"){echo"Perito";}
        if($row['tipo']=="4"){echo"Visitante";}
    echo"<br></h4>";

?>
	</div>
  <div class="panel-body">
  <div id="image_p" align="center">
<img  src="img/smith,jonathan.jpg" width="auto" height="auto">
</div>
  <div id="generals_p" align="left">
  <table>
    <tr><td><label><?php echo($lang['Correo']);?></label></td><td><label><?php echo $row['correo'];?></label></td></tr>
    <tr><td><label><?php echo($lang['Fecha-Nac']);?></label></td><td><label><?php echo $row['fechanac'];?></label></td></tr>
    <tr><td><label><?php echo($lang['Nombre']);?></label></td><td><label><?php echo $row['nombre'];?></label></td></tr>
    <tr><td><label><?php echo($lang['Apellido']);?></label></td><td><label><?php echo $row['apellido'];?></label></td></tr>
<tr><td><hr><h3>Rating</h3><div class="rating">
<span>&#9734; </span><span>&#9734; </span><span>&#9734; </span><span>&#9734; </span><span>&#9734; </span>
</div></td></tr>
  </table>
  </div>
<br><br>
<?php
if($row['tipo']=="4"){echo"<button class='btn btn-lg btn-primary btn-block' type='submit' name='registrar'>Mejorar Cuenta</button>";}
?>
  </div>
    </div>
</body>
</html>
<?php
        }
?>
