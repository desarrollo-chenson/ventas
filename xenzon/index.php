<?php
include('database_connection.php');
?>
<!DOCTYPE html>
<html lang='es' class=''>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chenson® México – Ventas</title>
	<link rel="icon" href="images/favicon.png" type="image/png" sizes="32x32">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/filters.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@11.0.6/dist/lazyload.min.js"></script>
</head>
<body>
				<!-- secciones pagina -->
	


			<?php include 'template_xenzon/header.php' ?>
			<?php include 'template_xenzon/main.php' ?>
			<?php include 'template_xenzon/section.php' ?>
			<?php include 'template_xenzon/footer.php' ?>
				<!-- secciones pagina -->

			<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
			<script src="https://cdn.jsdelivr.net/jquery.mixitup/2.1.11/jquery.mixitup.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script type="text/javascript" src="js/filters.js"></script>
			<script type="text/javascript" src="js/controls.js"></script>


			<script>
			$(document).ready(function(){

			    filter_data();

			    function filter_data()
			    {
			        $('.filter_data').html('<div id="loading" style="" ></div>');
			        var action = 'fetch_data';
			        var categorias = get_filter('categorias');
			        var patrocinio = get_filter('patrocinio');
							var gen = get_filter('gen');
							var family = get_filter('family');
							var busqueda = get_filter('busqueda');
			        $.ajax({
			            url:"fetch_data.php",
			            method:"POST",
			            data:{action:action, categorias:categorias, patrocinio:patrocinio, gen:gen, family:family, busqueda:busqueda,},
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

					$('.busqueda').on('keyup', '#busqueda', function(){
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


			$(obtener_registros());

			function obtener_registros(xenzon2020)
			{
				$.ajax({
					url : 'fetch_data.php',
					type : 'POST',
					dataType : 'html',
					data : { xenzon2020: xenzon2020 },
					})

				.done(function(resultado){
					$("#tabla_resultado").html(resultado);
				})
			}

			$(document).on('keyup', '#busqueda', function()
			{
				var valorBusqueda=$(this).val();
				if (valorBusqueda!="")
				{
					obtener_registros(valorBusqueda);
				}
				else
					{
						obtener_registros();
					}
			});




			</script>

		</body>
</html>
