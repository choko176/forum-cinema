<?php


require_once "./models/model.php";

class usersModel extends Model {

  public function getAll(){

  $db=parent::connect();


  $sql= "select * from users";
  $query= $db -> prepare ($sql);
  $query -> execute ();
  $userslist= $query -> fetchAll();
  return $userslist;

}
}


 ?>
