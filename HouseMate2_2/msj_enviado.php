<!DOCTYPE HTML>
<html>
<head>
		<title>House Mate</title>
		<meta charset = "utf-8" />
		<link href='css/bootstrap.min.css' rel='stylesheet'/>
		<link href='css/appeal.css' rel='stylesheet'/>
	  <link href='css/bootstrap.min.css' rel='stylesheet'/>
		<link href='css/intro.css' rel='stylesheet'/>
		<link href="css/bootstrap-table.css" rel="stylesheet">
</head>
<body>
<?php
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
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
<?php
include "conexion.php";
$idmensaje = $_GET['idmensaje'];
$consulta = "SELECT * FROM mensaje WHERE idmensaje = '$idmensaje'";
$cs = mysql_query($consulta);
while($row=mysql_fetch_array($cs)){
    $cs2 = mysql_query("SELECT usuario FROM tbusuario WHERE idusuario ='".$row['destinatario']."'");
    while($row2=mysql_fetch_array($cs2)){
?>
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $row['asunto'];?></h3>
            </div>
            <div class="panel-body">
				<div class="row">
					<div class="col col-sm-3 col-centered">
						<h4><?php echo $lang['destin'].":";?></h4>
					</div>
					<div class="col col-sm-7 col-centered">
                        <h3><?php echo $row2['usuario'];?></h3>
					</div>
				</div>
				<div class="row">
					<div class="col col-sm-3 col-centered">
                        <h4><?php echo $lang['asunto'].":";?></h4>
					</div>
					<div class="col col-sm-7 col-centered">
                        <h3><?php echo $row['asunto'];?></h3>
					</div>
				</div>
                <br>
                <div class="row">
                 <div class="col col-sm-3 col-centered">
                     <h4><?php echo $lang['msj'].":";?></h4>
					</div>
                </div>
				<div class="row">
					<div class="col col-sm-3 col-centered">
					</div>
					<div class="col col-sm-7 col-centered">
						<p>
						<?php
						$mensaje = $row['mensaje'];
						$longitud = strlen($mensaje);
                        $contador = 0;
						while($contador < $longitud){
							echo substr($mensaje,$contador,50);
                            $contador = $contador + 50;
						}
						?>
						</p>
					</div>
				</div>
            </div>
            <div class="panel-footer">
                 <a href="enviados.php"><button class="btn btn-primary btn-block" type="submit"><?php echo $lang['inbox'];?></button></a>
            </div>
          </div>
    </div>
<?php
   }
}
?>
</body>
</html>
