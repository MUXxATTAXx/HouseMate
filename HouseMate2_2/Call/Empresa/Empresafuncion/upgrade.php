<?php
$empresa = $_POST['idempresa'];
$id = $_POST['id'];
if(isset($id) and isset($empresa)){
        Arios($id,$empresa);
    }
	else
	{
	}
function Arios($id,$empresa)
{
  session_start();
	include("../../../conexion.php");
	include("../../Lenguaje/lenguaje.php");
  $idt =  str_replace("u", "", $id);
	$gettitulo = mysql_query("Select idusuario From usuario Where idusuario = '$idt' and empresa = '$empresa'");
	if(mysql_num_rows($gettitulo) > 0)
	{
    $query = mysql_query("Update empresa set dueño = '$idt' Where idempresa = '$empresa'");
    echo "<script>location.reload();</script>";
	}
	else
	{
	}
}
?>
