<?php 
session_start();
include_once("../services/xclient.php");

$_SESSION['urlTo'] = 'profile4.php';

$fulladdress = $_POST['fulladdress'];
$idstate = $_POST['idstate'];
$idcity = $_POST['idcity'];
$zipcode = $_POST['zipcode'];

$addressinfov21 = xclient::addressinfov21($_SESSION["language"], $_SESSION["id"], $idstate, $idcity, $zipcode, $fulladdress );

$getverificationlevel = xclient::getverificationlevel($_SESSION["language"], $_SESSION["id"]);
$_SESSION["verificationlevel"] = $getverificationlevel["verificationlevel"];

if ($addressinfov21["code"] == "5000"){
    $_SESSION["message5000Perfilthree"] = $addressinfov21["message"];
    header('Location: ../msgAlert.php');    
}else if($addressinfov21["code"] == "0000"){
    header('Location: ../profile5.php');
}
