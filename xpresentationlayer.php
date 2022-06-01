<?php

session_start();

if(!isset($_SESSION["level"])){
    $_SESSION["level"] = "0";
    $_SESSION["firsTime"] = 'false';
}

if(!isset($_SESSION["language"])){ $_SESSION["language"] = "en"; }

?>
<script>
   let firsTime = '<?php if(isset($_SESSION["firsTime"])){ echo $_SESSION["firsTime"]; } ?>';
</script>
<?php

require_once("./hexagon.php");

/*==========================================================================  
     Class: xpresentationLayer
     Description: MVC View. XATOXI Helper Methods
     Version: 1.0
     Remarks:
========================================================================*/
class xpresentationLayer
{

    /*=======================================================================
    Function: startHtml
    Description: HTML TAG START according to language "lang"
    Parameters: $lang <--
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 09:40
    ===================================================================== */
    static function startHtml($lang)
    {
        echo '<!DOCTYPE html>';
        echo '<HTML lang="' . $lang . '">';
    } // startHtml

    /*=======================================================================
    Function: endHtml
    Description: HTML TAG END and add the file .js
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 09:40
    ===================================================================== */
    static function endHtml()
    {
        // Jquery
        echo  '</div>'; /* Close main tag phone */
        echo  '</div>'; 
        echo  ' <SCRIPT src="libs/jquery/jquery.min.js"></SCRIPT>';
        // Popper
        echo  ' <SCRIPT src="libs/bootstrap/js/popper.min.js"></SCRIPT>';
        echo  ' <SCRIPT src="libs/bootstrap/js/bootstrap.min.js"></SCRIPT>';
        // Custom Js
        echo  ' <SCRIPT src="js/main.js" type="module"></SCRIPT>';
        echo  ' </BODY> ';
        echo '</HTML>';
    } // endHtml

    /*=======================================================================
    Function: buildHead
    Description: HTML Head, rendering "title"
    Parameters: $title <-- name of App
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 09:40
    ===================================================================== */

    static function buildHead($title)
    {
        echo  '<HEAD>';
        echo  ' <TITLE>' . $title . '</TITLE> ';
        echo  ' <META charset="UTF-8"> ';
        echo  ' <META name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> ';
        // Bootstrap
        echo  ' <LINK rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.css"> ';
        // Custom css
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/components/style.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/components/buttons.css"> ';
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/components/helpers.css"> ';
        echo  ' <link rel="icon" href="./img/images/xatoxiLogo.png" />';
        echo  ' <script src="js/helpers/index.js" language="javascript" type="text/javascript"></script>';
        ?>
        <script>
            window.addEventListener('DOMContentLoaded', loaderDesactive, false);
        </script>
        <?php
        echo  ' </HEAD> ';
        echo  ' <BODY> ';
    } //buildHead

    /*=======================================================================
    Function: starTagPhone
    Description: HTML DIV tag, rendering "container phone"
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2022/03/23 09:40
    ===================================================================== */
    static function starTagPhone(){
        echo '<div class="containerPhone">';
        echo  ' <DIV class="phone-big" id="phone-big">';
    }

    /*=======================================================================
    Function: buildHeader
    Description: Construye el encabezado de la app xatoxi 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildHeader()
    {
        echo '<HEADER class="header">';
        echo '<DIV class="encabezado df-custom">';
        echo '    <A href="index.php">';
        echo '    <IMG style="max-width: 50px;" src="img/home.png">';
        echo '    </A>';
        echo '    <IMG style="max-width: 80px;" src="img/logox.png">';
        echo '<div class="dropdown">';
        echo '<button id="btnDropdown" class="dropbtn">';
        echo $_SESSION["language"];
        echo '<div id="flechaAbajo"></div>';
        echo '</button>';
        echo '<div id="dropdownLanguages" class="dropdown-content">';
        echo '<button data-lang="'.$_SESSION["language"].'">En</button>';
        echo '<button data-lang="'.$_SESSION["language"].'">Es</button>';
        echo '</div>';
        echo '</div>';
        echo '</DIV>';
        echo '</HEADER>';
    } // buildHeader
    /*=======================================================================
    Function: buildHeader
    Description: Construye el encabezado de la app xatoxi 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildHeaderRegister()
    {
        echo '<HEADER class="header">';
        echo '<DIV class="encabezado encabezado-home">';
        echo '    <A href="login.php" class="invisible" style="width: 10%">';
	    echo '    <IMG  style="display: block;margin-left: auto;margin-right: auto" src="img/logoxatoxi.png">';
        echo '    </A>';
        echo '    <IMG  style="display: block;margin-left: auto;margin-right: auto" src="img/logoxatoxi.png">';
        echo '</DIV>';
        echo '<div class="dropdown">';
        echo '<button id="btnDropdown" class="dropbtn">';
        echo $_SESSION["language"];
        echo '<div id="flechaAbajo"></div>';
        echo '</button>';
        echo '<div id="dropdownLanguages" class="dropdown-content">';
        echo '<button data-lang="'.$_SESSION["language"].'">En</button>';
        echo '<button data-lang="'.$_SESSION["language"].'">Es</button>';
        echo '</div>';
        echo '</div>';
        echo '</HEADER>';
    } // buildHeader

    /*=======================================================================
    Function: buildHeaderIndex
    Description: Construye el encabezado de la app xatoxi 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildHeaderIndex()
    {
        echo '<HEADER class="header">';
        echo '  <DIV class="encabezado df-custom">';
        echo '    <A href="login.php">';
        echo '    <IMG  style="max-width:60px !important;" src="img/logout.png">';
        echo '    </A>';
        echo '  	<IMG  style="max-width:80px; height:auto !important;" src="img/logox.png">';
        echo '<div class="dropdown">';
        echo '<button id="btnDropdown" class="dropbtn">';
        echo $_SESSION["language"];
        echo '<div id="flechaAbajo"></div>';
        echo '</button>';
        echo '<div id="dropdownLanguages" class="dropdown-content">';
        echo '<button data-lang="'.$_SESSION["language"].'">En</button>';
        echo '<button data-lang="'.$_SESSION["language"].'">Es</button>';
        echo '</div>';
        echo '</div>';
        echo '  </DIV>';
        echo '</HEADER>';
    } // buildHeaderIndex

    /*=======================================================================
    Function: startMain
    Description: Empieza tag MAIN 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function startMain($class = "")
    {
        if ($class != "") {
            $class = ' class="wrapper ' . $class . '" ';
        } else {
            $class = ' class="wrapper" ';
        }

        echo '<MAIN ' . $class . '>';
    } // startMain

    /*=======================================================================
    Function: endMain
    Description: Finaliza el tag MAIN
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function endMain()
    {
        echo '</MAIN>';
    } // endMain

    /*=======================================================================
    Function: startFirtsSection
    Description: Start tag SECTION (First Section)
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function startFirtsSection($class = "grid-3 mb20", $id = "")
    {
        echo '<SECTION class="' . $class . '" id="' . $id . '">';
    } //startFirtsSection

    /*=======================================================================
    Function: endSection
    Description: End tag SECTION 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function endSection()
    {
        echo ' </SECTION>';
    } //endSection

    /*=======================================================================
    Function: buildOptionGrid
    Description: Build options in the first section with a limit of 3 and set the $title name
    Parameters: $title <-- Name Option
                $data_id <-- Para relacionar con las opciones de buildOptionsPrincipal
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildOptionGrid($params)
    {
        $defaults = array(
            'id' => '',
            'title' => '',
            'dataId' => '',
            'dataString' => '',
            'class' => '',
        );

        $options = array_merge($defaults, $params);

        if ($options['id']) {
            $options['id'] = 'id="' . $options['id'] . '" ';
        }
        if ($options['dataString']) {
            $options['dataString'] = 'data-string="' . $options['dataString'] . '" ';
        }
        if ($options['dataId']) {
            $options['dataId'] = 'data-id="' . $options['dataId'] . '" ';
        }
        if ($options['class']) {
            $options['class'] = 'class="card card-b js-translate ' . $options['class'] . '" ';
        } else {
            $options['class'] = 'class="card card-b js-translate" ';
        }

        echo '<BUTTON '
            . $options['id']
            . $options['class']
            . $options['dataString']
            . $options['dataId']
            .
            '>';
        echo $options['title'];
        echo '    </BUTTON>';
    } //buildOptionGrid

    /*=======================================================================
    Function: startSectionTwoColumns
    Description: Start Tag SECTION  (SecondSection) with 2 columns
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function startSectionTwoColumns($class = "", $id = "")
    {
        if ($class != "") {
            $class = ' class="' . $class . '" ';
        } else {
            $class = ' class="grid-2" ';
        }

        if ($id != "") {
            $id = ' id="' . $id . '" ';
        } else {
            $id = ' id="mainMenu" ';
        }

        echo '<SECTION ' . $class . $id . ' >';
    } //startSectionTwoColumns

    /*=======================================================================
    Function: startSection
    Description: Start Tag SECTION  (SecondSection) with 2 columns
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function startSection($class = "", $id = "")
    {
        if ($class != "") {
            $class = ' class="' . $class . '" ';
        }

        if ($id != "") {
            $id = ' id="' . $id . '" ';
        }

        echo '<SECTION ' . $class . $id . ' >';
    } //startSection


    /*=======================================================================
    Function: buildInputNumberGrid
    Description: Build Input number with decimals (2 Columns)
    Parameters: $titleLabel <-- Name label
                $idInput <-- Id Input
                $nameInput <-- Name Input
                $placeholder <-- Message Field
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildInputNumberGrid($params)
    {
        $defaults = array(
            'title' => '',
            'id' => '',
            'name' => '',
            'classLabel' => '',
            'placeholder' => '',
            'onblur' => '',
            'class' => '',
            'maxlength' => 35,
            'idContainer' => '',
            'required' => false,
            'value' => '',
            'disabled' => false,
            'classContainer' => '',
            'dataString' => '',
            'inputClass' => '',
        );

        $options = array_merge($defaults, $params);

        if ($options['onblur']) {
            $options['onblur'] = 'onBlur="' . $options['onblur'] . '" ';
        }
        if ($options['dataString']) {
            $options['dataString'] = 'data-string="' . $options['dataString'] . '" ';
        }
        if ($options['value']) {
            $options['value'] = 'value="' . $options['value'] . '" ';
        }
        if ($options['required']) {
            $options['required'] = 'required ';
        }
        if ($options['disabled']) {
            $options['disabled'] = 'disabled ';
        }
        if ($options['id']) {
            $options['id'] = 'id="' . $options['id'] . '" ';
        }
        if ($options['name']) {
            $options['name'] = 'name="' . $options['name'] . '" ';
        }
        if ($options['placeholder']) {
            $options['placeholder'] = 'placeholder="' . $options['placeholder'] . '" ';
        }
        if ($options['idContainer']) {
            $options['idContainer'] = 'id="' . $options['idContainer'] . '" ';
        }
        if ($options['inputClass']) {
            $options['inputClass'] = 'class="' . $options['inputClass'] . '" ';
        }
        if ($options['class']) {
            $options['class'] = 'class="input-field1 ' . $options['class'] . ' ' . $options['classContainer'] . ' " ';
        } else {
            $options['class'] = 'class="input-field1 ' . $options['classContainer'] . '" ';
        }

        $options['maxlength'] = 'maxlength="' . $options['maxlength'] . '" ';

        echo '<DIV ' . $options['class'] . $options['idContainer'] . '>';
        echo '<LABEL class="js-translate ' . $options['classLabel'] . '" ' . $options['dataString'] . '>' . $options['title'] . '</LABEL>';
        echo '<INPUT type="text" onkeypress="return validaNumericos(event)" ' .
            $options['maxlength'] .
            $options['name'] .
            $options['value'] .
            $options['id'] .
            $options['required'] .
            $options['inputClass'] .
            $options['disabled'] .
            $options['placeholder'] .
            $options['onblur'] . '/>';
        echo '</DIV>';
    } //buildInputNumberGrid

    /*=======================================================================
    Function: buildInputsMonthYear
    Description: Build Input number with decimals (2 Columns)
    Parameters: $titleLabel <-- Name label
                $idInput <-- Id Input
                $nameInput <-- Name Input
                $placeholder <-- Message Field
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildInputsMonthYear($titleLabel = "", $nameMonth = "", $nameYear = "", $dataString = "")
    {
        if ($nameMonth != "") {
            $nameMonth = ' name="' . $nameMonth . '" ';
        }
        if ($nameYear != "") {
            $nameYear = ' name="' . $nameYear . '" ';
        }

        echo '<div class="input-field1">';
        echo '<label class="js-translate" data-string="' . $dataString . '">' . $titleLabel . '</label>';
        echo '<div class="container-input">';
        echo '<div class="input-container mr15">';
        echo '<input class="input" ' . $nameMonth . ' onkeypress="return validaNumericos(event)" type="text" maxlength="2" onkeypress="return valideKey(event);" placeholder="Mes" />';
        //echo '<label class="js-translate" data-string="trad_mes">Mes</label>';
        echo '</div>';
        echo '<div class="input-container">';
        echo '<input class="input" ' . $nameYear . ' onkeypress="return validaNumericos(event)" type="text" maxlength="4" onkeypress="return valideKey(event);" placeholder="Año" />';
        //echo '<label class="js-translate" data-string="trad_ano">Año</label>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } //buildInputsMonthYear

    /*=======================================================================
    Function: buildInputTextGrid
    Description: Input text (2 columns)
    Parameters: $titleLabel <-- Label Name
                $idInput <-- Input Id
                $nameInput <-- Input Nme
                $placeholder <-- Name Show Field
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildInputTextGrid($params)
    {
        $defaults = array(
            'title' => '',
            'id' => '',
            'name' => '',
            'placeholder' => '',
            'maxlength' => 35,
            'classContainer' => '',
            'classLabel' => '',
            'disabled' => false,
            'classInput' => '',
            'idContainer' => '',
            'required' => false,
            'value' => '',
            'type' => 'text',
            'dataString' => ''
        );

        $options = array_merge($defaults, $params);

        if ($options['disabled']) {
            $options['disabled'] = 'disabled ';
        }
        if ($options['required']) {
            $options['required'] = 'required ';
        }
        if ($options['name']) {
            $options['name'] = 'name="' . $options['name'] . '" ';
        }
        if ($options['id']) {
            $options['id'] = 'id="' . $options['id'] . '" ';
        }
        if ($options['value']) {
            $options['value'] = 'value="' . $options['value'] . '" ';
        }
        if ($options['idContainer']) {
            $options['idContainer'] = 'id="' . $options['idContainer'] . '" ';
        }
        if ($options['placeholder']) {
            $options['placeholder'] = 'placeholder="' . $options['placeholder'] . '" ';
        }
        if ($options['classInput']) {
            $options['classInput'] = 'class="' . $options['classInput'] . '" ';
        }
        if ($options['dataString']) {
            $options['dataString'] = 'data-string="' . $options['dataString'] . '" ';
        }
        $options['maxlength'] = 'maxlength="' . $options['maxlength'] . '" ';
        $options['type'] = 'type="' . $options['type'] . '" ';

        echo '<DIV class="input-field1 ' . $options['classContainer'] . ' " ' . $options['idContainer'] . '>';
        echo '<LABEL ' . $options['dataString'] . ' class="js-translate ' . $options['classLabel'] . '">' . $options['title'] . '</LABEL>';
        echo '<INPUT '
            . $options['type']
            . $options['value']
            . $options['disabled']
            . $options['name']
            . $options['id']
            . $options['required']
            . $options['placeholder']
            . $options['classInput']
            . $options['maxlength']
            . '>';
        echo '</DIV>';
    } //buildInputTextGrid

    /*=======================================================================
    Function: buildInputTextGrid2
    Description: Input text (2 columns)
    Parameters: $titleLabel <-- Label Name
                $idInput <-- Input Id
                $nameInput <-- Input Nme
                $placeholder <-- Name Show Field
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildInputTextGrid2($titleLabel, $idInput, $nameInput, $placeholder = "", $maxLength = 35, $customClass = "", $classLabel = "", $disabled = "", $classInput = "", $idContainer = "", $required = false, $value = "", $type = "text", $dataString = "")
    {
        if ($disabled != "") {
            $disabled = 'disabled="' . $disabled . '"';
        }
        if ($nameInput != "") {
            $nameInput = 'name="' . $nameInput . '"';
        }

        if ($idInput != "") {
            $idInput = 'id="' . $idInput . '"';
        }
        if ($required) {
            $required = 'required';
        }

        if ($value != "") {
            $value = 'value="' . $value . '"';
        }

        if ($idContainer != "") {
            $idContainer = 'id="' . $idContainer . '"';
        }

        if ($classInput != "") {
            $classInput = 'class="' . $classInput . '"';
        }

        if ($maxLength == "") {
            $maxLength = 35;
        }

        echo '<DIV class="input-field1 ' . $customClass . ' " ' . $idContainer . '>';
        echo '       <LABEL data-string="' . $dataString . '" class="js-translate' . $classLabel . '">' . $titleLabel . '</LABEL>';
        echo '       <INPUT  type="' . $type . '" ' . $value . $disabled . $nameInput . $idInput . $required . ' placeholder="' . $placeholder . '" maxlength="' . $maxLength . '" ' . $classInput . '>';
        echo '</DIV>';
    } //buildInputTextGrid2

    /*=======================================================================
    Function: buildInputTextGridCustom
    Description: Input text (2 columns)
    Parameters: $titleLabel <-- Label Name
                $idInput <-- Input Id
                $nameInput <-- Input Nme
                $placeholder <-- Name Show Field
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildInputTextGridCustom($titleLabel, $idInput, $nameInput, $placeholder = "", $maxLength = 35, $customClass = "", $classLabel = "", $disabled = "", $classInput = "", $textHelp = "")
    {
        if ($disabled != "") {
            $disabled = 'disabled="' . $disabled . '"';
        }

        if ($classInput != "") {
            $classInput = 'class="' . $classInput . '"';
        } else {
            $classInput = 'class="grid-item-no-border"';
        }

        if ($maxLength == "") {
            $maxLength = 35;
        }

        echo '<DIV class="' . $customClass . ' ">';
        echo ' <INPUT ' . $disabled . ' type="text" name="' . $nameInput . '" id="' . $idInput . '" placeholder="' . $placeholder . '" maxlength="' . $maxLength . '" ' . $classInput . '>';
        echo ' <LABEL class="' . $classLabel . '">' . $titleLabel . '</LABEL>';

        if ($textHelp != "") {
            echo '<span class="helper-text" data-error="wrong" data-success="right">' . $textHelp . '</span>';
        }

        echo '</DIV>';
    } //buildInputTextGridCustom
    /*=======================================================================
    Function: buildInputTextGridCustom2
    Description: Input text (2 columns)
    Parameters: $titleLabel <-- Label Name
                $idInput <-- Input Id
                $nameInput <-- Input Nme
                $placeholder <-- Name Show Field
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildInputTextGridCustom2($titleLabel, $idInput, $nameInput, $placeholder = "", $maxLength = 35, $customClass = "", $classLabel = "", $disabled = "", $classInput = "", $textHelp = "")
    {
        if ($disabled != "") {
            $disabled = 'disabled="' . $disabled . '"';
        }

        if ($classInput != "") {
            $classInput = 'class="' . $classInput . '"';
        } else {
            $classInput = 'class="grid-item-no-border"';
        }

        if ($maxLength == "") {
            $maxLength = 35;
        }

        echo '<DIV class="' . $customClass . ' ">';
        echo ' <LABEL class="' . $classLabel . '">' . $titleLabel . '</LABEL>';
        echo ' <INPUT ' . $disabled . ' type="text" name="' . $nameInput . '" id="' . $idInput . '" placeholder="' . $placeholder . '" maxlength="' . $maxLength . '" ' . $classInput . '>';
        if ($textHelp != "") {
            echo '<span class="helper-text" data-error="wrong" data-success="right">' . $textHelp . '</span>';
        }

        echo '</DIV>';
    } //buildInputTextGridCustom2

    /*=======================================================================
    Function: buildSelectJson
    Description: Build Select with Json 
    Parameters: $title <-- Contiene el titulo del objeto		
                $name <-- Contiele el nombre del objeto html
                $id  <-- Contiele el id del objeto html
                $json <-- Contiele los datos en formato json				
                $showCol <-- Valor de la columna a mostrar de la BD
                $event <--
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildSelectJson($params, $json = null)
    {

        $defaults = array(
            'title' => '',
            'id' => '',
            'name' => '',
            'event' => '',
            'classContainer' => '',
            'classLabel' => '',
            'idContainer' => '',
            'required' => false,
            'dataString' => ''
        );

        $options = array_merge($defaults, $params);
        $data = $json->list;

        if ($options['event'] != "") {
            $options['event'] = 'onchange="' . $options['event'] . '"';
        }
        if ($options['id'] != "") {
            $options['id'] = 'id="' . $options['id'] . '"';
        }
        if ($options['idContainer'] != "") {
            $options['idContainer'] = 'id="' . $options['idContainer'] . '"';
        }
        if ($options['required']) {
            $options['required']  = 'required';
        }

        echo '<DIV class="input-field1 ' . $options['classContainer'] . '" ' . $options['idContainer'] . '>';
        echo '    <LABEL class="js-translate ' . $options['classLabel'] . '" data-string="' . $options['dataString'] . '">' . $options['title'] . '</LABEL>';

        echo '<SELECT name="' . $options['name'] . '" ' . $options['id'] . ' ' . $options['event'] . $options['required'] . '>';
        echo '<OPTION disabled selected>Select</OPTION>'; // 20210310 MVO IT WAS SELECCIONE

        foreach ($data as $value) {
            if ($options['name'] === "currency" || $options['name'] === "currencyTransfer" || $options['name'] === "currencyWallet" || $options['name'] === "currencyCommend") {
                echo '<OPTION value="' . $value->id . '">' . $value->iso . ' </OPTION>';
            } else if ($options['id'] === "countryinternationalphonecode") {
                echo '<OPTION value="' . $value->internationalphonecode . '">' . $value->name . ' </OPTION>';
            } else if ($value->code && $value->name) {
                echo '<OPTION value="' . $value->code . '">' . $value->name . ' </OPTION>';
            } else if ($value->code) {
                echo '<OPTION value="' . $value->code . '">' . $value->code . ' </OPTION>';
            } else if ($value->id && $value->name) {
                echo '<OPTION value="' . $value->id . '">' . $value->name . ' </OPTION>';
            } else {
                echo '<OPTION value="' . $value->id . '">' . $value->name . ' </OPTION>';
            }
        }

        echo '</SELECT>';
        echo '</DIV>';
    } //buildSelectJson

    /*=======================================================================
    Function: buildSectionPin
    Description: Construye la tercera seccion con el pin
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 10:12
    ===================================================================== */
    static function buildSectionPin($data = "", $class = "", $otherButton = false)
    {
        if ($data != "")
            $data = ' data-targetping="' . $data . '" ';

        echo '<DIV class="text-center ' . $class . '" >';
        echo '<BUTTON type="submit" class="figure-img ping hidden" ' . $data . '>';
        echo '<IMG src="img/LOCK.png" alt="boton ping" class="img-pin">';
        echo '</BUTTON>';
        if ($otherButton) {
            echo '<A href="#" class="hidden btn btn-primary btn-redirect">';
            echo 'Continuar';
            echo '</A>';
        }
        echo '</DIV>';
    } //buildSectionPin

    /*=======================================================================
    Function: buildFooterXatoxi
    Description: Construye el footer de la aplicacion Xatoxi
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 10:12
    ===================================================================== */
    static function buildFooterXatoxi()
    {
        echo '<FOOTER class="main-footer">';
        echo '    <H4 class="js-translate" data-string="trad_pepin">¿Tienes dudas? <A target="_blank" title="contacta con Pepin" href="mailto:pepin@xatoxi.com">Preguntale a Pepin</A></H4>';
        echo '    <H4>by XATOXI</H4>';
        echo '</FOOTER>';
        echo '</DIV>';
    } //buildFooterXatoxi

    /*=======================================================================
    Function: buildTitleBar
    Description: Build a title bar
    Parameters: $tittle <-- Name Option
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildTitleBar($title, $class = "", $dataString = "")
    {
        echo '<DIV class="section-Titles ' . $class . '">';
        echo '    <H2 class="titles js-translate" data-string="' . $dataString . '">' . $title . '</H2>';
        echo '</DIV>';
    } //buildTitleBar

    /*=======================================================================
    Function: buildSearchUsersWallet
    Description: Build a contact list without option to register a new contact
    Parameters: $name <-- Contiele el nombre del objeto html
                $id  <-- Contiele el id del objeto html
                $json <-- Contiele los datos en formato json				
                $showCol <-- Valor de la columna a mostrar de la BD
                $event <-- 
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildSearchUsersWallet($params, $json = null)
    {

        $defaults = array(
            'id' => '',
            'name' => '',
            'event' => '',
        );

        $options = array_merge($defaults, $params);

        if ($options['id'] != "")
            $options['id'] = ' id="' . $options['id'] . '" ';

        $data = $json->list;
        echo '<DIV class="input-field1 mb15">';
        echo '       <SELECT required name="' . $options['name'] . '" ' . $options['id'] . ' ' . $options['event'] . ' class="">';
        echo '       <OPTION disabled selected>Select</OPTION>';// 20210310 MVO IT WAS SELECCIONE
        foreach ($data as $value) {
            echo '<OPTION value="' . $value->id . '">' . $value->name . ' </OPTION>';
        }
        echo '        </SELECT>';
        // echo '        <BUTTON class="btn-contacts"><figure><img src="img/address-book.png" alt=""></figure></BUTTON>';
        // echo '        <BUTTON class="btn-search"><figure><img src="img/search.png" alt=""></figure></BUTTON>';
        echo '</DIV>';
    } //buildSearchUsersWallet

    /*=======================================================================
    Function: buildSearchUsersCommend
    Description: Build a contact list with option to register a new contact
    Parameters: $name <-- Contiele el nombre del objeto html
                $id  <-- Contiele el id del objeto html
                $json <-- Contiele los datos en formato json				
                $showCol <-- Valor de la columna a mostrar de la BD
                $placeholder <-- Define la mascara o titulo informativo del objeto cuando esta en blanco
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildSearchUsersCommend($params, $json = null)
    {
        $defaults = array(
            'id' => '',
            'idButtom' => '',
            'name' => '',
            'event' => '',
            'eventAddContact' => '',
            'class' => ''
        );

        $options = array_merge($defaults, $params);

        if ($options['eventAddContact'] != "") {
            $options['eventAddContact'] = 'onclick="' . $options['eventAddContact'] . '"';
        }
        $data = $json->list;
        echo '<DIV class="aside input-field1 ' . $options['class'] . '">';
        echo '       <SELECT name="' . $options['name'] . '" id="' . $options['id'] . '" ' . $options['event'] . ' class="select-width-user">';
        echo '       <OPTION disabled selected>Select</OPTION>';// 20210310 MVO IT WAS SELECCIONE
        foreach ($data as $value) {
            echo '<OPTION value="' . $value->id . '" >' . $value->name . ' </OPTION>';
        }
        echo '        </SELECT>';
        echo '    <BUTTON class="btn-contacts " ' . $options['eventAddContact'] . ' id="' . $options['idButtom'] . '">';
        echo '        <FIGURE><IMG src="img/icons/userPlus.png" alt=""></FIGURE>';
        echo '    </BUTTON>';
        echo '</DIV>';
    } //buildSearchUsersCommend

    /*================== =====================================================
    Function: buildMenuOptionGrid
    Description: Build option with title and image dinamyc
    Parameters: $nameImg <-- Image name
                $titleOption <-- Option name    
                $modal <-- Show modal or no.               
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildMenuOptionGrid($nameImg, $titleOption, $modal, $url, $customClass = "", $dataString = "", $id = "")
    {
        $opnModal = "";

        if ($modal == true) {
            $opnModal = "openModal";
        }

        echo '<ARTICLE id="' . $id . '" class="' . $customClass . ' card card-a grid-item ' . $opnModal . '" data-url="' . $url . '">';
        echo '    <ASIDE class="card__aside">';
        echo '        <FIGURE>';
        echo '            <IMG class="card-img" src="img/' . $nameImg . '">';
        echo '        </FIGURE>';
        echo '    </ASIDE>';
        echo '    <HEADER class="card__header">';
        echo '         <H3 class="card__title js-translate" data-string="' . $dataString . '">' . $titleOption . '</H3>';
        echo '    </HEADER>';
        echo '</ARTICLE>';
    } //buildMenuOptionGrid

    /*=======================================================================
    Function: startSectionTwoColumns
    Description: Start Tag ASIDE  (SecondSection) with 1 column
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 14:00
    ===================================================================== */
    static function startAsideOneColumn($class = "")
    {
        if ($class != "") {
            $class = 'class="' . $class . '"';
        } else {
            $class = 'class="grid-1"';
        }
        echo '<ASIDE ' . $class . '>';
    } //startSectionTwoColumns

    /*=======================================================================
    Function: endAside
    Description: end Tag ASIDE 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 14:00
    ===================================================================== */
    static function endAside()
    {
        echo '</ASIDE>';
    } //endAside

    /*=======================================================================
    Function: buildPhoneComplete
    Description: Build section phones witch country phone, area cod and number (Fields Centers)
    Parameters: $titleLabel <- label title
                $nameCountry <- name select country
                $nameArea  <- name select country
                $namePhone <- name phone
                $idCountry <- id select country
                $idArea <- id select country
                $idPhone <- id phone
                $jsonCode <- json for select code country
                $jsonArea <- json for select code area for country
                $event  <- to call a event in the select   
    Algorithm:
    Remarks:
    Standarized: 2021/01/20 12:00
    ===================================================================== */
    static function buildPhoneComplete($params, $jsonCode, $jsonArea)
    {
        $defaults = array(
            'titleLabel' => '',
            'nameCountry' => '',
            'nameArea' => '',
            'namePhone' => '',
            'idCountry' => '',
            'idArea' => '',
            'idPhone' => '',
            'idArea' => '',
            'event' => '',
            'disabled' => '',
            'classContainer' => '',
            'classChildren' => ''
        );

        $options = array_merge($defaults, $params);

        $data = $jsonCode->list;
        $data2 = $jsonArea->list;

        if ($options['event'] != "") {
            $options['event'] = 'onchange="' . $options['event'] . '"';
        }
        if ($options['disabled'] != "") {
            $options['disabled'] = 'disabled="' . $options['disabled'] . '"';
        }
        echo '<DIV class="input-field1 ' . $options['classContainer'] . '">';
        echo '  <LABEL class="js-translate" data-string="trad_telefono_pago_movil">' . $options['titleLabel'] . '</LABEL>';
        echo '  <DIV class="flex-content ' . $options['classChildren'] . '">';
        echo '    <INPUT type="text" name="' . $options['nameCountry'] . '" id="' . $options['idCountry'] . '" class="input-radius" ' . $options['disabled'] . ' pattern="[0-9]+([\.,][0-9]+)?">';
        echo '<SELECT name="' . $options['nameArea'] . '" id="' . $options['idArea'] . '" class="select-width">';
        echo '<OPTION disabled selected>Select</OPTION>';// 20210310 MVO IT WAS SELECCIONE
        foreach ($data2 as $value) {
            echo '<OPTION value="' . $value->code . '" >' . $value->code . ' </OPTION>';
        }
        echo '</SELECT>';

        echo '    <INPUT type="text" name="' . $options['namePhone'] . '" id="' . $options['idPhone'] . '" class="input-radius"  pattern="[0-9]+([\.,][0-9]+)?">';
        echo '  </DIV>';
        echo '</DIV>';
    } //buildPhoneComplete

    /*=======================================================================
    Function: startSectionOpt
    Description: Start section for options 
    Parameters:   
    Algorithm:
    Remarks:
    Standarized: 2021/01/27 10:10
    ===================================================================== */
    static function startSectionOpt($class = "", $id)
    {
        echo '<SECTION class="' . $class . '" id="' . $id . '">';
    } //startSectionOpt

    /*=======================================================================
    Function: startNav
    Description: Start nav
    Parameters:   
    Algorithm:
    Remarks:
    Standarized: 2021/01/27 10:10
    ===================================================================== */
    static function startNav($class = "", $id = "")
    {
        if ($class != "") {
            $class = 'class="' . $class . '"';
        }
        if ($id != "") {
            $id = 'id="' . $id . '"';
        }

        echo '<nav ' . $class . ' ' . $id . '>';
    } //startSectionOpt

    /*=======================================================================
    Function: endNav
    Description: End nav
    Parameters:   
    Algorithm:
    Remarks:
    Standarized: 2021/01/27 10:10
    ===================================================================== */
    static function endNav()
    {
        echo '</nav>';
    } //startSectionOpt

    /*=======================================================================
    Function: buildOptionsPrincipal
    Description: Build principal options of the services
    Parameters: $titleOption <-- Option name  
                $data_id <-- Para relacionar con las opciones de buildOptionGrid    
    Algorithm:
    Remarks:
    Standarized: 2021/01/20 10:00
    ===================================================================== */
    static function buildOptionsPrincipal($titleLabel, $data_id = "", $class = "card card-a", $dataString = "")
    {
        echo '	<ARTICLE class="' . $class . '" data-id="' . $data_id . '">';
        echo '		<H5 class="js-translate" data-string="' . $dataString . '">' . $titleLabel . '</H5>';
        echo '	</ARTICLE>';
    } //buildOptionsPrincipal

    /*=======================================================================
    Function: buildNavBtn
    Description:   
    Algorithm:
    Remarks:
    Standarized: 2021/01/20 10:00
    ===================================================================== */
    static function buildNavBtn($title, $data_id = "")
    {
        if ($data_id != "") {
            $data_id = 'data-id="' . $data_id . '"';
        }

        echo '	<BUTTON class="grid-item-Opc grid-item-2" "' . $data_id . '">';
        echo $title;
        echo '	</BUTTON>';
    } //buildNavBtn

    /*=======================================================================
    Function: startAnimationMenu
    Description: start the section to animation menu
    Parameters:      
    Algorithm:
    Remarks:
    Standarized: 2021/01/27 12:00
    ===================================================================== */
    static function startAnimationMenu()
    {
        echo '<DIV id="wrapper" class="animate animate__fadeOut hidden">';
    } //startAnimationMenu

    /*=======================================================================
    Function: endDiv
    Description: End tag DIV
    Parameters:      
    Algorithm:
    Remarks:
    Standarized: 2021/01/27 12:00
    ===================================================================== */
    static function endDiv()
    {
        echo '</DIV>';
    } //endDiv

    /*=======================================================================
    Function: startSectionButtos
    Description: start the section of buttos in X
    Parameters:      
    Algorithm:
    Remarks:
    Standarized: 2021/01/27 12:00
    ===================================================================== */
    static function startSectionButtos($class = "mb20 grid-3", $id = "wrapperButtons")
    {
        echo '<SECTION class="' . $class . '" id="' . $id . '">';
    } //startSectionButtos

    /*=======================================================================
    Function: startSectionButtos
    Description: start the section of buttos in X
    Parameters:      
    Algorithm:
    Remarks:
    Standarized: 2021/01/27 12:00
    ===================================================================== */
    static function startContentSection()
    {
        echo '<DIV id="wrapperSections">';
    }

    /*=======================================================================
    Function: buildButtonCenter
    Description: start the section of buttos in X
    Parameters: $title <-- Title of button
    Algorithm:
    Remarks:
    Standarized: 2021/01/27 12:00
    ===================================================================== */
    static function buildButtonCenter($title, $event = "", $id = "", $class = "btn", $customClass = "", $dataString = "")
    {
        if ($event != "") {
            $event = 'onclick="' . $event . '"';
        }

        if ($id != "") {
            $id = 'id="' . $id . '"';
        }

        echo '<DIV class="centrarObjets ' . $customClass . '">';
        echo '    <BUTTON type="submit" data-string="' . $dataString . '" class="' . $class . ' js-translate"  ' . $event . ' ' . $id . '>' . $title . '</BUTTON>';
        echo '</DIV>';
    } //buildButtonCenter

    static function startForm($id = "", $event = "", $class = "")
    {
        if ($event != "") {
            $event = 'onsubmit="' . $event . '"';
        }
        if ($class != "") {
            $class = 'class="' . $class . '"';
        }
        if ($id != "") {
            $id = 'id="' . $id . '"';
        }

        echo '<FORM ' . $id . $event . $class . '>';
    }

    /*=======================================================================
    Function: endForm
    Description: end tag form
    Parameters:      
    Algorithm:
    Remarks:
    Standarized: 2021/01/27 12:00
    ===================================================================== */
    static function endForm()
    {
        echo '</FORM>';
    } //endForm

    /*=======================================================================
    Function: startContentofOption
    Description: end tag form
    Parameters:      
    Algorithm:
    Remarks:
    Standarized: 2021/01/27 12:00
    ===================================================================== */
    static function startContentofOption($data_id = "")
    {
        echo '<DIV data-id="' . $data_id . '" class="hidden">';
    } //startContentofOption

    /*=======================================================================
    Function: buildSectionDocument
    Description: build a section with a small select, input text medium and input type date 
    Parameters:     $labelSelect <- label title of select
                    $labelInputText <- label title of intpu text
                    $labelInputDate <- label title of input date
                    $nameSelect <- name of select
                    $nameInputText <- name of intpu text
                    $nameInputDate <- name of intpu text
                    $idSelect <- id of select
                    $idInputText <- id of intpu text
                    $idInputDate <- id of intpu date
                    $jsonSelect <- json for select
    Algorithm:
    Remarks:
    Standarized: 2021/02/2 10:50
    ===================================================================== */
    static function buildSectionDocument($params, $jsonSelect)
    {
        $defaults = array(
            'labelSelect' => '',
            'labelInputText' => '',
            'labelInputDate' => '',
            'nameSelect' => '',
            'nameInputText' => '',
            'nameInputDate' => '',
            'idSelect' => '',
            'idInputText' => '',
            'idInputDate' => '',
            'customClass' => '',
        );

        $options = array_merge($defaults, $params);
        $data = $jsonSelect->list;

        echo '<DIV class="grid-3 ' . $options['customClass'] . '">';
        echo '    <DIV class="input-field1">';
        echo '        <LABEL  class="js-translate required" data-string="trad_t_doc">' . $options['labelSelect'] . '</LABEL>';
        echo '        <SELECT name="' . $options['nameSelect'] . '" id="' . $options['idSelect'] . '">';
        echo '  <OPTION disabled selected>Select</OPTION>';// 20210310 MVO IT WAS SELECCIONE
        foreach ($data as $value) {
            echo '  <OPTION value="' . $value->id . '" >' . $value->name . ' </OPTION>';
        }
        echo '      </SELECT>';
        echo '    </DIV>';
        echo '    <DIV class="input-field1">';
        echo '        <LABEL class="js-translate required" data-string="trad_documento" >' . $options['labelInputText'] . '</LABEL>';
        echo '        <INPUT type="text" name="' . $options['nameInputText'] . '" id="' . $options['idInputText'] . '">';
        echo '    </DIV>';
        echo '    <DIV class="input-field1">';
        echo '        <LABEL class="js-translate required" data-string="trad_fec_nacimiento">' . $options['labelInputDate'] . '</LABEL>';
        echo '        <INPUT type="date" name="' . $options['nameInputDate'] . '"  id="' . $options['idInputDate'] . '">';
        echo '    </DIV>';
        echo '</DIV>';
    } //buildSectionDocument

