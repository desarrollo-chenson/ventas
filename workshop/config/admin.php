<!DOCTYPE html>

<?php
require_once 'config.php';




 ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modulo de configuración</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>
    <?php include '../template/header.php' ?>
    <section id="sec-config">
      <div class="container">
          <div class="row pt-5 pb-3">
            <div class="col-6 d-flex justify-content-center">
                  <h3>VENTA DE LIQUIDACIÓN</h3>
            </div>
            <div class="col-3 d-flex justify-content-center">
                <a class="btn btn-dark" href="add-venta.php">Agregar producto Venta de liquidacion</a>
            </div>
            <div class="col-3 d-flex justify-content-center">
                <a target="_blank" class="btn btn-secondary" href="http://<?php echo $url?>/productosugerido/">Ver pagina</a>
            </div>

          </div>


          <table class="table ">
              <tr>
                <th>VENTA DE LIQUIDACIÓN</th>
              </tr>
                <tr>
                  <th>Codigo</th>
                  <th>Imagen</th>
                  <th>color</th>
                  <th>Precio</th>
                  <th>Promocion</th>
                  <th>Descripcion</th>
                  <th>Marca</th>
                </tr>
              <?php
              $queryResult = $pdo->query("SELECT * FROM ventadeliquidacion");
              while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
              echo '<tr>';
              echo '<td class="align-middle">'. $row['codigo'] . '</td>';
              echo '<td class="align-middle"><img width="100" src="http://hbhandbags.com.mx/imagenes/FINALIZADOS/'. $row['imagen'] .'/FRENTE.jpg"></td>';
              echo '<td class="align-middle">'. $row['color'] . '</td>';
              echo '<td class="align-middle"> $'. $row['precio'] . '</td>';
              echo '<td class="align-middle"> $'. $row['promocion'] . '</td>';
              echo '<td class="align-middle">'. $row['descripcion'] . '</td>';
              echo '<td class="align-middle">'. $row['marca'] . '</td>';
              echo '<td class="align-middle"><a class="btn btn btn-secondary" href="update-venta.php?id=' . $row['id'] . '">Editar</a></td>';
                echo '<td class="align-middle"><a class="btn btn btn-danger" href="delete-venta.php?id=' . $row['id'] . '">Borrar</a></td>';
              echo '</tr>';
                  }

              ?>

          </table>
          <div class="row pt-5 pb-3">
            <div class="col-6 d-flex justify-content-center">
                  <h3>PRODUCTO SUGERIDO</h3>
            </div>
            <div class="col-3 d-flex justify-content-center">
                <a class="btn btn-dark" href="add.php">Agregar producto sugerido</a>
            </div>

          </div>


          <table class="table ">

                <tr>
                  <th>Codigo</th>
                  <th>Imagen</th>
                  <th>color</th>
                  <th>Precio</th>
                  <th>Promocion</th>
                  <th>Descripcion</th>
                  <th>Marca</th>
                </tr>
              <?php
              $queryResult = $pdo->query("SELECT * FROM productosugerido");
              while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
              echo '<tr>';
              echo '<td class="align-middle">'. $row['codigo'] . '</td>';
              echo '<td class="align-middle"><img width="100" src="http://hbhandbags.com.mx/imagenes/FINALIZADOS/'. $row['imagen'] .'/FRENTE.jpg"></td>';
              echo '<td class="align-middle">'. $row['color'] . '</td>';
              echo '<td class="align-middle"> $'. $row['precio'] . '</td>';
              echo '<td class="align-middle"> $'. $row['promocion'] . '</td>';
              echo '<td class="align-middle">'. $row['descripcion'] . '</td>';
              echo '<td class="align-middle">'. $row['marca'] . '</td>';
              echo '<td class="align-middle"><a class="btn btn btn-secondary" href="update.php?id=' . $row['id'] . '">Editar</a></td>';
                echo '<td class="align-middle"><a class="btn btn btn-danger" href="delete.php?id=' . $row['id'] . '">Borrar</a></td>';
              echo '</tr>';
                  }

              ?>

          </table>
  </section>
      </div>
      <?php include '../template/footer.php' ?>
      <?php include '../js/restriction.js' ?>
  </body>
</html>
