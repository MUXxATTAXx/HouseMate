<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<link href='css/estilop.css' rel='stylesheet'/>
<?php
    echo("
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<meta charset=utf-8 />
    ");
    include("Header/barranav2.php");

?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo($lang['Perfil']);?></title>
	<meta charset = "utf-8" />
	<?php include("call/spr.php");?>
    
</head>
<body> 

   <center>
        <div id="marginme" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $lang['Modificar-Usuario'] ?></h3>
            </div>
            <div class="panel-body">
<?php
include "conexion.php";
$id = $_SESSION['id'];
$consulta1 = "SELECT * FROM tbusuario WHERE idUsuario = '$id'";
$cs = mysql_query($consulta1);
while($row=mysql_fetch_array($cs)){
    
	
?>	 <form action="modificar.php" method="POST">
	<div class="row">
		<div class="col-xs-6"> 
            
                <p><?php echo $lang['Nombre'] ?></p>
                <input value="<?php echo $row['nombre']; ?>" class="form-control" type="text" name="nombre" placeholder="Name">
		</div>
		<div class="col-xs-6"> 
                <p><?php echo $lang['Apellido'] ?></p>
                <input value="<?php echo $row['apellido']; ?>" class="form-control" type="text" name="apellido" placeholder="Last Name">
		</div>
	  </div>
	  <div class="row">
			<div class="col-xs-6">
                <p><?php echo $lang['Imagen'] ?></p>
                <input value="<?php echo $row['usuario']; ?>" class="form-control" type="text" name="usuario" placeholder="User" >
		</div>
			<div class="col-xs-6">
                <p><?php echo $lang['Fecha-Nac'] ?></p>
                <input value="<?php echo $row['fechanac']; ?>" class="form-control" class="form-control" type="date" name="fechanac">
			</div>
	  </div>
	  <div class="row">
			<div class="col-xs-6">
                <p><?php echo $lang['oldp'] ?></p>
                <input class="form-control" type="password" name="contra_nueva" placeholder="New Password">
			</div>
			<div class="col-xs-6">
                <p><?php echo $lang['newp'] ?></p>
                <input class="form-control" type="password" name="contra_vieja" placeholder="Confirm">
			</div>
		</div>
            <hr>
			<input type="submit" name="mejorar" class="btn btn-primary" value="<?php echo $lang['Modificar-Usuario'] ?>">
            </div>
	
		
			<div class="panel-footer">		
			<a id="meperfil" data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
					<span class="pull-right">
							<a href="perfil_admin.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        </span>
				</div>
			</div>

<?php
}
if(isset($_POST['mejorar']))
{
include "conexion.php";


//Nombre,Apellido,Usuario,Tipo,FechaNac, Contra
//Si se digito la contra y se llenaron los campos
if(isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['usuario']) and isset($_POST['fechanac']) )
{
	$consulta4 = null;
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $fechanac = $_POST['fechanac'];
    $consulta2 = mysql_query("SELECT * FROM tbusuario WHERE idUsuario = '$id'");
    //Si las contraseñas coinciden
        //Si se puso una nueva contraseña
        /*if(!empty($contra1))
        {
            $consulta3 = mysql_query("UPDATE tbusuario SET nombre = '$nombre', apellido = '$apellido', usuario = '$usuario', fechanac = '$fechanac', contra = '$contra1' WHERE idUsuario = '$id' ");
        } */
        //Si no se puso una nueva contrasela
    $consulta4 = mysql_query("UPDATE tbusuario SET nombre = '$nombre', apellido = '$apellido', usuario = '$usuario', fechanac = '$fechanac' WHERE idUsuario = '$id' ");
          if($consulta3 != null  xor $consulta4 != null)
            {
                echo "<script> 
                location.replace('modificar.php');
                </script>";
            } 
        else
        {
            echo"Passwords don't match.";
        }
    }
else
{
    echo "Blank Spaces";
}
}
?>
            </form>
            </div>
        </div>
  </center>
</body>
</html>