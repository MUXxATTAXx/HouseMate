<?php

    echo("
    <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
    ");
    include("conexion.php");
    mysql_query("SET NAMES 'utf8'");
    $consulta = "SELECT * FROM tbusuario where idUsuario > '0' ORDER BY `tbusuario`.`idUsuario` ASC";
    //Revisamos que no esten vacios los campos
    $cs=mysql_query($consulta);
	$var = "";
    echo"<table class='table table-responsive table-striped table-hover' id='here' border=1px>";
        echo"<tr><td><b>";
		echo $lang['Codigo'];
		echo '</b></td><td><b>';
		echo $lang['Nombre'];
		echo "</b></td><td><b>";
		echo $lang['Apellido'];
		echo "</b></td><td><b>";
		echo $lang['Correo'];
		echo "</b></td><td><b>";
		echo $lang['Fecha-Nac'];
		echo "</b></td><td><b>";
		echo $lang['Tipous'];
		echo "</b></td>";
    while($row=mysql_fetch_array($cs)){
		switch($row['tipo'])
		{
			case 1:
			$var = $lang['Admin'];
			break;
			case 2:
			$var = $lang['Agente'];
			break;
			case 3:
			$var = $lang['Perito'];
			break;
			case 4:
			$var = $lang['Cliente'];
			break;
		}
        echo "<tr><td id='a".$row['idUsuario']."'>".$row['idUsuario']."</td><td>".$row['nombre']."</td><td>".$row['apellido']."</td><td>".$row['correo']."</td><td>".$row['fechanac']."</td><td>".$var."</td></tr>";
    }
    echo"</table>";
?>

