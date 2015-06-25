<?php 
if(isset($_POST['modificar'])){
	if($_POST['nombre'] != "" and $_POST['nit'] != "" and $_POST['telefono'] != "" and $_POST['Departamento3'] != ""
		and $_POST['Municipio3'] != "nada"){
		mysql_query("SET NAMES 'utf8'");

		$variable1 = $_POST['nombre'];
		$variable2 = $_POST['nit'];
		$variable3 = $_POST['telefono'];
		$variable4 = $_POST['Departamento3'];
		$variable5 = $_POST['Municipio3'];
		$lugar = $variable5.", ".$variable4.", El Salvador";
		$a = $_POST['telefono2'];
		$b = $_POST['descripcion'];
		$varing = $_FILES['file']["tmp_name"];
		$c = $_FILES['file']["name"];
		$imagevar = $c;
		$queryempresa = "Update empresa SET ";
		$queryamount = mysql_query("Select * FROM EMPRESA");
		$digito = mysql_num_rows($queryamount);
		$who = $_SESSION['id'];
		$restoquery = "telefono='$variable3',nombre='$variable1',direccion='$lugar',nit='$variable2',";
		$final_string ="";
		$endofquery = " WHERE idEmpresa = '$idempresalater'";
		$maxc = 0;
		$man = "";
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
					elseif($hayimagen != "")
					{
						$maxc++;
						$man .= "d";
					}
					break;
				}
		}
		$array = array();

		for ($n = 0; $n < $maxc; $n++)
		{
			array_push($array,substr($man,$n,1));
			if($n == $maxc-1)
			{
				switch($array[$n])
				{
				case "a":
				$final_string .= "telefono2='".$a."'";
				break;
				case "b":
				$final_string .= "descrip='".$b."'";
				break;
				case "c":
				$final_string .= "imagen='".$c."'";
				break;
				case "d":
				$final_string .= "imagen='".$hayimagen."'";
				break;
				}
			}
			else
			{
				switch($array[$n])
				{
				case "a":
				$final_string .= "telefono2='".$a."',"; 
				break;
				case "b":
				$final_string .= "descrip='".$b."',";
				break;
				case "c":
				$final_string .= "imagen='".$c."',";
				break;
				case "d":
				$final_string .= "imagen='".$hayimagen."'";
				break;
				}
			}
		}
	
		if($imagevar != null)
		{
			$query = mysql_query("SELECT imagen FROM Empresa WHERE idEmpresa = '$idempresalater'");
			$arr = mysql_fetch_array($query);
			$filename = "img/Empresas/".$row['imagen'];	
			if(file_exists($filename))
			{
				unlink($filename);
				copy($varing,"img/Empresas/$imagevar");
				$queryfinal = $queryempresa.$restoquery.$final_string.$endofquery;
				$ingresa = mysql_query($queryfinal);

			}
			else
			{
				copy($varing,"img/Empresas/$imagevar");
				$queryfinal = $queryempresa.$restoquery.$final_string.$endofquery;
				$ingresa = mysql_query($queryfinal);
			}
		}
		else
		{
			$query = mysql_query("SELECT imagen FROM Empresa WHERE idEmpresa = '$idempresalater'");
			$arr = mysql_fetch_array($query);
			$filename = "img/Empresas/".$row['imagen'];	
			if(file_exists($filename))
			{
				$queryfinal = $queryempresa.$restoquery.$final_string.$endofquery;
				$ingresa = mysql_query($queryfinal);

			}
			else
			{
				$queryfinal = $queryempresa.$restoquery.$final_string.$endofquery;
				$ingresa = mysql_query($queryfinal);
			}
		}
	}
	else{
		echo "<span class='label label-warning'>" .$lang['missing']." (*)</span>";
	}
}
else{

}
?>