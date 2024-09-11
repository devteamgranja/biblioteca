
<?php
use Dompdf\Dompdf;
use Dompdf\Options;
require __DIR__."/vendor/autoload.php";

// reference the Dompdf namespace

if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$option = new Options();
$option->set('isRemoteEnabled', TRUE);
// instantiate and use the dompdf class
$dompdf = new Dompdf($option);


ob_start();
// require __DIR__.'/imprimir.php';
require __DIR__.'/imprimir.php';
$dompdf->loadHtml(ob_get_clean());
// $dompdf->loadhtml("<h1>Olá Mundo</h1>");
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4');

// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser
$dompdf->stream($id.".pdf",["Attachment" =>false]);
