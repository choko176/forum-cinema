<?php

// Pour prototyper mes acces à la base de donnée

class Model {

  private $user = "root";
  private $password = "";
  private $dbname = "forum_cinema";
  private $host = "localhost";
  private $port = 3306;

  public function connect(){
    try {
      $db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
      echo "connection</br >";
      return $db;
    }
    catch (PDOexception $e) {
      echo "erreur";
    }
    echo "Je me connecte à ma base de donnée";
  }
}

 ?>
