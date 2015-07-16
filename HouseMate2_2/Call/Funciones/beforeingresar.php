<?php
if(isset($_POST['insertarforreal']) == "Insertreal")
{
	if(isset($_POST['dirrecion']) and isset($_POST['descrip']) and isset($_POST['selector']) and isset($_POST['selector2'])
		and isset($_POST['Municipio']) and isset($_POST['Departamento']) and isset($_POST['precio']) and $_POST['selector'] != null and $_POST['selector2'] != null)
	{

	$Muni = $_POST['Municipio'];
	$Depa = $_POST['Departamento'];
	$objecto1 = $Muni.", ".$Depa.", El Salvador";
	$objecto2 =  trim($_POST['descrip']);
	$objecto3 = trim($_POST['selector']);
	$objecto4 = trim($_POST['selector2']);
	$objecto5 = $_POST['precio'];
	$objecto6 = trim($_POST['dirrecion']);
	$objecto7 = $_POST['estado'];
	$objecto8 = $_POST['AT'];
	$objecto9 = $_POST['AR'];
	$objecto10 = $_POST['age'];
	$varing = $_FILES["imagenfea"]["tmp_name"];
	$imagevar = $_FILES["imagenfea"]["name"];

	$descdire = $objecto1;
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
					$thehouse = "INSERT INTO inmueble VALUES ('$maximun','$Rtemid','$objecto1','$objecto2','$objecto3','$objecto4','$objecto5','img/Houses/$imagevar'
						,'$objecto6','$objecto7','$objecto8','$objecto9','0', '$objecto10','0','0','0','0')";
					//Mira si existe la imagen

					require "Call/Funciones/inmuebleden.php";
				}
				else
				{
					echo "<span class='label label-warning'>".$lang['error4']."</span>";
				}

			}
		}
		else
		{
			echo "<span class='label label-warning'>".$lang['missing2']."</span>";
		}
		}
	else
	{
		echo "<span class='label label-warning'>llene todos los campos</span>";
	}
	}
?>
