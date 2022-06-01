<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/fintech/transfer.css"> 
<script src="https://unpkg.com/imask"></script>
<?php
xpresentationLayer::loaderHeader('transferFiat');
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonsTransferencia();
xpresentationLayer::formTransferencia($_SESSION["language"], $_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="./js/ui/fintech/transfer.js"></script>
<script src="./js/services/fintech/transfer.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateTransfer.js"></script>