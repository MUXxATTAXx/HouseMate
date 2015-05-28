<?php

require ('conexion.php');
if(isset($_POST['boto']))
{
	if($_POST['boto'] == "Insert")
	{
			
		if($_POST['dirrecion'] != null and $_POST['descrip'] != null and $_POST['selector'] != 0 and $_POST['selector2'] != 0 and $_POST['precio'] != null and $_POST['Departamento'] != "" and $_POST['Municipio'])
		{
			$Depa = $_POST['Departamento'];
			$Muni = $_POST['Municipio'];
			$objecto0 = trim($_POST['dirrecion']);
			$objecto1 = $Muni.", ".$Depa.", El Salvador";
			$descdire = $objecto0;
			$objecto2 = trim($_POST['descrip']);
			$objecto3 = trim($_POST['selector']);
			$objecto4 = trim($_POST['selector2']);
			$objecto5 = trim($_POST['precio']);
			$varing = $_FILES['imagen']['tmp_name'];
			$imagevar = $_FILES['imagen']['name'];
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
		else
		{
		echo $lang['missing'];
		}
			
	}
	
}		
?>