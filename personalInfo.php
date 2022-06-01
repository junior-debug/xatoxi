<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
include_once("utilities.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
utilities::trueUser();
utilities::inactivity();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
xpresentationLayer::loaderHeader('personalInfo');
xpresentationLayer::personalInfo($_SESSION["id"], $_SESSION["language"]);
xpresentationLayer::hexagonsPerfil($_SESSION["language"], $_SESSION["id"]);
xpresentationLayer::endHtml();
?>
