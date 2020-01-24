<?php
require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

//recoger el contenido del otro fichero
ob_start();
require_once 'print-nopriceview.php';
$html = ob_get_clean();


$html2pdf = new Html2Pdf('P', 'LEGAL', 'es', 'true', 'UTF-8', array(0, 0, 0, 0) );
$html2pdf->writeHTML($html);
$html2pdf->output('catalogo_chenson.pdf', 'd');

 ?>
