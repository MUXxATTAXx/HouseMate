<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/profile_cards.css" rel="stylesheet">
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
<!DOCTYPE HTML>
<html>
<head>	
	<title><?php echo $lang['mis-inmuebles'];?></title>
	<meta charset = "utf-8" />
	<link href='css/estilo.css' rel='stylesheet'/>
	
</head>
<body> 
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
$consulta = "SELECT * FROM asociados WHERE socio1 = '$socio'";
$cs2 = mysql_query($consulta);

while($row2 = mysql_fetch_array($cs2)){
    $consulta2 = "SELECT * FROM tbusuario WHERE idUsuario = '".$row2['socio2']."'";

    $cs = mysql_query($consulta2);
    while($row = mysql_fetch_array($cs)){
//Inicio de bloque
    echo    "<div class='col-xs-12 col-sm-6 col-md-6'>
            <div class='well well-sm'>
                <div class='row'>
                    <div class='col-sm-6 col-md-4'>
                        <img height='150px' width='150px' src='https://lh3.googleusercontent.com/-4h2GkEskmws/AAAAAAAAAAI/AAAAAAAAAAA/9UdKs51m48o/photo.jpg' alt='' class='img-rounded img-responsive' />
                    </div>
                    <div class='col-sm-6 col-md-8'>
                        <h4>".$row['usuario']."</h4>
                        <p>".$row['nombre']." ".$row['apellido']."</p>
                        <p>".$row['correo']."</p>
                    </div>
                    <div class='col-sm-6 col-md-8'>
                        <a href='enviar_msj.php?destin=".$row['usuario']."' class='btn btn-info'>".$lang['msj-enviar']."</a>
                    </div>
                </div>
            </div>
        </div>";
//Fin de bloque
    }
}
?>
    </div>
</div>
</body>
</html>