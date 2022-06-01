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
xpresentationLayer::firsTimeModule();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/fintech/receive.css"> 
<?php
xpresentationLayer::hexagonsRecepcion();
xpresentationLayer::loaderHeader('receiveFiat');
xpresentationLayer::stepsChanger();
xpresentationLayer::formRecepcion($_SESSION["language"], $_SESSION["id"],$_SESSION["idcountry"],$_SESSION["countrycode"]);
?>
<script src="https://unpkg.com/imask"></script>
<script src="./js/ui/fintech/receive.js"></script>
<script src="./js/services/fintech/receive.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateReceive.js"></script>
<?php
xpresentationLayer::endHtml();
?>
