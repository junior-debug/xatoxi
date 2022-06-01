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
?>
<LINK rel="stylesheet" type="text/css" href="css/services/wallet/otc.css"> 
<?php
xpresentationLayer::loaderHeader('otc');
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonsOtc();
xpresentationLayer::formOTC($_SESSION["language"],$_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="./js/services/wallet/otc.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateOTC.js"></script>
