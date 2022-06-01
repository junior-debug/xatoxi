<?php 
session_start();
include_once("../services/xclient.php");

$_SESSION['urlTo'] = 'profile5.php';

$idcountrybirth = $_POST['idcountrybirth'];
$idcountrynationality = $_POST['idcountrynationality'];
$servicioDemostrado = $_POST['servicioDemostrado'];

$name = $_FILES['selectFile']['name'];

if (!$name) {
    header('Location: ../profile6.php');
}

$codigonoseque = "2";
$documentID = xclient::getcompliancedoctypeverifl($_SESSION["language"], $_SESSION["id"], "2");

$document = base64_encode(file_get_contents($_FILES['selectFile']['tmp_name']));
$upload = xclient::upload($_SESSION["language"], $_SESSION["id"], $documentID["list"]["0"]["id"], $_SESSION["idparty"], $name, $document );
$addressinfov22 = xclient::addressinfov22($_SESSION["language"], $_SESSION["id"], $idcountrybirth, $idcountrynationality);

$getverificationlevel = xclient::getverificationlevel($_SESSION["language"], $_SESSION["id"]);
$_SESSION["verificationlevel"] = $getverificationlevel["verificationlevel"];

if ($addressinfov22["code"] == "5000"){
    $_SESSION["message5000Perfilfour"] = $addressinfov22["message"];
    header('Location: ../msgAlert.php');    
}else if($addressinfov22["code"] == "0000"){
    header('Location: ../profile6.php');
}
