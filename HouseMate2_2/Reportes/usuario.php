<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('logo.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Reportes','C');
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
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

//$header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)');
//$data = '1';
$pdf->SetFont('Times','',12);


//$pdf->BasicTable($header,$data);
//Print table

$pdf->Cell(20,10,'Title',1,1,'C');
$pdf->Cell(20,10,'Title',1,1,'C');
$pdf->Cell(20,10,'Title',1,1,'C');
$pdf->Cell(20,10,'Title',1,1,'C');
$pdf->Cell(10,40,'Hello World!');
$pdf->Cell(10,50,'Holi1');
$pdf->Ln();
//Insert many lines
$pdf->Cell(40,30,'Holi2',0,1);

//Fin de PDF
//$pdf->Output();


function usuario(){

class PDF extends FPDF{}

$pdf=new FPDF('l','mm','a4');
$pdf-> SetMargins(20,18);
$pdf-> AliasNbPages();
$pdf-> AddPage();
include("../conexion.php");
$sql=("SELECT * FROM tbusuario WHERE idUsuario > 0");  

//$pdf->Image("logo.png",10,6,30);
$pdf->Cell(30,10,'Reportes','C');
$pdf->SetFont("Arial", "b", 12);
$pdf->Cell(0, 19, utf8_decode(""), 0, 1,'C');

$x =$pdf->GetX();
$y =$pdf->GetY();
$pdf-> SetTextColor(255, 255, 255);
$pdf->SetFont("Arial", "b", 11);
$pdf->MultiCell(30, 5, utf8_decode("ID"), 0, 1, 'L',0);
$pdf->SetXY($x + 40, $y);
$pdf->MultiCell(35, 5, utf8_decode("Nombre"), 0, 1, 'L',0);
$pdf->SetXY($x + 80, $y);
$pdf->MultiCell(35, 5, utf8_decode("Apellido"), 0, 1, 'L',0);
$pdf->SetXY($x + 125, $y);
$pdf->MultiCell(35, 5, utf8_decode("Fecha de Nacimiento"), 0, 1, 'L',0);
$pdf->SetXY($x + 165, $y);
$pdf->MultiCell(35, 5, utf8_decode("Correo"), 0, 1, 'L',0);
$pdf->SetXY($x + 215, $y);
$pdf->Ln();
$rec=mysql_query($sql);
while($row = mysql_fetch_array($rec)){
    $idpieza=$row['0'];
    $nombre=$row['1'];
    $alto=$row['2'];
    $ancho=$row['3'];
    $precio=$row['4'];
    
    $x=$pdf->GetX();
    $y=$pdf->GetY();
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetFont("Arial", "", 10);
    $pdf->MultiCell(30, 5, utf8_decode("$idpieza"), 0, 1, 'L',0);
    $pdf->SetXY($x + 40, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$nombre"), 0, 1, 'L',0);
    $pdf->SetXY($x + 80, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$alto"), 0, 1, 'L',0);
    $pdf->SetXY($x + 125, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$ancho"), 0, 1, 'L',0);
    $pdf->SetXY($x + 165, $y);
    $pdf->MultiCell(35, 5, utf8_decode("$precio"), 0, 1, 'L',0);
    $pdf->SetXY($x + 215, $y);
    $pdf->Ln();
}
$pdf->Output();
}

usuario();
?>