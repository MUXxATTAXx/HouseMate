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
	<link href='css/estilo.css' rel='stylesheet'/>
</head>
<body> 
<div class="container">
    <div class="row">
<?php
include "conexion.php";
// Obtiene el verdadero id usuario
$dueno = $_GET['Dueno'];
$tempid = "SELECT IdUsuario FROM usuario WHERE TempId = '$dueno'";
$temcs=mysql_query($tempid);
$rowt=mysql_fetch_array($temcs);
$Rtemid = $rowt['IdUsuario'];
$consulta = "SELECT * FROM inmueble WHERE Dueno = '$Rtemid'";
$cs = mysql_query($consulta);
while($row = mysql_fetch_array($cs)){
//Inicio de bloque
    echo    "<div class='col-xs-12 col-sm-6 col-md-6'>
            <div class='well well-sm'>
                <div class='row'>
                    <div class='col-sm-6 col-md-4'>
                        <img height='150px' width='150px' src='".$row['Imagen']."' alt='' class='img-rounded img-responsive' />
                    </div>
                    <div class='col-sm-6 col-md-8'>
                        <h4>
                            ".$row['IdInmueble']."</h4>
                        <small><cite title='San Francisco, USA'>".$row['Direccion']."<i class='glyphicon glyphicon-map-marker'>
                        </i></cite></small>
                        <p>
                            <i class='glyphicon glyphicon-usd'></i>".$row['Precio']."
                            <br />
                            ";
    //Venta o Renta
    if($row['VentaRenta'] == 1){
        echo $lang['Venta'];
    }elseif($row['VentaRenta'] == 2){
        echo $lang['Renta'];
    }
    echo"
                            <br />
                            <i class='glyphicon glyphicon-info-sign'></i>".$row['Descripcion']."</p>
                    </div>
                </div>
            </div>
        </div>";
//Fin de bloque
}
?>
    </div>
</div>
</body>
</html>