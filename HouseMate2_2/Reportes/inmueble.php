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
          $this->Cell(50,10,$lang['repo-in']);
          $this->SetFont('Arial','B',10);
          if(!isset($_SESSION['id'])){
            header('Location: ../index.php');
          }
          include("../conexion.php");
          $ID = $_SESSION['id'];
          $consulta1 = "SELECT * from tbusuario WHERE idUsuario ='$ID'";
          $consulta1_con = mysql_query($consulta1);
          while($row2 = mysql_fetch_array($consulta1_con)){
              $this->Ln(5);
              $this->Cell(40);
              $this->Cell(30,10,$lang['creado-por'].' '.$row2['usuario']);
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
$pdf= new PDF('l','mm','a4');
$pdf-> SetMargins(20,18);
$pdf-> AliasNbPages();
$pdf-> AddPage();

$sql=("SELECT * FROM inmueble ORDER BY Dueno");

$pdf->Image("logo.png",10,6,30);

date_default_timezone_set("America/El_Salvador");
$t = (date("Y-m-d h:i a",time()));
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(60,10,$lang['repo-creacion'].': '.$t,0,0,'C');
$pdf->Ln();

$x =$pdf->GetX();
$y =$pdf->GetY();
$pdf-> SetTextColor(255, 255, 255);
$pdf->SetFillColor(55,90,157,'#375a7f');
$pdf->SetFont("Helvetica", "b", 11);
$pdf->SetXY($x - 10, $y);
$pdf->MultiCell(20, $lang['repo-cinco2'], utf8_decode($lang['Duen']), 1, 1, 'L',0);
$pdf->SetXY($x + 10, $y);
$pdf->MultiCell(80, $lang['repo-cinco2'], utf8_decode($lang['Direccion']), 1, 1, 'L',0);
$pdf->SetXY($x + 90, $y);
$pdf->MultiCell(50, $lang['repo-cinco2'], utf8_decode($lang['Precio']), 1, 1, 'L',0);
$pdf->SetXY($x + 120, $y);
$pdf->MultiCell(25, $lang['repo-diez2'], utf8_decode($lang['vr']), 1, 1, 'L',0);
$pdf->SetXY($x + 145, $y);
$pdf->MultiCell(40, $lang['repo-cinco2'], utf8_decode($lang['tm']), 1, 1, 'L',0);
$pdf->SetXY($x + 185, $y);
$pdf->MultiCell(25, $lang['repo-diez2'], utf8_decode($lang['area1']), 1, 1, 'L',0);
$pdf->SetXY($x + 210, $y);
$pdf->MultiCell(30, 5, utf8_decode($lang['area2']), 1, 1, 'L',0);

$rec=mysql_query($sql);
while($row = mysql_fetch_array($rec)){
  $sql2 = "SELECT * FROM tbusuario WHERE idUsuario ='".$row['Dueno']."'";
  $sql2_con = mysql_query($sql2);
  while ($row3 = mysql_fetch_array($sql2_con)) {
      switch($row['VentaRenta']){
        case 1:
        $TipoVR = $lang['Venta'];
        break;
        case 2:
        $TipoVR = $lang['Renta'];
        break;
      }
      switch ($row['Tipopropiedad']) {
        case 1:
          $TipoTM = $lang['Urbana'];
          break;
        case 2:
          $TipoTM = $lang['Rustico'];
          break;
      }

      $Dueno=$row3['usuario'];
      $Direccion=$row['Direccion'];
      $Precio=$row['Precio'];
      $Area1=$row['areadeterreno'];
      $Area2=$row['areadeconstruc'];

      $x=$pdf->GetX();
      $y=$pdf->GetY();
      $pdf->SetTextColor(0, 0, 0);
      $pdf->SetFillColor(255,255,255);
      $pdf->SetFont("Helvetica", "", 10);
      $pdf->SetXY($x - 10, $y);
      $pdf->MultiCell(20, 5, utf8_decode("$Dueno"), 1, 1, 'L',0);
      $pdf->SetXY($x + 10, $y);
      $pdf->MultiCell(80, 5, utf8_decode("$Direccion"), 1, 1, 'L',0);
      $pdf->SetXY($x + 90, $y);
      $pdf->MultiCell(50, 5, "$".utf8_decode("$Precio"), 1, 1, 'L',0);
      $pdf->SetXY($x + 120, $y);
      $pdf->MultiCell(50, 5, utf8_decode("$TipoVR"), 1, 1, 'L',0);
      $pdf->SetXY($x + 145, $y);
      $pdf->MultiCell(40, 5, utf8_decode("$TipoTM"), 1, 1, 'L',0);
      $pdf->SetXY($x + 185, $y);
      $pdf->MultiCell(25, 5, utf8_decode("$Area1")."(m^2)", 1, 1, 'L',0);
      $pdf->SetXY($x + 210, $y);
      $pdf->MultiCell(30, 5, utf8_decode("$Area2")."(m^2)", 1, 1, 'L',0);
  }
}
$pdf->Output();
}

usuario();

?>
