
<nav class="navbar navbar-default navbar-fixed-top" >
    <?php
    require ("Call/Lenguaje/lenguaje.php");
    ?>
	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
   <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">House Mate</a>
    </div>
       <form id="loginForm" method="POST" method="Get">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  <li><a href="#login-overlay"><?php echo $lang['Iniciar-Sesion'] ?></a></li>
        <li><a href="Inicio.php"><?php echo($lang['Cuenta']);?></a></li>
        <li><a href="acerca_de.php"><?php echo($lang['Acerca']);?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo($lang['Idioma']);?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php include ("urllen/lenstat.php")?>?lang=es">Espa&ntilde;ol</a></li>
            <li><a href="<?php include ("urllen/lenstat.php")?>?lang=en">English</a></li>
          </ul>
		 
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo($lang['Contactenos']);?></a></li>
      </ul>
    </div>
  </div>
</nav>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<div>
		<form method="post">	
<div id="login-overlay">
    <div  class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <a class="close" href="#close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button></a>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                              <div class="form-group">
								<h4><?php echo $lang['Iniciar-Sesion']; ?></h4>
                                  <label for="username" class="control-label"><?php echo $lang['Usuarioname']; ?></label>
                                  <input type="text" class="form-control" id="username" name="usuario1" value="" required="" title="Please enter you username" placeholder="<?php echo $lang['Usuarioname']; ?>">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label"><?php echo $lang['Contra'] ?></label>
                                  <input type="password" class="form-control" id="password" name="contra1" value="" required="" placeholder='<?php echo $lang['Contra'] ?>' title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
							

								
                              <input type="submit" name="ingresar" class="btn btn-info btn-block" value="<?php echo $lang['Iniciar-Sesion']; ?>">                             
                          
                      </div>
                  </div>
                  <div class="col-xs-6">
					<div id="well" >
                   <p class="lead"><span class="glyphicon glyphicon-home"></span><?php echo " ".$lang['Fre1'] ?></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="glyphicon glyphicon-ok"></span> <?php echo $lang['Fre2'] ?></li>
                          <li><span class="glyphicon glyphicon-ok"></span> <?php echo $lang['Fre3'] ?></li>
                          <li><span class="glyphicon glyphicon-ok"></span> <?php echo $lang['Fre4'] ?></li>
                          <li><span class="glyphicon glyphicon-ok"></span> <?php echo $lang['Fre5'] ?></li><small>(<?php echo $lang['Fre6'] ?>)</small>
                          <li><a href="acerca_de.php"><u><?php echo $lang['Fre7'] ?></u></a></li>
                      </ul>
                      <p><a href="Inicio.php" class="btn btn-info btn-block"><?php echo $lang['Fre8'] ?></a></p>
					</div>
				  </div>
              </div>
          </div>
      </div>
  </div>
</div>
		  <?php 
							//Ingresar
							if(isset($_POST['ingresar'])){
							$usuario = trim($_POST['usuario1']);
							$contra = $_POST['contra1'];
								if($usuario != "" and $contra != ""){
									require "Call/Funciones/ingresar1.php";
								}
								else{
									echo ' <script language="javascript">alert("Campos vacios en Ingresar");</script> ';
								}
							}
							if(isset($_GET['er']))
							{
								$error = $_GET['er'];
								echo "<br>".$error;
							}

		?>
		
		</form>
	</div>
<br>
<br>
