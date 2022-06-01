<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
include_once("utilities.php");
xpresentationLayer::startHtml($_SESSION["language"]);
utilities::trueUser();
utilities::inactivity();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::loaderScreen();
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/wallet/otcbuylist.css"> 
<?php
xpresentationLayer::loaderHeader("otcExchange");
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonsOTCBuyersList();
xpresentationLayer::formBuyersList($_SESSION["language"], $_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="./js/services/wallet/otcButtons.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateBuyersList.js"></script>
