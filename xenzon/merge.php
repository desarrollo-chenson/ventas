<?php
require_once 'config/config.php';
$codigo = $_POST['seleccion'];
$paginas =count($codigo);
// for ($i=0;$i<count($codigo);$i++){
// echo ''.$codigo[$i].', ';
// }
// echo '<br>Total de post='.$paginas.'';
require __DIR__.'/vendor/autoload.php';
$pdf = new \Jurosh\PDFMerge\PDFMerger;


// add as many pdfs as you want
for ($i=0;$i<count($codigo);$i++)
{
$pdfgen = 'pdfs/price/'. $codigo[$i].'.pdf';
if (file_exists($pdfgen)){
	if ($i <= 160)  {
		$pdf->addPDF('pdfs/price/'.$codigo[$i].'.pdf', 'all');
		}
	}
};


// call merge, output format `file`
$pdf->merge('download', 'catalogo_chenson1.pdf');

?>
