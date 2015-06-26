<?php
require ("Call/Lenguaje/lenguaje.php");
?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $lang['regis']; ?></title>
	<meta charset = "utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/change.css"	rel="stylesheet" type="text/css" />
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
</head>
<body>
<?php
    require "Header/barranav0.php";

?>
<br>
<br>




      <div class="row">

        <div class="seventeen" >


          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">
								<?php echo($lang['Crear-Cuenta']); ?>
                </h3>
            </div>
            <div class="panel-body">
              <div class="row">

            <div class=" col-lg-12 ">
                  <form class="fullwidth" action="inicio.php" method="POST" name="registrar">
						<div class='row row-centered'>
							<div class="col-sm-6 col-centered">
								<label><?php echo($lang['Usuarioname']); ?>:</label>
								<input class="form-control"maxlength="20" name="user" autocomplete="off" placeholder="<?php echo($lang['Usuarioname']); ?>" />
							</div>
							<div class="col-sm-6 col-centered">
								<label><?php echo($lang['Correo']); ?>:</label>
								<input id="lowerme" class="form-control"maxlength="30" type="email" autocomplete="off" name="correo" placeholder="<?php echo($lang['Correos']); ?>" />
							</div>
						</div>
						<div class='row row-centered'>
							<div class="col-sm-6 col-centered">
									<label><?php echo($lang['Contra']); ?>:</label>
									<input onkeyup="password(); return false;" class="form-control"maxlength="20" type="password" autocomplete="off" id="contra" name="contra" placeholder="<?php echo($lang['contra']); ?>" />
							</div>
							<div class="col-sm-6 col-centered">
									<label><?php echo($lang['Confirmar']); ?>:</label>
									<input onkeyup="password(); return false;" class="form-control"maxlength="20" type="password" autocomplete="off" id="contra2" name="contra2" placeholder="<?php echo($lang['Confirmar']); ?>" />

							</div>
						</div>
						<div class='row row-centered'>
						<div class="col-sm-6 col-centered">
								<label><?php echo($lang['Nombre']); ?>:</label>
								<input onkeypress="return letras(event)"  class="form-control"maxlength="20" type="text" autocomplete="off" name="nombre" placeholder="<?php echo($lang['Nombre']); ?>" />
						</div>
						<div class="col-sm-6 col-centered">
								<label><?php echo($lang['Apellido']); ?>:</label>
								<input onkeypress="return letras(event)" class="form-control"maxlength="20" type="text" autocomplete="off" name="apellido" placeholder="<?php echo($lang['Apellido']); ?>" />
								</td>
						</div>
						</div>

						<div class='row row-centered'>
						<div class="col-sm-4 col-centered">
								<label><?php echo($lang['Fecha-Nac']); ?>:</label>
								<input class="form-control" type="date" name="fechanac" placeholder="fecha nacimiento" max="1997-01-01"/>
						</div>
						</div>
						<br>


                </div>
              </div>
            </div>
                 <div class="panel-footer">
						<div class="row">
							<center>
							<div class="col-sm-6 col-centered">
								<button class="btn btn-primary btn-block" type="submit" name="registrar"><?php echo($lang['Crear-Cuenta']); ?></button>
							</div><br><span class="label label-danger" id="validacion1"></span>
                            <span class="label label-warning" id="contra-error"></span>
							</center>
						</div>
                    </div>
            </form>
          </div>
        </div>
      </div>
<?php
//Registrar
if(isset($_POST['registrar'])){
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $fechanac = $_POST['fechanac'];
    $correo = trim($_POST['correo']);
	$usuario = trim($_POST['user']);
    $contra1 = trim($_POST['contra']);
    $contra2 = trim($_POST['contra2']);
    if($nombre != "" and $apellido != "" and $fechanac != "" and $correo != "" and $usuario != "" and $contra1 != "" and $contra2 != ""){
        if($contra1 == $contra2){
            require "Call/Funciones/registrar1.php";
        }
        else{
            echo "contraseña incorrecta";
        }
    }
    else{
        echo ' <script language="javascript">alert("Campos vacios en Registrarse");</script> ';
    }
}
?>
</div>
<script src="js/validaciones.js"></script>
    <br>

<script>
function password(){
    var pass1 = document.getElementById('contra');
    var pass2 = document.getElementById('contra2');
    var message = document.getElementById('contra-error');
     if(pass1.value == pass2.value){

        message.innerHTML = "Passwords Match!"
        message.className = "label label-success"
    }else{
        message.innerHTML = "Passwords Do Not Match!"
        message.className = "label label-warning"
    }
    if(pass2.value == ""){
        message.innerHTML = ""
    }
}
</script>
</body>
</html>
