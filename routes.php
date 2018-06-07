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
            $controllerPath = "controllers/".$controller.".php";

            if(file_exists($controllerPath)){
               require_once $controllerPath;
            }
            else{
            require_once "views/error.php";
            }
            }
          
        }

 ?>
