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
    <h5>para subir archivo, deberás convertir su archivo .XLS a .CSV, en la opción:<br> guardar como > COMMA SEPARATED VALUES (CSV) </h5>
  </div>
  </div>
  </div>
  <div class="container d-flex justify-content-center align-items-center pt-5">
  <div class="row">
  <div class="col-12 px-md-5 px-3 py-md-5 py-3" style="border:1px solid gray;">
    <form enctype="multipart/form-data" method="post" action="list.php" >
      <input  type="file" name="file" id="file" required>
    <input class="btn btn-primary col-md-2 col-12 mt-md-0 mt-2"  type="submit" value="Enviar" name="enviar" onsubmit="return false">
    </form>

  <!-- <form enctype="multipart/form-data" method="post" action="list.php" >
      <div class="input-group">
      <div class="custom-file">
        <input type="file" name="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
      </div>
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" value="Enviar" name="enviar" onsubmit="return false"  id="inputGroupFileAddon04">Enviar</button>
      </div>
    </div>
</form> -->

  </div>
  </div>
  </div>
  <div class="container pt-5 instrucciones">
      <div class="row">
        <div class="col-md-4 col-12">

          <div class="row">
            <div class="col-12">
                <img class="col-12" src="images/pantalla-1.jpg" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center pb-4">
              <h6><strong>EN DRIVE:</strong></h6>
                <h6>crea una columna sin cabezera, solo con codigos de productos</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">

          <div class="row">
            <div class="col-12">
                <img class="col-12" src="images/pantalla-2.jpg" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center pb-4">
                <h6>selecciona la opción: descargar archivo como CSV (Valores separados por comas)</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">

          <div class="row">
            <div class="col-12">
                <img class="col-12" src="images/pantalla-3.jpg" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center pb-4">
                <h6>Tambien se puede realizar en <strong>EXCEL</strong> creando de igual forma una columna sin cabezera y unicamente logos y luego en GUARDAR COMO.. a archivo .csv</h6>
            </div>
          </div>
        </div>
      </div>
  </div>

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
