<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<link href='css/estilop.css' rel='stylesheet'/>
<?php
    echo("
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<meta charset=utf-8 />
    ");
    session_start();
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
	}
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
                <input value="<?php echo $row['nombre']; ?>" class="form-control" type="text" name="nombre" placeholder="Name" required>
		</div>
		<div class="col-xs-6">
                <p><?php echo $lang['Apellido'] ?></p>
                <input value="<?php echo $row['apellido']; ?>" class="form-control" type="text" name="apellido" placeholder="Last Name" required>
		</div>
	  </div>
	  <div class="row">
			<div class="col-xs-6">
<!-- Imagen -->
        <div class="row">
          <div class="form-group col-xs-12">
            <img class="img-responsive imagenpequeña" id="imagen" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100">
          </div>
          <div class="form-group col-xs-12">
            <div class="btn btn-primary btn-file">
              <i class="glyphicon glyphicon-folder-open"></i><?php echo $lang['Buscar3'] ?>
              <input type="file" class="file" onchange="readURL(this)" name="file" >
            </div>
          </div>
        </div>
<!-- Imagen -->
	<img id="blah" class="img-responsive" alt="Responsive image" src="#" alt="<?php echo $lang['Imagese'] ?>" />
	<br>
		</div>
			<div class="col-xs-6">
                <p><?php echo $lang['Fecha-Nac'] ?></p>
                <input value="<?php echo $row['fechanac']; ?>" class="form-control" class="form-control" type="date" name="fechanac">
			</div>
	  </div>
	  <br>
	  <div class="row">
			<div class="col-xs-6">
                <p><?php echo $lang['newp'] ?></p>
                <input class="form-control" type="password" name="contra_nueva" placeholder="<?php echo $lang['newp'] ?>">
			</div>
			<div class="col-xs-6">
                <p><?php echo $lang['oldp'] ?></p>
                <input class="form-control" type="password" name="contra_vieja" placeholder="<?php echo $lang['oldp'] ?>">
			</div>
		</div>
            </div>
			<div class="panel-footer">
					<center>
						<a href="perfil_admin.php" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-chevron-left"></i><?php echo($lang['back']);?></a>
						<input type="submit" name="mejorar" class="btn btn-primary" value="<?php echo $lang['Modificar-Usuario'];?>">
                    </center>
				</div>
			</div>

<?php
}
if(isset($_POST['mejorar']))
{
include "conexion.php";
$contra_nueva = $_POST['contra_nueva'];
$contra_vieja = $_POST['contra_vieja'];
//Nombre,Apellido,Usuario,Tipo,FechaNac, Contra
//Si se digito la contra y se llenaron los campos
if(isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['fechanac']) )
{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechanac = $_POST['fechanac'];
    $varing = $_FILES['file']["tmp_name"];
    $c = $_FILES['file']["name"];
    $imagevar = $c;
    if($c != "" || $c != null)
    {
      if($imagevar != null)
      {
        $image_size = getimagesize($varing);
        if ($image_size == False )
        {
          echo "<span class='label label-warning'>".$lang['error']."</span>";
        }
        elseif(file_exists("img/Usuarios/$imagevar"))
        {
          echo "<span class='label label-warning'>".$lang['error3']."</span>";
        }
        else
        {
          copy($varing,"img/Usuarios/$imagevar");
          $consulta2 = mysql_query("SELECT * FROM tbusuario WHERE idUsuario = '$id'");
          //Si las contraseñas coinciden
              //Si se puso una nueva contraseña
          while($row = mysql_fetch_array($consulta2)){
              if($row['contra']==$contra_vieja){
                  if(!empty($contra_nueva))
                  {
                  $consulta3 = mysql_query("UPDATE tbusuario SET nombre = '$nombre', apellido = '$apellido', fechanac = '$fechanac', contra =                         '$contra_nueva' WHERE idUsuario = '$id' ");
                  echo "<script>
                      location.replace('modificar.php');
                      alert('".$lang['modificar-exito2']."');
                      </script>";

                  }
                  //Si no se puso una nueva contrasela
                  if(empty($contra_nueva))
                  {
                      $consulta4 = mysql_query("UPDATE tbusuario SET nombre = '$nombre', apellido = '$apellido', fechanac = '$fechanac' WHERE idUsuario = '$id'");
                      echo "<script>
                      location.replace('perfil_admin.php');
                      alert('".$lang['modificar-exito']."');
                      </script>";
                  }
              }
              else
              {
                  echo"<span class='label label-danger'>".$lang['error-contra']."</span>";
              }
          }
        }
      }
    }

}
else
{
    echo $lang['blank'];
}
}
?>
<script>
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagen')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
  </script>
            </form>
            </div>
        </div>
  </center>

</body>
</html>
