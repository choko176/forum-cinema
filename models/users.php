<?php

require_once "./models/model.php";

class users extends Model {

  public function getAll() {
    $db = parent::connect();
    $sql = "select * from users";
    $query = $db-> prepare($sql);
    $query-> execute();

    $usersList = $query->fetchAll();
    // ['name' => 'acheter tomates', 'name' => 'passer l'aspirateur'];

    return $usersList;
  }
}

 ?>
