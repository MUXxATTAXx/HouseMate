<?php 
	session_start();
	$id = $_POST['id'];
	if(isset($id)){
        delete($id);
    }
	function delete($id)
	{
		include("../../../conexion.php");
		include("../../Lenguaje/lenguaje.php");
		$idt =  str_replace("x","",$id);
		$query = mysql_query("Delete From empresasolicitud Where idsolicitud = '$idt'");
		$query2 = mysql_query("Update empresasolicitud Set idsolicitud = idsolicitud - 1 Where idsolicitud > 'idt'");
		echo "<label class='label label-success'>".$lang['modificar-exito']."</label>";		
	}
?>