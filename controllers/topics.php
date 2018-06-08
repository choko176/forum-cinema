<?php

require_once "models/topics.php";

$topics =new topicsModel();
$topicsListView= $topics->getAll();

require_once "views/topics.php";

?>
