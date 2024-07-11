

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row text-center">
                          <div class="col-md-12" style="border-bottom:solid 1px black; margin-bottom:10px;">
                            <h1>Asignar orden <?php echo $p->id_orden ?> </h1>
                            <input type="hidden" id="hId_orden" value="<?php echo $p->id_orden ?>">
                          </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-12">
                          <div class="col-md-4" style="float:left;">
                            Empresa: <?php echo $p->empresa ?>
                          </div>
                          <div class="col-md-4" style="float:left;">
                            SKU: <?php echo $p->sku ?>
                          </div>
                        </div>
                      </div><hr>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="col-md-4">
                              Peso: <?php echo $p->peso ?>
                            </div><hr>
                            <div class="col-md-4">
                              Dimencion: <?php echo $p->dimencion ?> m3
                              <input type="hidden" id="hDimencion" value="<?php echo $p->dimencion ?>">
                            </div>
                          </div>
                        </div><hr>
                        <div id="divCapacidadActual"></div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="col-md-4">
                              <select class="form-control" name="id_vehiculo" id="id_vehiculo">
                                <option value="">Selecciona un vehiculo</option>
                                <?php foreach ($c->ListarAsignar($p->empresa) as $r): ?>
                                  <option value="<?php echo $r->id_auto ?>"><?php echo "Patente: ".$r->patente_vehiculo ." Capacidad ".$r->capacidad_actual."m3" ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                          <div class="col-md-6">
                            <button type="button" disabled class="btn btn-success" onclick="asignar()" id="btnAsignar">Asignar</button>
                          </div>
                          <div class="col-md-6">
                            <a href="?c=Usuario&a=ListarOrden"type="button" class="btn btn-danger" onclick="" id="">Volver</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
