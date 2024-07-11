

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 text-center">
                            <h1>Receptor</h1>
                          </div>
                      </div><hr>
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <?php $p = $this->model_po->ListarID($id);?>
                          <input type="hidden" id="hFirma" value="<?php echo $p->src_imagen ?>">
                          Rut: <br>
                           <label><?php echo $p->rut_receptor ?></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          firma
                          <div id="signature" disabled></div>
                        </div>
                      </div>
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
