<?php

require_once "./models/model.php";

class messagesPV extends Model {

  public function getAll() {
    $db = parent::connect();
    $sql = "select * from messages_prives";
    $query = $db-> prepare($sql);
    $query-> execute();

    $messagesPvList = $query->fetchAll();
    // ['name' => 'acheter tomates', 'name' => 'passer l'aspirateur'];

    return $messagesPvList;
  }
}

 ?>
