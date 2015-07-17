<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        // Logo
        $this->Image('logo.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(40);
        // Title
        // while($row = mysql_fetch_array($consulta1)){

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
              $this->Cell(30,10,$lang['creado-por'].' '.$row3['nombre'].' '.$row3['apellido']);
          }

        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(30,10,'House Mate','C');
        include("../Call/Lenguaje/lenguaje.php");
        $this->Cell(0,10,$lang['repo-page'].' '.$this->PageNo().'/{nb}',0,0,'C');
    }

}

function usuario(){
include("../Call/Lenguaje/lenguaje.php");
$pdf= new PDF('p','mm','a4');
$pdf-> SetMargins(20,18);
$pdf-> AliasNbPages();
$pdf-> AddPage();

$idconvenio = $_GET['idconvenio'];
$sql=("SELECT * FROM convenio WHERE idconvenio = '$idconvenio'");


$pdf->Image("logo.png",10,6,30);

  
    
$rec=mysql_query($sql);
while($row = mysql_fetch_array($rec)){
    $usuario = $row['idusuario'];
    $consulta2 = mysql_query("SELECT * from tbusuario WHERE idUsuario = $usuario");  
    while($row2 = mysql_fetch_array($consulta2)){
    $fecha = $row['fecha_aprobacion'];
    
    
//date_default_timezone_set("America/El_Salvador");
//$t = (date("Y-m-d h:i a",time()));
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(60,10,$lang['repo-convenio'].': '.$fecha,0,0,'C');
$pdf->Ln();


// switch(){}

$x =$pdf->GetX();
$y =$pdf->GetY();
$pdf-> SetTextColor(255, 255, 255);
$pdf->SetFillColor(55,90,157,'#375a7f');
$pdf->SetFont("Helvetica", "b", 11);
//$pdf->SetXY($x - 10, $y);
//$pdf->MultiCell(20, $lang['repo-cinco'], utf8_decode($lang['Usuario']), 1, 1, 'C',0);
//$pdf->SetXY($x + 10, $y);
//$pdf->MultiCell(50,$lang['repo-cinco'] , utf8_decode($lang['Nombre']), 1, 1, 'C',0);
//$pdf->SetXY($x + 40, $y);
//$pdf->MultiCell(50, $lang['repo-cinco'], utf8_decode($lang['Apellido']), 1, 1, 'C',0);
//$pdf->SetXY($x + 70, $y);
//$pdf->MultiCell(25, $lang['repo-diez'], utf8_decode($lang['Fecha-Nac']), 1, 1, 'C',0);
//$pdf->SetXY($x + 95, $y);
//$pdf->MultiCell(40, $lang['repo-cinco'], utf8_decode($lang['Correo']), 1, 1, 'C',0);
//$pdf->SetXY($x + 135, $y);
//$pdf->MultiCell(30, $lang['repo-diez'], utf8_decode($lang['Tipous']), 1, 1, 'C',0);


    $usuario1 = $row2['usuario'];
    $pdf->Cell(30,10,"$".$row['oferta']);
    $pdf->Ln();
    $pdf->Cell(30,10,$usuario1);
    $pdf->Ln();
        $oferta = $row['oferta'];
        $usuario1 = $row2['nombre']." ".$row2['apellido'];
        //$usuario=$row['usuario'];
        //$nombre=$row['1'];
        //$alto=$row['2'];
        //$ancho=$row['3'];
        //$precio=$row['4'];

        $x=$pdf->GetX();
        $y=$pdf->GetY();
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetFont("Helvetica", "", 10);
        $pdf->SetXY($x - 10, $y);
        $pdf->MultiCell(20, 5, "$".utf8_decode("$oferta"), 0, 0, 'L',0);
        $pdf->SetXY($x - 10, $y + 30);
        $pdf->MultiCell(80, 5, utf8_decode("$usuario1"), 0, 0, 'L',0);
        //$pdf->SetXY($x + 40, $y);
        //$pdf->MultiCell(50, 5, utf8_decode("$alto"), 1, 1, 'L',0);
        //$pdf->SetXY($x + 70, $y);
        //$pdf->MultiCell(25, 5, utf8_decode("$ancho"), 1, 1, 'L',0);
        //$pdf->SetXY($x + 95, $y);
        //$pdf->MultiCell(40, 5, utf8_decode("$precio"), 1, 1, 'L',0);
        //$pdf->SetXY($x + 135, $y);
        //$pdf->MultiCell(30, 5, utf8_decode("$tipousu"), 1, 1, 'L',0);
        }
    }
    $pdf->Output();
}

usuario();

?>