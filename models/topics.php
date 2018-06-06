<?php

require_once "./models/model.php";

class topics extends Model {

  public function getAll() {
    $db = parent::connect();
    $sql = "select * from topics";
    $query = $db-> prepare($sql);
    $query-> execute();

    $topicsList = $query->fetchAll();
    // ['name' => 'acheter tomates', 'name' => 'passer l'aspirateur'];

    return $topicsList;
  }
}

 ?>
