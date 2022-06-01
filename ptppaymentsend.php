<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
include_once("utilities.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
utilities::trueUser();
utilities::inactivity();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/wallet/ptppaymentsend.css">
<?php
xpresentationLayer::loaderHeader("walletSend");
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonsPTPPaymentSend();
xpresentationLayer::formPTPPaymentSend($_SESSION["language"],$_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="https://unpkg.com/imask"></script>
<script src="./js/utils/inputPtpPayment.js"></script>
<script src="./js/services/wallet/ptppaymentsend.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translatePtpPaymentSend.js"></script>
