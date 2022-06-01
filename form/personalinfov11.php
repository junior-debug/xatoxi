<?php 
session_start();
include_once("../services/xclient.php");

$_SESSION['urlTo'] = 'profile2.php';

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$secondlastname = $_POST['secondlastname'];

$language = '';
if(!isset($_SESSION["language"])){ $language = "en"; }else{ $language = $_SESSION["language"];}

$personalinfov11 = xclient::personalinfov11($language,$_SESSION["id"],$firstname,$middlename,$lastname,$secondlastname);

$getverificationlevel = xclient::getverificationlevel($language, $_SESSION["id"]);
$_SESSION["verificationlevel"] = $getverificationlevel["verificationlevel"];

if ($personalinfov11["code"] == "5000"){
    $_SESSION["message5000PerfilOne"] = $personalinfov11["message"];
    header('Location: ../msgAlert.php');    
}else if($personalinfov11["code"] == "0000"){
    header('Location: ../profile3.php');
}
