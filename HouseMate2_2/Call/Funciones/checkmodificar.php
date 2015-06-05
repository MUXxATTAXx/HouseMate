<?php	
	session_start();
    include("../../conexion.php");
	include("../Lenguaje/lenguaje.php");
    mysql_query("SET NAMES 'utf8'");
	$usuario = $_POST['usuario'];
	if(!empty(usuario))
	{
		checkuser($usuario);
	}
	function checkuser($usuario) 
	{
		$nombre = "";
		$apellido = "";
		$mail = "";
		$fechaname = "";
		$tipodeuso = "";
		$query = "Select * FROM tbusuario WHERE usuario ='$usuario'";
				$result = mysql_query($query);
				if(mysql_num_rows($result) > 0)
		{
				while($row=mysql_fetch_array($result))
				{
					 $nombre = $row['nombre'];
					 $apellido = $row['apellido'];
					 $fechaname = $row['fechanac'];
					 $mail = $row['correo'];
					 switch($row['tipo'])
					 {
						case 1:
						break;
						case 2:
						break;
						case 3:
						break;
						case 4:
						break;
					 }
				}
		}
		else
		{
			//error no se encuentra usuario
		}
	}		
?>