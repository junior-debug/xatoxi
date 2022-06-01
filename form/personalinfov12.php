<?php 
session_start();
include_once("../services/xclient.php");

$_SESSION['urlTo'] = 'profile3.php';

$birthdate = $_POST['birthdate'] == "1900-01-01" ? "" : $_POST['birthdate'];
$idgender = $_POST['idgender'];
$idcivilstate = $_POST['idcivilstate'];
$idoccupation = $_POST['idoccupation'];

$language = '';
if(!isset($_SESSION["language"])){ $language = "en"; }else{ $language = $_SESSION["language"];}

$personalinfov12 = xclient::personalinfov12($language,$_SESSION["id"],$birthdate,$idcivilstate,$idgender,$idoccupation);

$getverificationlevel = xclient::getverificationlevel($language, $_SESSION["id"]);
$_SESSION["verificationlevel"] = $getverificationlevel["verificationlevel"];

if ($personalinfov12["code"] == "5000"){
    $_SESSION["message5000Perfiltwo"] = $personalinfov12["message"];
    header('Location: ../msgAlert.php');
} else if ($personalinfov12["code"] == "0000"){
    header('Location: ../profile4.php');
}