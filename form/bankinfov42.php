<?php 
session_start();
include_once("../services/xclient.php");

$intermidbankcountry = $_POST['intermidbankcountry'];
$intermbankname = $_POST['intermbankname'];
$intermbankaddress = $_POST['intermbankaddress'];
$intermbankaccount = $_POST['intermbankaccount'];
$intermbankswift = $_POST['intermbankswift'];
$idDocument = $_POST['document'];

$bankinfov42 = xclient::bankinfov42($_SESSION["language"],$_SESSION["id"],$intermidbankcountry,$intermbankname,$intermbankaddress,$intermbankaccount,$intermbankswift);

if($FILES){
    $name = $_FILES['selectDocument']['name'];
    $document = base64_encode(file_get_contents($_FILES['selectDocument']['tmp_name']));
    $test = xclient::upload($_SESSION["language"], $_SESSION["id"], $idDocument, $_SESSION["idparty"], $name, $document);
}

if ($bankinfov42["code"] == "5000"){
    $_SESSION["message5000"] = $bankinfov42["message"];
    header('Location: ../msgAlert.php');    
}else if($bankinfov42["code"] == "0000"){
    header('Location: ../msgSuccess.php');
}