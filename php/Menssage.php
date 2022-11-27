<?php

  $BASE_URL = "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"] . "?") . "/";

  class Menssage {

    private $url;

    public function __construct($url) {
      $this -> url = $url;
    }
    
    public function setMessage ($msg, $type, $redirect = "index.php") {

      $_SESSION["msg"] = $msg;
      $_SESSION['type'] = $type;

      if ($redirect != "back") {
        header("location: ./page_home.php");
      } else {
        header("location: ./page_login.php");
      }

    }

    public function getMessage () {

      if(!empty($_SESSION["msg"])) {
        return [
          "msg" => $_SESSION["msg"],
          "type" => $_SESSION["type"]
        ];
      } else {
        return false;
      }

    }
    public function clearMessage () {
      $_SESSION["msg"] = "";
      $_SESSION['type'] = "";
    }
      
  }

 
 