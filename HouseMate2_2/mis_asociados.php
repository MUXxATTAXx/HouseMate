<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<link href="css/empresatag.css" rel="stylesheet">

<?php
    echo("

    <link href='css/bootstrap.min.css' rel='stylesheet'/>

<meta charset=utf-8 />
    ");
    session_start();
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

?>
<html>
<head>	
	<title><?php echo $lang['mis-inmuebles'];?></title>
	<meta charset = "utf-8" />
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/profile_cards.css" rel="stylesheet">
	
</head>
<body> 
<br>
<div class="container">
    <div class="row">
<?php
$usuario = $_SESSION['id'];
include "conexion.php";
// Obtiene el verdadero id usuario
if(!isset($_GET['socio1'])){
    header('Location: perfil_admin.php');
}
$socio = $_GET['socio1'];
$yo = $_SESSION['id'];
$consulta = mysql_query("SELECT * FROM asociados WHERE socio1 = '$socio' or socio2 = $socio and solicitud = '2'");
while($row = mysql_fetch_array($consulta)){
	$usuario1 = $row['socio1'];
	$usuario2 = $row['socio2'];
	if($usuario1 != $yo ){
		$yonohesido = $row['socio1'];
	}elseif($usuario2 != $yo){
		$yonohesido = $row['socio2'];
	}
    $consulta2 = "SELECT * FROM tbusuario WHERE idUsuario = '".$yonohesido."'";
	$cs2 = mysql_query($consulta2);
    while($row = mysql_fetch_array($cs2)){
//Inicio de bloque
    echo    "
	<div class='col-sm-6'>
                <div class='row well well-sm'>
                    <div class='col-sm-4'>
                        <img src='' class='smallimage' />
                    </div>
                   <div class='col-sm-8'>
						<div class='row'>
							<div class='col-sm-12'>
								<h4>".$row['usuario']."</h4>
								<p>".$row['nombre']." ".$row['apellido']."</p>
								<a href='enviar_msj.php?destin=".$row['usuario']."' class='glyphicon glyphicon-envelope btn-info btn-sm'></a>
					</div>
				</div>
			</div>
		</div>
	</div>
		";
//Fin de bloque
    }

}
?>
    </div>
</div>
</body>