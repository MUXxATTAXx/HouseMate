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
$fausuario = $_SESSION['id'];
$read = mysql_query("Select idusuario from usuario where TempId = '$fausuario'");
while ($gettinguser = mysql_fetch_array($read))
{
    $usuario = $gettinguser['idusuario'];
}
include "conexion.php";
$convenio = "SELECT * FROM convenio WHERE idusuario = '$usuario'";
$convenio_con = mysql_query($convenio);
while($drow = mysql_fetch_array($convenio_con)){
    $idinmueble = $drow['idinmueble'];
    $inmueble = "SELECT * FROM inmueble WHERE IdInmueble = '$idinmueble'";
    $inmueble_con = mysql_query($inmueble);
    while($urow = mysql_fetch_array($inmueble_con)){
        echo "<form action='#' method='POST'>";
        echo"<div class='col-sm-6'> 
            <div class='row well well-sm'>";
            if($drow['aprovado2'] == "0"){             
                echo "<center><h1>".$lang['nego-pendiente']."</h1>
                </center>";
                    
            }elseif($drow['aprovado2'] == "2"){
                echo "<center><h1>".$lang['oferta-denegada']."</h1>
                <p class='text-danger'>".$lang['intente-denuevo']."</p>
                </center>";
            }    
                echo "<div class='col-sm-4'>
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
                        if($drow['aprovado2'] == "2"){
                            echo "
                    <div class='row row-centered'>
                        <div class='col col-sm-6'>
                            <label>".$lang['precio-ofrecer']."</label>
                        </div>
                        <div class='col col-sm-6'>
                            <input name='precio' class='form-control input-sm' placeholder='$$$$$$' min='1' maxlength='6' type='tel'>
                        </div>
                    </div>
                    <br>
                    <div class='row row-centered'>
                        <div class='col col-sm-6'>
                            <label>".$lang['plazo-ofrecer']."</label>
                        </div>
                        <div class='col col-sm-4'>
                            <input name='dias' class='form-control input-sm' placeholder='DDD' min='2' maxlength='3' type='tel'>
                        </div>
                        <div class='col col-sm-2 col-centered'>
                            <label>".$lang['plazo-dias']."</label>
                        </div>
                    </div>
                     <br>
                    <div class='row row-centered'>
                        <div class='col col-sm-6'>
                            <label>".$lang['plazo-adelanto']."</label>
                        </div>
                        <div class='col col-sm-6'>
                            <input name='adelanto' class='form-control input-sm' placeholder='$$$$$' min='1' maxlength='5' type='tel'>
                        </div>
                    </div>
                    <br>
                        <div class='row'><center>
                            <input type='submit' value='".$lang['renegociar']."' class='btn-warning btn-sm' name='renegociar'>
                            <input type='submit' value='".$lang['nego-cancelar']."'  class='btn-danger btn-sm' name='cancelar'><p>  </p>
                        </div></center>
                        ";
                        }elseif($drow['aprovado1'] == "1" and $drow['aprovado2'] == "1"){
                            echo "<a class='btn btn-info' href='Reportes/conveniofinal.php?idconvenio=".$drow['idconvenio']."'>".$lang['print-convenio']."</a>";
                        }
                        echo "</center>
                </div>
            </div>
        </div>
    </div>
</div>
</form>";
    }
}
if(mysql_num_rows($convenio_con) == 0){
    echo "<div class='col-sm-6'> 
            <div class='row well well-sm'><center><h2>".$lang['ninguna-oferta']."</h2><br>
            <a class='btn btn-primary' href='visitantehomepage.php'>".$lang['regresar-inicio']."</a>
            </center></div></div>";
}
if(isset($_POST['renegociar'])){
    if(isset($_POST['precio']) and $_POST['precio'] != ""  and isset($_POST['dias'])and $_POST['dias'] != "" and isset($_POST['adelanto']) and $_POST['adelanto'] != "" and isset($_POST['idconvenio'])){
        $precio = $_POST['precio'];
        $dias = ($_POST['dias']) + 10;
        $adelanto = $_POST['adelanto'];
        $fecha_final1 = strtotime("+".$dias."Days");
        $fecha_final2 = date("Y-m-d",$fecha_final1);
        $d2 = strtotime("+10 Days");
        $fecha_aprobacion =  date("Y-m-d", $d2);
        $idconvenio = $_POST['idconvenio'];
        $renegociar = "UPDATE convenio SET oferta = '$precio', aprovado2 = '0', fecha_aprobacion = '$fecha_aprobacion', fecha_final = '$fecha_final2',adelanto = '$adelanto' WHERE idconvenio = '$idconvenio'";
        $renegociar_con = mysql_query($renegociar);
        if(isset($renegociar_con)){
             echo "<span class='label label-success'>".$lang['oferta-reg']."</span>";
        }
        
    }
                        
}

if(isset($_POST['cancelar']) and isset($_POST['idconvenio'])){
    $idconvenio = $_POST['idconvenio'];
    $cancelar = "DELETE FROM convenio WHERE idconvenio = '$idconvenio'";
    $cancelar_con = mysql_query($cancelar);
    if(isset($cancelar_con)){
             echo "<span class='label label-error'>".$lang['oferta-cancelada']."</span>";
        }
}
?>
    </div>
</div>
</body>