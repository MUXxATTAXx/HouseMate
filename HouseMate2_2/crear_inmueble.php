	<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/change.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	  <script src="//code.jquery.com/jquery-1.11.1.min.js" ></script>
   <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" ></script>
<?php
    include("Header/barranav2.php");
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>House Mate</title>
	<meta charset = "utf-8" />

</head>
<body> 
    <form method="post" method="GET" enctype="multipart/form-data">

<div class="row">
        <ol class="breadcrumb bread-primary breadnomargin">
            <li><a><?php echo($lang['Inmuebles']);?></a></li>
        </ol>
    </div>
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
 <?php require('admininmueble/modificar_inmueble.php'); ?> 
 </div>

<div class="tab-pane fade" id="eliminar">
 <?php require('admininmueble/borrar_inmueble.php'); ?>
  
  </div>
</div>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
  <script src="js/jquery.chained.js?v=1.0.0" type="text/javascript" charset="utf-8"></script>
  <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
  <script src="js/bootstrap-table.js" ></script>


</body>
</html>