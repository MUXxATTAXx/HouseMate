<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
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

<br>
<br>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
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
    
?>
            <form action="modificar.php" method="POST">
                <p>Nombre</p>
                <input value="<?php echo $row['nombre']; ?>" class="form-control" type="text" name="nombre" placeholder="Nombre">
                <p>Apellido</p>
                <input value="<?php echo $row['apellido']; ?>" class="form-control" type="text" name="apellido" placeholder="Apellido"><br><br>
                <p>Usuario</p>
                <input value="<?php echo $row['usuario']; ?>" class="form-control" type="text" name="usuario" placeholder="Usuario" ><br><br>
                <p>Fecha de Nac</p>
                <input value="<?php echo $row['fechanac']; ?>" class="form-control" class="form-control" type="date" name="fechanac"><br><br>
                <p>Nueva contraseña:</p>
                <input class="form-control" type="password" name="contra_nueva" placeholder="Contraseña Nueva"><br>
                <p>Confirmar contraseña anterior:</p>
                <input class="form-control" type="password" name="contra_vieja" placeholder="Confirmar"><br><br>
            <hr>
            </div>
            <div class="panel-footer">
                <input type="submit" name="mejorar" class="btn btn-primary" value="<?php echo $lang['Modificar-Usuario'] ?>">
            </div>
<?php
}
if(isset($_POST['mejorar'])){
include "conexion.php";
$contra1 = $_POST['contra_nueva'];
$contra2 = $_POST['contra_vieja'];

//Nombre,Apellido,Usuario,Tipo,FechaNac, Contra
//Si se digito la contra y se llenaron los campos
if($contra2 =! "" and isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['usuario']) and isset($_POST['fechanac']) ){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $fechanac = $_POST['fechanac'];
    $consulta2 = mysql_query("SELECT * FROM tbusuario WHERE idUsuario = '$id' and contra = '$contra2'");
    //Si un usuario tiene esa contraseña
    if($consulta2 > 0){
        //Si se puso una nueva contraseña
        if($contra1 =! ""){
            $consulta3 = mysql_query("UPDATE tbusuario SET nombre = '$nombre', apellido = '$apellido', usuario = '$usuario', fechanac = '$fechanac', contra = '$contra1' WHERE idUsuario = '$id' ");
        }
        //Si no se puso una nueva contrasela
        else{
            $consulta4 = mysql_query("UPDATE tbusuario SET nombre = '$nombre', apellido = '$apellido', usuario = '$usuario', fechanac = '$fechanac' WHERE idUsuario = '$id' ");
        }
        if($consulta3 > 0 or $consulta4 > 0){
            echo"Consulta realizada!";
        }
    }
    else{echo"Contraseña no coincide";}
}else{echo"Informacion faltante";}
}
?>
            </form>
            </div>
        </div>
    </div>
</body>
</html>