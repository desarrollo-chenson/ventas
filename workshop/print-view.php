<?php
require_once 'config/config.php';
$result = false;

if($_POST){
$resultado = $_POST['seleccion'];
}



if ($_GET) {
  $codigo = $_GET['cod'];
}

// $sql = "SELECT * FROM nylontb WHERE id=:id";
// $query = $pdo->prepare($sql);
//
// $query->execute([
//     'id' => $id
// ]);
//
// $row = $query->fetch(PDO::FETCH_ASSOC);
// $codigoValue = $row['codigo'];
// $descripcionValue = $row['descripcion'];
// $coddescripcionValue = $row['coddescripcion'];
// $licenciaValue = $row['licencia'];
// $claveValue = $row['clave'];
// $colorValue = $row['color'];
// $precioValue = $row['precio'];
// $temporadaValue = $row['temporada'];
// $divisionValue = $row['division'];
// $generoValue = $row['genero'];
// $tipoproductoValue = $row['tipoproducto'];
// $material1Value = $row['material1'];
// $porcentaje1Value = $row['porcentaje1'];
// $material2Value = $row['material2'];
// $porcentaje2Value = $row['porcentaje2'];
// $material3Value = $row['material3'];
// $porcentaje3Value = $row['porcentaje3'];
// $forroValue = $row['material3'];
// $forroporcentajeValue = $row['porcentaje3'];
// $baseValue = $row['base'];
// $altoValue = $row['alto'];
// $anchoValue = $row['ancho'];
// $asaValue = $row['asa'];
// $especificacionesValue = $row['especificaciones'];
// $simbologiaValue = $row['simbologia'];
// $precioValue = $row['precio']
//
//
?>








