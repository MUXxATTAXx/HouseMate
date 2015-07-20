<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        $this->Image('logo.png',10,6,30);
        $this->SetFont('Arial','B',15);
        $this->Cell(40);
        include("../Call/Lenguaje/lenguaje.php");
        $this->Cell(50,10,$lang['repo-convenio']);
        $this->SetFont('Arial','B',10);
        if(!isset($_SESSION['id'])){
            header('Location: ../index.php');
        }
        include("../conexion.php");
        $ID = $_SESSION['id'];
        $consulta1 = "SELECT * from tbusuario WHERE idUsuario ='$ID'";
        $consulta1_con = mysql_query($consulta1);
        while($row3 = mysql_fetch_array($consulta1_con)){
              $this->Ln(5);
              $this->Cell(40);
              $this->Cell(30,10,$lang['creado-por'].' '.utf8_decode($row3['nombre']).' '.utf8_decode($row3['apellido']));
        }
        $this->Ln(10);
    }
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(30,10,'House Mate','C');
        include("../Call/Lenguaje/lenguaje.php");
        $this->Cell(0,10,utf8_decode($lang['repo-page']).' '.$this->PageNo().'/{nb}',0,0,'C');
    }
}
include("../Call/Lenguaje/lenguaje.php");
$pdf= new PDF('p','mm','a4');
$pdf-> SetMargins(20,18);
$pdf-> AliasNbPages();
$pdf-> AddPage();
$pdf->Image("logo.png",10,6,30);
//Comienzo de Consulta
$idconvenio = $_GET['idconvenio'];
$sql=("SELECT * FROM convenio WHERE idconvenio = '$idconvenio'");
$rec=mysql_query($sql);
while($crow = mysql_fetch_array($rec)){
    $oferta_final = $crow['oferta'];
    $adelanto = $crow['adelanto'];
    $diferencia = $oferta_final - $adelanto;
    //Plazo
    date_default_timezone_set("America/El_Salvador");
    $d1 = $crow['fecha_final'];
    $date1 = strtotime("Today");
    $d2 = date("Y-m-d",$date1);
    $fecha1 = (strtotime($d1)- strtotime($d2))/24/3600;
    $plazo = $fecha1;
    $idinmueble = $crow['idinmueble'];
    $ofertante = $crow['idusuario'];
    $comprador = "SELECT tbusuario.usuario, tbusuario.nombre, tbusuario.apellido,tbusuario.fechanac, usuario.* from tbusuario inner join usuario on tbusuario.idUsuario = usuario.TempId WHERE usuario.TempID = '$ofertante'";
    $comprador_con = mysql_query($comprador);
    while($urow = mysql_fetch_array($comprador_con)){
        $cnombre_completo = $urow['nombre']." ".$urow['apellido'];
        $ccredenciales = $urow['Credenciales'];
        $cdireccion = $urow['Direccion'];
        $cdui = $urow['DUI'];
        $cnit = $urow['NIT'];
        $cedad = floor((time() - strtotime($urow['fechanac'])) / 31556926);
        $inmueble = "SELECT * FROM inmueble WHERE IdInmueble = '$idinmueble'";
        $inmueble_con = mysql_query($inmueble);
        while($irow = mysql_fetch_array($inmueble_con)){
            $tipopropiedad = $irow['Tipopropiedad'];
            $direccion = $irow['Direccion'];
            $area = $irow['areadeterreno'];
            $vendedor = $irow['Dueno'];
            $precio = $irow['Precio'];
            $iddueno = "SELECT tbusuario.usuario, tbusuario.nombre, tbusuario.apellido, tbusuario.fechanac, usuario.* from tbusuario inner join usuario on tbusuario.idUsuario = usuario.TempId WHERE usuario.TempID = '$vendedor'";
            $iddueno_con = mysql_query($iddueno);
            while($urow2 = mysql_fetch_array($iddueno_con)){                
                $vnombre_completo = $urow2['nombre']." ".$urow2['apellido'];
                $vcredenciales = $urow2['Credenciales'];
                $vdireccion = $urow2['Direccion'];
                $vdui = $urow2['DUI'];
                $vnit = $urow2['NIT'];
                $vedad = floor((time() - strtotime($urow2['fechanac'])) / 31556926);
                $pdf->SetFont("Helvetica", "", 11);
                if($tipopropiedad ==1){
                    $tipopropiedad1 = $lang['Urbana'];
                }else{
                    $tipopropiedad1 = $lang['Urbana'];
                }
                $pdf->MultiCell(170,8,utf8_decode(
                $lang['final1'].
                $vnombre_completo.
                $lang['final2'].
                $vedad.
                $lang['final3'].
                $vcredenciales.
                $lang['final4'].
                $vdireccion.
                $lang['final5'].
                $vdui.
                $lang['final6'].
                $vnit.
                $lang['final7'].
                $cnombre_completo.
                $lang['final81'].
                $cedad.
                $lang['final82'].
                $ccredenciales.
                $lang['final9'].
                $cdireccion.
                $lang['final10'].
                $cdui.
                $lang['final11'].
                $cnit.
                $lang['final12'].
                $tipopropiedad1.
                $lang['final13'].
                $direccion.
                $lang['final15'].
                $area.$lang['m-cuadrados'].
                $lang['final16'].
                ($area * 1.43426).$lang['v-cuadradas'].
                $lang['final17'].
                $vnombre_completo.
                $lang['final19'].
                "$".$precio.
                $lang['final20'].
                "$".$adelanto.
                $lang['final21'].
                "$".$diferencia.
                $lang['final22'].
                $plazo.
                $lang['final23'].
                "$".$adelanto.
                $lang['final24']
                ),0,"J");
            }          
        }
    }
}
$pdf->Output();
?>

