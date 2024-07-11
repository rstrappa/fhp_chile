<?php
session_start();
include ("../model/database.php");

//$data = array();
$id_auto = $_REQUEST['id_vehiculo'];
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{

		    $sql = mysqli_query($con, "SELECT capacidad_actual from vehiculo where id_auto = $id_auto");

        while ($r = mysqli_fetch_object($sql))
        {
              echo '<input type="hidden" id="hCapadidadActual" value="'.$r->capacidad_actual.'"/>';

        }


  		mysqli_close($con);

  }

?>
