<?php
    require("conexion.php");
	
	$query = "Select usuario FROM tbusuario WHERE usuario ='$usuario'";
	$result = mysql_query($query);
	if(mysql_num_rows($result) > 0)
	{
		echo $lang['ErUsuarioYa']."<br>";
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
		if(!isset($_POST['tiposu']))
		{
			$tipo = 4;
		}
		
		$consulta = "INSERT INTO tbUsuario VALUES ('$maximun','$nombre','$apellido','$fechanac','$correo','$usuario','$contra1','$tipo',NULL)";
        if(mysql_query($consulta))
		{
			$query = $_SERVER['PHP_SELF'];
			$path = pathinfo( $query );
			$url = $path['basename'];
			
		}
        else
		{
            echo "<p>Consulta de insertar fallo</p>";
		}
	}
?>