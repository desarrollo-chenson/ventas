  <div class="cd-filter">
    <form>

      <div class="cd-filter-block">
        <h4>Temporada</h4>

        <ul class="cd-filter-content cd-filters list" id="space-between-us">
          <li>
            <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
            <label class="radio-label" for="radio1">Todas</label>
          </li>
          <?php
          $queryResult = $pdo->query("SELECT DISTINCT temporada FROM nylontb ");
            while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
              echo '
              <li>
                <input class="filter" data-filter=".'. $row['temporada'] . '" type="radio" name="radioButton" id="temp'. $row['temporada'] . '">
                <label class="radio-label" for="2017">'. $row['temporada'] .'</label>
              </li>
              ';
            }
          ?>
        </ul> <!-- cd-filter-content -->
      </div> <!-- cd-filter-block -->

      <div class="cd-filter-block">
        <h4>Buscar producto</h4>

        <div class="cd-filter-content">
          <input type="search" placeholder="Buscar..">
        </div> <!-- cd-filter-content -->
      </div> <!-- cd-filter-block -->

      <!-- filtro de las categorias -->
              <div class="cd-filter-block">
                <h4>Categorias</h4>
                <ul class="cd-filter-content cd-filters list" id="space-between-us">
                  <?php
                  $queryResult = $pdo->query("SELECT DISTINCT descripcion, coddescripcion FROM nylontb ");
                    while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
                  echo '<li>
                        <input class="filter" data-filter=".'. $row['coddescripcion'] . '" type="checkbox" id="'. $row['coddescripcion'] . '">
                        <label class="checkbox-label" for="'. $row['coddescripcion'] . '">'. ucfirst(strtolower($row['descripcion'])) . '</label>
                        </li>';
                      }
                  ?>
                </ul> <!-- cd-filter-content -->
              </div> <!-- cd-filter-block -->
      <!-- filtro de las categorias  -->


<!-- filtro de las licencias -->
      <div class="cd-filter-block">
        <h4>Licencias</h4>
        <ul class="cd-filter-content cd-filters list" id="space-between-us">
          <?php
          $queryResult = $pdo->query("SELECT DISTINCT clave, licencia FROM nylontb ");
            while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
          echo '<li>
                <input class="filter" data-filter=".'. $row['clave'] . '" type="checkbox" id="'. $row['clave'] . '">
                <label class="checkbox-label" for="'. $row['clave'] . '">'. ucfirst(strtolower($row['licencia'])) . '</label>
                </li>';
              }
              ?>
        </ul> <!-- cd-filter-content -->
      </div> <!-- cd-filter-block -->
<!-- filtro de las licencias -->


<!-- filtro de los precios -->
      <div class="cd-filter-block">
        <h4>Precio</h4>

        <div class="cd-filter-content">
          <div class="cd-select cd-filters">
            <select class="filter" name="selectThis" id="selectThis">
              <option value="">--- MXN---</option>
              <?php
              $queryResult = $pdo->query("SELECT DISTINCT precio FROM nylontb ");
                while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
                  echo '<option value=".'. $row['precio'] . '">$'. $row['precio'] . '</option>';

                }
                ?>
            </select>
          </div> <!-- cd-select -->
        </div> <!-- cd-filter-content -->
      </div> <!-- cd-filter-block -->
<!-- filtro de los precios -->

    </form>

    <a href="#0" class="cd-close"><i class="icon ent-close"></i> cerrar </a>
  </div> <!-- cd-filter -->

  <a href="#0" class="cd-filter-trigger">Filtros</a>
