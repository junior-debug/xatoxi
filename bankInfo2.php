<?php
include_once('xpresentationlayer.php');
include_once("services/xclient.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/profile/bankInfo2.css"> 
<?php
xpresentationlayer::loaderHeader('bankInformation2');
xpresentationlayer::hexagonsInfoBancaria();
xpresentationLayer::formInfoBancaria2($_SESSION["language"], $_SESSION["id"],"4");
?>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateBankInfo.js"></script>
<script src="./js/services/profile/bankinfo.js"></script>
<?php
xpresentationLayer::endHtml();
?>