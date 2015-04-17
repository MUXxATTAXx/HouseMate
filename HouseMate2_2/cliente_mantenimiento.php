<?php
    echo("
    <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
    ");
    echo "<link href='css/change.css' rel='stylesheet'/>";
    
    include("Header/barranav2.php");
    
?>
<!DOCTYPE HTML>
<html onload="refresh()">
<head>
	<title><?php echo($lang['Page_title']);?></title>
	<meta charset = "utf-8" />
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
</head>
<body> 
<form method="post">
<h1><?php echo($lang['Usuarios']);?></h1>
<!-- Logic para change of active tab -->

	<?php
		include "Call/Loged/urgent.php";
		?>
<div id='myTabContent' class='tab-content'>
	<div class='tab-pane fade active in' id='home'><?php
		include'admincliente/crear_cliente.php';?>
	</div>
	<div class='tab-pane fade' id='crear'><?php
		include'admincliente/admin_mostrar.php';?>
	</div>
	<div class="tab-pane fade" id="sd">	<?php
		include("admincliente/admin_modificar.php");?>
	 </div>
		
	<div class="tab-pane fade" id="eliminar"><?php
		include('admincliente/admin_eliminar.php'); ?>
	</div>
</div>
</form>
</body>
</html>