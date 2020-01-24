<main class="cd-main-content">

  <?php include 'template/sub-menu.php' ?>


  <section class="cd-gallery" >
    <form action="" method="post">
      <ul id="limit">
    <?php

    $queryResult = $pdo->query("SELECT id, codigo, descripcion, coddescripcion, licencia, clave, color, temporada, precio FROM nylontb LIMIT 0,570 ");
      while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {

        $image = 'images/skus/'. $row['codigo'] .'_01.jpg';

        if (file_exists($image)){


          echo '
    <!-- seccion de producto modificada -->

    <li id="image-size" class="mix '. $row['clave'] .' '. $row['temporada'] .' '. $row['precio'] .' '. $row['codigo'] .'
    '. $row['color'] .' '. $row['coddescripcion'] .' '. $row['descripcion'] .' '. $row['licencia'] .' ">


      <a href="product.php?cod='. $row['codigo'] .'" target="_blank">


        <img style="padding:20px 20px 0 20px;" data-src="images/skus/'. $row['codigo'] .'_01.jpg"
            src="images/error.jpg" alt="Imagen" onError="no_imagen(this)"></a>

            <div id="divide"></div>
            <div id="text-producto" class="pt-3">
            <p id="text">
            <br>'. $row['codigo'] .'
            <br><small>'. $row['descripcion'] .'</small><p>
            <p id="text-second">'. $row['licencia'] .'</p>
            </div>


            <!-- checkbox -->
            <span>
            <div id="container-color">

            <label class="switch" for="checkbox'. $row['codigo'] .'">
            <input type="checkbox"  name="seleccion[]" value="'. $row['codigo'] .'" id="checkbox'. $row['codigo'] .'" />
            <div class="slider round"></div>
            </label>

            <span id="text">$'. $row['precio'] .'</span>
            </div>
            </span>
            <!--/ checkbox -->
            </li>

    <!-- /seccion de producto modificada -->';

              }
                    }
      ?>

    </ul>
    <!-- <button class="uk-button uk-button-large uk-button-outline ladda-button uk-width-1-1"><i class="uk-icon uk-icon-plus"></i> SHOW MORE</button>
    <div class="cd-fail-message">No results found</div> -->

    </section>
    <?php include 'template/select.php'; ?>
    </form>
    <?php include 'template/filters.php' ?>
</main> <!-- cd-main-content -->
