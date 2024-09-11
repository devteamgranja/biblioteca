<?php 
require __DIR__. '/vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;

$options=new Options();
$options->setChroot(__DIR__);
$dompdf=new Dompdf($options);
// $dompdf->loadHtml('<b>Olá Mundo!</b>');
ob_start();
require __DIR__."/cad_relatorio.php";
$dompdf->loadHtml(ob_get_clean());
$dompdf->setPaper("A4");
$dompdf->render();
// header('Content-type:application/pdf');
// echo $dompdf->output();
$dompdf->stream("relatorio.pdf",["Attachment"=>false]);