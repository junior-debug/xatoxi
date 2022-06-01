<?php
session_start();
include_once("../services/xclient.php");

$email = $_POST["email"];

function paises(){
    $pais = $_POST["pais"];
    for ($i=0; $i < count($pais); $i++) { 
        return $pais[$i];
    }
}

$prefijo = $_POST["prefijo"];
$movil = $_POST["movil"];

$language = '';
if(!isset($_SESSION["language"])){ $language = "en"; }else{ $language = $_SESSION["language"];}

$lead = xclient::addlead($language, $email, paises(), $movil, $prefijo);
$getverificationlevel = xclient::getverificationlevel($language, $lead["id"]);

if ($lead["code"] == "1000"){
    $_SESSION["message5000"] = $lead["message"];
    $_SESSION['urlTo'] = "register.php";
    header('Location: ../msgAlert.php');
} elseif($lead["code"] == "5000"){
    $_SESSION["message5000"] =  $lead["message"];
    $_SESSION['urlTo'] = "register.php";
    header('Location: ../msgAlert.php');
}elseif ($lead["code"] == "0000") {
    $_SESSION["ok"] = $lead["message"]; 
    $_SESSION["verificationlevel"] = $getverificationlevel["verificationlevel"];
    header('Location: ../msgSuccess.php');
}
