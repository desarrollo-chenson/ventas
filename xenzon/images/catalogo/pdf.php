<?php
include('database_connection.php');
if($_POST){
$resultado = $_POST['seleccion'];
};
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('images/catalogo/header.jpg',0,0,246.94);
    // Arial bold
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->SetY(60);
    $this->Cell(80);
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
// function Footer()
// {
//     $this->Image('images/catalogo/footer.jpg',0,400.86,246.94);
//     // Posición: a 1,5 cm del final
//     $this->SetY(-15);
//     // Arial italic 8
//     $this->SetTextColor(255,255,255);
//     $this->SetFont('Arial','I',12);
//     // Número de página
//     $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
// }
}

// Creación del objeto de la clase heredada
$pdf = new PDF('P', 'mm', array(246.94, 438.86));

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('helvetica','',18);
 $pdf->SetAutoPageBreak(true, 20);

if($_POST){

  $query = "SELECT * FROM xenzon2020 WHERE status ='1'";

  if(isset($_POST['seleccion']))
  {
    $brand_filter = implode("','", $_POST["seleccion"]);
    $query .= "AND codigo IN('".$brand_filter."')";
  }


	$statement = $connect->prepare($query);
	$statement->execute();
	$resultado = $statement->fetchAll();
	$total_row = $statement->rowCount();
	if($total_row > 0)
	{
		foreach($resultado as $row)
		{
// $YH = $pdf->GetY();
// $pdf-> SetY($YH+25);
$pdf->SetX(40);
$pdf->Cell(55,55, $pdf->Image('images/catalogo/'. $row['codigo'] .'.jpg', $pdf->GetX(), $pdf->GetY(), 55), 0, 0, 'C');
$pdf->SetX(105);
$pdf->Cell(30,30, $pdf->Image('images/catalogo/'. $row['licencia'] .'.jpg', $pdf->GetX(), $pdf->GetY(), 30), 0, 1, 'L');
$pdf->Cell(100,10,
        $pdf->SetX(105), $pdf->SetFont('Arial', 'B', 25), $pdf->Cell(100,9, utf8_decode(''. $row['codigo'] .''), 0, 1, 'L'),
        $pdf->SetX(105), $pdf->SetFont('Arial', 'B', 12), $pdf->Cell(100,6, utf8_decode('COLECCIÓN'), 0, 1, 'L'),
        $pdf->SetX(105), $pdf->SetFont('Arial', 'B', 10), $pdf->Cell(100,6, utf8_decode(''. $row['descripcion'] .''), 0, 1, 'L'),
        $pdf->SetX(105), $pdf->SetFont('Arial', 'B', 9), $pdf->Cell(100,3, utf8_decode('LARGO: '. $row['largo'] .' CMS ANCHO: '. $row['ancho'] .' CMS. ALTO: '. $row['alto'] .' CMS.'), 0, 1, 'L'));
$Y = $pdf->GetY();
$pdf-> SetY($Y+2);


  }
 }
};
// $pdf->Cell(200,100,$pdf->Image('images/catalogo/1864493-I.jpg',0,100,70),$pdf->Cell(0,0,'Codigo',0,0),$pdf->Cell(0,0,'coleccion',0,0),0,0);
$pdf->Output('D','Catalogo Chenson.pdf');
?>
