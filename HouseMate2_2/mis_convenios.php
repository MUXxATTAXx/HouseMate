<link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
<link href="css/empresatag.css" rel="stylesheet">

<?php
    echo("

    <link href='css/bootstrap.min.css' rel='stylesheet'/>

<meta charset=utf-8 />
    ");
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
<html>
<head>	
	<title><?php echo $lang['mis-convenios'];?></title>
	<meta charset = "utf-8" />
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/profile_cards.css" rel="stylesheet">
	
</head>
<body> 
<br>
<div class="container">
    <div class="row">
<?php
$usuario = $_SESSION['id'];
include "conexion.php";

$usuario = $_SESSION['id'];
$inmueble = "SELECT * from inmueble WHERE Dueno = '$usuario'";
$inmueble_con = mysql_query($inmueble);
while($urow = mysql_fetch_array($inmueble_con)){
    $idinmueble = $urow['IdInmueble'];
    $convenio = "SELECT * FROM convenio WHERE idinmueble ='$idinmueble'";
    $convenio_con = mysql_query($convenio);
    while($drow = mysql_fetch_array($convenio_con)){
        $ofertor = "SELECT * FROM tbusuario WHERE IdUsuario ='".$drow['idusuario']."'";
        $ofertor_con = mysql_query($ofertor);
        while($orow = mysql_fetch_array($ofertor_con)){
            echo "<form action='mis_convenios.php?idconvenio=".$drow['idconvenio']."' method='POST'>";
            echo"
	<div class='col-sm-6'>
                <div class='row well well-sm'>
                    <div class='col-sm-4'>
                        <img src='".$urow['Imagen']."' height='150px' width='200px' />
                    </div>
                   <div class='col-sm-8'>
						<div class='row'>
                            <center>
							<div class='col-sm-12'>
                            <div class='row'>
                                <div class='col col-sm-6'>
                                    <p>".$lang['precio-estimado']."</p><p class='lead'>$".$urow['Precio']."</p>
                                </div>
                                <div class='col col-sm-6'>
                                    <p>".$lang['precio-ofrecido']."</p><p class='lead'>$".$drow['oferta']."</p>
                                </div>
                            </div>
                            <p>";
                                date_default_timezone_set("America/El_Salvador");
                                $d1 = $drow['fecha_final'];
                                $date1 = strtotime("Today");
                                $d2 = date("Y-m-d",$date1);
                                $fecha1 = (strtotime($d1)- strtotime($d2))/24/3600;
                                echo $lang['plazo-ofrecer'].$fecha1.$lang['plazo-dias'];
                            echo "</p>
                            <br>
                            <input type='hidden' name='idconvenio' value='".$drow['idconvenio']."'>
                            ";
                            if($drow['aprovado2'] == "0"){
                                echo "<input type='submit' value='".$lang['accept']."' class='btn-success btn-sm' name='aceptar'>
                            <input type='submit' value='".$lang['No']."'  class='btn-error btn-sm' name='negar'>";
                            }else{
                                echo "<a class='btn btn-info' href='Reportes/conveniofinal.php?idconvenio=".$drow['idconvenio']."'>".$lang['print-convenio']."</a>";
                            }
                            echo "</center>
					</div>
				</div>
			</div>
		</div>
	</div>
    </form>
		";
        }
    }
}     
if(mysql_num_rows($convenio_con) == 0){
    echo "<h2>".$lang['no-mates']."</h2>";
}

if(isset($_POST['aceptar'])){
    include "conexion.php";
    $idconvenio = $_POST['idconvenio'];
    $aceptar = "UPDATE convenio SET aprovado2 = '1', fecha_aprobacion = CURRENT_TIMESTAMP WHERE idconvenio = '$idconvenio'";
    echo "<script>window.location.replace('mis_convenios.php?idconvenio=".$drow['idconvenio']."'); </script>";
    $aceptar_con = mysql_query($aceptar);
}
if(isset($_POST['negar'])){
    include "conexion.php";
    $idconvenio = $_POST['idconvenio'];
    $negar = "DELETE FROM convenio WHERE idconvenio = '$idconvenio'";
    $negar_con = mysql_query($negar); 
}
?>
    </div>
</div>
</body>