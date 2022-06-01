<?php
error_reporting (0);
include_once("xpresentationlayer.php");
xpresentationLayer::startHtml($_SESSION["language"]);
xpresentationLayer::buildHead("Xatoxi");
xpresentationLayer::loaderScreen();
xpresentationLayer::starTagPhone();
?>
<LINK rel="stylesheet" type="text/css" href="css/services/profile/resetpin.css"> 
<?php
xpresentationLayer::loaderHeader('resetpin');
?>
<img src="./img/images/blueArti.png" class="robot_azul">
<img src="./img/images/blueCloudDialogue.png" class="nub_az">

<div class="div_cont">
    <form action="#" method="POST" class="inputForm">
        <input id="correo" type="text" placeholder="Indique su correo" name="correo" class="inputEmail" > 
        <div id="btnReset">
            <p class="handCursor" style="color: white" >SI</p>
        </div>
        <div id="btnCancel">
            <p class="handCursor" style="color: white" >NO</p>
        </div>
    </form>
</div>
<script src="./js/services/profile/resetpin.js"></script>
<?php
xpresentationLayer::hexagonsmessage5();
xpresentationLayer::endHtml();
?>