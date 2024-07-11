<?php
session_start();
include ("../model/database.php");
$id_conductor = $_REQUEST['id_conductor'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{

	
		  $sql = mysqli_query($con, "SELECT e.nombre_empresa nombre from ConductorEmpresa c join empresa e USING(id_empresa) where id_conductor = $id_conductor");
			echo "El Conductor esta asignado a:";
      while ($r = mysqli_fetch_object($sql))
      {
        echo'<br>'.$r->nombre;

      }
			mysqli_close($con);
  }

?>
