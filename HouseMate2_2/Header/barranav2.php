<link href='css/intro.css' rel='stylesheet'/>
<form method="post"  >
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
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-wrench mantenimien" aria-hidden="true"></span><span class="caret mantenimien"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="cliente_mantenimiento.php"><?php echo($lang['Usuarios']);?></a></li>
            <li><a href="crear_inmueble.php"><?php echo($lang['real-estate']);?></a></li>
            <li><a href="empresa_mantenimiento.php"><?php echo($lang['Empresa']);?></a></li>
          </ul>
        </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span><span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="Empresa.php"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span><?php echo($lang['Empresa']);?></a></li>
			</ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="enviar_msj.php"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> <?php echo($lang['msj-nuevo']);?></a></li>
      				<li><a href="enviados.php"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><?php echo("  ".$lang['msjs-enviados']);?></a></li>
      				<li><a href="recibidos.php"><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span><?php echo("  ".$lang['inbox']);?></a></li>
      			</ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-print" aria-hidden="true"></span><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="reportes/usuario.php" target="_blank"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo($lang['repo-usu']);?></a></li>
              <li><a href="reportes/inmueble.php" target="_blank"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> <?php echo($lang['repo-in']);?></a></li>
              <li><a href="reportes/empresa.php" target="_blank"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <?php echo($lang['repo-emp']);?></a></li>
      			</ul>
        </li>
        <li><a href="quick.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <?php
                    $usuario = $_SESSION['id'];
                    include "conexion.php";
                    $consulta3 = mysql_query("SELECT count(*) as 'mensajes_sin_leer' FROM `mensaje` WHERE destinatario = '$usuario' and estado = '1' and estado2 = '1'");
                        while($row3 = mysql_fetch_array($consulta3)){
                ?>
                <li>
                    <?php
                        if($row3['mensajes_sin_leer'] > 0){
                            echo "<a href='recibidos.php' class='btn btn-danger'><span class='badge'>".$row3['mensajes_sin_leer']. "</span>".$lang['msjs']."</a> ";
                        }
                        else{
                            echo "<a>".$lang['no-msjs']."</a>";
                        }
                    }
                    ?>
                </li>
                <li class="divider"></li>
                <li><span class='glyphicon glyphicon-user'></span><?php echo $lang['solici'];?></li>
                <?php
                    $consulta4 = mysql_query("SELECT * FROM asociados WHERE socio2 = '$usuario' and solicitud = '1'");
                    while($row = mysql_fetch_array($consulta4)){
                        $consulta5 = mysql_query("SELECT * from tbusuario where idUsuario =".$row['socio1']);
                        echo "<li >";
                            while($row2 = mysql_fetch_array($consulta5)){
                                echo "<a href='perfil.php?usuario=".$row2['usuario']."'>".$row2['usuario'].$lang['quiere-ser']."</a>";
                            }
                        echo"</li>";
                    }
					if(mysql_num_rows($consulta4) == 0){
                            echo "<li ><a>".$lang['no-mates']."</a></li>";
                    }
                ?>
				<li class="divider"></li>
				<li><span class='glyphicon glyphicon-briefcase'></span><?php echo $lang['res-empresa'];?></li>
				<?php
					$foundyou = mysql_query("Select idusuario FROM usuario Where TempId = $usuario");
					while ($row = mysql_fetch_array($foundyou))
					{$idusuario = $row['idusuario'];}
                    $consulta6 = mysql_query("SELECT * FROM empresasolicitud WHERE idusuario = '$idusuario' and aprovado2 = '0' and aprovado = '1'");
                    while($row = mysql_fetch_array($consulta6)){
                        $consulta7 = mysql_query("SELECT * from empresa inner join usuario on empresa.dueño =  usuario.idusuario
						where empresa.idempresa =".$row['idempresa']);
                            while($row2 = mysql_fetch_array($consulta7)){
                                echo "<li ><a href='Beforelobbyempresa.php?empresa=".$row2['idempresa']."'>".$row2['nombre'].$lang['new-empresa']."</a></li>";
                            }
                    }
					 if(mysql_num_rows($consulta6) == 0){
                            echo "<li ><a>".$lang['no-mates']."</a></li>";
                    }
                ?>
                <li class="divider"></li>
                <li><span class='glyphicon glyphicon-shopping-cart'></span><?php echo $lang['mis-ofertas'];?></li>
                <?php
                    //Mostrar solicitudes
                    $soli1 = mysql_query("SELECT * FROM usuario WHERE TempId = $usuario");
                    while($vrow = mysql_fetch_array($soli1)){
                        $Usuario = $vrow['IdUsuario'];
                        $inmueble_con = mysql_query("SELECT * from inmueble WHERE Dueno = '$Usuario'");
                        while($urow = mysql_fetch_array($inmueble_con)){
                            $idinmueble = $urow['IdInmueble'];
                            $convenio_con = mysql_query("SELECT * FROM convenio WHERE aprovado2 != '1' and idinmueble ='$idinmueble'");
                            while($drow = mysql_fetch_array($convenio_con)){
                                $ofertor_con = mysql_query("SELECT * FROM tbusuario WHERE IdUsuario ='".$drow['idusuario']."'");
                                while($orow = mysql_fetch_array($ofertor_con)){
                                    echo "<a href='mis_convenios.php'>".$orow['usuario'].$lang['ofrecen']."$".$drow['oferta']."</a><br>";
                                }
                            }
                        }
                    }

                    
                    //Ver si no hay solicitud 1
                    $vacio1 = mysql_query("SELECT * FROM usuario WHERE TempId = $usuario");
                    while($v1row = mysql_fetch_array($vacio1)){
                        $Usuario = $v1row['IdUsuario'];
                        $vacio2 = "SELECT * from inmueble inner join convenio on inmueble.idinmueble = convenio.idinmueble WHERE inmueble.Dueno                                 ='$Usuario' and convenio.aprovado2 = '0'";
                        $numero = mysql_num_rows(mysql_query($vacio2));
                        if($numero == 0){
                            echo "<li ><a>".$lang['no-mates']."</a></li>";
                        }
                    }
                ?>
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
					<li><a href='mis_inmuebles.php?Dueno=<?php echo $usuario; ?>'><?php echo($lang['mis-inmuebles']);?></a></li>
					<li><a href="mis_asociados.php?socio1=<?php echo $usuario; ?>"><?php echo($lang['mis-socios']);?></a></li>
                    <li><a href='convenios.php?idusuario=<?php echo $usuario; ?>'><?php echo($lang['convenio']);?></a></li>
                    <li><a href='mis_convenios.php?idusuario=<?php echo $usuario; ?>'><?php echo($lang['mis-convenios']);?></a></li>
					<li><a type="button" class="btn-danger blanco-letra" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-off danger'></span><?php echo($lang['Cerrar-Sesion']);?></a></li>
                </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<div id="myModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title"><?php echo $lang['yousure']; ?></h4>
      </div>
      <div class="modal-body">
        <a id="white" href="Call/Funciones/Destroy.php" class="btn btn-primary"><?php echo($lang['Salir']); ?></a>
		<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo($lang['Aceptar']); ?></button>
      </div>
    </div>
  </div>
</div>
 </form>
 <br>
 <br>
 <br>
