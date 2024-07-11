<?php

class Nacionalidad
{

  private $conn;
  public $gentilicio_nac;
  public $ISO_NAC;
  public $PAIS_NAC;



  public function __CONSTRUCT()
   {
       try
       {
         $this->conn = Database::Conn();
       }
       catch(Exception $e)
       {
         die($e->getMessage());
       }
   }

   public function Listar()
   {
     $sql = $this->conn->prepare("SELECT iso_nac iso, pais_nac pais from nacionalidad;");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
}

 ?>
