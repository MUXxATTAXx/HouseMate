
<link href='css/bootstrap.min.css' rel='stylesheet'/><?php
if(!isset($_GET['IdInmueble']))
{
    echo "<script> window.history.back();</script>";
}
session_start();
echo("<meta charset=utf-8 />");
	if(isset($_SESSION['tip']))
	{
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
	}
	else {
		include("Header/barranav0.php");
	}

?>
<head>
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
   
</head>
<body>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
              <?php

                    include "conexion.php";
                    $inmuebleid = $_GET['IdInmueble'];
                    $inmueble = "SELECT * FROM Inmueble WHERE IdInmueble = '$inmuebleid'";
                    $inmueble_con = mysql_query($inmueble);
                    while($row = mysql_fetch_array($inmueble_con)){
                                     
            ?>
          <div class="panel-heading">
                <center><h3 class="panel-title">
                    $<?=$row['Precio']?>
                    </h3></center>
            </div>
                <div class="panel-body">
                    <form action="#" method="POST">
                    <br>
                    <center>
                        <img src="<?php echo $row['Imagen'] ?>" height="25%" width="50%">
                    
                    <br>
                    <p><?=$row['Direccion']?></p>
                    </center>
                    <hr>
                    <br>
                    <div class="row row-centered">
                        <div class="col col-sm-6">
                            <label><?=$lang['precio-ofrecer']?></label>
                        </div>
                        <div class="col col-sm-6">
                            <input name="precio" class="form-control" placeholder="$$$$$$" min="1" maxlength="6" type="tel">
                        </div>
                    </div>
                    <br>
                    <div class="row row-centered">
                        <div class="col col-sm-6">
                            <label><?=$lang['plazo-ofrecer']?></label>
                        </div>
                        <div class="col col-sm-4">
                            <input name="dias" class="form-control" placeholder="DDD" min="2" maxlength="3" type="tel">
                        </div>
                        <div class="col col-sm-2 col-centered">
                            <label><?=$lang['plazo-dias']?></label>
                        </div>
                    </div>
                     <br>
                    <div class="row row-centered">
                        <div class="col col-sm-6">
                            <label><?=$lang['plazo-adelanto']?></label>
                        </div>
                        <div class="col col-sm-6">
                            <input name="adelanto" class="form-control" placeholder="$$$$$" min="1" maxlength="5" type="tel">
                        </div>
                    </div>
                    <br>
                    <div class="row row-centered">
                        <div class="col col-sm-8 col-centered">
                            <p align="justify" class="text-danger">*<?=$lang['plazo']?>*</p>
                        </div>
                    </div>
                    <br>

                </div>
                <div class="panel-footer">
                    <div class="row row-centered">
                        <div class="col col-sm-12">
                            <a class="btn btn-warning" href="inmueble.php?IdInmueble=<?=$row['IdInmueble']?>"><?=$lang['back']?></a>
                            <?php
                                $dueno = $row['Dueno'];
                                $fausuario = $_SESSION['id'];
                                $read = mysql_query("Select idusuario from usuario where TempId = '$fausuario'");
                                while ($gettinguser = mysql_fetch_array($read))
                                {
                                    $usuario = $gettinguser['idusuario'];
                                }

                                
                                $consulta2 = "SELECT * FROM convenio WHERE idusuario ='$usuario' and idinmueble ='".$row['IdInmueble']."'";
                                $consulta2_con = mysql_query($consulta2);
                            if(mysql_num_rows($consulta2_con) > 0){
                                echo "<a class='btn btn-danger disabled'>".$lang['ya-oferto']."</a>";
                            }
                            elseif($dueno != $usuario ){
                                echo "<input value='".$lang['Offer']."' type='submit' name='ofertar' class='btn btn-primary'>";
                            }
                            else{
                                echo "<a class='btn btn-danger disabled'>".$lang['es-suyo']."</a>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                    <center>
                <?php
                    
                    $consulta1 = "SELECT * FROM convenio";
                    $consulta1_con = mysql_query($consulta1);
                    $id = (mysql_num_rows($consulta1_con)) + 1;
                    $fausuario = $_SESSION['id'];
                    $read = mysql_query("Select idusuario from usuario where TempId = '$fausuario'");
                    while ($gettinguser = mysql_fetch_array($read))
                    {
                        $usuario = $gettinguser['idusuario'];
                    }
                    $dueno_inmueble = $row['Dueno'];
                    if(isset($_POST['precio']) and trim($_POST['precio']) != ""){
                        $oferta = $_POST['precio'];
                        date_default_timezone_set("America/El_Salvador");
                        
                        $d1 = ($_POST['dias']) + 10;
                        $fecha_final1 = strtotime("+".$d1."Days");
                        $fecha_final2 = date("Y-m-d",$fecha_final1);
                        $d2 = strtotime("+10 Days");
                        $fecha_aprobacion =  date("Y-m-d", $d2);
                        $adelanto = $_POST['adelanto'];
                        
                        $consulta = "INSERT INTO convenio VALUES ('$id','".$row['IdInmueble']."','$usuario','$oferta','0','0','$fecha_aprobacion','$fecha_final2','$adelanto')";
                        $consulta_con = mysql_query($consulta);
                        if(isset($consulta_con)){
                            echo "<span class='label label-success'>".$lang['oferta-reg']."</span>";
                        }
                        else{echo mysql_error();}
                    }   
                ?>
                </center>
              </form>
            </div>
        </div>
<?php
	}
 ?>
