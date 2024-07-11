<?php

 ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <h2>Tus datos</h2>
                    </div>
                  </div><hr>
                  <div class="col-md-12 col-sm-12">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <div class="text-left" style="float:left;">
                          <?php if ($sC->src_perfil == null): ?>
                            <div class=" text-center">
                              <img src="assets/images/perfil.jpg" style="width:250px;height:250px;border-radius:150px;border:10px solid #666;" alt="">
                              <br>
                              <a href="?c=Usuario&a=FotoPerfil" class="btn btn-primary mt-2">Subir foto</a>
                            </div>
                          <?php endif; ?>
                          <?php if ($sC->src_perfil != null): ?>
                            <img src="<?php echo $sC->src_perfil ?>" style="width:250px;height:250px;border-radius:150px;border:10px solid #666;" alt="">

                          <?php endif; ?>
                          </div>
                        </div>
                        <div class="text-left" style="float:left;">
                          <div class="col-md-12 col-sm-12">
                            <div class="row">
                              <div class="col-md-5 col-sm-12">
                                Nombre:
                              </div>
                              <div class="col-md-7 col-sm-12">
                                <?php echo $sC->nombre ?>
                              </div>
                            </div><hr>
                            <div class="row">
                              <div class="col-md-6 col-sm-12">
                                Rut:
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <?php echo $sC->rut ?>
                              </div>
                            </div><hr>
                            <div class="row">
                              <div class="col-md-6 col-sm-12">
                                Telefono:
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <?php echo $sC->telefono ?>
                              </div>
                            </div><hr>
                            <div class="row">
                              <div class="col-md-6 col-sm-12">
                                Direccion:
                              </div>
                              <div class="col-md-6 col-sm-12">
                                <?php echo $sC->direccion ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>

                    <div class="row">
                      <div class="col-md-12">
                          <h2 style=" margin-top:2%;">Tu auto</h2>
                      </div>
                    </div><hr>
                      <div class="col-md-12 col-sm-12">
                        <div class="row">
                          <div class="col-md-8 col-sm-12">
                            <div class="text-left" style="float:left;">
                              <div class="row">
                                <div class="col-md-6">
                                  Marca:
                                </div>
                                <div class="col-md-6">
                                  <?php echo $sC->marca; ?>
                                </div>
                              </div><hr>
                              <div class="row">
                                <div class="col-md-6">
                                  Modelo:
                                </div>
                                <div class="col-md-6">
                                  <?php echo $sC->modelo; ?>
                                </div>
                              </div><hr>
                              <div class="row">
                                <div class="col-md-6">
                                  Año:
                                </div>
                                <div class="col-md-6">
                                  <?php echo $sC->anio; ?>
                                </div>
                              </div><hr>
                              <div class="row">
                                <div class="col-md-7 col-sm-12">
                                  Capacidad:
                                </div>
                                <div class="col-md-3 col-sm-12">
                                  <?php echo $sC->capacidad ?>
                                </div>
                              </div><hr>
                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  Tipo:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <?php echo $sC->descripcion ?>
                                </div>
                              </div><hr>
                            </div>
                            <div class="text-left" style="float:right;">
                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  Patente:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <?php echo $sC->patente_vehiculo ?>
                                </div>
                              </div><hr>
                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  Patente rampla:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <?php echo $sC->patente_rampla ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="row">
                      <div class="col-md-12">
                        <img style="width:50%; " src="<?php echo $sC->src_imagen ?>" alt="">
                      </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
