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
              <h3 class="panel-title">
                <?php
                    include "conexion.php";
                    $usuario = $_SESSION['id'];
                    $consulta = ("SELECT * FROM tbusuario WHERE idUsuario = $usuario ");
                    $cs = mysql_query($consulta);
                    while($row = mysql_fetch_array($cs)){
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
                </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><?php echo $lang['IdUsuario']?></td>
                        <td><?php echo $row['idUsuario'] ?></td>
                      </tr>
                        <tr>
                        <td><?php echo $lang['UsuNombre']?></td>
                        <td><?php echo $row['usuario'] ?></td>
                        </tr>
                      <tr>
                        <td><?php echo "<hr>".$lang['ComNombre']?></td>
                        <td><?php echo "<hr>".$row['nombre']."<br>".$row['apellido'] ?></td>
                      </tr>
                      <tr>
                        <td><?php echo($lang['Fecha-Nac'])?></td>
                        <td><?php echo $row['fechanac'] ?></td>
                      </tr>

                         <tr>
                      <tr>
                        <td><?php echo $lang['Correo']?></td>
                        <td><?php echo $row['correo'] ?></td>
                      </tr>
                      </tr>
                    </tbody>
                  </table>
                <?php } ?>
                    <a href='mis_inmuebles.php?Dueno=<?php echo $usuario; ?>' class="btn btn-primary"><?php echo($lang['MisCasas']);?></a>
                    <a href="mis_asociados.php?socio1=<?php echo $usuario; ?>"  class="btn btn-primary"><?php echo($lang['mis-socios']);?></a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a id="meperfil" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i   class="glyphicon glyphicon-envelope"></i></a>
						<span class="pull-right">
                        <?php
                            $consulta2 = mysql_query("select * from usuario where TempId = '$usuario'");
							$existe = mysql_num_rows($consulta2);
                            if($existe > 0){
                                $boton = "modificar.php";
																$texto = $lang['Modificar'];

                            }else{
                                $boton = "mejorar_perfil.php";
																$texto = $lang['mejorar'];
                            }
                            ?>
                            <a href="<?php echo $boton ;?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i> <?=$texto?></a>
                        </span>
                    </div>

          </div>
        </div>
      </div>

</body>
</html>
