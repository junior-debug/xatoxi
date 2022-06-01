<?php 
session_start();
include_once("../services/xclient.php");

$_SESSION['urlTo'] = 'watchman.php';

$documentidtype = $_POST['documentidtype'];
$documentid = $_POST['documentid'];
$didexpirationdate = $_POST['didexpirationdate'];
// $documentID = $_POST['documento'];
$didemissiondate = $_POST['didemissiondate'];
$didemissionplace = $_POST['didemissionplace'];

if (!$documentID) {
    header('Location: ../watchman.php');
}

$language = '';
if(!isset($_SESSION["language"])){ $language = "en"; }else{ $language = $_SESSION["language"];}

// $name = $_FILES['selectDocument']['name'];
// $document = base64_encode(file_get_contents($_FILES['selectDocument']['tmp_name']));
// xclient::upload($language, $_SESSION["id"], $documentID, $_SESSION["idparty"], $documentid, $document );

$documentinfov31 = xclient::documentinfov31($language, $_SESSION["id"], $documentidtype, $documentid, $didexpirationdate, $didemissiondate, $didemissionplace);

$getverificationlevel = xclient::getverificationlevel($language, $_SESSION["id"]);
$_SESSION["verificationlevel"] = $getverificationlevel["verificationlevel"];

if ($documentinfov31["code"] == "5000"){
    $_SESSION["message5000Perfilfive"] = $documentinfov31["message"];
    header('Location: ../msgAlert.php');    
}else if($documentinfov31["code"] == "0000"){
    header('Location: ../msgSuccess.php');
}
