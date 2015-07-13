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
		$string = "this.is.another.sample.of.it";
		$contents = explode('.', $string);
		$varing = $_FILES['file']["tmp_name"];
		$c = $_FILES['file']["name"];
		$imagevar = $c;
		$queryempresa = "Update empresa SET ";
		$queryamount = mysql_query("Select * FROM EMPRESA");
		$digito = mysql_num_rows($queryamount);
		$who = $_SESSION['id'];
		$restoquery = "telefono='$variable3',direccion='$lugar',nit='$variable2',";
		$final_string ="";
		$endofquery = " WHERE nombre = '$variable1'";
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
			$query = mysql_query("SELECT imagen FROM Empresa WHERE nombre = '$variable1'");
			while ($dato = mysql_fetch_array($query))
			{$info = $dato['imagen'];}
			$filename = "img/Empresas/".$info;
			if(file_exists($filename))
			{
				unlink($filename);
				copy($varing,"img/Empresas/$imagevar");
				$queryfinal = $queryempresa.$restoquery.$final_string.$endofquery;
				$ingresa = mysql_query($queryfinal);
					echo "<script>window.location = 'empresa_mantenimiento.php'</script>";
			}
			else
			{
				copy($varing,"img/Empresas/$imagevar");
				$queryfinal = $queryempresa.$restoquery.$final_string.$endofquery;
				$ingresa = mysql_query($queryfinal);
					echo "<script>window.location = 'empresa_mantenimiento.php'</script>";
			}
		}
		else
		{
			$query = mysql_query("SELECT imagen FROM Empresa WHERE nombre = '$variable1'");
			while ($dato = mysql_fetch_array($query))
			{$info = $dato['imagen'];}
			$filename = "img/Empresas/".$info;
			if(file_exists($filename))
			{
				$queryfinal = $queryempresa.$restoquery.$final_string.$endofquery;
				$final_string .= "imagen='".$row['imagen']."'";
				$ingresa = mysql_query($queryfinal);
					echo "<script>window.location = 'empresa_mantenimiento.php'</script>";
			}
			else
			{
				$queryfinal = $queryempresa.$restoquery.$final_string.$endofquery;
				$final_string .= "imagen='".$row['imagen']."'";
				$ingresa = mysql_query($queryfinal);
					echo "<script>window.location = 'empresa_mantenimiento.php'</script>";
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
