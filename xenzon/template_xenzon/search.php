<div class="container search">
    <form action="index.php">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar..." name="search">
          
                <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                <input type="file" name="file" id="file" class="inputfile" />
                <label for="file"><i class="fa fa-upload" aria-hidden="true"></i></label>

            <!-- Button to Open the Modal -->
            <button type="button" class="btn" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-info" aria-hidden="true"></i>
            </button>
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Buscar SKU con un archivo CSV</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <p>Para subir archivo, deberás convertir su archivo .XLS a .CSV, en la opción: guardar como > COMMA SEPARATED VALUES
                                (CSV)</p>
                            <div class="row">
                                <div class="col-4">
                                    <p>EN DRIVE: crea una columna sin cabezera, solo con codigos de productos</p>
                                </div>
                                <div class="col-4">
                                    <p>Selecciona la opción: descargar archivo como CSV (Valores separados por comas)</p>
                                </div>
                                <div class="col-4">
                                    <p>Tambien se puede realizar en EXCEL creando de igual forma una columna sin cabezera y unicamente logos y
                                        luego en GUARDAR COMO.. a archivo .csv</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <img src="images/csv1.jpg" alt="CSV1" width="100%">
                                </div>
                                <div class="col-4">
                                    <img src="images/csv2.jpg" alt="CSV1" width="100%">
                                </div>
                                <div class="col-4">
                                    <img src="images/csv3.jpg" alt="CSV1" width="100%">
                                </div>
                            </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
