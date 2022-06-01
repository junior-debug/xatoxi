<?php
include_once("xmicroservice.php");

class coreChat extends xmicroservice{

   //Endpoint to Chat
   public static function createbk($pbkname, $idlead, $language){
      $getservices = array(
         "idlead" => $idlead,
         "language" => $language,
         "bkname" => $pbkname
      );
      parent::msexec("createbk",$getservices);
      return parent::getResult();
   }

   public static function putBKSignedGiven($pbkname, $pkey, $pdata, $ppk, $psk, $idlead, $language){
      $getservices = array(
         "idlead" => $idlead,
         "language" => $language,
         "bkname" => $pbkname,
         "key" => $pkey,
         "data" => $pdata,
         "pk" => $ppk,
         "sk" => $psk
      );
      parent::msexec("putbksignedgiven", $getservices);
      return parent::getResult();
   }

   public static function getAllKeysWithPhoto($bkname, $ptype, $pmax, $idlead, $language){
      $getservices = array(
         "idlead" => $idlead,
         "language" => $language,
         "bkname" => $bkname,
         "type" => $ptype,
         "max" => $pmax
      );
      parent::msexec("getallkeyswithphoto", $getservices);
      return parent::getResult();
   }

   public static function getBKSigned($pbkname, $pkey, $ppk, $idlead, $language){
      $getservices = array(
         "idlead" => $idlead,
         "language" => $language,
         "bkname" => $pbkname,
         "key" => $pkey,
         "pk" => $ppk
      );
      parent::msexec("getbksigned", $getservices);
      return parent::getResult();
   }

   public static function generateXMSSLead($idlead, $language){
      $getservices = array(
         "idlead" => $idlead,
         "language" => $language,
      );
      parent::msexec("xmsslead", $getservices);
      return parent::getResult();
   }

   // Lista de metodos

   public static function BKSWAP($indexKey) {
      $arrayAux = array();
      $arrayAux['bkname'] = 'XCHAT-SWAPPK.XBK';
      $arrayAux['pk'] = "00000001aa96dcd33382cfecd3bacd40c64f789c11cb7bd2aacec2eb73857efbd87ac019affc8731213df62eff3e7ec3035ef9f4ff5591adb23860909eb6ad22b1356e4f";
      $arrayAux['sk'] = "000000010000000045f6677ae5ce82699c397645b0269b7aef6169762f580154a09b10c314e221b6098eeac8cdba9ed8c820965d1244d737424bf4bdbd63631d2ff7fff91baed0b5aa96dcd33382cfecd3bacd40c64f789c11cb7bd2aacec2eb73857efbd87ac019affc8731213df62eff3e7ec3035ef9f4ff5591adb23860909eb6ad22b1356e4f";
      return $arrayAux[$indexKey];
   }

   public static function BKTOKEN($indexKey) {
      $arrayAux = array();
      $arrayAux['bkname'] = 'XCHAT-PUSHTOKEN.XBK';
      $arrayAux['pk'] = "00000001ab6f26e0777301d67d62fd3b351e066d8e1e03f88de991e72514de8e1330ef60e85715b232a4b4efadece8aaa851037d5a3c166f8994f17157c000aba1aa5d52";
      $arrayAux['sk'] = "0000000100000000019b94e6991089448412d8dbf8f4c0b108774cb36068c9422b7a679605f934f36540006c09c110d41b09cb7d7aad448652d17f2fd5a40d82f6372df10b97d3bbab6f26e0777301d67d62fd3b351e066d8e1e03f88de991e72514de8e1330ef60e85715b232a4b4efadece8aaa851037d5a3c166f8994f17157c000aba1aa5d52";   
      return $arrayAux[$indexKey];
   }

   public static function BKLIST($indexKey) {
      $arrayAux = array();
      $arrayAux['pk'] = "00000001a5e0cc352e253824096a91ba5574db4186126c1d1878efd7b8114a66f8e718e908f774cd4d934de8c6b69abac94d2c59a4d8b6f874803b4fcd9d6dff2dcc0bfd";
      $arrayAux['sk'] = "0000000100000000f2042cabd01541d0a2ff4473d5da290a8510f47fbb72d47fc7648d8f96d1ceb7d22dbebaf70bc567007891b4f952f38f3cbd03ba36e49ea020d5ec0fbf9afc6da5e0cc352e253824096a91ba5574db4186126c1d1878efd7b8114a66f8e718e908f774cd4d934de8c6b69abac94d2c59a4d8b6f874803b4fcd9d6dff2dcc0bfd";
      return $arrayAux[$indexKey];
   }

   public static function initBK($idlead, $language){
      $bkSwap = '';
      $bkToken = '';
      $bkSwap = self::createbk(self::BKSWAP('bkname'), $idlead, $language);
      $bkToken = self::createbk(self::BKTOKEN('bkname'), $idlead, $language);
      if($bkSwap['message'] != "OK"){
         return $bkSwap['message'];
      }else if($bkToken["message"] != "OK"){
         return $bkToken["message"];
      }else{
         return true;
      }
   }

   // Metodo para enviar un mensaje
   public static function sendMessage( $pcontent, $myidlead,  $targetidlead, $idlead, $language) {
      // Establezco los nombres de los Elementos a intervenir
      $pairKey = array();
      $bkname = 'XCHAT-'.$myidlead.'-'.$targetidlead.'.XBK';

      // Creo bloques operacionales
      self::initBK($idlead, $language);

      $pairKey = self::generateXMSSLead($idlead, $language);

      // Cargo las llaves en memoria
      $pk = $pairKey["pk"];
      $sk = $pairKey["sk"];

      // Envio pk a la nube para su distribución
      self::putBKSignedGiven(self::BKSWAP('bkname'), $myidlead, $pk, self::BKSWAP('pk'), self::BKSWAP('sk'), $idlead, $language);

      // Creo el bloque, exista o no
      self::createBK($bkname, $idlead, $language);

      // Traigo el timestamp para usarlo como key
      $date = new DateTime();
      $timestamp = $date->getTimestamp();

      // Guardo el mensaje en el bloque
      self::putBKSignedGiven($bkname, $timestamp."284", $pcontent, $pk, $sk, $idlead, $language);

      return 'Success';
   }

