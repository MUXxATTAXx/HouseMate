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
			$tiene = mysql_query("Select Count(Empresa) From usuario Where idusuario = '$myid'");
			if(mysql_num_rows($tiene) > 1)
			{
				echo $row['idusuario'];
				echo "<label class='label label-warning'>".$lang['YTE']."</label><a href='Empresa.php'>".$lang['Aqui']."</a>";
			}
			else
			{
				$query = mysql_query("Update usuario Set Empresa = '$variable' WHERE idusuario = '$myid'");
				$query2 = mysql_query("Update empresasolicitud Set aprovado2 = '1' Where idusuario = '$myid'");
				echo "<label class='label label-success'>".$lang['modificar-exito']."</label>";
			}
		}
?>