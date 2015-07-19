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
              $this->Cell(30,10,$lang['creado-por'].' '.$row3['nombre'].' '.$row3['apellido']);
        }
        $this->Ln(10);
    }
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
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
    $pdf->Image("logo.png",10,6,30);
    
    $idconvenio = $_GET['idconvenio'];
    $sql=("SELECT * FROM convenio WHERE idconvenio = '$idconvenio'");
    
    $rec=mysql_query($sql);
    while($crow = mysql_fetch_array($rec)){
        $oferta
        $adelanto
        $diferencia
        $plazo  
        $idinmueble = $crow['idinmueble'];
        $ofertante = $crow['idusuario'];
        $comprador = "SELECT tbusuario.usuario, tbusuario.nombre, tbusuario.apellido, usuario.* from tbusuario inner join usuario on tbusuario.idUsuario = usuario.TempId WHERE usuario.TempID = '$ofertante'";
        $comprador_con = mysql_query($comprador);
        while($urow = mysql_fetch_array($comprador_con)){
            $cnombre_completo
            $ccredenciales
            $cdireccion
            $cdui
            $cnit
            
            $inmueble = "SELECT * FROM inmueble WHERE IdInmueble = '$idinmueble'"
            $inmueble_con = mysql_query($inmueble)
            while($irow = mysql_fetch_array($inmueble)){
                $tipopropiedad
                $direccion
                $area
                $precio
                $vendedor = $irow['Dueno'];
                $iddueno = "SELECT tbusuario.usuario, tbusuario.nombre, tbusuario.apellido, usuario.* from tbusuario inner join usuario on tbusuario.idUsuario = usuario.TempId WHERE usuario.TempID = '$vendedor'";
            }
            
        }
            
        $consulta2 = mysql_query("SELECT * from tbusuario WHERE idUsuario = $usuario");
        while($row2 = mysql_fetch_array($consulta2)){
            $nombre_completo
            
            $fecha = $row['fecha_aprobacion'];
            $pdf->SetFont("Arial", "", 12);
//            Convenio de Confianza: Fecha
            $pdf->Cell(60,10,$lang['repo-convenio'].': '.$fecha,0,0,'C');
            $usuario1 = $row2['usuario'];
            $pdf->Ln();
            $oferta = $row['oferta'];
            $usuario1 = $row2['nombre']." ".$row2['apellido'];

            $x=$pdf->GetX();
            $y=$pdf->GetY();
            $pdf->SetFillColor(255,255,255);
            $pdf->SetFont("Helvetica", "", 10);
            $pdf->SetXY($x - 10, $y);
            $pdf->MultiCell(20, 5, "$".utf8_decode("$oferta"), 0, 0, 'L',0);
            $pdf->SetXY($x - 10, $y + 5);
            $pdf->MultiCell(35, 5, utf8_decode("$usuario1"), 0, 0, 'L',0);
        }
    }
    $pdf->Output();
}

usuario();

?>
