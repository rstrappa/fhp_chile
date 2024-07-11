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

		    $sql = mysqli_query($con, "SELECT * FROM empresa");

        echo '<option>Seleccione una empresa</option>';
        while ($r = mysqli_fetch_object($sql))
        {
              echo '<option value="'.$r->id_empresa.'">'.$r->nombre_empresa.'</option>';

        }


  		mysqli_close($con);

  }

?>
