<?php
	$Depa = $_POST['Departamentos'];
	$Muni = $_POST['Municipios'];
	$objecto0 = trim($_POST['dirrecion']); 
	$objecto2 =  trim($_POST['descrip']);
	$objecto3 = trim($_POST['VR']);
	$objecto4 = trim($_POST['Tpro']);
	$objecto5 = trim($_POST['precio']);
	$varing = $_FILES['imagen']['tmp_name'];
	$imagevar = $_FILES['imagen']['name'];
	if($Depa != null and $Muni != null and $objecto3 != 0 and $objecto4 != 0 and $objecto5 != null and $objecto0 != "" and $objecto2 != "")
	{
		ingresar($Muni,$Depa,$objecto0,$varing,$varing,$imagevar);
	}
	function ingresar($Muni,$Depa,$objecto0,$varing,$imagevar)
	{
	include("../../conexion.php");
	include("../Lenguaje/lenguaje.php");	
		$objecto1 = $Muni.", ".$Depa.", El Salvador";
		$descdire = $objecto0;
		
		if($varing != null || $imagevar != null)
		{
			$image_size = getimagesize($_FILES['imagen']['tmp_name']);
			if ($image_size == False)
			{
				echo $lang['error'];
			}
			else
			{
				$id = $_SESSION['id'];
				$derecho = "SELECT usuario.TempId FROM tbusuario Inner join usuario on tbusuario.IdUsuario = usuario.TempId WHERE usuario.TempId = '$id'";
				$estra = mysql_query($derecho);				
				$real = mysql_num_rows($estra);
				if($real == 1)
				{
					//Saca el verdadero usuario
					$tempid = "SELECT IdUsuario FROM usuario WHERE TempId = '$id'";
					$temcs=mysql_query($tempid);
					$rowt=mysql_fetch_array($temcs);
					$Rtemid = $rowt['IdUsuario'];
					//Cuenta las casas y luego corre el SQL
					$cantidad = "Select * FROM inmueble";
					$numero = mysql_query($cantidad);
					$digito = mysql_num_rows($numero);
					$maximun = $digito;		
					$fecha = date("Y-m-d");
					$maximun = $digito;
					$thehouse = "INSERT INTO inmueble VALUES ('$maximun','$Rtemid','$objecto1','$objecto2','$objecto3','$objecto4','$objecto5','img/Houses/$imagevar','$descdire')";
					//Mira si existe la imagen
					if(file_exists('img/Houses/$imagevar'))
					{
						echo $lang['error3'];
					}
					else
					{
					copy($varing,"img/Houses/$imagevar");
					require "Call/Funciones/inmuebleden.php";
					}
				}
				else
				{
					echo $lang['error4'];
				}
				
			}
		}
		else
		{
			echo $lang['missing2'];
		}
	}
?>