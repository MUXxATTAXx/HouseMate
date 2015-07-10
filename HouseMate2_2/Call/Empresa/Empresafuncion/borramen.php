<?php 
	session_start();
	$id = $_POST['id'];
	$empresa = $_POST['empresa'];
	if(isset($id) and isset($empresa)){
        delete($id,$empresa);
    }
	function delete($id,$empresa)
	{
		include("../../../conexion.php");
		include("../../Lenguaje/lenguaje.php");
		$idt =  str_replace("m","",$id);
		$query = mysql_query("Delete From empresamen Where idmensaje = '$idt' and idempresa = '$empresa'");
		$query2 = mysql_query("Update empresamen Set idmensaje = idmensaje - 1 Where idmensaje > '$idt' and idmensaje = '$idt' and idempresa = '$empresa'");
		echo "<label class='label label-success'>".$lang['modificar-exito']."</label>";		
	}
?>