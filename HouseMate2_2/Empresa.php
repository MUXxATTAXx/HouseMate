<?php
session_start();
include("conexion.php");
include("Call/Lenguaje/lenguaje.php");
$idsujeto = $_SESSION['id'];
$querrycheck = mysql_query("SELECT idusuario FROM usuario WHERE empresa <> '' and TempId ='$idsujeto'");
$cosa1 = mysql_num_rows($querrycheck);
$querrycheck2 = mysql_query("SELECT idusuario FROM usuario WHERE TempId ='$idsujeto' and empresa = ''");
$cosa2 = mysql_num_rows($querrycheck2);
$querycheck3 = mysql_query("SELECT empresa.dueño FROM empresa inner join usuario on
empresa.dueño = usuario.empresa where usuario.TempId = '$idsujeto'");
$cosa3 = mysql_num_rows($querycheck3);
$_SESSION['true']  =true;
if($cosa1 > 0 || $cosa3 > 0){
	include "Call/Empresa/Empresain.php";
}
elseif($cosa2 > 0)
{
	include "Call/Empresa/Empresacrear.php";
}
else{
  header("Location: Call/Empresa/mejorela.php");
	die();
}
?>
