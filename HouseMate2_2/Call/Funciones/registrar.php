<?php
session_start();
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $fechanac = $_POST['fechanac'];
    $correo = trim($_POST['correo']);
	$usuario = trim($_POST['user']);
    $contra1 = trim($_POST['contra']);
    $contra2 = trim($_POST['contra2']);
	$tipo = $_POST['tiposu'];
	if(!empty($nombre) and !empty($apellido) and !empty($fechanac) and !empty($correo) and !empty($usuario) and !empty($contra1) and !empty($contra2) and !empty($tipo)) {
            ingresar($nombre,$apellido,$fechanac,$correo,$usuario,$contra1,$contra2,$tipo);
     }
	 
	function ingresar($nombre,$apellido,$fechanac,$correo,$usuario,$contra1,$contra2,$tipo) {	
		$con = mysql_connect('localhost','root', '');
		mysql_select_db('bdhousemate', $con);
		mysql_query("Set Names 'utf8'");
		
		if($nombre != "" and $apellido != "" and $fechanac != "" and $correo != "" and $usuario != "" and $contra1 != "" and $contra2 != "" and $tipo != 0)
		{
			if($contra1 == $contra2)
			{
				$query = "Select usuario FROM tbusuario WHERE usuario ='$usuario'";
				$result = mysql_query($query);
				if(mysql_num_rows($result) > 0)
				{
					echo $lang['ErUsuarioYa'];
				}
				$query2 = "Select correo FROM tbusuario WHERE correo ='$correo'";
				$result2 = mysql_query($query2);
				if(mysql_num_rows($result2) > 0)
				{
					echo $lang['ErCorreoya'];	
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
					$consulta = "INSERT INTO tbUsuario VALUES ('$maximun','$nombre','$apellido','$fechanac','$correo','$usuario','$contra1','$tipo',NULL)";
					if(mysql_query($consulta))
					{
						
					}
					else
					{
						
						echo "<p>Consulta de insertar fallo</p>";
					}
				}
			}
			else
			{
				echo "<p>contraseña incorrecta</p>";
			}
		}
		else
		{
		echo '<p>Campos vacios en Registrarse"</p>';
		}
}
?>