<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
include_once("services/coreChat.php");

xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/chat/qchat.css">
<?php
xpresentationLayer::loaderHeader('qchat');
xpresentationLayer::formqchat($_SESSION["language"], $_SESSION["id"]);
xpresentationLayer::qchat();
xpresentationLayer::endHtml();
?>
<script src="./js/ui/chat/qchat.js"></script>
<script src="./js/services/chat/qchat.js"></script>