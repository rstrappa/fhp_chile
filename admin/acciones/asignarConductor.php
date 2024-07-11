<?php
session_start();
include ("../model/database.php");
$id_conductor = $_REQUEST['id_conductor'];
$id_empresa = $_REQUEST['id_empresa'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{

		    $sql = mysqli_query($con, "INSERT INTO ConductorEmpresa(id_conductor,id_empresa) VALUES ($id_conductor,$id_empresa)");

  		mysqli_close($con);

  }

?>
