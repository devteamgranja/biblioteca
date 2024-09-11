<?php 
require 'config.php';
require '/assets/fpdf184/fpdf.php';
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('assets/img/logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(70,10,'Relatório de Contrato',0,0,'C');
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
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
if(isset($_GET['id'])){
    $id=$_GET['id'];

$listrel=$conn->query("SELECT * FROM relatorio WHERE id_relatorio='$id'");
$lis=$listrel->fetch();
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,$lis['num'].$i,0,1);
}
$pdf->Output();
