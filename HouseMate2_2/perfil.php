	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/estilop.css' rel='stylesheet'/>
<?php
    echo("
<meta charset=utf-8 />
    ");
	session_start();
	$variable1 = $_SESSION["user"];
	$variable2 = $_SESSION['id'];
	$variable3 = $_SESSION['tip'];
	switch($variable3)
	{
		case 1:
		include("Header/barranav2.php");
		break;
		case 2:
		break;
		case 3:
        include("Header/barranav3.php");
		break;
		case 4:
		include("Header/barranav6.php");
		break;
	}


?>
<!DOCTYPE HTML>

<html>
<head>
	<title><?php echo($lang['Perfil']);?></title>
	<meta charset = "utf-8" />
</head>
<body>
<br>
<br>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <?php
                    include "conexion.php";
                    if(!isset($_GET['usuario'])){
                        header ("Location: perfil_admin.php");
                    }
                    $usuario = $_GET['usuario'];
                    $consulta = ("SELECT * FROM tbusuario WHERE usuario = '$usuario' ");
                    $cs = mysql_query($consulta);
                    while($row = mysql_fetch_array($cs)){
                    echo "<h4>".$row['usuario']."</h4>";

                ?>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                        <tr>
                        <td>
                            <?php
                            switch ($row['tipo']){
                                case 1:
                                    echo($lang["Admin"]);
                                break;
                                case 2:
                                    echo($lang["Cliente"]);
                                break;
                                case 3:
                                    echo($lang["Perito"]);
                                break;
                                case 4:
                                    echo($lang["Cliente"]);
                                break;
                            }
                            ?>
                        </td>
                        </tr>
                      <tr>
                        <td><?php echo "<hr>".$lang['ComNombre']?></td>
                        <td><?php echo "<hr>".$row['nombre']."<br>".$row['apellido'] ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $lang['Correo']?></td>
                        <td><?php echo $row['correo'] ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                <div class="panel-footer">
                    <center>
                        <?php
                              $yo = $_SESSION['id'];
															$consulta0 = mysql_query("SELECT * FROM tbusuario WHERE usuario = '$usuario'");
															while($row0 = mysql_fetch_array($consulta0)){
																	$usuario1 = $row0['idUsuario'];

																	//Si yo envie la solicitud
																	$socio1 = "SELECT * FROM asociados WHERE socio1 = '$yo' and socio2 = '$usuario1'";
																	$socio1_con = mysql_query($socio1);

																	if(mysql_num_rows($socio1_con) > 0){
																		$solici1 = "SELECT * FROM asociados WHERE socio1 = '$yo' and socio2 = '$usuario1' and solicitud = '1'";
																		$solici1_con = mysql_query("$solici1");
																		$solici1A = "SELECT * FROM asociados WHERE socio1 = '$yo' and socio2 = '$usuario1' and solicitud = '2'";
																		$solici1A_con = mysql_query("$solici1");
																		//Si no ha aceptado la solicutd
																		if(mysql_num_rows($solici1_con) > 0){echo "<span class='label label-primary'>".$lang['soli-sent']."</span>";}
																		//Si el otro usuario acepto la la solictud
																		elseif(mysql_num_rows($solici1A_con) > 0){echo "<span class='label label-warning'>".$lang['yason']."</span>";}
																	}

																	//Si yo recibi la solicitud
																	$socio2 = "SELECT * FROM asociados WHERE socio2 = '$yo' and socio1 = '$usuario1'";
																	$socio2_con = mysql_query($socio2);

																	if(mysql_num_rows($socio2_con) > 0){
																		$solici2 = "SELECT * FROM asociados WHERE socio2 = '$yo' and socio1 = '$usuario1' and solicitud = '1'";
																		$solici2_con = mysql_query("$solici2");
																		$solici2A = "SELECT * FROM asociados WHERE socio2 = '$yo' and socio1 = '$usuario1' and solicitud = '2'";
																		$solici2A_con = mysql_query("$solici2A");
																	//Si no has confirma la solicitud
																		if(mysql_num_rows($solici2_con) > 0){
																			echo "<form action='#' method='POST'>
																			<input type='submit' name='confirmar' value='".$lang['soli-confirm']."' class='btn btn-primary'>
																			</form>";
																			//Cuando se confirmar una solicitud
																			if(isset($_POST['confirmar'])){
																				$consultaf = "UPDATE asociados SET solicitud = '2' WHERE socio2 = '$yo' and socio1 = '$usuario1' ";
																				$consultaf_con = mysql_query($consultaf);
																				if($consultaf_con){echo "<script>window.location.assign('perfil.php?usuario=".$usuario."')</script>";}
																				else{echo "error".mysql_error();}
																			}
																		}
																		//Si ya confirmaste la solicitud
																		elseif(mysql_num_rows($solici2A_con) > 0){echo "<span class='label label-warning'>".$lang['yason']."</span>";}
																	}

																	//Si nadie a enviado nada a nadie
																	if($usuario1 != $yo and mysql_num_rows($socio1_con) == 0 and mysql_num_rows($socio2_con) == 0) {
																		echo"
																		<form action='#' method='POST'>
																		<input type='submit' name='enviar' value='".['soli-send']."' class='btn btn-primary'>
																		</form>
																		";}
																		//Cuando se envia una solicitud
																		if(isset($_POST['enviar'])){
																			$consultaenv = "INSERT INTO asociados VALUES (null,'$yo','$usuario1','1')";
																			$consultaenv_con = mysql_query($consultaenv);
																			if($consultaenv_con){echo "<script>window.location.assign('perfil.php?usuario=".$usuario."')</script>";}
																			else{echo "error".mysql_error();}
																		}
															}
                        ?>
                        <a href='enviar_msj.php?destin=<?php echo $row['usuario']; ?>' class="btn btn-info"><?php echo $lang['msj-enviar'];?></a>
                        <?php } ?>
                    </center>
                </div>
          </div>
        </div>
      </div>
</body>
</html>