    /*=======================================================================
    Function: buildTextArea
    Description: end tag form
    Parameters:      
    Algorithm:
    Remarks:
    Standarized: 2021/01/27 12:00
    ===================================================================== */
    static function buildTextArea($params)
    {
        $defaults = array(
            'title' => '',
            'id' => '',
            'name' => '',
            'placeholder' => '',
            'customClass' => '',
            'required' => false,
            'classLabel' => '',
            'maxlength' => 30,
            'dataString' => ''
        );

        $options = array_merge($defaults, $params);

        if ($options['required']) {
            $options['required'] = 'required';
        }
        if ($options['placeholder']) {
            $options['placeholder'] = 'placeholder="' . $options['placeholder'] . '"';
        }
        if ($options['dataString']) {
            $options['dataString'] = 'data-string="' . $options['dataString'] . '"';
        }
        if ($options['name']) {
            $options['name'] = 'name="' . $options['name'] . '"';
        }
        if ($options['id']) {
            $options['id'] = 'id="' . $options['id'] . '"';
        }
        $options['maxlength'] = 'maxlength="' . $options['maxlength'] . '"';

        echo '<DIV class="input-field1 ' . $options['customClass'] . '">';
        echo '    <LABEL class="js-translate ' . $options['classLabel'] . '" ' . $options['dataString'] . '>' . $options['title'] . '</LABEL>';
        echo '    <TEXTAREA type="text" ' . $options['name'] . $options['maxlength'] . $options['id'] . $options['required'] . $options['placeholder'] . ' cols="40" rows="3"  style="resize: none;"></TEXTAREA>';
        echo '</DIV>';
    } //buildTextArea

    /*=======================================================================
    Function: startDivHidden 
    Description: start tag DIV with class hidden
    Parameters:  $id 
    Algorithm:
    Remarks:
    Standarized: 2021/02/20 12:00
    ===================================================================== */
    static function startDivHidden($id, $customClass = "")
    {
        echo '<DIV id =' . $id . ' class="hidden ' . $customClass . '">';
    } //startDivHidden
    /*=======================================================================
	Function: buildInputFileDoc
	Description: Build Input number with decimals (2 Columns)
	Parameters: $titleLabel <-- Name label
				$idInput <-- Id Input
				$nameInput <-- Name Input
				$placeholder <-- Message Field
	Algorithm:
	Remarks:
	Standarized: 2021/01/18 14:00
	===================================================================== */
    static function buildInputFileDoc($params)
    {
        $defaults = array(
            'containerId' => '',
            'containerClass' => '',
            'inputName' => '',
            'inputId' => ''
        );
        $options = array_merge($defaults, $params);

        if ($options['containerClass'] != "") {
            $options['containerClass'] = 'class="input-field1 ' . $options['containerClass'] . '"';
        } else {
            $options['containerClass'] = ' class="input-field1" ';
        }
        if ($options['containerId'] != "") {
            $options['containerId'] = 'id="' . $options['containerId'] . '"';
        }
        if ($options['inputName'] != "") {
            $options['inputName'] = 'name="' . $options['inputName'] . '"';
        }
        if ($options['inputId'] != "") {
            $options['inputId'] = 'id="' . $options['inputId'] . '"';
        }

        echo '<div ' . $options['containerClass'] . $options['containerId'] . '>';
        echo '<input type="file" ' . $options['inputName'] . $options['inputId'] . ' >';
        echo '</div>';
    } //buildInputFileDoc

    /*=======================================================================
	Function: buildInputsDate
	Description: Build Inputs date, month, years
	Parameters: $titleLabel <-- Name label
				$idInput <-- Id Input
				$nameInput <-- Name Input
				$placeholder <-- Message Field
	Algorithm:
	Remarks:
	Standarized: 2021/01/18 14:00
	===================================================================== */
    static function buildInputsDate($nameMonth, $idMonth, $nameYear, $idYear)
    {
        echo '<DIV class="input-field1">';
        echo '	<LABEL class="js-translate" data-string="trad_fecha_venc">Fecha Venc.</LABEL>';
        echo '	<DIV class="container-input">';
        echo '	    <DIV class="mr15">';
        echo '	        <DIV class="input-container">';
        echo '	            <INPUT class="input" type="text" name="' . $nameMonth . '" id="' . $idMonth . '" placeholder=" " maxlength="2" onkeypress="return valideKey(event);"/>';
        echo '	            <LABEL class="placeholder js-translate" data-string="trad_mes">Mes</LABEL>';
        echo '	        </DIV>';
        echo '	    </DIV>';
        echo '	    <DIV>';
        echo '	        <DIV class="input-container">';
        echo '	            <INPUT class="input" type="text" name="' . $nameYear . '" id="' . $idYear . '" placeholder=" "  maxlength="4" onkeypress="return valideKey(event);"/>';
        echo '	            <LABEL class="placeholder js-translate" data-string="trad_ano">Año</LABEL>';
        echo '	        </DIV>';
        echo '	    </DIV>';
        echo '	</DIV>';
        echo '</DIV>';
    } //buildInputsDate

    /*=======================================================================
	Function: buildNavPills
	Description:
	Parameters:
	Algorithm:
	Remarks:
	Standarized:
	===================================================================== */
    static function buildNavPills($params)
    {
        $defaults = array(
            'id' => '',
            'classNav' => '',
            'data' => array()
        );

        $options = array_merge($defaults, $params);

        if ($options['classNav']) {
            $options['classNav'] = 'class="nav nav-pills ' . $options['classNav'] . '" ';
        } else {
            $options['classNav'] = 'class="nav nav-pills" ';
        }
        if ($options['id']) {
            $options['id'] = 'id="' . $options['id'] . '" ';
        }
        echo '<ul ' . $options['classNav'] . $options['id'] . ' role="tablist">';

        $defaultsLink = array(
            'classNavItem' => '',
            'classNavLink' => '',
            'textContent' => '',
            'dataString' => '',
            'id' => '',
            'href' => ''
        );
        foreach ($options['data'] as $value) {
            $optionsLink = array_merge($defaultsLink, $value);

            if ($optionsLink['classNavItem']) {
                $optionsLink['classNavItem'] = 'class="' . $optionsLink['classNavItem'] . '" ';
            }

            if ($optionsLink['classNavLink']) {
                $optionsLink['classNavLink'] = 'class="' . $optionsLink['classNavLink'] . '" ';
            }
            if ($optionsLink['href']) {
                $optionsLink['href'] = 'href="#' . $optionsLink['href'] . '" ';
            }
            if ($optionsLink['dataString']) {
                $optionsLink['dataString'] = 'data-string="' . $optionsLink['dataString'] . '" ';
            }
            if ($optionsLink['id']) {
                $optionsLink['id'] = 'id="' . $optionsLink['id'] . '" ';
            }

            echo '<li ' . $optionsLink['classNavItem'] . '>';
            echo '<a ' . $optionsLink['classNavLink'] . $optionsLink['id'] . $optionsLink['href'] . $optionsLink['dataString'] . ' data-toggle="pill">'
                . $optionsLink['textContent'] .
                '</a>';
            echo ' </li>';
            // echo '<li value="' . $value->id . '">' . $value->iso . ' </li>';
        }

        echo '</ul>';
    } //buildNavPills

    /*=======================================================================
	Function: buildTabContent
	Description:
	Parameters:
	Algorithm:
	Remarks:
	Standarized:
	===================================================================== */
    static function buildTabContent($params = array())
    {
        $defaults = array(
            'id' => '',
            'class' => ''
        );

        $options = array_merge($defaults, $params);

        if ($options['id']) {
            $options['id'] = 'id="' . $options['id'] . '" ';
        }

        echo '<div class="tab-content" ' . $options['id'] . '>';
    } //buildTabContent

    /*=======================================================================
	Function: buildTabContentEnd
	Description:
	Parameters:
	Algorithm:
	Remarks:
	Standarized:
	===================================================================== */
    static function buildTabContentEnd()
    {
        echo '</div>';
    } //buildTabContentEnd

    /*=======================================================================
	Function: buildTabPane
	Description:
	Parameters:
	Algorithm:
	Remarks:
	Standarized:
	===================================================================== */
    static function buildTabPane($params)
    {
        $defaults = array(
            'id' => '',
            'class' => ''
        );

        $options = array_merge($defaults, $params);

        if ($options['class']) {
            $options['class'] = 'class="tab-pane ' . $options['class'] . '" ';
        } else {
            $options['class'] = 'class="tab-pane" ';
        }
        if ($options['id']) {
            $options['id'] = 'id="' . $options['id'] . '" ';
        }

        echo '<div ' . $options['class'] . $options['id'] . '>';
    } //buildTabPane

    /*=======================================================================
	Function: buildTabPaneEnd
	Description:
	Parameters:
	Algorithm:
	Remarks:
	Standarized:
	===================================================================== */
    static function buildTabPaneEnd()
    {
        echo '</div>';
    } //buildTabPaneEnd

    /*=======================================================================
	Function: buildDownloadSection
	Description:
	Parameters:
	Algorithm:
	Remarks:
	Standarized:
	===================================================================== */
    static function buildDownloadSection($lang = "en")
    {
        if ($lang == "Es") {
        	echo '<div class="downloadApp">';
        	echo '    <div class="center-height">';
        	echo '        <h4 class="card__title js-translate mb20">Tambien puedes descargar nuestra App en tu plataforma preferida</h4>';
        	echo '        <div class="spc-ard p10p">';
        	echo '            <A href="https://play.google.com/store/apps/details?id=com.grupoitalcambio.ico&hl=es_VE&gl=US"';
        	echo '                class="btn-Download">';
        	echo '                <FIGURE><IMG src="./img/googlestore.png" alt="Google store"></FIGURE>';
        	echo '            </A>';
        	echo '            <A href="https://apps.apple.com/ve/app/xatoxi/id1561289510" class="btn-Download">';
        	echo '                <FIGURE><IMG src="./img/appstore.png" alt="App store"></FIGURE>';
        	echo '            </A>';
        	echo '        </div>';
        	echo '    </div>';
        	echo '</div>';
        }
        if ($lang == "En") {
            echo '<div class="downloadApp">';
            echo '    <div class="center-height">';
            echo '        <h4 class="card__title js-translate mb20">You can download XATOXI from your favorite platform</h4>';
            echo '        <div class="spc-ard p10p">';
            echo '            <A href="https://play.google.com/store/apps/details?id=com.grupoitalcambio.ico&hl=es_VE&gl=US"';
            echo '                class="btn-Download">';
            echo '                <FIGURE><IMG src="./img/androideng.png" alt="Google store"></FIGURE>';
            echo '            </A>';
            echo '            <A href="https://apps.apple.com/ve/app/xatoxi/id1561289510" class="btn-Download">';
            echo '                <FIGURE><IMG src="./img/iphoneeng.png" alt="App store"></FIGURE>';
            echo '            </A>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        }
    } //buildTabPane

    /*=======================================================================
	Function: buildSimpleImput
	Description:
	Parameters:
	Algorithm:
	Remarks:
	Standarized:
	===================================================================== */
    static function buildSimpleImput($params)
    {
        $defaults = array(
            'name' => '',
            'id' => '',
            'class' => '',
            'value' => ''
        );

        $options = array_merge($defaults, $params);

        if ($options['name'] != "") {
            $options['name'] = 'name="' . $options['name'] . '"';
        }
        if ($options['id'] != "") {
            $options['id'] = 'id="' . $options['id'] . '"';
        }
        if ($options['class'] != "") {
            $options['class'] = 'class="' . $options['class'] . '"';
        }
        if ($options['value'] != "") {
            $options['value'] = 'value="' . $options['value'] . '"';
        }

        echo '<INPUT ' . $options['value'] . $options['name'] . $options['id'] . $options['class'] . ' >';
    } //buildTabPane

    /*=======================================================================
    Function: hexagons menu
    Description: hexagon construction for the layers
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 15/10/2021
    ===================================================================== */
    static function hexagonsNet()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);
        
        $colums[0][9] = new hexagon('firstStar','<img src="./img/icons/favoriteIcon.png" id="firstStar" class="rotate">');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[1][9] = new hexagon('secondStar','<img src="./img/icons/favoriteIcon.png" id="secondStar" class="rotate">');
        $colums[1][9] = $colums[1][9]->getHexa();

        $colums[2][9] = new hexagon('thirdStar','<img src="./img/icons/favoriteIcon.png" id="thirdStar" class="rotate">');
        $colums[2][9] = $colums[2][9]->getHexa();

        $colums[3][9] = new hexagon('fourthStar','<img src="./img/icons/favoriteIcon.png" id="fourthStar" class="rotate">');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[4][9] = new hexagon('fifthStar','<img src="./img/icons/favoriteIcon.png" id="fifthStar" class="rotate">');
        $colums[4][9] = $colums[4][9]->getHexa();

        $colums[1][4] = new hexagon('purpleButton','<img src="./img/icons/transactionReportIcon.png" class="rotate inactivePurple reporte handCursor" onclick="setUrl(\'transactionReport\', \'purple\')" onmouseover="switchVisible(\'reporteIcon\')" onmouseout="switchHidden(\'reporteIcon\')">');
        $colums[1][4] = $colums[1][4]->getHexa();

        $colums[1][5] = new hexagon('purpleButton','<img src="./img/icons/transferIcon.png" class="rotate inactivePurple transferencia handCursor" onclick="setUrl(\'transfer\', \'purple\')" onmouseover="switchVisible(\'transferenciaIcon\')" onmouseout="switchHidden(\'transferenciaIcon\')">');
        $colums[1][5] = $colums[1][5]->getHexa();

        $colums[1][6] = new hexagon('purpleButton','<img src="./img/icons/creditCardIcon.png" class="rotate inactivePurple credito handCursor" onmouseover="switchVisible(\'creditoIcon\')" onmouseout="switchHidden(\'creditoIcon\')" onclick="requestcreditcardok(mainLanguage, sesionID)">');
        $colums[1][6] = $colums[1][6]->getHexa();

        $colums[2][3] = new hexagon('blueButton','<img src="./img/icons/bankIcon.png" class="rotate inactiveBlue bank" onmouseover="switchVisible(\'bankIcon\')" onmouseout="switchHidden(\'bankIcon\')">');
        $colums[2][3] = $colums[2][3]->getHexa();

        $colums[2][4] = new hexagon('blueButton purpleButton','<img src="./img/icons/card.png" class="rotate inactivePurple debito" onmouseover="switchVisible(\'debitoIcon\')" onmouseout="switchHidden(\'debitoIcon\')"> <img src="./img/icons/wallet1.png" class="rotate inactiveBlue wallet handCursor" onclick="setUrl(\'walletsmgr\', \'blue\')" onmouseover="switchVisible(\'walletIcon\')" onmouseout="switchHidden(\'walletIcon\')">');
        $colums[2][4] = $colums[2][4]->getHexa();

        $colums[2][5] = new hexagon('purpleButton','<img src="./img/icons/exchangeIcon.png" class="rotate inactivePurple cambio handCursor" onclick="setUrl(\'exchange\', \'purple\')" onmouseover="switchVisible(\'cambioIcon\')" onmouseout="switchHidden(\'cambioIcon\')">');
        $colums[2][5] = $colums[2][5]->getHexa();

        $colums[2][7] = new hexagon('yellowButton','<img src="./img/icons/deleteAccount.png" class="rotate inactiveYellow eliminarCuenta handCursor" onclick="setUrl(\'deleteAccount\', \'yellow\')" onmouseover="switchVisible(\'eliminarCuentaIcon\')" onmouseout="switchHidden(\'eliminarCuentaIcon\')">');
        $colums[2][7] = $colums[2][7]->getHexa();

        $colums[3][3] = new hexagon('blueButton','<img src="./img/icons/loupe.png" class="rotate inactiveBlue block handCursor" onclick="setUrl(\'lasttrxlist\', \'blue\')" onmouseover="switchVisible(\'blockIcon\')" onmouseout="switchHidden(\'blockIcon\')">');
        $colums[3][3] = $colums[3][3]->getHexa();

        $colums[3][4] = new hexagon('blueButton purpleButton','<img src="./img/icons/remittanceIcon.png" class="rotate inactivePurple encomienda handCursor" onclick="setUrl(\'remittance\', \'purple\')" onmouseover="switchVisible(\'encomiendaIcon\')" onmouseout="switchHidden(\'encomiendaIcon\')"><img src="./img/icons/whiteX.png" class="rotate inactiveBlue exit width">');
        $colums[3][4] = $colums[3][4]->getHexa();

        $colums[3][5] = new hexagon('blueButton purpleButton','<img src="./img/icons/whiteX.png" class="rotate inactivePurple exitPurple width"><img src="./img/icons/otcIcon.png" class="rotate inactiveBlue otc handCursor" onclick="setUrl(\'otcbuylist\', \'blue\')" onmouseover="switchVisible(\'otcIcon\')" onmouseout="switchHidden(\'otcIcon\')">');
        $colums[3][5] = $colums[3][5]->getHexa();

        $colums[3][6] = new hexagon('purpleButton','<img src="./img/icons/receiveIcon.png" class="rotate inactivePurple recepcion handCursor" onclick="setUrl(\'receive\', \'purple\')" onmouseover="switchVisible(\'recepcionIcon\')" onmouseout="switchHidden(\'recepcionIcon\')">');
        $colums[3][6] = $colums[3][6]->getHexa();

        $colums[3][7] = new hexagon('yellowButton','<img src="./img/icons/cardInfo.png" class="rotate inactiveYellow tarjeta handCursor" onclick="setUrl(\'creditCard\', \'yellow\')" onmouseover="switchVisible(\'tarjetaIcon\')" onmouseout="switchHidden(\'tarjetaIcon\')">');
        $colums[3][7] = $colums[3][7]->getHexa();

        $colums[3][8] = new hexagon('yellowButton','<img src="./img/icons/whiteX.png" class="rotate inactiveYellow exitYellow width">');
        $colums[3][8] = $colums[3][8]->getHexa();

        $colums[4][3] = new hexagon('blueButton','<img src="./img/icons/ptpPaymentSendIcon.png" class="rotate inactiveBlue send handCursor" onclick="setUrl(\'ptppaymentsend\', \'blue\')" onmouseover="switchVisible(\'sendIcon\')" onmouseout="switchHidden(\'sendIcon\')">');
        $colums[4][3] = $colums[4][3]->getHexa();

        $colums[4][4] = new hexagon('blueButton purpleButton','<img src="./img/icons/buy.png" class="rotate inactivePurple compra handCursor" onclick="setUrl(\'buy\', \'purple\')" onmouseover="switchVisible(\'compraIcon\')" onmouseout="switchHidden(\'compraIcon\')"> <img src="./img/icons/ptpPaymentReceiveIcon.png" class="rotate inactiveBlue receive handCursor" onclick="setUrl(\'ptppaymentreceive\', \'blue\')" onmouseover="switchVisible(\'receiveIcon\')" onmouseout="switchHidden(\'receiveIcon\')">');
        $colums[4][4] = $colums[4][4]->getHexa();

        $colums[4][5] = new hexagon('purpleButton','<img src="./img/icons/sellIcon.png" class="rotate inactivePurple venta handCursor" onclick="setUrl(\'sell\', \'purple\')" onmouseover="switchVisible(\'ventaIcon\')" onmouseout="switchHidden(\'ventaIcon\')">');
        $colums[4][5] = $colums[4][5]->getHexa();

        $colums[4][7] = new hexagon('yellowButton','<img src="./img/icons/userVerification.png" class="rotate inactiveYellow verificacion handCursor" onclick="setUrl(\'profile2\', \'yellow\')" onmouseover="switchVisible(\'verificacionIcon\')" onmouseout="switchHidden(\'verificacionIcon\')">');
        $colums[4][7] = $colums[4][7]->getHexa();

        $colums[4][8] = new hexagon('yellowButton','<img src="./img/icons/bankInfo.png" class="rotate inactiveYellow informacion handCursor" onclick="setUrl(\'bankInfo\', \'yellow\')" onmouseover="switchVisible(\'informacionIcon\')" onmouseout="switchHidden(\'informacionIcon\')">');
        $colums[4][8] = $colums[4][8]->getHexa();

        $colums[5][4] = new hexagon('walletButton','<img src="./img/icons/wallet2.png" class="rotate show handCursor" id="buttonpinwallet" onmouseover="switchVisible(\'walletIcon\')" onmouseout="switchHidden(\'walletIcon\')">');
        $colums[5][4] = $colums[5][4]->getHexa();

        $colums[5][5] = new hexagon('fintechhButton','<img src="./img/icons/fintechMenuIcon.png" id="buttonpinfintech" class="rotate show handCursor" onmouseover="switchVisible(\'fintechIcon\')" onmouseout="switchHidden(\'fintechIcon\')">');
        $colums[5][5] = $colums[5][5]->getHexa();

        $colums[5][6] = new hexagon('','<img src="./img/icons/playIcon.png" class="rotate show handCursor" id="buttonpinplay" onmouseover="switchVisible(\'playIcon\')" onmouseout="switchHidden(\'playIcon\')">');
        $colums[5][6] = $colums[5][6]->getHexa();

        $colums[5][7] = new hexagon('','<img src="./img/icons/chat.png" class="rotate show handCursor" id="buttonpinchat" onclick="setUrl(\'qchat\', \'orange\')" onmouseover="switchVisible(\'chatIcon\')" onmouseout="switchHidden(\'chatIcon\')">');
        $colums[5][7] = $colums[5][7]->getHexa();

        $colums[5][8] = new hexagon('perfilButton','<img src="./img/icons/profileIcon.png" class="rotate show handCursor" id="buttonpinprofile" onmouseover="switchVisible(\'profileIcon\')" onmouseout="switchHidden(\'profileIcon\')">');
        $colums[5][8] = $colums[5][8]->getHexa();

        $colums[5][9] = new hexagon('','<a href="http://www.italcambio.com/artichat.html"><img src="./img/icons/mascotIcon.png" class="rotate handCursor" onmouseover="switchVisible(\'artiChat\')" onmouseout="switchHidden(\'artiChat\')"></a>');
        $colums[5][9] = $colums[5][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
        
        echo '     <div class="Swicht">';
        echo '       <div id="flagSpain" class="flagSpain"></div>';
        echo '       <div id="flagEngland" class="flagEngland"></div>';
        echo '     </div>';
        echo '     <div class="container_txt dis">';
        echo '          <p id="descTitleServ01" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt fintechIcon purple dis">';
        echo '          <p id="descTitleServ02" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt playIcon red dis">';
        echo '          <p id="descTitleServ03" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt chatIcon orange dis">';
        echo '          <p id="descTitleServ04" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt profileIcon yellow dis">';
        echo '          <p id="descTitleServ05" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt ventaIcon purple dis">';
        echo '          <p id="descTitleServ06" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt compraIcon purple dis">';
        echo '          <p id="descTitleServ07" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt recepcionIcon purple dis">';
        echo '          <p id="descTitleServ08" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt cambioIcon purple dis">';
        echo '          <p id="descTitleServ09" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt transferenciaIcon purple dis">';
        echo '          <p id="descTitleServ10" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt encomiendaIcon purple dis">';
        echo '          <p id="descTitleServ11" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt debitoIcon purple dis">';
        echo '          <p id="descTitleServ12" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt creditoIcon purple dis">';
        echo '          <p id="descTitleServ13" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt reporteIcon purple dis">';
        echo '          <p id="descTitleServ14" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt sendIcon blue dis">';
        echo '          <p id="descTitleServ15" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt receiveIcon blue dis">';
        echo '          <p id="descTitleServ16" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt otcIcon blue dis">';
        echo '          <p id="descTitleServ17" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt bankIcon blue dis">';
        echo '          <p id="descTitleServ18" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt walletIcon blue dis">';
        echo '          <p id="descTitleServ19" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt verificacionIcon yellow dis">';
        echo '          <p id="descTitleServ20" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt informacionIcon yellow dis">';
        echo '          <p id="descTitleServ21" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt tarjetaIcon yellow dis">';
        echo '          <p id="descTitleServ22" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt eliminarCuentaIcon yellow dis">';
        echo '          <p id="descTitleServ23" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt blockIcon blue dis">';
        echo '          <p id="descTitleServ24" class="text"></p>';
        echo '     </div>';
        echo '     <div class="container_txt artiChat green dis">';
        echo '          <p id="descTitleServ25" class="text">XATOXI</p>';
        echo '     </div>';

    } // hexagons

    /*=======================================================================
    Function: hexagons Perfil
    Description: hexagon construction for the perfil
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 17/10/2021
    ===================================================================== */
    static function hexagonsPerfil($language, $idlead)
    {
        $getphoto = xclient::getphoto($language, $idlead);

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[1][1] = new hexagon('firstStep','<a href="./profile2.php"><img src="./img/icons/personalInfo1.png" class="rotate"></a>');
        $colums[1][1] = $colums[1][1]->getHexa();

        $colums[1][2] = new hexagon('secondStep','<img id="toHexaTwo" src="./img/icons/personalInfo2.png" class="handCursor rotate">');
        $colums[1][2] = $colums[1][2]->getHexa();

        $photo = $getphoto["url"];

        $validateURL = explode('/', $photo);
        if($validateURL[10] == '' || $validateURL[11] == ''){
            $photo = "./img/icons/camera.png";
        }else{
            $lonStr = strlen($photo);
            $urlExt = strtolower(substr($photo, ($lonStr-4), $lonStr));
            if($urlExt != '.png'){
                if($urlExt != '.jpg'){
                    $photo = $photo.'.png';
                }
            }
        }

        $bigHexa = 
            '<div class="picture hexa" click="">
                <div class="onehexa style"><img src="'.$photo.'" class="img1 imageCamera" onerror="showImgIfURLError(this)"></div>
                <div class="twohexa style"><img src="'.$photo.'" class="img2 imageCamera" onerror="showImgIfURLError(this)"></div>
                <div class="threehexa style"><img src="'.$photo.'" class="img3 imageCamera handcursor" id="imgProfile" onerror="showImgIfURLError(this)" onclick="showModal()"></div>
            </div>';
        
        $modalUploadPicture = 
        '<div id="modal" class="modalUpload dis">
            <img id="closeModal" class="closeWindowModal" src="./img/icons/orangeX.png" onclick="closeModal()">
            <div class="containerUpload">
                <p class="text" id="profileImage">Imagen de Perfil</p>
                <label id="labelUpload" for="selectPhoto" class="subir handcursor">
                    <img class="imgModal" src="./img/icons/yellowUpload.png">
                </label>
                <input type="file" name="selectPhoto" id="selectPhoto" style="display:none">
            </div>
        </div>';

        $colums[4][7] = new hexagon('','');
        $colums[4][7] = $colums[4][7]->getHexa();

        $colums[5][1] = new hexagon('third_Step','<img id="toHexaThree" src="./img/icons/personalInfo3.png" class="handCursor rotate">');
        $colums[5][1] = $colums[5][1]->getHexa();

        $colums[5][2] = new hexagon('third_Step','<a href="./personalInfo.php"><img src="./img/icons/profileInfo.png" class="rotate"></a>');
        $colums[5][2] = $colums[5][2]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()" >');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$bigHexa.$modalUploadPicture.$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
    } //hexagons perfil

    /*=======================================================================
    Function: form perfil
    Description: Form for profile two
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 19/10/2021
    ===================================================================== */
    static function formPerfil1($language, $idlead){

        $getparty = xclient::getparty($idlead, $language);

        echo '<form class="pagina page_one" method="POST">';
        echo '   <div class="containerForm">';
        echo '      <div class="containerInput">';
        echo '         <label id="nameLabel" for="name">Primer Nombre *</label>';
        echo '         <input id="name" name="firstname" type="text" maxlength="256" class="options" value="'.$getparty["firstname"].'" onfocus="actionFocus(this, \'2px\', \'profile2\')" onfocusout="actionFocusOut(this, \'16px\', \'profile2\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="segundo_nombreLabel" for="segundo_nombre">Segundo Nombre*</label>';
        echo '          <input id="segundo_nombre" name="middlename" type="text" maxlength="256" class="options" value="'.$getparty["middlename"].'" onfocus="actionFocus(this, \'57px\', \'profile2\')" onfocusout="actionFocusOut(this, \'68px\', \'profile2\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="apellidoLabel" for="apellido">Primer Apellido*</label>';
        echo '         <input id="apellido" name="lastname" type="text" maxlength="256" class="options" value="'.$getparty["lastname"].'" onfocus="actionFocus(this, \'114px\', \'profile2\')" onfocusout="actionFocusOut(this, \'126px\', \'profile2\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="segundo_apellidoLabel" for="segundo_apellido">Segundo Apellido</label>';
        echo '         <input id="segundo_apellido" name="secondlastname" type="text" maxlength="256" class="options" value="'.$getparty["secondlastname"].'" onfocus="actionFocus(this, \'170px\', \'profile2\')" onfocusout="actionFocusOut(this, \'182px\', \'profile2\')">';
        echo '      </div>';
        echo '   </div>';
        echo '         <img src="./img/icons/arrowNext.png" class="handCursor validate" onclick="validateProfile2()">';
        echo '</form>';
        self::artiSendMail('yellow');
    } // formPerfil

    /*=======================================================================
    Function: form perfil
    Description: Form for profile two
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 19/10/2021
    ===================================================================== */
    static function formPerfil2($language, $idlead){
        
        $gender = xclient::getgenderl($language, $idlead);
        $civilstate = xclient::getcivilstatel($language, $idlead);
        $ocupation =   xclient::getoccupationl($language, $idlead);

        echo '<form class="pagina" method="POST">';
        echo '   <div class="containerForm">';
        echo '      <div class="containerInput">';
        echo '         <label id="birthDate0" class="dateBorn">Fecha de nacimiento *</label>';
        echo '         <input id="birthDate" name="birthdate" class="options dateOpcion" type="date">';
        echo '       </div>';
        echo '       <div class="containerInput">';
        echo '          <label id="generoLabel" for="genero"></label>';
        echo '          <select id="genero" name="idgender"  class="options" onfocus="actionFocusSel(this, \'-14px\', \'profile3\', \'select\')" onfocusout="actionFocusOutSel(this, \'2px\', \'profile3\', \'select\')">';
        echo '             <option class="options" value="-1"></option>';
                            for ($i=0; $i < count($gender["list"]); $i++) { 
        echo '             <option id="'.$gender["list"][$i]["id"].'" value="'.$gender["list"][$i]["id"].'" >'.$gender["list"][$i]["name"].'</option>';
                        }
        echo '          </select>';
        echo '       </div>';
        echo '       <div class="containerInput">';
        echo '          <label id="estadoCivilLabel" for="estadoCivil"></label>';
        echo '          <select id="estadoCivil" name="idcivilstate" class="options" onfocus="actionFocusSel(this, \'-14px\', \'profile3\', \'select\')" onfocusout="actionFocusOutSel(this, \'2px\', \'profile3\', \'select\')">';
        echo '             <option class="options" value="-1"></option>';
                            for ($i=0; $i < count($civilstate["list"]); $i++) { 
        echo '             <option id="'.$civilstate["list"][$i]["id"].'" value="'.$civilstate["list"][$i]["id"].'">'.$civilstate["list"][$i]["name"].'</option>';
                        }
        echo '          </select>';
        echo '       </div>';
        echo '       <div class="containerInput">';
        echo '          <label id="ProfesionLabel" for="Profesion"></label>';
        echo '          <select id="Profesion" name="idoccupation" class="options" onfocus="actionFocusSel(this, \'-14px\', \'profile3\', \'select\')" onfocusout="actionFocusOutSel(this, \'2px\', \'profile3\', \'select\')">';
        echo '             <option class="options" value="-1"></option>';
                            for ($i=0; $i < count($ocupation["list"]); $i++) { 
        echo '             <option id="'.$ocupation["list"][$i]["id"].'" value="'.$ocupation["list"][$i]["id"].'">'.$ocupation["list"][$i]["name"].'</option>';
                        }
        echo '          </select>';
        echo '       </div>';

        echo '   </div>';
        echo '      <div class="two style"></div>';
        echo '         <div class="three style">';
        echo '            <img src="./img/icons/arrowNext.png" class="handCursor rotate validate" onclick="validateProfile3()">';
        echo '         </div>';
        echo '   <a href="./profile2.php"><img src="./img/icons/arrowBack.png" class="handCursor back"></a>';
        echo '</form>';
        self::artiSendMail('yellow');
    } // formPerfil

    /*=======================================================================
    Function: form perfil
    Description: Form for profile two
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 19/10/2021
    ===================================================================== */
    static function formPerfil3($language, $idlead){

        $getparty = xclient::getparty($idlead, $language);
        $state = xclient::getcountrystatel($language, $idlead, $getparty["idcountry"]);
        $getstatecityl = xclient::getstatecityl($language, $idlead, $getparty["idstate"]);

        echo '<form style="display=flex;" method="POST">';      
        echo '   <div class="containerForm">';
        echo '      <div class="containerInput">';
        echo '         <label id="DireccionLabel" for="monto">Direccion *</label>';
        echo '         <input type="text" maxlength="256" id="Direccion" name="fulladdress" class="options" value="'.$getparty["address"].'" onfocus="actionFocus(this, \'2px\', \'profile4\')" onfocusout="actionFocusOut(this, \'12px\', \'profile4\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '          <label id="stateLabel" for="state"></label>';
        echo '         <select id="state" name="idstate" class="options" onfocus="actionFocusSel(this, \'56px\', \'profile4\', \'select\')" onfocusout="actionFocusOutSel(this, \'72px\', \'profile4\', \'select\')">';
        echo '            <option value="0" ></option>';
                       for ($i=0; $i < count($state["list"]); $i++) { 
        echo '         <option id="'.$state["list"][$i]["id"].'" value="'.$state["list"][$i]["id"].'">'.$state["list"][$i]["name"].'</option>';
                       }
        echo '         </select>';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '          <label id="cityLabel" for="city"></label>';
        echo '         <select id="city" name="idcity" class="options" onfocus="actionFocusSel(this, \'114px\', \'profile4\', \'select\')" onfocusout="actionFocusOutSel(this, \'126px\', \'profile4\', \'select\')">';
                       if ($getparty["idstate"] != "0") {
                          for ($i=0; $i < count($getstatecityl["list"]); $i++) { 
        echo '               <option id="'.$getstatecityl["list"][$i]["id"].'" value="'.$getstatecityl["list"][$i]["id"].'">'.$getstatecityl["list"][$i]["name"].'</option>';
                            }
                       } else {
        echo '              <option value="0"></option>';
                         }         
        echo '         </select>';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="postalLabel" for="postal">Codigo Postal *</label>';
        echo '         <input id="postal" name="zipcode" type="text" maxlength="256" class="options" value="'.$getparty["zipcode"].'" onfocus="actionFocus(this, \'170px\', \'profile4\')" onfocusout="actionFocusOut(this, \'182px\', \'profile4\')">';
        echo '      </div>';
        echo '   </div>';
        echo '   <img src="./img/icons/arrowNext.png" class="handCursor validate" onclick="validateProfile4()">';
        echo '   <a href="./profile3.php"><img src="./img/icons/arrowBack.png" class="handCursor back"></a>';
        echo '</form>';
        self::artiSendMail('yellow');
      
    } // formPerfil

    /*=======================================================================
    Function: form perfil
    Description: Form for profile two
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 19/10/2021
    ===================================================================== */
    static function formPerfil4($language, $idlead, $idverificationlevel){

        $getparty = xclient::getparty($idlead, $language);
        $country = xclient::getcountryl($language, $idlead);
        $services = xclient::getcompliancedoctypeverifl($language, $idlead, $idverificationlevel);

        $_SESSION["idparty"] = $getparty["idparty"];

        echo '<form class="pagina" method="POST" enctype="multipart/form-data">';
        echo '   <div class="containerForm">';
        echo '      <div class="containerInput">';
        echo '          <label id="paisNacimientoLabel" for="paisNacimiento"></label>';
        echo '         <select id="paisNacimiento" name="idcountrybirth" class="options" onfocus="actionFocusSel(this, \'13px\', \'profile5\', \'select\')" onfocusout="actionFocusOutSel(this, \'28px\', \'profile5\', \'select\')">';
        echo '             <option value="0" ></option>';
                            for ($i=0; $i < count($country["list"]); $i++) { 
        echo '             <option id="'.$country["list"][$i]["id"].'" value="'.$country["list"][$i]["id"].'">'.$country["list"][$i]["name"].'</option>';
                       }
        echo '         </select>';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="nacionalidadLabel" for="nacionalidad"></label>';
        echo '         <select id="nacionalidad" name="idcountrynationality" class="options" onfocus="actionFocusSel(this, \'58px\', \'profile5\', \'select\')" onfocusout="actionFocusOutSel(this, \'62px\', \'profile5\', \'select\')">';
        echo '            <option value="0" ></option>';
                            for ($i=0; $i < count($country["list"]); $i++) { 
        echo '            <option id="'.$country["list"][$i]["id"].'" value="'.$country["list"][$i]["id"].'">'.$country["list"][$i]["name"].'</option>';
                       }
        echo '         </select>';
        echo '      </div>';
        echo '      <div class="containerInputFlex">';
        echo '         <label id="servicioDemostradoLabel" for="servicioDemostrado"></label>';
        echo '         <select id="servicioDemostrado" name="servicioDemostrado" class="options" onfocus="actionFocusSel(this, \'-18px\', \'profile5\', \'select\')" onfocusout="actionFocusOutSel(this, \'3px\', \'profile5\', \'select\')">';
        echo '            <option value="0" ></option>';
                            for ($i=0; $i < count($services["list"]); $i++) { 
        echo '            <option id="'.$services["list"][$i]["id"].'" value="'.$services["list"][$i]["id"].'">'.$services["list"][$i]["name"].'</option>';
                       }   
        echo '         </select>';
        echo '         <label for="uploadDoc" class="subir" id="labelSubir"> ';
        echo '            <img src="./img/icons/yellowUpload.png" class="upload">';
        echo '         </label> ';
        echo '         <input id="docNum" type="hidden" name="docNum" value="">';
        echo '         <input type="file" name="uploadDoc" id="uploadDoc" onchange="cambiar(this)" style="display:none">';
        echo '      </div>';
        echo '   </div>';
        echo '         <div id="info"></div>';
        echo '      <div class="two style"></div>';
        echo '      <div class="three style">';
        echo '         <img src="./img/icons/arrowNext.png" class="handCursor rotate arrowNext" onclick="validateProfile5()">';
        echo '      </div>';
        echo '   <a href="./profile4.php"><img src="./img/icons/arrowBack.png" class="handCursor back"></a>';
        echo '</form>';
        self::artiSendMail('yellow');


    } // formPerfil

