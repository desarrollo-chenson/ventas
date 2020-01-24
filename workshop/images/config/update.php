<?php
include_once 'config.php';
$result = false;

if (!empty($_POST)) {
    $id = $_POST['id'];
    $newcodigo = $_POST ['codigo'];
    $newimagen = $_POST ['imagen'];
    $newcolor = $_POST ['color'];
    $newmarca = $_POST ['marca'];
    $newprecio = $_POST ['precio'];
    $newpromocion = $_POST ['promocion'];
    $newdescripcion = $_POST ['descripcion'];

    $sql = "UPDATE productosugerido SET codigo=:codigo, imagen=:imagen, color=:color, marca=:marca, precio=:precio, promocion=:promocion, descripcion=:descripcion WHERE id=:id";
    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'id' => $id,
        'codigo' => $newcodigo,
        'imagen' => $newimagen,
        'color' => $newcolor,
        'marca' => $newmarca,
        'precio' => $newprecio,
        'promocion' => $newpromocion,
        'descripcion' => $newdescripcion
    ]);

    $codigoValue = $newcodigo;
    $imagenValue = $newimagen;
    $colorValue = $newcolor;
    $marcaValue = $newmarca;
    $precioValue = $newprecio;
    $promocionValue = $newpromocion;
    $descripcionValue = $newdescripcion;

} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM productosugerido WHERE id=:id";
    $query = $pdo->prepare($sql);

   $query->execute([
        'id' => $id
    ]);

    $row = $query->fetch(PDO::FETCH_ASSOC);
    $codigoValue = $row['codigo'];
    $imagenValue = $row['imagen'];
    $colorValue = $row['color'];
    $marcaValue = $row['marca'];
    $precioValue = $row['precio'];
    $promocionValue = $row['promocion'];
    $descripcionValue = $row['descripcion'];
}
?>

<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>update</title>
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
    <section   id="sec-config">
      <div class="container">
          <div class="row">
            <div class="col-12 pt-5">
              <h1>Actualizar</h1>

              <?php
              if ($result) {
                  echo '<div class="alert alert-success">El producto se actualizo correctamente!!!</div>';
                  }
                ?>
            </div>
          </div>
          <div class="row">
              <div class="col-md-6 col-12" id="img-update">
                <img class="col-8" src="http://hbhandbags.com.mx/imagenes/FINALIZADOS/<?php echo $imagenValue; ?>/FRENTE.jpg">
              </div>
              <div class="col-md-6 col-12">
                <form  action="update.php" method="post">
                  <div class="row">
                    <div class="col-6">
                      <label for="name">Código:</label><br>
                      <input class="col-12" type="text" name="codigo" value="<?php echo $codigoValue; ?>" id="codigo">
                    </div>
                    <div class="col-6">
                      <label for="email">Imagen: </label><br>
                      <input class="col-12" type="text" name="imagen" value="<?php echo $imagenValue; ?>" id="imagen">
                    </div>
                    <br>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <label for="email">Color: </label><br>
                      <input class="col-12" type="text" name="color" value="<?php echo $colorValue; ?>" id="color">
                    </div>
                    <div class="col-6">
                      <label for="email">Marca: </label><br>
                      <input class="col-12" type="text" name="marca" value="<?php echo $marcaValue; ?>" id="marca">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <label for="email">Precio: </label><br>
                      <input class="col-12" type="text" name="precio" value="<?php echo $precioValue; ?>" id="precio">
                    </div>
                    <div class="col-6">
                      <label for="email">Promoción: </label><br>
                      <input class="col-12" type="text" name="promocion" value="<?php echo $promocionValue; ?>" id="promocion">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <label for="email">Descripción: </label><br>
                      <input class="col-12" type="text" name="descripcion" value="<?php echo $descripcionValue; ?>" id="descripcion">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 pt-5">
                      <input type="hidden" name="id" value="<?php echo $id ?>">
                      <input class="col-12 btn btn-dark" type="submit" value="ENVIAR">
                    </div>
                  </div>
                </form>
              </div>
          </div>


      </div>
    </section>
<?php include '../template/footer.php' ?>
  </body>
</html>
