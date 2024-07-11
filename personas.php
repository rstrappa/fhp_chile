<?php
require_once('model/database.php');
require_once('model/persona.php');
$servername = "201.217.241.4";
$database = "fhpchile_base";
$username = "fhpchile_fhpchil";
$password = "v m n t x ";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
$query = "SELECT * FROM persona";

// Ejecutas las consulta
$result = mysql_query($query);
$p = new Persona();
 ?>
<?php require_once('view/header.php'); ?>
  <body>
    <div class="row">
      <div class="col-md-12 text-center" style="border-bottom: 1px solid black;">
        <h1>Personas registradas</h1>
      </div>
    </div>
    <div style="margin-left:30px; margin-top:20px;">
      <div class="row">
        <div class="col-md-10">
          <table id="example" class="display" style="width:100%">
                  <thead>
                      <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Rut</th>
                          <th>Fecha nacimiento</th>
                          <th>Telefono</th>
                          <th>Direccion</th>
                          <th>Nacionalidad</th>
                          <th>Estado Documentacion</th>
                          <th>Licencia</th>
                          <th>Antecedentes</th>
                          <th>Disponibilidad</th>
                      </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($p->Listar() as $row): ?>
                       <tr>
                         <td><?php echo $row->nombre ?></td>
                         <td><?php echo $row->apellido ?></td>
                         <td><?php echo $row->rut ?></td>
                         <td><?php echo $row->fecha ?></td>
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
                           <td>No tiene licencia</td>
                         <?php endif; ?>
                         <?php if ($row->licencia != null): ?>
                           <td><?php echo $row->licencia ?></td>
                         <?php endif; ?>
                         <?php if ($row->antecendentes == 0): ?>
                           <td>Si</td>
                         <?php endif; ?>
                         <?php if ($row->antecendentes == 1): ?>
                           <td>No</td>
                         <?php endif; ?>
                         <?php if ($row->disponibilidad == 0): ?>
                           <td>No esta disponible</td>
                         <?php endif; ?>
                         <?php if ($row->disponibilidad == 1): ?>
                           <td>Disponible</td>
                         <?php endif; ?>
                         </tr>

                       <?php endforeach; ?>



                  </tbody>


              </table>
        </div>
      </div>
    </div>
  <?php require_once('view/footer.php'); ?>
