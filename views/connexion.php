<?php

// Utilisation et démarrage des sessions
session_start();

// Ne pas oublier d'inclure la librairie Form
//include CHEMIN_LIB.'form.php';

// "formulaire_connexion" est l'ID unique du formulaire
$form_connexion = new Form('formulaire_connexion');

$form_connexion->method('POST');

$form_connexion->add('Text', 'nom_utilisateur')
               ->label("Votre nom d'utilisateur");

$form_connexion->add('Password', 'mot_de_passe')
               ->label("Votre mot de passe");

$form_connexion->add('Submit', 'submit')
               ->value("Connectez-moi !");

// Pré-remplissage avec les valeurs précédemment entrées (s'il y en a)
$form_connexion->bound($_POST);

?>

   <h1>Bienvenue<br/> sur le forum du cinema</h1>

<div class="connexion">
   
   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <small id="passwordHelpInline" class="text-muted">
          Must be 8-20 characters long.
    </small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="button" class="btn btn-danger">inscription</button>
</form>
    
</div>
