
<?php
//lista de players.
$players = array(
   'Belen' => 'soasdasd5@hotmail.com',
   'Raul Jose' => 'aaaasswwd180@hotmail.com',
   'Raul Antonio' => 'wqdqw@beagle.com.pe',
   'Bernardita leon' => 'mama@adf.com.co',
   'Bernardita Strappa' => 'manolet@xxx.com',
   'Diego' => 'manolet@xxx.com',
   'Vale' => 'manolet@xxx.com',
   'Fran' => 'manolet@xxx.com',
   'mari' => 'manolet@xxx.com',
   'Gorda' => 'manolet@xxx.com',
   'Eduardo' => 'manolet@xxx.com',
   'Anita' => 'manolet@xxx.com',
   'Enrique' => 'manolet@xxx.com',
   'Flor' => 'manolet@xxx.com',
   'pato' => 'manolet@xxx.com',
   'Cristian' => 'fio@hotmail.com');

$result = array(); //un array con el resultado del sorteo
$players_keys = array_keys($players); //el indice del array no es numerico! U_U

foreach($players as $name => $mail){ //por cada jugador buscamos su amigo secreto
   do{
      $rand = rand(0, (count( $players )-1) ); // sacamos un numero del 0 al numero de participantes.
      $result[$name] = $players_keys[$rand]; // y colocamos el resultado.
   }while(!$players_keys[$rand] || ( $name == $players_keys[$rand] )); //pero si ese amigo ya fue elejido, o es el mismo concursante volvemos a hacer la pirueta

   unset($players_keys[$rand]); // y botamos al concursante elejido.
}

foreach ($result as $key => $value){
   echo "A <b>$key</b> le toca <b>$value</b><br/>";
}


$dia = Date(d);
$mes = Date(m);
$anio = Date(Y);

echo $fecha_solicitud = $anio."/".$mes."/".$dia;
?>
