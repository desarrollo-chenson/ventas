<?php
include('database_connection.php');
if($_POST){
$resultado = $_POST['seleccion'];
}

?>

<page backtop="76mm" backbottom="37mm" backleft="20mm" backright="20mm" backimg="images/catalogo/fondo.jpg">
  <page_header>
  </page_header>
  <page_footer>
  </page_footer>

<?php
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
	$output = '';
	if($total_row > 0)
	{
		foreach($resultado as $row)
		{

echo'
      <table width="100%" height="10">
      <tr>
        <td width="700"><hr style="border: 1px solid lightgray; width: 700px;"></td>
      </tr>
      </table>

      <table>

        <tr>
          <td width="200"><img style="width: 180px;" src="images/catalogo/'. $row['codigo'] .'.jpg"></td>
          <td>
              <table>
                    <tr>
                      <td>
                          <img style="width:100px;" src="images/catalogo/'. $row['licencia'] .'.jpg"><br>
                          <p style="font-size: 18px;">
                            <strong style="font-size: 30px;">'. $row['codigo'] .'</strong><br>
                            '. $row['descripcion'] .'<br>
                             Ancho: '. $row['ancho'] .' cms, Largo: '. $row['largo'] .' cms., Alto: '. $row['alto'] .' cms.
                          </p>
                      </td>
                    </tr>
              </table>
          </td>
        </tr>
       </table>
 ';

          }
      }
  }
 ?>
</page>
