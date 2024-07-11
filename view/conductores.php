

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 text-center">
                            <h1>Conductores Registrados</h1>
                          </div>
                      </div><hr>
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                      <tr>
                                          <th>Foto perfil</th>
                                          <th>Nombre</th>
                                          <th>Rut</th>
                                          <th>fecha de nacimiento</th>
                                          <th>Telefono</th>
                                          <th>Nacionalidad</th>
                                          <th>Mail</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php foreach ($c->ListarConductores() as $r): ?>
                                        <tr>
                                          <td>
                                            <?php if ($r->src_perfil != null): ?>
                                              <img src="<?php echo $r->src_perfil ?>" style="border-radius:56px; width:200px;"></img>
                                            <?php endif; ?>
                                            <?php if ($r->src_perfil == null): ?>
                                              <img src="assets/images/perfil.jpg" style="border-radius:56px; width:200px;"></img>
                                            <?php endif; ?>
                                          </td>
                                          <td><?php echo $r->nombre ?></td>
                                          <td><?php echo $r->rut ?></td>
                                          <td><?php echo $r->fecha ?></td>
                                          <td><?php echo $r->telefono ?></td>
                                          <td><?php echo $r->iso_nac ?></td>
                                          <td><?php echo $r->mail ?></td>

                                        </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
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
