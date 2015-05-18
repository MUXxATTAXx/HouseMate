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
            <form action="modificar.php" method="POST">
                <p>Nombre</p>
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="apellido" placeholder="Apellido"><br><br>
                <p>Usuario</p>
                <input type="text" name="usuario" placeholder="Usuario" ><br><br>
			<select id="b6" class="form-control" name="tiposu">
				<option value="0"><?php echo $lang['Nada'] ?></option>
				<option value="1"><?php echo $lang['Admin'] ?></option>
				<option value="2"><?php echo $lang['Cliente'] ?> </option>
				<option value="3"><?php echo $lang['Perito'] ?> </option>
				<option value="4"><?php echo $lang['Agente'] ?> </option>
			</select>
                <p>Fecha de Nac</p>
                <input class="form-control" class="form-control" type="date" name=""><br><br>
                <p>Contraseña</p>
                <input class="form-control" type="text" name="" placeholder="Contra"><br><input class="form-control" type="text" name="" placeholder="Confirmar"><br><br>
            <hr>
                
            </form>
            </div>
            <div class="panel-footer">
                <input type="submit" name="mejorar" class="btn btn-primary" value="<?php echo $lang['Modificar-Usuario'] ?>">
            </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>