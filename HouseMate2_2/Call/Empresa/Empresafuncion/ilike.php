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
			if($empresafound == null || $empresafound == ""){
			$query = mysql_query("Update usuario Set Empresa = '$variable', aprovado2='1' WHERE Tempid = '$myid'");
			echo "<label class='label label-warning'>".$lang['modificar-exito']."</label>";}
			else
			echo "<label class='label label-warning'>".$lang['YTE']."</label><a href='Empresa.php'>".$lang['Aqui']."</a>";
		}
?>