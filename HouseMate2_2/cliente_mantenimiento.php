	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href='css/change.css' rel='stylesheet'/>
<?php
    include("Header/barranav2.php");
?>
<!DOCTYPE HTML>
<html onload="refresh()">
<head>
	<title><?php echo($lang['Page_title']);?></title>
	<meta charset = "utf-8" />
	
</head>
<body> 
<form method="post">
<div class="row">
        <ol class="breadcrumb bread-primary breadnomargin">
            <li><a><?php echo($lang['Usuarios']);?></a></li>
        </ol>
    </div>
<!-- Logic para change of active tab -->

	<?php
				echo "<ul id='what' class='nav nav-tabs'>
			<li id='me' class='active'><a href='#home' data-toggle='tab'>
			".$lang['Crear-Usuario']."
			</a></li>
			<li id='me2'><a href='#crear' data-toggle='tab'>
			".$lang['Ver-Usuario']."
			</a></li>
			<li id='me3'><a href='#sd' data-toggle='tab'>
			".$lang['Modificar-Usuario']."
			</a></li>
		</ul>";
		?>
<div id='myTabContent' class='tab-content'>
	<?php 
	echo "<div class='tab-pane fade active in' id='home'>";
	include'admincliente/crear_cliente.php';
	echo "</div><div class='tab-pane fade' id='crear'>";
	include'admincliente/admin_mostrar.php';
	echo "</div><div class='tab-pane fade' id='sd'>";
	include("admincliente/admin_modificar.php");
	?>
</div>
</form>
 <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
<script src="js/bootstrap-table.js" ></script>
<script src="js/validaciones.js" type="text/javascript" ></script>
</body>
</html>