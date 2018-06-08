<?php
echo "Ma view est bien chargée";

echo "<h1>VIEW</h1>";

foreach ($usersListView as $users){
  echo "<br/>-".$users["name"];
}

 ?>
