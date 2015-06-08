<?php
	session_start();

	$id = $_POST['idre'];
	if(!empty($id)){
            delete($id);
     }
	function delete($id)
	{
		$con = mysql_connect('localhost','root', '');
		mysql_select_db('bdhousemate', $con);
		mysql_query("Set Names 'utf8'");
		include ("../Lenguaje/lenguaje.php");
		$idt =  str_replace("x","",$id);

		$consulta = "SELECT * FROM tbUsuario WHERE IdUsuario = '$idt' AND idUsuario > 0";
		$cs=mysql_query($consulta);
		$row=mysql_fetch_array($cs);
		$id = $row['idUsuario'];
		$correo = $idt;
		$consulta = "DELETE FROM tbUsuario WHERE IdUsuario = '$idt' AND idUsuario > 0";
		if(mysql_query($consulta))
		{
		echo "<span class='label label-success'>".$lang['Eliminado-Usuario']."</span>";
		$consulta = "UPDATE tbUsuario SET IdUsuario = IdUsuario - 1 WHERE IdUsuario > '$id'";
		$cs=mysql_query($consulta);
		}
		else
		{
		echo "<span class='label label-important'>".$lang['Eliminado-Usuario-error']."</span>";
		}

    
	}
?>
 
	