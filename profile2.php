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
<?php
xpresentationLayer::loaderHeader('userVerification');
xpresentationLayer::firsTimeModule();
xpresentationLayer::hexagonsPerfil($_SESSION["language"], $_SESSION["id"]);
xpresentationLayer::formPerfil1($_SESSION["language"],$_SESSION["id"]);
?>
<script src="./js/ui/profile/profile.js"></script>
<script src="./js/services/profile/personalInfoV11.js"></script>
<script src="./js/services/profile/profile.js"></script>
<?php
xpresentationLayer::endHtml();
?>