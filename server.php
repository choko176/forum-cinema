<?php

$app = __DIR__;

echo $app."<br />";

require_once "routes.php";

$route = new Route();
$route->getController();

 ?>
