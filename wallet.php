<?php
include_once("xpresentationlayer.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/wallet/wallet.css"> 
<?php
xpresentationLayer::loaderHeader('wallet2');
xpresentationLayer::hexagonsWallet();
xpresentationLayer::endHtml();
?>