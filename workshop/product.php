
<?php
require_once 'config/config.php';

 ?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/filters.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/main.css">
    <title><?php echo $idproducto  ?></title>
  </head>
  <body>
      <?php include 'template/header.php' ?>

      <section style="background: white;">

        <?php
        $queryResult = $pdo->query("SELECT id, codigo, descripcion, coddescripcion, licencia, clave, color, temporada, material1, porcentaje1, material2, porcentaje2, material3,
          porcentaje3, forro, forroporcentaje, base, alto, ancho, asa, precio, especificaciones FROM nylontb WHERE codigo='$idproducto' LIMIT 0,1 ");
          while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
            echo '

        <div class="container-fluid pt-md-5 pt-1 d-flex align-items-center" >
            <div class="container">
              <div class="row">
                <a  data-toggle="modal" data-target=".modal'. $row['codigo'] .'"><div class="col-md-6 col-12 mb-5">
                      <img style="border: 2px solid lightgray;" class="col-12 " src="images/skus/'. $row['codigo'] .'_01.jpg" alt="">
                      <div class="row">
                      <div class="col-md-3 col-6"><img style="border: 2px solid lightgray;" class="col-12 " src="images/skus/'. $row['codigo'] .'_01.jpg" alt=""></div>
                      <div class="col-md-3 col-6"><img style="border: 2px solid lightgray;" class="col-12 " src="images/skus/'. $row['codigo'] .'_02.jpg" alt=""></div>
                      <div class="col-md-3 col-6"><img style="border: 2px solid lightgray;" class="col-12 " src="images/skus/'. $row['codigo'] .'_03.jpg" alt=""></div>
                      <div class="col-md-3 col-6"><img style="border: 2px solid lightgray;" class="col-12 " src="images/skus/'. $row['codigo'] .'_04.jpg" alt=""></div>
                      </div></a>
                </div>
                <div class="col-md-6 col-12">
                  <!-- acordiones -->
                  <div class="col-md-12 col-12">
                  <!-- logo acordion -->
                  <div class="row">
                  <div class="col-12 d-flex justify-content-end align-items-center p-0">
                    <img class="col-3 pb-4" src="images/logos/'. $row['clave'] .'.png" alt="logo '. $row['clave'] .'">
                  </div>
                  </div>
                  <!-- /logo acordion -->
                  <!-- texto titulo acrodion -->
                  <div class="row">
                  <div class="col-12 text-right pb-3" id="text-accordion-title">

                        <h1><strong>$'. $row['precio'] .'</strong></h1>
                    <h4 style="line-height:23px;">'. $row['descripcion'] .' '.strtoupper( $row['color'] ).' <br>
                        '. $row['codigo'] .'</h4>
                    <h3>'. $row['licencia'] .'</h3>
                  </div>
                  </div>

                <!-- texto titulo acrodion -->

                <!-- seccion acordiones -->
                <div class="accordion .text-accordion" id="accordion'. $row['codigo'] .'">


                <!-- primer acordion -->
                <div class="card">
                <div class="card-header" id="headingOne'. $row['codigo'] .'">
                <h2 class="mb-0 d-flex justify-content-between">
                <button class="btn btn-link" type="button" data-toggle="collapse"
                data-target="#collapseOne'. $row['codigo'] .'" aria-expanded="true" aria-controls="collapseOne'. $row['codigo'] .'" style="color:dimgray;">
                DETALLES
                </button><span>+</span>
                </h2>
                </div>

                <div id="collapseOne'. $row['codigo'] .'" class="collapse show" aria-labelledby="headingOne'. $row['codigo'] .'" data-parent="#accordion'. $row['codigo'] .'">
                <div class="card-body" id="text-accordion">
                '.$row['especificaciones'].'
                </div>
                </div>
                </div>

                <!-- segundo acordion -->


                <div class="card">
                <div class="card-header" id="headingTwo'. $row['codigo'] .'">
                <h2 class="mb-0 d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                data-target="#collapseTwo'. $row['codigo'] .'" aria-expanded="false" aria-controls="collapseTwo'. $row['codigo'] .'">
                MEDIDAS
                </button><span>+</span>
                </h2>
                </div>
                <div id="collapseTwo'. $row['codigo'] .'" class="collapse" aria-labelledby="headingTwo'. $row['codigo'] .'" data-parent="#accordion'. $row['codigo'] .'">
                <div class="card-body" id="text-accordion">
                    <strong>BASE:</strong> '. $row['base'] .' cms. <br>
                    <strong>ALTO:</strong> '. $row['alto'] .' cms.<br>
                    <strong>ANCHO:</strong> '. $row['ancho'] .' cms. <br>
                    <strong>ASA:</strong> '. $row['asa'] .' cms. <br>
                </div>
                </div>
                </div>


                <!-- tercer acordion -->

                <div class="card">
                <div class="card-header" id="headingThree'. $row['codigo'] .'">
                <h2 class="mb-0 d-flex justify-content-between">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                data-target="#collapseThree'. $row['codigo'] .'" aria-expanded="false" aria-controls="collapseThree'. $row['codigo'] .'">
                    MATERIALES
                </button> <span>+</span>
                </h2>
                </div>
                <div id="collapseThree'. $row['codigo'] .'" class="collapse" aria-labelledby="headingThree'. $row['codigo'] .'" data-parent="#accordion'. $row['codigo'] .'">
                <div class="card-body" id="text-accordion">
                    <strong>EXTERIOR:</strong><br>
                    '. $row['material1'] .'	'. $row['porcentaje1'] .'%<br>
                    ';
                    $mat1 = $row['material2'];
                    $por3 = $row['porcentaje2'];
                    $mat2 = $row['material3'];
                    $por3 = $row['porcentaje3'];

                    if (empty($mat1)and(empty($por1))) {
                      echo'<br>';
                    }
                    else {

                      echo ''. $row['material2'] .'	'. $row['porcentaje2'] .'%<br>';
                    }


                    if (empty($mat2)and(empty($por3))) {
                      echo'<br>';
                    }
                    else {

                      echo ''. $row['material3'] .'	'. $row['porcentaje3'] .'%<br>';
                    }
                  echo '
                    <strong>FORRO:</strong><br>
                  '. $row['forro'] .' '. $row['forroporcentaje'] .'%<br>
                </div>
                </div>
                </div>
                </div>
                <!-- /seccion acordeones -->
                </div>
                <div class="row">
                <div class="col-12 pt-5 text-center">
                <a href="images/download/'. $row['codigo'] .'.zip" class="btn btn-dark col-12 ">DESCARGAR IMAGENES</a><br>
                <small>Tamaño de imagenes: 1500 x 1500 px 72 dpis</small>
                </div>
                <div class="col-12 pt-1 text-center">
                <div class="input-group-prepend">
                <a  class="col-12 btn btn-outline-secondary dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GENERAR PDF</a><br>
                    <div class="dropdown-menu col-12">
                          <a class="dropdown-item text-center" href="print-pdf.php?cod='. $row['codigo'] .'">Descargar PDFS con precio</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item text-center" href="print-nopricepdf.php?cod='. $row['codigo'] .'">Descargar PDFS sin precio</a>
                    </div>
                </div>
                                <small>Genera ficha técnica individual</small>
                </div>
              </div>
            </div>
        </div>


        <!-- modal -->
        <div class="modal fade modal'. $row['codigo'] .'" tabindex="-1" role="dialog"
         aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header" id="modal-chenson">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


        <!-- modal -->


        <!-- cuerpo del carusel -->
        <div class="container-fluid">
        <div class="row">

        <!-- imagenes carusel -->

        <div class="col-12">
        <div id="carousel'. $row['codigo'] .'" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/skus/'. $row['codigo'] .'_01.jpg" class="d-block w-100"
            alt="Imagen" onError="no_imagen(this)"></div>
        <div class="carousel-item">
            <img src="images/skus/'. $row['codigo'] .'_02.jpg" class="d-block w-100"
             alt="Imagen" onError="no_imagen(this)"></div>
        <div class="carousel-item">
            <img src="images/skus/'. $row['codigo'] .'_03.jpg" class="d-block w-100"
           alt="Imagen" onError="no_imagen(this)"></div>
        <div class="carousel-item">
            <img src="images/skus/'. $row['codigo'] .'_04.jpg" class="d-block w-100"
             alt="Imagen" onError="no_imagen(this)"></div>
        </div>

        <!--/ imagenes carusel -->

        <!-- control carrusel -->
        <a class="carousel-control-prev" href="#carousel'. $row['codigo'] .'" role="button" data-slide="prev">
            <span class="" style="width:30px;" aria-hidden="true"><img src="images/flecha-izq.png"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel'. $row['codigo'] .'" role="button" data-slide="next">
            <span class="" style="width:30px;" aria-hidden="true"><img src="images/flecha-der.png"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        </div>
        <!-- /control carusel -->



      <!-- /seccion acordeones -->

        <!-- /cuerpo del carusel -->
      </div>
      </div>
      </div>
      </div>
      <!-- modal -->
        ';


}
?>
      </section>

      <?php include 'template/footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.mixitup/2.1.11/jquery.mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/filters.js"></script>
    <script type="text/javascript" src="js/controls.js"></script>
  </body>
</html>
