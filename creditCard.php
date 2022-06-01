<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/profile/creditCard.css">
<?php
xpresentationLayer::loaderHeader('creditCardInformation');
xpresentationLayer::hexagonsInformacionTarjetaCredito();
xpresentationLayer::formInformacionTarjetaCredito($_SESSION["language"],$_SESSION["id"], substr($_SESSION["verificationlevel"],0,1));
xpresentationLayer::endHtml();
?>
<script src="./js/ui/profile/creditCard.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateCreditCardInfo.js"></script>