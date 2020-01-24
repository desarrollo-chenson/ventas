<!DOCTYPE html>
<?php

$users = ['ContactCenterHB'=> 'Pr0ductoSuG3rid0HB'];

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

foreach( $users as $key =>$us){

    if($usuario == $key && $contrasena == $us){
        session_start();
        $_SESSION['usuario'] = $usuario;

    }
}

if(!isset($_SESSION['usuario'])){
    header('Location: list.php');

}



?>
<?php
require_once 'config.php';




 ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Databases</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>
    <?php include '../template/header.php' ?>
    <?php include '../template/main.php' ?>
    <section id="sec-config">
      <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="pt-5 pb-4">Lista de Producto venta de liquidación</h3>
                </div>
                <div class="col-6 pt-5">
                    <a class=" col-12 btn btn-dark" href="admin.php">configurar Producto</a>
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

              echo '</tr>';
                  }

              ?>

          </table>
          <div class="row">


          </div>
      </div>
      <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="pt-5 pb-4">Lista de Producto sugerido</h3>
                </div>
                <div class="col-6 pt-5">

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

              echo '</tr>';
                  }

              ?>

          </table>
          <div class="row">


          </div>
      </div>
    </section>
    <?php include '../template/footer.php' ?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800|Zilla+Slab:300,400,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
