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
<ul id='what' class='nav nav-tabs'>
			<li id='me' class='active'><a href='#recibidos' data-toggle='tab'>Recibidos</a></li>
            <li id='me'><a href='#enviados' data-toggle='tab'>Enviados</a></li>
</ul>
<div class="tab-content">
<?php
include "conexion.php";
$usuario = $_SESSION['id'];
$consulta = "SELECT * FROM mensaje WHERE destinatario = '$usuario' ORDER BY fecha DESC";
$cs = mysql_query($consulta);

    
?>
    <div class='tab-pane fade active in' id='recibidos'>
    <div bg-color="black">
        <table class="table table-striped table-hover " bgcolor="black">

          <thead>
            <tr>
              <th>Fecha</th>
            <th>Remitente</th>
              <th>Asunto</th>
              <th>Mensaje</th>
            </tr>
          </thead>
            <tbody>
            <?php
                while($row = mysql_fetch_array($cs)){
                    $desc = mysql_query("SELECT usuario FROM tbusuario WHERE idUsuario ='".$row['remitente']."'");
                    while($row2 = mysql_fetch_array($desc)){
                    echo "<tr>
                        <td>".$row['fecha']."</td>
                        <td>".$row2['usuario']."</td>
                        <td>".$row['asunto']."</td>
                        <td>".substr($row['mensaje'],0,50)."...</td>
                    </tr>";
                    }
                }
            ?>
            </tbody>
        </table>
    </div>
    </div>
    <div class='tab-pane fade' id='enviados'>
                <table class="table table-striped table-hover " bgcolor="black">
                    <?php
                    include "conexion.php";
                    $usuario = $_SESSION['id'];
                    $consulta = "SELECT * FROM mensaje WHERE remitente = '$usuario' ORDER BY fecha DESC";
                    $cs = mysql_query($consulta);
                    ?>
          <thead>
            <tr>
              <th>Fecha</th>
              <th>Destinatario</th>
              <th>Asunto</th>
                <th>Mensaje</th>
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
                        <td>".$row['asunto']."</td>
                        <td>".substr($row['mensaje'],0,50)."...</td>
                    </tr>";
                    }
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>