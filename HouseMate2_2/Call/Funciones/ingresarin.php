<?php
	session_start();
	$Depa = $_POST['Departamento'];
	
	$objecto0 = trim($_POST['dirrecion']); 
	$objecto2 =  trim($_POST['descrip']);
	$objecto3 = trim($_POST['selector']);
	$objecto4 = trim($_POST['selector2']);
	if($Depa != null and $objecto0 != "" and $objecto2 != "" and $objecto3 != 0 and $objecto4 != 0  )
	{
		if(isset($_POST['Municipio']) and $_POST['precio'])
		{
			$Muni = $_POST['Municipio'];
			ingresar($Muni,$Depa,$objecto0,$objecto2,$objecto3,$objecto4);
		}
		else
		{
				echo "out2";
		}
	}
	else
	{
		echo "out1";
	}
	function ingresar($Muni,$Depa,$objecto0,$objecto2,$objecto3,$objecto4)
	{
	echo "in";
	include("../../conexion.php");
	include("../Lenguaje/lenguaje.php");
	
	$varing = $_FILES['imagenfea']['tmp_name'];
	$imagevar = $_FILES['imagenfea']['name'];
	$objecto1 = $Muni.", ".$Depa.", El Salvador";
	$descdire = $objecto0;
		
		if($varing != null || $imagevar != null)
		{
			$image_size = getimagesize($_FILES['imagenfea']['tmp_name']);
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