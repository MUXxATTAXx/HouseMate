 <?php
   	session_start();
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$fecha = $_POST['fecha'];
	$tipo = $_POST['tipo'];

	if(!empty($nombre) || !empty($apellido) || !empty($correo) || !empty($fecha) || !empty($tipo))
	{
		modificar($nombre,$apellido,$correo,$fecha,$tipo);
	}
	else
	{
		error();
		
	}
	function error()
	{
		include("../../conexion.php");
		include("../Lenguaje/lenguaje.php");
		echo "<span class='label label-warning'>".$lang['errornada']."</span>";
	}
	function modificar($nombre,$apellido,$correo,$fecha,$tipo) 
	{
		include("../../conexion.php");
		include("../Lenguaje/lenguaje.php");
		mysql_query("SET NAMES 'utf8'");
		//Se validan si no son nulos los inputs
		$maxc = 0;
		$man="";
		$a = $correo;
		$b = $nombre;
		$c = $apellido;
		$d = $fecha;
		$e = "00000";
		$f = $tipo;
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
						if ($_POST['contraprevia'] == "yes")
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
		echo "<span class='label label-success'>".$lang['modificar-exito']."</span>";
	}
?>