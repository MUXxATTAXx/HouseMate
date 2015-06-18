<html>
<?php 
session_start();
include("conexion.php");
include("Lenguaje/lenguaje.php");
$idsujeto = $_SESSION['id'];
$querrycheck = mysql_query("SELECT * FROM EMPRESA WHERE dueño ='$idsujeto'");
if(mysql_num_rows($querrycheck) > 0){
	include "Call/Empresa/Empresa.php";
}
else{
	include "Call/Empresa/Empresacrear.php";
}
?>
</html>