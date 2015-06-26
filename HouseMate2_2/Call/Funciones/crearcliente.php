<?php
session_destroy();
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $fechanac = $_POST['fechanac'];
    $correo = trim($_POST['correo']);
		$usuario = trim($_POST['user']);
    $contra1 = trim($_POST['contra']);
    $contra2 = trim($_POST['contra2']);
		$tipo = $tiposu;

		$con = mysql_connect('localhost','root', '');
		mysql_select_db('bdhousemate', $con);
		mysql_query("Set Names 'utf8'");
		include "Call/Lenguaje/lenguaje.php";
		if($nombre != "" and $apellido != "" and $fechanac != "" and $correo != "" and $usuario != "" and $contra1 != "" and $contra2 != "" and $tipo != 0)
		{
			if($contra1 == $contra2)
			{
				$query = "Select usuario FROM tbusuario WHERE usuario ='$usuario'";
				$result = mysql_query($query);
				if(mysql_num_rows($result) > 0)
				{
					//Usuario en uso
					echo"<center><span class='label label-danger'>".$lang['ErUsuarioYa']."</span></center>";
				}
				$query2 = "Select correo FROM tbusuario WHERE correo ='$correo'";
				$result2 = mysql_query($query2);
				if(mysql_num_rows($result2) > 0)
				{
					//Correo en uso
					echo"<center><span class='label label-danger'>".$lang['ErCorreoya']."</span></center>";
				}
				else
				{
					$cantidad = "Select * FROM tbusuario";
					$numero = mysql_query($cantidad);
					$digito = mysql_num_rows($numero);
					$maximun = $digito;
					if(!isset($tipo))
					{
						$tipo = 4;
					}
					$consulta = "INSERT INTO tbUsuario VALUES ('$maximun','$nombre','$apellido','$fechanac','$correo','$usuario','$contra1','$tipo',null)";
					echo "<span class='label label-success'>".$lang['Uingre']."</span>";
					mysql_query($consulta);
				}
			}
			else
			{
				echo "<span class='label label-important'>".$lang['error-contra']."</span>";
			}
		}

?>
