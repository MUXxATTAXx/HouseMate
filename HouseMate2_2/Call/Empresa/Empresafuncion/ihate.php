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
			$query = mysql_query("Update empresasolicitud Set aprovado2 = '2' WHERE idusuario = '$myid' and idempresa = '$variable'");
			echo "<label class='label label-success'>".$lang['modificar-exito']."</label>";
		}
?>