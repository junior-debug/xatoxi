<?php 
session_start();
include_once("../services/xclient.php");

$imgFirma = $_POST["imgFirma"];

$firma = xclient::upload(
            $_SESSION["language"], 
            $_SESSION["id"], 
            $_SESSION["typeUpload"], 
            $_SESSION["idparty"], 
            /*$name*/ "firma" , 
            $imgFirma
         );

if($firma["code"] == "0000"){
   $_SESSION['typeNum'] = $_SESSION["typeUpload"];
   $_SESSION['messageUpload'] = $firma["message"];
   header('Location: ../msgSuccess.php');
}