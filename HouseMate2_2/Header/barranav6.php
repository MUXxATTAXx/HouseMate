<link href='css/intro.css' rel='stylesheet'/>
<form method="post" >
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">House Mate</a>
    </div>
    <?php  
	include "Call/Lenguaje/lenguaje.php";
	require ("Call/Loged/seguridad.php");
          ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="visitantehomepage.php" name="dude"><?php echo($lang['Inicio']);?>(<?php include ('namae.php') ?>) <span class="sr-only">(current)</span></a></li>
        <li><a href="perfil_admin.php"><?php echo($lang['Perfil']);?></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo($lang['Idioma']);?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php require ("urllen/lenstat.php")?>?lang=es">Espa&ntilde;ol</a></li>
            <li><a href="<?php require ("urllen/lenstat.php")?>?lang=en">English</a></li>
          </ul>
        </li>
      </ul>
       
      <ul class="nav navbar-nav navbar-right">
          
        <li><a href="#openModal2"><?php echo($lang['Cerrar-Sesion']);?></a></li>
           
      </ul>
    </div>
  </div>
</nav>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<div id="openModal2" class="modalDialog2">
	<div>
		<form method="post" class='form-D2'>
		<a href="#close" title="Close" class="close">X</a>
		<h3><?php echo $lang['Cerrar-Sesion']; ?></h3>
		<label><?php echo($lang['Salir-text']); ?></label><br>
		<a id="white" href="Call/Funciones/Destroy.php" class="btn btn-default"><?php echo($lang['Salir']); ?></a>
		<a id="white2" href="#close" class="btn btn-default"><?php echo($lang['Aceptar']); ?></a>
		
		</form>
	</div>
</div>
       </form>