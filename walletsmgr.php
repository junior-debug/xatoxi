<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
include_once("utilities.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>

<LINK rel="stylesheet" type="text/css" href="css/services/wallet/walletsmgr.css">
<?php
xpresentationLayer::loaderHeader("wallet");
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonsWalletsMgr();
xpresentationLayer::formWalletMgr($_SESSION["language"],$_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="./js/services/wallet/walletsmgr.js"></script>
<script src="./js/utils/language/translator.js" ></script>
<script src="./js/utils/language/translations/translateWalletsmgr.js"></script>