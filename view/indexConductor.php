    <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row m-t-25">
                          <div class="col-sm-6 col-lg-3">
                              <div class="overview-item overview-item--c1">
                                  <div class="overview__inner">
                                      <div class="overview-box clearfix">
                                          <div class="icon">
                                              <i class="zmdi zmdi-truck"></i>
                                          </div>
                                          <div class="text">
                                              <h2>10368</h2>
                                              <span>Entregas Realizadas</span>
                                          </div>
                                      </div>

                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6 col-lg-3">
                              <div class="overview-item overview-item--c2">
                                  <div class="overview__inner">
                                      <div class="overview-box clearfix">
                                          <div class="icon">
                                              <i class="zmdi zmdi-money"></i>
                                          </div>
                                          <div class="text">
                                              <h2>388,688</h2>
                                              <span>Dinero Ganado</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <hr>

                          <?php if ($conductorr->ruta != null): ?>
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h2>Tienes entregas pendientes</h2>
                            </div>
                          </div>
                          <br><div class="row">
                            <div class="col-md-12 col-sm-12">
                              <a target="_blank" href="<?php echo $conductorr->ruta ?>" class="btn btn-success">Ir a google Maps</a>
                            </div>
                          </div>
                          <?php endif; ?>
                          <?php if ($conductorr->ruta == null): ?>
                            <div class="row">
                              <div class="col-md-12 col-sm-12">
                                <h2>No tienes entregas pendientes, espera a que te avisen!</h2>
                              </div>
                            </div>
                          <?php endif; ?>

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
