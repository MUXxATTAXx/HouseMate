<?php 
session_start();
include("conexion.php");
include("Call/Lenguaje/lenguaje.php");
$idsujeto = $_SESSION['id'];
$querrycheck = mysql_query("SELECT * FROM EMPRESA WHERE dueño ='$idsujeto'");
$cosa1 = mysql_num_rows($querrycheck);
$querrycheck3 = mysql_query("SELECT * FROM usuario WHERE TempId ='$idsujeto'");
$cosa3 = mysql_num_rows($querrycheck3);
$_SESSION['true']  =true;
if($cosa1 > 0){
	include "Call/Empresa/Empresain.php";
}
elseif($cosa3 > 0)
{
	include "Call/Empresa/Empresacrear.php";

}
else{
  header("Location: Call/Empresa/mejorela.php");
	die();
}
?>