<?php
if($_POST){

  for ($i=0;$i<count($resultado);$i++)
  {
    $queryResult = $pdo->query("SELECT * FROM nylontb WHERE codigo IN('$resultado[$i]') order by precio asc ");
    while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {

      $image = 'images/catalogo/producto/'. $row['codigo'] .'_01.png';
      $image2 = 'images/catalogo/producto/'. $row['codigo'] .'_02.png';
      $image3 = 'images/catalogo/producto/'. $row['codigo'] .'_03.png';
      $image4 = 'images/catalogo/producto/'. $row['codigo'] .'_04.png';

      if ((file_exists($image))and(file_exists($image2))and(file_exists($image3))and(file_exists($image4))){


  echo'
<page backimg="images/catalogo/fondos/'.$row['clave'].'.jpg">
   <page_header style="text-align:center">
      <table>
        <tr>
          <td width="402" height="200"></td>
          <td width="402" height="200"></td>
        </tr>
      </table>
      <table style="text-align:center" cellspacing="0" cellpadding="0" >
          <tr>
            <td width="804" style="color: white; font-weight:bold; font-size:30px; line-height:20px;">'.$row['descripcion'].'<br>
            <strong style="font-size:80px;">'.$row['codigo'].'</strong></td>
          </tr>
      </table>
      <table style="text-align:center" cellspacing="0" cellpadding="0" align="center" >
          <tr>
            <td width="550" cellspacing="0" cellpadding="0"><img style="width:105%; position:relative; top:-10px;" src="images/catalogo/producto/'.$row['codigo'].'_01.png"></td>
            <td width="150" cellspacing="0" cellpadding="0" style="text-align:center;">

                <p><img style=" width:110%; position:relative; top:-60px;" src="images/catalogo/producto/'.$row['codigo'].'_02.png" alt="foto lateral"></p>
                <p><img style=" width:110%;" src="images/catalogo/producto/'.$row['codigo'].'_03.png" alt="foto lateral"></p>
                <p><img style=" width:110%;" src="images/catalogo/producto/'.$row['codigo'].'_04.png" alt="foto lateral"></p>

            </td>
          </tr>
      </table>
      <table  align="center">
          <tr>
            <td width="402" height="70"></td>
          </tr>
      </table>
      <table align="center" style="color:gray;">
          <tr>
            <td width="300" height="250" align="left">
            <strong style="font-size:20px;">DESCRIPCIÓN:</strong><br>
            <p>'.$row['especificaciones'].'</p>
            <strong style="font-size:20px;">MEDIDAS:</strong><br>
            <p>BASE: '.$row['base'].' cms. <br>
              ALTO: '.$row['alto'].' cms.<br>
              ANCHO: '.$row['ancho'].' cms. <br>
              ASA: '.$row['asa'].' cms. <br>
            </p>
            </td>
            <td width="50"></td>
            <td width="300" height="250" align="left">
            <strong style="font-size:20px;">MATERIALES:</strong><br>
            <p><strong>EXTERIOR:</strong><br>
            '.$row['material1'].'	'.$row['porcentaje1'].'%<br>';

              $mat2 = $row['material2'];
              $porc2= $row['porcentaje2'];
              $mat3= $row['material3'];
              $porc3= $row['porcentaje3'];
              if (empty($mat2)and(empty($porc2))) {
                echo'<br>';
              }
              else {
                echo ''.$row['material2'].'	'.$row['porcentaje2'].'%<br>';
              }
              if (empty($mat3)and(empty($porc3))) {
                echo'<br>';
              }
              else {
                echo ''.$row['material3'].'	'.$row['porcentaje3'].'%<br>';
              }

              echo'

              <strong>FORRO:<br></strong>'.$row['forro'].'	'.$row['forroporcentaje'].'%<br><br>
              <strong style="font-size:40px;">$'.$row['precio'].'</strong>
            </p>

            </td>
          </tr>
      </table>

   </page_header>


   <page_footer>
      footer
   </page_footer>
</page> ';
           }
         }
         }
}
elseif($_GET) {


    $queryResult = $pdo->query("SELECT * FROM nylontb WHERE codigo IN('$codigo') order by precio asc ");
    while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {

      $image = 'images/catalogo/producto/'. $row['codigo'] .'_01.png';
      $image2 = 'images/catalogo/producto/'. $row['codigo'] .'_02.png';
      $image3 = 'images/catalogo/producto/'. $row['codigo'] .'_03.png';
      $image4 = 'images/catalogo/producto/'. $row['codigo'] .'_04.png';

      if ((file_exists($image))and(file_exists($image2))and(file_exists($image3))and(file_exists($image4))){


  echo'<page backimg="images/catalogo/fondos/'.$row['clave'].'.jpg">
     <page_header style="text-align:center">
        <table>
          <tr>
            <td width="402" height="200"></td>
            <td width="402" height="200"></td>
          </tr>
        </table>
        <table style="text-align:center" cellspacing="0" cellpadding="0" >
            <tr>
              <td width="804" style="color: white; font-weight:bold; font-size:30px; line-height:20px;">'.$row['descripcion'].'<br>
              <strong style="font-size:80px;">'.$row['codigo'].'</strong></td>
            </tr>
        </table>
        <table style="text-align:center" cellspacing="0" cellpadding="0" align="center" >
            <tr>
              <td width="550" cellspacing="0" cellpadding="0"><img style="width:110%; position:relative; top:-40px;" src="images/catalogo/producto/'.$row['codigo'].'_01.png"></td>
              <td width="150" cellspacing="0" cellpadding="0" style="text-align:center;">

                  <p><img style=" width:110%; position:relative; top:-60px;" src="images/catalogo/producto/'.$row['codigo'].'_02.png" alt="foto lateral"></p>
                  <p><img style=" width:110%;" src="images/catalogo/producto/'.$row['codigo'].'_03.png" alt="foto lateral"></p>
                  <p><img style=" width:110%;" src="images/catalogo/producto/'.$row['codigo'].'_04.png" alt="foto lateral"></p>

              </td>
            </tr>
        </table>
        <table  align="center">
            <tr>
              <td width="402" height="48"></td>
            </tr>
        </table>
        <table align="center" style="color:gray;">
            <tr>
              <td width="300" height="250" align="left">
              <strong style="font-size:20px;">DESCRIPCIÓN:</strong><br>
              <p>'.$row['especificaciones'].'</p>
              <strong style="font-size:20px;">MEDIDAS:</strong><br>
              <p>BASE: '.$row['base'].' cms. <br>
                ALTO: '.$row['alto'].' cms.<br>
                ANCHO: '.$row['ancho'].' cms. <br>
                ASA: '.$row['asa'].' cms. <br>
              </p>
              </td>
              <td width="50"></td>
              <td width="300" height="250" align="left">
              <strong style="font-size:20px;">MATERIALES:</strong><br>
              <p><strong>EXTERIOR:</strong><br>
              '.$row['material1'].'	'.$row['porcentaje1'].'%<br>';

                $mat2 = $row['material2'];
                $porc2= $row['porcentaje2'];
                $mat3= $row['material3'];
                $porc3= $row['porcentaje3'];
                if (empty($mat2)and(empty($porc2))) {
                  echo'<br>';
                }
                else {
                  echo ''.$row['material2'].'	'.$row['porcentaje2'].'%<br>';
                }
                if (empty($mat3)and(empty($porc3))) {
                  echo'<br>';
                }
                else {
                  echo ''.$row['material3'].'	'.$row['porcentaje3'].'%<br>';
                }

                echo'
                <br>
                <br>
                <strong>FORRO:<br></strong>'.$row['forro'].'	'.$row['forroporcentaje'].'%<br><br>
                <strong style="font-size:40px;">$'.$row['precio'].'</strong>
              </p>

              </td>
            </tr>
        </table>

     </page_header>


     <page_footer>
        footer
     </page_footer>
  </page> ';

  }
 }
}
 ?>
