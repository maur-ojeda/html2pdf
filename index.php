<?php require './vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;


ob_start();
require_once 'cotizacion01.php';
$html = ob_get_clean();

$html2pdf = new Html2Pdf('p', 'A4', 'ES', 'true', 'UFT-8');
$html2pdf->writeHTML($html);
$html2pdf->output('cotizacion.pdf');

?>