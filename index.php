<?php

include_once("xpresentationlayer.php");
include_once("services/xclient.php");
include_once("utilities.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
xpresentationLayer::hexagonsNet();
xpresentationLayer::loaderHeader('index');
xpresentationLayer::endSection();
xpresentationLayer::endMain();
xpresentationLayer::endHtml();
?>
