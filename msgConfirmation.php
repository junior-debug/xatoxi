<?php
error_reporting (0);
include_once("xpresentationlayer.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/components/msgConfirmation.css">
<?php
xpresentationLayer::hexagonsmessage4();
xpresentationLayer::loaderHeader('msgConfirmation');
xpresentationLayer::endHtml();
?>