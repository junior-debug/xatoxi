<?php
include_once("xpresentationlayer.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/chat/qchat2.css"> 
<?php
xpresentationLayer::loaderHeader('qchatMsg');
xpresentationLayer::hexagonsQchatMsg();
xpresentationLayer::Sendmsg();
xpresentationLayer::endHtml();
?>
<script src="./js/ui/chat/qchat2.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateQchatMsg.js"></script>