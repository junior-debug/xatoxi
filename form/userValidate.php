<?php
session_start();
include_once("../services/xclient.php");

$inputEmailPin = $_POST["inputEmailPin"];
$secretPin = $_POST["secretPin"];

$language = '';
if(!isset($_SESSION["language"])){ $language = "en"; }else{ $language = $_SESSION["language"];}

$lead = xclient::authe($language, $inputEmailPin, $secretPin);
$getverificationlevel = xclient::getverificationlevel($language, $lead["id"]);

if ($lead["code"] == "6000") {
    $_SESSION["message5000"] = $lead["message"];
    header('Location: ../msgAlert.php');
} elseif ($lead["code"] == "5000"){
    $_SESSION["message5000"] = $lead["message"];
    header('Location: ../msgAlert.php');
} elseif ($lead["code"] == "0000") {

    $_SESSION["verificationlevel"] = $getverificationlevel["verificationlevel"];
    $_SESSION["id"] = $lead["id"];
    $_SESSION["email"] = $lead["email"];
    $_SESSION["idcountry"] = $lead["idcountry"];
    $_SESSION["countrycode"] = $lead["countrycode"];
    $_SESSION["idparty"] = $lead["idparty"];
    $_SESSION["areacode"] = $lead["areacode"];
    $_SESSION["phonenumber"] = $lead["phonenumber"];
    $_SESSION["ok"] = $lead["message"];

    if($_SESSION["level"] == "0"){
        $_SESSION["level"] = "1";
        $_SESSION["firsTime"] = 'true';
        header('Location: ../index.php');
    }else if($_SESSION["level"] == "1"){
        $_SESSION["level"] = "2";
        header('Location: ../'.$_POST["namePage"].'.php');
    }
}else{
    echo "Notifique al administrador:<br/>";

}


