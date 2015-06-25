<?php 
$var = $_POST['correo'];
$var2 = $_POST['mensaje'];
$var3 = $_POST['idempresa'];
if($var != "" and $var2 != "" and $var3 != "")
{
	enviar($_POST['correo'],$_POST['mensaje'],$var3);
}
else
{
	echo "nada";
}
function enviar($correo,$mensaje,$idempresa)
{
	session_start();
	include("../../../conexion.php");
	include("../../Lenguaje/lenguaje.php");
	$query = mysql_query("Select * From tbusuario inner join usuario on tbusuario.IdUsuario = usuario.TempId
	Where tbusuario.correo = '$correo' and tbusuario.IdUsuario = usuario.TempId");
	$idremitente = $_SESSION['id'];
	$idsujeto;
	if (mysql_num_rows($query) > 0)
	{
		while($row = mysql_fetch_array($query))
		{
			$idsujeto = $row['idUsuario'];
		}
		
		$solicitudempresa = mysql_query("Select * From empresasolicitud");
		$numero = mysql_num_rows($solicitudempresa);
		$check = mysql_query("Select * FROM empresasolicitud where idempresa = '$idempresa' and idusuario = '$idsujeto'");
		echo "Select * FROM empresasolicitud where idempresa = '$idempresa' and idusuario = '$idsujeto'";
		if(mysql_num_rows($check) == 0)
		{
			$queryenivar = mysql_query("Insert into empresasolicitud values ('$numero','$idempresa','$idsujeto','1','0','$mensaje')");
			echo $queryenivar;	
		}
		else
		{	
			echo "ya";
		}
		
		
	}
	else
	{
		
	}
}

?>