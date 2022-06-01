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
<LINK rel="stylesheet" type="text/css" href="css/services/profile/perfil4.css">
<?php
xpresentationLayer::loaderHeader('userVerification3');
xpresentationLayer::formPerfil3($_SESSION["language"],$_SESSION["id"]);
xpresentationLayer::hexagonsPerfil($_SESSION["language"], $_SESSION["id"]);
xpresentationLayer::endHtml();
?>
<script src="./js/services/profile/addressInfoV21.js"></script>
<script src="./js/utils/language/translator.js"></script>
<script src="./js/utils/language/translations/translateProfile.js"></script>
<script src="./js/ui/profile/profile.js"></script>
<script src="./js/services/profile/profile.js"></script>