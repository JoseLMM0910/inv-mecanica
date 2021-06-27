<?php

class Database{
 
  private $connection;

  public function connect(){
      include_once("constants.php");
      $this->connection= new Mysqli(HOST, USER , PASS, DB);
      if($connection){
          return $this->connection;
      }
      return "CONEXIÓN FALLIDA";
  }

}
$db= new Database();
$db->connect();
?>