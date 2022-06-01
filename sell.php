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
<LINK rel="stylesheet" type="text/css" href="css/services/fintech/sell.css">
<script src="https://unpkg.com/imask"></script>
<?php
xpresentationLayer::loaderHeader('sellFiat');
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonsVenta();
xpresentationLayer::stepsChanger();
xpresentationLayer::formventa($_SESSION["language"],$_SESSION["id"],$_SESSION["countrycode"],$_SESSION["idcountry"]);
xpresentationLayer::endHtml();
?>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateSell.js"></script>
<script src="./js/ui/fintech/sell.js"></script>
<script src="./js/services/fintech/sell.js"></script>