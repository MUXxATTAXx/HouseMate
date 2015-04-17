<?php

require ('conexion.php');
if(isset($_POST['boto']))
{
	if($_POST['boto'] == "Insert")
	{
			
		if($_POST['dirrecion'] != null and $_POST['descrip'] != null and $_POST['selector'] != 0 and $_POST['selector2'] != 0 and $_POST['precio'] != null)
		{
			$objecto1 = trim($_POST['dirrecion']);
			$objecto2 = trim($_POST['descrip']);
			$objecto3 = trim($_POST['selector']);
			$objecto4 = trim($_POST['selector2']);
			$objecto5 = trim($_POST['precio']);
			$image_size = getimagesize($_FILES['imagen']['tmp_name']);
			if ($image_size == False)
			{
				echo $lang['error'];
			}
			else
			{
				$id = $_SESSION['id'];
				$derecho = "SELECT usuario.TempId FROM tbusuario Inner join usuario on tbusuario.IdUsuario = usuario.TempId WHERE usuario.TempId = '$id'";
				$cs=mysql_query($derecho);
				$estra = mysql_query($derecho);
				$real = mysql_num_rows($estra);
				if($real == 1)
				{
					$cantidad = "Select * FROM inmueble";
					$numero = mysql_query($cantidad);
					$digito = mysql_num_rows($numero);
					$maximun = $digito;
					$varing = $_FILES['imagen']['tmp_name'];
					$imagevar = $_FILES['imagen']['name'];
					copy($varing,"img/Houses/$imagevar");
					$fecha = date("Y-m-d");
					$maximun = $digito;
					$thehouse = "Insert Into inmueble VALUES ('$maximun','$id','$objecto1','$objecto2','$objecto3','$objecto4','$objecto5','img/Houses/$imagevar')";
					if(file_exists('img/Houses/$imagevar'))
					{
						echo $lang['error3'];
					}
					else
					{
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
		echo $lang['missing'];
		}
			
	}
	
}		
?>