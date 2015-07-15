<?php
	session_start();
	$id = $_POST['id'];
	$empresa = $_POST['empresa'];
	
	if(isset($id) and isset($empresa)){
        accept($id,$empresa);
    }
	function accept($id,$empresa)
	{
		include "../../../conexion.php";
		include "../../Lenguaje/Lenguaje.php";
		$idt =  str_replace("y","",$id);

		$foundyou = mysql_query("Select idusuario From empresasolicitud Where idsolicitud = '$idt'");
		while($row = mysql_fetch_array($foundyou))
		{ $who = $row['idusuario'];
		$found = mysql_query("Select idusuario from usuario where idusuario = $who");
			if(mysql_num_rows($found) > 0)
			{
				echo "<label class='label label-warning'>".$lang['YTE']."</label>";
			}
			else
			{
				$query = mysql_query("Delete From empresasolicitud Where idsolicitud = '$idt'");
				$query2 = mysql_query("Update usuario Set Empresa = '$empresa' Where  idusuario = '$who'");
				echo "<label class='label label-success'>".$lang['modificar-exito']."</label>";
			}
		}

	}
?>
