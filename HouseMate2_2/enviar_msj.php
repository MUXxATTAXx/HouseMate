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
        include("Header/barranav3.php");
		break;
		case 4:
		include("Header/barranav6.php");
		break;
	}
?>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h2 class="panel-title"><center><?php echo $lang['msj'];?></center></h2>
            </div>
            <div class="panel-body">
				<form action="enviar_msj.php" method="POST">
					<div class="row">
						<div class="col col-sm-4">
							<center><?php echo $lang['destin'].": ";?></center>
						</div>
						<div class="col col-sm-6">
                            <?php
                                if(isset($_GET['destin'])){
                                    echo "<input class='form-control' type='text' name='destinatario' placeholder=".$lang['destin']." value='".$_GET['destin']."'>";
                                }
                                else{
                                    echo"<input class='form-control' type='text' name='destinatario' placeholder=".$lang['destin'].">";
                                }
                            ?>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col col-sm-4">
							<center><?php echo $lang['asunto'];?></center>
						</div>
						<div class="col col-sm-6">
							<input class="form-control" type="text" name="asunto" placeholder="<?php echo $lang['asunto'];?>">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col col-sm-4">
							<center><?php echo $lang['msj-max'];?></center>
						</div>
						<div class="col col-sm-6">
							<textarea name="mensaje" placeholder="<?php echo $lang['msj'];?>" maxlength="260" class="form-control" rows="7" id="textArea" style="margin: 0px -0.84375px 0px 0px; width: 424px; height: 83px;"></textarea>
						</div>
					</div>
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
        $consulta2 = mysql_query("INSERT INTO mensaje VALUES (null,'$remitente','$destinatario1','$asunto','$mensaje',CURRENT_TIMESTAMP,1,1)");
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