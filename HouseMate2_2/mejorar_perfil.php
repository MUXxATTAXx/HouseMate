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
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href='css/estilop.css' rel='stylesheet'/>
</head>
<body> 

<br>
<br>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo($lang['mejorar']);?></h3>
            </div>
            <div class="panel-body">
                <form action="mejorar_perfil.php" method="POST">
                  <div class="row">   
                    <div class=" col-md-9 col-lg-9 ">

                                <p><?php echo($lang['crede']);?></p>
                                <input name="crede" class="form-control" type="textbox" placeholder="<?php echo($lang['crede']);?>" maxlength="100" required>

                                <p><?php echo($lang['direc']);?></p>
                                <input name="direccion" class="form-control" type="textbox" placeholder="<?php echo($lang['direc']);?>" maxlength="140" required>

                                <?php echo($lang['dui']);?></p>
                                <td><input name="dui" class="form-control" type="textbox" placeholder="DUI" maxlength="9" required>

                                <p><?php echo($lang['nit']);?></p>
                                <input name="nit" class="form-control" type="textbox" placeholder="NIT" maxlength="10" required>

                                <p><?php echo($lang['tel']);?></p>
                                <input name="tel" class="form-control" type="textbox" placeholder="<?php echo($lang['tel']);?>" maxlength="8" required>

                                <p><?php echo($lang['tel2']);?></p>
                                <input name="tel2" class="form-control" type="textbox" placeholder="<?php echo($lang['tel22']);?>" maxlength="8">
                                    

                    </div>
                  </div>     
            </div>
            <div class="panel-footer">
                <input type="submit" name="mejorar" class="btn btn-primary" value="<?php echo($lang['mejorar']);?>">
            </div>
            <?php
            if(isset($_POST['mejorar']) ){
                include "conexion.php";  
                //Usuario mejorado
                $consulta1 = mysql_query("SELECT * FROM usuario");
                $digito = mysql_num_rows($consulta1);
				$maximun = $digito;
                //Usuario temporal
                $temp_id = $_SESSION['id'];
                
                $credenciales = $_POST['crede'];
                $direccion = $_POST['direccion'];
                $dui = $_POST['dui'];
                $nit = $_POST['nit'];
                $telefono1 = $_POST['tel'];
                $telefono2 = $_POST['tel2'];
                
                $consulta3 = mysql_query("select * from usuario where TempId = '$temp_id'");
				$digito2 = mysql_num_rows($consulta3);
                if($digito2 > 0){
                    echo ($lang['mejorar_error2']);
                }
                else{
                $consulta2 = mysql_query("INSERT INTO usuario VALUES ('$maximun','$temp_id','$credenciales','$direccion','$dui','$nit','$telefono1','$telefono2','0')");        
                    if($consulta2){
                        echo($lang['mejorar_exito']);
                    }
                    else{echo $lang['mejorar_error'].mysql_error();}
                }
            }
            ?>
            </form>
            </div>
        </div>
    </div>
</body>
</html>