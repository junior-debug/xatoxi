<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
include_once("utilities.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
utilities::verificationLevel();
utilities::trueUser();
utilities::inactivity();
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/fintech/exchange.css">
<?php
xpresentationLayer::loaderHeader('exchangeFiat');
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonscambio();
xpresentationLayer::formcambio($_SESSION["id"],$_SESSION["language"]);
xpresentationLayer::stepsChanger();
xpresentationLayer::endHtml();
?>
<script src="https://unpkg.com/imask"></script>
<script src="./js/ui/fintech/exchange.js"></script>
<script src="./js/services/fintech/exchange.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateExchange.js"></script>