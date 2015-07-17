

<!DOCTYPE HTML>
<?php
require ("Call/Lenguaje/lenguaje.php");
?>
<html>
<head>
	<title><?=$lang['Inmueble']?></title>

	<meta charset = "utf-8" />
<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
	<link href='css/bootstrap.min.css' rel='stylesheet'/>
	<link href="css/bootstrap-table.css" rel="stylesheet">
	<link href='css/change.css' rel='stylesheet'/>


</head>
<body>
<?php
//session_start();
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
		default:
		include "Header/barranav0.php";
		break;
	}
}
else
{
	include "Header/barranav0.php";
}
?>
<div id="main">
    <div class="row">
    <?php
        include "conexion.php";
        if(isset($_GET['IdInmueble']))
        {

        }else{
             echo
            "<script>
			location.replace('index.php');
			</script>";
        }
        $casa = $_GET['IdInmueble'];
        $consulta = ( "select inmueble.*, tbusuario.IdUsuario, tbusuario.nombre, tbusuario.apellido from inmueble  left join tbusuario on inmueble.Dueno = tbusuario.idUsuario WHERE inmueble.IdInmueble = '$casa'");
        $cs = mysql_query($consulta);
        while ($row=mysql_fetch_array($cs)){
    ?>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-3" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <?php
                        if($row['VentaRenta'] == "2"){
                            echo $lang['Venta'];
                        }
                        else{
                            echo $lang['Renta'];
                        }
                    ?>
                </h3>
            </div>
            <div class="row row-centered">
                <div class="col-sm-12 col-centered">
                <?php
            if($row['aprovado'] == 1){ ?>
                        <ul id='what' class='nav nav-tabs'>
                        <li id='me' class='active negro'><a href='#home' data-toggle='tab'>
                        <?=$lang['Crear-Usuario']?>
                        </a></li>
                         <li id='me2' class='negro'><a href='#crear' data-toggle='tab'>
                        <?=$lang['peritada']?>
                        </a></li>
                    </ul>
                <?php    }
                    ?>
                </div>
            </div>
            <div id='myTabContent' class='tab-content'>
                <!-- Mormal -->
                <div class='tab-pane fade active in' id='home'>

        <div class="panel-body">
            <center>
                  <div class="row">
                      <div class="col-sm-2"></div>
                    <div class=" col-sm-10 col-centered">
                        <img class="limitme" src="<?php echo $row['Imagen'] ?>" height="100%" width="100%">
                        <div class="row">
                        <div class="row">
                        <?php echo $lang['Duen'];?>:
                        <?php echo $row['nombre']." ".$row['apellido'] ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                        <?php echo $lang['Direccion'];?>:</div>
                            <div class="col-sm-8">
                        <cite><small><i class="glyphicon glyphicon-map-marker">
                        </i><?php echo $row['Direccion'] ?></small></cite></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                        <?php echo $lang['Descripcion'];?>:
                        <?php echo $row['Descripcion'] ?>
                      </div>
                        </div>
                      <div class="row">

                      <div class="col-sm-4">
                        <label><?php echo $lang['tipo'];?>:</label>
                        <label class="label label-info"><?php
                            if($row['Tipopropiedad'] == 1){
                                echo $lang['Urbana'];
                            }else{
                                echo $lang['Rustico'];
                            }
                            ?></label>
                        </div>
                        <div class="col-sm-4">
                            <label><?php echo $lang['precio'];?>:</label>
                            <label class="label label-info"><i class="glyphicon glyphicon-usd">
                        </i><?php echo $row['Precio'] ?></label>
                          </div>
                        </div>
                      </div>
                        </div>
                  </div>
            </div>
                </div>
                <!--Peritaje -->
                     <?php if($row['aprovado'] == 1){ ?>
                <div class='tab-pane fade' id='crear'>
                    <div class="row row-centered">
                    <div class=" col-sm-12 col-lg-10 col-centered">

												<br>
                        <div class="row row-centered">
                            <div class="col-sm-4">
                                <label><?= $lang['builvalue'] ?></label><br>
                                <label class="btn label-info btn-sm">$<?= $row['valuo1'] ?></label></div>
                            <div class="col-sm-4"><label><?= $lang['lotvalue'] ?></label><br>
                                <label class="btn label-success btn-sm">$<?= $row['valuo2'] ?></label></div>
                            <div class="col-sm-4"><label>Total</label><br>
                                <label class="btn label-primary btn-sm">$<?= $row['total'] ?></label></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><label id="tama"></label></div>
                            <div class="col-sm-6"><label id="tama2"></label></div>
                        </div>
                        <div class="row row-centered">
                            <div class="progress">
                                <div id="barra1" class="progress-bar progress-bar-info" >
                                </div>
                                <div id="barra2" class="progress-bar progress-bar-success">
                                </div>
                            </div>
                        </div>
												<div class="row">
													<div class="col-sm-6"><label><?= $lang['VUR']?></label><label class="label label-info"><?= $row['remaining'] ?></label></div>
													<div class="col-sm-6"><label><?= $lang['Perito'] ?></label><label><?php
													if(isset($_SESSION['id']))
													{
														$inmueble = $row['IdInmueble'];
															$queror = mysql_query("Select usuario from tbusuario inner join usuario on tbusuario.idusuario = usuario.TempId
															where usuario.TempId = '".$row['perito']."'");
															while($eser = mysql_fetch_array($queror))
															{
																$usuarion = $eser['usuario'];
															}
															echo "<a class='btn btn-info glyphicon glyphicon-user' href='perfil.php?usuario=$usuarion'></a>";
													}
													else
													{
															echo "<a class='btn btn-info glyphicon glyphicon-user disabled'></a>";
													}
													?></label>
												</div>
												</div>
                    </div>
                  </div>
                    <script>
                        var valor1 = <?= $row['valuo1'] ?>;
                        var valor2 = <?= $row['valuo2'] ?>;
                        var final1 = (valor1 / <?= $row['total']  ?>)*100;
                        var final2 = (valor2 / <?= $row['total']  ?>)*100;
                        document.getElementById("tama").textContent = final1.toFixed(0)+"%";
                        document.getElementById("tama2").textContent = final2.toFixed(0)+"%";
                        document.getElementById("barra1").style.width = final1+"%";
                        document.getElementById("barra2").style.width = final2+"%";
                        </script>
                </div><?php } ?>
              </div>

            </center>
            <div class="panel-footer">
                <center>
								<?php
                  if(isset($_SESSION['id']))
                  {
                      $inmueble = $row['IdInmueble'];
                      $link = "convenio.php?IdInmueble=".$inmueble;
                      echo "<a href='".$link."' name='mejorar' class='btn btn-primary' >".$lang['Offer']."</a>";
                  }
                  else
                  {
//                                    echo "<span class='label label-danger'>".$lang['sin-cuenta']."</span><br><br>";
                      echo "<p> ".$lang['sin-cuenta']." <a name='crear' href='inicio.php'>".$lang['Crear-Cuenta']."</a>".$lang['o']."<a type='button' class='pointerclick' data-toggle='modal' data-target='#myModal' >".$lang['Iniciar-Sesion']."</a></p>";
                  }
								?>
            <?php
                }
            ?>
                </center>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>


</body>

</html>
