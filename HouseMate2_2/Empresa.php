<html>
<?php 
session_start();
include("conexion.php");
$idsujeto = $_SESSION['id'];
$querrycheck = mysql_query("SELECT * FROM EMPRESA WHERE dueño ='$idsujeto'");
if(mysql_num_rows($querrycheck) > 0){
	include "Call/Empresa/Empresain.php";
}
else{
	include "Call/Empresa/Empresacrear.php";
}
?>
</html>