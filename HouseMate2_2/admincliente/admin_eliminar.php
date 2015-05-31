

  
 <?php
    mysql_query("SET NAMES 'utf8'");

    if (isset($_POST["eliminar"]) )
    {
    if (isset($_POST['id3']))
        {
			$idt = $_POST['id3'];
            mysql_query("SET NAMES 'utf8'");
			$consulta = "SELECT * FROM tbUsuario WHERE IdUsuario = '$idt' AND idUsuario > 0";
			$cs=mysql_query($consulta);
			$row=mysql_fetch_array($cs);
			$id = $row['idUsuario'];
            $correo = trim($_POST["id3"]);
            $consulta = "DELETE FROM tbUsuario WHERE IdUsuario = '$idt' AND idUsuario <> 0";
            if(mysql_query($consulta))
            {
            echo "<p>Usuario Eliminado</p>";
			$consulta = "UPDATE tbUsuario SET IdUsuario = IdUsuario - 1 WHERE IdUsuario > '$id'";
			$cs=mysql_query($consulta);
			echo "<script> 
			location.replace('cliente_mantenimiento.php?actualstand=4'); 
			</script>";
            }
            else
            {
            echo "<p>Consulta de Eliminar fallo</p>";
            }
        }
    else
    {
        echo"Ingrese el correo del usuario.";
    }
    }

?>
 
	