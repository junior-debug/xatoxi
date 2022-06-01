<?php
session_start();

if(isset($_SESSION["level"])){
   if($_SESSION["level"] == "2"){
      $_SESSION["level"] = "1";
      $_SESSION["firsTime"] = 'false';
      header("Location: ./index.php");
   }
   if($_SESSION["level"] == "1" && $_SESSION["firsTime"] == 'true'){
      $_SESSION["firsTime"] = 'false';
      header("Location: ./index.php");
   }
   if($_SESSION["level"] == "1" && $_SESSION["firsTime"] == 'false'){
      header("Location: ./index.php");
   }
   if($_SESSION["level"] == "0"){
      header("Location: ./index.php");
   }
}
?>