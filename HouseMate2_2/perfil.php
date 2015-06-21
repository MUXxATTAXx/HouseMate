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
                    <form action="perfil.php?usuario=<?php echo $usuario ?>" method="POST">
                        
                        <?php
                                $socio1 = $_SESSION['id'];
                                $socio2 = $row['idUsuario'];
                                $consulta2 = mysql_query("SELECT * from asociados WHERE socio1 = '$socio1' and socio2 = '$socio2'");
                                if(mysql_num_rows($consulta2) > 0){
                                    echo"<a href='#' class='btn btn-success'>Ya son socios!</a>";
                                }
                                else{
                                    echo "<input type='submit' name='socio' value='Agregar Socio' class='btn btn-primary'>";
                                    if(isset($_POST['socio'])){
                                        include "conexion.php";
                                        $consulta = "INSERT INTO asociados values (null,'$socio1','$socio2','1')";
                                        $cs2 = mysql_query($consulta);
                                        if($cs2){
                                            echo
                                            "<script>window.location.assign('perfil.php?usuario=".$usuario."')</script";
                                        }
                                        else{echo "Error".mysql_error();}
                                    }
                                }
                        ?>
                    
                        <a href='enviar_msj.php?destin=<?php echo $row['usuario']; ?>' class="btn btn-info">Enviar Mensaje</a>
                        <?php } ?>
                    </form>
                    </center>
                </div>
          </div>
        </div>
      </div>
</body>
</html>