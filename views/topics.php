<?php
echo "Ma view est bien chargée";

echo "<h1>VIEW</h1>";

foreach ($topicsListView as $topics){
  echo "<br/>-".$topics["name"];
}

 ?>
