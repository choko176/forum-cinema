<?php
echo "Ma view est bien chargée";

echo "<h1>VIEW</h1>";

foreach ($messages_privesListView as $messages_prives){
  echo "<br/>-".$message_prives["name"];
}

 ?>
