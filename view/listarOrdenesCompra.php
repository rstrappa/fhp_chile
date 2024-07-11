

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 text-center">
                            <h1>Ordenes por despachar</h1>
                          </div>
                      </div><hr>
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <table id="example" class="table table-striped table-bordered" style="width:100%">
                                  <thead>
                                      <tr>
                                          <th>Fecha entrega</th>
                                          <th>Empresa</th>
                                          <th>Comuna</th>
                                          <th>Direccion</th>
                                          <th>Cliente</th>
                                          <th>Rut Cliente</th>
                                          <th>SKU</th>
                                          <th>Peso</th>
                                          <th>Dimenciones</th>
                                          <th>Asignar</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php foreach ($p->Listar() as $r): ?>
                                        <tr>
                                          <td><?php echo $r->fecha_entrega ?></td>
                                          <td><?php echo $r->nombre_empresa ?></td>
                                          <td><?php echo $r->comuna ?></td>
                                          <td><?php echo $r->direccion ?></td>
                                          <td><?php echo $r->cliente ?></td>
                                          <td><?php echo $r->rut_cliente ?></td>
                                          <td><?php echo $r->sku ?></td>
                                          <td><?php echo $r->peso ?></td>
                                          <td><?php echo $r->dimencion ?> m3</td>
                                          <td><a href="?c=Usuario&a=AsignarOrden&id_orden=<?php echo $r->id_orden ?>" class="btn btn-primary">Despachar</a></td>
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
