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
 <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
<script src="js/bootstrap-table.js" ></script>
<script src="js/validaciones.js" type="text/javascript" ></script>

<script type="text/javascript">                                                      
        //comprobamos si se pulsa una boton
        $("#ingresarstuff").click(function(){
                                     
		  //obtenemos el texto introducido
		   nombre = $("#nombre").val();
			apellido = $("#apellido").val();
			fechanac = $("#fechanac").val();      
			correo = $("#lowerme").val();      
			user = $("#user").val();      
			contra = $("#contra").val();  
			contra2 = $("#contra2").val(); 
			tiposu = $("#tiposu").val(); 
		  //ingresar usuario
																			  
		  $.ajax({
				type: "POST",
				url: "Call/Funciones/registrar.php",
				data: "nombre="+nombre+"&apellido="+apellido+"&fechanac="+fechanac+"&correo="+correo+"&user="+user+"&contra="+contra+"&contra2="+contra2+"&tiposu="+tiposu,
				dataType: "html",
				beforeSend: function(){
					  //imagen de carga
					  $("#resultadoinsert").html("<p align='center'><load.info/images/exemples/26.gif'/></p>");    
				},
				error: function(){
					  alert("error petición ajax");
				},
				success: function(data){  
					$("#nombre").val("");
					$("#apellido").val("");
					$("#fechanac").val("");      
					$("#lowerme").val("");      
					$("#user").val("");      
					$("#contra").val("");  
					$("#contra2").val(""); 
					$("#tiposu").val(1);
					$("#resultadoinsert").empty();
					$("#resultadoinsert").append(data);
					loadData();	
						}
				  });
															   
			});

	$(window).load(function()  {
				loadData();
			});
</script>
<span id="spanme"></span>
</body>
</html>