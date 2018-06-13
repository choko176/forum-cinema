<?php
echo "Ma view est bien chargée";

echo "<h1>VIEW</h1>";

foreach ($messagesListView as $messages){
  echo "<br/>-".$messages["name"];
}

 ?>
