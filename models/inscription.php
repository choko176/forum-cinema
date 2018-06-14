<?php

require_once "./models/model.php";

class users extends Model {

  public function getAll() {
    $db = parent::connect();
    $sql = "select * from users";
    $query = $db-> prepare($sql);
    $query-> execute();

    $usersList = $query->fetchAll();

    //return $usersList;
  }


     public function login($email,$mdp){
         $db = parent::connect();
        $sql=$db->query('INSERT INTO users('email','mot_de_passe','pseudo') VALUE ('$_POST['email']', '$_POST['password']', '$_POST['pseudo']');
        
    }

 ?>
