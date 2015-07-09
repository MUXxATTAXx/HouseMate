<?php 
$vartitulo = $_POST['var1'];
$varmensaje = $_POST['var2'];
$empresa = $_POST['value'];
if($vartitulo != "" and $varmensaje != "" and isset($empresa)){
        insert($vartitulo,$varmensaje,$empresa);
    }
	else
	{
		include("../../Lenguaje/lenguaje.php");
		echo "<label class='label label-warning'>".$lang['missing']."</label>";	
		
	}
function insert($vartitulo,$varmensaje,$empresa)
{
	session_start();
	include("../../../conexion.php");
	include("../../Lenguaje/lenguaje.php");
	$conta = mysql_query("Select idmensaje From empresamen");
	$digito = mysql_num_rows($conta);
	$date = getdate();
	$gettitulo = mysql_query("Select titulo From empresamen Where titulo = '$vartitulo'");
	if(mysql_num_rows($gettitulo) > 0)
	{
		
	}
	else
	{
		$query = mysql_query("Insert into empresamen Values ('$digito','$empresa','$vartitulo','$varmensaje','$date')");
		echo "<label class='label label-success'>".$lang['modificar-exito']."</label>";		
	}
}
?>