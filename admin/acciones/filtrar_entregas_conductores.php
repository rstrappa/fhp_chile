<?php
session_start();
include ("../model/database.php");
$id = $_REQUEST['id'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{

		    $sql = mysqli_query($con, "SELECT pendienteOrden.id_orden id_orden, sku, pendienteOrden.direccion direccion, id_auto, pendienteOrden.comuna comuna, pendienteOrden.entregado entregado from entrega join vehiculo using(id_auto) join pendienteOrden using(id_orden) join conductor using(id_auto) where id_conductor = $id");
        $i = 0;
  		mysqli_close($con);
      echo'<table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
              <th>Direccion</th>
              <th>Producto</th>
              <th>Estado</th>

          </tr>
      </thead>
      <tbody>
      ';
      while ($r = mysqli_fetch_object($sql))
      {
        $i++;
        echo '
        <tr>
          <td>'.$r->direccion.', '.$r->comuna.'</td>
          <td>'.$r->sku.'</td>';
          if ($r->entregado == 1)
          {
          	echo '<td><button type="button" class="btn btn-warning" style="border-radius:35px; width:50px; height:50px;" disabled name="button"></button></td>';
							//echo '<td><a class="btn btn-success" href="?c=Usuario&a=Entregar&id='.$r->id_orden.'">Entregar</a></td>';
          }
          if ($r->entregado ==2)
          {
            echo '<td><button type="button" class="btn btn-success" style="border-radius:35px; width:50px; height:50px;" disabled name="button"></button></td>';
							echo '<td></td>';
          }

        echo '</tr>';
        echo '<input type="hidden" id="hDireccion'.$i.'" value="'.$r->direccion.', '.$r->comuna.'" />';
        echo '<input type="hidden" id="hId_auto" value="'.$r->id_auto.'" />';
      }
      echo'</tbody>
      </table>';
      echo '<br><div class="row">
        <div class="col-md-6 col-sm-12">
          <button type="button" class="btn btn-success" onclick="GenerarMapa('.$i.')">Generar Mapa</button>
        </div>
        <div class="col-md-6 col-sm-12">
          <button type="button" class="btn btn-success" id="btnGuardarRuta" disabled onclick="GuardarRuta()">Crear y guardar ruta</button>
        </div>
      </div>';
  }

?>
