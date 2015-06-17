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
<ul id='what' class='nav nav-tabs'>
			<li id='me' class='active'><a href='#recibidos' data-toggle='tab'><?php echo $lang['recibidos'];?></a></li>
            <li id='me'><a href='#enviados' data-toggle='tab'><?php echo $lang['enviados'];?></a></li>
</ul>
<div class="tab-content">
<?php
include "conexion.php";
$usuario = $_SESSION['id'];
$consulta = "SELECT * FROM mensaje WHERE destinatario = '$usuario' ORDER BY fecha DESC";
$cs = mysql_query($consulta);

    
?>
    <div class='tab-pane fade active gris in' id='recibidos'  >
        <table data-toggle='table'  id='here' class='table table-striped table-hover negro'>
               <!--data-search='true' data-show-refresh='true' data-query-params='queryParams'>-->
            
          <thead>
            <tr>
                <th>#</th>
                <th><?php echo $lang['fecha'];?></th>
                <th>Estado</th>
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
                        <td><input name= 'check".$row['idmensaje']."' type='checkbox''></td>
                        <td>".$row['fecha']."</td>
                        <td>";
                        if($row['estado']=="2"){
                        echo "<span class='label label-primary'>Leido</span>";
                        }
                        else
                        {
                            echo "<span class='label label-danger'>Pendiente</span>";
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

    </div>
    <div class='tab-pane fade gris' id='enviados'>
                <table data-toggle='table'  id='here' class='table table-striped table-hover negro'  data-search='true' data-show-refresh='true' data-query-params='queryParams'>
                    <?php
                    include "conexion.php";
                    $usuario = $_SESSION['id'];
                    $consulta = "SELECT * FROM mensaje WHERE remitente = '$usuario' ORDER BY fecha DESC";
                    $cs = mysql_query($consulta);
                    ?>
          <thead>
            <tr>
                <th><?php echo $lang['fecha'];?></th>
                <th><?php echo $lang['destin'];?></th>
                <th><?php echo $lang['asunto'];?></th>
                <th><?php echo $lang['msj'];?></th>
            </tr>
          </thead>
            <tbody>
            <?php
                while($row = mysql_fetch_array($cs)){
                    
                    $desc = mysql_query("SELECT usuario FROM tbusuario WHERE idUsuario ='".$row['destinatario']."'");
                    while($row2 = mysql_fetch_array($desc)){
                    
                    echo "<tr>
                        <td>".$row['fecha']."</td>
                        <td>".$row2['usuario']."</td>
                        <td><a href='msj_enviado.php?idmensaje=".$row['idmensaje']."'>".$row['asunto']."</a></td>
                        <td>".substr($row['mensaje'],0,50)."...</td>
                    </tr>";
                    }
                }
            ?>
            </tbody>
        </table>
        <script>
            $(document).ready(function() {
    $('#here').dataTable( {
        "dom": '<"top"i>rt<"bottom"flp><"clear">'
    } );
} );
            </script>
    </div>
</div>
<form action="inbox.php" method="POST">
    
    <input value="1" type="checkbox" name="check" value >
    <button name="marcar" type="submit" class="btn btn-primary boxleft" value="1">Marcar</button>
    <button name="eliminar" type="submit" class="btn btn-primary boxleft" value="2">Eliminar</button>
<?php
if(isset($_POST['eliminar'])){
    echo $_POST['check'];
}
elseif(isset($_POST['marcar'])){
    echo"M";
}
else{
    echo "error";
}
?>
</form>
</body>
</html>