    /*=======================================================================
    Function: form perfil
    Description: Form for profile two
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 19/10/2021
    ===================================================================== */
    static function formPerfil5($language, $idlead, $idverificationlevel){

        $getparty = xclient::getparty($idlead, $language);
        $document = xclient::getpartydocumenttypel($language, $idlead);
        $selectDocument = xclient::getcompliancedoctypeverifl($_SESSION["language"], $_SESSION["id"], $idverificationlevel);
        $_SESSION["idparty"] = $getparty["idparty"];
        echo '<form class="pagina" method="POST" enctype="multipart/form-data">';
        echo '   <div class="containerForm">';
        echo '      <div class="containerInput">';
        echo '      <label id="documentTypeLabel" for="documentType"></label>';
        echo '         <select id="documentType" name="documentidtype" class="options" onfocus="actionFocusSel(this, \'1px\', \'profile6\', \'select\')" onfocusout="actionFocusOutSel(this, \'14px\', \'profile6\', \'select\')">';
        echo '            <option value="0" ></option>';
                       for ($i=0; $i < count($document["list"]); $i++) { 
        echo '            <option id="'.$document["list"][$i]["id"].'" value="'.$document["list"][$i]["id"].'">'.$document["list"][$i]["name"].'</option>';
                       }
        echo '         </select>';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="docIdentidadLabel" for="docIdentidad">Documento de identidad *</label>';
        echo '         <input type="text" maxlength="256" id="docIdentidad" value="'.$getparty["diddocumentid"].'" name="documentid" class="options" onfocus="actionFocus(this, \'58px\', \'profile6\')" onfocusout="actionFocusOut(this, \'74px\', \'profile6\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="emissionDateLabel" for="emissionDate" class="dateCaducate"></label>';
        echo '         <input id="emissionDate" name="didemissiondate" type="date" value="'.$getparty["didemissiondate"].'" class="options dateOpcion">';
        echo '         <label id="dateDocumentLabel" class="dateCaducate"></label>';
        echo '         <input id="dateDocument" name="didexpirationdate" type="date" value="'.$getparty["didexpirationdate"].'" class="options dateOpcion">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="issuancePlaceLabel" for="issuancePlace" ></label>';
        echo '         <input type="text" maxlength="256" id="issuancePlace" name="didemissionplace" value="'.$getparty["didemissionplace"].'" class="options" onfocus="actionFocus(this, \'170px\', \'profile6\')" onfocusout="actionFocusOut(this, \'187px\', \'profile6\')">';
        echo '      </div>';
        echo '   </div>';
        echo '      <div class="buttonHexa" >';
        echo '          <img src="./img/icons/ok.png" class="handCursor ok" onclick="validateProfile6()">';
        echo '      </div>';
        echo '      <a href="./profile5.php"><img src="./img/icons/arrowBack.png" class="handCursor back"></a>';
        echo '</form>';

        self::artiSendMail('yellow');

    } // formPerfil

    /*=======================================================================
    Function: form personalInfo
    Description: 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 19/10/2021
    ===================================================================== */
    static function personalInfo($idlead, $language){

        $getparty = xclient::getparty($idlead, $language);

        echo '<div class="pagina page_one">';
        echo '   <label id="aliasLabel" for="alias"></label>';
        echo '   <input id="alias" name="alias" class="h1PersonalInfo" readonly value="'.$getparty["documentid"].'"  onfocus="actionFocus(this, \'10px\', \'personalInfo\')" onfocusout="actionFocusOut(this, \'27px\', \'personalInfo\')">';
        echo '   <label id="telfLabel" for="telf"></label>';
        echo '   <input id="telf" name="telf" class="h1PersonalInfo" readonly value="'.$getparty["phonecountrycode"].' '.$getparty["phoneareacode"].' '.$getparty["phonenumber"].'" onfocus="actionFocus(this, \'78px\', \'personalInfo\')" onfocusout="actionFocusOut(this, \'93px\', \'personalInfo\')">';
        echo '   <label id="emailLabel" for="email"></label>';
        echo '   <input id="email" name="email" class="h1PersonalInfo" readonly value="'.$getparty["email"].'" onfocus="actionFocus(this, \'145px\', \'personalInfo\')" onfocusout="actionFocusOut(this, \'162px\', \'personalInfo\')">';
        echo '</div>';
        self::artiSendMail('yellow');
    } // personalInfo

    /*=======================================================================
    Function: modalPin
    Description: build pin popup window
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 22/10/2021
    ===================================================================== */
    static function modalPin()
    {
        echo  ' <LINK rel="stylesheet" type="text/css" href="css/components/modalpin.css"> ';

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(),$hexagon->getHexa(),$hexagon->getHexa(),$hexagon->getHexa());
        $colums = array ($colum, $colum, $colum);
            
        $colums[0][0] = new hexagon('white','<p class="rotate phoneBtn" onclick="phoneBtn(1)">1</p>');
        $colums[0][0] = $colums[0][0]->getHexa();
    
        $colums[0][1] = new hexagon('white','<p class="rotate phoneBtn" onclick="phoneBtn(4)">4</p>');
        $colums[0][1] = $colums[0][1]->getHexa();
    
        $colums[0][2] = new hexagon('white','<p class="rotate phoneBtn" onclick="phoneBtn(7)">7</p>');
        $colums[0][2] = $colums[0][2]->getHexa();
    
        $colums[0][3] = new hexagon('white','<p class="rotate phoneBtn" onclick="phoneBtn(0)">0</p>');
        $colums[0][3] = $colums[0][3]->getHexa();
    
        $colums[1][0] = new hexagon('white','<p class="rotate phoneBtn" onclick="phoneBtn(2)">2</p>');
        $colums[1][0] = $colums[1][0]->getHexa();
    
        $colums[1][1] = new hexagon('white','<p class="rotate phoneBtn" onclick="phoneBtn(5)">5</p>');
        $colums[1][1] = $colums[1][1]->getHexa();
    
        $colums[1][2] = new hexagon('white','<p class="rotate phoneBtn" onclick="phoneBtn(8)">8</p>');
        $colums[1][2] = $colums[1][2]->getHexa();
    
        $colums[2][0] = new hexagon('white','<p class="rotate phoneBtn" onclick="phoneBtn(3)">3</p>');
        $colums[2][0] = $colums[2][0]->getHexa();
    
        $colums[2][2] = new hexagon('white','<p class="rotate phoneBtn" onclick="phoneBtn(9)">9</p>');
        $colums[2][2] = $colums[2][2]->getHexa();
    
        $colums[2][1] = new hexagon('white','<p class="rotate phoneBtn" onclick="phoneBtn(6)">6</p>');
        $colums[2][1] = $colums[2][1]->getHexa();

        $email = '';
        if(isset($_SESSION["email"])){
            $email = $_SESSION["email"];
        }
        ?>
        <script>
            const emailUserPin = '<?php echo $email; ?>';
        </script>
        <?php

        echo '<div id="modal" class="dis">';
        echo '<div  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" class="pin">'
        .'<div class="modal-dialog">'  
        .'	<div class="modal-content">'
        .'	   <div class="modal-header" id="modalheader">'
        .'	      <h3 class="inputpin">PIN</h3>'
        .'	      <img src="./img/icons/whiteX.png" alt="X" style="max-width: 7%; cursor: pointer" id="closeModalPin" onclick="closeModalPin()">'
        .'	   </div>'
        .'	   <div id="formIniciarPin">'
        .'	      <form action="./form/userValidate.php" id="formpin" method="POST">'
        .'	         <div class="modal-body">'
        .'	            <div class="pinSecure">'
        .'                 <input id="inputEmailPin" type="text" maxlength="256" placeholder="Email" name="inputEmailPin" style="text-align: center;" onfocus="inputFocusPin(true);" onfocusout="inputFocusPin(false);">'
        .'                 <input id="secretPin" type="password" readonly="readonly" maxlength="4" name="secretPin" style="outline: none; heigth: 5px; width: 40px; color:black; margin-left: 15px; border: none; background: #0000;">'
        .'                 <input id="namePage" name="namePage" type="hidden">'
        .'			    </div>'
        .'			    <div class="numbers">'
        .'			       <div>'.$colums[0][0].'</br>'.$colums[0][1].'</br>'.$colums[0][2].'</div>'
        .'			       <div>'.$colums[1][0].'</br>'.$colums[1][1].'</br>'.$colums[1][2].'</br>'.$colums[0][3].'</div>'
        .'			       <div>'.$colums[2][0].'</br>'.$colums[2][1].'</br>'.$colums[2][2].'</br>'
        .'                     <img id="deletePin" class="deleteBtn" onclick="clearNumber()">'
        .'			       </div>'
        .'	            </div>'
        .'			    <div class="cambiopin">'
        .'			       <h3 id="cambioPin" id="changeButton" class="btnModalPin" onclick="changeSet()">CAMBIO DE PIN</h3>'
        .'			       <a href="./resetpin.php" style="text-decoration: none">'
        .'			          <h3 id="olvidoPin" class="btnModalPin">OLVIDO DE PIN</h3>'
        .'			       </a>'
        .'			    </div>'
        .'			    <div class="ok">'
        .'		           <button class="hexa" id="okPin" type="submit" style="background-color: transparent; border:none">'
        .'			          <div class="one style btnOK"></div>'
        .'			          <div class="two style btnOK"></div>'
        .'			          <div class="three style btnOK">'
        .'                       <p class="rotate" style="color: white">OK</p>'
        .'			          </div>'
        .'			       </button>'
        .'			       <a href="./register.php" style="text-decoration: none">'
        .'			          <h3 class="btnModalPin" id="registroGenerarPin">REGISTRO / GENERAR PIN</h3>'
        .'			       </a>'
        .'		        </div>'
        .'		     </div>'
        .'        </form>'
        .'     </div>'
        .'	   <div id="formChangePin" class="dis">'
        .'	      <form action="./form/changepin.php" method="POST" id="formSetNewPin">'
        .'		      <div class="modal-body">'
        .'			     <div class="pinSecure">'
        .'				    <input id="inputEmailPin1" type="text" maxlength="256" name="inputEmailPin1" style="text-align: center; border: none;border-bottom: 1px solid black;" placeholder="Email" onfocus="inputFocusPin(true);" onfocusout="inputFocusPin(false);">'
        .'				    <input id="secretPin1" type="password" class="dis" readonly="readonly" maxlength="4" name="secretPin1" placeholder="Pin actual" style="text-align: center; border: none;border-bottom: 1px solid black; margin-top: 4px;">'
        .'				    <input id="newPin" class="dis" type="password" readonly="readonly" maxlength="4" name="newpin1" placeholder="Nuevo pin" style="text-align: center; border: none;border-bottom: 1px solid black;">'
        .'				 </div>'
        .'               <div class="whiteSpace"></div>'
        .'				 <div class="numbers">'
        .'				    <div>'.$colums[0][0].'</br>'.$colums[0][1].'</br>'.$colums[0][2].'</div>'
        .'				    <div>'.$colums[1][0].'</br>'.$colums[1][1].'</br>'.$colums[1][2].'</br>'.$colums[0][3].'</div>'
        .'				    <div>'.$colums[2][0].'</br>'.$colums[2][1].'</br>'.$colums[2][2].'</br>'
        .'                      <img id="deletePin" class="deleteBtn" onclick="clearNumber()">'
        .'					</div>'
        .'				 </div>'
        .'				 <div class="ok">'
        .'			     <div class="hexa" id="okPin1" type="submit" style="border: none">'
        .'				    <div class="one style btnOK"></div>'
        .'				    <div class="two style btnOK"></div>'
        .'				    <div class="three style btnOK">'
        .'				       <p id="okPinActual" class="rotate" onclick="setPinActual()" style="color: white; cursor: pointer">OK</p>'
        .'				       <p id="okPinNew" class="rotate dis" onclick="setNewPin()" style="color: white; cursor: pointer">OK</p>'
        .'					</div>'
        .'				 </div>'
        .'		      </div>'
        .'		    </div>'
        .'		 </form>'
        .'	   </div>'
        .'   </div>'
        .'</div>'
        .'</div>'
        .'</div>';
        echo  '<script src="./js/modules/modalpin.js"></script>';

    } // qchat

    /*=======================================================================
    Function: qchat
    Description: qchat window construction
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 24/10/2021
    ===================================================================== */
    static function qchat(){

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        //$colums[0][9] = new hexagon('','');
        //$colums[0][9] = $colums[0][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
    } // qchat

    /*=======================================================================
    Function: qchat
    Description: construction of qchat
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 23/02/2022
    ===================================================================== */

    static function formqchat($language, $idlead){
        set_error_handler(function ($err_severity, $err_msg, $err_file, $err_line, array $err_context)
        {
            throw new ErrorException( $err_msg, 0, $err_severity, $err_file, $err_line );
        }, E_WARNING);

        $leadslist = xclient::getpartyxl($language, $idlead);
        $chatList = coreChat::getChatListFull($idlead, $language);

        $contactList = array();
        $keyList = array();
        $dataList = array();

        /* 
        blue list 10
        green list 10
        yellow list 10
        orange list 10
        red list 9 
        */
        
        if(!is_null($chatList["list"])){

            $chatList["keys"] = substr($chatList["keys"], -1) == ";" ? substr($chatList["keys"], 0, -1) : $chatList["keys"];
            $keyList = explode(";", $chatList["keys"]);

            $contactList = array_combine($keyList, $chatList["list"]);
            $contactListRev = array_reverse($contactList, true);

            $dataList = array_chunk($contactListRev, 10, true);

            $fullContactRow = false;
            echo '<div id="chatListContainer">';
            foreach($dataList as $keyGroup => $contactgroup){
                $posAxisY = 0;

                foreach($contactgroup as $key => $contact){
                    self::contactChat($keyGroup, $posAxisY, $contact, $key);
                    $posAxisY++;
                }

                if(count($contactgroup) < 10){
                    $fullContactRow = false;  
                    echo self::addContactButton($keyGroup, count($contactgroup));
                }else{
                    $fullContactRow = true;
                }
            }
            if($fullContactRow){
                echo self::addContactButton(count($dataList), 0);
            }
            echo '</div>';
        }else{
            echo '<div id="chatListContainer">';
            echo self::addContactButton(0, 0);
            echo '</div>';
        }

        array_push($keyList, $_SESSION["id"]);

        echo '<div class="hexaHome">
            <div class="one style "></div>
            <div class="two style "></div>
            <div class="three style "><a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a></div>
        </div>';

        echo '  <div id="modalQchat" class="modalQchat dis">';
        echo '      <img id="closeModal" class="closeWindowModal" src="./img/icons/orangeX.png">';
        echo '      <div class="modalContent handCursor" onclick="openAlias()">';
        echo '          <img class="imgModal" src="./img/icons/personAdd.png">';
        echo '          <p class="text" >ALIAS</p>';
        echo '      </div>';
        echo '      <!-- <div class="modalContent handCursor" onclick="openContact()">';
        echo '          <img id="" class="imgModal" src="./img/icons/contact.png">';
        echo '          <p class="text">CONTACTANOS</p>';
        echo '      </div> -->';
        echo '  </div>';
        echo '  <div id="modalChat" class="modalChat dis">';
        echo '      <div class="header">';
        echo '          <p class="textHeader">Agregar Chat</p>';
        echo '          <img class="closeWindowModal" src="./img/icons/whiteX.png" onclick="functionClose()">';
        echo '      </div>';
        echo '      <div class="body">';
        echo '         <select id="contactList" class="selectChat">';
        echo '            <option value="-1" >Buscar Alias</option>';
                            for ($i=0; $i < count($leadslist["list"]); $i++) { 
                                if(!in_array($leadslist["list"][$i]["id"], $keyList)){
        echo '            <option class="options" value="'.$leadslist["list"][$i]["id"].'" >'.$leadslist["list"][$i]["name"].'</option>';
                                }
                            }
        echo '         </select>';
        echo '      </div>';
        echo '      <div class="footer">';
        echo '          <img id="addChatContact" class="okModal" src="./img/icons/lightOrangeOk.png">';
        echo '      </div>';
        echo '  </div>';

        echo '  <div id="modalContact" class="modalChat dis">';
        echo '      <div class="header">';
        echo '          <p class="textHeader">Agregar Chat</p>';
        echo '          <img class="closeWindowModal" src="./img/icons/whiteX.png" onclick="functionClose()">';
        echo '      </div>';
        echo '      <div class="bodySecond">';
        echo '         <p class="txtBody">No Posee contactos registrados en xatoxi</p>';
        echo '      </div>';
        echo '  </div>';

        self::artiSendMail('yellow');

        restore_error_handler();
    } // formQchat

    static function contactChat($posGroup, $pos, $contact, $idContact){
        $idPhoto = 0;
        $idName = 0;
        $columnCSS = '';
        switch($posGroup){
            case '0':
                $idPhoto = 6;
                $idName = 7;
                $colCSSPhoto = 'hexaPhoto';
            break;
            case '1':
                $idPhoto = 4;
                $idName = 5;
                $colCSSPhoto = 'hexaPhoto';
            break;
            case '2':
                $idPhoto = 3;
                $colCSSPhoto = 'hexaName';
            break;
            case '3':
                $idPhoto = 2;
                $colCSSPhoto = 'hexaPhoto';
            break;
            case '4':
                $idPhoto = 1;
                $pos++;
                $colCSSPhoto = 'hexaName';
            break;
        }
        
        $contactURL = '';

        try{
            $urlArray = explode("/", $contact["url"]);
            
            if($urlArray[12] != ''){
                if(!strpos($urlArray[12], ".")){
                    $size = getimagesize($contact["url"]);
                    $image = (strtolower(substr($size['mime'], 0, 5)) == 'image' ? true : false);
                    $contactURL = $image ? $contact["url"] : './img/icons/contactIcon.png';
                }else{
                    $contactURL = $contact["url"];
                }
            }else{
                $contactURL = './img/icons/contactIcon.png';
            }

        }catch(Exception $e){
            $contactURL = './img/icons/contactIcon.png';
        }

        echo "<div class='hexagon hexagon1 hexaColum".$idPhoto." ".$colCSSPhoto."-".$pos."'>
                <div class='hexagon-in1'>
                    <div class='hexagon-in2' data-img='".$contactURL."' onclick='goChatScreen(".$idContact.")'></div>
                </div>
              </div>";

        if($posGroup <= 1){
            echo '<div class="hexaGeneral hexaColum'.$idName.' hexaName-'.$pos.'" onclick="goChatScreen(\''.$idContact.'\')">
                <div class="one style"></div>
                <div class="two style"></div>
                <div class="three style"><span class="textContact rotate handCursor">'.self::showNameContact($contact["firstname"], $contact["lastname"]).'</span></div>
            </div>';
        }

    }
    
    static function showNameContact($firstname, $lastname){
        $name01 = '';
        $name02 = '';
        $name01 = is_null($firstname) ? 'NULL': $firstname;
        $name02 = is_null($lastname) ? 'NULL': $lastname;
        return strtoupper(substr($name01,0,1)).strtoupper(substr($name02,0,1));
    }

    static function addContactButton($posGroup, $pos){
        $col = 0;
        $columnCSS = '';
        switch($posGroup){
            case '0':
                $col = 7;
                $columnCSS = 'hexaName';
            break;
            case '1':
                $col = 5;
                $columnCSS = 'hexaName';
            break;
            case '2':
                $col = 3;
                $columnCSS = 'hexaName';
            break;
            case '3':
                $col = 2;
                $columnCSS = 'hexaPhoto';
            break;
            case '4':
                $col = 1;
                $columnCSS = 'hexaName';
                $pos++;
                if($pos > 9){
                    return '';
                }
            break;
        }
        return '<div class="hexaGeneral hexaColum'.$col.' '.$columnCSS.'-'.$pos.' rotate">
            <div class="one style"></div>
            <div class="two style"></div>
            <div class="three style">
                <img id="plus" class="rotate1 plus" src="./img/icons/whiteX.png" onclick="functionQchat()">
            </div>
        </div>';
    }

    /*=======================================================================
    Function: form register
    Description: construction of registration form
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 25/10/2021
    ===================================================================== */
    static function formRegister($language){

        $country = xclient::getallcountrydetaill($language);

        echo '<form class="formContainera" action="./form/userRegister.php" method="POST">';
        echo '   <div class="pagina" id="sigpag">';    
        echo '      <h1 class="title_register">';
        echo '         <div class="r_dispositivo">';
        echo '            <p id="registerOne" class="register"></p>';
        echo '            <p id="registerTwo" class="register"></p>';
        echo '         </div>';
        echo '      </h1>';
        echo '      <label id="emailLabel" for="email">EMAIL</label>';
        echo '      <input id="email" name="email" type="text" maxlength="256" class="inputForm" onfocus="actionFocus(this, \'60px\', \'register\')" onfocusout="actionFocusOut(this, \'72px\', \'register\'); firstFill();">';
        echo '      <label id="paisLabel" for="pais"></label>';
        echo '      <select name="pais[]" id="pais" class="options" type="text" onfocus="actionFocusSel(this, \'125px\', \'register\', \'select\')" onfocusout="actionFocusOutSel(this, \'138px\', \'register\', \'select\')">';
        echo '         <option value="0" class="select"></option>';
                       for ($i=0; $i < count($country["list"]); $i++) { 
        echo '         <option id="'.$country["list"][$i]["internationalphonecode"].'" value="'.$country["list"][$i]["internationalphonecode"].'">'.$country["list"][$i]["name"].'</option>';
                       }
        echo '      </select>';
                     //echo '<select id="prefijoList" class="options"></select>';
        echo '      <label id="prefijoLabel" for="prefijo">PREFIJO</label>';
        echo '      <input id="prefijo" name="prefijo" type="text" maxlength="256" class="options" onfocus="actionFocus(this, \'190px\', \'register\')" onfocusout="actionFocusOut(this, \'202px\', \'register\')">';
        echo '      <label id="movilLabel" for="movil">MOVIL</label>';
        echo '      <input id="movil" name="movil" type="text" maxlength="256" class="inputForm" onfocus="actionFocus(this, \'256px\', \'transfer\')" onfocusout="actionFocusOut(this, \'269px\', \'transfer\')">';  
        echo '   </div>';
        echo '   <button class="Buttonhexa" type="submit">';
        echo '      <div class="one style ok"></div>';
        echo '      <div class="two style ok"></div>';
        echo '      <div class="three style ok"><p class="okb">Ok</p></div>';
        echo '   </button>';
        echo '</form>'; 
        self::artiSendMail('yellow');
    } // formPerfil

    /*=======================================================================
    Function: hexagons Register
    Description: registration form hexagons
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 25/10/2021
    ===================================================================== */
    static function hexagonsRegister($language){

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./index.php"><img class="rotate" src="./img/icons/arrowBackRegister.png"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<a href="mailto:arti@xatoxi.com"><img src="./img/icons/mascotIcon.png" class="rotate handCursor"></a>');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    } //hexagons register

    /*=======================================================================
    Function: hexagons infobancaria
    Description: hexagons Info Bancaria hexagons
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 26/10/2021
    ===================================================================== */
    static function hexagonsInfoBancaria(){

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img class="rotate" src="./img/icons/home.png"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('',' <img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colums[2][0] = new hexagon('first_step','<p class="I rotate"></p>');
        $colums[2][0] = $colums[2][0]->getHexa();

        $colums[4][0] = new hexagon('second_step','<p class="II rotate"></p>');
        $colums[4][0] = $colums[4][0]->getHexa();

        $colums[2][9] = new hexagon('','');
        $colums[2][9] = $colums[2][9]->getHexa();

        $colums[2][8] = new hexagon('new_color','');
        $colums[2][8] = $colums[2][8]->getHexa();

        $colums[3][9] = new hexagon('new_color','');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[4][8] = new hexagon('new_color','');
        $colums[4][8] = $colums[4][8]->getHexa();

        $colums[4][10] = new hexagon('dis next','');
        $colums[4][10] = $colums[4][10]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].$colums[4][10].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
        
    } // hexagons infobancaria

    /*=======================================================================
    Function: form InfoBancaria
    Description: construction of Info Bancaria form
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 27/10/2021
    ===================================================================== */
    static function formInfoBancaria($language, $idlead){

        $country = xclient::getcountryl($language, $idlead);
        $getparty = xclient::getparty($idlead, $language);

        echo '<form id="formBankOne" class="formContainera" method="POST" action="./form/bankinfov41.php">';
        echo '   <div class="containerForm">';
        echo '      <div class="containerInput">';
        echo '      <label id="bankCountryLabel" for="bankCountry"></label>';
        echo '         <select name="idbankcountry" id="bankCountry" class="options" onfocus="actionFocusSel(this, \'2px\', \'bankInfo\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'bankInfo\', \'select\')"> ';
        echo '            <option value="0" class="select"></option>';
                          for ($i=0; $i < count($country["list"]); $i++) { 
                              $selected = '';
                              if($getparty["idbankcountry"] == $country["list"][$i]["id"]){
                                $selected = 'selected';
                              }
        echo '                <option id="'.$country["list"][$i]["id"].'" value="'.$country["list"][$i]["id"].'" '.$selected.'>'.$country["list"][$i]["name"].'</option>';
                          }
        echo '         </select>';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="bankLabel" for="bank">BANCO</label>';
        echo '         <input type="text" maxlength="256" id="bank" name="bankname" value="'.$getparty['bankname'].'" class="options" onfocus="actionFocus(this, \'62px\', \'bankInfo\')" onfocusout="actionFocusOut(this, \'74px\', \'bankInfo\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="cuentaLabel" for="cuenta">N° CUENTA *</label>';
        echo '         <input type="text" id="cuenta" name="bankaccount" value="'.$getparty['bankaccount'].'" class="options" onkeypress="return valideKey(event);"  onfocus="actionFocus(this, \'122px\', \'bankInfo\')" onfocusout="actionFocusOut(this, \'136px\', \'bankInfo\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="direccionLabel" for="direccion">DIRECCION BANCO*</label>';
        echo '         <input type="text" maxlength="256" id="direccion" name="bankaddress"  value="'.$getparty['bankaddress'].'" class="options" onfocus="actionFocus(this, \'182px\', \'bankInfo\')" onfocusout="actionFocusOut(this, \'195px\', \'bankInfo\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="swiftLabel" for="swift">SWIFT</label>';
        echo '         <input type="text" maxlength="256" id="swift" name="bankswift" value="'.$getparty['bankswift'].'" class="options" onfocus="actionFocus(this, \'244px\', \'bankInfo\')" onfocusout="actionFocusOut(this, \'257px\', \'bankInfo\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="routingLabel" for="routing">ABA / ROUTING</label>';
        echo '         <input type="text" maxlength="256" id="routing" name="bankabarouting" placeholder="" value="'.$getparty['bankabarouting'].'" class="options" onfocus="actionFocus(this, \'304px\', \'bankInfo\')" onfocusout="actionFocusOut(this, \'318px\', \'bankInfo\')">';
        echo '      </div>';
        echo '   </div>';
        echo '   <img src="./img/icons/arrowNext.png" class="next handCursor" onclick="sendStep1()">';
        echo '</form>';
        self::artiSendMail('yellow');
    } // form InfoBancaria  

    /*=======================================================================
    Function: form InfoBancaria
    Description: construction of Info Bancaria form
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 27/10/2021
    ===================================================================== */
    static function formInfoBancaria2($language, $idlead, $idverificationlevel){

        $country = xclient::getcountryl($language, $idlead);
        $getparty = xclient::getparty($idlead, $language);
        $document = xclient::getcompliancedoctypeverifl($language, $idlead, $idverificationlevel);
        
        echo '<form class="formContainera" method="POST" action="./form/bankinfov42.php" enctype="multipart/form-data">';
        echo '   <div class="containerForm">';
        echo '      <div class="containerInput">';
        echo '      <label id="interBankCountryLabel" for="interBankCountry"></label>';
        echo '         <select name="intermidbankcountry" id="interBankCountry" class="options" onfocus="actionFocusSel(this, \'2px\', \'bankInfo2\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'bankInfo2\', \'select\')"> ';
        echo '            <option value="0"></option>';
                          for ($i=0; $i < count($country["list"]); $i++) { 
                            $selected = '';
                            if($getparty["idbankcountry"] == $country["list"][$i]["id"]){
                              $selected = 'selected';
                            }
        echo '            <option id="'.$country["list"][$i]["id"].'" value="'.$country["list"][$i]["id"].'" '.$selected.'>'.$country["list"][$i]["name"].'</option>';
                          }
        echo '         </select>';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="nameInterBankLabel" for="nameInterBank">Nombre del banco intermediario</label>';
        echo '         <input type="text" maxlength="256" id="nameInterBank" value="'.$getparty['intermbankname'].'" class="options" name="intermbankname" onfocus="actionFocus(this, \'56px\', \'bankInfo2\')" onfocusout="actionFocusOut(this, \'69px\', \'bankInfo2\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="intermbankaddressLabel" for="intermbankaddress">Direccion banco intermediario</label>';
        echo '         <input type="text" maxlength="256" value="'.$getparty['intermbankaddress'].'" class="options" name="intermbankaddress" id="intermbankaddress" onfocus="actionFocus(this, \'112px\', \'bankInfo2\')" onfocusout="actionFocusOut(this, \'126px\', \'bankInfo2\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="intermbankaccountLabel" for="intermbankaccount">Cuenta intermediario</label>';
        echo '         <input type="text" class="options" value="'.$getparty['intermbankaccount'].'" name="intermbankaccount" id="intermbankaccount" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'169px\', \'bankInfo2\')" onfocusout="actionFocusOut(this, \'182px\', \'bankInfo2\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '         <label id="intermbankswiftLabel" for="intermbankswift">swift intermediario</label>';
        echo '         <input type="text" maxlength="256" class="options" value="'.$getparty['intermbankswift'].'" name="intermbankswift" id="intermbankswift" onfocus="actionFocus(this, \'226px\', \'bankInfo2\')" onfocusout="actionFocusOut(this, \'239px\', \'bankInfo2\')">';
        echo '      </div>';
        echo '      <div class="containerInput">';
        echo '      <label id="uploadDocumentLabel" for="uploadDocument"></label>';
        echo '         <select class="options" id="uploadDocument" name="document" onfocus="actionFocusSel(this, \'292px\', \'bankInfo2\', \'select\')" onfocusout="actionFocusOutSel(this, \'294px\', \'bankInfo2\', \'select\')"> ';
        echo '            <option value="0" ></option>';
                          for ($i=0; $i < count($document["list"]); $i++) { 
        echo '            <option id="'.$document["list"][$i]["id"].'" value="'.$document["list"][$i]["id"].'">'.$document["list"][$i]["name"].'</option>';
                          }
        echo '         </select>';
        echo '         <label for="selectFile" id="labelFile" class="subir dis"> ';
        echo '            <img src="./img/icons/yellowUpload.png" id="uploadIcon" class="upload dis">';
        echo '         </label> ';
        echo '         <input type="file" name="selectDocument" id="selectFile" onchange="cambiar()" style="display:none">';
        echo '      </div>';
        echo '      <a href="./bankInfo.php">';
        echo '         <img src="./img/icons/arrowBack.png" class="back">';
        echo '      </a>';
        echo '      <button class="Buttonhexa" type="submit">';
        echo '         <div><p class="ok">Ok</p></div>';
        echo '      </button>';
        echo '   </div>';
        echo '      <div id="info" ></div> ';
        echo '</form>';

        self::artiSendMail('yellow');

    } // form InfoBancaria  
    
    /*=======================================================================
    Function: hexagons Venta
    Description: construction of hexagons for Venta
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 5/1/2021
    ===================================================================== */
    static function hexagonsVenta(){

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = 
        '<div class="hexa">
           <div class="one style"></div>
           <div class="two style"></div>
           <div class="three style">
              <a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>
           </div>
        </div>';

        $colums[2][8] = new hexagon('new_hexagon','');
        $colums[2][8] = $colums[2][8]->getHexa();

        $colums[2][9] = new hexagon('button_three','');
        $colums[2][9] = $colums[2][9]->getHexa();

        $colums[2][10] = new hexagon('dis button_four','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][10] = $colums[2][10]->getHexa();

        $colums[3][9] = new hexagon('okHexagon','');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[4][8] = new hexagon('new_hexagon','');
        $colums[4][8] = $colums[4][8]->getHexa();

        $colums[4][10] = new hexagon('dis button_two','');
        $colums[4][10] = $colums[4][10]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].$colums[2][10].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].$colums[4][10].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
    } // hexagons venta

    /*=======================================================================
    Function: form venta
    Description: construction of form venta
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2/11/2021
    ===================================================================== */
    static function formventa($language, $idlead, $countrycode, $idcountry){

        $coins = xclient::getcurrencyl($language, $idlead);
        $debit = xclient::getdebitinstrumentl($language, $idlead);
        $pay = xclient::getcreditinstrumentl($language, $idlead);
        $bank = xclient::getbankl($language, $idlead, $idcountry);
        $prefixy = xclient::getcellphoneareacodel($language, $idlead, $countrycode);
        $credict = xclient::getcreditcardtypel($language, $idlead);
        $getparty = xclient::getparty($_SESSION["id"], $_SESSION["language"]);

        $_SESSION["ccnumber"] = $getparty["ccnumber"];
        ?>
        <script>
            const ccnumber = '<?php echo $_SESSION["ccnumber"]; ?>';
        </script>
        <?php

        $documents = '';
        if(isset($_SESSION['docpend'])){
           if(strlen($_SESSION['docpend']) > 0){
              if(isset($_SESSION['typeNum'])){
                 $listDoc = explode(",",$_SESSION['docpend']);
                 $keyDoc = array_search($_SESSION['typeNum'], $listDoc);
                   
                 unset($listDoc[$keyDoc]);
                 $preList = array_values($listDoc);
                 $_SESSION['docpend'] = implode(",", $preList);

                 unset($_SESSION['typeNum']);
              }

              $documents = xclient::getcompliancedoctypeparaml($language, $idlead, $_SESSION['docpend']);

              if(is_null($documents['list'])){
                 unset($_SESSION['docpend']);
                 unset($_SESSION['message7001']);
                 unset($_SESSION['urlTo']);
              }
           }else{
              unset($_SESSION['docpend']);
              unset($_SESSION['message7001']);
              unset($_SESSION['urlTo']);
           }
        }

        echo '  <form class="formContainer"  method="POST">';
        echo '          <div class="containerformPurple" id="pagina_one">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="montoLabel" for="monto">AMOUNT</label><br>';
        echo '                  <input type="text" maxlength="256" id="monto" name="amount" class="optionsPurple" onfocus="actionFocus(this, \'22px\', \'venta\')" onfocusout="actionFocusOut(this, \'40px\', \'venta\')" onkeypress="return valideKey(event);">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="monedasLabel" for="monedas"></label>';
        echo '                  <select class="optionsPurple" name="idcurrency" id="monedas" onfocus="actionFocusSel(this, \'87px\', \'venta\', \'select\')" onfocusout="actionFocusOutSel(this, \'104px\', \'venta\', \'select\')">';
        echo '                      <option value="0" ></option>';
                                foreach($coins["list"] as $keyCoin => $coin){
        echo '                      <option id="'.$coin["id"].'" value="'.$coin["id"].'">'.$coin["iso"].'</option>';
                                }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="debitLabel" for="debit"></label>';
        echo '                  <select id="debit" class="optionsPurple" name="idinstrumentdebit" onfocus="actionFocusSel(this, \'149px\', \'venta\', \'select\')" onfocusout="actionFocusOutSel(this, \'166px\', \'venta\', \'select\')">';
        echo '                      <option value="0"></option>';
                                foreach($debit["list"] as $keyDebit => $debitFrom){
        echo '                      <option id="'.$debitFrom["id"].'" value="'.$debitFrom["id"].'">'.$debitFrom["name"].'</option>';
                                }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="payLabel" for="pay"></label>';
        echo '                  <select id="pay" class="optionsPurple " name="idinstrumentcredit" onfocus="actionFocusSel(this, \'212px\', \'venta\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'venta\', \'select\')">';
        echo '                      <option value="0"></option>';
                                foreach($pay["list"] as $keypay => $payTo){
        echo '                      <option id="'.$payTo["id"].'" value="'.$payTo["id"].'">'.$payTo["name"].'</option>';
                                }
        echo '                  </select>';
        echo '              </div>';
        echo '              <img src="./img/icons/arrowNext.png" id="button1" class="nextButton">';
        echo '          </div>';
        echo '          <div class="containerformPurple containerformPurple02 dis" id="pagina_two">';
        echo '              <div id="tasa" class="containerinputPurple">';
        echo '                  <label id="tasainputLabel" for="tasainput"></label>';
        echo '                  <input id="tasainput" type="text" maxlength="256" placeholder="TASA CAMBIO" class="optionsPurple purple white-font"  readonly>';
        echo '              </div>';
        echo '              <div id="amountbs" class="containerinputPurple">';
        echo '                  <input id="amountbsinput" type="text" maxlength="256" placeholder="MONTO" class="optionsPurple purple white-font"  readonly>';  
        echo '              </div>';
        echo '              <div id="bank" class="containerinputPurple dis">';
        echo '                  <label id="bank_1Label" for="bank_1"></label>';
        echo '                  <select id="bank_1" name="mpbankcode[0]" class="optionsPurple" onfocus="actionFocusSel(this, \'140px\', \'venta\', \'select\')" onfocusout="actionFocusOutSel(this, \'156px\', \'venta\', \'select\')">';
        echo '                      <option value="0" ></option>';
                                foreach($bank["list"] as $keybank => $valbank){
        echo '                      <option id="'.$valbank["code"].'" value="'.$valbank["code"].'">'.$valbank["name"].'</option>';
                                }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div id="cont" class="containerinputPurple_Especial dis">';
        echo '                  <label id="codigoLabel" for="codigo">COD.</label><br>';
        echo '                  <input type="text" maxlength="256" name="code[0]" id="codigo" class="optionsPurple codigo" onfocus="actionFocus(this, \'212px\', \'venta\')" onfocusout="actionFocusOut(this, \'227px\', \'venta\')">';
        echo '                  <label id="prefijoLabel" for="prefijo"></label>';
        echo '                  <select name="prefijo[0]" class="optionsPurple prefijo" id="prefijo" onfocus="actionFocusSel(this, \'212px\', \'venta\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'venta\', \'select\')">';
        echo '                      <option value="0"></option>';
                                foreach($prefixy["list"] as $keyprefixy => $valprefixy){
        echo '                      <option id="'.$valprefixy["code"].'" value="'.$valprefixy["code"].'">'.$valprefixy["code"].'</option>';
                                }
        echo '                  </select>';
        echo '                  <label id="telefonoPMLabel" for="telefonoPM">PHONE</label><br>';
        echo '                  <input type="text" maxlength="256"  name="phoneNumber[0]" id="telefonoPM" class="optionsPurple" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'212px\', \'venta\')" onfocusout="actionFocusOut(this, \'227px\', \'venta\')">';
        echo '              </div>';

        echo '                  <div id="cardNumber" class="containerinputPurple dis">';
        echo '                      <label id="numberLabel" for="number"></label>';
        echo '                      <input type="text" name="debitcardnumter[0]"  class="optionsPurple" id="number" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'140px\', \'venta\')" onfocusout="actionFocusOut(this, \'156px\', \'venta\')">';
        echo '                  </div>';
        echo '                  <div id="target" class="containerinputPurple dis">';
        echo '                      <label id="target_1Label" for="target_1"></label>';
        echo '                      <select id="target_1" name="cctype[0]" class="optionsPurple prefijo" onfocus="actionFocusSel(this, \'212px\', \'venta\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'venta\', \'select\')">';
        echo '                          <option value="0"></option>';        
                                        for ($i=0; $i < count($credict["list"]); $i++) { 
        echo '                          <option id="'.$credict["list"][$i]["code"].'" value="'.$credict["list"][$i]["code"].'">'.$credict["list"][$i]["name"].'</option>';
                                        }
        echo '                      </select>';
        echo '                  </div>';

        echo '               <div class="containerinputPurple dis" id="bankAccount">';
        echo '                   <label id="bankAccountLabel" for="bankAccount"></label>';
        echo '                   <input type="text" id="bankAccount" name="amountbs" value="'.$getparty['bankaccount'].'" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'212px\', \'venta\')" onfocusout="actionFocusOut(this, \'227px\', \'venta\')">';  
        echo '               </div>';
        echo '              <img src="./img/icons/arrowNext.png" id="button2" class="nextButton">';
        echo '          </div>';
        echo '          <img src="./img/icons/arrowBack.png" id="backButton2" class="backButton dis">';
        echo '          <div class="containerformPurple containerformPurple03 dis" id="pagina_three">';
        echo '              <div class="cardSegurity">';
        echo '                   <div class="containerinputPurple">';
        echo '                       <label id="fechaVencMesLabel" for="fechaVencMes">fecha venc. mes</label>';
        echo '                       <input type="text" name="ccexpmonth[0]"  tipoTarjeta class="optionsPurple"  id="fechaVencMes" maxlength="2" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" onfocus="actionFocus(this, \'2px\', \'venta\')" onfocusout="actionFocusOut(this, \'16px\', \'venta\')">';
        echo '                   </div>';
        echo '                   <div class="containerinputPurple">';
        echo '                       <label id="fechaVencAñoLabel" for="fechaVencAño">fecha venc. año</label>';
        echo '                       <input type="text" name="ccexpyear[0]"  class="optionsPurple" id="fechaVencAño" maxlength="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" onfocus="actionFocus(this, \'2px\', \'venta\')" onfocusout="actionFocusOut(this, \'16px\', \'venta\')">';  
        echo '                   </div>';
        echo '               </div>';
        echo '               <div class="containerinputPurple">';
        echo '                   <label id="codigoValidacionLabel" for="codigoValidacion" class= "codigoValidacionLabel01 codigoValidacionLabel02 codigoValidacionLabel03">CODIGO DE VALIDACIÓN</label>';
        echo '                   <input type="text" name="cccvc[0]"  class="optionsPurple" id="codigoValidacion" maxlength="3" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">';
        echo '               </div>';
        
        echo '                  <div class="containerinputPurple" id="cardNumber1">';
        echo '                      <label id="cardNumber_2Label" for="cardNumber_2">NUMERO DE TARJETA</label>';
        echo '                      <input type="text" name="debitcardnumter[1]" class="optionsPurple" id="cardNumber_2" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'140px\', \'venta\')" onfocusout="actionFocusOut(this, \'156px\', \'venta\')">';
        echo '                  </div>';
        echo '                  <div id="cntTarget_2" class="containerinputPurple dis">';
        echo '                      <label id="target_2Label" class="target_2Label" for="target_2"></label>';
        echo '                      <select id="target_2" name="cctype[1]" class="optionsPurple" onfocus="actionFocusSel(this, \'212px\', \'venta\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'venta\', \'select\')">';
        echo '                          <option value="0"></option>';
                                        for ($i=0; $i < count($credict["list"]); $i++) { 
        echo '                          <option id="'.$credict["list"][$i]["code"].'" value="'.$credict["list"][$i]["code"].'">'.$credict["list"][$i]["name"].'</option>';
                                        }
        echo '                      </select>';
        echo '                  </div>';

        echo '              <div id="bank2" class="containerinputPurple dis">';
        echo '                  <label id="bank_2Label" for="bank_2"></label>';
        echo '                  <select id="bank_2" name="mpbankcode[1]" class="optionsPurple" onfocus="actionFocusSel(this, \'140px\', \'venta\', \'select\')" onfocusout="actionFocusOutSel(this, \'156px\', \'venta\', \'select\')">';
        echo '                      <option value="0" ></option>';
                                    for ($i=0; $i < count($bank["list"]); $i++) { 
        echo '                      <option id="'.$bank["list"][$i]["code"].'" value="'.$bank["list"][$i]["code"].'">'.$bank["list"][$i]["name"].'</option>';
                                    }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div id="cont2" class="containerinputPurple_Especial dis">';
        echo '                  <label id="codigo_2Label" for="codigo_2">COD.</label><br>';
        echo '                  <input type="text" maxlength="256" name="code[1]" id="codigo_2" class="optionsPurple codigo" onfocus="actionFocus(this, \'212px\', \'venta\')" onfocusout="actionFocusOut(this, \'227px\', \'venta\')">';
        echo '                  <label id="prefijo_2Label" for="prefijo_2"></label>';
        echo '                  <select  name="prefijo[1]" class="optionsPurple prefijo" id="prefijo_2" onfocus="actionFocusSel(this, \'212px\', \'venta\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'venta\', \'select\')">';
        echo '                      <option value="0" ></option>';
                                    for ($i=0; $i < count($prefixy["list"]); $i++) { 
        echo '                      <option id="'.$prefixy["list"][$i]["code"].'" value="'.$prefixy["list"][$i]["code"].'">'.$prefixy["list"][$i]["code"].'</option>';
                                    }
        echo '                  </select>';
        echo '                  <label id="telefonoPM_2Label" for="telefonoPM_2">TELEFONO PAGO MOVIL</label><br>';
        echo '                  <input type="text" maxlength="256" name="phoneNumber[1]" id="telefonoPM_2" class="optionsPurple" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'212px\', \'venta\')" onfocusout="actionFocusOut(this, \'227px\', \'venta\')">';
        echo '              </div>';
        echo '               <div class="containerinputPurple dis" id="cuenta2">';
        echo '                   <label id="cuenta_2Label" for="cuenta_2">NUMERO DE CUENTA BANCARIA</label>';
        echo '                   <input type="text" name="acc" id="cuenta_2" value="'.$getparty['bankaccount'].'" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'212px\', \'venta\')" onfocusout="actionFocusOut(this, \'227px\', \'venta\')">';  
        echo '               </div>';
        echo '              <img src="./img/icons/arrowNext.png" id="button3" class="nextButton">';
        echo '          </div>';
        echo '          <img src="./img/icons/arrowBack.png" id="backButton3" class="backButton dis">';
        echo '          <div class="containerformPurple03 dis" id="pagina_four">';
        echo '              <div class="cardSegurity">';
        echo '                   <div class="containerinputPurple">';
        echo '                       <label id="fechaVencMes_2Label" for="fechaVencMes_2">fecha venc. mes</label>';
        echo '                       <input type="text" name="ccexpmonth[1]" class="optionsPurple" id="fechaVencMes_2" maxlength="2" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" onfocus="actionFocus(this, \'2px\', \'venta\')" onfocusout="actionFocusOut(this, \'16px\', \'venta\')">';
        echo '                   </div>';
        echo '                   <div class="containerinputPurple">';
        echo '                       <label id="fechaVencAño_2Label" for="fechaVencAño_2">fecha venc. año</label>';
        echo '                       <input type="text" name="ccexpyear[1]"  class="optionsPurple" id="fechaVencAño_2" maxlength="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" onfocus="actionFocus(this, \'2px\', \'venta\')" onfocusout="actionFocusOut(this, \'16px\', \'venta\')">';  
        echo '                   </div>';
        echo '               </div>';
        echo '               <div class="containerinputPurple">';
        echo '                   <label id="codigoValidacion_2Label" for="codigoValidacion_2">CODIGO DE VALIDACIÓN</label>';
        echo '                   <input type="text" name="cccvc[1]" class="optionsPurple" id="codigoValidacion_2" maxlength="3" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" onfocus="actionFocus(this, \'212px\', \'venta\')" onfocusout="actionFocusOut(this, \'227px\', \'venta\')">';
        echo '               </div>';
        echo '          </div>';
        echo '          <img src="./img/icons/arrowBack.png" id="backButton4" class="backButton dis">';
        echo '          <button type="button" class="okButton dis" id="okButton" onclick="validateVenta()">';
        echo '          <img src="./img/icons/ok.png">';
        echo '          </button>';
        echo '  </form>';

        if(isset($_SESSION['message7001'])){
            echo '<div id="requiredDocuments" class="requiredOff">'
                .'   <label id="docListPenLabel" for="docListPen"></label>'
                .'   <select id="docListPen" name="docListPen" class="selDoc optionsPurple" onfocus="actionFocusSel(this, \'10px\', \'venta\', \'select\')" onfocusout="actionFocusOutSel(this, \'27px\', \'venta\', \'select\')">'
                .'      <option value="-1" ></option>';
                     for ($i=0; $i < count($documents["list"]); $i++) { 
            echo '      <option data-id="'.$documents["list"][$i]["id"].'" value="'.$documents["list"][$i]["id"].'">'.$documents["list"][$i]["name"].'</option>';
                     }
            echo '   </select>'
                .'</div>';
            echo '<div id="actionDoc">'
                .'  <div id="penAction" class="off"><img src="./img/icons/pencil.svg" class="icon ico-purple"></div>'
                .'  <div id="docAction" class="off">'
                .'      <form id="docUploadForm" action="./form/message_otc.php" method="POST" enctype="multipart/form-data">'
                .'         <label class="labelFile" for="uploadDoc"><img src="./img/icons/upload2.svg" class="icon ico-purple"></label>'
                .'         <input type="file" name="uploadDoc" id="uploadDoc" />'
                .'         <input type="hidden" name="docNum" id="docNum" >'
                .'      </form>'
                .'  </div>'
                .'</div>';
        }

        self::artiSendMail('purple');
    } // formventa

    /*=======================================================================
    Function: hexagons Compra
    Description: construction of hexagons for Compra
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 29/10/2021
    ===================================================================== */
    static function hexagonsCompra(){

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[2][8] = new hexagon('white new_hexagon','');
        $colums[2][8] = $colums[2][8]->getHexa();

        $colums[2][9] = new hexagon('hexagonThree',' ');
        $colums[2][9] = $colums[2][9]->getHexa();

        $colums[2][10] = new hexagon('dis btnStep1Prev',' <img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][10] = $colums[2][10]->getHexa();

        $colums[2][11] = new hexagon('dis btnStep2Prev',' <img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][11] = $colums[2][11]->getHexa();

        $colums[3][9] = new hexagon('white new_hexagon','');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[4][8] = new hexagon('white new_hexagon','');
        $colums[4][8] = $colums[4][8]->getHexa();

        $colums[4][9] = new hexagon('btnStep2Next',' <img src="./img/icons/arrowNext.png" class="rotate" id="button_next">');
        $colums[4][9] = $colums[4][9]->getHexa();

        $colums[4][10] = new hexagon('dis hexagonTwo','');
        $colums[4][10] = $colums[4][10]->getHexa();

        $colums[4][11] = new hexagon('dis btnStep3Next','<img src="./img/icons/arrowNext.png" class="rotate">');
        $colums[4][11] = $colums[4][11]->getHexa();

        $colums[4][12] = new hexagon('dis hexagonSix','');
        $colums[4][12] = $colums[4][12]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].$colums[2][10].$colums[2][11].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].$colums[4][10].$colums[4][11].$colums[4][12].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
    } // hexagons compra

