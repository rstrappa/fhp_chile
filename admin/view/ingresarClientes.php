
<input type="hidden" name="e" id="e" value="<?php echo $_REQUEST['e'] ?>">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid text-center">
                        <h1>Agregar cliente</h1><hr>
                        <div class="row">
                          <div class="col-md-12 col-sm-12">
                            <div class="col-md-5 col-sm-12">
                              <select class="form-control" id="ddlEmpresaS">
                                <option value="">Selecione una opcion</option>
                                <option value="1">Ingresar Empresa</option>
                                <option value="2">Ingresar sucursal</option>
                              </select>
                            </div>
                          </div>
                        </div><hr>
                        <div style="display:none;" id="divEmpresa">
                          <form class="" action="?c=Usuario&a=RegistrarEmpresa" method="post">
                            <div class="row" style="margin-top:10px;">
                              <div class="col-md-12 col-sm-12">
                                <h1>Empresas</h1><hr>
                                <div class="col-md-5">
                                  <input type="text" placeholder="Nombre empresa" name="nombre_empresa" class="form-control" value="" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 col-sm-12">
                                <input type="submit" class="btn btn-success"name="" value="Registrar">
                              </div>
                            </div>
                          </form>
                        </div>
                        <div style="display:none;" id="divSucursal">
                          <form class="" action="?c=Usuario&a=RegistrarSucursal" method="post">
                            <div class="row" style="margin-top:10px;">
                              <div class="col-md-12 col-sm-12">
                                <h1>Sucursales</h1><hr>
                                <div class="row">
                                  <div class="col-md-12 col-sm-12">
                                    <div class="col-md-5 col-sm-12" style="float:left;">
                                      <input type="text" class="form-control" placeholder="Cantidad Sucursales" name="cantSucursales" id="cantSucursales" value="">
                                    </div>
                                    <div class="col-md-1 col-sm-12" style="float:left;">
                                      <button type="button" onclick="" class="btn btn-success" id="btnCant">+</button>
                                    </div>
                                  </div>
                                </div>
                                <div id="divCantidadSucursales">
                                  
                                </div>
                              </div>
                            </div>
                            <div class="row" style="margin-top:10px;">
                              <div class="col-md-12 col-sm-12">
                                <input type="submit" class="btn btn-success"name="" id="btnRegistrarEmpresa" disabled value="Registrar">
                              </div>
                            </div>
                          </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
