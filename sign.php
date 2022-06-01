<?php
include_once("xpresentationlayer.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/components/sign.css"> 
<?php
xpresentationLayer::loaderHeader('firma');
xpresentationLayer::hexagonsFirma();
xpresentationLayer::endHtml();
?>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateSignUp.js"></script>
<script src="./js/services/profile/signup.js"></script>
<script src="./js/ui/profile/sign.js"></script>