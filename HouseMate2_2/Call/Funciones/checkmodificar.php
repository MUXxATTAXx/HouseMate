<?php	
	session_start();

	$usuario = $_POST['usuario'];
	if(!empty($usuario))
	{
		checkuser($usuario);
	}
	function checkuser($usuario) 
	{
		include("../../conexion.php");
		include("../Lenguaje/lenguaje.php");
		mysql_query("SET NAMES 'utf8'");
		$query = "Select * FROM tbusuario WHERE usuario ='$usuario'";
		$result = mysql_query($query);
		if(mysql_num_rows($result) > 0)
		{
			while($row=mysql_fetch_array($result))
			{
				$nombre = $row['nombre'];
				$apellido = $row['apellido'];
				$fechaname = $row['fechanac'];
				$mail = $row['correo'];
				$tipo = 0;
				switch($row['tipo'])
				{
					case 1:
						$tipo = 1;
					break;
					case 2:
						$tipo = 2;
					break;
					case 3:
						$tipo = 3;
					break;
					case 4:
						$tipo = 4;
					break;
					default:
						$tipo = 0;
					break;
				}
				echo "<div class='hidme'>
				<script type='text/javascript'>
				var elem1 = document.getElementById('b2');
				var elem2 = document.getElementById('b3');
				var elem3 = document.getElementById('b1');
				var elem4 = document.getElementById('b4');
				var elem5 = document.getElementById('b6');
				elem1.value = '$nombre';
				elem2.value = '$apellido';
				elem3.value = '$mail';
				elem4.value = '$fechaname';
				elem5.value = '$tipo';
				</script>
				</div>";
				exit();
			}
		}
		else
		{
			echo "<span class='label label-danger'>".$lang['notheremate']."</span>";
			echo "<script type='text/javascript'>
				var elem1 = document.getElementById('b2');
				var elem2 = document.getElementById('b3');
				var elem3 = document.getElementById('b1');
				var elem4 = document.getElementById('b4');
				var elem5 = document.getElementById('b6');
				elem1.value = '';
				elem2.value = '';
				elem3.value = '';
				elem4.value = '';
				elem5.value = '0';
				</script>";
			exit();
		}

	}		
?>