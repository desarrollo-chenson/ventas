<!-- botones para seleccion -->
<div class="container-fluid">
    <div class="row">
          <div class="col-12 seccion-botones" id="botones">
              <!-- pestaña controles -->
              <a href="#" class="d-flex justify-content-center control-botones" id="show-control">
                <div class="col-md-2 col-5 pestana text-center ">
                      <img style="max-width:150px;" src="images/down.png" alt="">
                </div>
              </a>
              <!-- pestaña controles -->
              <div class="container">
                    <div class="row">
                        <div class="col-12 pt-3 pb-2 d-flex justify-content-center alig-items-center text-center">
                            <h3>¿Que deseas hacer con tu selección de imágenes?</h3>
                        </div>
                    </div>
                    <div class="row pb-5">
                      <div class="input-group-prepend col-md-6 col-12 pt-3">
                        <a  class=" btn btn-outline-secondary dropdown-toggle col-12"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GENERAR PDF</a><br>
                          <div class="dropdown-menu">
                                <input type="submit" class="dropdown-item text-center" name="submit" id="descargar" value="DESCARGAR PDFS CON PRECIO" onclick=this.form.action="merge.php" >
                                <div role="separator" class="dropdown-divider"></div>
                                <input type="submit" class="dropdown-item text-center" name="submit" id="descargar" value="DESCARGAR PDFS SIN PRECIO" onclick=this.form.action="nopricemerge.php" >
                          </div>
                      </div>
                        <div class="col-md-6 col-12 pt-3">
                            <input type="submit" class="btn btn-sel col-12" name="" value="DESCARGAR IMAGENES" onclick=this.form.action="download.php" >
                        </div>


              </div>
          </div>
    </div>
</div>
  <!-- /botones para seleccion -->
