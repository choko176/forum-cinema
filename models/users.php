<?php

require_once "./models/model.php";

class users extends Model {

  public function getAll() {
    $db = parent::connect();
    $sql = "select * from users";
    $query = $db-> prepare($sql);
    $query-> execute();

    $usersList = $query->fetchAll();

    return $usersList;
  }

    //public function connexion() {

    //$db = parent::connect(); //return $db
    //$db va nous permettres de faire toutes nos requetes sur notre base de donnée
    //$user = $_POST['email'];
    //$add = "SELECT email FROM users WHERE mail = $user";
    //$query = $db->prepare($add);
    //$query->bindValue(':name', $name, PDO::PARAM_STR);
    //$query->execute();
    // return $this->getAll();
           // }

     public function login($email,$mdp){
        $this->db->query('select * from users where email = :email and mdp = :mdp');
        //Bind values
        $this->db->bind('email', $email);
        $this->db->bind('mdp', $mdp);
        $result = $this->db->single();
        //check result
        if($this->db->rowCount()>0){
            $this->setUserData($result);
            return true;
        } else {
            return false;
        }
    }
}

 ?>
