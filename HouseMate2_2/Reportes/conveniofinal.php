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
    
$pdf->SetFont("Arial", "", 12);
$pdf->Cell(60,10,$lang['repo-convenio'].': '.$fecha,0,0,'C');
$pdf->Ln();

$x =$pdf->GetX();
$y =$pdf->GetY();
$pdf-> SetTextColor(255, 255, 255);
$pdf->SetFillColor(55,90,157,'#375a7f');
$pdf->SetFont("Helvetica", "b", 11);

    $usuario1 = $row2['usuario'];
    $pdf->Cell(30,10,"$".$row['oferta']);
    $pdf->Ln();
    $pdf->Cell(30,10,$usuario1);
    $pdf->Ln();
        $oferta = $row['oferta'];
        $usuario1 = $row2['nombre']." ".$row2['apellido'];

        $x=$pdf->GetX();
        $y=$pdf->GetY();
        $pdf->SetTextColor(0, 0, 0);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetFont("Helvetica", "", 10);
        $pdf->SetXY($x - 10, $y);
        $pdf->MultiCell(20, 5, "$".utf8_decode("$oferta"), 0, 0, 'L',0);
        $pdf->SetXY($x - 10, $y + 30);
        $pdf->MultiCell(80, 5, utf8_decode("$usuario1"), 0, 0, 'L',0);
        $pdf->SetXY($x - 10, $y + 30);
        $pdf->MultiCell(80, 5,UTF8_DECODE("
         PROMESA DE VENTA DE INMUEBLE.- En la ciudad de Santa Tecla, a las diez  del día 17 de julio de 2015.- Ante mí, ALEJANDRO ANTONIO LOPEZ FUENTES, Notario de este domicilio, comparece el señor VENDEDOR, de EDAD de edad, CREDENCIALES, del domicilio de DIRECCION, a quien por no conocer lo identifico por medio de su Documento Único de Identidad Números DUI y Número de Identificación Tributaria NIT, quien en adelante se denominará “EL PROMITENTE VENDEDOR”, y  COMPRADOR, de treinta y seis años de edad, CREDENCIALES, del domicilio de DIRECCION, a quien por no conocer lo identifico por medio de su Documento Único de Identidad Números  DUI y con Número de Identificación Tributaria NIT, quien en adelante se denominará “EL PROMITENTE  COMPRADOR”;  y ME DICEN: que han convenido en celebrar el siguiente contrato de PROMESA DE COMPRAVENTA, que se regirá por las cláusulas siguientes:        
        ", 0, 0, 'L',0));
        

        }
    }
    $pdf->Output();
}

usuario();

?>