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
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>
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
								<?php
								include "Call/Funciones/crearcliente.php";
								?>
            </div>
						</div>
          </div>
        </div>
      </div>

</div>
<?php
echo "<script src='".$lang['validaciones']."'></script>";
?>

<script>
//function vacio(){
//    var campo1 = document.getElementByID('nombre');
//    var campo2 = document.getElementByID('apellido');
//    var campo3 = document.getElementByID('user');
//    var campo4 = document.getElementByID('tiposu');
//    var campo5 = document.getElementByID('lowerme');
//    var campo6 = document.getElementByID('fechanac');
//    var campo7 = document.getElementByID('contra');
//    var campo8 = document.getElementByID('contra2');
//    var contador = 0;
//    if(campo1.trim == null || campo1.trim == ""){}
//    else{
//        contador = contador + 1;
//        alert(contador());
//        }
//    if(campo2.trim == null || campo2.trim == ""){}
//    else{
//        contador = contador + 1;
//        alert(contador());
//        }
//    if(campo3.trim == null || campo3.trim == ""){}
//    else{
//        contador = contador + 1;
//        alert(contador());
//        }
//    if(campo4.trim == null || campo4.trim == ""){}
//    else{
//        contador = contador + 1;
//        alert(contador());
//        }
//    if(campo5.trim == null || campo5.trim == ""){}
//    else{
//        contador = contador + 1;
//        alert(contador());
//        }
//    if(campo6.trim == null || campo6.trim == ""){}
//    else{
//        contador = contador + 1;
//        alert(contador());
//        }
//    if(campo7.trim == null || campo7.trim == ""){}
//    else{
//        contador = contador + 1;
//        alert(contador());
//        }
//    if(campo8.trim == null || campo8.trim == ""){}
//    else{
//        contador = contador + 1;
//        alert(contador());
//        }
//    if(contador < 8){
//        alert("Campos Vacios");
//    }
//}

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
<script src="js/usuariom.js" type="text/javascript"></script>
</body>
</html>
