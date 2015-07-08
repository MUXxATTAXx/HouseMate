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
	$idt =  str_replace("d","",$id);
	if($idt != 0)
	{
		$query = mysql_query("Update usuario Set Empresa = '' Where IdUsuario = '$idt'");
		echo "<label class='label label-success'>".$lang['modificar-exito']."</label>";
	}
	else{
	}
?>