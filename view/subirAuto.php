

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12 text-center">
                          <h1>Sube la informacion de tu auto</h1>
                        </div>
                      </div><hr>
                      <div class="col-md-12 col-sm-12">
                        <form enctype="multipart/form-data" class="" action="?c=Usuario&a=IngresarAuto" method="post">
                          <div class="row">
                              <div class="col-md-6 col-sm-12" style="float:left;">
                                <input type="text" name="patente_vehiculo" style=" text-transform: uppercase;" class="form-control" placeholder="Patente vehiculo" value="">
                              </div>
                              <div class="col-md-6 col-sm-12" style="float:left;">
                                <input type="text" name="patente_rampla" style=" text-transform: uppercase;" class="form-control" placeholder="Patente rampla" value="">
                              </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-6 col-sm-12">
                              <select class="form-control" name="id_tipo_vehiculo" style="float:left;">
                                <option value="">Seleccione un tipo de vehiculo</option>
                                <?php foreach ($tv->Listar() as $row): ?>
                                  <option value="<?php echo $row->id_tipo_vehiculo ?>"><?php echo $row->descripcion ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                          <div class="row mt-2">
                              <div class="col-md-6 col-sm-12">
                                <input type="text" class="form-control" name="capacidad" placeholder="Capacidad vehiculo en m3" style="float:left;" value="">
                              </div>
                          </div>
                          <div class="row mt-2">
                              <div class="col-md-6 col-sm-12" style="float:left;">
                                <input type="text" name="marca" class="form-control" placeholder="Marca" value="">
                              </div>
                              <div class="col-md-6 col-sm-12" style="float:left;">
                                <input type="text" name="modelo" class="form-control" placeholder="Modelo" value="">
                              </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Año" name="anio" value="">
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-6 col-sm-12">
                              <input type="file" class="form-control" name="src_imagen" value="">
                            </div>
                          </div>

                          <div class="row mt-3 text-center">
                            <div class="col-md-12 col-sm-12">
                              <input type="submit" class="btn btn-success" name="" value="Registrar vehiculo">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
