
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

<?php include_once("conexion.php"); ?>
<div class="row">
        <ol class="breadcrumb bread-primary breadnomargin">
            <li><a><?php echo($lang['Inmuebles']);?></a></li>
        </ol>
    </div>
<ul id="what" class="nav nav-tabs">
		
    <li id="me" class='active'><a href='#home' data-toggle='tab'><?php echo($lang['Crear-Inmuebles']);?></a></li>
    <li id="me2"><a href='#crear' data-toggle='tab'><?php echo($lang['Ver-Inmuebles']);?></a></li>
    <li id="me3"><a href='#sd' data-toggle='tab' ><?php echo($lang['Modificar-Inmuebles']);?></a></li>
</ul>

<div id='myTabContent' class='tab-content'>

<div class='tab-pane fade active in' id='home'>
<?php
 require('admininmueble/ingresar_inmueble.php');
 ?>
</div>
 <div class='tab-pane fade' id='crear'>
 <div id="thetablejq">
	</div>
		<div id='realornot'>
	</div>
 </div>
 <div class="tab-pane fade" id="sd">
 <?php require('admininmueble/modificar_inmueble.php'); ?> 
 </div>


</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.chained.js?v=1.0.0" type="text/javascript" charset="utf-8"></script>
<script src="js/validaciones.js" type="text/javascript" ></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript">
$(window).load(function()  {
		loadDataAdmin();
	});
function loadDataAdmin(){
$.ajax({   
type: 'POST',   
url: 'Call/Funciones/mostrar_inmueble.php',   
success: function(msg) {
	$("#thetablejq").html(msg);
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

<script src="//code.jquery.com/jquery-1.11.1.min.js" ></script>
 <script type="text/javascript" src="js/jquery.chained.js" charset="utf-8"></script>
<script>
  $(function() {
$("#Municipio2").chained("#Departamento2");
$("#Municipio").chained("#Departamento");
});
</script>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script src="js/upload.js" type="text/javascript"></script>
</body>
</html>