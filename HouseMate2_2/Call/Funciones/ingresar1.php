<?php
    require("conexion.php");
    $consulta ="SELECT nombre,idUsuario,tipo FROM tbusuario WHERE BINARY usuario='$usuario' and contra='$contra'";
    $cs=mysql_query($consulta);  
    $row=mysql_fetch_array($cs);
	switch ($row['tipo'])
	{
		case 1:
            $_SESSION["user"] = $row["nombre"];
            $_SESSION['id'] = $row['idUsuario'];
            $_SESSION['tip'] = $row['tipo'];
		
		echo "<script> 
			location.replace('adminhomepage.php#close'); 
			</script>";
        
		break;
		case 2:
		break;
		case 3:
            $_SESSION["user"] = $row["nombre"];
            $_SESSION['id'] = $row['idUsuario'];
            $_SESSION['tip'] = $row['tipo'];
        echo "<script> 
			location.replace('peritohomepage.php#close'); 
			</script>";
		break;
		case 4:
            $_SESSION["user"] = $row["nombre"];
            $_SESSION['id'] = $row['idUsuario'];
            $_SESSION['tip'] = $row['tipo'];
		      echo "<script> 
			 location.replace('visitantehomepage.php#close'); 
			 </script>";
		break;
		default:

		$exis = $lang['Existe'];
		$query = $_SERVER['PHP_SELF'];
		$path = pathinfo( $query );
		$url = $path['basename'];
		// modal de error
		 echo "<script> location.replace('$url?#login-overlay'); </script>";
			
		break;
	}
	
	
	
?>