<?php
session_start();

if(!isset($_GET['IdInmueble']))
{
    echo
    "<script>
    location.replace('adminhomepage.php');
    </script>";
}

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
   <link href='css/bootstrap.min.css' rel='stylesheet'/>
</head>
<body>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
              <?php

                    if(!isset($_GET['IdInmueble'])){
                        echo "<script></script>";
                    }
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
                    </center>
                    <br>
                    <hr>
                    <br>
                    <div class="row row-centered">
                        <div class="col col-sm-6">
                            <label>Precio a ofrecer</label>
                        </div>
                        <div class="col col-sm-6">
                            <input name="precio" class="form-control" placeholder="$$$$$$" min="1" maxlength="6" type="tel">
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
                                $usuario = $_SESSION['id'];
                                $consulta2 = "SELECT * FROM convenio WHERE idusuario =$usuario";
                                $consulta2_con = mysql_query($consulta2);
                            if(mysql_num_rows($consulta2_con) > 0){
                                echo "<a class='btn btn-danger disabled'>".$lang['ya-oferto']."</a>";
                            }
                            elseif($dueno != $usuario ){
                                echo "<input value='".$lang['Offer']."' type='submit' name='ofertar' class='btn btn-primary'>";
                            }
                            else{
                                echo "<a class='btn btn-danger disabled'>".$lang['ya-oferto']."</a>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                    <center>
                <?php
                    include "conexion.php";
                    $consulta1 = "SELECT * FROM convenio";
                    $consulta1_con = mysql_query($consulta1);
                    $id = (mysql_num_rows($consulta1_con)) + 1;
                    if(isset($_POST['precio']) and trim($_POST['precio']) != ""){
                        $oferta = $_POST['precio'];
                        $consulta = "INSERT INTO convenio VALUES ('$id','$inmuebleid','$usuario','$oferta','0','0')";
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
