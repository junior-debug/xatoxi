<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
include_once("utilities.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::loaderScreen();
utilities::verificationLevel();
utilities::trueUser();
utilities::inactivity();
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/fintech/buy.css">
<?php
xpresentationLayer::loaderHeader('buyFiat');
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonsCompra();
xpresentationLayer::stepsChanger();
xpresentationLayer::formCompra($_SESSION["language"],$_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateBuy.js"></script>
<script src="./js/ui/fintech/buy.js"></script>
<script src="./js/services/fintech/buy.js"></script>
