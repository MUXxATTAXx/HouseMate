<link href='css/intro.css' rel='stylesheet'/>
<form method="post" >
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="visitantehomepage.php">House Mate</a>
    </div>
    <?php  
	include "Call/Lenguaje/lenguaje.php";
	require ("Call/Loged/seguridad.php");
          ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
<!--Empresa-->
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span><span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="Empresa.php"><?php echo($lang['Empresa']);?></a></li>
			</ul>
        </li>
<!--Mensajes-->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="enviar_msj.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?php echo($lang['msj-nuevo']);?></a></li>
				<li><a href="enviados.php"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span><?php echo("  ".$lang['msjs-enviados']);?></a></li>
            </ul>
        </li>
          
<!--Notificaciones-->
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <?php
                    $usuario = $_SESSION['id'];
                    include "conexion.php";
                    $consulta3 = mysql_query("SELECT count(*) as 'mensajes_sin_leer' FROM `mensaje` WHERE destinatario = '$usuario' and estado = '1' and estado2 = '1'");
                        while($row3 = mysql_fetch_array($consulta3)){
                ?>
<!--Mensajes sin leer-->
                <li>
                    <?php
                        if($row3['mensajes_sin_leer'] > 0){
                            echo "<a href='recibidos.php' class='btn btn-danger'><span class='badge'>".$row3['mensajes_sin_leer']. "</span>".$lang['msjs']."</a> ";
                        }
                        else{
                            echo $lang['no-msjs'];
                        }
                    }
                    ?>
                </li>
                <li class="divider"></li>
<!--Solicitudes-->
                <li><span class='glyphicon glyphicon-user'></span><?php echo $lang['solici'];?></li>
                <?php
                    $consulta4 = mysql_query("SELECT * FROM asociados WHERE socio2 = '$usuario' and solicitud = '1'");
                    while($row = mysql_fetch_array($consulta4)){
                        $consulta5 = mysql_query("SELECT * from tbusuario where idUsuario =".$row['socio1']);
                        echo "<li>";
                            while($row2 = mysql_fetch_array($consulta5)){
                                echo "<a href='perfil.php?usuario=".$row2['usuario']."'>".$row2['usuario'].$lang['quiere-ser']."</a>";
                            }
                        echo"<li>";
                    }
                ?>
            </ul>
        </li>
<!--Peritaje-->
        <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-list-alt mantenimien" aria-hidden="true"></span><span class="caret mantenimien"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="valuar_inmueble.php"><span class="glyphicon glyphicon-check"></span><?php echo $lang['peritaje'];?></a></li>
            </ul>    
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo($lang['Idioma']);?><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php require ("urllen/lenstat.php")?>?lang=es">Espa&ntilde;ol</a></li>
                <li><a href="<?php require ("urllen/lenstat.php")?>?lang=en">English</a></li>
            </ul>
        </li>
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php include ('namae.php') ?> </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="perfil_admin.php"><?php echo($lang['Perfil']);?></a></li>
                    <li><a href="#openModal2"><?php echo($lang['Cerrar-Sesion']);?></a></li>
                </ul>
          </li>   
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