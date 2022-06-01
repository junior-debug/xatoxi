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
<LINK rel="stylesheet" type="text/css" href="css/services/wallet/otcselllist.css">
<?php
xpresentationLayer::loaderHeader('otcselllist');
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonsOTCSellersList();
xpresentationLayer::formSellersList($_SESSION["language"], $_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="./js/services/wallet/otcButtons.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateSellersList.js"></script>