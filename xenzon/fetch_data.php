<?php

//fetch_data.php

include('database_connection.php');
$output="";
$query="SELECT * FROM xenzon2020 ORDER BY id";

if(isset($_POST["action"]))
{
	$query = "SELECT * FROM xenzon2020 WHERE status ='1'";

	if(isset($_POST["categorias"]))
	{
		$brand_filter = implode("','", $_POST["categorias"]);
		$query .= "AND descripcion IN('".$brand_filter."')";
	}
	if(isset($_POST["patrocinio"]))
	{
		$ram_filter = implode("','", $_POST["patrocinio"]);
		$query .= "AND marca IN('".$ram_filter."')";
	}
	if(isset($_POST["gen"]))
	{
		$gen_filter = implode("','", $_POST["gen"]);
		$query .= "AND genero IN('".$gen_filter."')";
	}
	if(isset($_POST["family"]))
	{
		$family_filter = implode("','", $_POST["family"]);
		$query .= "AND coleccion IN('".$family_filter."')";
	}

}
//////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////

elseif(isset($_POST['xenzon2020']))
{
	$q=($_POST['xenzon2020']);
	$query="SELECT * FROM xenzon2020 WHERE
		id LIKE '%".$q."%' OR
		codigo LIKE '%".$q."%' OR
		descripcion LIKE '%".$q."%' OR
		color LIKE '%".$q."%' OR
		coleccion LIKE '%".$q."%' OR
		genero LIKE '%".$q."%' OR
		marca LIKE '%".$q."%'";
}


	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '

			<div class="card m-0 m-md-3 p-3 col-md-3 col-12 d-flex justify-content-center" style="max-width: 16rem; box-shadow: -9px 10px 25px -113px rgba(0,0,0,0.17);">
			  <img data-src="images/skus/'. $row['codigo'] .'.jpg" class="card-img-top" alt="imagen '. $row['codigo'] .'" src="images/error.jpg" onError="no_imagen(this)">
					<div id="divide"></div>
				  <div class="card-body">

				    <p class="card-text text-center" style="line-height: 18px;">
							<strong style="font-size: 26px;">'. $row['codigo'] .'</strong><br>
							'. $row['descripcion'] .'<br>
							<small>'. $row['marca'] .'</small>
						</p>
						<div id="container-color">

            <label class="switch mt-2" for="checkbox'. $row['codigo'] .'">
            <input type="checkbox"  name="seleccion[]" value="'. $row['codigo'] .'" id="checkbox'. $row['codigo'] .'" />
            <div class="slider round"></div>
            </label>

            </div>
				  </div>
				</div>';
		}
	}
	else
	{
		$output = '<h3>No se encontraron resultados de tu busqueda</h3>';
	}
	echo $output;

?>
<script type="text/javascript">
// lazy loading
var lazyLoadInstance = new LazyLoad({
	elements_selector: "img"
	// ... more custom settings?
});
</script>
