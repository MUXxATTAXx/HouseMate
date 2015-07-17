	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href='css/change.css' rel='stylesheet'/>
<?php
    include("Header/barranav2.php");
?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo($lang['Usuarios']);?></title>
	<meta charset = "utf-8" />
</head>
<body>

<!-- Logic para change of active ta	b -->
<div class="row row-centered">
	<div class="col-sm-7 col-centered">
	<?php
			echo "<ul id='what' class='nav nav-tabs'>
			<li id='me' class='active negro'><a href='#home' data-toggle='tab'>
			".$lang['Crear-Usuario']."
			</a></li>
			<li id='me2' class='negro'><a href='#crear' data-toggle='tab'>
			".$lang['Ver-Usuario']."
			</a></li>
			<li id='me3' class='negro'><a href='#sd' data-toggle='tab'>
			".$lang['Modificar-Usuario']."
			</a></li>
		</ul>";
		?>
	</div>
</div>
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
<script src='js/jquery-1.11.2.min.js' type='text/javascript'></script>
<script src="js/bootstrap-table.js" type="text/javascript"></script>
 <script type="text/javascript" src="js/jquery.chained.js" charset="utf-8"></script>
 <script>
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagenempresa')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
$("#Municipio3").chained("#Departamento3");
</script>
<script src="<?=$lang['validaciones']?>">async: true</script>
<script src="js/usuariom.js" type="text/javascript"></script>
<span id="spanme"></span>
</body>
</html>
