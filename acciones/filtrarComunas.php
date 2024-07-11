<?php
session_start();
include ("../model/database.php");
$id = $_REQUEST['id_region'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{

		    $sql = mysqli_query($con, "SELECT id, nombre from comunas where idreg = $id");


  		mysqli_close($con);

			echo '<select class="form-control" name="id_comuna" id="id_comuna" required>';
			echo '<option value="">Seleccione una comuna</option>';
      while ($r = mysqli_fetch_object($sql))
      {
        echo '<option value="'.$r->id.'">'.$r->nombre.'</option>';

      }

			echo '</select>';
  }

?>
