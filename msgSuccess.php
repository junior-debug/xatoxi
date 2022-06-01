<?php
include_once("xpresentationlayer.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/components/msgSuccess.css">
<?php
xpresentationLayer::hexagonsmessage6();
xpresentationLayer::loaderHeader('msgSuccess');
xpresentationLayer::endHtml();
?>
<script src="./js/modules/msgsucces.js"></script>