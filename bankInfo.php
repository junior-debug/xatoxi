<?php
include_once('xpresentationlayer.php');
include_once("services/xclient.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/profile/bankInfo.css">
<?php
xpresentationLayer::loaderHeader('bankInformation');
xpresentationLayer::firsTimeModule();
xpresentationlayer::hexagonsInfoBancaria();
xpresentationLayer::formInfoBancaria($_SESSION["language"], $_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateBankInfo.js"></script>
<script src="./js/services/profile/bankinfo.js"></script>