   public static function getMessagesPartially($myidlead, $targetidlead, $idlead, $language){

      // Elementos
      $bkname = 'XCHAT-'.$myidlead.'-'.$targetidlead.'.XBK';
      $targetbkname = 'XCHAT-'.$targetidlead.'-'.$myidlead.'.XBK';

      // Creo bloques operacionales
      self::initBK($idlead, $language);
      
      $pairKey = self::generateXMSSLead($idlead, $language);

      $response = self::getBKSigned(self::BKSWAP('bkname'), $targetidlead, self::BKSWAP('pk'), $idlead, $language);

      // Cargo las llaves en memoria
      $mypk = $pairKey["pk"];
      $targetpk = $response["data"];

      // Envio pk a la nube para su distribución
      self::putBKSignedGiven(self::BKSWAP('bkname'), $myidlead, $mypk, self::BKSWAP('pk'), self::BKSWAP('sk'), $idlead, $language);

      // Creo los bloques, exista o no
      self::createBK($bkname, $idlead, $language);
      self::createBK($targetbkname, $idlead, $language);

      // Traigo las llaves de mensajes de mi bloque
      $getallkeysresponse = self::getAllKeysWithPhoto($bkname, 0, 0, $idlead, $language);

      // Traigo las llaves de mensajes del bloque del target
      $getallkeysresponsetarget = self::getAllKeysWithPhoto($targetbkname, 0, 0, $idlead, $language);

      // Genero una lista con la respuesta de mi bloque
      $bkkeys = explode(";", $getallkeysresponse["keys"]);

      // Genero una lista con la respuesta del bloque target
      $targetbkkeys = explode(";", $getallkeysresponsetarget["keys"]);

      // Generacion de la lista de mis mensajes
      $mymessages = array();
      for ($i = 0; $i < count($bkkeys); $i++) {
         $getbksignedresponse = self::getBKSigned($bkname, $bkkeys[$i], $mypk, $idlead, $language);
         if ($bkkeys[$i] != '') {
            $auxStr = '';
            if(strlen($bkkeys[$i]) > 10){
               $auxStr = substr($bkkeys[$i], 0, 10);
            }else{
               $auxStr = $bkkeys[$i];
            }
            $date = date('Y-m-d H:i:s', $auxStr );
            array_push($mymessages, array($date, $auxStr, $getbksignedresponse['data'], $myidlead));
         }
      }

      // Generacion de la lista de los mensajes target
      $targetmessages = array();
      for ($i = 0; $i < count($targetbkkeys); $i++) {
         //$getbksignedresponse = self::getBKSigned($targetbkname, $targetbkkeys[$i], $targetpk, $idlead, $language);
         if ($targetbkkeys[$i] != '') {
            $auxStr = '';
            if(strlen($targetbkkeys[$i]) > 10){
               $auxStr = substr($targetbkkeys[$i], 0, 10);
            }else{
               $auxStr = $targetbkkeys[$i];
            }
            $date = date('Y-m-d H:i:s', $auxStr);
            //$getbksignedresponse['data']
            array_push($targetmessages, array($date, $auxStr, $targetbkkeys[$i], $targetidlead));
         }
      }

      // Fusiono las listas de mensajes
      $fullmessages = array_merge($mymessages, $targetmessages);

      usort($fullmessages,  function($a, $b) {
         $auxTimeA = new DateTime($a['0']);
         $auxTimeB = new DateTime($b['0']);
         if($auxTimeA > $auxTimeB) {
             return 1;
         }elseif($auxTimeA < $auxTimeB) {
             return -1;
         }else {
             return 0;
         }
      });

      return $fullmessages;
   }

   // Descifra mensajes en funcion al timestamp
   public static function decryptMessage($myidlead, $targetidlead, $timestamp, $idlead, $language) {
      $bkname = 'XCHAT-'.$targetidlead.'-'.$myidlead.'.XBK';

      $pairKey = self::generateXMSSLead($targetidlead, $language);
      $targetpk = $pairKey["pk"];
      $getbksignedresponse = self::getBKSigned($bkname, $timestamp, $targetpk, $idlead, $language);
      
      return $getbksignedresponse["data"];
   }

   // Coloca un nuevo partipante en la lista de chats
   public static function putInChatList($idleadowner, $newidlead, $idlead, $language){
      $bkname = 'XCHAT-LIST-'.$idleadowner.'.XBK';
      self::createbk($bkname, $idlead, $language);
      $response = self::putBKSignedGiven($bkname, $newidlead, 'Y', self::BKLIST("pk"), self::BKLIST("sk"), $idlead, $language);
      return $response;
   }

   // Recupera los participantes de la lista de chat con foto y nombre
   public static function getChatListFull($idleadowner, $language){
      $bkname = 'XCHAT-LIST-'.$idleadowner.'.XBK';
      self::createbk($bkname, $idleadowner, $language);
      $response = self::getAllKeysWithPhoto($bkname, 0, 0, $idleadowner, $language);
      return $response;
   }

   // Obtiene el token de las Push Notifications del destinatario de la nube
   public static function getToken($targetidlead, $idlead, $language){
      $response = self::getBKSigned(self::BKTOKEN('bkname'), $targetidlead, self::BKTOKEN('pk'), $idlead, $language);
      return $response["data"];
   }

}

?>