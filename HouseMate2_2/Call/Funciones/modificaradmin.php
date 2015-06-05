 <?php
   	session_start();
    include("../../conexion.php");
	include("../Lenguaje/lenguaje.php");
    mysql_query("SET NAMES 'utf8'");
    //Se validan si no son nulos los inputs
	if(isset($_POST['nombre2']) || isset($_POST['apellido2']) || isset($_POST['fechanac2']) || isset($_POST['correo2'])  || isset($_POST['tiposu']) )
	{
	$maxc = 0;
	$man="";
	$a = $_POST['correo2'];
	$b = $_POST['nombre2'];
	$c = $_POST['apellido2'];
	$d = $_POST['fechanac2'];
	$e = "00000";
	$f = $_POST['tiposu'];
	$g = 0;
	$copilation = "UPDATE tbUsuario SET";
	$Where ="WHERE correo ='$a'";
		for ($i=1;$i <=5;$i++) 
		{
				switch ($i)
				{
					case 1:
					if ($b != "" || $b != null)
					{
						$maxc++;
						$man .= "b";
					}
					break;
					case 2:
					if ($c != "" || $c != null)
					{
						$maxc++;
						$man .= "c";
					}
					break;
					case 3:
					if ($d != "" || $d != null)
					{
						$maxc++;
						$man .= "d";
					}
					break;
					case 4:
					if (isset($_POST['contraprevia']))
					{
						$maxc++;
						$man .= "e";
					}
					break;
					case 5:
					if ($f != "" || $f != null)
					{
						switch($f)
						{
							case 0:
							break;
							case 1:
							$g = 1;
							$maxc++;
							$man .= "f";
							break;
							
							case 2:
							$g = 2;
							$maxc++;
							$man .= "f";
							break;
							
							case 3:
							$g = 3;
							$maxc++;
							$man .= "f";
							break;
							
							case 4:
							$g = 4;
							$maxc++;
							$man .= "f";
							break;
						}
						
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
				case "b":
				$final_string .= " nombre='".$b."' ";
				break;
				case "c":
				$final_string .= " apellido='".$c."' ";
				break;
				case "d":
				$final_string .= " fechanac='".$d."' ";
				break;
				case "e":
				$final_string .= " contra='".$e."' ";
				break;
				case "f":
				$final_string .= " tipo='".$f."' ";
				break;
				}
			}
			else
			{
				switch($array[$n])
				{
				case "b":
				$final_string .= " nombre='".$b."',"; 
				break;
				case "c":
				$final_string .= " apellido='".$c."',";
				break;
				case "d":
				$final_string .= " fechanac='".$d."',";
				break;
				case "e":
				$final_string .= " contra='".$e."',";
				break;
				case "f":
				$final_string .= " tipo='".$f."',";
				break;
				}
			}
		}
		$nomina = "";
		$nomina .= $copilation;
		$nomina .= $final_string;
		$nomina .= $Where;
	$consultaq=mysql_query($nomina);
	}
?>