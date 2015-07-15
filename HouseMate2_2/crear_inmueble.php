
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/change.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">

<?php
    require("Header/barranav2.php");
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo($lang['real-estate']);?></title>
	<meta charset = "utf-8" />

</head>
<body>
<div class="row row-centered">
	<div class="col-sm-7 col-centered">
		<?php include_once("conexion.php"); ?>
		<ul id="what" class="nav nav-tabs">

			<li id="me" class='active negro'><a href='#home' data-toggle='tab'><?php echo($lang['Crear-Inmuebles']);?></a></li>
			<li id="me2" class="negro"><a href='#crear' data-toggle='tab'><?php echo($lang['Ver-Inmuebles']);?></a></li>
		</ul>
	</div>
</div>

<div id='myTabContent' class='tab-content'>

<div class='tab-pane fade active in' id='home'>
<?php
 require('admininmueble/ingresar_inmueble.php');
 ?>
</div>
 <div class='tab-pane fade negro' id='crear'>
 <div id="thetablejq">
	</div>
		<div id='realornot'>
	</div>
 </div>
 <div class="tab-pane fade" id="sd">
  <div id="thetablemodif">
	</div>
	</div>
		<div id='errormodificar'>
	</div>
	<span class="hidme" id="modificarid"></span>
 </div>


</div>


<script type="text/javascript">
$(window).load(function()  {
		loadDataAdmin();
		loadDataModificar();
	});
function loadDataAdmin(){
	idre = $("#modificarid").val();
$.ajax({
type: 'POST',
data: "idre="+idre,
url: 'Call/Funciones/mostrar_inmueble.php',
success: function(msg) {
	$("#thetablejq").html(msg);
},
});
};
function loadDataModificar(){
$.ajax({
type: 'POST',
data: "idre="+idre,
url: 'Call/Funciones/modificardefault.php',
success: function(msg) {
	$("#thetablemodif").html(msg);
},
});
};
  $("#deleteuser").click(function(){
		  //obtenemos el texto introducido
		  idre = $("#spanme").html();
		  //ingresar usuario
		  $.ajax({
				type: "POST",
				url: "Call/Funciones/borrar_inmueble.php",
				data: "idre="+idre,
				dataType: "html",
				beforeSend: function(){
					  //imagen de carga

				},
				error: function(){
					  alert("error petición ajax");
				},
				success: function(data){
						$("#realornot").empty();
						$("#realornot").append(data);
						loadDataAdmin();
						}
				  });
			});
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="js/jquery.chained.js?v=1.0.0" type="text/javascript" charset="utf-8"></script>
<script src="js/validaciones.js" type="text/javascript" ></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" ></script>
<script>
  $(function() {
$("#Municipio").chained("#Departamento");
$("#Municipio2").chained("#Departamento2");
});
</script>
</body>
</html>
