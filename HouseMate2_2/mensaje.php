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
		include("Header/barranav3.php");
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
if(!isset($_GET['idmensaje'])){
    header('Location: recibidos.php');
}
$idmensaje = $_GET['idmensaje'];
$consulta = "SELECT * FROM mensaje WHERE idmensaje = '$idmensaje'";
$cs = mysql_query($consulta);
$consulta2 = mysql_query("UPDATE mensaje SET estado = '2' WHERE idmensaje = '$idmensaje' ");
while($row=mysql_fetch_array($cs)){
    $cs2 = mysql_query("SELECT usuario FROM tbusuario WHERE idusuario ='".$row['remitente']."'");

    while($row2=mysql_fetch_array($cs2)){
?>
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $row['asunto'];?></h3>
            </div>
            <div class="panel-body">
                <table>
                    <thead>
                        <?php echo "<td>".$lang['remi'].":  </td>";?>
                        <?php echo "<td><h3>".$row2['usuario']."</h3></td>";?>
                    </thead>
                    <tr>

                        <?php echo "<td>".$lang['asunto'].": </td>"; ?>
                        <?php echo "<td>".$row['asunto']."</td>"; ?>
                    <tr>
                </table>
                <div class="row row-centered">
                      <?php echo "<h3>".$lang['msj']."</h3>";?>
                      <?php echo "<h4>".$row['mensaje']."</h4>"; ?><br>
                </div>
            </div>
            <div class="panel-footer">
                 <a href="recibidos.php"><button class="btn btn-primary btn-block" type="submit"><?php echo $lang['inbox'];?></button></a>
            </div>
          </div>
    </div>
<?php
   }
}
?>
</body>
</html>
