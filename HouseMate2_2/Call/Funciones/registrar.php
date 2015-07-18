<?php
	session_start();

    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $fechanac = $_POST['fechanac'];
    $correo = trim($_POST['correo']);
    $usuario1 = trim($_POST['user']);
    $usuario = str_replace(' ', '', $usuario1);
    $contra1 = trim($_POST['contra']);
    $contra2 = trim($_POST['contra2']);
		$tipo = $_POST['tiposu'];
		if(!isset($tipo)){
			$tipo = 4;
		}
	if(!empty($nombre) and !empty($apellido) and !empty($fechanac) and !empty($correo) and !empty($usuario) and !empty($contra1) and !empty($contra2) and !empty($tipo)) {
            ingresar($nombre,$apellido,$fechanac,$correo,$usuario,$contra1,$contra2,$tipo);
     }

	function ingresar($nombre,$apellido,$fechanac,$correo,$usuario,$contra1,$contra2,$tipo) {
		$con = mysql_connect('localhost','root', '');
		mysql_select_db('bdhousemate', $con);
		mysql_query("Set Names 'utf8'");
		include ("../Lenguaje/lenguaje.php");
		if($nombre != "" and $apellido != "" and $fechanac != "" and $correo != "" and $usuario != "" and $contra1 != "" and $contra2 != "" and $tipo != 0)
		{
			if($contra1 == $contra2 or strlen($contra1) < 6)
			{
                $correo_val = strpos($correo, "@");
                $correo_val2 = strpos($correo, ".");
                $diferencia = $correo_val2 - $correo_val;
                if($correo_val > 0 and $correo_val2 > 0 and $diferencia > 0){
                    $query = "Select usuario FROM tbusuario WHERE usuario ='$usuario'";
                    $result = mysql_query($query);
                    if(mysql_num_rows($result) > 0)
                    {
                        echo "<span class='label label-important'>".$lang['ErUsuarioYa']."</span>";
                    }
                    $query2 = "Select correo FROM tbusuario WHERE correo ='$correo'";
                    $result2 = mysql_query($query2);
                    if(mysql_num_rows($result2) > 0)
                    {
                        echo "<span class='label label-important'>" .$lang['ErCorreoya']."</span>";
                    }
                    //Fin de Consulta
                    else
                    {
                        $cantidad = "Select * FROM tbusuario";
                        $numero = mysql_query($cantidad);
                        $digito = mysql_num_rows($numero);
                        $maximun = $digito;
                        if(!isset($tipo))
                        {
                            $tipo = 4;
                        }
                        $consulta = "INSERT INTO tbUsuario VALUES ('$maximun','$nombre','$apellido','$fechanac','$correo','$usuario','$contra1','$tipo',null)";
                        echo "<span class='label label-success'>".$lang['Uingre']."</span>";
                        mysql_query($consulta);
                    }
                //Fin de correo_val
                }
                else
                {
                echo "<span class='label label-error'>".$lang['error-correo']."</span>";
                }
            //Fin de contra_val
			}
			else
			{
				echo "<span class='label label-important'>".$lang['error-contra']."</span>";
			}
        //Verifica que los campos no esten vacios
		}
		else
		{
		echo "<span class='label label-important'>".$lang['blank']."</span>";
		}
//Fin de Funcion
}
?>
