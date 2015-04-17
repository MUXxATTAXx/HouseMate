<div class='form-Dl' align='center'>
    <form action="cliente_mantenimiento.php" method="POST">
	<div class='row row-centered'>
		<div class="col-sm-4 col-centered">            
			<label><?php echo $lang['idm'] ?></label>
			  <input class='form-control'  name="correo3" type='number' name="id4" placeholder='<?php echo $lang['Codigo'] ?>' autocomplete="off"/>
			<button class='btn btn-primary btn-block' type='submit' name='eliminar' ><?php echo $lang['Eliminares'] ?></button>
		</div>
        
	</div>
    </form>
</div>
    <?php
echo("
    <script type='text/javascript' src='js/jquery-1.11.2.min.js'></script>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
    ");
    mysql_query("SET NAMES 'utf8'");

    if (isset($_POST["eleminar"]) )
    {
  
    if (isset($_POST['id4']))
        {
			 include("conexion.php");
			$ideli = trim($_POST["id4"]);
            mysql_query("SET NAMES 'utf8'");
			$consulta = "SELECT * FROM inmueble WHERE IdInmueble = '$ideli'";
			$cs=mysql_query($consulta);
			$row=mysql_fetch_array($cs);
				if($row > 0)
				{
					$consulta = "DELETE FROM inmueble WHERE IdInmueble = '$ideli'";
					if(mysql_query($consulta))
					{
						echo "<p>Usuario Eliminado</p>";
						$consulta = "UPDATE inmueble SET IdInmueble = IdInmueble - 1  WHERE IdInmueble > '$ideli'";
						$cs=mysql_query($consulta);
						echo "<script> 
						location.replace('crear_inmueble.php'); 
						</script>";
					}
				}
				else
				{
					echo $lang['error4'];
				}
        }
    else
    {
        echo"Ingrese el correo del usuario.";
    }
    }

?>	
<?php
    mysql_query("SET NAMES 'utf8'");
    $consulta = "select inmueble.*, tbusuario.nombre, tbusuario.apellido from inmueble  left join tbusuario on inmueble.Dueno = tbusuario.idUsuario";
    $cs=mysql_query($consulta);
	$know = "";
	$know2 = "";
    echo"<table class='table table-striped table-hover ' border=1px>";
        echo"<tr><td><b>";
		echo $lang['Codigo'];
		echo '</b></td><td><b>';
		echo $lang['Duen'];
		echo '</b></td><td><b>';
		echo $lang['Direccion'];
		echo "</b></td><td><b>";
		echo $lang['vr'];
		echo "</b></td><td><b>";
		echo $lang['tm'];
	
		
    while($row=mysql_fetch_array($cs)){
		switch($row['VentaRenta'])
		{
			case 1:
			$know = $lang['Venta'];
			break;
			case 2:
			$know =  $lang['Renta'];
			break;
		}
		switch($row['Tipopropiedad'])
		{
			case 1:
			$know2 = $lang['Rustico'];
			break;
			case 2:
			$know2 =  $lang['Urbana'];
			break;
		}
        echo "<tr><td>".$row['IdInmueble']."</td><td>".$row['nombre']." ".$row['apellido']."</td><td>".$row['Direccion']."</td><td>".$know."</td><td>".$know2."</td></tr>";
    }
    echo"</table>";
    echo '<script>
    function refre() {
    window.location.href = "admin_eliminar.php";
    }
    </script>'?>