<?php 
session_start();
include_once("../services/xclient.php");

$remlead = xclient::remlead($_SESSION["language"], $_SESSION["id"]);

if($remlead["code"] == "0000"){
    header('Location: ../msgSuccess.php');
}