<?php
session_start();
include ("../model/database.php");

$ruta = $_REQUEST['ruta'];
$id_auto = $_REQUEST['id_auto'];


//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{

		    $sql = mysqli_query($con, "UPDATE ruta set ruta = '$ruta' where id_auto = $id_auto");


  		mysqli_close($con);

  }

?>
