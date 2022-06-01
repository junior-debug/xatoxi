<?php
header("Content-type: application/json; charset=utf-8");
session_start();
include_once("../services/xclient.php");
include_once("../services/coreChat.php");

try{
   switch ($_POST["cond"]) {
      case 'getparty':
         $response = xclient::getparty(
            $_POST["idlead"], 
            $_POST["language"]
         );
         echo json_encode($response);
      break;
      case 'addfavservice':
         $response = xclient::addfavservice(
            $_POST["language"],
            $_POST["idlead"], 
            $_POST["servicecode"]
         );
         echo json_encode($response);
      break;
      case 'getservicesl':
         $response = xclient::getservicesl(
            $_POST["idlead"],
            $_POST["language"]
         );
         echo json_encode($response);
      break;
      case 'getfavservicesl':
         $response = xclient::getfavservicesl(
            $_POST["language"], 
            $_POST["idlead"]
         );
         echo json_encode($response);
      break;
      case 'getorderl':
         $response = xclient::getorderl(
            $_POST["language"], 
            $_POST["idlead"],
            $_POST["isocrypto"],
            $_POST["isocurrency"]
         );
         echo json_encode($response);
      break;
      case 'sendemail':
         $response = xclient::sendemail(
            $_POST["language"], 
            $_POST["subject"],
            "arti@xatoxi.com",
            $_POST["header"],
            $_POST["body"],
            ""
         );
         echo json_encode($response);
      break;
      case 'genotp':
         $response = xclient::genotp(
            $_POST["language"], 
            $_POST["idlead"]
         );
         echo json_encode($response);
      break;
      case 'getcryptol':
         $response = xclient::getcryptol(
            $_POST["language"], 
            $_POST["idlead"]
         );
         echo json_encode($response);
      break;
      case 'getcryptoidleadl':
         $response = xclient::getcryptoidleadl(
            $_POST["language"], 
            $_POST["idlead"]
         );
         echo json_encode($response);
      break;
      case 'addwallet':
         $response = xclient::addwallet(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcrypto"],
            $_POST["address"]
         );
         echo json_encode($response);
      break;
      case 'getcurrencysrcl':
         $response = xclient::getcurrencysrcl(
            $_POST["language"],
            $_POST["idinstrumentsrc"],
            $_POST["idlead"]
         );
         echo json_encode($response);
      break;
      case 'getinstrumentdstl':
         $response = xclient::getinstrumentdstl(
            $_POST["language"],
            $_POST["idinstrumentsrc"],
            $_POST["idlead"],
            $_POST["idcurrencysrc"]
         );
         echo json_encode($response);
      break;
      case 'getcurrencydstl':
         $response = xclient::getcurrencydstl(
            $_POST["language"],
            $_POST["idinstrumentsrc"],
            $_POST["idlead"],
            $_POST["idcurrencysrc"],
            $_POST["idinstrumentdst"]
         );
         echo json_encode($response);
      break;
      case 'execexchangeok':
         $response = xclient::execexchangeok(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idinstrumentsrc"],
            $_POST["idcurrencysrc"],
            $_POST["idinstrumentdst"],
            $_POST["idcurrencydst"],
            $_POST["amount"],
            $_POST["bank"],
            $_POST["numref"],
            $_POST["routing"]
         );
         echo json_encode($response);
      break;
      case 'execexchange':
         $response = xclient::execexchange(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idinstrumentsrc"],
            $_POST["idcurrencysrc"],
            $_POST["idinstrumentdst"],
            $_POST["idcurrencydst"],
            $_POST["amount"],
            $_POST["bank"],
            $_POST["numref"],
            $_POST["routing"],
            $_POST["otp"]
         );
         echo json_encode($response);
      break;
      case 'calcsell':
         $response = xclient::calcsell(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["amount"],
            $_POST["idcurrency"],
            $_POST["idinstrumentdebit"],
            $_POST["idclearencetype"]
         );
         echo json_encode($response);
      break;
      case 'getcellphoneareacodel':
         $response = xclient::getcellphoneareacodel(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["countrycode"]
         );
         echo json_encode($response);
      break;
      case 'getstatecityl':
         $response = xclient::getstatecityl(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idstate"]
         );
         echo json_encode($response);
      break;
      case 'execoutputwok':
         $response = xclient::execoutputwok(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idleaddst"],
            $_POST["amount"],
            $_POST["idcurrency"]
         );
         echo json_encode($response);
      break;
      case 'execoutputw':
         $response = xclient::execoutputw(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idleaddst"],
            $_POST["amount"],
            $_POST["idcurrency"],
            $_POST["otp"]
         );
         echo json_encode($response);
      break;
      case 'execinputwok':
         $response = xclient::execinputwok(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idleadsrc"],
            $_POST["amount"],
            $_POST["idcurrency"]
         );
         echo json_encode($response);
      break;
      case 'execinputw':
         $response = xclient::execinputw(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idleadsrc"],
            $_POST["amount"],
            $_POST["idcurrency"],
            $_POST["otp"]
         );
         echo json_encode($response);
      break;
      case 'execsell':
         $response = xclient::execsell(
            $_POST["language"],
            $_POST["idcurrency"],
            $_POST["idlead"],
            $_POST["amount"],
            $_POST["otp"],
            $_POST["idinstrumentdebit"],
            $_POST["idclearencetype"],
            $_POST["acc"],
            $_POST["reference"],
            $_POST["ccnumber"],
            $_POST["ccexpyear"],
            $_POST["ccexpmonth"],
            $_POST["cccvc"],
            $_POST["cctype"],
            $_POST["debitcardnumter"],
            $_POST["creditcardnumber"]
            );
            echo json_encode($response);
         break;
      case 'getcryptoprice':
         $response = xclient::getcryptoprice(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["isocrypto"],
            $_POST["isocurrency"]
         );
         echo json_encode($response);
      break;
      case 'execotcok':
         $response = xclient::execotcok(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcrypto"],
            $_POST["idoperationtype"],
            $_POST["amount"],
            $_POST["price"]
         );
         echo json_encode($response);
      break;
      case 'execotc':
         $response = xclient::execotc(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcrypto"],
            $_POST["idoperationtype"],
            $_POST["otp"],
            $_POST["amount"],
            $_POST["price"]
         );
         echo json_encode($response);
      break;
      case 'calcsendtr':
         $response = xclient::calcsendtr(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcurrency"],
            $_POST["idcountry"],
            $_POST["amount"],
            $_POST["idclearencetype"]
         );
         echo json_encode($response);
      break;
      case 'execsendtrok':
         $response = xclient::execsendtrok(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcountry"],
            $_POST["amount"],
            $_POST["idcurrency"],
            $_POST["idclearencetype"],
            $_POST["acc"],
            $_POST["reference"],
            $_POST["bdocumentid"],
            $_POST["baddress"],
            $_POST["bfirstname"],
            $_POST["bmiddlename"],
            $_POST["blastname"],
            $_POST["bsecondlastname"],
            $_POST["bbank"],
            $_POST["bacc"],
            $_POST["bbankcountry"],
            $_POST["bbankcity"],
            $_POST["bbankaddress"],
            $_POST["bbankabaswiftiban"],
            $_POST["ibacc"],
            $_POST["ibbank"],
            $_POST["ibbankcountry"],
            $_POST["ibbankcity"],
            $_POST["ibbankaddress"],
            $_POST["ibbankabaswifiban"],
            $_POST["ccnumber"],
            $_POST["ccexpyear"],
            $_POST["ccexpmonth"],
            $_POST["cccvc"],
            $_POST["cctype"],
            $_POST["bank"],
            $_POST["routing"]
         );
         echo json_encode($response);
      break;
      case 'execsendtr':
         $response = xclient::execsendtr(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcountry"],
            $_POST["amount"],
            $_POST["idcurrency"],
            $_POST["idclearencetype"],
            $_POST["acc"],
            $_POST["reference"],
            $_POST["bdocumentid"],
            $_POST["baddress"],
            $_POST["bfirstname"],
            $_POST["bmiddlename"],
            $_POST["blastname"],
            $_POST["bsecondlastname"],
            $_POST["bbank"],
            $_POST["bacc"],
            $_POST["bbankcountry"],
            $_POST["bbankcity"],
            $_POST["bbankaddress"],
            $_POST["bbankabaswiftiban"],
            $_POST["ibacc"],
            $_POST["ibbank"],
            $_POST["ibbankcountry"],
            $_POST["ibbankcity"],
            $_POST["ibbankaddress"],
            $_POST["ibbankabaswifiban"],
            $_POST["ccnumber"],
            $_POST["ccexpyear"],
            $_POST["ccexpmonth"],
            $_POST["cccvc"],
            $_POST["cctype"],
            $_POST["bank"],
            $_POST["routing"],
            $_POST["otp"]
         );
         echo json_encode($response);
      break;
      case 'calcbuy':
         $response = xclient::calcbuy(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["amount"],
            $_POST["idcurrency"],
            $_POST["idinstrumentdebit"]
         );
         echo json_encode($response);
      break;
      case 'execbuyok':
         $response = xclient::execbuyok(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcurrency"],
            $_POST["acc"],
            $_POST["amount"],
            $_POST["idinstrumentdebit"],
            $_POST["idinstrumentcredit"],
            $_POST["debitcardnumter"],
            $_POST["ccnumber"],
            $_POST["ccexpyear"],
            $_POST["ccexpmonth"],
            $_POST["cccvc"],
            $_POST["cctype"],
            $_POST["mpbankcode"],
            $_POST["mpbankaccount"]
         );
         echo json_encode($response);
      break;
      case 'execbuy':
         $response = xclient::execbuy(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcurrency"],
            $_POST["acc"],
            $_POST["amount"],
            $_POST["otp"],
            $_POST["idinstrumentdebit"],
            $_POST["idinstrumentcredit"],
            $_POST["debitcardnumter"],
            $_POST["ccnumber"],
            $_POST["ccexpyear"],
            $_POST["ccexpmonth"],
            $_POST["cccvc"],
            $_POST["cctype"],
            $_POST["mpbankcode"],
            $_POST["mpbankaccount"]
         );
         echo json_encode($response);
      break;
      case 'recvok':
         $response = xclient::recvok(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["acc"],
            $_POST["key"],
            $_POST["addr"],
            $_POST["bdate"],
            $_POST["idparty"],
            $_POST["idlocation"],
            $_POST["idclearencetype"],
            $_POST["mpbankcode"],
            $_POST["mpbankaccount"],
            $_POST["prepaidcardnumber"],
            $_POST["prepaidcardaccount"],
            $_POST["remittancecardnumber"],
            $_POST["remittancecardaccount"]
         );
         echo json_encode($response);
      break;
      case 'recv':
         $response = xclient::recv(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["acc"],
            $_POST["key"],
            $_POST["addr"],
            $_POST["bdate"],
            $_POST["idparty"],
            $_POST["idlocation"],
            $_POST["idclearencetype"],
            $_POST["mpbankcode"],
            $_POST["mpbankaccount"],
            $_POST["prepaidcardnumber"],
            $_POST["prepaidcardaccount"],
            $_POST["remittancecardnumber"],
            $_POST["remittancecardaccount"],
            $_POST["otp"]
         );
         echo json_encode($response);
      break;
      case 'getbankl':
         $response = xclient::getbankl(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcountry"]
         );
         echo json_encode($response);
      break;
      case 'getproviderl':
         $response = xclient::getproviderl(
            $_POST["language"],
            $_POST["idcountry"],
            $_POST["idlead"] 
         );
         echo json_encode($response);
      break;
      case 'execsendok':
         $response = xclient::execsendok(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcountry"],
            $_POST["idprovider"],
            $_POST["amount"],
            $_POST["idremitancetype"],
            $_POST["idcurrency"],
            $_POST["idclearencetype"],
            $_POST["acc"],
            $_POST["reference"],
            $_POST["bdocumentid"],
            $_POST["bfirstname"],
            $_POST["bmiddlename"],
            $_POST["blastname"],
            $_POST["bsecondlastaname"],
            $_POST["bbank"],
            $_POST["bacc"],
            $_POST["ccnumber"],
            $_POST["ccexpyear"],
            $_POST["ccexpmonth"],
            $_POST["cccvc"],
            $_POST["cctype"],
            $_POST["bank"],
            $_POST["routing"]
         );
         echo json_encode($response);
      break;
      case 'execsend':
         $response = xclient::execsend(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcountry"],
            $_POST["idprovider"],
            $_POST["amount"],
            $_POST["idremitancetype"],
            $_POST["idcurrency"],
            $_POST["idclearencetype"],
            $_POST["acc"],
            $_POST["reference"],
            $_POST["bdocumentid"],
            $_POST["bfirstname"],
            $_POST["bmiddlename"],
            $_POST["blastname"],
            $_POST["bsecondlastaname"],
            $_POST["bbank"],
            $_POST["bacc"],
            $_POST["ccnumber"],
            $_POST["ccexpyear"],
            $_POST["ccexpmonth"],
            $_POST["cccvc"],
            $_POST["cctype"],
            $_POST["otp"],
            $_POST["bank"],
            $_POST["routing"]
         );
         echo json_encode($response);
      break;
      case 'getremitancetypel':
         $response = xclient::getremitancetypel(
            $_POST["language"],
            $_POST["idprovider"],
            $_POST["idlead"]
         );
         echo json_encode($response);
      break;
      case 'calcsend':
         $response = xclient::calcsend(
            $_POST["language"],
            $_POST["idprovider"],
            $_POST["idcountry"],
            $_POST["amount"],
            $_POST["idlead"],
            $_POST["idclearencetype"]
         );
         echo json_encode($response);
      break;
      case 'execsellok':
         $response = xclient::execsellok(
            $_POST["language"],
            $_POST["idlead"],
            $_POST["idcurrency"],
            $_POST["amount"],
            $_POST["idinstrumentdebit"],
            $_POST["idclearencetype"],
            $_POST["acc"],
            $_POST["reference"],
            $_POST["ccnumber"],
            $_POST["ccexpyear"],
            $_POST["ccexpmonth"],
            $_POST["cccvc"],
            $_POST["cctype"],
            $_POST["debitcardnumter"],
            $_POST["creditcardnumber"]
         );
         echo json_encode($response);
      break;
      case 'sendMessage':
         $response = coreChat::sendMessage($_POST["pcontent"], $_SESSION["id"],  $_POST["targetidlead"], $_POST["idlead"], $_POST["language"]);
         echo json_encode($response);
      break;
      case 'getMessagesPartially':
         $response = coreChat::getMessagesPartially($_SESSION["id"], $_POST["targetidlead"], $_POST["idlead"], $_POST["language"]);
         echo json_encode($response);
      break;
      case 'decryptMessage':
         $response = coreChat::decryptMessage(
            $_SESSION["id"],
            $_POST["targetidlead"],
            $_POST["timestamp"],
            $_POST["idlead"],
            $_POST["language"]
         );
         echo json_encode($response);
      break;
      case 'putInChatList':
         $response = coreChat::putInChatList($_POST["idleadowner"], $_POST["newidlead"], $_POST["idlead"], $_POST["language"]);
         echo json_encode($response);
      break;
      case 'getChatListFull':
         $response = coreChat::getChatListFull($_SESSION["id"], $_POST["language"]);
         echo json_encode($response);
      break;
      case 'getToken':
         $response = coreChat::getToken($_POST["targetidlead"], $_POST["idlead"], $_POST["language"]);
         echo json_encode($response);
      break;
      case 'changeLanguage':
         $_SESSION["language"] = $_POST["language"];
         echo json_encode($_SESSION["language"]);
      break;
      case 'wichLanguage':
         if(!isset($_SESSION["language"])){
            echo json_encode(array('en'));
         }else{
            echo json_encode($_SESSION["language"]);
         }
      break;
      case 'sesionReset':
         unset($_SESSION["areacode"]);
         unset($_SESSION["countrycode"]);
         unset($_SESSION["email"]);
         $_SESSION["firsTime"] = "false";
         unset($_SESSION["id"]);
         unset($_SESSION["idcountry"]);
         unset($_SESSION["idparty"]);
         $_SESSION["level"] = "0";
         unset($_SESSION["ok"]);
         unset($_SESSION["monto"]);
         unset($_SESSION["phonenumber"]);
         unset($_SESSION["timeout"]);
         unset($_SESSION["verificationlevel"]);
         unset($_SESSION['urlSpecial']);
         unset($_SESSION['urlTo']);
         echo json_encode(array('level' => $_SESSION["level"]));
      break;
      case 'jumpMainChat':
         $_SESSION["targetidlead"] = $_POST["targetidlead"];
         echo json_encode($_SESSION["targetidlead"]);
      break;
      case 'signWrite':
         $_SESSION['urlTo'] = $_POST["urlToSrc"];
         $_SESSION['docNum'] = $_POST['typeUpload'];
         echo json_encode(array('OK'));
      break;
      case 'resetpine':
         $response = xclient::resetpine(
            $_POST["language"], 
            $_POST['correo']
         );
         if ($response["code"] == "") {
            $_SESSION["message5000"] = $response["message"];
            $_SESSION['urlTo'] = 'resetpin.php';
         } elseif ($response["code"] == "0000") {
            $_SESSION["message"] = $response["message"];
            $_SESSION['urlTo'] = 'index.php';
         }
         echo json_encode($response);
      break;
      case 'getphoto':
         set_error_handler(function ($err_severity, $err_msg, $err_file, $err_line, array $err_context)
         {
             throw new ErrorException( $err_msg, 0, $err_severity, $err_file, $err_line );
         }, E_WARNING);
         $response = xclient::getphoto(
            $_POST["language"], 
            $_POST['idlead']
         );
         $contactURL = '';
         try{
            $size = getimagesize($response["url"]);
            $image = (strtolower(substr($size['mime'], 0, 5)) == 'image' ? true : false);

            $response["url"] = $image ? $response["url"] : './img/icons/contactIcon.png';
         }catch(Exception $e){
            $response["url"] = './img/icons/contactIcon.png';
         }
         echo json_encode($response);
         restore_error_handler();
      break;
      case 'getpartylead':
         $response = xclient::getpartylead(
            $_POST["language"], 
            $_POST['email']
         );
         echo json_encode($response);
      break;
      case 'personalInfoV11':
         $response = xclient::personalInfoV11(
            $_POST['language'], 
            $_POST['idlead'],
            $_POST['firstname'], 
            $_POST['middlename'],
            $_POST['lastname'], 
            $_POST['secondlastname']
         );
         echo json_encode($response);
      break;
      case 'personalInfoV12':
         $response = xclient::personalInfoV12(
            $_POST['language'], 
            $_POST['idlead'],
            $_POST['birthdate'], 
            $_POST['idcivilstate'],
            $_POST['idgender'], 
            $_POST['idoccupation']
         );
         echo json_encode($response);
      break;
      case 'addressInfoV21':
         $response = xclient::addressInfoV21(
            $_POST['language'], 
            $_POST['idlead'],
            $_POST['idstate'], 
            $_POST['idcity'],
            $_POST['fulladdress'], 
            $_POST['zipcode']
         );
         echo json_encode($response);
      break;
      case 'addressInfoV22':
         $response = xclient::addressInfoV22(
            $_POST['language'], 
            $_POST['idlead'],
            $_POST['idcountrybirth'],
            $_POST['idcountrynationality']
         );
         echo json_encode($response);
      break;
      case 'documentinfov31':
         $response = xclient::documentinfov31(
            $_POST['language'], 
            $_POST['idlead'],
            $_POST['documentidtype'], 
            $_POST['documentid'],
            $_POST['didexpirationdate'], 
            $_POST['didemissiondate'],
            $_POST['didemissionplace']
         );
         echo json_encode($response);
      break;
      case 'requestcreditcardok':
         $response = xclient::requestcreditcardok(
            $_POST['language'], 
            $_POST['idlead']
         );
         echo json_encode($response);
      break;
      case 'requestcreditcard':
         $response = xclient::requestcreditcard(
            $_POST['language'], 
            $_POST['idlead'],
            $_POST['otp']
         );
         echo json_encode($response);
      break;
      case 'verificationlevel':
         $response = xclient::getverificationlevel(
            $_POST["language"], 
            $_POST['idlead']
         );
         $_SESSION["verificationlevel"] = $response["verificationlevel"];
         echo json_encode($response);
      break;
      case 'processAlert':
         $_SESSION['message5000'] = $_POST["message"];
         $_SESSION['urlTo'] = $_POST["urlTo"];
         echo json_encode(array('OK'));
      break;
      case 'processSuccess':
         if(isset($_POST["correo"])){
            $_SESSION["correo"] = $_POST["correo"];
         }
         if(isset($_POST["messageUpload"])){
            $_SESSION['messageUpload'] = $_POST["message"];
         }
         if(isset($_POST["message"]) && strpos($_POST["message"], "OK") !== false){
            $_SESSION['message'] = $_POST["message"];
         }
         if(isset($_POST["ok"])){
            $_SESSION['ok'] = $_POST["ok"];
         }
         if(isset($_POST["urlSpecial"])){
            $_SESSION['urlSpecial'] = $_POST["urlSpecial"];
         }
         $_SESSION['urlTo'] = $_POST["urlTo"];
         echo json_encode(array('OK'));
      break;
      case 'processDocPen':
         $_SESSION['docpend'] = $_POST["docpend"];
         $_SESSION['message7001'] = $_POST["message"];
         $_SESSION['urlTo'] = $_POST["urlTo"];
         echo json_encode(array('OK'));
      break;
      case 'processConfirmation':
         $status = '';
         if(isset($_POST["otpCode"])){
            $_SESSION["otpCode"] = $_POST["otpCode"];
         }
         if(isset($_POST["monto"])){
            $_SESSION["monto"] = $_POST["monto"];
            $_SESSION["remittance"] = $_POST["remittance"];
            $_SESSION["urlSpecial"] = true;
         }
         if(strpos($_POST["message"], "OK") !== false){
            $_SESSION['message'] = $_POST["message"];
            $status = "OK";
         }
         $_SESSION["urlTo"] = $_POST["urlTo"];
         $result = array("status"=>$status);
         echo json_encode($result);
      break;
      case 'uploadFile':
         $getparty = xclient::getparty($_SESSION["id"], $_SESSION["language"]);

         $_SESSION['typeNum'] = $_POST['docNum'];

         $docname = '';
         $document = '';
         if($_POST['docNum'] == '8'){
            $temp = explode(".", $_FILES['uploadDoc']['name']);
            $docname = $temp[0].".PNG";
            $document = base64_encode(file_get_contents($_FILES['uploadDoc']['tmp_name']));
         }elseif($_POST['docNum'] == '3'){
            $docname = "signUp";
            $document = $_POST["uploadDoc"];
         }else{
            $docname = $_FILES['uploadDoc']['name'];
            $document = base64_encode(file_get_contents($_FILES['uploadDoc']['tmp_name']));
         }

         $result = xclient::upload($_SESSION["language"], $_SESSION["id"], $_POST['docNum'], $getparty["idparty"], $docname, $document);
         
         $_SESSION['messageUpload'] = $result["message"];

         if(isset($_POST["urlTo"])) {
            $_SESSION['urlTo'] = $_POST["urlTo"];
         }else{
            $result["urlSrc"] = $_SESSION['urlTo'];
         }

         echo json_encode($result);
         break;
   }
}catch(Exception $e){
   echo 'Excepción capturada: '.  $e->getMessage(). "\n";
}
