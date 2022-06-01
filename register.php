<?php
include_once('xpresentationlayer.php');
include_once("services/xclient.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
xpresentationLayer::loaderHeader('register');
xpresentationLayer::hexagonsRegister($_SESSION["language"]);
xpresentationLayer::formRegister($_SESSION["language"]);
?>
<script src="./js/services/profile/register.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateRegister.js"></script>
<?php
xpresentationLayer::endHtml();
?>
