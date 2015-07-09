<?php 
if(isset($_POST['ingresar'])){
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
		$queryempresa = "INSERT INTO EMPRESA VALUES ";
		$queryamount = mysql_query("Select * FROM EMPRESA");
		$digito = mysql_num_rows($queryamount);
		$who = $_SESSION['id'];
		$querywhoim = mysql_query("Select usuario.idusuario From tbusuario inner join usuario on tbusuario.idusuario = usuario.idusuario where usuario.TempId = '$who'");
		if($me = mysql_fetch_array($querywhoim)){
			$who = $me['idusuario'];
		}
		$restoquery = "('$digito','$who','$variable3','$variable1','$lugar','$variable2',";
		$endofquery = "'0')";
		$final_string ="";
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
					else
					{
						$man .= "n";
					}
					break;
					case 2:
					if ($b != "" || $b != null)
					{
						$maxc++;
						$man .= "b";
					}
					else
					{
						$man .= "n";
					}
					break;
					case 3:
					if ($c != "" || $c != null)
					{
						$maxc++;
						$man .= "c";
						
					}
					else
					{
						$man .= "n";
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
				$final_string .= "'".$a."',";
				break;
				case "b":
				$final_string .= "'".$b."',";
				break;
				case "c":
				$final_string .= "'".$c."',";
				break;
				case "n":
				$final_string .= "'',";
				break;
				}
			}
			else
			{
				switch($array[$n])
				{
				case "a":
				$final_string .= "'".$a."',"; 
				break;
				case "b":
				$final_string .= "'".$b."',";
				break;
				case "c":
				$final_string .= "'".$c."',";
				break;
				case "n":
				$final_string .= "'',";
				break;
				}
			}
		}
		if($c != "" || $c != null)
		{
			
			if($imagevar != null)
			{
						
				$image_size = getimagesize($varing);
				if ($image_size == False )
				{
					echo "<span class='label label-warning'>".$lang['error']."</span>";
				}
				elseif(file_exists("img/Houses/$imagevar"))
				{
					echo "<span class='label label-warning'>".$lang['error3']."</span>";
				}
				else
				{
					copy($varing,"img/Empresas/$imagevar");
					$queryfinal = $queryempresa.$restoquery.$final_string.$endofquery;
					echo $queryfinal;
					$ingresa = mysql_query($queryfinal);
					$variables = "UPDATE usuario SET Empresa='$digito' WHERE TempId = '$who'";
					$ingresa2 = mysql_query($variables);
				}
			}
		}
		else
		{
			$queryfinal = $queryempresa.$restoquery.$final_string.$endofquery;
			$ingresa = mysql_query($queryfinal);
			echo $queryfinal;
			$variables = "UPDATE usuario SET Empresa='$digito' WHERE TempId = '$who'";
			$ingresa2 = mysql_query($variables);

		}
	}
	else{
		echo "<span class='label label-warning'>" .$lang['missing']." (*)</span>";
	}
}
else{

}
?>