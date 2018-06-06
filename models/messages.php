<?php

require_once "./models/model.php";

class messages extends Model {

  public function getAll() {
    $db = parent::connect();
    $sql = "select * from messages";
    $query = $db-> prepare($sql);
    $query-> execute();

    $messagesList = $query->fetchAll();
    // ['name' => 'acheter tomates', 'name' => 'passer l'aspirateur'];

    return $messagesList;
  }
}

 ?>
