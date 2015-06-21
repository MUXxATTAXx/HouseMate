<link href='css/intro.css' rel='stylesheet'/>
<form method="post" class="comewithme" >
<nav class="navbar navbar-default navbar-fixed-top">

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="adminHomepage.php">House Mate</a>
    </div>
    <?php  
require ("Call/Lenguaje/lenguaje.php");
require ("Call/Loged/seguridad.php");

          ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="perfil_admin.php"><span class='glyphicon glyphicon-user'></span>(<?php include ('namae.php') ?>) </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo($lang['Mantenimiento']);?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="cliente_mantenimiento.php"><?php echo($lang['Usuarios']);?></a></li>
            <li><a href="crear_inmueble.php"><?php echo($lang['real-estate']);?></a></li>
            <li><a href=""><?php echo($lang['Perito']);?></a></li>
          </ul>
        </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo($lang['Social']);?><span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="Empresa.php"><?php echo($lang['Empresa']);?></a></li>
				<li class="divider"></li>
				<li><a href="enviar_msj.php"><?php echo($lang['msj-nuevo']);?></a></li>
				<li><a href="recibidos.php">Recibidos</a></li>
				<li><a href="enviados.php">Enviados</a></li>
			</ul>
        </li>
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
 <br>
 <br>
 <br>