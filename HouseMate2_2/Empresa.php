<html>
<?php 
session_start();
include("conexion.php");
include("Call/Lenguaje/lenguaje.php");
$idsujeto = $_SESSION['id'];
$querrycheck = mysql_query("SELECT * FROM EMPRESA WHERE dueño ='$idsujeto'");
$cosa1 = mysql_num_rows($querrycheck);
$querrycheck2 = mysql_query("SELECT EMPRESA FROM usuario Where Empresa >= '0'");
$cosa2 = mysql_num_rows($querrycheck2);
$querrycheck3 = mysql_query("SELECT * FROM usuario WHERE Tempid='$idsujeto'");
$cosa3 = mysql_num_rows($querrycheck3);
if($cosa1 > 0 || $cosa2  > 0){
	include "Call/Empresa/Empresain.php";
}
elseif($cosa3 > 0)
{
	
}
else{
	include "Call/Empresa/Empresacrear.php";
}
?>
</html>