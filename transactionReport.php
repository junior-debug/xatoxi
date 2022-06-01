<?php
include_once("xpresentationlayer.php");
include_once("services/xclient.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::loaderScreen();
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/fintech/transactionReport.css"> 
<?php
xpresentationLayer::loaderHeader('transactionReport');
xpresentationLayer::hexagonsReportedeOperaciones();
xpresentationLayer::windowReportedeOperaciones($_SESSION["language"], $_SESSION["id"]);
xpresentationLayer::endHtml();
?>
