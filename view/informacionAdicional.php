<div class="container">
          <div class="col-md-12 col-sm-12 text-center">
            <div class="">
              <h2>Sube la infomacion que falta para empezar a trabajar con nosotros</h2>
            </div>
          </div><hr>
          <form action="?c=Personas&a=AcutalizarInfo" enctype="multipart/form-data" method="post">
            <h5>Informacion personal</h5>
            <input type="hidden" name="id_solicitud" value="<?php echo $_REQUEST['id_solicitud'] ?>">
            <div class="row">
              <div class="col-md-6" style="float:left;">
                <div class="row espacio">
                    <div class="col-md-12 col-sm-12">
                      <div class="col-md-6 float-left">
                        <label>Estado de residencia</label>
                      </div>
                      <div class="col-md-3 float-left">
                          <input type="radio" value="1" class="" name="estado_documentacion" id="estado_documentacion" checked>
                          <label class=""  for="estado_documentacion">Al dia</label>
                      </div>
                      <div class="col-md-3 float-right">
                          <input type="radio" value="0" value="1" name="estado_documentacion" id="estado_documentacion">
                          <label class=""  for="estado_documentacion">Falta</label>
                      </div>
                    </div>
                  </div>
                  <div class="row espaciado">
                    <div class="col-md-12 col-sm-12">
                      <div class="col-md-6 float-left">
                        <label>Antecedentes penales</label>
                      </div>
                      <div class="col-md-3 float-left">
                          <input type="radio" value="1" name="antecedentes" id="antecedentes" checked>
                          <label class="" for="antecedentes">Si</label>
                      </div>
                      <div class="col-md-3 float-left">
                          <input type="radio" value="0" class="" name="antecedentes" id="antecedentes">
                          <label class="" for="antecedentes">No</label>
                      </div>
                    </div>
                  </div>
                  <div class="row espaciado">
                    <div class="col-md-12 col-sm-12">
                      <div class="col-md-6 float-left">
                        <label>Disponibilidad de traslado</label>
                      </div>
                      <div class="col-md-3 float-left">
                          <input type="radio" value="1" name="traslado" id="traslado" checked>
                          <label class="" for="antecedentes">Si</label>
                      </div>
                      <div class="col-md-3 float-left">
                          <input type="radio" value="0" class="" name="traslado" id="traslado">
                          <label class="" for="antecedentes">No</label>
                      </div>
                    </div>
                  </div>
                  <div class="row espaciado">
                    <div class="col-md-6 float-left">
                        <label style="margin-left:15px;">Disponibilidad inmediata:</label>
                    </div>
                    <div class="col-md-1 ">
                      <div class="col-md-1 text-left body float-right">
                        <label class="toggleButton">
                          <input type="checkbox" value="1" id="disponibilidad" name="disponibilidad">
                          <div>
                            <svg viewBox="0 0 44 44">
                              <path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758" transform="translate(-2.000000, -2.000000)"></path>
                            </svg>
                          </div>
                        </label>
                    </div>
                    </div>
                  </div>
              </div>
              <div class="col-md-4" style="float:left; border-left: 1px grey solid;">
                <h5>Informacion de auto y licencia</h5>
                <div class="row" style="margin-left:20px;">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <label>Sube tu licencia de conducir</label>
                      <input type="file" id="licencia" name="licencia" accept="image/jpg,image/jpeg,image/x-png,application/pdf" required/>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12 col-sm-12">
                      <label>Sube el padron del auto</label>
                      <input type="file" id="padron" name="padron" accept="image/jpg,image/jpeg,image/x-png,application/pdf" required/>
                    </div>
                  </div>
                  <zdiv class="row mt-2">
                    <div class="col-md-12 col-sm-12">
                      <label>Sube el permiso de circulacion</label>
                      <input type="file" id="permiso" name="permiso" accept="image/jpg,image/jpeg,image/x-png,application/pdf" required/>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-12">
                        <div class="col-md-6" style="float:left;">
                          <input type="text" class="form-control" placeholder="Patente auto" name="patente_vehiculo" value="" required>
                        </div>
                        <div class="col-md-6" style="float:left;">
                          <input type="text" class="form-control" placeholder="Patente rampla" name="patente_rampla" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><hr>
            <div class="row">
              <div class="col-md-12 col-sm-12 text-center">
                <h3>Foto de perfil</h3>
                <div class="row text-center mt-3">
                  <img src="" style="position:relative; left:30%;width:250px;height:250px;border-radius:150px;border:10px solid #666;" id="output"  alt="">
                </div>
                <div class="row text-center ">
                  <input type="file" class="form-control" accept="image/jpg,image/jpeg" name="src_perfil" id="src_perfil" onchange="loadFile(event)" value="" required>
                </div>
              </div>
            </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                  <input type="submit" name="" class="btn btn-success" value="Enviar datos">
                </div>
              </div>
          </form>
          <input type="hidden" id="error" value="<?php echo $_REQUEST['e'] ?>">
        </div>


</div>
