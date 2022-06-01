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
<LINK rel="stylesheet" type="text/css" href="css/services/wallet/ptppaymentreceive.css">
<?php
xpresentationLayer::loaderHeader("walletReceive");
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonsPTPPaymentReceive();
xpresentationLayer::formPTPPaymentReceive($_SESSION["language"],$_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="https://unpkg.com/imask"></script>
<script src="./js/utils/inputPtpPayment.js"></script>
<script src="./js/services/wallet/ptppaymentreceive.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translatePtpPaymentReceive.js"></script>