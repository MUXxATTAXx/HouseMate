<?php
require('fpdf/fpdf.php');
include("../conexion.php");

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
          $this->Cell(50,10,$lang['repo-usu']);
          $this->SetFont('Arial','B',10);
          if(!isset($_SESSION['id'])){
            header('Location: ../index.php');
          }
          include("../conexion.php");
          $ID = $_SESSION['id'];
          $consulta1 = "SELECT * from tbusuario WHERE idUsuario ='$ID'";
          $consulta1_con = mysql_query($consulta1);
          while($row2 = mysql_fetch_array($consulta1_con)){
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
$pdf= new PDF('p','mm','a4');
$pdf-> SetMargins(20,18);
$pdf-> AliasNbPages();
$pdf-> AddPage();


$sql=("SELECT * FROM tbusuario WHERE idUsuario > 0");


$pdf->Image("logo.png",10,6,30);
$pdf->Cell(0, 19, utf8_decode(""), 0, 1,'C');

$t = (date("Y-m-d h:i a",time()));
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(60,10,$lang['repo-usu'].'('.$t.')',0,0,'C');
$pdf->Ln();

$lang['Tipous'] = 'Tipo de usuario';
$lang['Admin'] = "Administrador";
$lang['Cliente'] = 'Cliente';
$lang['Perito'] = 'Perito';
$lang['Agente'] = "Agente";


// switch(){}

$x =$pdf->GetX();
$y =$pdf->GetY();
$pdf-> SetTextColor(255, 255, 255);
$pdf->SetFillColor(55,90,157,'#375a7f');
$pdf->SetFont("Helvetica", "b", 11);
$pdf->SetXY($x - 10, $y);
$pdf->MultiCell(20, 5, utf8_decode($lang['Usuario']), 0, 1, 'L',0);
$pdf->SetXY($x + 10, $y);
$pdf->MultiCell(50, 5, utf8_decode($lang['Nombre']), 0, 1, 'L',0);
$pdf->SetXY($x + 40, $y);
$pdf->MultiCell(50, 5, utf8_decode($lang['Apellido']), 0, 1, 'L',0);
$pdf->SetXY($x + 70, $y);
$pdf->MultiCell(25, 5, utf8_decode($lang['Fecha-Nac']), 0, 1, 'L',0);
$pdf->SetXY($x + 95, $y);
$pdf->MultiCell(40, 5, utf8_decode($lang['Correo']), 0, 1, 'L',0);
$pdf->SetXY($x + 125, $y);
$pdf->Ln();
$rec=mysql_query($sql);
while($row = mysql_fetch_array($rec)){
    $usuario=$row['usuario'];
    $nombre=$row['1'];
    $alto=$row['2'];
    $ancho=$row['3'];
    $precio=$row['4'];

    $x=$pdf->GetX();
    $y=$pdf->GetY();
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetFont("Helvetica", "", 10);
    $pdf->SetXY($x - 10, $y);
    $pdf->MultiCell(20, 5, utf8_decode("$usuario"), 1, 1, 'L',0);
    $pdf->SetXY($x + 10, $y);
    $pdf->MultiCell(50, 5, utf8_decode("$nombre"), 1, 1, 'L',0);
    $pdf->SetXY($x + 40, $y);
    $pdf->MultiCell(50, 5, utf8_decode("$alto"), 1, 1, 'L',0);
    $pdf->SetXY($x + 70, $y);
    $pdf->MultiCell(25, 5, utf8_decode("$ancho"), 1, 1, 'L',0);
    $pdf->SetXY($x + 95, $y);
    $pdf->MultiCell(40, 5, utf8_decode("$precio"), 1, 1, 'L',0);
    $pdf->SetXY($x + 125, $y);
    $pdf->Ln();
}
$pdf->Output();
}

usuario();

?>
