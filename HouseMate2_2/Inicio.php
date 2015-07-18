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
