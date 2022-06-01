<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/fintech/prepaidCredictCard.css">
<?php
xpresentationLayer::loaderHeader('debitCard');
xpresentationLayer::hexagonsTarjetadeCredito();
xpresentationLayer::formTarjetadeDebito($_SESSION["language"],$_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translatePrepaidCard.js"></script>
<script src="./js/services/fintech/prepaidCredictCard.js"></script>