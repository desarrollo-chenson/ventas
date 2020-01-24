
<section>
  <div class="container-fluid">

    <form class="" action="index.html" method="post">
      <div class="container pb-4">
        <div class="row">




          <?php
          $queryResult = $pdo->query("SELECT * FROM nylontb  order by precio asc LIMIT 0,15");
            while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {


    echo'
          <!-- producto -->
          <div class="col-md-6 col-lg-3 col-12" id="product">
            <div class="card mt-3">
                <!-- link a modal -->
                <a data-toggle="modal" data-target="#chen'.$row['codigo'].'">
                  <img data-src="images/skus/'.$row['codigo'].'_01.jpg" src="images/error.jpg" class="card-img-top d-flex justify-content-center pt-2" alt="imagen '.$row['codigo'].'" onError="no_imagen(this)">
                </a>
                <!-- link a modal -->
                <div class="card-body pt-1">
                  <div id="divide"></div>
                  <div id="text-producto" class="pt-1 text-center">
                      <!-- texto producto -->
                        <p class="mb-0">
                      <span style="font-size:25px; font-weight:bold;">
                          '.$row['codigo'].'
                      </span><br>
                      <span style="font-size:15px; font-weight:bold;">
                        '.$row['descripcion'].'
                      </span><br>
                        '.$row['licencia'].'</p>
                    <!-- texto producto -->
                  </div>
                  <span>
                      <div id="container-color" class="pt-1 pb-1">
                          <label class="switch" for="checkbox'.$row['codigo'].'">
                              <input type="checkbox" name="checkbox" id="checkbox'.$row['codigo'].'" />
                              <div class="slider round"></div>
                          </label>
                        <span id="text">$'.$row['precio'].'</span>
                      </div>
                  </span>
                </div>
            </div>
          </div>
      <!-- modal -->
          <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"  id="chen'.$row['codigo'].'">
              <div class="modal-dialog modal-xl modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header" id="modal-chenson">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <!-- cuerpo del carusel -->
                              <div class="container-fluid">
                                <div class="row">
                                  <!-- carusel -->
                                  <div class="col-md-8 col-12">
                                    <div id="vista'.$row['codigo'].'" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                          <img src="images/skus/'.$row['codigo'].'_01.jpg" class="d-block w-100" alt="imagen" onError="no_imagen(this)">
                                                  </div>
                                                  <div class="carousel-item">
                                                          <img src="images/skus/'.$row['codigo'].'_02.jpg" class="d-block w-100" alt="imagen" onError="no_imagen(this)">
                                                  </div>
                                                  <div class="carousel-item">
                                                          <img src="images/skus/'.$row['codigo'].'_03.jpg" class="d-block w-100" alt="imagen" onError="no_imagen(this)">
                                                  </div>
                                                  <div class="carousel-item">
                                                          <img src="images/skus/'.$row['codigo'].'_04.jpg" class="d-block w-100" alt="imagen" onError="no_imagen(this)">
                                                  </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#vista'.$row['codigo'].'" role="button" data-slide="prev">
                                            <span class="" style="width:30px;" aria-hidden="true"><img style="width:25px;" src="images/flecha-izq.png"></span>
                                            <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#vista'.$row['codigo'].'" role="button" data-slide="next">
                                            <span class="" style="width:30px;" aria-hidden="true"><img style="width:25px;" src="images/flecha-der.png"></span>
                                            <span class="sr-only">Next</span>
                                            </a>
                                      </div>
                                  </div>
                                  <!-- /carusel -->
                                  <div class="col-md-4 col-12">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end align-items-center p-0">
                                              <img class="col-6 pb-2" src="images/logos/MB.png" alt="logo mario">
                                        </div>
                                    </div>
                                    <div class="row">
                                          <div class="col-12 text-right pb-3" id="text-accordion-title">
                                                  <h2>
                                                  $'.$row['precio'].' <h2>
                                                  <h3>'.$row['descripcion'].'<h3>
                                                  <h2>'.$row['codigo'].'</h2>
                                                  <h3>'.$row['licencia'].'</h3>

                                          </div>

                                    </div>
                                    <div class="accordion" id="accordion">
                                                  <div class="card">
                                                          <div class="card-header" id="headingOne">
                                                              <h2 class="mb-0 d-flex justify-content-between">
                                                                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:dimgray;">
                                                                    DETALLES
                                                                  </button><span>+</span>
                                                              </h2>
                                                          </div>

                                                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                                <div class="card-body" id="text-accordion">

                                                                  '.$row['especificaciones'].'
                                                                </div>
                                                          </div>
                                                    </div>
                                                    <div class="card">
                                                          <div class="card-header" id="headingTwo">
                                                                <h2 class="mb-0 d-flex justify-content-between">
                                                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:dimgray;">
                                                                    MEDIDAS
                                                                  </button><span>+</span>
                                                                </h2>
                                                          </div>
                                                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo'.$row['codigo'].'" data-parent="#accordion">
                                                                <div class="card-body" id="text-accordion">
                                                                    <strong>BASE:</strong> '.$row['base'].' cms. <br>
                                                                    <strong>ALTO:</strong> '.$row['alto'].' cms.<br>
                                                                    <strong>ANCHO:</strong> '.$row['ancho'].' cms. <br>
                                                                    <strong>ASA:</strong> '.$row['asa'].' cms. <br>
                                                                </div>
                                                              </div>
                                                    </div>
                                                        <div class="card">
                                                                <div class="card-header" id="headingThree">
                                                                <h2 class="mb-0 d-flex justify-content-between">
                                                                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:dimgray;">
                                                                    MATERIALES
                                                                  </button> <span>+</span>
                                                                </h2>
                                                                </div>
                                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                                <div class="card-body" id="text-accordion">
                                                                <strong>EXTERIOR:</strong><br>
                                                                        '.$row['material1'].' 	'.$row['porcentaje1'].' %<br>
                                                                        '.$row['material2'].' 	'.$row['porcentaje2'].' %<br>
                                                                        '.$row['material3'].' 	'.$row['porcentaje3'].' %<br>

                                                                <strong>FORRO:</strong><br>
                                                                        '.$row['forro'].' 	'.$row['forroporcentaje'].' %<br>	100%<br>

                                                                </div>
                                                                </div>
                                                              </div>
                                                        </div>
                                                  <div class="row">
                                                    <div class="col-12 pt-5 text-center">
                                                        <a href="#" class="btn btn-dark col-12 ">DESCARGAR IMAGENES</a><br>
                                                        <small>Tamaño de imagenes: 1500 x 1500 px 72 dpis</small>
                                                    </div>
                                                    <div class="col-12 pt-1 text-center">
                                                        <a href="#" class="btn btn-dark col-12 ">GENERAR PDF</a><br>
                                                        <small>Genera ficha técnica individual</small>
                                                    </div>

                                                  </div>
                                  </div>
                                </div>
                              </div>
                        <!-- /cuerpo del carusel -->
                      </div>
                  </div>
              </div>
          </div>
        <!-- modal -->
        ';
}
?>

        </div>
      </div>
      </form>
  </div>
</section>
