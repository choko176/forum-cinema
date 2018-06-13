<?php

require_once "models/messages.php";

$messages =new messagesModel();
$messagesListView= $messages->getAll();

require_once "views/messages.php";

?>
