<?php 
include("../../conexion.php");
include("../Lenguaje/lenguaje.php");
mysql_query("SET NAMES 'utf8'");

$variable1 = $_POST['nombre'];
$variable2 = $_POST['nit'];
$variable3 = $_POST['telefono'];
$variable4 = $_POST['Departamento3'];
$variable5 = $_POST['Municipio3'];
$a = $_POST['telefono2'];
$b = $_POST['descripcion'];
$c = $_POST['archivo'];
$queryempresa = "INSERT INTO EMPRESA VALUES";
for ($i=1;$i <=3;$i++) 
{
		switch ($i)
		{
			case 1:
			if ($a != "" || $a != null)
			{
				$maxc++;
				$man .= "a";
			}
			break;
			case 2:
			if ($b != "" || $b != null)
			{
				$maxc++;
				$man .= "b";
			}
			break;
			case 3:
			if ($c != "" || $c != null)
			{
				$maxc++;
				$man .= "c";
			}
			break;
		}
}
$array = array();
$final_string ="";
for ($n = 0; $n < $maxc; $n++)
{
	array_push($array,substr($man,$n,1));
	if($n == $maxc-1)
	{
		switch($array[$n])
		{
		case "a":
		$final_string .= " nombre='".$b."' ";
		break;
		case "b":
		$final_string .= " apellido='".$c."' ";
		break;
		case "c":
		$final_string .= " fechanac='".$d."' ";
		break;
		}
	}
	else
	{
		switch($array[$n])
		{
		case "a":
		$final_string .= " nombre='".$b."',"; 
		break;
		case "b":
		$final_string .= " apellido='".$c."',";
		break;
		case "c":
		$final_string .= " fechanac='".$d."',";
		break;

		}
	}
}
?>