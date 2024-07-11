

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row text-center">
                        <div class="col-md-12 col-sm-12">
                          <h1>Solicitud de conductores</h1>
                        </div>
                      </div><hr>
                      <div class="row">
                        <div class="col-md-11">
                          <table class="cell-border" id="example" class="display" style="width:100%">
                                  <thead>
                                      <tr>
                                          <th>Foto perfil</th>
                                          <th>Fecha solicitud</th>
                                          <th>Rut</th>
                                          <th>Nombre</th>
                                          <th>Correo</th>11
                                          <th>Region</th>
                                          <th>Comuna</th>
                                          <th>Fecha nacimiento</th>
                                          <th>Telefono</th>
                                          <th>Direccion</th>
                                          <th>Nacionalidad</th>
                                          <th>Estado Documentacion</th>
                                          <th>Licencia</th>
                                          <th>Antecedentes</th>
                                          <th>Disponibilidad</th>
                                          <th>Posible traslado</th>
                                          <th>Auto Leasing</th>
                                          <th>Patente Vehiculo</th>
                                          <th>Patente Rampla</th>
                                          <th>tipo vehiculo</th>
                                          <th>capacidad m3</th>
                                          <th>Marca</th>
                                          <th>Modelo</th>
                                          <th>Año</th>
                                          <th>Documentos</th>
                                          <td>Accion</td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                     <?php foreach ($p->Listar() as $row): ?>
                                       <tr>
                                         <?php $ff = date("m-d-Y", strtotime($row->fecha)) ?>
                                         <?php $fss = date("m-d-Y", strtotime($row->fecha_solicitud)) ?>
                                         <td><img src="<?php echo $row->src_perfil ?>" style="border-radius:11px;"></img></td>
                                         <td><?php echo $fss ?></td>
                                         <td><?php echo $row->rut ?></td>
                                         <td><?php echo $row->nombre.' '.$row->apellido ?></td>
                                         <td><?php echo $row->mail ?></td>
                                         <td><?php echo $row->nombreRegion ?></td>
                                         <td><?php echo $row->nombreComuna ?></td>
                                         <td><?php echo $ff ?></td>
                                         <td><?php echo $row->telefono ?></td>
                                         <td><?php echo $row->direccion ?></td>
                                         <td><?php echo $row->iso_nac ?></td>
                                         <?php if ($row->estado_documentacion == 0): ?>
                                           <td>Documentacion no al dia</td>
                                         <?php endif; ?>
                                         <?php if ($row->estado_documentacion == 1): ?>
                                           <td>Documentacion al dia</td>
                                         <?php endif; ?>
                                         <?php if ($row->licencia == null): ?>
                                           <td>Licencia no subida</td>
                                         <?php endif; ?>
                                         <?php if ($row->licencia != null): ?>
                                           <td><?php echo $row->tipo_licencia ?></td>
                                         <?php endif; ?>
                                         <?php if ($row->antecendentes == 0): ?>
                                           <td>No</td>
                                         <?php endif; ?>
                                         <?php if ($row->antecendentes == 1): ?>
                                           <td>Si</td>
                                         <?php endif; ?>
                                         <?php if ($row->disponibilidad == 0): ?>
                                           <td>No esta disponible</td>
                                         <?php endif; ?>
                                         <?php if ($row->disponibilidad == 1): ?>
                                           <td>Disponible</td>
                                         <?php endif; ?>
                                         <?php if ($row->traslado == 0): ?>
                                           <td>No</td>
                                         <?php endif; ?>
                                         <?php if ($row->traslado == 1): ?>
                                           <td>Si</td>
                                         <?php endif; ?>
                                         <td><?php echo $row->auto_leasing ?></td>
                                         <td><?php echo $row->patente_vehiculo ?></td>
                                         <td><?php echo $row->patente_rampla ?></td>
                                         <td><?php echo $row->tipo_vehiculo ?></td>
                                         <td><?php echo $row->cantidad ?></td>
                                         <td><?php echo $row->marca ?></td>
                                         <td><?php echo $row->modelo ?></td>
                                         <td><?php echo $row->anio ?></td>
                                         <td><a href="../<?php echo $row->src_documentos ?>" target="_blank"><img style="width:30px;"src="../assets/img/svg/data-transfer-download.svg "></img></a>
                                        </td>
                                         <td>
                                            <?php if ($row->src_documentos != null): ?>
                                              <a href="?c=Usuario&a=AceptarSolicitudConductor&id=<?php echo $row->id_persona ?>" class="btn btn-success">Aceptar</a>
                                            <?php endif; ?>
                                            <?php if ($row->src_documentos == null): ?>
                                                  <a href="?c=Usuario&a=ReenviarCorreo&id=<?php echo $row->id_persona ?>" class="btn btn-success">Solicitar informacion</a>
                                            <?php endif; ?>
                                             <a href="?c=Usuario&a=RechazarSolicitud&id=<?php echo $row->id_persona ?>&correo=<?php echo $row->mail ?>" class="btn btn-danger">Rechazar</a>
                                         </td>
                                         </tr>

                                       <?php endforeach; ?>



                                  </tbody>


                              </table>
                        </div>
                      </div>
