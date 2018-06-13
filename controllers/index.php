<?php

if (isset($_POST['connexion'])){
  $user = new users();
  if($user->login($_POST['email'],$_POST['mdp'])){
    $_SESSION();
  }

}

require_once "views/index.php";

 ?>
