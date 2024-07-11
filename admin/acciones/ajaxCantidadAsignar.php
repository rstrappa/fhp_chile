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

		    $sql = mysqli_query($con, "SELECT * from vehiculo where id_auto = $id");


  		mysqli_close($con);

      while ($r = mysqli_fetch_object($sql))
      {
        echo'
          <input type="hidden" id="hCapacidad" value="'.$r->capacidad.'">
          <input type="hidden" id="hUtilizacion" value="'.$r->utilizacion.'">
					<input type="hidden" id="hId_auto" value="'.$r->id_auto.'">
					<input type="hidden" id="hCapacidad_actual" value="'.$r->capacidad_actual.'">
        ';

      }
  }

?>
