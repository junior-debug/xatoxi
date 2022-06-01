<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::loaderScreen();
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/fintech/remittance.css"> 
<script src="https://unpkg.com/imask"></script>
<?php
xpresentationLayer::loaderHeader('remittance');
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonsencomienda();
xpresentationLayer::stepsChanger();
xpresentationLayer::formencomienda($_SESSION["language"], $_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateRemittance.js"></script>
<script src="./js/ui/fintech/remittance.js"></script>
<script src="./js/services/fintech/remittance.js"></script>
