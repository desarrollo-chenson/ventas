<!--Buttons download files-->
<div class="fab">
        <i class="fa fa-file faf" aria-hidden="true"></i>
    </div>

    <div class="boxi">
        <a href="#" class="itemm item1" rel="Catálogo con precios"><i class="fa fa-file-text-o faf" aria-hidden="true"></i></a>
        <a href="#" class="itemm item2" rel="Catálogo sin precios"><i class="fa fa-file-o faf" aria-hidden="true"></i></a>
        <a href="#" class="itemm item3" rel="Imágenes"><i class="fa fa-file-image-o faf" aria-hidden="true"></i></a>
    </div>

    <script>
        document.querySelector('.fab').addEventListener('click',function(e){
            document.querySelector('.boxi').classList.toggle('boxi-active');
            document.querySelector('.fab').classList.toggle('fab-active');
        });
    </script>
<!--Buttons download files-->

  <div class="cd-filter">
    <form>

      <div class="cd-filter-block">
        <h4>Temporada</h4>

        <ul class="cd-filter-content cd-filters list" id="space-between-us">
          <li>
            <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
            <label class="radio-label" for="radio1">Todas</label>
          </li>

              <li>
                <a href="http://monsterbranding.com.mx/chenson/workshop/">2019</a>
              </li>

        </ul> <!-- cd-filter-content -->
      </div> <!-- cd-filter-block -->

      <!-- filtro de las categorias -->
              <div class="cd-filter-block">
                  <input class="busqueda filter" id="busqueda" value="" type="text" placeholder="Buscar...">
              </div> <!-- cd-filter-block -->
      <!-- filtro de las categorias  -->

      <!-- filtro de las licencias -->
            <div class="cd-filter-block">
              <h4>Licencias</h4>
              <ul class="cd-filter-content cd-filters list" id="space-between-us">
                <?php

                $query = "SELECT DISTINCT(marca) FROM xenzon2020";
                $statement = $connect->prepare($query);
                $statement->execute();
                $result = $statement->fetchAll();
                foreach($result as $row)
                {
                ?>
                    <li>
                    <input  type="checkbox" class="common_selector patrocinio filter" value="<?php echo $row['marca']; ?>" >
                    <label class="checkbox-label"><?php echo $row['marca']; ?></label>
                  </li>
                <?php
                }

                ?>

              </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->
      <!-- filtro de las licencias -->


      <!-- filtro de las categorias -->
              <div class="cd-filter-block">
                <h4>Categorias</h4>
                <ul class="cd-filter-content cd-filters list" id="space-between-us">
                  <?php
                  $query = "SELECT DISTINCT(descripcion) FROM xenzon2020";
                  $statement = $connect->prepare($query);
                  $statement->execute();
                  $result = $statement->fetchAll();
                  foreach($result as $row){
                  ?>
                      <li>
                        <input type="checkbox" class="common_selector categorias filter" value="<?php echo $row['descripcion']; ?>"  >
                        <label class="checkbox-label"><?php echo $row['descripcion']; ?></label>
                      </li>
                  <?php
                      }
                  ?>

                </ul> <!-- cd-filter-content -->
              </div> <!-- cd-filter-block -->
      <!-- filtro de las categorias  -->




<!-- filtro de las licencias -->
      <div class="cd-filter-block">
        <h4>SEXO</h4>
        <ul class="cd-filter-content cd-filters list" id="space-between-us">
          <?php

          $query = "SELECT DISTINCT(genero) FROM xenzon2020";
          $statement = $connect->prepare($query);
          $statement->execute();
          $result = $statement->fetchAll();
          foreach($result as $row)
          {
          ?>
              <li>
              <input  type="checkbox" class="common_selector gen filter" value="<?php echo $row['genero']; ?>" >
              <label class="checkbox-label"><?php echo $row['genero']; ?></label>
            </li>
          <?php
          }

          ?>

        </ul> <!-- cd-filter-content -->
      </div> <!-- cd-filter-block -->
<!-- filtro de las licencias -->

<!-- filtro de las licencias -->
      <div class="cd-filter-block">
        <h4>COLECCIÓN</h4>
        <ul class="cd-filter-content cd-filters list" id="space-between-us">
          <?php

          $query = "SELECT DISTINCT(coleccion) FROM xenzon2020";
          $statement = $connect->prepare($query);
          $statement->execute();
          $result = $statement->fetchAll();
          foreach($result as $row)
          {
          ?>
              <li>
              <input  type="checkbox" class="common_selector family filter" value="<?php echo $row['coleccion']; ?>" >
              <label class="checkbox-label"><?php echo $row['coleccion']; ?></label>
            </li>
          <?php
          }

          ?>

        </ul> <!-- cd-filter-content -->
      </div> <!-- cd-filter-block -->
<!-- filtro de las licencias -->




    </form>

    <a href="#0" class="cd-close"><i class="icon ent-close"></i> cerrar </a>
  </div> <!-- cd-filter -->

  <a href="#0" class="cd-filter-trigger">Filtros</a>
