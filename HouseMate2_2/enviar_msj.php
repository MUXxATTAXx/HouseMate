<!DOCTYPE HTML>
<html>
<head>	
	<title>Mensajes</title>
	<meta charset = "utf-8" />
	   <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/appeal.css' rel='stylesheet'/>
    <link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/intro.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
</head>
<body>
<?php
    session_start();
	switch($_SESSION['tip'])
	{
		case 1:
		include("Header/barranav2.php");
		break;
		case 2:
		break;
		case 3:
		break;
		case 4:
		include("Header/barranav6.php");
		break;
	}
?>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Mensaje</h3>
            </div>
            <div class="panel-body">
                <div class="row row-centered">
                  <form action="enviar_msj.php" method="POST">
                    <center><label>Destinatario </label></center>
                    <input class="form-control" type="text" name="destinatario" placeholder="Destinatario">
                </div>
                    <center><label>Asunto </label></center>
                      <input class="form-control" type="text" name="asunto" placeholder="Asunto"><br>
                      <p>Mensaje: (Máximo 260 caracteres)</p>
                      <textarea  maxlength="260" class="form-control" name="mensaje"></textarea><br>
            </div>
            <div class="panel-footer">
                     <button class="btn btn-primary btn-block" type="submit" name="registrar">Enviar</button>
                     </form>
            </div>
          </div>
        </div>

</body>
</html>