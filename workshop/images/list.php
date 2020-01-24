<?php
require_once 'config/config.php';
// conexión
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/filters.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@11.0.6/dist/lazyload.min.js"></script>
  </head>
  <body>
    <?php include 'template/header.php' ?>
<section>
  <div class="container d-flex justify-content-center align-items-center pt-5">
  <div class="row">
  <div class="col-12">
    <h4>Este es el resultado de tu busqueda:</h4>
  </div>
  </div>
  </div>
  <form class="" action="" method="post">
  <div class="container">
    <div class="row">
        <a href="upload.php">Regresar</a>
    </div>
    <div class="row">

        <?php
        if (isset($_POST['enviar']))
        {

          $filename=$_FILES["file"]["name"];
          $info = new SplFileInfo($filename);
          $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);

           if($extension == 'csv')
           {
          $filename = $_FILES['file']['tmp_name'];
          $handle = fopen($filename, "r");

          while( ($data = fgetcsv($handle, 1000, ";") ) !== FALSE )
          {

            $queryResult = $pdo->query("SELECT * FROM nylontb WHERE codigo IN('$data[0]') order by precio asc ");
              while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {

                $image = 'images/skus/'. $row['codigo'] .'_01.jpg';

                if (file_exists($image)){
                echo '

                <div class="col-md-6 col-lg-3 col-12" id="product">
                <div class="card mt-3">
                              <!-- link a modal -->
                <a href="product.php?cod='. $row['codigo'] .'" target="_blank" >
                <img data-src="images/skus/'. $row['codigo'] .'_01.jpg" src="images/error.jpg" class="card-img-top d-flex justify-content-center pt-2" alt="imagen '. $row['codigo'] .'" onError="no_imagen(this)">
                </a>
                              <!-- link a modal -->
                <div class="card-body pt-1">
                <div id="divide"></div>
                <div id="text-producto" class="pt-1 text-center">
                <!-- texto producto -->
                <p class="mb-0">
                <span style="font-size:25px; font-weight:bold;">
                                        '. $row['codigo'] .'
                </span><br>
                <span style="font-size:15px; font-weight:bold;">
                                      '. $row['descripcion'] .'
                </span><br>
                                      '. $row['licencia'] .'</p>
                                  <!-- texto producto -->
                </div>


                <!-- checkbox -->
                <span>
                <div id="container-color">

                <label class="switch" for="checkbox'. $row['codigo'] .'">
                <input type="checkbox"  name="seleccion[]" value="'. $row['codigo'] .'" id="checkbox'. $row['codigo'] .'" checked />
                <div class="slider round"></div>
                </label>

                <span id="text">$'. $row['precio'] .'</span>
                </div>
                </span>
                <!--/ checkbox -->


                </div>
                </div>
                </div>

                ';
              }
            }
          }

        }

           fclose($handle);
        }
         ?>

         </div>
         <div class="row pb-5">
             <div class="d-flex justify-content-center col-md-6 col-12 pt-3">
                 <input type="submit" class="btn btn-sel col-12" name="submit" id="pdf" value="GENERAR PDF" onclick=this.form.action="print-pdf.php" >

             </div>
             <div class="d-flex justify-content-center col-md-6 col-12 pt-3">
                 <input type="submit" class="btn btn-sel col-12" name="submit" id="descargar" value="DESCARGAR IMAGENES" onclick=this.form.action="download.php" >

             </div>
   </div>

    <!-- producto -->
  </div>
  </form>
</section>
    <?php include 'template/footer.php' ?>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.mixitup/2.1.11/jquery.mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/filters.js"></script>
    <script type="text/javascript">
    // lazy loading
    var lazyLoadInstance = new LazyLoad({
      elements_selector: "img"
      // ... more custom settings?
    });

    // la imagen no se ve
    function no_imagen(esto){
    esto.src = "images/error.jpg"
    }




    </script>
  </body>
</html>
