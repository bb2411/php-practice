<?php
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="generated.pdf"');
$name="bhargav";
$sem=3;
require __DIR__."/vendor/autoload.php";
use Dompdf\Options;
use Dompdf\Dompdf;
$option=new Options;
$option->setChroot(__DIR__);
$option->setIsRemoteEnabled(true);
$dom=new Dompdf($option);
$html=file_get_contents("pdf.html");
$html=str_replace(["__name__","__sem__"],[$name,$sem],$html);
$dom->loadHtml($html);
$dom->render();
$pdfcont=$dom->output();
echo $pdfcont;
?>