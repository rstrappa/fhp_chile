<?php
  include ("../model/database.php");
  $usuario = $_REQUEST['usuario'];
  $pass = $_REQUEST['pass'];

  $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($con, 'utf8');
  // Check connection
  	if (!$con) {
  		die("Connection failed: " . mysqli_connect_error());
  	}
  	else
  	{

  		    $sql = mysqli_query($con, "SELECT * FROM usuario left join tipo_usuario using(id_tipo_usuario) where nombre ='$usuario' && password = '$pass'");
          if (mysqli_num_rows($sql) > 0)
          {
            $row = mysqli_fetch_assoc($sql);
          echo "Exito";

          }
          else {
            echo "No exito";
          }

    		mysqli_close($con);
      }

 ?>
