<!DOCTYPE HTML>
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<html>
<head>

	<title>Login</title>
	<meta charset = "utf-8" />
   <?php
    include "Call/spr.php";
?>

</head>
<body>
<?php
session_start();
if(isset($_SESSION['tip']))
{
	switch($_SESSION['tip'])
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
		default:
		include "Header/barranav0.php";
		break;
	}
}
else
{
	include "Header/barranav0.php";
}
?>
 <br>
<div id="main">
    <div class="row">
    <?php
        include "conexion.php";
        if(isset($_GET['IdInmueble']))
        {

        }else{
             echo
            "<script>
			location.replace('index.php');
			</script>";
        }
        $casa = $_GET['IdInmueble'];
        $consulta = ( "select inmueble.*, tbusuario.IdUsuario, tbusuario.nombre, tbusuario.apellido from inmueble  left join tbusuario on inmueble.Dueno = tbusuario.idUsuario WHERE inmueble.IdInmueble = '$casa'");
        $cs = mysql_query($consulta);
        while ($row=mysql_fetch_array($cs)){
    ?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php
                        if($row['VentaRenta'] == 1){
                            echo $lang['Venta'];
                        }
                        elseif($row['VentaRenta' == 2]){
                            echo $lang['Renta'];
                        }
                    ?>
                </h3>
            </div>
            <div class="panel-body">
            <center>
                  <div class="row">
                    <div class=" col-md-9 col-lg-9 ">
                        <img src="<?php echo $row['Imagen'] ?>" height="100%" width="100%">
                    <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><?php echo $lang['Duen'];?></td>
                        <td><?php echo $row['nombre']." ".$row['apellido'] ?></td>
                      </tr>
                        <tr>
                        <td><?php echo $lang['Direccion'];?></td>
                        <td><?php echo $row['Direccion'] ?></td>
                        </tr>
                      <tr>
                        <td><?php echo $lang['Descripcion'];?></td>
                        <td><?php echo $row['Descripcion'] ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $lang['tipo'];?></td>
                        <td><?php
                            if($row['Tipopropiedad'] == 1){
                                echo $lang['Urbana'];
                            }elseif($row['Tipopropiedad'] == 2){
                                echo $lang['Rustico'];
                            }
                            ?>
                        </td>
                      </tr>
                      <tr>
                        <td><hr><?php echo $lang['precio'];?></td>
                        <td><hr>$<?php echo $row['Precio'] ?></td>
                      </tr>
                    </tbody>
                  </table>
                    </div>
                  </div>
            </div>
            </center>
            <div class="panel-footer">
                <a href='convenio.php' name="mejorar" class="btn btn-primary" ><?php echo $lang['Offer'] ?></a>
            <?php
                }
            ?>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>


</body>

</html>
