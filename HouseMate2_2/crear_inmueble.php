<?php
    echo("
    <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
    ");
    echo "<link href='css/change.css' rel='stylesheet'/>";
    
    include("Header/barranav2.php");

?>
<!DOCTYPE HTML>
<html >
<head>
	<title>House Mate</title>
	<meta charset = "utf-8" />
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
</head>
<body> 
    <form method="post" method="GET" enctype="multipart/form-data">
<h1><?php echo($lang['Inmuebles']);?></h1>

<ul id="what" class="nav nav-tabs">
    <li id="me" class='active'><a href='#home' data-toggle='tab'><?php echo($lang['Crear-Inmuebles']);?></a></li>
    <li id="me2"><a href='#crear' data-toggle='tab'><?php echo($lang['Ver-Inmuebles']);?></a></li>
    <li id="me3"><a href='#sd' data-toggle='tab' ><?php echo($lang['Modificar-Inmuebles']);?></a></li>
    <li id="me4"><a href='#eliminar' data-toggle='tab' ><?php echo($lang['Eliminar-Inmuebles']);?></a></li>
</ul>

<div id='myTabContent' class='tab-content'>

<div class='tab-pane fade active in' id='home'>
<?php
 require('admininmueble/ingresar_inmueble.php');
 ?>
</div>
 <div class='tab-pane fade' id='crear'>
 <?php require('admininmueble/mostrar_inmueble.php'); ?>
 </div>
 <div class="tab-pane fade" id="sd">
 asd3
  
 </div>

<div class="tab-pane fade" id="eliminar">
 <?php require('admininmueble/borrar_inmueble.php'); ?>
  
  </div>
</div>
</form>
</body>
</html>