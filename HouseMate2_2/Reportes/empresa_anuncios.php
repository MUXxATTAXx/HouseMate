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
          $this->Cell(50,10,$lang['repo-anuncio']);
          $this->SetFont('Arial','B',10);
          if(!isset($_SESSION['id'])){
            header('Location: ../index.php');
          }
          include("../conexion.php");
            $anuncio = $_GET['IdEmpresa'];
//            $ID = $_SESSION['id'];
            $consulta1 = "SELECT * from empresa WHERE idEmpresa ='$anuncio'";
            $consulta1_con = mysql_query($consulta1);
            while($row2 = mysql_fetch_array($consulta1_con)){
                  $this->Ln(5);
                  $this->Cell(40);
                  $this->Cell(30,10,$lang['creado-por'].' '.$row2['nombre']);
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

$sql=("SELECT * FROM empresamen ORDER BY idmensaje");

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
$pdf->MultiCell(25, 5, utf8_decode($lang['Titulo']), 1, 1, 'L',0);
$pdf->SetXY($x + 15, $y);
$pdf->MultiCell(100, 5, utf8_decode($lang['mensaje']), 1, 1, 'L',0);
$pdf->SetXY($x + 115, $y);
$pdf->MultiCell(25, 5, utf8_decode($lang['fecha']), 1, 1, 'L',0);



$rec=mysql_query($sql);
while($row = mysql_fetch_array($rec)){

      $Titulo = $row['titulo'];
      $Texto= $row['texto'];
      $Fecha = $row['fecha'];


      $x=$pdf->GetX();
      $y=$pdf->GetY();
      $pdf->SetTextColor(0, 0, 0);
      $pdf->SetFillColor(255,255,255);
      $pdf->SetFont("Helvetica", "", 10);
      $pdf->SetXY($x - 10, $y);
      $pdf->MultiCell(25, 20, utf8_decode("$Titulo"), 1, 1, 'L',0);
      $pdf->SetXY($x + 15, $y);
      $pdf->MultiCell(100, 5, utf8_decode("$Texto"), 1, 1, 'L',0);
      $pdf->SetXY($x + 115, $y);
      $pdf->MultiCell(25, 20, utf8_decode("$Fecha"), 1, 1, 'L',0);

}
$pdf->Output();
}

usuario();

?>