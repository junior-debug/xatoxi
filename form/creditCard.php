<?php
session_start();
include_once("../services/xclient.php");

$getparty = xclient::getparty($_SESSION["id"], $_SESSION["language"]);

$ccnumber = "";
if(isset($_POST["ccnumber"])){ $ccnumber = $_POST["ccnumber"]; }

$ccexpyear = "";
if(isset($_POST["ccexpyear"])){ $ccexpyear = $_POST["ccexpyear"]; }

$ccexpmonth = "";
if(isset($_POST["ccexpmonth"])){ $ccexpmonth = $_POST["ccexpmonth"]; }

$cccvc = "";
if(isset($_POST["cccvc"])){ $cccvc = $_POST["cccvc"]; }

$cctype = "";
if(isset($_POST["cctype"])){ $cctype = $_POST["cctype"]; }

$creditcardinfov51 = xclient::creditcardinfov51(
                                               $_SESSION["language"], 
                                                $_SESSION["id"],  
                                                $ccnumber,
                                                $ccexpyear,
                                                $ccexpmonth,
                                                $cccvc,
                                                $cctype
);

if(isset($_FILES['selectFile']['name'])){
    $name = $_FILES['selectFile']['name'];
    $document = base64_encode(file_get_contents($_FILES['selectFile']['tmp_name']));
    $upload = xclient::upload($_SESSION["language"], $_SESSION["id"], $documentID["list"]["0"]["id"], $_SESSION["idparty"], $name, $document );
}

if ($creditcardinfov51["code"] == "0000") {
    header("Location: ../msgSuccess.php");
} else if($creditcardinfov51["code"] == "5000"){
    $_SESSION["message5000"] = $creditcardinfov51["message"];
    header('Location: ../msgAlert.php');   
}

