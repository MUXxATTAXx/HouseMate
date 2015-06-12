<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<?php
    echo("

    <link href='css/bootstrap.min.css' rel='stylesheet'/>
    <link href='css/mymessages.css' rel='stylesheet'/>

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
include "conexion.php";
//Mensaje que me han enviado
$usuario = $_GET['remitente'];
$consulta1 = "
SELECT tbusuario.usuario, mensaje.asunto, mensaje.mensaje, mensaje.fecha, mensaje.idmensaje
FROM tbusuario
INNER JOIN mensaje
ON tbusuario.IdUsuario=mensaje.remitente
WHERE mensaje.destinatario = '$usuario'
ORDER BY mensaje.fecha ASC
";
$cs1 = mysql_query($consulta1);
//Comienzo de Mensajes
echo"<div class='container'>
<div class='row'>
		<h2>Time Line</h2>
</div>
";
while($row = mysql_fetch_array($cs1)){
//Inicio de bloque

    echo"
    <div class='qa-message-list' id='wallmessages'>
    				<div class='message-item' id='m16'>
						<div class='message-inner'>
							<div class='message-head clearfix'>
								<div class='avatar pull-left'><a href='./index.php?qa=user&qa_1=Oleg+Kolesnichenko'><img src='https://ssl.gstatic.com/accounts/ui/avatar_2x.png'></a></div>
								<div class='user-detail'>
									<h5 class='handle'>".$row['asunto']."</h5>
									<div class='post-meta'>
										<div class='asker-meta'>
											<span class='qa-message-what'></span>
											<span class='qa-message-when'>
												<span class='qa-message-when-data'>".$row['fecha']."</span>
											</span>
											<span class='qa-message-who'>
												<span class='qa-message-who-pad'>by ".$row['usuario']."</span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class='qa-message-content'>
                                ".$row['mensaje']."
							</div>
					</div></div>
    ";
//Fin de bloque
}
//Find de Mensajes
echo"</div>";
?>

    </div>
</div>
</body>
</html>