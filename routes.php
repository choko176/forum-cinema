<?php

class Route {
        private function formatUrl () {
          if (isset($_SERVER["PATH_INFO"])) {
            $url = $_SERVER["PATH_INFO"];
          }
          else {
            $url = "/";
          }
            $urlTrim = trim($url, "/");
            $urlTab = explode("/", $url);
            // echo $urlTab[1];
            return $urlTab;
        }


        public function getController () {

            $controller = $this->formatUrl()[1];

           require_once "./controllers/users.php";
           require_once "./controllers/topics.php";
           require_once "./controllers/messages.php";
           require_once "./controllers/messages_prives.php";
  
        }
    }

 ?>
