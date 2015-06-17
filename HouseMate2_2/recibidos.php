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
     <script src='js/jquery-1.11.2.min.js' type='text/javascript'></script>
<script src="js/bootstrap-table.js" type="text/javascript"></script>
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
<?php
include "conexion.php";
$usuario = $_SESSION['id'];
//SELECT * FROM mensaje WHERE destinatario = 2 AND estado2 = 1 ORDER BY fecha DESC
$consulta = "SELECT * FROM mensaje WHERE destinatario = '$usuario' AND estado2 = '1' ORDER BY fecha DESC";
$cs = mysql_query($consulta);  
?>
<form action="recibidos.php" method="POST">
        <table data-toggle='table' id='here' class='table table-striped table-hover negro'>
               <!--data-search='true' data-show-refresh='true' data-query-params='queryParams'>-->
            
          <thead>
            <tr>
                <th>#</th>
                <th><?php echo $lang['fecha'];?></th>
                <th><?php echo $lang['remi'];?></th>
                <th><?php echo $lang['asunto'];?></th>
                <th><?php echo $lang['msj'];?></th>
            </tr>
          </thead>
            <tbody>
            <?php
                while($row = mysql_fetch_array($cs)){
                    $desc = mysql_query("SELECT usuario FROM tbusuario WHERE idUsuario ='".$row['remitente']."'");
                    while($row2 = mysql_fetch_array($desc)){
                    echo "<tr>
                        <td><input name= 'check[]' value='".$row['idmensaje']."' type='checkbox''></td>
                        <td>".$row['fecha']."</td>
                        <td>";
                        if($row['estado']=="2"){
                        }
                        else
                        {
                        }
                    echo"</td>
                        <td>".$row2['usuario']."</td>
                        <td><a href='mensaje.php?idmensaje=".$row['idmensaje']."'>".$row['asunto']."</a></td>
                        <td>".substr($row['mensaje'],0,50)."...</td>
                    </tr>";
                    }
                }
            ?>
            </tbody>
        </table>
    <select class=" checbocks" name="estado">
    </select>
<?php
    $check = $_POST['check'];
    for($i=0;$i<count($check);$i++){
        $del_id = $check[$i];
        $sql = mysql_query("UPDATE mensaje SET estado2 = '2' WHERE idmensaje ='$del_id'");
    }
}
?>
</form>
</body>
</html>
