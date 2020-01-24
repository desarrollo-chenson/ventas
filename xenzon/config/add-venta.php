<!DOCTYPE html>



<?php
require_once 'config.php';
$result = false;


if (!empty($_POST)){

      $codigo = $_POST ['codigo'];
      $imagen = $_POST ['imagen'];
      $color = $_POST ['color'];
      $marca = $_POST ['marca'];
      $precio = $_POST ['precio'];
      $promocion = $_POST ['promocion'];
      $descripcion = $_POST ['descripcion'];

  $sql = "INSERT INTO ventadeliquidacion (codigo, imagen, color, marca, precio, promocion, descripcion) VALUES (:codigo, :imagen, :color, :marca, :precio, :promocion, :descripcion)";
  $query = $pdo->prepare($sql);

  $result = $query->execute([

        'codigo' => $codigo,
        'imagen' => $imagen,
        'color' => $color,
        'marca' => $marca,
        'precio' => $precio,
        'promocion' => $promocion,
        'descripcion' => $descripcion,
      ]);
}
 ?>

<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar producto venta de liquidación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>
    <?php include '../template/header.php' ?>
    <div class="container pt-4">
      <div class="row">
        <div class="col-6">
          <a class="btn btn-secondary col-6" href="admin.php">regresar</a>
        </div>
      </div>
    </div>

    <section class="d-flex justify-content-center align-items-center" id="sec-config">

      <div class="container d-flex justify-content-center align-items-center">


        <div class="row">
          <div class="col-12 pb-5">
            <h1>Agregar producto</h1>

            <?php
              if ($result)
              {
                echo '<div class="alert alert-success"> El producto se ha agregado correctamente!!!!</div>';
              }
             ?>
          </div>
          <div class="col-12">
            <form  action="add-venta.php" method="post">
              <div class="row pb-3">
                <div class="col-12 col-md-6">
                  <label for="codigo">Código:</label><br>
                  <input class="col-12" type="text" name="codigo" value="" id="codigo" required>
                </div>
                <div class="col-12 col-md-6">
                  <label for="imagen">imagen: </label><br>
                  <input class="col-12" type="text" name="imagen" value="" id="imagen" required>
                  <small>Si el nombre del código no refleja la imagen, poner solo los 5 últimos digitos</small>
                </div>
              </div>
              <div class="row">
                  <div class="col-12 col-md-6" >
                    <label for="color">Color:</label><br>
                    <input class="col-12" type="text" name="color" value="" id="color" required>

                  </div>
                  <div class="col-12 col-md-6">
                    <label for="codigo">Marca:</label><br>
                    <input class="col-12" type="text" name="marca" value="" id="marca" required>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <label for="imagen">Precio: </label>
                  <input class="col-12" type="text" name="precio" value="" id="precio" required>
                </div>
                <div class="col-12 col-md-6">
                  <label for="color">Promoción:</label>
                  <input class="col-12" type="text" name="promocion" value="" id="promocion" required>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <label for="color">Descripción:</label><br>
                  <input class="col-12"  type="text" name="descripcion" value="" id="descripcion" required>
                </div>
              </div>
              <div class="row pt-4 pb-5">
                <div class="col-12">
                  <input class="btn btn-dark col-12" type="submit" value="ENVIAR">
                </div>
              </div>
          </form>
          </div>

        </div>
      </div>
    </section>

      <?php include '../js/restriction.js' ?>
    <?php include '../template/footer.php' ?>
  </body>
</html>
