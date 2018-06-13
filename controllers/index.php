<?php

<<<<<<< HEAD
if (isset($_POST['connexion'])){
  $user = new users();
  if($user->login($_POST['email'],$_POST['mdp'])){
    $_SESSION();
  }

}
=======
>>>>>>> b7e874d721abc4362e9d574d03d37c0d3a4985ef
require_once "views/index.php";

 ?>
