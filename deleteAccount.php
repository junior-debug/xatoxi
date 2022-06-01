<?php
error_reporting (0);
include_once("xpresentationlayer.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/profile/deleteAccount.css"> 
<?php
xpresentationLayer::loaderHeader('accountDelete');
xpresentationLayer::hexagonsmessage5();
xpresentationLayer::endHtml();
?>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateDeleteAccount.js"></script>
<script src="./js/ui/profile/deleteAccount.js"></script>
