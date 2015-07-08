<?php 
session_start();
if($_SESSION['empresalobby'] != "" || isset($_GET['empresa']))
{
	include "conexion.php";
	if(isset($_GET['empresa']))
	$digito = $_GET['empresa'];
	else{
	$digito = $_SESSION['empresalobby'];}
	$consulta = mysql_query("SELECT * from empresa inner join usuario on empresa.dueño =  usuario.idusuario where empresa.idempresa ='".$digito."'");
	$digito = mysql_num_rows($consulta);
	if($digito > 0 )
	{
		
		include "Call/Empresa/Empresalobby.php";
	}
	else
	{
		echo "<script> 
    window.history.back();
			</script>";
	}
}
else
	{
		echo "<script> 
			window.history.back();
			</script>";
	}
?>