/*=======================================================================
    Function: form Compra
    Description: construction of form Compra
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2/11/2021
    ===================================================================== */
    static function formCompra($language, $idlead){

        $buy = xclient::getcurrencyl($language, $idlead);
        $pay = xclient::getdebitinstrumentl($language, $idlead);
        $payshape = xclient::getclearencetypel($language, $idlead);
        $banks = xclient::geticccbankl($language, $idlead);
        $card = xclient::getcreditcardtypel($language, $idlead);
        $getparty = xclient::getparty($_SESSION["id"], $_SESSION["language"]);

        $_SESSION["ccnumber"] = $getparty["ccnumber"];
        ?>
        <script>
            const ccnumber = '<?php echo $_SESSION["ccnumber"]; ?>';
        </script>
        <?php

        $documents = '';
        if(isset($_SESSION['docpend'])){
            if(strlen($_SESSION['docpend']) > 0){
               if(isset($_SESSION['typeNum'])){
                  $listDoc = explode(",",$_SESSION['docpend']);
                  $keyDoc = array_search($_SESSION['typeNum'], $listDoc);
                    
                  unset($listDoc[$keyDoc]);
                  $preList = array_values($listDoc);
                  $_SESSION['docpend'] = implode(",", $preList);

                  unset($_SESSION['typeNum']);
               }

               $documents = xclient::getcompliancedoctypeparaml($language, $idlead, $_SESSION['docpend']);

               if(is_null($documents['list'])){
                  unset($_SESSION['docpend']);
                  unset($_SESSION['message7001']);
                  unset($_SESSION['urlTo']);
               }
            }else{
               unset($_SESSION['docpend']);
               unset($_SESSION['message7001']);
               unset($_SESSION['urlTo']);
            }
        }

        echo '<form id="compraForm" class="formContainer"  method="POST">';
        echo '   <div class="containerformPurple pageOne">';
        echo '      <div class="containerinputPurple">';
        echo '          <label id="amountLabel" for="amount">AMOUNT</label><br>';
        echo '          <input type="text" maxlength="256" id="amount" name="amount" class="optionsPurple" onfocus="actionFocus(this, \'23px\', \'compra\')" onfocusout="actionFocusOut(this, \'40px\', \'compra\')">';
        echo '      </div>';
        echo '      <div class="containerinputPurple">';
        echo '         <label id="monedasLabel" for="monedas"></label>';
        echo '         <select id="monedas" name="idcurrency" class="optionsPurple" onfocus="actionFocusSel(this, \'89px\', \'compra\', \'select\')" onfocusout="actionFocusOutSel(this, \'102px\', \'compra\', \'select\')">';
        echo '            <option value="-1"></option>';
                          for ($i=0; $i < count( $buy["list"]); $i++) { 
        echo '            <option id="'. $buy["list"][$i]["id"].'" value="'. $buy["list"][$i]["id"].'">'. $buy["list"][$i]["iso"].'</option>';
                          }
        echo '         </select>';
        echo '      </div>';
        echo '      <div class="containerinputPurple">';
        echo '         <label id="pagoLabel" for="pago"></label>';
        echo '         <select id="pago" name="idinstrumentdebit" class="optionsPurple payMaster" onfocus="actionFocusSel(this, \'148px\', \'compra\', \'select\')" onfocusout="actionFocusOutSel(this, \'165px\', \'compra\', \'select\')">';
        echo '            <option value="-1"></option>';
                          for ($i=0; $i < count( $pay["list"]); $i++) { 
        echo '            <option id="'. $pay["list"][$i]["id"].'" value="'. $pay["list"][$i]["id"].'">'. $pay["list"][$i]["name"].'</option>';
                          }
        echo '         </select>';
        echo '      </div>';
        echo '      <div class="containerinputPurple">';
        echo '         <label id="payshapeLabel" for="payshape"></label>';
        echo '         <select id="payshape" name="idclearencetype" class="optionsPurple" onfocus="actionFocusSel(this, \'209px\', \'compra\', \'select\')" onfocusout="actionFocusOutSel(this, \'228px\', \'compra\', \'select\')">';
        echo '            <option value="-1"></option>';
                          for ($i=0; $i < count( $payshape["list"]); $i++) { 
                             if($payshape["list"][$i]["id"] == 3 || $payshape["list"][$i]["id"] == 5){
        echo '                  <option id="'. $payshape["list"][$i]["id"].'" value="'. $payshape["list"][$i]["id"].'">'. $payshape["list"][$i]["name"].'</option>';
                             }
                           }
        echo '         </select>';
        echo '      </div>';
        echo '   </div>';
        echo '   <div class="containerformPurple dis pageTwo">';
        echo '      <div class="containerinputPurple">';
        echo '         <input id="tasa" type="text" maxlength="256" readonly placeholder="TASA CAMBIO" class="optionsPurple purple white-font" >';
        echo '      </div>';
        echo '      <div id="cntMontobs" class="containerinputPurple">';
        echo '         <input id="montobs" type="text" maxlength="256" readonly placeholder="MONTO BS." class="optionsPurple purple white-font" >';  
        echo '      </div>';
        echo '      <div id="cntTda" class="containerinputPurple dis target">';
        echo '         <label id="tarjetaAbonarLabel" for="tarjetaAbonar" class="tarjetaAbonarTDC tarjetaAbonarDptoCta">TARJETA ABONAR</label>';
        echo '         <input type="text" id="tarjetaAbonar" name="tarjeta" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" >';  
        echo '      </div>';
        echo '      <div id="cntReceptor" class="containerinputPurple id receivingAccount dis">';
        echo '         <label id="receptorLabel" for="receptor" class="reptor01 receptor02"></label>';
        echo '         <select id="receptor" name="acc" class="optionsPurple" >'; 
        echo '            <option value="0"></option>';
                          for ($i=0; $i < count( $banks["list"]); $i++) { 
        echo '            <option value="'. $banks["list"][$i]["id"].'">'. $banks["list"][$i]["name"].'</option>';
                          }
        echo '         </select>';
        echo '      </div>';
        echo '      <div class="containerinputPurple ad reference dis ">';
        echo '         <label id="referenciaLabel" for="referencia">REFERENCIA</label>';
        echo '         <input type="text" maxlength="256" id="referencia" name="reference[0]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'compra\')" onfocusout="actionFocusOut(this, \'227px\', \'compra\')">'; 
        echo '      </div>';
        echo '      <div class="containerinputPurple dis paymentCard pay_target">';
        echo '         <label id="tarjetaDePagoLabel" for="tarjetaDePago" class="labelPayTarget01 labelPayTarget02">TARJETA DE PAGO</label>';
        echo '         <input type="text" id="tarjetaDePago" name="creditcardnumber" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" value="'.$getparty["ccnumber"].'">';
        echo '      </div>';
        echo '      <div class="containerinputPurple dis typeCard type_target_0">';
        echo '         <label id="tipoTarjeta_0Label" for="tipoTarjeta_0"></label>';
        echo '         <select id="tipoTarjeta_0" name="cctype[0]" class="optionsPurple cctype" onfocus="actionFocusSel(this, \'212px\', \'compra\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'compra\', \'select\')">'; 
        echo '            <option value="-1"></option>';
                          for ($i=0; $i < count( $card["list"]); $i++) { 
        echo '            <option value="'. $card["list"][$i]["code"].'"';
                            if($getparty['cctype'] == $card["list"][$i]["code"]){
        echo                    "selected";
                            }
        echo '            >'. $card["list"][$i]["name"].'</option>';
                          } 
        echo '         </select>'; 
        echo '      </div>';
        echo '   </div>';
        echo '   <div class="containerformPurple pag dis" id="pageThree">';
        echo '      <div class="containerinputPurple dis type_target_1">';
        echo '         <label id="tipoTarjeta_1Label" for="tipoTarjeta_1"></label>';
        echo '         <select id="tipoTarjeta_1" name="cctype[1]" class="optionsPurple cctype" onfocus="actionFocusSel(this, \'2px\', \'compra\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'compra\', \'select\')">'; 
        echo '            <option value="-1"></option>';
                        for ($i=0; $i < count( $card["list"]); $i++) { 
        echo '            <option value="'. $card["list"][$i]["code"].'"';
                            if($getparty['cctype'] == $card["list"][$i]["code"]){
        echo                    "selected";
                            }
        echo '            >'. $card["list"][$i]["name"].'</option>';
                            } 
        echo '         </select>'; 
        echo '      </div>';
        echo '      <div class="containerinputPurple dis" id="contRefe">';
        echo '         <label id="referencia_2Label" for="referencia_2">REFERENCIA</label>';
        echo '         <input type="text" maxlength="256" id="referencia_2" name="reference[1]" class="optionsPurple ad" onfocus="actionFocus(this, \'2px\', \'compra\')" onfocusout="actionFocusOut(this, \'16px\', \'compra\')">'; 
        echo '      </div>';
        echo '      <div class="containerinputPurple date" id="contDate">'; 
        echo '         <label id="fechaVencMesLabel" for="fechaVencMes">FECHA VENC. MES</label>';
        echo '         <input type="text" id="fechaVencMes" name="ccexpmonth" class="mid__form " maxlength="2" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" value="'.$getparty['ccexpmonth'].'">'; 
        echo '         <label id="fechaVencYearLabel" for="fechaVencYear">FECHA VENC. AÑO</label>';
        echo '         <input type="text" id="fechaVencYear" name="ccexpyear" class="mid__form " maxlength="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" value="'.$getparty['ccexpyear'].'">'; 
        echo '      </div >'; 
        echo '      <div class="containerinputPurple" id="contValidation">';
        echo '         <label id="codigoValidacionLabel" for="codigoValidacion">CODIGO DE VALIDACIÓN</label>';
        echo '         <input type="text" id="codigoValidacion" name="cccvc" class="optionsPurple" maxlength="3" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" onfocus="actionFocus(this, \'152px\', \'compra\')" onfocusout="actionFocusOut(this, \'165px\', \'compra\')" value="'.$getparty['cccvc'].'">'; 
        echo '      </div >';
        echo '   </div >'; 

        echo '   <button class="buttonHexa dis" id="buttonSubmit" type="button" onclick="validateCompra()">';
        echo '      <p class="" style="color: white;" >Ok</p>';
        echo '   </button>';
        echo '</form>';
  
        if(isset($_SESSION['message7001'])){
            echo '<div id="requiredDocuments" class="requiredOff">'
                .'   <label id="docListPenLabel" for="docListPen"></label>'
                .'   <select id="docListPen" name="docListPen" class="selDoc optionsPurple" onfocus="actionFocusSel(this, \'10px\', \'compra\', \'select\')" onfocusout="actionFocusOutSel(this, \'27px\', \'compra\', \'select\')">'
                .'      <option value="-1"></option>';
                    for ($i=0; $i < count($documents["list"]); $i++) { 
            echo '      <option data-id="'.$documents["list"][$i]["id"].'" value="'.$documents["list"][$i]["id"].'">'.$documents["list"][$i]["name"].'</option>';
                    }
            echo '   </select>'
                .'</div>';
            echo '<div id="actionDoc">'
                .'   <div id="penAction" class="off"><img src="./img/icons/pencil.svg" class="icon ico-light-purple"></div>'
                .'   <div id="docAction" class="off">'
                .'      <form id="docUploadForm" action="./form/message_otc.php" method="POST" enctype="multipart/form-data">'
                .'         <label class="labelFile" for="uploadDoc"><img src="./img/icons/upload2.svg" class="icon ico-light-purple"></label>'
                .'         <input type="file" name="uploadDoc" id="uploadDoc" />'
                .'         <input type="hidden" name="docNum" id="docNum" >'
                .'      </form>'
                .'   </div>'
                .'</div>';
        }
        self::artiSendMail('purple');

    } // form Compra

    /*=======================================================================
    Function: hexagonscambio
    Description: construction of hexagons for change 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 29/10/2021
    ===================================================================== */
    static function hexagonscambio(){

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[2][0] = new hexagon('first_step','<p class="I rotate"></p>');
        $colums[2][0] = $colums[2][0]->getHexa();

        $colums[2][8] = new hexagon('white new_hexagon','');
        $colums[2][8] = $colums[2][8]->getHexa();

        $colums[2][9] = new hexagon('button_three','');
        $colums[2][9] = $colums[2][9]->getHexa();

        $colums[2][10] = new hexagon('dis button_four','<img src="./img/icons/arrowBack.png" class="rotate handCursor">');
        $colums[2][10] = $colums[2][10]->getHexa();

        $colums[3][9] = new hexagon('white new_hexagon','');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[4][0] = new hexagon('second_step','<p class="II rotate"></p>');
        $colums[4][0] = $colums[4][0]->getHexa();

        $colums[4][8] = new hexagon('white new_hexagon','');
        $colums[4][8] = $colums[4][8]->getHexa();

        $colums[4][9] = new hexagon('button_one','<img src="./img/icons/arrowNext.png" class="rotate handCursor" onclick="buttonOne()">');
        $colums[4][9] = $colums[4][9]->getHexa();

        $colums[4][10] = new hexagon('dis button_two','');
        $colums[4][10] = $colums[4][10]->getHexa();
        
        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].$colums[2][10].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].$colums[4][10].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
    } // hexagons cambio

    /*=======================================================================
    Function: formcambio
    Description: construction of form cambio
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2/11/2021
    ===================================================================== */
    static function formcambio($idlead, $language){
        $data = xclient::getinstrumentsrcl($idlead, $language);

        $documents = '';
        if(isset($_SESSION['docpend'])){
            if(strlen($_SESSION['docpend']) > 0){
                if(isset($_SESSION['typeNum'])){
                    $listDoc = explode(",",$_SESSION['docpend']);
                    $keyDoc = array_search($_SESSION['typeNum'], $listDoc);
                    
                    unset($listDoc[$keyDoc]);
                    $preList = array_values($listDoc);
                    $_SESSION['docpend'] = implode(",", $preList);

                    unset($_SESSION['typeNum']);
                }

                 $documents = xclient::getcompliancedoctypeparaml($language, $idlead, $_SESSION['docpend']);

                if(is_null($documents['list'])){
                    unset($_SESSION['docpend']);
                    unset($_SESSION['message7001']);
                    unset($_SESSION['urlTo']);
                }
            }else{
                unset($_SESSION['docpend']);
                unset($_SESSION['message7001']);
                unset($_SESSION['urlTo']);
            }
        }

        echo '  <form id="formCambio" class="formContainer" action="" method="POST" >';
        echo '          <div class="containerformPurple pagina_one" >';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="montoLabel" for="monto">MONTO</label>';
        echo '                  <input id="monto" name="amount" type="text" maxlength="256" onfocus="actionFocus(this, \'2px\', \'exchange\')" onfocusout="actionFocusOut(this, \'16px\', \'exchange\')" class="optionsPurple" onkeypress="return valideKey(event);">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="entregaLabel" for="entrega"></label>';
        echo '                  <select name="idinstrumentsrc" id="entrega" class="optionsPurple" onfocus="actionFocusSel(this, \'72px\', \'exchange\', \'select\')" onfocusout="actionFocusOutSel(this, \'87px\', \'exchange\', \'select\')">';
        echo '                      <option value="0"></option>';
                                        foreach($data["list"] as $key => $value){
                                            echo '<option id="'.$value["id"].'" value="'.$value["id"].'">'.$value["name"].'</option>';
                                        }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="divisaLabel" for="divisa"></label>';
        echo '                  <select name="idcurrencysrc" id="divisa" class="optionsPurple" onfocus="actionFocusSel(this, \'140px\', \'exchange\', \'select\')" onfocusout="actionFocusOutSel(this, \'156px\', \'exchange\', \'select\')">';
        echo '                      <option value="0" ></option>';
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="recibeLabel" for="recibe"></label>';
        echo '                  <select name="idinstrumentdst" id="recibe" class="optionsPurple" onfocus="actionFocusSel(this, \'212px\', \'exchange\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'exchange\', \'select\')">';
        echo '                      <option value="0" ></option>';
        echo '                  </select>';
        echo '              </div>';
        echo '          </div>';
        //---------------------------------2------------------------------------------
        echo '          <div class="containerformPurple dis pagina_two">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="recibeDivisa_0Label" for="recibeDivisa_0"></label>';
        echo '                  <select name="idcurrencydst_0" id="recibeDivisa_0" class="optionsPurple divisaList" onfocus="actionFocusSel(this, \'2px\', \'exchange\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'exchange\', \'select\')">';
        echo '                      <option value="0" ></option>';
        echo '                  </select>';
        echo '              </div>';
        echo '               <div class="containerinputPurple">';
        echo '                  <label id="bank_0Label" for="bank_0">BANCO/PROVEEDOR</label>';
        echo '                  <input id="bank_0" name="bank_0" type="text" maxlength="256" class="optionsPurple" onfocus="actionFocus(this, \'72px\', \'exchange\')" onfocusout="actionFocusOut(this, \'87px\', \'exchange\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="numref_0Label" for="numref_0">NUMERO/REFERENCIA</label>';
        echo '                  <input id="numref_0" name="numref_0" type="text" maxlength="256" class="optionsPurple" onfocus="actionFocus(this, \'142px\', \'exchange\')" onfocusout="actionFocusOut(this, \'157px\', \'exchange\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="routing_0Label" for="routing_0">ROUTING</label>';
        echo '                  <input id="routing_0" name="routing_0" type="text" maxlength="256" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'exchange\')" onfocusout="actionFocusOut(this, \'227px\', \'exchange\')">';        
        echo '              </div>';              
        echo '          </div>';
        //---------------------------------3-------------------------------------------
        echo '          <div class="containerformPurple dis pagina_three">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="recibeDivisa_1Label" for="recibeDivisa_1"></label>';
        echo '                  <select name="idcurrencydst_1" id="recibeDivisa_1" class="optionsPurple divisaList" onfocus="actionFocusSel(this, \'2px\', \'exchange\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'exchange\', \'select\')">';
        echo '                      <option value="0" ></option>';
        echo '                  </select>';
        echo '              </div>';
        echo '               <div class="containerinputPurple">';
        echo '                  <label id="bank01Label" for="bank_0">BANCO/PROVEEDOR</label>';
        echo '                  <input id="bank01" name="bank_1" type="text" maxlength="256" class="optionsPurple" onfocus="actionFocus(this, \'72px\', \'exchange\')" onfocusout="actionFocusOut(this, \'87px\', \'exchange\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="numref01Label" for="numref01">NUMERO/REFERENCIA</label>';
        echo '                  <input id="numref01" name="numref_1" type="text" maxlength="256" class="optionsPurple" onfocus="actionFocus(this, \'142px\', \'exchange\')" onfocusout="actionFocusOut(this, \'157px\', \'exchange\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="routing01Label" for="routing01">ROUTING</label>';
        echo '                  <input id="routing01" name="routing_1" type="text" maxlength="256" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'exchange\')" onfocusout="actionFocusOut(this, \'227px\', \'exchange\')">';
        echo '              </div>';              
        echo '          </div>';
        /*---------------------------------4--5--6--7------------------------------*/
        echo '          <div class="containerformPurple dis pagina_four pagina_five pagina_six pagina_seven">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="recibeDivisa_2Label" for="recibeDivisa_2"></label>';
        echo '                  <select name="idcurrencydst_2" id="recibeDivisa_2" class="optionsPurple divisaList" onfocus="actionFocusSel(this, \'2px\', \'exchange\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'exchange\', \'select\')">';
        echo '                      <option value="0" ></option>';
        echo '                  </select>';
        echo '              </div>';              
        echo '          </div>';
        /*-----------------------------8--9--10--11--12--13--14--------------------*/
        echo '          <div class="containerformPurple dis pagina_eight pagina_nine pagina_ten pagina_eleven pagina_twelve pagina_thirteen pagina_fourteen">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="recibeDivisa_3Label" for="recibeDivisa_3"></label>';
        echo '                  <select name="idcurrencydst_3" id="recibeDivisa_3" class="optionsPurple divisaList" onfocus="actionFocusSel(this, \'2px\', \'exchange\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'exchange\', \'select\')">';
        echo '                      <option value="0" ></option>';
        echo '                  </select>';
        echo '              </div>';
        echo '               <div class="containerinputPurple">';
        echo '                  <label id="bank02Label" for="bank02">BANCO/PROVEEDOR</label>';
        echo '                  <input id="bank02" name="bank_2" type="text" maxlength="256" class="optionsPurple" onfocus="actionFocus(this, \'105px\', \'exchange\')" onfocusout="actionFocusOut(this, \'123px\', \'exchange\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="numref02Label" for="numref02">NUMERO/REFERENCIA</label>';
        echo '                  <input id="numref02" name="numref_2" type="text" maxlength="256" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'exchange\')" onfocusout="actionFocusOut(this, \'227px\', \'exchange\')">';
        echo '              </div>';             
        echo '          </div>'; 
        echo '          <button type="button" class="buttonHexa" id="buttonSubmit" onclick="formCambio()" style="background:none ;border: none; position: absolute; top: 325px; left: 170px; z-index:-1">';
        echo '                  <p class="" style="color: white;" >Ok</p>';
        echo '          </button>';
        echo '  </form>';

        if(isset($_SESSION['message7001'])){
            echo '<div id="requiredDocuments" class="requiredOff">'
                .'      <label id="docListPenLabel" for="docListPen"></label>'
                .'      <select id="docListPen" name="docListPen" class="selDoc optionsPurple" onfocus="actionFocusSel(this, \'10px\', \'exchange\', \'select\')" onfocusout="actionFocusOutSel(this, \'27px\', \'exchange\', \'select\')">'
                .'      <option value="-1"></option>';
                    for ($i=0; $i < count($documents["list"]); $i++) { 
            echo '      <option data-id="'.$documents["list"][$i]["id"].'" value="'.$documents["list"][$i]["id"].'">'.$documents["list"][$i]["name"].'</option>';
                    }
            echo '   </select>'
                .'</div>';
            echo '<div id="actionDoc">'
                .'   <div id="penAction" class="off"><img src="./img/icons/pencil.svg" class="icon ico-light-purple"></div>'
                .'   <div id="docAction" class="off">'
                .'      <form id="docUploadForm" action="./form/message_otc.php" method="POST" enctype="multipart/form-data">'
                .'         <label class="labelFile" for="uploadDoc"><img src="./img/icons/upload2.svg" class="icon ico-light-purple"></label>'
                .'         <input type="file" name="uploadDoc" id="uploadDoc" />'
                .'         <input type="hidden" name="docNum" id="docNum" >'
                .'      </form>'
                .'   </div>'
                .'</div>';
        }
        

        self::artiSendMail('purple');

    } // formcambio

    /*=======================================================================
    Function: hexagon encomienda 
    Description: construction of encomienda hexagons
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 8/11/2021
    ===================================================================== */
    static function hexagonsencomienda(){

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[1][1] = new hexagon('first_step','<p class="I rotate"></p>');
        $colums[1][1] = $colums[1][1]->getHexa();

        $colums[2][8] = new hexagon('new_hexagon','');
        $colums[2][8] = $colums[2][8]->getHexa();

        $colums[2][9] = new hexagon('buttonOne_back','');
        $colums[2][9] = $colums[2][9]->getHexa();

        $colums[2][10] = new hexagon('dis buttonTwo_back','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][10] = $colums[2][10]->getHexa();

        $colums[2][11] = new hexagon('dis buttonThree_back','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][11] = $colums[2][11]->getHexa();

        $colums[2][12] = new hexagon('dis buttonFour_back','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][12] = $colums[2][12]->getHexa();

        $colums[2][13] = new hexagon('dis buttonFive_back','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][13] = $colums[2][13]->getHexa();

        $colums[2][14] = new hexagon('dis buttonSix_back','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][14] = $colums[2][14]->getHexa();
        
        $colums[3][1] = new hexagon('second_step','<p class="II rotate"></p>');
        $colums[3][1] = $colums[3][1]->getHexa();

        $colums[3][9] = new hexagon('new_hexagon','');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[4][8] = new hexagon('new_hexagon','');
        $colums[4][8] = $colums[4][8]->getHexa();

        $colums[4][9] = new hexagon('buttonOne_next','<img src="./img/icons/arrowNext.png" class="rotate">');
        $colums[4][9] = $colums[4][9]->getHexa();

        $colums[4][10] = new hexagon('dis buttonTwo_next','<img src="./img/icons/arrowNext.png" class="rotate clickTwoStep">');
        $colums[4][10] = $colums[4][10]->getHexa();

        $colums[4][11] = new hexagon('dis buttonThree_next','<img src="./img/icons/arrowNext.png" id="nextStepThree" class="rotate">');
        $colums[4][11] = $colums[4][11]->getHexa();

        $colums[4][12] = new hexagon('dis buttonFour_next','<img src="./img/icons/arrowNext.png" id="nextStepFour" class="rotate">');
        $colums[4][12] = $colums[4][12]->getHexa();

        $colums[4][13] = new hexagon('dis buttonFive_next','<img src="./img/icons/arrowNext.png" id="nextStep" class="rotate">');
        $colums[4][13] = $colums[4][13]->getHexa();

        $colums[4][14] = new hexagon('dis buttonSix_next','');
        $colums[4][14] = $colums[4][14]->getHexa();

        $colums[5][1] = new hexagon('third_step','<p class="III rotate"></p>');
        $colums[5][1] = $colums[5][1]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].$colums[2][10].$colums[2][11].$colums[2][12].$colums[2][13].$colums[2][14].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].$colums[4][10].$colums[4][11].$colums[4][12].$colums[4][13].$colums[4][14].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
    } // hexagons encomienda

    /*=======================================================================
    Function: form encomienda
    Description: construction of form encomienda
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2/11/2021
    ===================================================================== */
    static function formencomienda($language, $idlead){

        $country = xclient::getcountryl($language, $idlead);
        $coinList = xclient::getcurrencyremitancel($language, $idlead);
        $pay = xclient::getclearencetypel($language, $idlead);
        $creditcard = xclient::getcreditcardtypel($language, $idlead);
        $banks = xclient::geticccbankl($language, $idlead);
        $getparty = xclient::getparty($idlead, $_SESSION["language"]);

        $documents = '';
        if(isset($_SESSION['docpend'])){
            if(strlen($_SESSION['docpend']) > 0){
                if(isset($_SESSION['typeNum'])){
                    $listDoc = explode(",",$_SESSION['docpend']);
                    $keyDoc = array_search($_SESSION['typeNum'], $listDoc);
                    
                    unset($listDoc[$keyDoc]);
                    $preList = array_values($listDoc);
                    $_SESSION['docpend'] = implode(",", $preList);

                    unset($_SESSION['typeNum']);
                }

                $documents = xclient::getcompliancedoctypeparaml($language, $idlead, $_SESSION['docpend']);

                if(is_null($documents['list'])){
                    unset($_SESSION['docpend']);
                    unset($_SESSION['message7001']);
                    unset($_SESSION['urlTo']);
                }
            }else{
                unset($_SESSION['docpend']);
                unset($_SESSION['message7001']);
                unset($_SESSION['urlTo']);
            }
        }

        $monto = '';
        $remittance = '';

        $withoutBlocking = 'class="optionsPurple"'; 
        $withBlocking = 'class="optionsPurple purple" readonly';
        ?>
        <script>
            let disableAction = false;
        </script>
        <?php
        if(isset($_SESSION["monto"])){
            $monto = $_SESSION["monto"];
            $remittance = $_SESSION["remittance"];
            ?>
            <script>
                disableAction = true;
            </script>
            <?php
        }

        echo '  <form id="formEncomienda" class="formContainer"  method="POST">';  
        echo '          <div class="containerformPurple pagina_one">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="montoLabel" for="monto">AMOUNT</label>';
        echo '                  <input id="monto" type="text" maxlength="256" name="amount"';
        echo $monto != '' ? $withBlocking : $withoutBlocking;
        echo '                   onkeypress="return valideKey(event);" value="'.$monto.'" onfocus="actionFocus(this, \'2px\', \'remittance\')" onfocusout="actionFocusOut(this, \'16px\', \'remittance\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="paisLabel" for="pais"></label>';
        echo '                  <select name="idcountry" id="pais" class="optionsPurple" type="text" onfocus="actionFocusSel(this, \'72px\', \'remittance\', \'select\')" onfocusout="actionFocusOutSel(this, \'87px\', \'remittance\', \'select\')">';
        echo '                      <option value="0"></option>';
                                for ($i=0; $i < count($country["list"]); $i++) { 
        echo '                      <option id="'.$country["list"][$i]["id"].'" value="'.$country["list"][$i]["id"].'">'.$country["list"][$i]["name"].'</option>';
                                }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="ProveedorLabel" for="Proveedor"></label>';
        echo '                  <select name="idprovider" id="Proveedor" class="optionsPurple" onfocus="actionFocusSel(this, \'140px\', \'remittance\', \'select\')" onfocusout="actionFocusOutSel(this, \'156px\', \'remittance\', \'select\')">';
        echo '                      <option value="0"></option>';
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="selectDivisaLabel" for="selectDivisa"></label>';
        echo '                  <select name="idcurrency" class="optionsPurple" id="selectDivisa" onfocus="actionFocusSel(this, \'212px\', \'remittance\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'remittance\', \'select\')">';
        echo '                      <option value="0" ></option>';
                                for ($i=0; $i < count($coinList["list"]); $i++) { 
        echo '                      <option  value="'.$coinList["list"][$i]["id"].'">'.$coinList["list"][$i]["iso"].'</option>';
                                }
        echo '                  </select>';
        echo '              </div>';
        echo '          </div>';

        echo '          <div class="containerformPurple dis pagina_two">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="selectEntregaLabel" for="selectEntrega"></label>';
        echo '                  <select id="selectEntrega" name="idremitancetype" class="optionsPurple" onfocus="actionFocusSel(this, \'2px\', \'remittance\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'remittance\', \'select\')">';
        echo '                      <option value="0" ></option>';
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="formaPagoLabel" for="formaPago"></label>';
        echo '                  <select id="formaPago" name="idclearencetype"';
        echo $remittance != '' ? $withBlocking : $withoutBlocking;
        echo '                   onfocus="actionFocusSel(this, \'72px\', \'remittance\', \'select\')" onfocusout="actionFocusOutSel(this, \'87px\', \'remittance\', \'select\')">';
        echo '                      <option id="string" value="0"></option>';
                                for ($i=0; $i < count($pay["list"]); $i++) { 
                                    $selected = '';
                                    if($pay["list"][$i]["id"] == $remittance){
                                        $selected = 'selected';
                                    }
        echo '                      <option  id="'.$pay["list"][$i]["id"].'" value="'.$pay["list"][$i]["id"].'" '.$selected.'>'.$pay["list"][$i]["name"].'</option>';
                                }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <input id="tasa" type="text" placeholder="tasa" maxlength="256" name="nombre" class="optionsPurple purple white-font" readonly>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <input id="montoBs" type="text" placeholder="monto" maxlength="256" name="monto" class="optionsPurple purple white-font" readonly>';
        echo '              </div>';
        echo '          </div>';
        //---------------------------------------3----------------------------------------------//
        echo '          <div class="containerformPurple dis pagina_three">';
        echo '              <div id="ctaReceptora" class="containerinputPurple dis">';
        echo '                  <label id="selectAccLabel" for="selectAcc"></label>';
        echo '                  <select id="selectAcc" name="acc" class="optionsPurple" onfocus="actionFocusSel(this, \'2px\', \'remittance\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'remittance\', \'select\')">';
        echo '                      <option value="0"></option>';
                                for ($i=0; $i < count( $banks["list"]); $i++) { 
        echo '                      <option value="'. $banks["list"][$i]["id"].'">'. $banks["list"][$i]["name"].'</option>';
                                }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div id="cntReferencia" class="containerinputPurple dis">';
        echo '                  <label id="referenciaLabel" class="referenceLabel01 referenceLabel02 referenceLabel03 referenceLabel04 referenceLabel05" for="referencia">Referencia</label>';
        echo '                  <input type="text" maxlength="256" id="referencia" name="reference" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="cntBanco" class="containerinputPurple dis">';
        echo '                  <label id="bancoLabel" for="banco" class="bankLabel01"></label>';
        echo '                  <input type="text" maxlength="256" id="banco" name="bank" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="cuenta" class="containerinputPurple dis">';
        echo '                  <label id="numCuentaLabel" for="numCuenta" >Cuenta</label>';
        echo '                  <input type="text" id="numCuenta" name="bacc[0]" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);">';
        echo '              </div>';
        echo '              <div id="cntRouting" class="containerinputPurple dis">';
        echo '                  <label id="routingLabel" for="routing" class="routingLabel03">Routing</label>';
        echo '                  <input type="text" maxlength="256" id="routing" name="routing" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="beneficiario" class="containerinputPurpleBeneficiary dis">';
        echo '                  <label id="selectBeneficiarioLabel" for="selectBeneficiario" class="selectBeneficiarioLabel01 selectBeneficiarioLabel02 selectBeneficiarioLabel03 selectBeneficiarioLabel04"></label>';
        echo '                  <select id="selectBeneficiario" name="beneficiario[0]" class="optionsPurple">';
        echo '                      <option value="0" ></option>';
        echo '                  </select>';
        echo '                  <img id="beneficiary" class="handCursor" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
        echo '                  <img id="beneficiarySecond" class="handCursor dis" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
        echo '              </div>';
        echo '              <div id="cntDocId01" class="containerinputPurple dis">';
        echo '                  <label id="docIdentidad_1Label" for="docIdentidad_1" class="docId01Label01 docId01Label02 docId01Label03 docId01Label04">Documento identidad *</label>';
        echo '                  <input id="docIdentidad_1" type="text" maxlength="256" name="bdocumentid[0]" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="nombre_1" class="containerinputPurple dis">';
        echo '                  <label id="primerNombre_1Label" for="primerNombre_1" class="firstName01Label01 firstName01Label02 firstName01Label03 firstName01Label04">Primer Nombre*</label>';
        echo '                  <input type="text" id="primerNombre_1"  maxlength="256" name="bfirstname[0]" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="segundoNombre_1" class="containerinputPurple dis">';
        echo '                  <label id="segundoNombre_2Label" for="segundoNombre_2" class="middleName01Label01 middleName01Label02 middleName01Label03 middleName01Label04">Segundo Nombre</label>';
        echo '                  <input type="text" id="segundoNombre_2" maxlength="256" name="bmiddlename[0]" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="tarjeta" class="containerinputPurple dis">';
        echo '                  <label id="numTarjetaLabel" for="numTarjeta" class="cardNumber01">Numero de tarjeta</label>';
        echo '                  <input type="text" id="numTarjeta" name="ccnumber" value="'.$getparty['ccnumber'].'" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);">';
        echo '              </div>';
        echo '              <div id="tipoTarjeta" class="containerinputPurple dis">';
        echo '                  <label id="selectCctypeLabel" for="selectCctype"></label>';
        echo '                  <select id="selectCctype" name="cctype" class="optionsPurple" onfocus="actionFocusSel(this, \'72px\', \'remittance\', \'select\')" onfocusout="actionFocusOutSel(this, \'87px\', \'remittance\', \'select\')">';
        echo '                      <option value="0"></option>';
                                    for ($i=0; $i < count($creditcard["list"]); $i++) { 
                                        $selected = '';
                                        if($creditcard["list"][$i]["code"] == $getparty["cctype"]){  
                                            $selected = 'selected';
                                        }
        echo '                      <option  id="'.$creditcard["list"][$i]["code"].'" value="'.$creditcard["list"][$i]["code"].'" '.$selected.'>'.$creditcard["list"][$i]["name"].'</option>';
                                    }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div id="fecha" class="containerinputPurple dis">';
        echo '                  <label id="fecvenmLabel" for="fecvenm" class="expDateMonthLabel01">Numero de tarjeta</label>';
        echo '                  <input type="text" id="fecvenm" name="fecvenm"  value="'.$getparty['ccexpmonth'].'" class="mid__form" maxlength="2" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">';
        echo '                  <label id="fecvenaLabel" for="fecvena" class="expDateYearLabel01">Numero de tarjeta</label>';
        echo '                  <input type="text" id="fecvena" name="fecvena"  value="'.$getparty['ccexpyear'].'" class="mid__form" maxlength="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">';
        echo '              </div>';
        echo '              <div id="validacion" class="containerinputPurple dis">';
        echo '                  <label id="codValidacionLabel" for="codValidacion" class="validationCodeLabel01">codigo validacion</label>';
        echo '                  <input type="text" id="codValidacion"  name="cccvc" value="'.$getparty['cccvc'].'" class="optionsPurple" maxlength="3" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">';
        echo '              </div>';
        echo '          </div>';
        //---------------------------------------4----------------------------------------------//
        echo '          <div class="containerformPurple dis pagina_four">';
        echo '              <div id="beneficiario_1" class="containerinputPurpleBeneficiary dis">';
        echo '                  <label id="selectBeneficiario_2Label" for="selectBeneficiario_2"></label>';
        echo '                  <select id="selectBeneficiario_2" name="beneficiario[1]" class="optionsPurple" onfocus="actionFocusSel(this, \'2px\', \'remittance\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'remittance\', \'select\')">';
        echo '                      <option value="0"></option>';
        echo '                  </select>';
        echo '                  <img id="beneficiaryThirdStep" class="handCursor" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
        echo '                  <img id="beneficiaryThirdStepSecond" class="handCursor dis" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
        echo '              </div>';
        echo '              <div id="cntDocId02" class="containerinputPurple dis">';
        echo '                  <label id="docIdentidad_2Label" for="docIdentidad_2" class="docId02Label01 docId02Label02 docId02Label03 docId02Label04">Documento identidad *</label>';
        echo '                  <input id="docIdentidad_2" type="text" maxlength="256" name="bdocumentid[1]" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="nombre" class="containerinputPurple dis">';
        echo '                <label id="primerNombre_2Label" for="primerNombre_2" class="firstName02Label01 firstName02Label02 firstName02Label03 firstName02Label04">Primer Nombre *</label>';
        echo '                  <input  type="text" id="primerNombre_2" maxlength="256" name="bfirstname[1]" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="segundoNombre" class="containerinputPurple dis">';
        echo '                  <label id="segundoNombre_3Label" for="segundoNombre_3 class="middleName02Label01 middleName02Label02 middleName02Label03 middleName02Label04">Segundo Nombre</label>';
        echo '                  <input type="text" id="segundoNombre_3" maxlength="256" name="bmiddlename[1]" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="primerApellido" class="containerinputPurple dis">';
        echo '                  <label id="primerApellido_0Label" for="primerApellido_0" class="lastName01Label01 lastName01Label02 lastName01Label03 lastName01Label04">Primer Apellido*</label>';
        echo '                  <input type="text"  id="primerApellido_0" maxlength="256" name="blastname[0]" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="segundoApellido" class="containerinputPurple dis">';
        echo '                  <label id="segundoApellido_1Label" for="segundoApellido_1" class="secondLastName01Label01 secondLastName01Label02 secondLastName01Label03 secondLastName01Label04">Segundo Apellido</label>';
        echo '                  <input type="text" id="segundoApellido_1" maxlength="256" name="bsecondlastaname[0]" placeholder="" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="direccion_1" class="containerinputPurple dis">';
        echo '                  <label id="direccion_3Label" for="direccion_3" class="address01Label01 address01Label02 address01Label03 address01Label04">Direccion*</label>';
        echo '                  <input type="text" id="direccion_3" maxlength="256" name="dir0" placeholder="" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="email_1" class="containerinputPurple dis">';
        echo '                  <label id="email_5Label" for="email_5" class="email01Label01 email01Label02 email01Label03 email01Label04">Email</label>';
        echo '                  <input type="text" id="email_5" maxlength="256" name="email0" class="optionsPurple">';
        echo '              </div>';
        echo '          </div>';
        //---------------------------------------5----------------------------------------------//
        echo '          <div class="containerformPurple dis pagina_five">';
        echo '              <div id="primerApellido_1" class="containerinputPurple dis">';
        echo '                  <label id="primerApellido_2Label" for="primerApellido_2" class="lastName02Label01 lastName02Label02 lastName02Label03 lastName02Label04">Primer Apellido *</label>';
        echo '                  <input type="text" id="primerApellido_2" maxlength="256" name="blastname[1]" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="segundoApellido1" class="containerinputPurple dis">';
        echo '                  <label id="segundoApellido_2Label" for="segundoApellido_2" class="secondLastName02Label01 secondLastName02Label02 secondLastName02Label03 secondLastName02Label04">Segundo Apellido</label>';
        echo '                  <input type="text" id="segundoApellido_2" maxlength="256" name="bsecondlastaname[1]" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="direccion" class="containerinputPurple dis">';
        echo '                  <label id="direccion_2Label" for="direccion_2" class="address02Label01 address02Label02 address02Label03 address02Label04">Direccion</label>';
        echo '                  <input type="text" id="direccion_2" maxlength="256" name="dir1" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="email" class="containerinputPurple dis">';
        echo '                 <label id="email_2Label" for="email_2" class="email02Label01 email02Label02 email02Label03 email02Label04">Email</label>';
        echo '                  <input type="text" id="email_2" maxlength="256" name="email1" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="cntTelefono" class="containerinputPurple dis">';
        echo '                  <label id="telefonoLabel" for="telefono" class="phone01Label01 phone01Label02 phone01Label03 phone01Label04">Telefono</label>';
        echo '                  <input type="text" id="telefono" maxlength="256" name="telefono1" class="optionsPurple" onkeypress="return valideKey(event);">';
        echo '              </div>';
        echo '              <div id="cntBanco_1" class="containerinputPurple dis">';
        echo '                  <label id="banco_1Label" for="banco_1" class="bbank01Label01 bbank01Label02 bbank01Label03 bbank01Label04 bbank01Label05">banco</label>';
        echo '                  <input type="text" id="banco_1" maxlength="256" name="bbank[0]" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="cntCuenta_1" class="containerinputPurple dis">';
        echo '                  <label id="cuenta_1Label" for="cuenta_1" class="accNumber02Label01 accNumber02Label02 accNumber02Label03 accNumber02Label04">cuenta *</label>';
        echo '                  <input type="text" id="cuenta_1" name="bacc[1]"  class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);">';
        echo '              </div>';
        echo '          </div>';
        //---------------------------------------6----------------------------------------------//
        echo '          <div class="containerformPurple dis pagina_six">';
        echo '              <div id="cntTelefono_1" class="containerinputPurple dis">';
        echo '                  <label id="telefono_1Label" for="telefono_1" class="phone02Label01 phone02Label02 phone02Label03 phone02Label04">Telefono</label>';
        echo '                  <input type="text" id="telefono_1" maxlength="256" name="tlf" class="optionsPurple" onkeypress="return valideKey(event);">';
        echo '              </div>';
        echo '              <div id="cntBanco_2" class="containerinputPurple dis">';
        echo '                  <label id="banco_2Label" for="banco_2" class="bbank02Label01 bbank02Label02 bbank02Label03 bbank02Label04 bbank02Label05">banco beneficiario*</label>';
        echo '                  <input type="text" id="banco_2" maxlength="256" name="bbank[1]" class="optionsPurple">';
        echo '              </div>';
        echo '              <div id="cntCuenta_2" class="containerinputPurple dis">';
        echo '                  <label id="cuenta_2Label" for="cuenta_2" class="accNumber03Label01 accNumber03Label02 accNumber03Label03 accNumber03Label04"></label>';
        echo '                  <input type="text" id="cuenta_2" name="bacc[2]"  class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);">';
        echo '              </div>';
        echo '          </div>';
        echo '          <p id="buttonOk" class="okText" onclick="validateEncomienda()">Ok</p>';
        echo '          <div id="modal" class="ventana dis">';
        echo '              <h1 id="resumenOp" class="title">RESUMEN DE OPERACION</h1>';
        echo '              <h2 id="montoEnviaDivisa" class="sub_title">MONTO DIVISA A ENVIAR</h2>';
        echo '              <p id="winMont" class="txt"></p>';
        echo '              <h2 id="txtusdcommission" class="credit_card"></h2>';
        echo '              <p id="usdcommission" class="txt_a"></p>';
        echo '              <h2 id="tasa_2" class="tasa">TASA CAMBIO</h2>';
        echo '              <p id="usdrate" class="txt_b"></p>';
        echo '              <h2 id="txtvescommission" class="gastos"></h2>';
        echo '              <p id="vescommission" class="txt_c"></p>';
        echo '              <h2 id="totalEnviar" class="pagar">TOTAL ENVIAR</h2>';
        echo '              <p id="totalves" class="txt_d"></p>';
        echo '              <img src="./img/icons/purpleOk.png" class="img" onclick="ventanaToggle(\'add\')">';
        echo '           </div>';
        echo '  </form>';

        if(isset($_SESSION['message7001'])){
            echo '<div id="requiredDocuments" class="requiredOff">'
                .'   <label id="docListPenLabel" for="docListPen"></label>'
                .'   <select id="docListPen" name="docListPen" class="selDoc optionsPurple" onfocus="actionFocusSel(this, \'10px\', \'remittance\', \'select\')" onfocusout="actionFocusOutSel(this, \'27px\', \'remittance\', \'select\')">'                
                .'      <option value="-1" ></option>';
                        for ($i=0; $i < count($documents["list"]); $i++) { 
            echo '      <option data-id="'.$documents["list"][$i]["id"].'" value="'.$documents["list"][$i]["id"].'">'.$documents["list"][$i]["name"].'</option>';
                        }
            echo '   </select>'
                .'</div>';
            echo '<div id="actionDoc">'
                .'   <div id="penAction" class="off"><img src="./img/icons/pencil.svg" class="icon ico-light-purple"></div>'
                .'   <div id="docAction" class="off">'
                .'      <form id="docUploadForm" action="./form/message_otc.php" method="POST" enctype="multipart/form-data">'
                .'         <label class="labelFile" for="uploadDoc"><img src="./img/icons/upload2.svg" class="icon ico-light-purple"></label>'
                .'         <input type="file" name="uploadDoc" id="uploadDoc" />'
                .'         <input type="hidden" name="docNum" id="docNum" >'
                .'      </form>'
                .'   </div>'
                .'</div>';
        }
        
        self::artiSendMail('purple');

    } // form encomienda

    /*=======================================================================
    Function: hexagons Tarjeta de Credito
    Description: construction of hexagons for Credito
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 12/11/2021
    ===================================================================== */
    static function hexagonsTarjetadeCredito(){

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[2][8] = new hexagon('new_hexagon','');
        $colums[2][8] = $colums[2][8]->getHexa();

        $colums[2][9] = new hexagon('button_three','');
        $colums[2][9] = $colums[2][9]->getHexa();

        $colums[3][9] = new hexagon('new_hexagon','<img src="./img/icons/ok.png" class="rotate">');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[4][8] = new hexagon('new_hexagon','');
        $colums[4][8] = $colums[4][8]->getHexa();

        $colums[4][9] = new hexagon('button_one','');
        $colums[4][9] = $colums[4][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="feedHexa">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
    } // hexagons Tarjeta de Credito

    /*=======================================================================
    Function: form Tarjeta de Credito
    Description: construction of form form Tarjeta de Credito
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 12/11/2021
    ===================================================================== */
    static function formTarjetadeCredito(){

        echo '  <form class="formContainer">';
        echo '      <div class="formContainera">';
        echo '          <div class="pagina pagina_one">';
        echo '              <select id="Sexo" class="options">';
        echo '                  <option value="0" >DOCUMENTOS</option>';
        echo '              </select>';
        echo '          </div>';
        echo '      </div>';
        echo '  </form>';
        
        self::artiSendMail('blue');

    } // form Tarjeta de Credito

    /*=======================================================================
    Function: hexagons Tarjeta de Debito
    Description: construction of hexagons for Tarjeta de Debito
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 15/11/2021
    ===================================================================== */
    static function hexagonsTarjetadeDebito(){

        echo  ' <LINK rel="stylesheet" type="text/css" href="css/services/bankInfo.css"> ';

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[2][8] = new hexagon('new_hexagon','');
        $colums[2][8] = $colums[2][8]->getHexa();

        $colums[2][9] = new hexagon('button_three','');
        $colums[2][9] = $colums[2][9]->getHexa();

        $colums[3][9] = new hexagon('new_hexagon','<img src="./img/icons/ok.png" class="rotate">');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[4][8] = new hexagon('new_hexagon','');
        $colums[4][8] = $colums[4][8]->getHexa();

        $colums[4][9] = new hexagon('button_one','');
        $colums[4][9] = $colums[4][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="feedHexa">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
    } // hexagons Tarjeta de Debito

    /*=======================================================================
    Function: form Tarjeta de Debito
    Description: construction of form Tarjeta de Debito
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 15/11/2021
    ===================================================================== */
    static function formTarjetadeDebito($language, $idlead){

        $documents = '';
        if(isset($_SESSION['docpend'])){
            if(strlen($_SESSION['docpend']) > 0){
                if(isset($_SESSION['typeNum'])){
                    $listDoc = explode(",",$_SESSION['docpend']);
                    $keyDoc = array_search($_SESSION['typeNum'], $listDoc);
                    
                    unset($listDoc[$keyDoc]);
                    $preList = array_values($listDoc);
                    $_SESSION['docpend'] = implode(",", $preList);

                    unset($_SESSION['typeNum']);
                }

                $documents = xclient::getcompliancedoctypeparaml($language, $idlead, $_SESSION['docpend']);

                if(is_null($documents['list'])){
                    unset($_SESSION['docpend']);
                    unset($_SESSION['message7001']);
                    unset($_SESSION['urlTo']);
                }
            }else{
                unset($_SESSION['docpend']);
                unset($_SESSION['message7001']);
                unset($_SESSION['urlTo']);
            }
        }

        if(isset($_SESSION['message7001'])){
            echo '<div id="requiredDocuments" class="requiredOff">'
                .'   <label id="docListPenLabel" for="docListPen"></label>'
                .'   <select id="docListPen" name="docListPen" class="selDoc optionsPurple" style="background-color: #cc9ecc;" onfocus="actionFocusSel(this, \'10px\', \'remittance\', \'select\')" onfocusout="actionFocusOutSel(this, \'27px\', \'remittance\', \'select\')">'                
                .'      <option value="-1" ></option>';
                        for ($i=0; $i < count($documents["list"]); $i++) { 
            echo '      <option data-id="'.$documents["list"][$i]["id"].'" value="'.$documents["list"][$i]["id"].'">'.$documents["list"][$i]["name"].'</option>';
                        }
            echo '   </select>'
                .'</div>';
            echo '<div id="actionDoc">'
                .'   <div id="penAction" class="off"><img src="./img/icons/pencil.svg" class="icon ico-light-purple"></div>'
                .'   <div id="docAction" class="off">'
                .'      <form id="docUploadForm" action="./form/message_otc.php" method="POST" enctype="multipart/form-data">'
                .'         <label class="labelFile" for="uploadDoc"><img src="./img/icons/upload2.svg" class="icon ico-light-purple"></label>'
                .'         <input type="file" name="uploadDoc" id="uploadDoc" />'
                .'         <input type="hidden" name="docNum" id="docNum" >'
                .'      </form>'
                .'   </div>'
                .'</div>';
        }

        self::artiSendMail('blue');

    } // form Tarjeta de Debito

    /*=======================================================================
    Function: hexagons Transferencia
    Description: construction of hexagons for Transferencia
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 15/11/2021
    ===================================================================== */
    static function hexagonsTransferencia(){

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[2][8] = new hexagon('white new_hexagon','');
        $colums[2][8] = $colums[2][8]->getHexa();

        $colums[2][9] = new hexagon('button_seven','');
        $colums[2][9] = $colums[2][9]->getHexa();

        $colums[2][10] = new hexagon('dis button_eight','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][10] = $colums[2][10]->getHexa();

        $colums[2][11] = new hexagon('dis button_nine','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][11] = $colums[2][11]->getHexa();

        $colums[2][12] = new hexagon('dis button_ten','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][12] = $colums[2][12]->getHexa();

        $colums[2][13] = new hexagon('dis button_eleven','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][13] = $colums[2][13]->getHexa();

        $colums[2][14] = new hexagon('dis button_twelve','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][14] = $colums[2][14]->getHexa();

        $colums[2][15] = new hexagon('dis button_thirteen','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][15] = $colums[2][15]->getHexa();

        $colums[3][9] = new hexagon('white new_hexagon','');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[4][8] = new hexagon('white new_hexagon','');
        $colums[4][8] = $colums[4][8]->getHexa();

        $colums[4][9] = new hexagon('button_one idNeed','<img src="./img/icons/arrowNext.png" class="rotate">');
        $colums[4][9] = $colums[4][9]->getHexa();

        $colums[4][10] = new hexagon('button_two dis','<img src="./img/icons/arrowNext.png" id="nextStepTwo" class="rotate">');
        $colums[4][10] = $colums[4][10]->getHexa();

        $colums[4][11] = new hexagon('button_three dis','<img src="./img/icons/arrowNext.png" id="nextStep" class="rotate">');
        $colums[4][11] = $colums[4][11]->getHexa();

        $colums[4][12] = new hexagon('button_four dis','<img src="./img/icons/arrowNext.png" class="rotate">');
        $colums[4][12] = $colums[4][12]->getHexa();

        $colums[4][13] = new hexagon('button_five dis','<img src="./img/icons/arrowNext.png" class="rotate">');
        $colums[4][13] = $colums[4][13]->getHexa();

        $colums[4][14] = new hexagon('button_six dis','<img src="./img/icons/arrowNext.png" class="rotate">');
        $colums[4][14] = $colums[4][14]->getHexa();

        $colums[4][15] = new hexagon('button_fourteen dis','');
        $colums[4][15] = $colums[4][15]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].$colums[2][10].$colums[2][11].$colums[2][12].$colums[2][13].$colums[2][14].$colums[2][15].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].$colums[4][10].$colums[4][11].$colums[4][12].$colums[4][13].$colums[4][14].$colums[4][15].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

        self::stepsChanger();
    } // hexagons Transferencia

    /*=======================================================================
    Function: form Transferencia
    Description: construction of form Transferencia
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2/11/2021
    ===================================================================== */
    static function formTransferencia($language, $idlead){
        $country = xclient::getallcountrydetaill($language, $idlead);
        $coin = xclient::getcurrencytrl($language, $idlead);
        $pay = xclient::getclearencetypel($language, $idlead);
        $acounts = xclient::geticccbankl($language, $idlead);
        $card = xclient::getcreditcardtypel($language, $idlead);
        
        $documents = '';
        if(isset($_SESSION['docpend'])){
            if(strlen($_SESSION['docpend']) > 0){
                if(isset($_SESSION['typeNum'])){
                    $listDoc = explode(",",$_SESSION['docpend']);
                    $keyDoc = array_search($_SESSION['typeNum'], $listDoc);
                    
                    unset($listDoc[$keyDoc]);
                    $preList = array_values($listDoc);
                    $_SESSION['docpend'] = implode(",", $preList);

                    unset($_SESSION['typeNum']);
                }

                $documents = xclient::getcompliancedoctypeparaml($language, $idlead, $_SESSION['docpend']);

                if(is_null($documents['list'])){
                    unset($_SESSION['docpend']);
                    unset($_SESSION['message7001']);
                    unset($_SESSION['urlTo']);
                }
            }else{
                unset($_SESSION['docpend']);
                unset($_SESSION['message7001']);
                unset($_SESSION['urlTo']);
            }
        }

        $monto = '';
        $remittance = '';

        $withoutBlocking = 'class="optionsPurple"'; 
        $withBlocking = 'class="optionsPurple purple" readonly';
        ?>
        <script>
            let disableAction = false;
        </script>
        <?php
        if(isset($_SESSION["monto"])){
            $monto = $_SESSION["monto"];
            $remittance = $_SESSION["remittance"];
            ?>
            <script>
                disableAction = true;
            </script>
            <?php
        }

        echo '  <form class="formContainer" id="formTransferencia" method="POST">';
        echo '          <div class="containerformPurple pagina_one">';
        echo '              <div class="containerinputPurple" name="amount" id="contMonto">';
        echo '                  <label id="montoLabel" for="monto">AMOUNT</label>';
        echo '                  <input type="text" maxlength="256" name="amount" ';
        echo $monto != '' ? $withBlocking : $withoutBlocking;
        echo '                   id="monto" onkeypress="return valideKey(event);" value="'.$monto.'" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple id="contasd">';
        echo '                  <label id="countryLabel" for="country"></label>';
        echo '                  <select id="country" name="idcountry" class="optionsPurple" onfocus="actionFocusSel(this, \'72px\', \'transfer\', \'select\')" onfocusout="actionFocusOutSel(this, \'87px\', \'transfer\', \'select\')">';
        echo '                      <option value="0"></option>';
                                for ($i=0; $i < count($country["list"]); $i++) { 
        echo '                      <option id="'.$country["list"][$i]["id"].'" value="'.$country["list"][$i]["id"].'">'.$country["list"][$i]["name"].'</option>';
                                }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="coinLabel" for="coin"></label>';
        echo '                  <select id="coin" class="optionsPurple" name="idcurrency" onfocus="actionFocusSel(this, \'140px\', \'transfer\', \'select\')" onfocusout="actionFocusOutSel(this, \'156px\', \'transfer\', \'select\')">';
        echo '                      <option value="0" ></option>';
                                for ($i=0; $i < count($coin["list"]); $i++) { 
        echo '                      <option id="'.$coin["list"][$i]["id"].'" value="'.$coin["list"][$i]["id"].'">'.$coin["list"][$i]["iso"].'</option>';
                                }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple" >';
        echo '                  <label id="idPayLabel" for="idPay"></label>';
        echo '                  <select id="idPay"';
        echo $remittance != '' ? $withBlocking : $withoutBlocking;
        echo '                   name="idclearencetype" onfocus="actionFocusSel(this, \'212px\', \'transfer\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'transfer\', \'select\')">';
        echo '                      <option value="0" ></option>';
                                for ($i=0; $i < count($pay["list"]); $i++) { 
                                    $selected = '';
                                    if($pay["list"][$i]["id"] == $remittance){
                                        $selected = 'selected';
                                    }
        echo '                      <option id="'.$pay["list"][$i]["id"].'" value="'.$pay["list"][$i]["id"].'" '.$selected.'>'.$pay["list"][$i]["name"].'</option>';
                                }   
        echo '                  </select>';
        echo '               </div>';
        echo '          </div>';
        /*-------------------------------ACH--------------------------------------------------------*/
        echo '      <div id="ACH">';
         /*-----------------------------------2-----------------------------*/
        echo '          <div class="containerformPurple dis pagina_two_ACH">';
        echo '              <div class="containerinputPurple">';
        echo '                  <input type="text" maxlength="256" id="tasa_1" name="tasaCambio" placeholder="TASA CAMBIO" class="optionsPurple purple white-font" readonly>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <input type="text" maxlength="256" id="monto_1" name="monto" placeholder="MONTO BS." class="optionsPurple purple white-font" readonly>';  
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="banco_1Label" for="banco_1">BANK</label>';
        echo '                  <input type="text" maxlength="256" id="banco_1" name="bank" class="optionsPurple" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';  
        echo '              </div>';
        echo '              <div class="containerinputPurple" id="transCuenta">';
        echo '                  <label id="cuenta_1Label" for="cuenta_1">ACCOUNT</label>';
        echo '                  <input type="text" id="cuenta_1" name="cuenta"  class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';  
        echo '              </div>';
        echo '           </div>';
        //-------------------------------------3------------------------------
        echo '          <div class="containerformPurple dis pagina_three_ACH">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="routingLabel" for="routing">Routing</label>';
        echo '                  <input type="text" maxlength="256" id="routing" name="routing" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurpleBeneficiary">';
        echo '                  <label id="transBeneficiario_1Label" for="transBeneficiario_1" class="transBeneficiario_1Label01 transBeneficiario_1Label02"></label>';
        echo '                  <select id="transBeneficiario_1" class="optionsPurple" >';
        echo '                      <option value="0" ></option>';
        echo '                  </select>';
        echo '                  <img id="beneficiaryInACH" class="handCursor" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
        echo '                  <img id="beneficiaryOutACH" class="handCursor dis" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
        echo '              </div>';
        echo '              <div id="id_1" class="containerinputPurple">';
        echo '                  <label id="documentoIdentidad_1Label" for="documentoIdentidad_1">Documento Identidad*</label>';
        echo '                  <input type="text" maxlength="256" id="documentoIdentidad_1" name="bdocumentid[0]" class="optionsPurple"  onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')" >';  
        echo '              </div>';
        echo '              <div id="firstName" class="containerinputPurple">';
        echo '                  <label id="primerNombre_1Label" for="primerNombre_1">Primer Nombre*</label>';
        echo '                  <input type="text" maxlength="256" id="primerNombre_1" name="bfirstname[0]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
        echo '              </div>';
        echo '          </div>';
        //--------------------------------------4-----------------------------
        echo '          <div class="containerformPurple dis pagina_four_ACH">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="segundoNombre_1Label" for="segundoNombre_1">Segundo Nombre</label>';
        echo '                  <input type="text" maxlength="256" id="segundoNombre_1" name="bmiddlename[0]" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="primerApellido_1Label" for="primerApellido_1">Primer Apellido*</label>';
        echo '                  <input type="text" maxlength="256" id="primerApellido_1" name="blastname[0]" class="optionsPurple" onfocus="actionFocus(this, \'72px\', \'venta\')" onfocusout="actionFocusOut(this, \'87px\', \'venta\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="segundoApellido_1Label" for="segundoApellido_1">Segundo Apellido*</label>';
        echo '                  <input type="text" maxlength="256" id="segundoApellido_1" name="bsecondlastname[0]" class="optionsPurple" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="direccion_1Label" for="direccion_1">Direccion*</label>';
        echo '                  <input type="text" maxlength="256" id="direccion_1" name="baddress[0]" class="optionsPurple"  onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
        echo '              </div>';
        echo '          </div>';
        //--------------------------------------5------------------------------
        echo '          <div class="containerformPurple dis pagina_five_ACH">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="email_1Label" for="email_1">Email</label>';
        echo '                  <input type="text" maxlength="256" id="email_1" name="email" class="optionsPurple"  onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="telefono_1Label" for="telefono_1">Teléfono</label>';
        echo '                  <input type="text" maxlength="256" id="telefono_1" name="telefono" class="optionsPurple" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="bancoBeneficiario_1Label" for="bancoBeneficiario_1">Banco*</label>';
        echo '                  <input type="text" maxlength="256" id="bancoBeneficiario_1" name="bbank[0]" class="optionsPurple"  onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="ctaBeneficiario_1Label" for="ctaBeneficiario_1">Cuenta*</label>';
        echo '                  <input type="text" name="bacc[0]" id="ctaBeneficiario_1" class="optionsPurple" maxlength="32"    onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
        echo '              </div>';
        echo '          </div>';
        //---------------------------------------6------------------------------
        echo '          <div class="containerformPurple dis pagina_six_ACH">';
        echo '              <div class="container">';
        echo '                  <label id="paisBanco_1Label" for="paisBanco_1">Pais Banco*</label>';
        echo '                  <input type="text" maxlength="256" id="paisBanco_1" name="bbankcountry[0]" class="inside_left" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
        echo '                  <label id="ciudadBanco_1Label" for="ciudadBanco_1">Ciudad Banco*</label>';
        echo '                  <input type="text" maxlength="256" id="ciudadBanco_1" name="bbankcity[0]" class="inside_right" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')" >';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="direccionBanco_1Label" for="direccionBanco_1">Dirección Banco*</label>';
        echo '                  <input type="text" maxlength="256" id="direccionBanco_1" name="bbankaddress[0]" class="optionsPurple" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="aba_1Label" for="aba_1">ABA/SWIFT/IBAN*</label>';
        echo '                  <input type="text" maxlength="256" id="aba_1"name="bbankabaswiftiban[0]" class="optionsPurple" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')" >';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="bancoInter_1Label" for="bancoInter_1">Banco Intermediario</label>';
        echo '                  <input type="text" maxlength="256" id="bancoInter_1" name="ibbank[0]" class="optionsPurple"   onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
        echo '              </div>';
        echo '          </div>';
        //---------------------------------------7------------------------------
        echo '          <div class="containerformPurple dis pagina_seven_ACH">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="cuentaInter_1Label" for="cuentaInter_1">Cuenta Intermediario</label>';
        echo '                  <input type="text" name="ibacc[0]" id="cuentaInter_1" class="optionsPurple" maxlength="32" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="container">';
        echo '                  <label id="paisInter_1Label" for="paisInter_1">Pais Intermediario</label>';
        echo '                  <input type="text" maxlength="256" id="paisInter_1" name="ibbankcountry[0]" class=" inside_left" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
        echo '                  <label id="ciudadInter_1Label" for="ciudadInter_1">Ciudad Intermediario</label>';
        echo '                  <input type="text" maxlength="256" id="ciudadInter_1" name="ibbankcity[0]" class=" inside_right" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="direccionInter_1Label" for="direccionInter_1">Direccion Intermediario</label>';
        echo '                  <input type="text" maxlength="256" id="direccionInter_1" name="ibbankaddress[0]" class="optionsPurple"  onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="abaInter_1Label" for="abaInter_1">ABA/SWIFT/IBAN INTERMEDIARIO</label>';
        echo '                  <input type="text" maxlength="256" id="abaInter_1" name="ibbankabaswifiban[0]" class="optionsPurple"  onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
        echo '              </div>';
        echo '          </div>';
        echo '    </div>';
        //-------------------------------Deposito en Cuenta-----Pago movil---------------------------------------------------
        echo '      <div id="depositoCta" class="dis">';
        //-----------------------------------2----------------------------------
        echo '          <div class="containerformPurple dis pagina_two_depCta">';
        echo '              <div class="containerinputPurple">';
        echo '                  <input type="text" maxlength="256" id="tasa_2" name="tasaCambio" placeholder="TASA DE CAMBIO" class="optionsPurple purple white-font" readonly>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <input type="text" maxlength="256" id="monto_2" name="monto" placeholder="MONTO" class="optionsPurple purple white-font" readonly>';  
        echo '              </div>';
        
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="transCtaReceptoraLabel" for="transCtaReceptora"></label>';
        echo '                  <select id="transCtaReceptora" name="acc" class="optionsPurple" onfocus="actionFocusSel(this, \'140px\', \'transfer\', \'select\')" onfocusout="actionFocusOutSel(this, \'156px\', \'transfer\', \'select\')">';
        echo '                      <option value="0"> </option>';
                                    for ($i=0; $i < count($acounts["list"]); $i++) { 
        echo '                      <option id="'.$acounts["list"][$i]["id"].'" value="'.$acounts["list"][$i]["id"].'">'.$acounts["list"][$i]["name"].'</option>';
            }   
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="referencia_1Label" for="referencia_1">Referencia</label>';
        echo '                  <input type="text" maxlength="256" id="referencia_1" name="reference[0]" class="optionsPurple"  onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';  
        echo '              </div>';
        echo '           </div>';
        //-------------------------------------3--------------------
        echo '          <div class="containerformPurple dis pagina_three_depCta">';
        echo '              <div class="containerinputPurpleBeneficiary">';
        echo '                  <label id="transBeneficiario_2Label" for="transBeneficiario_2"></label>';
        echo '                  <select class="optionsPurple" id="transBeneficiario_2" onfocus="actionFocusSel(this, \'2px\', \'transfer\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'transfer\', \'select\')">';
        echo '                      <option value="0"></option>';
        echo '                  </select>';
        echo '                  <img id="beneficiaryInBank" class="handCursor" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
        echo '                  <img id="beneficiaryOutBank" class="handCursor dis" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
        echo '              </div>';
        echo '              <div id="id_2" class="containerinputPurple">';
        echo '                  <label id="documentoIdentidad_2Label" for="documentoIdentidad_2">Documento Identidad*</label>';
        echo '                  <input type="text" maxlength="256" id="documentoIdentidad_2" name="bdocumentid[1]" class="optionsPurple"  onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')" >';  
        echo '              </div>';
        echo '              <div id="firstNameDeposit" class="containerinputPurple">';
        echo '                  <label id="primerNombre_2Label" for="primerNombre_2">Primer Nombre*</label>';
        echo '                  <input type="text" maxlength="256" id="primerNombre_2" name="bfirstname[1]" class="optionsPurple"  onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div id="secondNameDeposit" class="containerinputPurple">';
        echo '                  <label id="segundoNombre_2Label" for="segundoNombre_2">Segundo Nombre</label>';
        echo '                  <input type="text" maxlength="256" id="segundoNombre_2" name="bmiddlename[1]" class="optionsPurple"  onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
        echo '              </div>';
        echo '          </div>';
        //--------------------------------------4-----------------------------
        echo '          <div class="containerformPurple dis pagina_four_depCta">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="primerApellido_2Label" for="primerApellido_2">Primer Apellido*</label>';
        echo '                  <input type="text" maxlength="256" id="primerApellido_2" name="blastname[1]" class="optionsPurple"  onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="segundoApellido_2Label" for="segundoApellido_2">Segundo Apellido</label>';
        echo '                  <input type="text" maxlength="256" id="segundoApellido_2" name="bsecondlastname[1]" class="optionsPurple"  onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="direccion_2Label" for="direccion_2">Direccion*</label>';
        echo '                  <input type="text" maxlength="256" id="direccion_2" name="baddress[1]" class="optionsPurple"  onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="email_2Label" for="email_2">Email</label>';
        echo '                  <input type="text" maxlength="256" id="email_2" name="email" class="optionsPurple"  onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
        echo '              </div>';
        echo '          </div>';
        //--------------------------------------5------------------------------
        echo '          <div class="containerformPurple dis pagina_five_depCta">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="telefono_2Label" for="telefono_2">Teléfono</label>';
        echo '                  <input type="text" maxlength="256" id="telefono_2" name="telefono" class="optionsPurple" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="bancoBeneficiario_2Label" for="bancoBeneficiario_2">Banco*</label>';
        echo '                  <input type="text" maxlength="256" id="bancoBeneficiario_2" name="bbank[1]" class="optionsPurple"  onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')" >';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="ctaBeneficiario_2Label" for="ctaBeneficiario_2">Cuenta*</label>';
        echo '                  <input type="text" name="bacc[1]" id="ctaBeneficiario_2" class="optionsPurple" maxlength="32"  onfocus="actionFocus(this, \'145px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="container">';
        echo '                  <label id="paisBanco_2Label" for="paisBanco_2">Pais Banco*</label>';
        echo '                  <input type="text" maxlength="256" id="paisBanco_2" name="bbankcountry[1]" class="inside_left" onfocus="actionFocus(this, \'216px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
        echo '                  <label id="ciudadBanco_2Label" for="ciudadBanco_2">Ciudad Banco*</label>';
        echo '                  <input type="text" maxlength="256" id="ciudadBanco_2" name="bbankcity[1]" class="inside_right" onfocus="actionFocus(this, \'216px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
        echo '              </div>';
        echo '          </div>';
            //---------------------------------------6------------------------------
        echo '          <div class="containerformPurple dis pagina_six_depCta">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="direccionBanco_2Label" for="direccionBanco_2">Dirección Banco*</label>';
        echo '                  <input type="text" maxlength="256" id="direccionBanco_2" name="bbankaddress[1]" class="optionsPurple"  onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="aba_2Label" for="aba_2">ABA/SWIFT/IBAN*</label>';
        echo '                  <input type="text" maxlength="256" id="aba_2" name="bbankabaswiftiban[1]" class="optionsPurple"  onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="bancoInter_2Label" for="bancoInter_2">Banco Intermediario</label>';
        echo '                  <input type="text" maxlength="256" id="bancoInter_2" name="ibbank[1]" class="optionsPurple"  onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="cuentaInter_2Label" for="cuentaInter_2">Cuenta Intermediario</label>';
        echo '                  <input type="text" id="cuentaInter_2" name="ibacc[1]"  class="optionsPurple" maxlength="32"  onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
        echo '              </div>';
        echo '          </div>';
            //---------------------------------------7------------------------------
        echo '          <div class="containerformPurple dis pagina_seven_depCta">';
        echo '              <div class="container">';
        echo '                  <label id="paisInter_2Label" for="paisInter_2">Pais Intermediario</label>';
        echo '                  <input type="text" maxlength="256" id="paisInter_2" name="ibbankcountry[1]" class=" inside_left" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
        echo '                  <label id="ciudadInter_2Label" for="ciudadInter_2">Ciudad Intermediario</label>';
        echo '                  <input type="text" maxlength="256" id="ciudadInter_2" name="ibbankcity[1]" class=" inside_right" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="direccionInter_2Label" for="direccionInter_2">Direccion Intermediario</label>';
        echo '                  <input type="text" maxlength="256" id="direccionInter_2" name="ibbankaddress[1]" class="optionsPurple"  onfocus="actionFocus(this, \'102px\', \'transfer\')" onfocusout="actionFocusOut(this, \'117px\', \'transfer\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="abaInter_2Label" for="abaInter_2">ABA/SWIFT/IBAN INTERMEDIARIO</label>';
        echo '                  <input type="text" maxlength="256" id="abaInter_2" name="ibbankabaswifiban[1]" class="optionsPurple"   onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')"">';
        echo '              </div>';
        echo '           </div>';
        echo '    </div>';
        //-----------------------------------EFECTIVO--------------------------------------
        echo '   <div id="transEfectivo" class="dis">';
        //-----------------------------------2--------------------
       echo '          <div class="containerformPurple dis pagina_two_efect">';
       echo '              <div class="containerinputPurple">';
       echo '                  <input type="text" maxlength="256" id="tasa_3" name="tasaCambio" placeholder="TASA DE CAMBIO" class="optionsPurple purple white-font" readonly>';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <input type="text" maxlength="256" id="monto_3" name="monto" placeholder="MONTO" class="optionsPurple purple white-font" readonly>';  
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="referencia_2Label" for="referencia_2">Referencia</label>';
       echo '                  <input type="text" maxlength="256" id="referencia_2" name="reference[1]" class="optionsPurple" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';  
       echo '              </div>';
       echo '              <div class="containerinputPurpleBeneficiary">';
       echo '                  <label id="transBeneficiario_3Label" for="transBeneficiario_3"></label>';
       echo '                  <select class="optionsPurple" id="transBeneficiario_3" onfocus="actionFocusSel(this, \'212px\', \'transfer\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'transfer\', \'select\')">';
       echo '                      <option value="0" ></option>';
       echo '                  </select>';
       echo '                  <img id="beneficiaryInCash" class="handCursor" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
       echo '                  <img id="beneficiaryOutCash" class="handCursor dis" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
       echo '              </div>';
       echo '           </div>';
       //-------------------------------------3--------------------
       echo '          <div class="containerformPurple dis pagina_three_efect">';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="documentoIdentidad_3Label" for="documentoIdentidad_3">Documento Identidad*</label>';
       echo '                  <input type="text" maxlength="256" id="documentoIdentidad_3" name="bdocumentid[2]" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';  
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="primerNombre_3Label" for="primerNombre_3">Primer Nombre*</label>';
       echo '                  <input type="text" maxlength="256" id="primerNombre_3" name="bfirstname[2]" class="optionsPurple" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="segundoNombre_3Label" for="segundoNombre_3">Segundo Nombre</label>';
       echo '                  <input type="text" maxlength="256" id="segundoNombre_3" name="bmiddlename[2]" class="optionsPurple" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="primerApellido_3Label" for="primerApellido_3">Primer Apellido*</label>';
       echo '                  <input type="text" maxlength="256" id="primerApellido_3" name="blastname[2]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
       echo '              </div>';
       echo '          </div>';
       //--------------------------------------4-----------------------------
       echo '          <div class="containerformPurple dis pagina_four_efect">';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="segundoApellido_3Label" for="segundoApellido_3">Segundo Apellido</label>';
       echo '                  <input type="text" maxlength="256" id="segundoApellido_3" name="bsecondlastname[2]"  class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="direccion_3Label" for="direccion_3">Direccion*</label>';
       echo '                  <input type="text" maxlength="256" id="direccion_3" name="baddress[2]" class="optionsPurple" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="email_3Label" for="email_3">Email</label>';
       echo '                  <input type="text" maxlength="256" id="email_3" name="email" class="optionsPurple" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="telefono_3Label" for="telefono_3">Teléfono</label>';
       echo '                  <input type="text" maxlength="256" id="telefono_3" name="telefono" class="optionsPurple" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
       echo '              </div>';
       echo '          </div>';
       //--------------------------------------5------------------------------
       echo '          <div class="containerformPurple dis pagina_five_efect">';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="bancoBeneficiario_3Label" for="bancoBeneficiario_3">Banco*</label>';
       echo '                  <input type="text" maxlength="256" id="bancoBeneficiario_3" name="bbank[2]" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="ctaBeneficiario_3Label" for="ctaBeneficiario_3">Cuenta*</label>';
       echo '                  <input type="text" name="bacc[2]" id="ctaBeneficiario_3"  class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="container">';
       echo '                  <label id="paisBanco_3Label" for="paisBanco_3">Pais Banco*</label>';
       echo '                  <input type="text" maxlength="256" id="paisBanco_3" name="bbankcountry[2]" class="inside_left" onfocus="actionFocus(this, \'143px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
       echo '                  <label id="ciudadBanco_3Label" for="ciudadBanco_3">Ciudad Banco*</label>';
       echo '                  <input type="text" maxlength="256" id="ciudadBanco_3" name="bbankcity[2]" class="inside_right" onfocus="actionFocus(this, \'143px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="direccionBanco_3Label" for="direccionBanco_3">Dirección Banco*</label>';
       echo '                  <input type="text" maxlength="256" id="direccionBanco_3" name="bbankaddress[2]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
       echo '              </div>';
       echo '          </div>';
           //---------------------------------------6------------------------------
       echo '          <div class="containerformPurple dis pagina_six_efect">';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="aba_3Label" for="aba_3">ABA/SWIFT/IBAN*</label>';
       echo '                  <input type="text" maxlength="256" id="aba_3" name="bbankabaswiftiban[2]" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="bancoInter_3Label" for="bancoInter_3">Banco Intermediario</label>';
       echo '                  <input type="text" maxlength="256" id="bancoInter_3" name="bcoIntermediario" class="optionsPurple" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="cuentaInter_3Label" for="cuentaInter_3">Cuenta Intermediario</label>';
       echo '                  <input type="text" maxlength="256" id="cuentaInter_3" name="ibacc[2]" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'145px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="container">';
       echo '                  <label id="paisInter_3Label" for="paisInter_3">Pais Intermediario</label>';
       echo '                  <input type="text" maxlength="256" id="paisInter_3" name="ibbankcountry[2]" class=" inside_left" onfocus="actionFocus(this, \'214px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
       echo '                  <label id="ciudadInter_3Label" for="ciudadInter_3">Ciudad Intermediario</label>';
       echo '                  <input type="text" maxlength="256" id="ciudadInter_3" name="ibbankcity[2]" class=" inside_right" onfocus="actionFocus(this, \'214px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
       echo '              </div>';
       echo '          </div>';
           //---------------------------------------7------------------------------
       echo '          <div class="containerformPurple dis pagina_seven_efect">';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="direccionInter_3Label" for="direccionInter_3">Direccion Intermediario</label>';
       echo '                  <input type="text" maxlength="256"  id="direccionInter_3" name="ibbankaddress[2]" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="abaInter_3Label" for="abaInter_3">ABA/SWIFT/IBAN INTERMEDIARIO</label>';
       echo '                  <input type="text" maxlength="256" id="abaInter_3" name="ibbankabaswifiban[2]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
       echo '              </div>';
       echo '           </div>';
       echo '    </div>';
          //-----------------------------------TDC--------------------------------------
         echo '   <div id="transTDC" class="dis">';
          //-----------------------------------2----------------------------------
         echo '          <div class="containerformPurple dis pagina_two_tdc">';
         echo '              <div class="containerinputPurple">';
         echo '                  <input type="text" maxlength="256" id="tasa_4" name="tasaCambio" placeholder="TASA DE CAMBIO" class="optionsPurple purple white-font" readonly>';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <input type="text" maxlength="256" id="monto_4" name="monto" placeholder="MONTO" class="optionsPurple purple white-font" readonly>';  
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="transNumerotarjetaLabel" for="transNumerotarjeta">numero de tarjeta</label>';
         echo '                  <input id="transNumerotarjeta" type="text" name="" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="transTipoTarjetaLabel" for="transTipoTarjeta"></label>';
         echo '                  <select id="transTipoTarjeta" class="optionsPurple" onfocus="actionFocusSel(this, \'212px\', \'transfer\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'transfer\', \'select\')">';
         echo '                      <option value="0" ></option>';
                                     for ($i=0; $i < count($card["list"]); $i++) { 
         echo '                      <option id="'.$card["list"][$i]["id"].'" value="'.$card["list"][$i]["name"].'">'.$card["list"][$i]["name"].'</option>';
             }
         echo '                  </select>';
         echo '              </div>';
         echo '           </div>';
         //-------------------------------------3------------------------------
         echo '          <div class="containerformPurple dis pagina_three_tdc">';
         echo '              <div id="dateTdc" class="container">';
         echo '                  <label id="fVenMesLabel" for="fVenMes">FECHA VENC.MES</label>';
         echo '                  <input type="text" id="fVenMes" name="fVenMes" class="inside_left" maxlength="2" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
         echo '                  <label id="fVenAnioLabel" for="fVenAnio">FECHA VENC. AÑO</label>';
         echo '                  <input type="text" id="fVenAnio" name="fVenAnio" class="inside_right" maxlength="4" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="codigoValidacionLabel" for="codigoValidacion" class="codigoValidacionLabel01 codigoValidacionLabel02" >CODIGO DE VALIDACIÓN</label>';
         echo '                  <input type="text" id="codigoValidacion" name="codeValidacion" class="optionsPurple" maxlength="3" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">';
         echo '              </div>';
         echo '              <div class="containerinputPurpleBeneficiary">';
         echo '                  <label id="transBeneficiario_4Label" for="transBeneficiario_4" class="transBeneficiario_4Label01 transBeneficiario_4Label02"></label>';
         echo '                  <select class="optionsPurple" id="transBeneficiario_4">';
         echo '                      <option value="0" ></option>';
         echo '                  </select>';
         echo '                  <img id="beneficiaryInTdc" class="handCursor" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
         echo '                  <img id="beneficiaryOutTdc" class="handCursor dis" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
         echo '              </div>';
         echo '              <div id="id_4" class="containerinputPurple">';
         echo '                  <label id="documentoIdentidad_4Label" for="documentoIdentidad_4">Documento Identidad*</label>';
         echo '                  <input type="text" maxlength="256" id="documentoIdentidad_4" name="bdocumentid[3]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')" >';  
         echo '              </div>';
         echo '          </div>';
         //--------------------------------------4-----------------------------
         echo '          <div class="containerformPurple dis pagina_four_tdc">';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="primerNombre_4Label" for="primerNombre_4">Primer Nombre*</label>';
         echo '                  <input type="text" maxlength="256" id="primerNombre_4" name="bfirstname[3]" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="segundoNombre_4Label" for="segundoNombre_4">Segundo Nombre</label>';
         echo '                  <input type="text" maxlength="256" id="segundoNombre_4" name="bmiddlename[3]" class="optionsPurple" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="primerApellido_4Label" for="primerApellido_4">Primer Apellido*</label>';
         echo '                  <input type="text" maxlength="256" id="primerApellido_4" name="blastname[3]" class="optionsPurple" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="segundoApellido_4Label" for="segundoApellido_4">Segundo Apellido</label>';
         echo '                  <input type="text" maxlength="256" id="segundoApellido_4" name="bsecondlastname[3]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
         echo '              </div>';
         echo '          </div>';
         //--------------------------------------5------------------------------
         echo '          <div class="containerformPurple dis pagina_five_tdc">';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="direccion_4Label" for="direccion_4">Direccion*</label>';
         echo '                  <input type="text" maxlength="256" id="direccion_4" name="baddress[3]" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="email_4Label" for="email_4">Email</label>';
         echo '                  <input type="text" maxlength="256" id="email_4" name="email" class="optionsPurple" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="telefono_4Label" for="telefono_4">Teléfono</label>';
         echo '                  <input type="text" maxlength="256" id="telefono_4" name="telefono" class="optionsPurple" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="bancoBeneficiario_4Label" for="bancoBeneficiario_4">Banco</label>';
         echo '                  <input type="text" maxlength="256" id="bancoBeneficiario_4" name="bbank[3]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
         echo '              </div>';
         echo '          </div>';
             //---------------------------------------6------------------------------
         echo '          <div class="containerformPurple dis pagina_six_tdc">';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="ctaBeneficiario_4Label" for="ctaBeneficiario_4">Cuenta</label>';
         echo '                  <input type="text" name="bacc[3]" id="ctaBeneficiario_4"  class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="container">';
         echo '                  <label id="paisBanco_4Label" for="paisBanco_4">Pais Banco</label>';
         echo '                  <input type="text" maxlength="256" id="paisBanco_4" name="bbankcountry[3]" class="inside_left" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
         echo '                  <label id="ciudadBanco_4Label" for="ciudadBanco_4">Ciudad Banco</label>';
         echo '                  <input type="text" maxlength="256" id="ciudadBanco_4" name="bbankcity[3]" class="inside_right" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="direccionBanco_4Label" for="direccionBanco_4">Dirección Banco</label>';
         echo '                  <input type="text" maxlength="256" id="direccionBanco_4" name="bbankaddress[3]" class="optionsPurple" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="aba_4Label" for="aba_4">ABA/SWIFT/IBAN</label>';
         echo '                  <input type="text" maxlength="256" id="aba_4" name="bbankabaswiftiban[3]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
         echo '              </div>';        
         echo '          </div>';
             //---------------------------------------7------------------------------
         echo '          <div class="containerformPurple dis pagina_seven_tdc">';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="bancoInter_4Label" for="bancoInter_4">BANCO INTERMEDIARIO</label>';
         echo '                  <input type="text" maxlength="256" id="bancoInter_4" name="ibbank[2]" class="optionsPurple"  onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
         echo '              </div>';      
         /*echo '              <div class="containerinputPurple">';
         echo '                  <input type="text" maxlength="256" name="ibacc[3]" placeholder="Cuenta Intermediario" class="optionsPurple" maxlength="32">';
         echo '              </div>';*/
         echo '              <div class="container">';
         echo '                  <label id="paisInter_4Label" for="paisInter_4">Pais Intermediario</label>';
         echo '                  <input type="text" maxlength="256" id="paisInter_4" name="ibbankcountry[3]" class=" inside_left" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
         echo '                  <label id="ciudadInter_4Label" for="ciudadInter_4">Ciudad Intermediario</label>';
         echo '                  <input type="text" maxlength="256" id="ciudadInter_4" name="ibbankcity[3]" class=" inside_right" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="direccionInter_4Label" for="direccionInter_4">Direccion Intermediario</label>';
         echo '                  <input type="text" maxlength="256" id="direccionInter_4" name="ibbankaddress[3]" class="optionsPurple" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
         echo '              </div>';
         echo '              <div class="containerinputPurple">';
         echo '                  <label id="abaInter_4Label" for="abaInter_4">ABA/SWIFT/IBAN INTERMEDIARIO</label>';
         echo '                  <input type="text" maxlength="256" id="abaInter_4" name="ibbankabaswifiban[3]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
         echo '              </div>';
         echo '           </div>';
         echo '    </div>';
           //-------------------ENCOMIENDA--TDD--TP-TR-------------------------------
        echo '   <div id="enc_pm_tdd_tp_tr" class="dis">';
        //-----------------------------------2--------------------
       echo '          <div class="containerformPurple dis pagina_two">';
       echo '              <div class="containerinputPurple">';
       echo '                  <input type="text" maxlength="256" id="tasa_5" name="tasaCambio" placeholder="TASA DE CAMBIO" class="optionsPurple purple white-font" readonly>';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <input type="text" maxlength="256" id="monto_5" name="monto" placeholder="MONTO" class="optionsPurple purple white-font" readonly>';  
       echo '              </div>';
       echo '              <div class="containerinputPurpleBeneficiary">';
       echo '                  <label id="transBeneficiario_5Label" for="transBeneficiario_5" class="transBeneficiario_5Label01 transBeneficiario_5Label02"></label>';
       echo '                  <select class="optionsPurple" id="transBeneficiario_5" onfocus="actionFocusSel(this, \'140px\', \'transfer\', \'select\')" onfocusout="actionFocusOutSel(this, \'156px\', \'transfer\', \'select\')>';
       echo '                      <option value="0" ></option>';
       echo '                  </select>';
       echo '                  <img id="beneficiaryInCard" class="handCursor" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
       echo '                  <img id="beneficiaryOutCard" class="handCursor dis" style="width: 9%;height: 50%;margin-left: 1%;" src="img/icons/addBeneficiary.png">';
       echo '              </div>';
       echo '              <div id="id_3" class="containerinputPurple">';
       echo '                  <label id="documentoIdentidad_5Label" for="documentoIdentidad_5">Documento Identidad*</label>';
       echo '                  <input type="text" maxlength="256" id="documentoIdentidad_5" name="bdocumentid[4]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';  
       echo '              </div>';

       echo '           </div>';
       //-------------------------------------3--------------------
       echo '          <div class="containerformPurple dis pagina_three">';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="primerNombre_5Label" for="primerNombre_5">Primer Nombre*</label>';
       echo '                  <input type="text" maxlength="256" id="primerNombre_5" name="bfirstname[4]" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="segundoNombre_5Label" for="segundoNombre_5">Segundo Nombre</label>';
       echo '                  <input type="text" maxlength="256" id="segundoNombre_5" name="bmiddlename[4]" class="optionsPurple" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="primerApellido_5Label" for="primerApellido_5">Primer Apellido*</label>';
       echo '                  <input type="text" maxlength="256" id="primerApellido_5" name="blastname[4]" class="optionsPurple" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="segundoApellido_5Label" for="segundoApellido_5">Segundo Apellido</label>';
       echo '                  <input type="text" maxlength="256" id="segundoApellido_5" name="bsecondlastname[4]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
       echo '              </div>';
       echo '          </div>';
       //--------------------------------------4-----------------------------
       echo '          <div class="containerformPurple dis pagina_four">';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="direccion_5Label" for="direccion_5">Direccion*</label>';
       echo '                  <input type="text" maxlength="256" id="direccion_5" name="baddress[4]" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="email_5Label" for="email_5">Email</label>';
       echo '                  <input type="text" maxlength="256" id="email_5" name="email" class="optionsPurple" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="telefono_5Label" for="telefono_5">Teléfono</label>';
       echo '                  <input type="text" maxlength="256" id="telefono_5" name="telefono" class="optionsPurple" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
       echo '              </div>';  
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="bancoBeneficiario_5Label" for="bancoBeneficiario_5">Banco</label>';
       echo '                  <input type="text" maxlength="256" id="bancoBeneficiario_5" name="bbank[4]" class="optionsPurple"  onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
       echo '              </div>';
       echo '          </div>';
       //--------------------------------------5------------------------------
       echo '          <div class="containerformPurple dis pagina_five">';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="ctaBeneficiario_5Label" for="ctaBeneficiario_5">Cuenta*</label>';
       echo '                  <input type="text" name="bacc[4]" id="ctaBeneficiario_5" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="container">';
       echo '                  <label id="paisBanco_5Label" for="paisBanco_5">Pais Banco</label>';
       echo '                  <input type="text" maxlength="256" id="paisBanco_5" name="bbankcountry[4]" class="inside_left" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
       echo '                  <label id="ciudadBanco_5Label" for="ciudadBanco_5">Ciudad Banco</label>';
       echo '                  <input type="text" maxlength="256" id="ciudadBanco_5" name="bbankcity[4]" class="inside_right" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="direccionBanco_5Label" for="direccionBanco_5">Dirección Banco</label>';
       echo '                  <input type="text" maxlength="256" id="direccionBanco_5" name="bbankaddress[4]" class="optionsPurple" onfocus="actionFocus(this, \'140px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="aba_5Label" for="aba_5">ABA/SWIFT/IBAN</label>';
       echo '                  <input type="text" maxlength="256" id="aba_5" name="bbankabaswiftiban[4]" class="optionsPurple"  onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
       echo '              </div>';
       echo '          </div>';
           //---------------------------------------6------------------------------
       echo '          <div class="containerformPurple dis pagina_six">';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="bancoInter_5Label" for="bancoInter_5">Banco Intermediario</label>';
       echo '                  <input type="text" maxlength="256" id="bancoInter_5" name="ibbank[3]" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="cuentaInter_5Label" for="cuentaInter_5">Cuenta Intermediario</label>';
       echo '                  <input type="text" name="ibacc[3]" id="cuentaInter_5" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'72px\', \'transfer\')" onfocusout="actionFocusOut(this, \'87px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="container">';
       echo '                  <label id="paisInter_5Label" for="paisInter_5">Pais Intermediario</label>';
       echo '                  <input type="text" maxlength="256" id="paisInter_5" name="ibbankcountry[4]" class=" inside_left" onfocus="actionFocus(this, \'145px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
       echo '                  <label id="ciudadInter_5Label" for="ciudadInter_5">Ciudad Intermediario</label>';
       echo '                  <input type="text" maxlength="256" id="ciudadInter_5" name="ibbankcity[4]" class="inside_right" onfocus="actionFocus(this, \'145px\', \'transfer\')" onfocusout="actionFocusOut(this, \'156px\', \'transfer\')">';
       echo '              </div>';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="direccionInter_5Label" for="direccionInter_5">Direccion Intermediario</label>';
       echo '                  <input type="text" maxlength="256" id="direccionInter_5" name="ibbankaddress[4]" class="optionsPurple" onfocus="actionFocus(this, \'212px\', \'transfer\')" onfocusout="actionFocusOut(this, \'227px\', \'transfer\')">';
       echo '              </div>';
       echo '          </div>';
           //---------------------------------------7------------------------------
       echo '          <div class="containerformPurple dis pagina_seven">';
       echo '              <div class="containerinputPurple">';
       echo '                  <label id="abaInter_5Label" for="abaInter_5">ABA/SWIFT/IBAN INTERMEDIARIO</label>';
       echo '                  <input type="text" maxlength="256" id="abaInter_5" name="ibbankabaswifiban[4]" class="optionsPurple" onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'transfer\')">';
       echo '              </div>';
       echo '           </div>';
       echo '    </div>';
       echo '    <button type="button" class="okButton dis" id="okButton" onclick="validateTransferencia()">ok</button>';
       echo '  </form>';

        if(isset($_SESSION['message7001'])){
            echo '<div id="requiredDocuments" class="requiredOff">'
                .'   <label id="docListPenLabel" for="docListPen"></label>'
                .'   <select id="docListPen" name="docListPen" class="selDoc optionsPurple" onfocus="actionFocusSel(this, \'10px\', \'transfer\', \'select\')" onfocusout="actionFocusOutSel(this, \'27px\', \'transfer\', \'select\')">'
                .'      <option value="-1"></option>';
                        for ($i=0; $i < count($documents["list"]); $i++) { 
            echo '      <option data-id="'.$documents["list"][$i]["id"].'" value="'.$documents["list"][$i]["id"].'">'.$documents["list"][$i]["name"].'</option>';
                        }
            echo '   </select>'
                .'</div>';
            echo '<div id="actionDoc">'
                .'   <div id="penAction" class="off"><img src="./img/icons/pencil.svg" class="icon ico-light-purple"></div>'
                .'   <div id="docAction" class="off">'
                .'      <form id="docUploadForm" action="./form/message_otc.php" method="POST" enctype="multipart/form-data">'
                .'         <label class="labelFile" for="uploadDoc"><img src="./img/icons/upload2.svg" class="icon ico-light-purple"></label>'
                .'         <input type="file" name="uploadDoc" id="uploadDoc" />'
                .'         <input type="hidden" name="docNum" id="docNum" >'
                .'      </form>'
                .'   </div>'
                .'</div>';
        }

        echo '  </form>';
        self::artiSendMail('purple');

    } // form Transferencia 

    /*=======================================================================
    Function: hexagons Recepcion
    Description: construction of hexagons for Recepcion
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 15/11/2021
    ===================================================================== */
    static function hexagonsRecepcion(){

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[2][8] = new hexagon('button_two ','');
        $colums[2][8] = $colums[2][8]->getHexa();

        $colums[2][9] = new hexagon('button_three ','');
        $colums[2][9] = $colums[2][9]->getHexa();

        $colums[2][10] = new hexagon('back dis','<img src="./img/icons/arrowBack.png" class="rotate">');
        $colums[2][10] = $colums[2][10]->getHexa();

        $colums[3][9] = new hexagon('purpleColor hexagonOk','');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[4][8] = new hexagon('button_four ','');
        $colums[4][8] = $colums[4][8]->getHexa();

        $colums[4][9] = new hexagon('button_one ','');
        $colums[4][9] = $colums[4][9]->getHexa();

        $colums[4][10] = new hexagon('purpleColor hexagonNext dis','<img id="buttonNext" src="./img/icons/arrowNext.png" class="rotate handCursor">');
        $colums[4][10] = $colums[4][10]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].$colums[2][10].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].$colums[4][10].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
    } // hexagons Tarjeta de Debito

    /*=======================================================================
    Function: form Recepcion
    Description: construction of form Recepcion
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 15/11/2021
    ===================================================================== */
    static function formRecepcion($language, $idlead, $idcountry, $countrycode){

        $recepcion = xclient::getclearencetypeoutputl($language, $idlead);
        $getcreditcardtypel = xclient::getcreditcardtypel($language, $idlead);
        $agency = xclient::getlocationvenl($language, $idlead);
        $mpbankl = xclient::getbankl($language, $idlead, $idcountry);
        $bank = xclient::getlocationl($language, $idlead);
        $prefixy = xclient::getcellphoneareacodel($language, $idlead, $countrycode);
        $getparty = xclient::getparty($_SESSION["id"], $_SESSION["language"]);

        $documents = '';
        if(isset($_SESSION['docpend'])){
            if(strlen($_SESSION['docpend']) > 0){
                if(isset($_SESSION['typeNum'])){
                    $listDoc = explode(",",$_SESSION['docpend']);
                    $keyDoc = array_search($_SESSION['typeNum'], $listDoc);
                    
                    unset($listDoc[$keyDoc]);
                    $preList = array_values($listDoc);
                    $_SESSION['docpend'] = implode(",", $preList);

                    unset($_SESSION['typeNum']);
                }

                $documents = xclient::getcompliancedoctypeparaml($language, $idlead, $_SESSION['docpend']);

                if(is_null($documents['list'])){
                    unset($_SESSION['docpend']);
                    unset($_SESSION['message7001']);
                    unset($_SESSION['urlTo']);
                }
            }else{
                unset($_SESSION['docpend']);
                unset($_SESSION['message7001']);
                unset($_SESSION['urlTo']);
            }
        }

        echo '  <form id="formRecepcion" class="formContainer" action="#" method="POST">';
        echo '          <div id="pageOne" class="containerformPurple">';
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="claveRemesaLabel" for="claveRemesa">CLAVE REMESA</label>';
        echo '                  <input type="text" id="claveRemesa" maxlength="10" name="key" class="optionsPurple" onkeypress="return valideKey(event);"  onfocus="actionFocus(this, \'2px\', \'transfer\')" onfocusout="actionFocusOut(this, \'16px\', \'receive\')">'; 
        echo '              </div>'; 
        echo '              <div class="containerinputPurple">';
        echo '                  <label id="recepcionLabel" for="recepcion" class="posLabelY1 posLabelY2  posLabelY3 posLabelY4 posLabelY5"></label>';
        echo '                  <select id="recepcion" name="idclearencetype" class="optionsPurple ">';
        echo '                      <option value="0"></option>';
                                    foreach($recepcion["list"] as $keyrec => $valrec){
        echo '                      <option id="'.$valrec["id"].'" value="'.$valrec["id"].'">'.$valrec["name"].'</option>';
                                    }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple" id="cntLocation">';
        echo '                  <label id="locationLabel" for="location" class="locationLabelY1 locationLabelY2 "></label>';
        echo '                  <select id="location" name="idlocation[0]" class="optionsPurple">';
        echo '                      <option value="0"></option>';
                                    foreach($agency["list"] as $keyage => $valage){
        echo '                      <option id="'.$valage["id"].'" value="'.$valage["id"].'">'.$valage["name"].'</option>';
                                    }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple dis" id="acountNumber">';
        echo '                  <label id="accLabel" for="acc">numero de cuenta bancaria</label>';
        echo '                  <input type="text" id="acc" name="acc" value="'.$getparty['bankaccount'].'" class="optionsPurple"  maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'212px\', \'receive\')" onfocusout="actionFocusOut(this, \'227px\', \'receive\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple dis" id="bankSelect">';
        echo '                  <label id="mpbankcodeLabel" for="mpbankcode"></label>';
        echo '                  <select id="mpbankcode" name="mpbankcode" class="optionsPurple" onfocus="actionFocusSel(this, \'212px\', \'receive\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'receive\', \'select\')">';
        echo '                      <option value="0"></option>';
                                    foreach($mpbankl["list"] as $keympb => $valmpb){
        echo '                      <option id="'.$valmpb["code"].'" value="'.$valmpb["code"].'">'.$valmpb["name"].'</option>';
                                    }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple dis" id="branch">';
        echo '                  <label id="sub-locationLabel" for="sub-location"></label>';
        echo '                  <select id="sub-location" name="idlocation[1]" class="optionsPurple" onfocus="actionFocusSel(this, \'212px\', \'receive\', \'select\')" onfocusout="actionFocusOutSel(this, \'227px\', \'receive\', \'select\')">';
        echo '                      <option value="0"></option>';
                                    foreach($bank["list"] as $keybank => $valbank){
        echo '                      <option id="'.$valbank["id"].'" value="'.$valbank["id"].'">'.$valbank["name"].'</option>';
                                    }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple dis" id="cntPrepaidCardAccount">';
        echo '                  <label id="prepaidCardAccountLabel" for="prepaidCardAccount">cuenta asociado a la tarjeta prepagada</label>';
        echo '                  <input type="text" id="prepaidCardAccount" name="prepaidcardaccount" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);"  onfocus="actionFocus(this, \'212px\', \'receive\')" onfocusout="actionFocusOut(this, \'227px\', \'receive\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple dis" id="cntRemittanceCardAccount">';
        echo '                  <label id="remittanceCardAccountLabel" for="remittanceCardAccount">cuenta asociado a la tarjeta remesa</label>';
        echo '                  <input type="text" id="remittanceCardAccount" name="remittancecardaccount" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);"  onfocus="actionFocus(this, \'212px\', \'receive\')" onfocusout="actionFocusOut(this, \'227px\', \'receive\')">';
        echo '              </div>';
        echo '          </div>';
        echo '          <div id="pageTwo" class="containerformPurple dis">';
        echo '              <div id="cntPagoMovil" class="container dis">';
        echo '                  <label id="codigoLabel" for="codigo">CODIGO</label>';
        echo '                  <input type="text" maxlength="256" name="codigo" class="optionsPurple" id="codigo" onfocus="actionFocus(this, \'2px\', \'receive\')" onfocusout="actionFocusOut(this, \'16px\', \'receive\')">';
        echo '                  <label id="prefijoLabel" for="prefijo"></label>';
        echo '                  <select id="prefijo" name="prefijo" class="optionsPurple prefijo" onfocus="actionFocusSel(this, \'2px\', \'receive\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'receive\', \'select\')">';
        echo '                      <option value="0"></option>';
                                    foreach($prefixy["list"] as $keyprefix => $valprefix){
        echo '                      <option value="'.$valprefix["code"].'">'.$valprefix["code"].'</option>';
                                    }
        echo '                  </select>';
        echo '                  <label id="telefonoLabel" for="telefono">TELEFONO PAGO MOVIL</label>';
        echo '                  <input type="text" maxlength="256" id="telefono" name="telefono" class="optionsPurple" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'2px\', \'receive\')" onfocusout="actionFocusOut(this, \'16px\', \'receive\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple dis" id="cntPrepaidCardNumber">';
        echo '                  <label id="prepaidCardNumberLabel" for="prepaidCardNumber">Tarjeta Prepagada</label>';
        echo '                  <input type="text" id="prepaidCardNumber" name="prepaidcardnumber" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'2px\', \'receive\')" onfocusout="actionFocusOut(this, \'16px\', \'receive\')">';
        echo '              </div>';
        echo '              <div class="containerinputPurple dis" id="cntRemittanceCardNumber">';
        echo '                  <label id="remittanceCardNumberLabel" for="remittanceCardNumber">Tarjeta Remesa</label>';
        echo '                  <input type="text" id="remittanceCardNumber" name="remittancecardnumber" class="optionsPurple" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'2px\', \'receive\')" onfocusout="actionFocusOut(this, \'16px\', \'receive\')">';
        echo '              </div>';
        echo '              <div id="cardType" class="containerinputPurple dis">';
        echo '                  <select id="selectTypeCard" name="typeCard" class="optionsPurple">';
        echo '                      <option value="0">Seleccionar tipo de tarjeta</option>';
                                    foreach($getcreditcardtypel["list"] as $keytcct => $valtcct){
        echo '                      <option id="'.$valtcct["code"].'" value="'.$valtcct["code"].'">'.$valtcct["name"].'</option>';
                                    }
        echo '                  </select>';
        echo '              </div>';
        echo '              <div class="containerinputPurple containerDate dis" id="containerDate">';
        echo '                  <label id="mesVencLabel" for="mesVenc">Fecha Venc. Mes</label>';
        echo '                  <input type="text" id="mesVenc" name="mesVenc"  class="optionsPurple" maxlength="2" onkeypress="return valideKey(event);">';
        echo '                  <label id="anioVencLabel" for="anioVenc">Fecha Venc. Año</label>';
        echo '                  <input type="text" id="anioVenc" name="anioVenc" class="optionsPurple" maxlength="4" onkeypress="return valideKey(event);">';
        echo '              </div>';
        echo '              <div class="containerinputPurple dis" id="validationCode">';
        echo '                  <label id="codvalLabel" for="codval">Codigo Validacion *</label>';
        echo '                  <input id="codval" type="text" name="codval" class="optionsPurple" maxlength="3" onkeypress="return valideKey(event);">';
        echo '              </div>';
        echo '          </div>';
        echo '          <p id="buttonOk" class="okText" onclick="validateRecepcion()">Ok</p>';
        echo '  </form>';

        if(isset($_SESSION['message7001'])){
            echo '<div id="requiredDocuments" class="requiredOff">'
                .'   <label id="docListPenLabel" for="docListPen"></label>'
                .'   <select id="docListPen" name="docListPen" class="selDoc optionsPurple" onfocus="actionFocusSel(this, \'10px\', \'receive\', \'select\')" onfocusout="actionFocusOutSel(this, \'27px\', \'receive\', \'select\')">'
                .'      <option value="-1" ></option>';
                        for ($i=0; $i < count($documents["list"]); $i++) { 
            echo '      <option data-id="'.$documents["list"][$i]["id"].'" value="'.$documents["list"][$i]["id"].'">'.$documents["list"][$i]["name"].'</option>';
                        }
            echo '   </select>'
                .'</div>';
            echo '<div id="actionDoc">'
                .'   <div id="penAction" class="off"><img src="./img/icons/pencil.svg" class="icon ico-light-purple"></div>'
                .'   <div id="docAction" class="off">'
                .'      <form id="docUploadForm" action="./form/message_otc.php" method="POST" enctype="multipart/form-data">'
                .'         <label class="labelFile" for="uploadDoc"><img src="./img/icons/upload2.svg" class="icon ico-light-purple"></label>'
                .'         <input type="file" name="uploadDoc" id="uploadDoc" />'
                .'         <input type="hidden" name="docNum" id="docNum" >'
                .'      </form>'
                .'   </div>'
                .'</div>';
        }

        self::artiSendMail('purple');

    } // form Recepcion

    /*=======================================================================
    Function: hexagons Qchat2
    Description: hexagon construction for the Qchat2
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 17/10/2021
    ===================================================================== */
    static function hexagonsQchatMsg()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[6][0] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="handCursor rotate"></a>');
        $colums[6][0] = $colums[6][0]->getHexa();

        $colums[6][1] = new hexagon('','<img id="backMainList" src="./img/icons/arrowBackRegister.png" class="rotate handCursor">');
        $colums[6][1] = $colums[6][1]->getHexa();

        $colums[5][1] = new hexagon('','<img src="./img/icons/trash2.png" class="rotate">');
        $colums[5][1] = $colums[5][1]->getHexa();

        $colums[5][0] = new hexagon('','<img src="./img/icons/lock.png" class="rotate">');
        $colums[5][0] = $colums[5][0]->getHexa();

        $colums[4][1] = new hexagon('','<img id="reloadHistory" src="./img/icons/refresh.png" class="handCursor rotate">');
        $colums[4][1] = $colums[4][1]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    } // hexagonsQchat2

    /*=======================================================================
    Function: hexagons Send msg
    Description: hexagon construction for the Send msg
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 17/10/2021
    ===================================================================== */
    static function Sendmsg(){

        echo "  <div class='hexagon hexagon1 hexaColum1 hexaPhoto'>
                    <div class='hexagon-in1'>
                        <div id='contactPhoto' class='hexagon-in2'></div>
                    </div>
                </div>";
        echo '  <div id="modalQchat" class="modalQchat dis">';
        echo '      <div class="headerModal">';
        echo '          <p style="padding-left: 12%;"> Contenido del Mensaje </p>';
        echo '          <img id="closeModal" class="closeWindowModal" src="./img/icons/orangeX.png">';
        echo '      </div>';
        echo '      <div class="modalContent">';
        echo '          <p id="txtMsgSelected"></p>';
        echo '      </div>';
        echo '      <img id="okImg" class="okImg" src="./img/icons/lightOrangeOk.png">';
        echo '  </div>';
        echo '  <div id="cntFather"><div id="historyChat" class="cntChild"></div></div>';
        echo '  <div class="formContainera">';
        echo '     <input id="inputText" maxlength="256" type="text" placeholder="" class="inputForm">';
        echo '     <div id="sendText">
                      <img src="./img/icons/send.png" class="handCursor" onclick="sendMsg()">
                   </div>';
        echo '  </div>';

    } // Sending messages

    /*=======================================================================
    Function: hexagons message 4
    Description: hexagon construction for the message 4
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 18/11/2021
    ===================================================================== */
    static function hexagonsmessage4()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $urlMsg = './msgSuccess.php';

        $colums[3][9] = new hexagon('','<a href="'.$urlMsg.'"><p class="rotate" style="color: white; font-family: Xatoxi Atari;">OK</p></a>');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    } // hexagonsmessage 4

    /*=======================================================================
    Function: hexagons message 5
    Description: hexagon construction for the message 5
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 18/11/2021
    ===================================================================== */
    static function hexagonsmessage5()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $urlMsg = './watchman.php';
        if(isset($_SESSION['urlTo'])){
            $urlMsg = $_SESSION['urlTo'];
        }

        $colums[3][9] = new hexagon('','<a href="'.$urlMsg.'"><img src="./img/icons/ok.png" class="rotate ok"></a>');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    } // hexagonsmessage 5

    /*=======================================================================
    Function: hexagons message 6
    Description: hexagon construction for the message 6
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 18/11/2021
    ===================================================================== */
    static function hexagonsmessage6()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $urlMsg = './watchman.php';
        if(isset($_SESSION['urlSpecial'])){
            $urlMsg = $_SESSION['urlTo'];
        }

        $colums[3][9] = new hexagon('','<a href="'.$urlMsg.'"><img src="./img/icons/ok.png" class="rotate ok"></a>');
        $colums[3][9] = $colums[3][9]->getHexa();

        unset($_SESSION['urlSpecial']);
        unset($_SESSION['urlTo']);

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    } // hexagonsmessage 6

    /*=======================================================================
    Function: hexagons message 7
    Description: hexagon construction for the message 7
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 15/03/2021
    ===================================================================== */
    static function hexagonsmessage7()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $urlMsg = './watchman.php';
        $colums[3][9] = new hexagon('','<a href="'.$urlMsg.'"><img src="./img/icons/ok.png" class="rotate ok"></a>');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    } // hexagonsmessage7

    /*=======================================================================
    Function: hexagons Wallet
    Description: hexagon construction for the Wallet
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 22/11/2021
    ===================================================================== */
    static function hexagonsWallet()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][0] = new hexagon('','<img src="./img/icons/fintechIcon.png" class="rotate">');
        $colums[0][0] = $colums[0][0]->getHexa();

        $colums[0][1] = new hexagon('','<img src="./img/icons/bitcoin.png" class="rotate">');
        $colums[0][1] = $colums[0][1]->getHexa();

        $colums[1][0] = new hexagon('','<img src="./img/icons/eye.svg" class="rotate">');
        $colums[1][0] = $colums[1][0]->getHexa();

        $colums[1][1] = new hexagon('','<img src="./img/icons/eye.svg" class="rotate">');
        $colums[1][1] = $colums[1][1]->getHexa();

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascot_3.png" class="rotate">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colums[2][8] = new hexagon('','<p class="fifteen rotate"></p>');
        $colums[2][8] = $colums[2][8]->getHexa();

        $colums[4][8] = new hexagon('','<p class="twenty_four rotate"></p>');
        $colums[4][8] = $colums[4][8]->getHexa();

        $colums[2][4] = new hexagon('','<img src="./img/icons/sellBitcoinWallet.png" class="rotate">');
        $colums[2][4] = $colums[2][4]->getHexa();

        $colums[2][5] = new hexagon('','<p class="five rotate"></p>');
        $colums[2][5] = $colums[2][5]->getHexa();

        $colums[4][4] = new hexagon('','<img src="./img/icons/buy.png" class="rotate">');
        $colums[4][4] = $colums[4][4]->getHexa();
        
        $colums[4][5] = new hexagon('','<p class="sixteen rotate"></p>');
        $colums[4][5] = $colums[4][5]->getHexa();

        $colums[3][5] = new hexagon('','<p class="otc rotate"></p>');
        $colums[3][5] = $colums[3][5]->getHexa();

        $colums[5][0] = new hexagon('','<img src="./img/icons/eye.svg" class="rotate">');
        $colums[5][0] = $colums[5][0]->getHexa();

        $colums[6][0] = new hexagon('','<img src="./img/icons/euro.png" class="rotate">');
        $colums[6][0] = $colums[6][0]->getHexa();
        
        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    } // hexagonsmessage 6

    /*=======================================================================
    Function: hexagons firma
    Description: hexagon construction for the firma
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 22/11/2021
    ===================================================================== */
    static function hexagonsFirma()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $urlMsg = './watchman.php';
        if(isset($_SESSION['urlTo'])){
            $urlMsg = $_SESSION['urlTo'];
        }

        $colums[1][9] = new hexagon('','<a href="'.$urlMsg.'"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[1][9] = $colums[1][9]->getHexa();

        $colums[3][9] = new hexagon('','');
        $colums[3][9] = $colums[3][9]->getHexa();
        
        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    } // hexagonsFirma
    
    /*=======================================================================
    Function: hexagons Otc
    Description: hexagon construction for the OTC
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 06/01/2022
    ===================================================================== */
    static function hexagonsOtc()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[3][9] = new hexagon('','<img src="./img/icons/dateWhite.png" class="rotate handCursor" onclick="directUrl(\'lasttrxlist\')">');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    } // hexagonotc

    /*=======================================================================
    Function: form OTC Exchange
    Description: Form for OTC Exchange
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 19/10/2021
    ===================================================================== */
    static function formOTC($language, $idlead){

        $coins = xclient::getcryptol($language, $idlead);

        $documents = '';
        if(isset($_SESSION['docpend'])){
            if(strlen($_SESSION['docpend']) > 0){
                if(isset($_SESSION['typeNum'])){
                    $listDoc = explode(",",$_SESSION['docpend']);
                    $keyDoc = array_search($_SESSION['typeNum'], $listDoc);
                    
                    unset($listDoc[$keyDoc]);
                    $preList = array_values($listDoc);
                    $_SESSION['docpend'] = implode(",", $preList);

                    unset($_SESSION['typeNum']);
                }

                $documents = xclient::getcompliancedoctypeparaml($language, $idlead, $_SESSION['docpend']);

                if(is_null($documents['list'])){
                    unset($_SESSION['docpend']);
                    unset($_SESSION['message7001']);
                    unset($_SESSION['urlTo']);
                }
            }else{
                unset($_SESSION['docpend']);
                unset($_SESSION['message7001']);
                unset($_SESSION['urlTo']);
            }
        }

        echo '      <form class="formOtc" action="#">'
            .'          <div class="hexa-buylist">'
            .'              <div class="one style gray"></div>'
            .'              <div class="two style gray"></div>'
            .'              <div class="three style gray buyotclist"><p id="buy_1" class="rotate font">BUY</p></div>'
            .'          </div>'
            .'          <div class="hexa-selllist">'
            .'              <div class="one style gray"></div>'
            .'              <div class="two style gray"></div>'
            .'              <div class="three style gray sellotclist" ><p id="sell_1" class="rotate font">SELL</p></div>'
            .'          </div>'
            .'          <div class="hexa-buysell">'
            .'              <div class="one style blue"></div>'
            .'              <div class="two style blue"></div>'
            .'              <div class="three style blue buysellotc" ><img src="./img/icons/whiteX.png" class="rotate-x"></div>'
            .'          </div>'
            .'          <select id="transaction" name="transaction" class="options fieldTrx yellow">'
            .'              <option data-id="1" value="buy">BUY</option>'
            .'              <option data-id="2" value="sell">SELL</option>'
            .'          </select>'
            .'          <select id="coinsList" name="coinsList" class="options fieldCoins blue">';
                        for ($i=0; $i < count($coins["list"]); $i++) { 
       echo  '              <option data-id="'.$coins["list"][$i]["id"].'" value="'.$coins["list"][$i]["iso"].'" >'.$coins["list"][$i]["iso"].'</option>';
                        }
       echo  '          </select>'
            .'          <input type="text" id="usdAmount" name="usdAmount" class="fiatAmount-left field_form yellow" readonly>'
            .'          <input type="text" id="eurAmount" name="eurAmount" class="fiatAmount-right field_form green" readonly>'
            .'          <div class="calc-cnt light-gray">'
            .'              <div class="labelInput light-green">'
            .'                  <label for="price" id="labelPrice" class="label-top-input mini-txt light-green">PRICE</label>'
            .'                  <input type="text" id="price" name="price" class="field_inner_div light-green" value="0" onfocus="resetPrice()" onfocusout="calcPriceToTotal()">'
            .'              </div>'
            .'              <div class="labelInput light-blue-wallet">'
            .'                  <label for="qty" id="labelQTY" class="label-top-input mini-txt light-blue-wallet">QTY</label>'
            .'                  <input type="text" id="qty" name="qty" class="field_inner_div light-blue-wallet" value="0" onfocus="resetQty()" onfocusout="calcQtyToTotal()">'
            .'              </div>'
            .'              <div class="bigLabelInput light-yellow">'
            .'                  <label for="total" id="labelTotal" class="label-mid-input light-yellow">TOTAL</label>'
            .'                  <input type="text" id="total" name="total" class="mid-input light-yellow" value="0" readonly>'
            .'              </div>'
            .'              <div class="hexa-sp">'
            .'                  <div class="one-sp style yellow"></div>'
            .'                  <div class="two-sp style yellow"></div>'
            .'                  <div class="three-sp style yellow"><p id="buy_2" class="rotate font makeOtc">BUY</p></div>'
            .'              </div>'
            .'          </div>'
            .'      </form>';

            if(isset($_SESSION['message7001'])){
                echo '<div id="requiredDocuments" class="requiredOff">'
                    .'   <label id="docListPenLabel" for="docListPen"></label>'
                    .'   <select id="docListPen" name="docListPen" class="selDoc options blue" onfocus="actionFocusSel(this, \'-9px\', \'otc\', \'select\')" onfocusout="actionFocusOutSel(this, \'0px\', \'otc\', \'select\')">'
                    .'      <option value="-1" ></option>';
                         for ($i=0; $i < count($documents["list"]); $i++) { 
                echo '      <option data-id="'.$documents["list"][$i]["id"].'" value="'.$documents["list"][$i]["id"].'">'.$documents["list"][$i]["name"].'</option>';
                         }
                echo '   </select>'
                    .'</div>';
                echo '<div id="actionDoc">'
                    .'  <div id="penAction" class="off"><img src="./img/icons/pencil.svg" class="icon ico-blue"></div>'
                    .'  <div id="docAction" class="off">'
                    .'      <form id="docUploadForm" action="./form/message_otc.php" method="POST" enctype="multipart/form-data">'
                    .'         <label class="labelFile" for="uploadDoc"><img src="./img/icons/upload2.svg" class="icon ico-blue"></label>'
                    .'         <input type="file" name="uploadDoc" id="uploadDoc" />'
                    .'         <input type="hidden" name="docNum" id="docNum" >'
                    .'      </form>'
                    .'  </div>'
                    .'</div>';
            }

            self::artiSendMail('blue');
            
    } // formOTC

    /*=======================================================================
    Function: hexagons Wallets Manager
    Description: hexagon construction for the Wallets Manager
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 07/01/2022
    ===================================================================== */
    static function hexagonsWalletsMgr()
    {
        if(isset($_SESSION["message7001"])){
            unset($_SESSION["message7001"]); 
        }

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[2][4] = new hexagon('','<p class="rotate font handCursor" onclick="directUrl(\'otcselllist\')">SELL</p>');
        $colums[2][4] = $colums[2][4]->getHexa();

        $colums[2][7] = new hexagon('','<img src="./img/icons/ptpPaymentSendIcon.png" class="rotate handCursor" onclick="directUrl(\'ptppaymentsend\')">');
        $colums[2][7] = $colums[2][7]->getHexa();

        $colums[3][5] = new hexagon('','<p class="rotate font handCursor" onclick="directUrl(\'otcbuylist\')">OTC</p>');
        $colums[3][5] = $colums[3][5]->getHexa();

        $colums[3][8] = new hexagon('','<img src="./img/icons/loupe.png" class="rotate handCursor" onclick="directUrl(\'lasttrxlist\')">');
        $colums[3][8] = $colums[3][8]->getHexa();

        $colums[4][4] = new hexagon('','<p class="rotate font handCursor" onclick="directUrl(\'otcbuylist\')">BUY</p>');
        $colums[4][4] = $colums[4][4]->getHexa();

        $colums[4][7] = new hexagon('','<img src="./img/icons/ptpPaymentReceiveIcon.png" class="rotate handCursor" onclick="directUrl(\'ptppaymentreceive\')">');
        $colums[4][7] = $colums[4][7]->getHexa();

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    } // hexagonotc

    static function formWalletMgr($language, $idlead){

        echo '   <form class="formWallet" action="#">';
        $listcrypto = xclient::getcryptol($language, $idlead);

        $listbuysell = xclient::getorderl($language, $idlead);
        $numCompra = 0;
        $numVenta = 0;
        if(!is_null($listbuysell['list'])){
            foreach($listbuysell['list'] as $keybs => $valBS){
                if($valBS['oper'] == "Compra"){
                    $numCompra++;
                }
                if($valBS['oper'] == "Venta"){
                    $numVenta++;
                }
            }
        }else{

        }
        echo '    <div class="hexa-icoWalletDetail">'
            .'       <div class="one style green"></div>'
            .'       <div class="two style green"></div>'
            .'       <div class="three style green icoWalDet"></div>'
            .'    </div>'
            .'    <div class="labelBalWalDet"><p class="font balWalDet"></p></div>'
            .'    <div class="hexa-sellTot">'
            .'       <div class="one style yellow"></div>'
            .'       <div class="two style yellow"></div>'
            .'       <div class="three style yellow"><p class="rotate font">'.$numVenta.'</p></div>'
            .'    </div>'
            .'    <div class="hexa-buyTot">'
            .'       <div class="one style yellow"></div>'
            .'       <div class="two style yellow"></div>'
            .'       <div class="three style yellow"><p class="rotate font">'.$numCompra.'</p></div>'
            .'    </div>';

        $walletlist = xclient::getcryptoidleadl($language, $idlead);
        $numWallet = 0;
        if(!is_null($walletlist['list'])){
            foreach($walletlist['list'] as $keywl => $wallet){
                if(!is_null($wallet)){
                    $numWallet++;
                }
            }
        }
    
        $leftColors = array(
            "0" => "blue",
            "1" => "red",
            "2" => "green",
            "3" => "purple",
            "4" => "orange",
            "5" => "blue",
            "6" => "red",
            "7" => "green",
        );
        
        $rightColors = array(
            "0" => "purple",
            "1" => "orange",
            "2" => "blue",
            "3" => "red",
            "4" => "green",
            "5" => "purple",
            "6" => "orange",
            "7" => "blue",
        );

        $rowWallet = 0;
        $colWallet = 0;
        if($numWallet % 2 > 0){
            $auxWallet = $numWallet / 2;
            $rowWallet = explode(".",$auxWallet);
            $colWallet = $numWallet % 2;
        }else{
            $auxWallet = $numWallet / 2;
            $rowWallet = explode(".",$auxWallet);
        }
        ?>
        <script>
            let numWallet = '<?php echo $numWallet; ?>';
            let rowWallet = '<?php echo $rowWallet[0]; ?>';
        </script>
        <?php
        $j = 0;
        if(!is_null($walletlist['list']) && !is_null($listcrypto['list'])){
            if($rowWallet[0] <= 9){
                if($rowWallet[0] == 0){
                    self::printHexaWalletLeft($leftColors[0], 0, $walletlist['list'][$j], $listcrypto['list'], $j);
                    self::printHexaAddWalletRight($rightColors[0], 0);
                }
                if($rowWallet[0] > 0 && $colWallet > 0){
                    for ($i = 0; $i < $rowWallet[0]; $i++) {
                        self::printHexaWalletLeft($leftColors[$i], $i, $walletlist['list'][$j], $listcrypto['list'], $j);
                        $j++;
                        self::printHexaWalletRight($rightColors[$i], $i, $walletlist['list'][$j], $listcrypto['list'], $j);
                        $j++;
                    }
                    self::printHexaWalletLeft($leftColors[$rowWallet[0]], $rowWallet[0], $walletlist['list'][$j], $listcrypto['list'], $j);
                    self::printHexaAddWalletRight($rightColors[$rowWallet[0]], $rowWallet[0]);
                }else{
                    for ($i = 0; $i < $rowWallet[0]; $i++) {
                        if($i == $rowWallet[0]-1){
                            self::printHexaWalletLeft($leftColors[$i], $i, $walletlist['list'][$j], $listcrypto['list'], $j);
                            $j++;
                            self::printHexaWalletRight($rightColors[$i], $i, $walletlist['list'][$j], $listcrypto['list'], $j);
                            $j++;
                            if($rowWallet[0] < 8){
                                self::printHexaAddWalletLeft($leftColors[$rowWallet[0]], $rowWallet[0]);
                            }
                        }else{
                            self::printHexaWalletLeft($leftColors[$i], $i, $walletlist['list'][$j], $listcrypto['list'], $j);
                            $j++;
                            self::printHexaWalletRight($rightColors[$i], $i, $walletlist['list'][$j], $listcrypto['list'], $j);
                            $j++;
                        }
                    }
                }
            }
        }else{
            self::printHexaAddWalletLeft($leftColors[0], 0);
        }

        echo '   </form>';
        
        echo '<div id="modalAddWallet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" class="wallets">'
        .'  <div class="modal-dialog">'
        .'	    <div class="modal-content">'
        .'		    <div class="modal-header-blue" id="modalheader">'
        .'		    	<h3 id="modalAddCryptocurrency" class="newWallet">ADD CRYPTOCURRENCY</h3>'
        .'		    	<img src="./img/icons/whiteX.png" alt="X" style="max-width: 7%; cursor: pointer" id="closeModalPin" onclick="closeModalPin()">'
        .'		    </div>'
        .'		    <div id="formAddWallet">'
        .'			    <form action="./form/userValidate.php" id="formpin" method="POST">'
        .'				    <div class="modal-body">'
        .'					    <div class="inputWalletDetails">'
        .'                          <select id="coinsList" name="coinsList" class="options fieldCoins blue">';
                                            foreach($listcrypto["list"] as $keyCrypto => $crypto) { 
        echo '                             <option data-id="'.$crypto["id"].'" value="'.$crypto["iso"].'" >'.$crypto["name"].'</option>';
                                            }
        echo '                      </select>'
        .'                          <label id="addressWalletLabel" for="addressWallet">DIRECCIÓN</label>'
        .'					    	<input id="addressWallet" type="text" maxlength="256" name="addressWallet" onfocus="actionFocus(this, \'-10px\', \'wallet\')" onfocusout="actionFocusOut(this, \'2px\', \'wallet\')">'
        .'					    </div>'
        .'                      <div class="hexa-addWalletBtn">'
        .'                          <div class="one style blue"></div>'
        .'                          <div class="two style blue"></div>'
        .'                          <div class="three style blue"><p class="rotate font handCursor" onclick="addWalletSumbit()">OK</p></div>'
        .'                      </div>'
        .'		    		</div>'
        .'	    		</form>'
        .'	    	</div>'
        .'	    </div>'
        .'  </div>'
        .'</div>';
        self::artiSendMail('blue');
    }

    /*=======================================================================
    Function: hexagons pair Left Wallet Icon - Eye
    Description: hexagon pair Left Wallet Icon - Eye
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 02/02/2022
    ===================================================================== */
    static function printHexaWalletLeft($color, $index, $objWallet, $cryptos, $idxWallet){
        $icoCrypto = '';
        $namecrypto = '';
        foreach($cryptos as $keyCrypto => $crypto){
            if($crypto['iso'] == $objWallet['iso']){
                $icoCrypto = $crypto['url'];
                $namecrypto = $crypto['name'];
            }
        }

        $hexaWalletLeft = ' <div class="hexa-addWalletOff eyeLeft-'.$index.'">
        <div class="one style '.$color.'"></div>
        <div class="two style '.$color.'"></div>
        <div class="three style '.$color.' "><img src="'.$icoCrypto.'" class="rotate imgToWhite handCursor" onclick="outFlagBarWalletCoin(\''.$namecrypto.'\', \''.$color.'\')"></div>
        </div>
        <div class="hexa-addWallet icoLeft-'.$index.'">
        <div class="one style '.$color.'"></div>
        <div class="two style '.$color.'"></div>
        <div class="three style '.$color.'">
        <img src="./img/icons/eye.svg" class="icon ico-white rotate handCursor" onclick="walletDetail(\''.$idxWallet.'\')">
        </div>
        </div>';
        echo $hexaWalletLeft;
    }

    /*=======================================================================
    Function: hexagons pair Right Wallet Icon - Eye
    Description: hexagon pair Right Wallet Icon - Eye
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 02/02/2022
    ===================================================================== */
    static function printHexaWalletRight($color, $index, $objWallet, $cryptos, $idxWallet){
        $icoCrypto = '';
        $namecrypto = '';
        foreach($cryptos as $keyCrypto => $crypto){
            if($crypto['iso'] == $objWallet['iso']){
                $icoCrypto = $crypto['url'];
                $namecrypto = $crypto['name'];
            }
        }

        $hexaWalletRight = ' <div class="hexa-addWalletOff eyeRight-'.$index.'">
        <div class="one style '.$color.'"></div>
        <div class="two style '.$color.'"></div>
        <div class="three style '.$color.'">
        <img src="./img/icons/eye.svg" class="icon ico-white rotate handCursor" onclick="walletDetail(\''.$idxWallet.'\')">
        </div>
        </div>
        <div class="hexa-addWallet icoRight-'.$index.'">
        <div class="one style '.$color.'"></div>
        <div class="two style '.$color.'"></div>
        <div class="three style '.$color.'"><img src="'.$icoCrypto.'" class="rotate imgToWhite handCursor" onclick="outFlagBarWalletCoin(\''.$namecrypto.'\', \''.$color.'\')"></div>
        </div>';
        echo $hexaWalletRight;
    }

    /*=======================================================================
    Function: hexagons Add Left Wallet
    Description: hexagon Left Wallet
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 06/02/2022
    ===================================================================== */
    static function printHexaAddWalletLeft($color, $index){

        $hexaAddWalletLeft = ' <div class="hexa-addWalletOff eyeLeft-'.$index.'">
        <div class="one style '.$color.'"></div>
        <div class="two style '.$color.'"></div>
        <div class="three style '.$color.' "><img src="./img/icons/whiteX.png" class="rotate1 handCursor" onclick="addWallet()"></div>
        </div>
        <div class="hexa-addWallet icoLeft-'.$index.'">
        <div class="one style '.$color.'"></div>
        <div class="two style '.$color.'"></div>
        <div class="three style '.$color.'"></div>
        </div>';
        echo $hexaAddWalletLeft;
    }

    /*=======================================================================
    Function: hexagons Add Right Wallet
    Description: hexagon Right Wallet
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 06/02/2022
    ===================================================================== */
    static function printHexaAddWalletRight($color, $index){

        $hexaAddWalletRight = ' <div class="hexa-addWalletOff eyeRight-'.$index.'">
        <div class="one style '.$color.'"></div>
        <div class="two style '.$color.'"></div>
        <div class="three style '.$color.' "></div>
        </div>
        <div class="hexa-addWallet icoRight-'.$index.'">
        <div class="one style '.$color.'"></div>
        <div class="two style '.$color.'"></div>
        <div class="three style '.$color.'"><img src="./img/icons/whiteX.png" class="rotate1 handCursor" onclick="addWallet()"></div>
        </div>';
        echo $hexaAddWalletRight;
    }

    /*=======================================================================
    Function: hexagons Lista todos Ventas
    Description: hexagon construction for list compradores
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 14/01/2022
    ===================================================================== */
    static function hexagonsOTCBuyersList()
    {
        
        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[3][9] = new hexagon('','<img src="./img/icons/dateWhite.png" class="rotate handCursor" onclick="directUrl(\'lasttrxlist\')">');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

        self::artiSendMail('blue');
    }

    /*=======================================================================
    Function: form buyers list
    Description: construction of form buyers boxes list
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 14/01/2022
    ===================================================================== */
    static function formBuyersList($language, $idlead){

      $listbuysell = xclient::getorderl($language, $idlead);

      echo '   <form class="formOtc" action="#">'
         .'    <div class="hexa-buylist">'
         .'       <div class="one style yellow"></div>'
         .'       <div class="two style yellow"></div>'
         .'       <div class="three style yellow buyotclist" "><p id="buyList" class="rotate font">BUY</p></div>'
         .'    </div>'
         .'    <div class="hexa-selllist">'
         .'        <div class="one style gray"></div>'
         .'        <div class="two style gray"></div>'
         .'        <div class="three style gray sellotclist"><p id="sellList" class="rotate font">SELL</p></div>'
         .'    </div>'
         .'    <div class="hexa-buysell">'
         .'        <div class="one style blue"></div>'
         .'        <div class="two style blue"></div>'
         .'        <div class="three style blue buysellotc"><img src="./img/icons/whiteX.png" class="rotate-x"></div>'
         .'    </div>';
      echo '   <div class="cntList">'
          .'      <div class="cntListChild">';
      if(is_null($listbuysell['list'])){
         echo '      <div class="innerBoxEmpty"> No hay registros </div>';
      }else{
         $listbuysell['list'] = array_reverse($listbuysell["list"]);
         foreach($listbuysell['list'] as $keyBS => $valBS){
            if($valBS["oper"] == "Compra"){
               echo '<div class="innerBox gray-border">'
                   .'   <div class="box-left">'
                   .'      <span id="buyListAlias">ALIAS:'.$valBS["alias"].'</span><br/>'
                   .'      <span>'.$valBS["date"].'</span>'
                   .'   </div>'
                   .'   <div class="box-right">'
                   .'      <span>'.$valBS["id"].' '.$valBS["status"].' '.$valBS["oper"].'</span><br/>'
                   .'      <span>'.$valBS["asset"].'</span><br/>'
                   .'      <span id="buyListAmount" class="gray-font">AMOUNT: '.$valBS["amount"].'</span><br/>'
                   .'      <span id="buyListPrice" class="gray-font">PRICE: '.$valBS["price"].'</span>'
                   .'   </div>'
                   .'</div>';
            }
         }
      }
      echo '   </div>'
          .'</div>';
      echo '</form>';
    }

    /*=======================================================================
    Function: hexagons Lista todos Ventas
    Description: hexagon construction for list sellers
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 14/01/2022
    ===================================================================== */
    static function hexagonsOTCSellersList()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[3][9] = new hexagon('','<img src="./img/icons/dateWhite.png" class="rotate handCursor" onclick="directUrl(\'lasttrxlist\')">');
        $colums[3][9] = $colums[3][9]->getHexa();

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

        self::artiSendMail('blue');
    }

    /*=======================================================================
    Function: form Sellers List
    Description: construction of form Sellers List
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 14/01/2022
    ===================================================================== */
    static function formSellersList($language, $idlead){

        $listbuysell = xclient::getorderl($language, $idlead);
        $listbuysell['list'] = array_reverse($listbuysell["list"]);

        echo '   <form class="formOtc" action="#">'
        .'    <div class="hexa-buylist">'
        .'       <div class="one style gray"></div>'
        .'       <div class="two style gray"></div>'
        .'       <div class="three style gray buyotclist"><p id="buyList" class="rotate font">BUY</p></div>'
        .'    </div>'
        .'    <div class="hexa-selllist">'
        .'        <div class="one style green"></div>'
        .'        <div class="two style green"></div>'
        .'        <div class="three style green sellotclist" ><p id="sellList" class="rotate font">SELL</p></div>'
        .'    </div>'
        .'    <div class="hexa-buysell">'
        .'        <div class="one style blue"></div>'
        .'        <div class="two style blue"></div>'
        .'        <div class="three style blue buysellotc"><img src="./img/icons/whiteX.png" class="rotate-x"></div>'
        .'    </div>';
     echo '   <div class="cntList">'
         .'      <div class="cntListChild">';
     if(is_null($listbuysell['list'])){
        echo '      <div class="innerBox"> No hay registros </div>';
     }else{
        foreach($listbuysell['list'] as $keyBS => $valBS){
           if($valBS["oper"] == "Venta"){
              echo '<div class="innerBox gray-border">'
                  .'   <div class="box-left">'
                  .'      <span id="sellListAlias">ALIAS:'.$valBS["alias"].'</span><br/>'
                  .'      <span>'.$valBS["date"].'</span>'
                  .'   </div>'
                  .'   <div class="box-right">'
                  .'      <span>'.$valBS["id"].' '.$valBS["status"].' '.$valBS["oper"].'</span><br/>'
                  .'      <span>'.$valBS["asset"].'</span><br/>'
                  .'      <span id="sellListAmount" class="gray-font">AMOUNT: '.$valBS["amount"].'</span><br/>'
                  .'      <span id="sellListPrice" class="gray-font">PRICE: '.$valBS["price"].'</span>'
                  .'   </div>'
                  .'</div>';
           }
        }
     }
     echo '   </div>'
         .'</div>';
     echo '</form>';
    }

    /*=======================================================================
    Function: hexagons Lista todas las Transacciones (Trx) del Usuario
    Description: hexagon construction for list all trx from user
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 18/01/2022
    ===================================================================== */
    static function hexagonsLastTrxList()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    }

    /*=======================================================================
    Function: form Ultimas Transacciones Usuario
    Description: construction of form list all trx from user
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 18/01/2022
    ===================================================================== */
    static function formLastTrxList($language, $idlead, $count){

        $listlasttrx = xclient::getlasttrl($language, $idlead, $count);
        echo '  <div class="hexa-info">'
        .'         <div class="one style blue"></div>'
        .'         <div class="two style blue"></div>'
        .'         <div class="three style blue ptpreceivestep"><img id="lnkBlockExplorer" src="./img/icons/informacion.png" class="rotate handCursor" onclick="window.open(\''.$listlasttrx['url'].'\',\'_self\');"></div>'
        .'      </div>';
        echo '<div class="titleList light-blue-block handCursor" id="blockList" onclick="openLastTrxList()">< BLOCK</div>';
     echo '   <div class="cntList block topblock">'
         .'      <div class="cntListChild block">';
     if(is_null($listlasttrx['list'])){
        echo '      <div class="innerBox"> No hay registros </div>';
     }else{
        foreach($listlasttrx['list'] as $keylt => $lastTrx){
              $date=date_create($lastTrx["date"]);
              echo '<div class="innerBox gray-border light-blue-block">'
                  .'   <div class="box-block-left">'
                  .'      <span>'.date_format($date,"Y-m-d").'</span><br/>'
                  .'      <span>'.$lastTrx["opertype"].'</span><br/>'
                  .'      <span>'.$lastTrx["hash"].'</span>'
                  .'   </div>'
                  .'   <div class="box-block-right">'
                  .'      <div class="firstlin red-font">#'.$lastTrx["noper"].'</div>'
                  .'      <span>$ '.$lastTrx["amount"].'</span><br/>'
                  .'      <span>ALIAS '.$lastTrx["name"].'</span>'
                  .'   </div>'
                  .'</div>';
        }
     }
     echo '   </div>'
         .'</div>';
     echo '</form>';
     self::artiSendMail('blue');
    }

    /*=======================================================================
    Function: hexagons Lista de los Bloques
    Description: hexagon construction for blocks list
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 18/01/2022
    ===================================================================== */
    static function hexagonsBlockList()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
        
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';
        
    }

    /*=======================================================================
    Function: form Ultimas Bloques del Usuario
    Description: construction of form list blocks from user
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 18/01/2022
    ===================================================================== */
    static function formBlockList($language, $idlead){

        $listblock = xclient::getblockl($language, $idlead);
        echo '<div class="titleList light-blue-block handCursor" id="lastTrans" onclick="openBlockList()">LAST TRANSACTIONS ></div>';
        echo '   <div class="cntList block topblock">'
         .'      <div class="cntListChild block">';
     if(is_null($listblock['list'])){
        echo '      <div class="innerBox"> No hay registros </div>';
     }else{
        foreach($listblock['list'] as $keyblock => $block){
                 $date=date_create($block["lastdate"]);
                 echo '<div class="innerBox gray-border light-blue-block">'
                     .'   <div class="box-block-left block-box">'
                     .'      <span style="float: left;">'.date_format($date,"Y-m-d").'</span>'
                     .'      <span class="red-font" style="margin-left:50px;float: right;">#'.$block["number"].'</span><br/>'
                     .'      <span id="size" class="size" style="float: left;">SIZE</span> <span style="float: left; margin-left: 10px;">'.$block["size"].'</span><span class="detailsTrx handCursor" onclick="window.open(\''.$listblock['url'].'\',\'_self\');">Details</span>'
                     .'   </div>'
                     .'</div>';
        }
     }
     echo '   </div>'
         .'</div>';
     echo '</form>';
     self::artiSendMail('blue');
    }

    /*=======================================================================
    Function: Change status from first module selection
    Description: Change status from first module selection
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 27/01/2022
    ===================================================================== */
    static function firsTimeModule(){
        if($_SESSION["level"] == "1" && $_SESSION["firsTime"] == 'true'){
            $_SESSION["level"] = 2;
            $_SESSION["firsTime"] = 'false';
        }
    }

    /*=======================================================================
    Function: hexagons PTP Payment Send
    Description: hexagon PTP Payment Send
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 27/01/2022
    ===================================================================== */
    static function hexagonsPTPPaymentSend()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

        self::artiSendMail('blue');
    }

    /*=======================================================================
    Function: form PTP Payment Send
    Description: Form for PTP Payment Send
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 27/10/2021
    ===================================================================== */
    static function formPTPPaymentSend($language, $idlead){

        $leadslist = xclient::getpartyxl($language, $idlead);
        $currencylist = xclient::getcurrencyremitancel($language, $idlead);
        $getparty = xclient::getparty($_SESSION["id"], $_SESSION["language"]);
        $_SESSION["idparty"] = $getparty["idparty"];

        $documents = '';
        if(isset($_SESSION['docpend'])){
            if(strlen($_SESSION['docpend']) > 0){
                if(isset($_SESSION['typeNum'])){
                    $listDoc = explode(",",$_SESSION['docpend']);
                    $keyDoc = array_search($_SESSION['typeNum'], $listDoc);
                    
                    unset($listDoc[$keyDoc]);
                    $preList = array_values($listDoc);
                    $_SESSION['docpend'] = implode(",", $preList);

                    unset($_SESSION['typeNum']);
                }

                $documents = xclient::getcompliancedoctypeparaml($language, $idlead, $_SESSION['docpend']);

                if(is_null($documents['list'])){
                    unset($_SESSION['docpend']);
                    unset($_SESSION['message7001']);
                    unset($_SESSION['urlTo']);
                }
            }else{
                unset($_SESSION['docpend']); 
                unset($_SESSION['message7001']);
                unset($_SESSION['urlTo']);
            }
        }

        echo '      <form class="formOtc" action="#">'
            .'          <div class="hexa-step-ok">'
            .'              <div class="one style blue"></div>'
            .'              <div class="two style blue"></div>'
            .'              <div class="three style blue ptpreceiveok handCursor"><p class="rotate font">OK</p></div>'
            .'          </div>'
            .'          <label id="leadslistLabel" for="leadslist"></label>'
            .'          <select id="leadslist" name="leadslist" class="field-full select-contact" onfocus="actionFocusSel(this, \'8px\', \'ptppayment\', \'select\')" onfocusout="actionFocusOutSel(this, \'20px\', \'ptppayment\', \'select\')">';
        echo '              <option class="options" data-id="" value="-1"></option>';
                        for ($i=0; $i < count($leadslist["list"]); $i++) { 
                            if($leadslist["list"][$i]["id"] != $_SESSION["id"]){
        echo '              <option class="options" data-id="'.$leadslist["list"][$i]["id"].'" value="'.$leadslist["list"][$i]["id"].'" >'.$leadslist["list"][$i]["name"].'</option>';
                            }
                        }
        echo '          </select>'
            .'          <label id="currencylistLabel" for="currencylist"></label>'
            .'          <select id="currencylist" name="currencylist" class="field-full select-currency" onfocus="actionFocusSel(this, \'70px\', \'ptppayment\', \'select\')" onfocusout="actionFocusOutSel(this, \'80px\', \'ptppayment\', \'select\')">';
        echo '              <option class="options" data-id="" value="-1"></option>';
                        for ($i=0; $i < count($currencylist["list"]); $i++) { 
        echo '              <option class="options" data-id="'.$currencylist["list"][$i]["id"].'" value="'.$currencylist["list"][$i]["iso"].'" >'.$currencylist["list"][$i]["iso"].'</option>';
                        }
        echo '          </select>'
            .'          <label id="amountLabel" for="amount">AMOUNT</label><br>'
            .'          <input type="text" maxlength="256" id="amount" name="amount" class="field-full field-amount" onfocus="actionFocus(this, \'-13px\')" onfocusout="actionFocusOut(this, \'1px\')">'
            .'          <label id="commentLabel" for="comment">COMMENT</label><br>'
            .'          <input type="text" maxlength="256" id="comment" name="comment" class="field-full field-comment" onfocus="actionFocus(this, \'-13px\')" onfocusout="actionFocusOut(this, \'1px\')">'
            .'      </form>';
           
            if(isset($_SESSION['message7001'])){
                echo '<div id="requiredDocuments" class="requiredOff">'
                    .'   <label id="docListPenLabel" for="docListPen"></label>'
                    .'   <select id="docListPen" name="docListPen" class="field-full selDoc options blue" onfocus="actionFocusSel(this, \'2px\', \'ptppayment\', \'select\')" onfocusout="actionFocusOutSel(this, \'16px\', \'ptppayment\', \'select\')">'
                    .'      <option data-id="" value="-1" ></option>';
                         for ($i=0; $i < count($documents["list"]); $i++) { 
                echo '      <option data-id="'.$documents["list"][$i]["id"].'" value="'.$documents["list"][$i]["id"].'">'.$documents["list"][$i]["name"].'</option>';
                         }
                echo '   </select>'
                    .'</div>';
                echo '<div id="actionDoc">'
                    .'  <div id="penAction" class="off"><img src="./img/icons/pencil.svg" class="icon ico-blue"></div>'
                    .'  <div id="docAction" class="off">'
                    .'      <form id="docUploadForm" action="./form/message_otc.php" method="POST" enctype="multipart/form-data">'
                    .'         <label class="labelFile uploadDocLabel" for="uploadDoc"><img src="./img/icons/upload2.svg" class="icon ico-blue"></label>'
                    .'         <input type="file" name="uploadDoc" id="uploadDoc" />'
                    .'         <input type="hidden" name="docNum" id="docNum" >'
                    .'      </form>'
                    .'  </div>'
                    .'</div>';
  
                  
            }
            
    } // formPTPPaymentSend

    /*=======================================================================
    Function: hexagons PTP Payment Receive
    Description: hexagon PTP Payment Receive
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 27/01/2022
    ===================================================================== */
    static function hexagonsPTPPaymentReceive()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

        self::artiSendMail('blue');
    }

    /*=======================================================================
    Function: form PTP Payment Receive
    Description: Form for PTP Payment Receive
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 27/10/2021
    ===================================================================== */
    static function formPTPPaymentReceive($language, $idlead){

        $leadslist = xclient::getpartyxl($language, $idlead);
        $currencylist = xclient::getcurrencyremitancel($language, $idlead);
        $getparty = xclient::getparty($_SESSION["id"], $_SESSION["language"]);
        $_SESSION["idparty"] = $getparty["idparty"];

        $documents = '';
        if(isset($_SESSION['docpend'])){
            if(strlen($_SESSION['docpend']) > 0){
                if(isset($_SESSION['typeNum'])){
                    $listDoc = explode(",",$_SESSION['docpend']);
                    $keyDoc = array_search($_SESSION['typeNum'], $listDoc);
                    
                    unset($listDoc[$keyDoc]);
                    $preList = array_values($listDoc);
                    $_SESSION['docpend'] = implode(",", $preList);

                    unset($_SESSION['typeNum']);
                }

                $documents = xclient::getcompliancedoctypeparaml($language, $idlead, $_SESSION['docpend']);

                if(is_null($documents['list'])){
                    unset($_SESSION['docpend']);
                    unset($_SESSION['message7001']);
                    unset($_SESSION['urlTo']);
                }
            }else{
                unset($_SESSION['docpend']);
                unset($_SESSION['message7001']);
                unset($_SESSION['urlTo']);
            }
        }
        
        echo '     <form class="formOtc" action="#">'
            .'<!--           <div class="hexa-step-ok">'
            .'              <div class="one style blue"></div>'
            .'              <div class="two style blue"></div>'
            .'              <div class="three style blue ptpreceiveok handCursor"><p class="rotate font">OK</p></div>'
            .'          </div>'
            .'          <label id="leadslistLabel" for="leadslist"></label>'
            .'          <select id="leadslist" name="leadslist" class="field-full select-contact" onfocus="actionFocusSel(this, \'8px\', \'ptppayment\', \'select\')" onfocusout="actionFocusOutSel(this, \'20px\', \'ptppayment\', \'select\')">';
        echo '              <option class="options" data-id="" value="-1"></option>';
                        for ($i=0; $i < count($leadslist["list"]); $i++) { 
                            if($leadslist["list"][$i]["id"] != $_SESSION["id"]){
        echo '              <option class="options" data-id="'.$leadslist["list"][$i]["id"].'" value="'.$leadslist["list"][$i]["id"].'" >'.$leadslist["list"][$i]["name"].'</option>';
                            }
                        }
        echo '          </select>'
            .'          <label id="currencylistLabel" for="currencylist"></label>'
            .'          <select id="currencylist" name="currencylist" class="field-full select-currency" onfocus="actionFocusSel(this, \'70px\', \'ptppayment\', \'select\')" onfocusout="actionFocusOutSel(this, \'84px\', \'ptppayment\', \'select\')">';
        echo '              <option class="options" data-id="" value="-1"></option>';
                        for ($i=0; $i < count($currencylist["list"]); $i++) { 
        echo '              <option class="options" data-id="'.$currencylist["list"][$i]["id"].'" value="'.$currencylist["list"][$i]["iso"].'" >'.$currencylist["list"][$i]["iso"].'</option>';
                        }
        echo '          </select>'
            .'          <label id="amountLabel" for="amount">AMOUNT</label><br>'
            .'          <input type="text" maxlength="256" id="amount" name="amount" class="field-full field-amount" onfocus="actionFocus(this, \'-13px\')" onfocusout="actionFocusOut(this, \'1px\')">'
            .'          <label id="commentLabel" for="comment">COMMENT</label><br>'
            .'          <input type="text" maxlength="256" id="comment" name="comment" class="field-full field-comment" onfocus="actionFocus(this, \'-13px\')" onfocusout="actionFocusOut(this, \'1px\')"> --->'

            .'          <label class="pure-material-textfield-outlined">'
            .'               <input placeholder=" ">'
            .'                <span>Textfield</span>'
            .'           </label>'
            .'          <label class="pure-material-textfield-outlined-select">'
            .'               <div>'
            .'                  <select placeholder=" ">'
            .'                      <option>Selected</option>';
                                    for ($i=0; $i < count($currencylist["list"]); $i++) { 
            echo '                  <option class="options" data-id="'.$currencylist["list"][$i]["id"].'" value="'.$currencylist["list"][$i]["iso"].'" >'.$currencylist["list"][$i]["iso"].'</option>';
                                    }
            echo '              </select>'
            .'               </div>'
            .'                <span>troleo Hermano</span>'
            .'           </label>'
            .'      </form>';

           
            if(isset($_SESSION['message7001'])){
                echo '<div id="requiredDocuments" class="requiredOff">'
                    .'   <label id="docListPenLabel" for="docListPen"></label>'
                    .'   <select id="docListPen" name="docListPen" class="field-full selDoc options" onfocus="actionFocusSel(this, \'3px\', \'ptppayment\', \'select\')" onfocusout="actionFocusOutSel(this, \'17px\', \'ptppayment\', \'select\')">'
                    .'      <option class="options" value="-1" ></option>';
                         for ($i=0; $i < count($documents["list"]); $i++) { 
                echo '      <option class="options" data-id="'.$documents["list"][$i]["id"].'" value="'.$documents["list"][$i]["id"].'">'.$documents["list"][$i]["name"].'</option>';
                         }
                echo '   </select>'
                    .'</div>';
                echo '<div id="actionDoc">'
                    .'  <div id="penAction" class="off"><img src="./img/icons/pencil.svg" class="icon ico-blue"></div>'
                    .'  <div id="docAction" class="off">'
                    .'      <form id="docUploadForm" action="./form/message_otc.php" method="POST" enctype="multipart/form-data">'
                    .'         <label class="labelFile uploadDocLabel" for="uploadDoc"><img src="./img/icons/upload2.svg" class="icon ico-blue"></label>'
                    .'         <input type="file" name="uploadDoc" id="uploadDoc" />'
                    .'         <input type="hidden" name="docNum" id="docNum" >'
                    .'      </form>'
                    .'  </div>'
                    .'</div>';
            }
            
    } // formPTPPaymentReceive

    /*=======================================================================
    Function: hexagons Tarjeta de credito
    Description: hexagons Tarjeta de credito
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 11/02/2022
    ===================================================================== */
    static function hexagonsInformacionTarjetaCredito()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colums[3][0] = new hexagon('box','<p class="I rotate"></p>');
        $colums[3][0] = $colums[3][0]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    }

    /*=======================================================================
    Function: form Tarjeta de credito
    Description: form for PTP Payment Receive
    Parameters: 
    Algorithm:
    Remarks:F
    Standarized: 11/02/2021
    ===================================================================== */
    static function formInformacionTarjetaCredito($language, $idlead, $idverificationlevel){
        
        $credictTarget = xclient::getcreditcardtypel($language, $idlead);
        $getverificationlevel = xclient::getverificationlevel($_SESSION["language"], $idlead);
        $getcompliancedoctypeverifl = xclient::getcompliancedoctypeverifl($language, $idlead, $idverificationlevel);
        $getparty = xclient::getparty($idlead, $language);

        ?>
        <script>
            function validateTarjetaCredito() {
                document.getElementById("formTDC").submit();
            }
        </script>
        <?php
    
        echo '      <form id="formTDC" class="infoTarjetaCredito" action="./form/creditCard.php" method="POST">';
        echo '          <div class="numeroTarjeta">';
        echo '              <label id="numeroTarjetaCreditoLabel" for="numeroTarjetaCredito">Numero de Tarjeta</label>';
        echo '              <input type="text" id="numeroTarjetaCredito"  name="ccnumber" value="'.$getparty['ccnumber'].'" maxlength="32" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'2px\', \'creditCard\')" onfocusout="actionFocusOut(this, \'16px\', \'creditCard\')">';
        echo '          </div>';
        echo '          <div class="tipoTarjeta">';
        echo '              <label id="tipoTarjetaCreditoLabel" for="tipoTarjetaCredito"></label>';
        echo '              <select id="tipoTarjetaCredito" name="cctype"  onfocus="actionFocusSel(this, \'72px\', \'creditCard\', \'select\')" onfocusout="actionFocusOutSel(this, \'84px\', \'creditCard\', \'select\')">';
        echo '                  <option value="-1"></option>';
                                for ($i=0; $i < count($credictTarget["list"]); $i++) { 
                                    $selected = '';
                                    if($credictTarget["list"][$i]["code"] == $getparty["cctype"]){
                                        $selected = 'selected';
                                    }
        echo '                  <option value="'.$credictTarget["list"][$i]["code"].'" '.$selected.'>'.$credictTarget["list"][$i]["name"].'</option>';
                                }
        echo '              </select>';
        echo '          </div>';
        echo '          <div class="dateCont" style="display: flex;justify-content: space-around;">';
        echo '              <div class="fechaVencimientoMes">';
        echo '                  <label id="fechaVencimientoMesLabel" for="fechaVencimientoMes">Fecha Venc. Mes</label>';
        echo '                  <input type="text" maxlength="2" id="fechaVencimientoMes" name="ccexpmonth" value="'.$getparty['ccexpmonth'].'"  onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'137px\', \'creditCard\')" onfocusout="actionFocusOut(this, \'152px\', \'creditCard\')">';
        echo '              </div>';
        echo '              <div class="fechaVencimientoAnio" >';    
        echo '                  <label id="fechaVencimientoYearLabel" for="fechaVencimientoYear" style="padding-left:7px;">Fecha Venc. Año</label>';
        echo '                  <input type="text" id="fechaVencimientoYear" name="ccexpyear" value="'.$getparty['ccexpyear'].'" maxlength="4" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'137px\', \'creditCard\')" onfocusout="actionFocusOut(this, \'152px\', \'creditCard\')">';
        echo '              </div>';
        echo '          </div>';
        echo '          <div class="codigoValidacion" style="margin-top: 11px;">';
        echo '              <label id="codigoValidacionLabel" for="codigoValidacion">Codigo validacion</label>';
        echo '              <input type="text" id="codigoValidacion" name="cccvc" value="'.$getparty['cccvc'].'" maxlength="3" onkeypress="return valideKey(event);" onfocus="actionFocus(this, \'205px\', \'creditCard\')" onfocusout="actionFocusOut(this, \'217px\', \'creditCard\')">';
        echo '          </div>';
        echo '          <div class="seleccionarDocumento">';
        echo '              <label id="seleccionarDocumentoLabel" for="seleccionarDocumento"></label>';
        echo '              <select id="seleccionarDocumento" name="seleccionarDocumento" class="docSelect" onfocus="actionFocusSel(this, \'275px\', \'creditCard\', \'select\')" onfocusout="actionFocusOutSel(this, \'290px\', \'creditCard\', \'select\')">';
        echo '                   <option value="-1"></option>';
                                foreach($getcompliancedoctypeverifl["list"] as $keyDocPen => $valDocPen){
                                    if(!is_null($valDocPen["id"])){
                                        echo '<option value="'.$valDocPen["id"].'">'.$valDocPen["name"].'</option>';
                                    }
                                }
        echo '              </select>';        
        echo '          </div>';
        echo '          <div class="containerInput">';
        echo '              <label for="selectFile" class="subir"> ';
        echo '                  <img src="./img/icons/yellowUpload.png" class="upload">';
        echo '              </label> ';
        echo '              <input type="file" name="selectFile" id="selectFile" onchange="cambiar()" style="display:none">';
        echo '              <div id="info"></div>';
        echo '          </div>';
        echo '          <button class="buttonHexa" id="buttonSubmit" type="button" onclick="validateTarjetaCredito()">';
        echo '              <p class="okText">Ok</p>';
        echo '          </button>';
        echo '      </form>';
        
        self::artiSendMail('yellow');
        
    } // formInformacionTarjetaCredito

    /*=======================================================================
    Function: load s` window
    Description: load s` window
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 23/03/2022
    ===================================================================== */
    static function loaderScreen(){
        echo  '<link rel="stylesheet" type="text/css" href="css/components/loaderScreen.css">';
        echo  '<div id="modalScreen" class="modalScreen">';
        echo    '<img src="./img/images/gif.gif" id="gifLoader" style="width: 20%;">';
        echo '   <div class="ventana dis" id="callModal">';
        echo '      <h1 id="resumenOp" class="title"></h1>';
        echo '      <h2 id="montoDivisa" class="sub_title"></h2>';
        echo '      <p id="winMont" class="txt"></p>';
        echo '      <h2 id="txtcurrcommission" class="credit_card"></h2>';
        echo '      <p id="currcommission" class="txt_a"></p>';
        echo '      <h2 id="tasa_2" class="tasa">TASA CAMBIO</h2>';
        echo '      <p id="currrate" class="txt_b"></p>';
        echo '      <h2 id="txtvescommission" class="gastos"></h2>';
        echo '      <p id="vescommission" class="txt_c"></p>';
        echo '      <h2 id="totalPagar" class="pagar">TOTAL PAGAR BS</h2>';
        echo '      <p id="totalves" class="txt_d"></p>';
        echo '      <img src="./img/icons/purpleOk.png" id="closeModalCall" class="img" onclick="ventanaToggle(\'add\')">';
        echo '   </div>';
        echo  '</div>';
    }

    /*=======================================================================
    Function: hexagons Arti send Mail
    Description: hexagons Arti send Mail
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 18/02/2022
    ===================================================================== */
    static function artiSendMail($color){

        ?>
        <script>
            const colorModal = '<?php echo $color; ?>';
        </script>
        <?php

        echo  '<link rel="stylesheet" type="text/css" href="css/components/artiSendMail.css">';

        echo '<div id="modalArtiSendMail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" class="dis">'
        .'  <div class="modal-dialog">'
        .'	    <div class="modal-content">'
        .'		    <div id="modalemailheader">'
        .'		    	<h3 id="sendMail" class="newEmail"></h3>'
        .'		    	<img src="./img/icons/whiteX.png" alt="X" id="closeModalEmail" onclick="closeModalEmail()">'
        .'		    </div>'
        .'		    <div id="formArtiSendMail">'
        .'			    <form id="formEmail" method="POST">'
        .'				    <div class="modal-body">'
        .'					    <div class="inputEmail">'
        .'                          <label id="subjectLabel" class="label" for="subject"></label>'
        .'					    	<input id="subject" type="text" maxlength="256" name="subject" onfocus="actionFocus(this, \'0px\')" onfocusout="actionFocusOut(this, \'8px\')">'
        .'					    </div>'
        .'                      <div class="inputEmail" style="height: 85%;">'
        .'                          <label id="messageLabel" class="label" for="message"></label>'
        .'                          <textarea id="message" name="message" rows="5" cols="40" onfocus="actionFocus(this, \'0px\')" onfocusout="actionFocusOut(this, \'8px\')"></textarea>'
        .'					    </div>'
        .'                      <div class="hexa-sendMailBtn">'
        .'                          <div class="one style '.$color.'"></div>'
        .'                          <div class="two style '.$color.'"></div>'
        .'                          <div class="three style '.$color.'">'
        .'                              <p class="rotate font handCursor" onclick="formEmailSumbit()">OK</p>'
        .'                          </div>'
        .'                      </div>'
        .'		    		</div>'
        .'	    		</form>'
        .'	    	</div>'
        .'	    </div>'
        .'  </div>'
        .'</div>';

        echo  '<script src="js/utils/artiSendMail.js"></script>';
        //echo  '<script src="js/utils/language/translations/translateMail.js"></script>';
    }

    /*=======================================================================
    Function: hexagons Reporte de Operaciones
    Description: hexagons Reporte de Operaciones
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 18/02/2022
    ===================================================================== */
    static function hexagonsReportedeOperaciones()
    {

        $hexagon = new hexagon('','');
        $colum = array ($hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(), $hexagon->getHexa(),$hexagon->getHexa());
        $colums = array ($colum, $colum, $colum, $colum, $colum, $colum, $colum);

        $colums[0][9] = new hexagon('','<a href="./watchman.php"><img src="./img/icons/home.png" class="rotate"></a>');
        $colums[0][9] = $colums[0][9]->getHexa();

        $colums[6][9] = new hexagon('','<img src="./img/icons/mascotIcon.png" class="rotate handCursor" onclick="artiEmail()">');
        $colums[6][9] = $colums[6][9]->getHexa();

        $colum1 = '<div class="colum1">'.$colums[0][0].$colums[0][1].$colums[0][2].$colums[0][3].$colums[0][4].$colums[0][5].$colums[0][6].$colums[0][7].$colums[0][8].$colums[0][9].'</div>';
        $colum2 = '<div class="colum2">'.$colums[1][0].$colums[1][1].$colums[1][2].$colums[1][3].$colums[1][4].$colums[1][5].$colums[1][6].$colums[1][7].$colums[1][8].$colums[1][9].'</div>';
        $colum3 = '<div class="colum3">'.$colums[2][0].$colums[2][1].$colums[2][2].$colums[2][3].$colums[2][4].$colums[2][5].$colums[2][6].$colums[2][7].$colums[2][8].$colums[2][9].'</div>';
        $colum4 = '<div class="colum4">'.$colums[3][0].$colums[3][1].$colums[3][2].$colums[3][3].$colums[3][4].$colums[3][5].$colums[3][6].$colums[3][7].$colums[3][8].$colums[3][9].'</div>';
        $colum5 = '<div class="colum5">'.$colums[4][0].$colums[4][1].$colums[4][2].$colums[4][3].$colums[4][4].$colums[4][5].$colums[4][6].$colums[4][7].$colums[4][8].$colums[4][9].'</div>';
        $colum6 = '<div class="colum6">'.$colums[5][0].$colums[5][1].$colums[5][2].$colums[5][3].$colums[5][4].$colums[5][5].$colums[5][6].$colums[5][7].$colums[5][8].$colums[5][9].'</div>';
        $colum7 = '<div class="colum7">'.$colums[6][0].$colums[6][1].$colums[6][2].$colums[6][3].$colums[6][4].$colums[6][5].$colums[6][6].$colums[6][7].$colums[6][8].$colums[6][9].'</div>';
  
        echo '<div class="hexaContainer">'.$colum1.$colum2.$colum3.$colum4.$colum5.$colum6.$colum7.'</div>';

    }

    /*=======================================================================
    Function: form reporte de operaciones
    Description: form reporte de operaciones
    Parameters: 
    Algorithm:
    Remarks:F
    Standarized: 18/02/2021
    ===================================================================== */
    static function windowReportedeOperaciones($language, $idlead){
    
        $listreportl = xclient::reportl($language, $idlead);

        echo '   <div class="cntList block topblock">';
        echo '      <div class="cntListChild block">';
        if(is_null($listreportl['list'])){
            echo '<div class="reportContainer">';
            echo '  No hay registros';
            echo '</div>';
        }else{
            foreach($listreportl['list'] as $keylt => $lastAct){
                $date=date_create($lastAct["date"]);

                echo '<div class="reportContainer">';
                echo '  <div class="leftContainer">';
                echo        '<p class="date">'.date_format($date,"Y-m-d").'</p>';
                echo        '<p class="time">'.date_format($date,"H:i:s").'</p>';
                echo '  </div>';
                echo '  <div class="centerContainer">';
                echo        '<p class="operation">'.$lastAct["oper"].'</p>';
                echo        '<p class="numberOperation">'.$lastAct["id"].'</p>';
                echo '  </div>';
                echo '  <div class="rightContainer">';
                echo    '<p class="ziro">'.$lastAct["amount"].'</p>';
                echo    '<p class="confirmation">'.$lastAct["status"].'</p>';
                echo '  </div>';
                echo '</div>';
            }
        }
        echo '      </div>';
        echo '  </div>';


    } // form reporte de operaciones

    static function loaderHeader($headerService){
        switch ($headerService) {
            case 'index':
                ?>
                <LINK rel="stylesheet" type="text/css" href="css/components/home.css">
                <script>
                    const sesionID = '<?php if(isset($_SESSION["id"])){ echo $_SESSION["id"]; }  ?>';
                    let level = '<?php if(isset($_SESSION["level"])){ echo $_SESSION["level"]; } ?>';
                    const pageFromArti = "";
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <script src="./js/utils/language/translator.js"></script>
                <script src="./js/ui/main/menu.js"></script>
                <?php
                echo'   <article class="cntBottomMark cntIndexMark">';
                echo'      <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';

                if (isset($_SESSION["level"])){
                    if($_SESSION["level"] == "0"){
                        xpresentationLayer::modalPin();
                    }
                    if($_SESSION["level"] == "1"){
                        xpresentationLayer::modalPin();
                    } 
                }

            break;
            case 'otc':
                self::stepsChanger();
                echo'   <header class="cntTopTitleBlue">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">OTC EXCHANGE</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = '<?php echo $_SESSION["id"]; ?>';
                    const pageFromArti = "otc.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "11 OTCBUY";
                </script>
                <script src="https://unpkg.com/imask"></script>
                <?php
            break;
            case 'otcExchange':
                echo'   <header class="cntTopTitleBlue">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">OTC EXCHANGE</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = '<?php echo $_SESSION["id"]; ?>';
                    const pageFromArti = "otcbuylist.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "11 OTCBUY";
                </script>
                <script src="https://unpkg.com/imask"></script>
                <?php
            break;
            case 'otcselllist':     
                echo'   <header class="cntTopTitleBlue">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">OTC EXCHANGE</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'   <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "otcselllist.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "12 OTCSELL";
                </script>
                <?php
            break;
            case 'register': ?>
                <LINK rel="stylesheet" type="text/css" href="css/services/profile/register.css"> 
                <script>
                    const pageFromArti = "register.php";
                    const userEmail = 'New User';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <header>
                    <h1>
                        <div class="X">X</div>
                        <div class="A">A</div>
                        <div class="T">T</div>
                        <div class="O">O</div>
                        <div class="X1">X</div>
                        <div class="I">I</div>
                    </h1>
                </header>
                <article class="cntBottomMark">
                    <h3 class="textBottomMark">XATOXI</h3>
                </article><?php
            break;
            case 'resetpin': ?>
                <script>
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <?php
                self::titleHeaderXatoxi();
                ?>
                <article class="cntBottomMark">
                    <h3 class="textBottomMark">XATOXI</h3>
                </article><?php
            break;
            case 'blockList': ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "blocklist.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "15 BLOCKEXPLORER";
                </script>
                <LINK rel="stylesheet" type="text/css" href="css/services/wallet/blocklist.css">
                <script src="./js/services/wallet/blockslist.js"></script>
                <script src="./js/utils/language/translator.js"></script>
                <script src="./js/utils/language/translations/traslateBlockList.js"></script>
                <?php
                echo'    <header class="cntTopTitleBlue">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">BLOCK EXPLORER</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'    </header>';
                echo'    <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'    </article>';
            break;
            case 'walletReceive':
                self::stepsChanger();
                echo'    <header class="cntTopTitleBlue">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">PTP PAYMENTS RECEIVE</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "ptppaymentreceive.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "14 WALLETRECV";
                </script>
                <?php
            break;
            case 'walletSend':
                self::stepsChanger();
                echo'    <header class="cntTopTitleBlue">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">PTP PAYMENTS SEND</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'    </header>';
                echo'    <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'    </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "ptppaymentsend.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "13 WALLETSEND";
                </script>
                <?php
            break;
            case 'blockExplorer': ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "lasttrxlist.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "15 BLOCKEXPLORER";
                </script>
                <LINK rel="stylesheet" type="text/css" href="css/services/wallet/lasttrxlist.css">
                <script src="./js/services/wallet/lasttrxlist.js"></script>
                <script src="./js/utils/language/translator.js"></script>
                <script src="./js/utils/language/translations/traslateLastTrxList.js"></script>
                <?php
                echo'   <header class="cntTopTitleBlue">';
                echo'      <h1 id="txtTopTitle" class="txtTopTitle">BLOCK EXPLORER</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'      <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';

            break;
            case 'wallet':
                echo'   <header id="principal" class="cntTopTitleBlue">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle"></h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'   </header>';
                echo'   <header id="walletCoinName">';
                echo'       <h1 id="textWalletCoinName"></h1>';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "walletsmgr.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "53 CREDIT CARD";                
                </script>
                <?php
            break;
            case 'wallet2':    
                echo'   <header class="cntTopTitleBlue">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">WALLET</h1>';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                echo'   <H2 class="BTC">15 BTC</H2>';
            break;
            case 'openBankAccount':
            break;
            case 'buyFiat':
                echo'   <header class="cntTopTitlePurple">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">Compra</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "buy.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "21 EXCBUY";
                </script>
                <script src="https://unpkg.com/imask"></script>
                <?php
            break;
            case 'sellFiat':
                echo'   <header class="cntTopTitlePurple">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">VENTA</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "sell.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "22 SELL";
                </script>
                <?php
            break;
            case 'receiveFiat': ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";  
                    const pageFromArti = "receive.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';    
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "26 RECVREMIT";
                </script>
                <?php
                echo'    <header class="cntTopTitlePurple">';
                echo'        <h1 id="txtTopTitle" class="txtTopTitle">RECEPCION</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'    </header>';
                echo'    <article class="cntBottomMark">';
                echo'        <h3 class="textBottomMark">XATOXI</h3>';
                echo'    </article>';
            break;
            case 'remittance':
                echo'    <header class="cntTopTitlePurple">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">ENCOMIENDA</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'    </header>';
                echo'    <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'    </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "remittance.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "23 SENDREMIT";
                </script>
                <script src="https://unpkg.com/imask"></script>
                <?php
            break;
            case 'exchangeFiat':
                echo'    <header class="cntTopTitlePurple">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">CAMBIO</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'    </header>';
                echo'    <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'    </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "exchange.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "25 EXCHANGE";
                </script>
                <?php
            break;
            case 'debitCard':
                echo'   <header class="cntTopTitlePurple">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle"></h1>';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';  
                ?>  
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "debitCard.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <?php
            break;
            case 'prepaidCredictCard':
            break;
            case 'transferFiat':         
                echo'    <header class="cntTopTitlePurple">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">TRANSFERENCIA</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'    </header>';
                echo'    <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'    </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "transfer.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "24 SENDTRANSFER";
                </script>
                <?php
            break;
            case 'transactionReport':
                echo'    <header class="cntTopTitlePurple">';
                echo'        <h1 id="txtTopTitle" class="txtTopTitle">Reporte de Operaciones</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'    </header>';
                echo'    <article class="cntBottomMark">';
                echo'        <h3 class="textBottomMark">XATOXI</h3>';
                echo'    </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "transactionReport.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "29 OPREPORT";
                </script>
                <?php
            break;
            case 'qchat':
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "qchat.php";
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "41 CHAT";
                </script>
                <?php
                echo'    <header class="cntTopTitleQchat">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitleQchat">QCHAT</h1>';
                /*echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';*/
                echo'    </header>';
                echo'    <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'    </article>';
            break;
            case 'qchatMsg':
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "qchatMsg.php";
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const targetID = "<?php echo $_SESSION["targetidlead"]; ?>";
                </script>
                <?php
                echo'   <header class="cntTopTitleOrange">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle"></h1>';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
            break;
            case 'userVerification':
                ?>
                <script>
                    const pageFromArti = "profile2.php";
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";  
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "51 VERIFICATION";
                </script>
                <LINK rel="stylesheet" type="text/css" href="css/services/profile/perfil2.css">
                <script src="./js/utils/language/translator.js"></script>
                <script src="./js/utils/language/translations/translateProfile.js"></script>
                <?php

                echo'   <header class="cntTopTitleYellow">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">Datos Personales</h1>';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';

            break;
            case 'userVerification2':
                echo'    <header class="cntTopTitleYellow">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">Datos Personales</h1>';
                echo'    </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "profile3.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <?php
            break;
            case 'userVerification3':
                echo'   <header class="cntTopTitleYellow">';
                echo'         <h1 id="txtTopTitle" class="txtTopTitle">Direccion y Nacionalidad</h1>';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "profile4.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <?php
            break;
            case 'userVerification4':
                echo'   <header class="cntTopTitleYellow">';
                echo'         <h1 id="txtTopTitle" class="txtTopTitle">Direccion y Nacionalidad</h1>';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "profile5.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <?php
            break;
            case 'userVerification5':
                echo'   <header class="cntTopTitleYellow">';
                echo'         <h1 id="txtTopTitle" class="txtTopTitle">Documento de identidad</h1>';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "profile6.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <?php
            break;
            case 'personalInfo':
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "personalInfo.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <LINK rel="stylesheet" type="text/css" href="css/services/profile/personalInfo.css">
                <script src="./js/ui/profile/profile.js"></script>
                <script src="./js/services/profile/profile.js"></script>
                <script src="./js/utils/language/translator.js"></script>
                <script src="./js/utils/language/translations/translateProfile.js"></script>
                <?php
                echo'   <header class="cntTopTitleYellow">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">Datos del registro</h1>';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
            break;
            case 'bankInformation':
                echo'   <header class="cntTopTitleYellow posInfoBank">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">INFORMACIÓN BANCARIA</h1>';
                echo'       <img src="img/icons/emptyStar.png" alt="empty star" class="emptyStar handCursor" onclick="addFavorite()">';
                echo'       <img src="img/icons/favoriteIcon.png" alt="star" class="star dis">';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "bankInfo.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "52 BANKACCOUNT";
                </script>
                <?php    
            break;
            case 'bankInformation2':
                echo'    <header class="cntTopTitleYellow posInfoBank">';
                echo'        <h1 id="txtTopTitle" class="txtTopTitle">INFORMACIÓN BANCARIA</h1>';
                echo'    </header>';
                echo'    <article class="cntBottomMark">';
                echo'        <h3 class="textBottomMark">XATOXI</h3>';
                echo'    </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "bankInfo2.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <?php
            break;
            case 'creditCardInformation':     
                echo'   <header class="cntTopTitleYellow">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle">TARJETA DE CREDITO</h1>';
                echo'   </header>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                ?>
                <script>
                    const sesionID = "<?php echo $_SESSION["id"]; ?>";
                    const pageFromArti = "creditCard.php";
                    const userEmail = '<?php echo $_SESSION["email"]; ?>';
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                    const serviceCode = "53 CREDIT CARD";
                </script>
                <?php
            break;
            case 'accountDelete':
                self::titleHeaderXatoxi();
                echo'    <article class="cntBottomMark">';
                echo'        <h3 class="textBottomMark">XATOXI</h3>';
                echo'    </article>';
                echo'    <img src="./img/images/blueArti.png" class="robot_azul">';
                echo'    <img src="./img/images/blueCloudDialogue.png" class="nub_az">';
                echo'    <div class="div_cont">';
                echo'        <form  id="form" action="./form/deleteAccount.php" method="POST" class="inputForm">';
                echo'        <p id="text" class="txt"></p>';
                echo'        <p id="confirmation" class="confirmation dis"></p>';
                echo'        <p id="buttonYes_first" class="Yes" style="color: white" ></p>';
                echo'        <p id="buttonYes_second" class="Yes dis" style="color: white" ></p>';
                echo'        <a href="./watchman.php" class="btnResetLeft"><p class="okb" style="color: white" >NO</p></a>';
                echo'        </form>';
                echo'    </div>';
                ?>
                <script>
                    const pageFromArti = "deleteAccount.php";
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <?php
            break;
            case 'firma':
                echo'   <header class="cntTopTitleYellow">';
                echo'       <h1 id="txtTopTitle" class="txtTopTitle"></h1>';
                echo'   </header>';
                echo'       <h3 id="drawSign" class="text"></h3>';
                echo'   <article class="cntBottomMark">';
                echo'       <h3 class="textBottomMark">XATOXI</h3>';
                echo'   </article>';
                echo'   <form id="canvasForm", method="POST" action="">';
                echo'       <canvas id="canvas" width="300" height="300" name="canvas"></canvas><br>';
                echo'       <input type="hidden" name="imgFirma" id="imgFirma">';
                echo'       <img src="./img/icons/trash.png" class="handCursor trash" id="borrador" onclick="borrar();" value="Borrador">';
                //echo'       <button type="button">';
                echo'           <img src="./img/icons/arrowNext.png" class="signNext handCursor submit" onclick="signUpUpload();">';
                //echo'       </button>';
                echo'   </form>';
                ?>
                <script>
                    const pageFromArti = "sign.php";
                    const mainLanguage = '<?php if(isset($_SESSION["language"])){ echo $_SESSION["language"]; }else{ echo "en";} ?>';
                </script>
                <?php
            break;
            case 'msgSuccess': 
                self::titleHeaderXatoxi();
                ?>
                <img src="./img/images/greenArti.png" class="robot_azul">
                <img src="./img/images/greenCloudDialogue.png" class="nub_az">
                <div id="blockScroll"></div>
                <div id="successCont" class="div_cont">
                    <p id="successMsg" class="text"><?php
                        if(isset($_SESSION["correo"])){
                            echo $_SESSION["correo"];
                            unset($_SESSION["correo"]);
                        } else if(isset($_SESSION['messageUpload'])){
                            echo $_SESSION['messageUpload'];
                            unset($_SESSION['typeUpload']);
                            unset($_SESSION['messageUpload']);
                        } else if(isset($_SESSION['message'])){
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        } else if (isset($_SESSION['ok'])){
                            echo $_SESSION['ok'];
                            unset($_SESSION["ok"]);
                        }else{
                            echo "OK";
                        } 
                    ?></p>
                    <br>
                </div>
                <article class="cntBottomMark">
                    <h3 class="textBottomMark">XATOXI</h3>
                </article>
                <?php
                $_SESSION["firsTime"] = 'false';
            break;
            case 'msgError':
                self::titleHeaderXatoxi();
                ?>
                <img src="./img/images/purpleRedArti.png" class="robot_azul">
                <img src="./img/images/redCloudDialogue.png" class="nub_az">
                <article class="cntBottomMark">
                    <h3 class="textBottomMark">XATOXI</h3>
                </article>
                <?php
            break;
            case 'msgConfirmation':
                self::titleHeaderXatoxi();
                ?>
                <img src="./img/images/blueArti.png" class="robot_azul">
                <img src="./img/images/blueCloudDialogue.png" class="nub_az">
                <div class="div_cont" style="margin-left:65px; margin-top:10px; text-align: center; color: white;">
                    <?php 
                        if(isset($_SESSION['otpCode'])){ 
                            $_SESSION["level"] = "1";
                            $_SESSION["firsTime"] = 'false';
                        ?>
                        <span>OTP VERIFICACION</span><br>
                        <div class="otpDiv"><?php echo $_SESSION['otpCode']; ?></div>
                        <span>PRESIONE OK</span>
                    <?php }elseif(isset($_SESSION['message'])){
                            $_SESSION["level"] = "1";
                            $_SESSION["firsTime"] = 'false'; 
                        echo $_SESSION['message'];
                    }else{ ?>
                    <p class="text">Se ha cerrado<br>
                    LA SESION</p>            
                    <?php } ?>
                </div>
                <article class="cntBottomMark">
                    <h3 class="textBottomMark">XATOXI</h3>
                </article>
                <?php
            break;
            case 'msgAlert':
                self::titleHeaderXatoxi();
                ?>
                <article class="cntBottomMark">
                    <h3 class="textBottomMark">XATOXI</h3>
                </article>
                <img src="./img/images/yellowArti.png" class="robot_azul">
                <img src="./img/images/yellowCloudDialogue.png" class="nub_az">
                <div id="blockScroll"></div>
                <div class="div_cont">
                    <p class="text"><?php
                        if(isset($_SESSION["message5000"])){
                            echo $_SESSION["message5000"];
                            unset($_SESSION["message5000"]);
                        }
                        if(isset($_SESSION["message7001"])){
                            echo $_SESSION["message7001"];
                            //unset($_SESSION["message7001"]); 
                            //need it to work with docpen variable 
                        }
                    ?></p>
                </div>
                <?php
                $_SESSION["firsTime"] = 'false';
            break;
            default:
            break;
        }
    }

    /*=======================================================================
    Function: titleHeaderXatoxi
    Description: It show the title header with the mark colors
    Parameters: 
    Algorithm:
    Remarks:F
    Standarized: 20/04/2022
    ===================================================================== */
    static function titleHeaderXatoxi(){
        echo '<header class="cntTopTitleDarkBlue">
            <h2>
                <div class="X">X</div>
                <div class="A">A</div>
                <div class="T">T</div>
                <div class="O">O</div>
                <div class="X1">X</div>
                <div class="I">I</div>
            </h2>
        </header>';
    }

    /*=======================================================================
    Function: stepsChanger
    Description: It create a template to show hexagons steps following the numbers of steps to show
    Parameters: 
    Algorithm:
    Remarks:F
    Standarized: 30/03/2022
    ===================================================================== */
    static function stepsChanger(){
        echo '<LINK rel="stylesheet" type="text/css" href="css/components/steps.css">';
        echo '    <div id="cntSteps">'
        .'          <div class="hexa-step01">'
        .'              <div id="step01partA" class="one style gray"></div>'
        .'              <div id="step01partB" class="two style gray"></div>'
        .'              <div id="step01partC" class="three style gray"><span id="stepText01" class="rotate">I</span></div>'
        .'          </div>'
        .'          <div class="hexa-step02">'
        .'              <div id="step02partA" class="one style gray"></div>'
        .'              <div id="step02partB" class="two style gray"></div>'
        .'              <div id="step02partC" class="three style gray"><span id="stepText02" class="rotate">II</span></div>'
        .'          </div>'
        .'          <div class="hexa-step03">'
        .'              <div id="step03partA" class="one style gray"></div>'
        .'              <div id="step03partB" class="two style gray"></div>'
        .'              <div id="step03partC" class="three style gray"><span id="stepText03" class="rotate">III</span></div>'
        .'          </div>'
        .'          <div class="hexa-step04">'
        .'              <div id="step04partA" class="one style gray"></div>'
        .'              <div id="step04partB" class="two style gray"></div>'
        .'              <div id="step04partC" class="three style gray"><span id="stepText04" class="rotate">IV</span></div>'
        .'          </div>'
        .'          <div class="hexa-step05">'
        .'              <div id="step05partA" class="one style gray"></div>'
        .'              <div id="step05partB" class="two style gray"></div>'
        .'              <div id="step05partC" class="three style gray"><span id="stepText05" class="rotate">V</span></div>'
        .'          </div>'
        .'          <div class="hexa-step06">'
        .'              <div id="step06partA" class="one style gray"></div>'
        .'              <div id="step06partB" class="two style gray"></div>'
        .'              <div id="step06partC" class="three style gray"><span id="stepText06" class="rotate">VI</span></div>'
        .'          </div>'
        .'          <div class="hexa-step07">'
        .'              <div id="step07partA" class="one style gray"></div>'
        .'              <div id="step07partB" class="two style gray"></div>'
        .'              <div id="step07partC" class="three style gray"><span id="stepText07" class="rotate">VII</span></div>'
        .'          </div>'
        .'        </div>';
        echo '<script src="./js/ui/hexagonsSteps.js"></script>';
    }
} 