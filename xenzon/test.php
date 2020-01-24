<?php

//index.php

include('database_connection.php');

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product filter in php</title>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Advance Ajax Product Filters in PHP</h2>
        	<br />
            <div class="col-md-3">

                <div class="list-group">
					<h3>CATEGORIAS</h3>

					<?php

                    $query = "SELECT DISTINCT(descripcion) FROM xenzon2020";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector categorias" value="<?php echo $row['descripcion']; ?>"  ><?php echo $row['descripcion']; ?></label>
                    </div>
                    <?php
                    }

                    ?>

                </div>

				<div class="list-group">
					<h3>LICENCIAS</h3>
                    <?php

                    $query = "SELECT DISTINCT(marca) FROM xenzon2020";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector patrocinio" value="<?php echo $row['marca']; ?>"  ><?php echo $row['marca']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                </div>
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center;
	background: url('loader.gif') no-repeat center;
	height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var categorias = get_filter('categorias');
        var patrocinio = get_filter('patrocinio');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, categorias:categorias, patrocinio:patrocinio},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    // $('#price_range').slider({
    //     range:true,
    //     min:1000,
    //     max:65000,
    //     values:[1000, 65000],
    //     step:500,
    //     stop:function(event, ui)
    //     {
    //         $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
    //         $('#hidden_minimum_price').val(ui.values[0]);
    //         $('#hidden_maximum_price').val(ui.values[1]);
    //         filter_data();
    //     }
    // });

});
</script>

</body>

</html>
