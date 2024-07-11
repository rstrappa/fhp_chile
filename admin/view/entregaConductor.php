

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 text-center">
                            <h1>Entregas</h1>
                          </div>
                      </div><hr>
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <div id="divTabla"></div>
                          <?php $sc = $_SESSION['conductor']; ?>
                          <input type="hidden" name="id_sesion" id="id_sesion" value="<?php echo $sc->id_conductor ?>">
                        </div>
                      </div>
                      <br><div class="row">
                        <div class="col-md-12 text-center">
                          <div style="width: 80%; height:700px;"id="map"></div>
                        </div>
                      </div>
                    </div>
                </div>
                <input type="hidden" id="hLoc" value="">
                <input type="hidden" id="hLat" value="">
                <input type="hidden" id="hLon" value="">

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
