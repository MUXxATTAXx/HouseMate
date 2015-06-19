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
                <th><?php echo $lang['msj-estado'];?></th>
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
                        echo "<span class='label label-primary'>".$lang['leido']."</span>";
                        }
                        else
                        {
                            echo "<span class='label label-danger'>".$lang['pendiente']."</span>";
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
	<br>
	<div class="row row-centered">
		<div class="col col-sm-2">
			<button name="marcar" type="submit" class="btn btn-default boxleft" value="1"><?php echo $lang['marcar'];?></button>
		</div>
		<div class="col col-sm-2">
			<select class="form-control" name="estado">
				<option value="2"><?php echo $lang['leido'];?></option>
				<option value="1"><?php echo $lang['pendiente'];?></option>
			</select>
		</div>
		<div class="col col-sm-1">
			<button name="eliminar" type="submit" class="btn btn-danger boxleft" value="2"><?php echo $lang['msj-elim'];?></button>
		</div>
	</div>
<?php
if(isset($_POST['eliminar']) and isset($_POST['check'])){
    $check = $_POST['check'];
    for($i=0;$i<count($check);$i++){
        $del_id = $check[$i];
        $sql = mysql_query("UPDATE mensaje SET estado2 = '2' WHERE idmensaje ='$del_id'");
    }
    echo"<span class='label label-success'>".$lang['elim-msj-exito']."</span>";
    
}
elseif(isset($_POST['marcar']) and isset($_POST['check'])){
    $check = $_POST['check'];
    $estado = $_POST['estado'];
    for($i=0;$i<count($check);$i++){
        $del_id = $check[$i];
        $sql = mysql_query("UPDATE mensaje SET estado = '$estado' WHERE idmensaje ='$del_id'");
    }
    echo"<span class='label label-success'>".$lang['marcado-exito']."</span>";
}
?>
</form>
</body>
</html>