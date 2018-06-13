<?php

require_once "models/messages_prives.php";

$messages_prives =new messages_privesModel();
$messages_privesListView= $messages_prives->getAll();

require_once "views/messages_prives.php";

?>
