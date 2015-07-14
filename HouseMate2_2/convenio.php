<head>
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href="css/conveniotag.css" rel="stylesheet">

</head>
<body id="intro">
<?php
session_start();
echo("<meta charset=utf-8 />");
	if(isset($_SESSION['tip']))
	{
		switch($_SESSION['tip'])
		{
			case 1:
			include("Header/barranav2.php");
			break;
			case 2:
			break;
			case 3:
            include("Header/barranav3.php");
			break;
			case 4:
				include("Header/barranav6.php");
			break;
		}
	}
	else {
		include("Header/barranav0.php");
	}

?>
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row panel">
		<?php
			if(!isset($_GET['IdInmueble'])){
				echo "<script></script>";
			}
			include "conexion.php";
			$inmuebleid = $_GET['IdInmueble'];
			$inmueble = "SELECT * FROM Inmueble WHERE IdInmueble = '$inmuebleid'";
			$inmueble_con = mysql_query($inmueble);
			while($row = mysql_fetch_array($inmueble_con)){

		?>
		<div class="col-md-4 bg_blur ">
			<img height="100%" width="100%" src="<?=$row['Imagen']?>">
		</div>
        <div class="col-md-8  col-xs-12">

           <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail picture hidden-xs" />
           <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail visible-xs picture_mob" />
           <div class="header">
                <h1><?=$row['Direccion']?></h1>
                <h4>$<?=$row['Precio']?></h4>
                <span><?=$row['Descripcion']?></span>
           </div>
        </div>
    </div>
<?php
$consulta = "SELECT * from Usuario WHERE IdUsuario =".$row['Dueno'];
$consulta_con = mysql_query($consulta);
while($row2 = mysql_fetch_array($consulta_con)){
 ?>
	<div class="row nav">
        <div class="col-md-4"></div>
        <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
            <div class="col-md-4 col-xs-4 well"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
            <div class="col-md-4 col-xs-4 well"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
            <div class="col-md-4 col-xs-4 well"><a href='enviar_msj.php?destin=<?=$row2['usuario']?>' class='glyphicon glyphicon-envelope btn-info btn-sm'></a></div>
        </div>
    </div>
</div>
<?php
	}
}
 ?>
