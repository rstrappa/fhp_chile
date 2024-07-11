

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row text-center">
                          <div class="col-md-12" style="border-bottom:solid 1px black; margin-bottom:10px;">
                            <h1>Asignar conductor </h1>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <div class="col-md-6 col-sm-12" style="float:left;">
                            <select class="form-control" id="id_conductor">
                              <option value="">Selecciona un conductor</option>
                              <?php foreach ($c->Listar() as $r): ?>
                                <option value="<?php echo $r->id_conductor ?>"><?php echo $r->nombre ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                          <div class="col-md-6 col-sm-12" id="empresaCo"style="float:left;">

                          </div>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-12 col-sm-12">
                          <div class="col-md-6 col-sm-12">
                            <select class="form-control" id="id_empresa">
                              <option value="">Seleccione una empresa</option>
                              <?php foreach ($this->model_em->Listar() as $r): ?>
                                <option value="<?php echo $r->id_empresa ?>"><?php echo $r->nombre_empresa ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-12 col-sm-12 text-center">
                          <input type="button" class="btn btn-success" id="btnAsignarConductor" value="Asignar Conductor">
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
