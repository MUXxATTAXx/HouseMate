<!DOCTYPE HTML>
<html>
<head>	
	<title>House Mate</title>
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
                <h3 class="panel-title"><?php echo $lang['msj'];?></h3>
            </div>
            <div class="panel-body">
                <div class="row">
                  <form action="enviar_msj.php" method="POST">
                    <div class="col sm-1 col-centered">
                        <label><?php echo $lang['destin'].": ";?></label>
                        <input class="form-control" type="text" name="destinatario" placeholder="<?php echo $lang['destin'];?>">
                    </div>      
                </div>
                    <center><label><?php echo $lang['asunto'];?></label></center>
                      <input class="form-control" type="text" name="asunto" placeholder="<?php echo $lang['asunto'];?>"><br>
                      <p><?php echo $lang['msj-max'];?></p>
                      <textarea  maxlength="260" class="form-control" name="mensaje"></textarea><br>
            </div>
            <div class="panel-footer">
                     <button class="btn btn-primary btn-block" type="submit" name="registrar"><?php echo $lang['msj-enviar'];?></button>
                     </form>
<?php
if(isset($_POST['registrar'])){
    include "conexion.php";
    $remitente = $_SESSION['id'];
    $destinatario = $_POST['destinatario'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $fecha = "CURRENT_TIME";
    $consulta1 = "SELECT * from tbusuario where usuario = '$destinatario'";
    $cs = mysql_query($consulta1);
    while($row = mysql_fetch_array($cs)){
        $destinatario1 = $row['idUsuario'];
        $consulta2 = mysql_query("INSERT INTO mensaje VALUES (null,'$remitente','$destinatario1','$asunto','$mensaje',CURRENT_TIMESTAMP)");
        if($consulta2){
            echo"<center><span class='label label-success'>".$lang['msj-exito']."</span></center";
        }
        else{
            echo"<span class='label label-danger'>".$lang['msj-error']."</span>".mysql_error();
        }
    }
    
}
?>
            </div>
          </div>
        </div>

</body>
</html>