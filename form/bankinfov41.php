<?php 
session_start();
include_once("../services/xclient.php");

$idbankcountry = $_POST['idbankcountry'];
$bankname = $_POST['bankname'];
$bankaddress = $_POST['bankaddress'];
$bankaccount = $_POST['bankaccount'];
$bankswift = $_POST['bankswift'];
$bankabarouting = $_POST['bankabarouting'];

$bankinfov41 = xclient::bankinfov41($_SESSION["language"], $_SESSION["id"], $idbankcountry, $bankname, $bankaddress, $bankaccount, $bankswift, $bankabarouting);

if ($bankinfov41["code"] == "0000"){
    header('Location: ../bankInfo2.php');
}else{
    //var_dump($bankinfov41);
}