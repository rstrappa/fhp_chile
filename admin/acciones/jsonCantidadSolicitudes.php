<?php
session_start();
include ("../model/database.php");
$id_sucursal = $_POST['id_sucursal'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{

		    $sql = mysqli_query($con, "SELECT COUNT(*) cantidad from solicitud");


  		mysqli_close($con);
      $i= -1;
      while ($r = mysqli_fetch_object($sql))
      {
        $i++;
			     echo $r->cantidad;

      }
  }

?>
