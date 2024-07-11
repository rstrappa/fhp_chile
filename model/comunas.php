<?php

class Comunas
{

  private $conn;
  public $id;
  public $idreg;
  public $nombre;


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
     $sql = $this->conn->prepare("SELECT * from regiones");
     $sql->execute();
     return $sql->fetchAll(PDO::FETCH_OBJ);
   }
}

 ?>
