<?php 
header("Content-type: application/json; charset=utf-8");
session_start();
include_once("../services/xclient.php");

$input = json_decode(file_get_contents("php://input"), true);

if(isset($input['urlToPTP'])){
   $_SESSION['urlTo'] = $input['urlToPTP'];
}elseif(isset($_POST["urlToPTP"])){
   $_SESSION['urlTo'] = $_POST["urlToPTP"];
}else{
   $_SESSION['urlTo'] = 'otc.php';
}

if(isset($input['docpend'])){
   $_SESSION['docpend'] = $input['docpend'];
   $_SESSION['message7001'] = $input['message'];
   echo json_encode(true);
}

/* Firma es requerida */
if(isset($input['typeUpload'])){
   $_SESSION['typeUpload'] = $input['typeUpload'];
   $response[0] = true;
   echo json_encode($response);
}

if(isset($_FILES['uploadDoc'])){
   $docname = $_FILES['uploadDoc']['name'];
   $document = base64_encode(file_get_contents($_FILES['uploadDoc']['tmp_name']));
   $doctype = $_POST['docNum'];

   $result = xclient::upload($_SESSION["language"], $_SESSION["id"], $doctype, $_SESSION["idparty"], $docname, $document);

   if($result["code"] == "0000"){
      $_SESSION['typeNum'] = $_POST['docNum'];
      $_SESSION['messageUpload'] = $result["message"];
      header('Location: ../msgSuccess.php');
   }
}

if(isset($input["endTrx"])){
   if($input["endTrx"] == "finalWallet"){
      $_SESSION['urlTo'] = 'walletsmgr.php';
   }elseif($input["endTrx"] == "finalWallet"){
      $_SESSION['urlTo'] = 'buy.php';
   }else{
      $response[0] = true;
      $_SESSION['otpCode'] = $input['otpCode'];
      echo json_encode($response);
   }
}

if(isset($_POST['endTrx'])){
   $response[0] = true;
   $_SESSION['otpCode'] = $_POST['otpCode'];
   echo json_encode($response);
}

if(isset($input["msgError"])){
   $_SESSION['message5000'] = $input["msgError"];
   $response[0] = true;
   echo json_encode($response);
}

if(isset($input['perfil'])){
   $_SESSION['message5000'] = $input["message"];
   $_SESSION['urlTo'] = 'profile2.php';
   $response[0] = true;
   echo json_encode($response);
}

if(isset($input['code'])){
   if($input['code'] == "5000"){
      $_SESSION['message5000'] = $input['message'];
   }
}