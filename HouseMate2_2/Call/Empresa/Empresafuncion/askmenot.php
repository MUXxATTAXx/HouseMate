<?php 
session_start();
	include "../../../conexion.php";
	include "../../Lenguaje/Lenguaje.php";
	$variable =	$_SESSION['empresalobby']; 
	$usuario = $_SESSION['id'];
	
	$realusuario = mysql_query("Select usuario.idusuario, usuario.Empresa From usuario inner join tbusuario on usuario.TempId = 
		tbusuario.idusuario Where usuario.TempId = '$usuario'");
		While($row = mysql_fetch_array($realusuario))
		{
			$myid = $row['idusuario'];
			$empresafound = $row['Empresa'];
			$checkbefore = mysql_query("Select * From empresasolicitud Where idempresa = '$variable' and idusuario = '$myid'");
			$anythere = mysql_num_rows($checkbefore);
			if ($anythere == 0)
			{
				if($empresafound == null || $empresafound == ""){
				$cantidad = mysql_query("Select idsolicitud From empresasolicitud");
				$digito = mysql_num_rows($cantidad);
				$query = mysql_query("Insert into empresasolicitud Values ('$digito','$variable','$myid','0','1','')");
				echo "<label class='label label-success'>".$lang['modificar-exito']."</label>";}
				else
				echo "<label class='label label-warning'>".$lang['YTE']."</label><a href='Empresa.php'>".$lang['Aqui']."</a>";
			}
			else
			{
				echo "<label class='label label-warning'>".$lang['msj-yaenviado']."</label>";
			}
		}

?>