<?php
session_start();
include_once("../services/xclient.php");

$correo = $_POST['inputEmailPin1'];
$pin = $_POST['secretPin1'];
$newpin = $_POST['newpin1'];

$language = '';
if(!isset($_SESSION["language"])){ $language = "en"; }else{ $language = $_SESSION["language"];}

$updpine = xclient::updpine($language, $correo, $pin, $newpin);

if ($updpine["code"] == "0000"){
    $_SESSION["message"] = $updpine["message"];
    header('Location: ../msgSuccess.php');
} elseif ($updpine["code"] == "5000"){
    $_SESSION["message5000"] = $updpine["message"];
    header('Location: ../msgAlert.php');
}
