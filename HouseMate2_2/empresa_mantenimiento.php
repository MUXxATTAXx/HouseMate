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
			".$lang['Modificar']."
			</a></li>
			<li id='me2' class='negro'><a href='#crear' data-toggle='tab'>
			".$lang['Ver-Usuario']."
			</a></li>
		</ul>";
		?>
	</div>
</div>
<div id='myTabContent' class='tab-content'>
	<?php
	echo "<div class='tab-pane fade active in' id='home'>";
	include'adminempresa/crear_empresa.php';
	echo "</div><div class='tab-pane fade' id='crear'>";
	include'adminempresa/empresa_mostrar.php';
	?>
	<div id="changeempresa"></div>
</div>
<script src='js/jquery-1.11.2.min.js' type='text/javascript'></script>
<script src="js/bootstrap-table.js" type="text/javascript"></script>
<script src="js/validaciones.js" type="text/javascript" ></script>
<script src="js/empresam.js" type="text/javascript"></script>

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

</script>

<span id="spanme"></span>
<span id="hole"></span>
<div id='eliminar' class='modal fade' role='dialog'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='panel-footer'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
         <h4 class='modal-title' id='myModalLabel'><?php echo $lang['Cdelete'] ?></h4>
      </div>
      <div class='modal-body'>
                <p><?php echo $lang['Xdelete'] ?></p>
                <p><?php echo $lang['Fdelete']?></p>
                <p class='debug-url'></p>
				<div class="row">
				<button class='btn btn-default' onclick="changeed()" data-dismiss='modal'><?php echo $lang['Salir'] ?></button>
				<a type='button' class='btn btn-default' data-dismiss='modal'><?php echo $lang['Aceptar'] ?></a>
				</div>
      </div>
      <div class='panel-footer'>
      </div>
    </div>
  </div>
</div>
</body>
</html>
