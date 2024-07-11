<?php
  class Usuario
  {

    private $conn;
    public $id_usuario;
    public $nombre;
    public $password;
    public $id_tipo_usuario;

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

         public function Insert($u)
         {
           $sql = $this->conn->prepare("INSERT INTO usuario(id_usuario,nombre, password, id_tipo_usuario) values(?,?,?,?)");
           $sql->execute(array($u->id_usuario,$u->nombre, $u->password, $u->id_tipo_usuario));
         }

         public function listar()
         {
            $sql = $this->conn->prepare("SELECT * FROM usuario");
            $sql->execute();
            return $sql->fetchAll(PDO::FETCH_OBJ);
         }

         public function listarID($id)
         {
            $sql = $this->conn->prepare("SELECT * FROM usuario join tipo_usuario using(id_tipo_usuario) join conductor on id_usuario = id_conductor where id_usuario =?");
            $sql->execute($id);
            return $sql->fetch(PDO::FETCH_OBJ);
         }

         public function listarNombreA($nombre)
         {
            $sql = $this->conn->prepare("SELECT * FROM usuario u left join tipo_usuario using(id_tipo_usuario) where nombre =?");
            $sql->execute(array($nombre));
            return $sql->fetch(PDO::FETCH_OBJ);
         }
         public function listarNombre($nombre)
         {
            $sql = $this->conn->prepare("SELECT * FROM usuario u left join tipo_usuario using(id_tipo_usuario) join conductor c on c.id_conductor = u.id_usuario where mail =?");
            $sql->execute(array($nombre));
            return $sql->fetch(PDO::FETCH_OBJ);
         }
         public function cambiarPassword($pass,$id)
         {
           $sql = $this->conn->prepare("UPDATE usuario set password = ? where id_usuario = ?");
           $sql->execute(array($pass,$id));
         }
         public function listarCorreo($correo)
         {
            $sql = $this->conn->prepare("SELECT u.id_usuario id_usuario, u.password password, c.nombre nombre FROM usuario u join conductor c on c.id_conductor = u.id_usuario where u.nombre =?");
            $sql->execute(array($correo));
            return $sql->fetch(PDO::FETCH_OBJ);
         }

         public function BorrarTodo()
         {
           $sql = $this->conn->prepare("DELETE from usuario where id_usuario != 0");
           $sql->execute();
         }

   }
   ?>
