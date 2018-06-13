   <h1>Bienvenue<br/> sur le forum du cinema</h1>

<div class="index">

<?php

   if (isset($_SESSION['user'])) {
     echo "<p>Bienvenue ".$_SESSION['user']."</p>";
   }else {

     echo ' <form action="http://localhost/forum-cinema/" method="post">
       <div class="form-group">
       <label for="exampleInputEmail1">Email address</label>
       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
       <small id="emailHelp" class="form-text text-muted">We \'ll never share your email with anyone else.</small>
       </div>
       <div class="form-group">
       <label for="exampleInputPassword1">Password</label>
       <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp">
       <small id="passwordHelpInline" class="text-muted">
      Must be 8-20 characters long.
      </small>
      </div>
      <button type="submit" name="connexion" class="btn btn-primary">Submit</button>
      <button type="button" href="" class="btn btn-danger">inscription</button>
      </form> ';}

    ?>

</div>
