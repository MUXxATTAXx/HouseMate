<?php
    require("conexion.php");
    $consulta ="SELECT nombre,idUsuario,tipo FROM tbusuario WHERE BINARY usuario='$usuario' and contra='$contra'";
    $cs=mysql_query($consulta);  
    echo"<form method='POST' /><table border=1px>";
    $row=mysql_fetch_array($cs);

    if($row['tipo'] == 4){
        $_SESSION["user"] = $row["nombre"];
		$_SESSION['id'] = $row['idUsuario'];
		$_SESSION['tip'] = $row['tipo'];
        echo(header("Location: visitante_homepage.php"));
    }
    elseif($row['tipo'] == 1){
        $_SESSION["user"] = $row["nombre"];
		$_SESSION['id'] = $row['idUsuario'];
		$_SESSION['tip'] = $row['tipo'];
		echo "<script> 
			location.replace('adminHomepage.php'); 
			</script>";
       
    }	
	else
	{
		$exis = $lang['Existe'];
		$query = $_SERVER['PHP_SELF'];
		$path = pathinfo( $query );
		$url = $path['basename'];
		echo "<script> 
			location.replace('$url?er=$exis'); 
			</script>";
	}
	
	
	
	
    /*
    if(mysql_query($consulta))   
        echo (header("Location: UsuHomepage.php"));
    else
        echo "Fallo";
*/
?>