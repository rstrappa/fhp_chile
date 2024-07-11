

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 text-center">
                            <h1>Sucursales</h1>
                          </div>
                      </div><hr>
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                      <tr>
                                          <th>Sucursal</th>
                                          <th>Direccion</th>
                                          <th>Eliminar</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php $id = $_REQUEST['id_empresa']; ?>
                                      <?php foreach ($s->ListarEmpresa($id) as $r): ?>
                                        <tr>
                                          <td><?php echo $r->nombre_sucursal ?></td>
                                          <td><?php echo $r->direccion_sucursal ?></td>
                                          <td><a href="?c=usuario&a=EliminarSucursal&id_sucursal=<?php echo $r->id_sucursal ?>&id_empresa=<?php echo $r->id_empresa ?>" class="btn btn-danger">Eliminar Sucursal</a></td>
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
