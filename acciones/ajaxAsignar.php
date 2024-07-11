<?php
session_start();
include ("../model/database.php");
$id_orden = $_REQUEST['id_orden'];
$id_auto = $_REQUEST['id_auto'];
$total = $_REQUEST['total'];

//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{

		    $sql = mysqli_query($con, "INSERT INTO entrega(id_auto,id_orden,entregado) VALUES($id_auto,$id_orden,0)");
        $sql = mysqli_query($con, "UPDATE pendienteOrden set entregado = 1 where id_orden = $id_orden");
        $sql = mysqli_query($con, "UPDATE vehiculo set capacidad_actual = $total where id_auto = $id_auto");


  		mysqli_close($con);

  }

?>
