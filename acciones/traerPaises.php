<?php
session_start();
include ("../model/database.php");
//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{

		    $sql = mysqli_query($con, "SELECT * from paises");


  		mysqli_close($con);
      echo 'Pais de emision';
			echo '<select class="form-control" name="id_pais" id="id_pais" required>';
			echo '<option value="">Seleccione un pais</option>';
      while ($r = mysqli_fetch_object($sql))
      {
        echo '<option value="'.$r->id.'">'.$r->nombre.'</option>';

      }

			echo '</select>';
  }

?>
