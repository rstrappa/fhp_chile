

            <!-- MAIN CONTENT-->
            <div class="main-content" style="overflow-x:none;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <form class="" action="?c=Usuario&a=FirmarEntrega" enctype="multipart/form-data" method="post">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                              <h1>Entrega orden <?php echo $_REQUEST['id'] ?></h1>
                            </div>
                        </div><hr>
                        <input type="hidden" name="id_orden" value="<?php echo $_REQUEST['id'] ?>">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <div class="form-group" id="fg_rut">
                                Ingrese su Rut
                                  <input type="text" name="rut" id="rut" class="form-control" value=""  onkeyup="checkRut(this)"placeholder="" required/>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-6 col-sm-12">
                                Foto producto entregado
                                <input type="file" class="form-control" name="src_imagen" id="src_imagen" name="" value="">
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div id="signature" class="col-md-10 col-sm-10"><img class="imported"></img></div>
                          </div>
                          <input type="hidden" id="hFirma" name="hFirma" value="">
                          <div class="row mt-2">
                            <div class="col-md-12 col-sm-12">
                              <div class="col-md-3" style="float:left;">
                                <button type="button" class="btn btn-warning" onclick="$('#signature').jSignature('clear')" name="">limpiar</button>
                              </div>
                              <div class="col-md-3" style="float:left;">
                                <button type="button" class="btn btn-success" onclick="importImg($('#signature'))" name="">Guardar Firma</button>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-6 col-sm-12">
                              Acepto que recibi el producto
                              <div class="col-md-1 ">
                                <div class="col-md-1 text-left body float-right">
                                  <label class="toggleButton">
                                    <input type="checkbox" required value="1" id="acepto" name="acepto">
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
                          <div class="row mt-2">
                            <div class="col-md-12 col-sm-12 text-center">
                              <button type="submit" class="btn btn-success" id="btnRecibir">Recibir producto</button>
                            </div>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->

            <?php/*

            //Get a list of file paths using the glob function.
            $fileList = glob('assets/Ordenes/*');

            //Loop through the array that glob returned.
            foreach($fileList as $filename){
               //Simply print them out onto the screen.
               echo $filename, '<br>';
            }*/
            ?>
