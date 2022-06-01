<?php
include_once("xmicroservice.php");

class xclient extends xmicroservice {

// Endpoint Main Menu

   public static function getparty( $idlead,  $language) {
      $getservices = array(
            "idlead" => $idlead,
            "language" => $language);
      parent::msexec("getparty",$getservices);
      return parent::getResult();
   } // End getparty

   public static function getservicesl( $idlead,  $language) {
      $getservices = array(
            "idlead" => $idlead,
            "language" => $language);
      parent::msexec("getservicesl",$getservices);
      return parent::getResult();
   } // End getservicesl

   public static function getallcountrydetaill( $language) {
      $getservices = array(
            "language" => $language);
      parent::msexec("getallcountrydetaill",$getservices);
      return parent::getResult();
   } // End getallcountrydetaill

   public static function authe( $language, $email, $pin) {
      $getservices = array(
            "language" => $language,
            "email" => $email,
            "pin" => $pin);
      parent::msexec("authe",$getservices);
      return parent::getResult();
   } // End authe

   public static function getverificationlevel( $language, $id ) {
      $getservices = array(
            "language" => $language,
            "idlead" => $id);
      parent::msexec("getverificationlevel",$getservices);
      return parent::getResult();
   } // End getverificationlevel

   public static function upload( $language, $id, $type, $idparty, $filename, $encoded ) {
      $getservices = array(
            "language" => $language,
            "idlead" => $id,
            "type" => $type,
            "idparty" => $idparty,
            "filename" => $filename,
            "encoded" => $encoded);
      parent::msexec("upload",$getservices);
      return parent::getResult();
   } // End upload

   public static function documentinfov31( $language, $id, $documentidtype, $documentid, $didexpirationdate, $didemissiondate, $didemissionplace ) {
      $getservices = array(
            "language" => $language,
            "idlead" => $id,
            "documentidtype" => $documentidtype,
            "documentid" => $documentid,
            "didexpirationdate" => $didexpirationdate,
            "didemissiondate" => $didemissiondate,
            "didemissionplace" => $didemissionplace);
      parent::msexec("documentinfov31",$getservices);
      return parent::getResult();
   } // End documentinfov31

   public static function personalinfov11( $language, $idlead, $firstname, $middlename, $lastname, $secondlastname ) {
      $getservices = array(
            "language" => $language,
            "idlead" => $idlead,
            "firstname" => $firstname,
            "middlename" => $middlename,
            "lastname" => $lastname,
            "secondlastname" => $secondlastname);
      parent::msexec("personalinfov11",$getservices);
      return parent::getResult();
   } // End personalinfov11

   public static function personalinfov12( $language, $idlead, $birthdate, $idcivilstate, $idgender, $idoccupation ) {
      $getservices = array(
            "language" => $language,
            "idlead" => $idlead,
            "birthdate" => $birthdate,
            "idcivilstate" => $idcivilstate,
            "idgender" => $idgender,
            "idoccupation" => $idoccupation);
      parent::msexec("personalinfov12",$getservices);
      return parent::getResult();
   } // End personalinfov12

   public static function addressinfov21( $language, $idlead, $idstate, $idcity, $fulladdress, $zipcode ) {
      $getservices = array(
            "language" => $language,
            "idlead" => $idlead,
            "idstate" => $idstate,
            "idcity" => $idcity,
            "fulladdress" => $fulladdress,
            "zipcode" => $zipcode);
      parent::msexec("addressinfov21",$getservices);
      return parent::getResult();
   } // End addressinfov21

   public static function addressinfov22( $language, $idlead, $idcountrybirth, $idcountrynationality ) {
      $getservices = array(
            "language" => $language,
            "idlead" => $idlead,
            "idcountrybirth" => $idcountrybirth,
            "idcountrynationality" => $idcountrynationality);
      parent::msexec("addressinfov22",$getservices);
      return parent::getResult();
   } // End addressinfov22

   public static function genpin($language) {
      $getservices = array(
         "language" => $language);
      parent::msexec("genpin",$getservices);
      $genpin = parent::getResult();
      return $genpin["pin"];
   } // End genpin

   public static function addlead($language, $email, $countrycode, $phonenumber, $areacode) {
      $getservices = array(
         "language" => $language,
         "email" => $email,
         "countrycode" => $countrycode,
         "phonenumber" => $phonenumber,
         "areacode" => $areacode);
      parent::msexec("addlead",$getservices);
      return parent::getResult();
   } // End addlead

   public static function getstatecityl($language, $idlead, $idstate) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idstate" => $idstate);
      parent::msexec("getstatecityl",$getservices);
      return parent::getResult();
   } // End getstatecityl

   public static function getphoto($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getphoto",$getservices);
      return parent::getResult();
   } // End getphoto

   public static function getinstrumentsrcl($idlead, $language) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getinstrumentsrcl",$getservices);
      return parent::getResult();
   } // End getinstrumentsrcl

   public static function getcountryl($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getcountryl",$getservices);
      return parent::getResult();
   } // End getconutryl

   public static function getclearencetypel($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getclearencetypel",$getservices);
      return parent::getResult();
   } // End getclearencetypel

   public static function getclearencetypeoutputl($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getclearencetypeoutputl",$getservices);
      return parent::getResult();
   } // End getclearencetypeoutputl

   public static function getlocationvenl($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getlocationvenl",$getservices);
      return parent::getResult();
   } // End getlocationvenl

   public static function getcurrencytrl($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getcurrencytrl",$getservices);
      return parent::getResult();
   } // End getcurrencytrl

   public static function getcurrencyl($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getcurrencyl",$getservices);
      return parent::getResult();
   } // End getcurrencyl

   public static function getdebitinstrumentl($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getdebitinstrumentl",$getservices);
      return parent::getResult();
   } // End getdebitinstrumentl

   public static function getcreditinstrumentl($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getcreditinstrumentl",$getservices);
      return parent::getResult();
   } // End getcreditinstrumentl

   public static function getgenderl($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getgenderl",$getservices);
      return parent::getResult();
   } // End getgenderl

   public static function getcivilstatel($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getcivilstatel",$getservices);
      return parent::getResult();
   } // End getcivilstatel

   public static function getoccupationl($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getoccupationl",$getservices);
      return parent::getResult();
   } // End getoccupationl

   public static function getcountrystatel($language, $idlead, $idcountry) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idcountry" => $idcountry);
      parent::msexec("getcountrystatel",$getservices);
      return parent::getResult();
   } // End getcountrystatel

   public static function getpartydocumenttypel($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getpartydocumenttypel",$getservices);
      return parent::getResult();
   } // End getpartydocumenttypel

   public static function getcountryalll($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getcountryalll",$getservices);
      return parent::getResult();
   } // End getcountryalll

   public static function getcompliancedoctypeverifl($language, $idlead, $idverificationlevel) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead, 
         "idverificationlevel" => $idverificationlevel);
      parent::msexec("getcompliancedoctypeverifl",$getservices);
      return parent::getResult();
   } // End getcompliancedoctypeverifl

   public static function getbankl($language, $idlead, $idcountry) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead, 
         "idcountry" => $idcountry);
      parent::msexec("getbankl",$getservices);
      return parent::getResult();
   } // End getbankl

   public static function geticccbankl($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead); 
      parent::msexec("geticccbankl",$getservices);
      return parent::getResult();
   } // End geticccbankl

   public static function getcreditcardtypel($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead); 
      parent::msexec("getcreditcardtypel",$getservices);
      return parent::getResult();
   } // End getcreditcardtypel

   
   public static function getcellphoneareacodel($language, $idlead, $countrycode) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "countrycode" => $countrycode);
      parent::msexec("getcellphoneareacodel",$getservices);
      return parent::getResult();
   } // End getcellphoneareacodel

   public static function getlocationl($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead); 
      parent::msexec("getlocationl",$getservices);
      return parent::getResult();
   } // End getcreditcardtypel

   public static function execsellok($language, $idlead,  $idcurrency, $amount, $idinstrumentdebit, $idclearencetype, $acc, $reference, $ccnumber, $ccexpyear, $ccexpmonth, $cccvc, $cctype, $debitcardnumter, $creditcardnumber) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idcurrency" => $idcurrency,
         "amount" => $amount,
         "idinstrumentdebit" => $idinstrumentdebit,
         "idclearencetype" => $idclearencetype,
         "acc" => $acc,
         "reference" => $reference,
         "ccnumber" => $ccnumber,
         "ccexpyear" => $ccexpyear,
         "ccexpmonth" => $ccexpmonth,
         "cccvc" => $cccvc,
         "cctype" => $cctype,
         "debitcardnumter" => $debitcardnumter,
         "creditcardnumber" => $creditcardnumber);
      parent::msexec("execsellok",$getservices);
      return parent::getResult();
   } // End execsellok

   public static function execbuyok($language, $idlead, $idcurrency, $acc, $amount, $idinstrumentdebit, $idinstrumentcredit, $debitcardnumter, $ccnumber, $ccexpyear, $ccexpmonth, $cccvc, $cctype, $mpbankcode, $mpbankaccount) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idcurrency" => $idcurrency,
         "acc" => $acc,
         "amount" => $amount,
         "idinstrumentdebit" => $idinstrumentdebit,
         "idinstrumentcredit" => $idinstrumentcredit,
         "debitcardnumter" => $debitcardnumter,
         "ccnumber" => $ccnumber,
         "ccexpyear" => $ccexpyear,
         "ccexpmonth" => $ccexpmonth,
         "cccvc" => $cccvc,
         "cctype" => $cctype,
         "mpbankcode" => $mpbankcode,
         "mpbankaccount" => $mpbankaccount
      );

      parent::msexec("execbuyok",$getservices);
      return parent::getResult();
   } // End execbuyok 

   public static function execbuy($language, $idlead, $idcurrenc, $acc, $amount, $otp, $idinstrumentdebit, $idinstrumentcredit, $debitcardnumter, $ccnumber, $ccexpyear, $ccexpmonth, $cccvc, $cctype, $mpbankcode, $mpbankaccount) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idcurrency" => $idcurrenc,
         "acc" => $acc,
         "amount" => $amount,
         "otp" => $otp,
         "idinstrumentdebit" => $idinstrumentdebit,
         "idinstrumentcredit" => $idinstrumentcredit,
         "debitcardnumter" => $debitcardnumter,
         "ccnumber" => $ccnumber,
         "ccexpyear" => $ccexpyear,
         "ccexpmonth" => $ccexpmonth,
         "cccvc" => $cccvc,
         "cctype" => $cctype,
         "mpbankcode" => $mpbankcode,
         "mpbankaccount" => $mpbankaccount
      );

      parent::msexec("execbuy",$getservices);
      return parent::getResult();
   } // End execbuy 

   public static function resetpine($language, $email) {
      $getservices = array(
         "language" => $language,
         "email" => $email);
      parent::msexec("resetpine",$getservices);
      return parent::getResult();
   } // End resetpine

   public static function updpine($language, $email, $pin, $newpin) {
      $getservices = array(
         "language" => $language,
         "email" => $email,
         "pin" => $pin,
         "newpin" => $newpin);
      parent::msexec("updpine",$getservices);
      return parent::getResult();
   } // End updpine

   public static function getcryptol($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("getcryptol",$getservices);
      return parent::getResult();
   } // End getcryptol

   public static function getcompliancedoctypeparaml($language, $idlead, $docpend){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "docpend" => $docpend
      );
      parent::msexec("getcompliancedoctypeparaml", $getservices);
      return parent::getResult();
   } // End getcompliancedoctypeparaml

   public static function bankinfov41($language, $idlead, $idbankcountry, $bankname, $bankaddress, $bankaccount, $bankswift, $bankabarouting){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idbankcountry" => $idbankcountry,
         "bankname" => $bankname,
         "bankaddress" => $bankaddress,
         "bankaccount" => $bankaccount,
         "bankswift" => $bankswift,
         "bankabarouting" => $bankabarouting
      );
      parent::msexec("bankinfov41", $getservices);
      return parent::getResult();
   } // End getcompliancedoctypeparaml

   public static function bankinfov42($language, $idlead, $intermidbankcountry,$intermbankname,$intermbankaddress,$intermbankaccount,$intermbankswift){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "intermidbankcountry" => $intermidbankcountry,
         "intermbankname" => $intermbankname,
         "intermbankaddress" => $intermbankaddress,
         "intermbankaccount" => $intermbankaccount,
         "intermbankswift" => $intermbankswift
      );
      parent::msexec("bankinfov42", $getservices);
      return parent::getResult();
   } // End getcompliancedoctypeparaml

   public static function getorderl($language, $idlead){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead
      );
      parent::msexec("getorderl", $getservices);
      return parent::getResult();
   } // End getorderl

   public static function getblockl($language, $idlead){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead
      );
      parent::msexec("getblockl", $getservices);
      return parent::getResult();
   } // End getblockl

   public static function getlasttrl($language, $idlead, $count){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "count" => $count
      );
      parent::msexec("getlasttrl", $getservices);
      return parent::getResult();
   } // End getlasttrl

   
   public static function getcryptoidleadl($language, $idlead){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead
      );
      parent::msexec("getcryptoidleadl", $getservices);
      return parent::getResult();
   } // End getcryptoidleadl

   public static function getcurrencyremitancel($language, $idlead){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead
      );
      parent::msexec("getcurrencyremitancel", $getservices);
      return parent::getResult();
   } // End getcurrencyremitancel

   public static function execinputwok($language, $idlead, $idleadsrc, $amount, $idcurrency){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idleadsrc" => $idleadsrc,
         "amount" => $amount,
         "idcurrency" => $idcurrency
      );
      parent::msexec("execinputwok", $getservices);
      return parent::getResult();
   } // End execinputwok

   public static function getpartyxl($language, $idlead){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
      );
      parent::msexec("getpartyxl", $getservices);
      return parent::getResult();
   } // End getpartyxl

   public static function execinputw($language, $idlead, $idleadsrc, $amount, $idcurrency, $otp){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idleadsrc" => $idleadsrc,
         "amount" => $amount,
         "idcurrency" => $idcurrency,
         "otp" => $otp
      );
      parent::msexec("execinputw", $getservices);
      return parent::getResult();
   } // End execinputw

   public static function execoutputwok($language, $idlead, $idleaddst, $amount, $idcurrency){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idleaddst" => $idleaddst,
         "amount" => $amount,
         "idcurrency" => $idcurrency
      );
      parent::msexec("execoutputwok", $getservices);
      return parent::getResult();
   } // End execinputwok

   public static function execoutputw($language, $idlead, $idleaddst, $amount, $idcurrency, $otp){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idleaddst" => $idleaddst,
         "amount" => $amount,
         "idcurrency" => $idcurrency,
         "otp" => $otp
      );
      parent::msexec("execoutputw", $getservices);
      return parent::getResult();
   } // End execinputw

   public static function addwallet($language, $idlead, $idcrypto, $address){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idcrypto" => $idcrypto,
         "address" => $address
      );
      parent::msexec("addwallet", $getservices);
      return parent::getResult();
   } // End addwallet
   
   public static function execsendwok($language, $idlead, $amount, $idcurrency, $idclearencetype,$acc,$reference,$ccnumber,$ccexpyear,$ccexpmonth,$cccvc,$cctype,$bank,$routing){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "amount" => $amount,
         "idcurrency" => $idcurrency,
         "idclearencetype" => $idclearencetype,
         "acc" => $acc,
         "reference" => $reference,
         "ccnumber" => $ccnumber,
         "ccexpmonth" => $ccexpmonth,
         "cccvc" => $cccvc,
         "cctype" => $cctype,
         "bank" => $bank,
         "routing" => $routing
      );
      parent::msexec("execsendwok", $getservices);
      return parent::getResult();
   } // End execinputw

   public static function execsell($language, $idcurrency, $idlead, $amount, $otp, $idinstrumentdebit, $idclearencetype, $acc, $reference, $ccnumber, $ccexpyear, $ccexpmonth, $cccvc, $cctype, $debitcardnumter, $creditcardnumber){
      $getservices = array(
         "language" => $language,
         'idcurrency' => $idcurrency,
         'idlead' => $idlead,
         'amount' => $amount,
         'otp' => $otp,
         'idinstrumentdebit' => $idinstrumentdebit,
         'idclearencetype' => $idclearencetype,
         'acc' => $acc,
         'reference' => $reference,
         'ccnumber' => $ccnumber,
         'ccexpyear' => $ccexpyear,
         'ccexpmonth' => $ccexpmonth,
         'cccvc' => $cccvc,
         'cctype' => $cctype, 
         'debitcardnumter' => $debitcardnumter,
         'creditcardnumber' => $creditcardnumber
      );
      parent::msexec("execsell", $getservices);
      return parent::getResult();
   } // End execinputw

   public static function recvok($language, $idlead, $acc, $key, $addr, $bdate, $idparty, $idlocation, $idclearencetype, $mpbankcode, $mpbankaccount, $prepaidcardnumber, $prepaidcardaccount, $remittancecardnumber, $remittancecardaccount){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "acc" => $acc,
         "key" => $key,
         "addr" => $addr,
         "bdate" => $bdate,
         "idparty" => $idparty,
         "idlocation" => $idlocation,
         "idclearencetype" => $idclearencetype,
         "mpbankcode" => $mpbankcode,
         "mpbankaccount" => $mpbankaccount,
         "prepaidcardnumber" => $prepaidcardnumber,
         "prepaidcardaccount" => $prepaidcardaccount,
         "remittancecardnumber" => $remittancecardnumber,
         "remittancecardaccount" => $remittancecardaccount
      );
      parent::msexec("recvok", $getservices);
      return parent::getResult();
   } // End recvok

   public static function recv($language, $idlead, $acc, $key, $addr, $bdate, $idparty, $idlocation, $idclearencetype, $mpbankcode, $mpbankaccount, $prepaidcardnumber, $prepaidcardaccount, $remittancecardnumber, $remittancecardaccount, $otp){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "acc" => $acc,
         "key" => $key,
         "addr" => $addr,
         "bdate" => $bdate,
         "idparty" => $idparty,
         "idlocation" => $idlocation,
         "idclearencetype" => $idclearencetype,
         "mpbankcode" => $mpbankcode,
         "mpbankaccount" => $mpbankaccount,
         "prepaidcardnumber" => $prepaidcardnumber,
         "prepaidcardaccount" => $prepaidcardaccount,
         "remittancecardnumber" => $remittancecardnumber,
         "remittancecardaccount" => $remittancecardaccount,
         "otp" => $otp
      );
      parent::msexec("recv", $getservices);
      return parent::getResult();
   } // End execinputw

   public static function sendemail($language, $subject, $body){
      $getparty = self::getparty($_SESSION["id"], $_SESSION["language"]);
      $getservices = array(
         "language" => $language,
         "subject" => $subject,
         "to" => "arti@xatoxi.com",
         "header" => "Mail from: ".$getparty["email"]." (".$_SESSION["id"].")",
         "body" => $body,
         "footer" => ""
      );
      parent::msexec("sendemail", $getservices);
      return parent::getResult();
   } // End sendemail

   public static function creditcardinfov51($language, $idlead, $ccnumber, $ccexpyear, $ccexpmonth, $cccvc, $cctype){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "ccnumber" => $ccnumber,
         "ccexpyear" => $ccexpyear,
         "ccexpmonth" => $ccexpmonth,
         "cccvc" => $cccvc,
         "cctype" => $cctype
      );

      parent::msexec("creditcardinfov51", $getservices);
      return parent::getResult();
   } // End creditcardinfov51

   public static function remlead($language, $idlead){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead
      );
      parent::msexec("remlead", $getservices);
      return parent::getResult();
   } // End remlead

   public static function reportl($language, $idlead){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead
      );
      parent::msexec("reportl", $getservices);
      return parent::getResult();
   } // End reportl 

   public static function execexchange($language, $idlead, $idinstrumentsrc, $idinstrumentdst, $idcurrencysrc, $idcurrencydst, $amount, $bank, $numref, $routing, $otp){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idinstrumentsrc" => $idinstrumentsrc,
         "idinstrumentdst" => $idinstrumentdst,
         "idcurrencysrc" => $idcurrencysrc,
         "idcurrencydst" => $idcurrencydst,
         "amount" => $amount,
         "bank" => $bank,
         "numref" => $numref,
         "routing" => $routing,
         "otp" => $otp
      );

      parent::msexec("execexchange", $getservices);
      return parent::getResult();
   } // End execexchange

   public static function execexchangeok($language, $idlead, $idinstrumentsrc, $idinstrumentdst, $idcurrencysrc, $idcurrencydst, $amount, $bank, $numref, $routing){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idinstrumentsrc" => $idinstrumentsrc,
         "idinstrumentdst" => $idinstrumentdst,
         "idcurrencysrc" => $idcurrencysrc,
         "idcurrencydst" => $idcurrencydst,
         "amount" => $amount,
         "bank" => $bank,
         "numref" => $numref,
         "routing" => $routing
      );
      parent::msexec("execexchangeok", $getservices);
      return parent::getResult();
   } // End execexchangeok 

   public static function execsendok($language, $idlead, $idcountry, $idprovider, $amount, $idremitancetype, $idcurrency, $idclearencetype, $acc, $reference, $bdocumentid, $bfirstname, $bmiddlename, $blastname, $bsecondlastaname, $bbank, $bacc, $ccnumber, $ccexpyear, $ccexpmonth, $cccvc, $cctype, $bank, $routing) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idcountry" => $idcountry,
         "idprovider" => $idprovider,
         "amount" => $amount,
         "idremitancetype" => $idremitancetype,
         "idcurrency" => $idcurrency,
         "idclearencetype" => $idclearencetype,
         "acc" => $acc,
         "reference" => $reference,
         "bdocumentid" => $bdocumentid,
         "bfirstname" => $bfirstname,
         "bmiddlename" => $bmiddlename,
         "blastname" => $blastname,
         "bsecondlastaname" => $bsecondlastaname,
         "bbank" => $bbank,
         "bacc" => $bacc,
         "ccnumber" => $ccnumber,
         "ccexpyear" => $ccexpyear,
         "ccexpmonth" => $ccexpmonth,
         "cccvc" => $cccvc,
         "cctype" => $cctype,
         "bank" => $bank,
         "routing" => $routing
      );

      parent::msexec("execsendok",$getservices);
      return parent::getResult();
   } // End execsendok 

   public static function execsend($language, $idlead, $idcountry, $idprovider, $amount, $idremitancetype, $idcurrency, $idclearencetype, $acc, $reference, $bdocumentid, $bfirstname, $bmiddlename, $blastname, $bsecondlastaname, $bbank, $bacc, $ccnumber, $ccexpyear, $ccexpmonth, $cccvc, $cctype, $otp, $bank, $routing) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idcountry" => $idcountry,
         "idprovider" => $idprovider,
         "amount" => $amount,
         "idremitancetype" => $idremitancetype,
         "idcurrency" => $idcurrency,
         "idclearencetype" => $idclearencetype,
         "acc" => $acc,
         "reference" => $reference,
         "bdocumentid" => $bdocumentid,
         "bfirstname" => $bfirstname,
         "bmiddlename" => $bmiddlename,
         "blastname" => $blastname,
         "bsecondlastaname" => $bsecondlastaname,
         "bbank" => $bbank,
         "bacc" => $bacc,
         "ccnumber" => $ccnumber,
         "ccexpyear" => $ccexpyear,
         "ccexpmonth" => $ccexpmonth,
         "cccvc" => $cccvc,
         "cctype" => $cctype,
         "otp" => $otp,
         "bank" => $bank,
         "routing" => $routing
      );

      parent::msexec("execsend",$getservices);
      return parent::getResult();
   } // End execsend 

   public static function genotp($language, $idlead){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead
      );
      parent::msexec("genotp", $getservices);
      return parent::getResult();
   } // End genotp 

   public static function getcurrencysrcl($language, $idinstrumentsrc, $idlead){
      $getservices = array(
         "language" => $language,
         "idinstrumentsrc" => $idinstrumentsrc,
         "idlead" => $idlead
      );
      parent::msexec("getcurrencysrcl", $getservices);
      return parent::getResult();
   } // End getcurrencysrcl 
   
   public static function getinstrumentdstl($language, $idinstrumentsrc, $idlead, $idcurrencysrc){
      $getservices = array(
         "language" => $language,
         "idinstrumentsrc" => $idinstrumentsrc,
         "idlead" => $idlead,
         "idcurrencysrc" => $idcurrencysrc
      );
      parent::msexec("getinstrumentdstl", $getservices);
      return parent::getResult();
   } // End getinstrumentdstl

   public static function getcurrencydstl($language, $idinstrumentsrc, $idlead, $idcurrencysrc, $idinstrumentdst){
      $getservices = array(
         "language" => $language,
         "idinstrumentsrc" => $idinstrumentsrc,
         "idlead" => $idlead,
         "idcurrencysrc" => $idcurrencysrc,
         "idinstrumentdst" => $idinstrumentdst
      );
      parent::msexec("getcurrencydstl", $getservices);
      return parent::getResult();
   } // End getcurrencydstl

   public static function calcsell($language, $idlead, $amount, $idcurrency, $idinstrumentdebit, $idclearencetype){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "amount" => $amount,
         "idcurrency" => $idcurrency,
         "idinstrumentdebit" => $idinstrumentdebit,
         "idclearencetype" => $idclearencetype
      );
      
      parent::msexec("calcsell", $getservices);
      return parent::getResult();
   } // End calcsell
   
   public static function calcsendtr($language, $idlead, $idcurrency, $idcountry, $amount, $idclearencetype){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idcurrency" => $idcurrency,
         "idcountry" => $idcountry,
         "amount" => $amount,
         "idclearencetype" => $idclearencetype
      );
      parent::msexec("calcsendtr", $getservices);
      return parent::getResult();
   } // End calcsendtr

   public static function execsendtrok($language, $idlead, $idcountry, $amount, $idcurrency, $idclearencetype, $acc, $reference, $bdocumentid, $baddress, $bfirstname, $bmiddlename, $blastname, $bsecondlastname, $bbank, $bacc, $bbankcountry, $bbankcity, $bbankaddress, $bbankabaswiftiban, $ibacc, $ibbank, $ibbankcountry, $ibbankcity, $ibbankaddress, $ibbankabaswifiban, $ccnumber, $ccexpyear, $ccexpmonth, $cccvc, $cctype, $bank, $routing){
      $getservices = array(
        "language" => $language,
        "idlead" => $idlead,
        "idcountry" => $idcountry,
        "amount" => $amount,
        "idcurrency" => $idcurrency,
        "idclearencetype" => $idclearencetype,
        "acc" => $acc,
        "reference" => $reference,
        "bdocumentid" => $bdocumentid,
        "baddress" => $baddress, 
        "bfirstname" => $bfirstname,
        "bmiddlename" => $bmiddlename,
        "blastname" => $blastname,
        "bsecondlastname" => $bsecondlastname,
        "bbank" => $bbank,
        "bacc" => $bacc,
        "bbankcountry" => $bbankcountry,
        "bbankcity" => $bbankcity,
        "bbankaddress" => $bbankaddress,
        "bbankabaswiftiban" => $bbankabaswiftiban,
        "ibacc" => $ibacc,
        "ibbank" => $ibbank,
        "ibbankcountry" => $ibbankcountry,
        "ibbankcity" => $ibbankcity,
        "ibbankaddress" => $ibbankaddress,
        "ibbankabaswifiban" => $ibbankabaswifiban,
        "ccnumber" => $ccnumber,
        "ccexpyear" => $ccexpyear,
        "ccexpmonth" => $ccexpmonth,
        "cccvc" => $cccvc,
        "cctype" => $cctype,
        "bank" => $bank,
        "routing" => $routing
      );
      parent::msexec("execsendtrok", $getservices);
      return parent::getResult();
   } // End execsendtrok

   public static function execsendtr($language, $idlead, $idcountry, $amount, $idcurrency, $idclearencetype, $acc, $reference, $bdocumentid, $baddress, $bfirstname, $bmiddlename, $blastname, $bsecondlastname, $bbank, $bacc, $bbankcountry, $bbankcity, $bbankaddress, $bbankabaswiftiban, $ibacc, $ibbank, $ibbankcountry, $ibbankcity, $ibbankaddress, $ibbankabaswifiban, $ccnumber, $ccexpyear, $ccexpmonth, $cccvc, $cctype, $bank, $routing, $otp){
      $getservices = array(
        "language" => $language,
        "idlead" => $idlead,
        "idcountry" => $idcountry,
        "amount" => $amount,
        "idcurrency" => $idcurrency,
        "idclearencetype" => $idclearencetype,
        "acc" => $acc,
        "reference" => $reference,
        "bdocumentid" => $bdocumentid,
        "baddress" => $baddress, 
        "bfirstname" => $bfirstname,
        "bmiddlename" => $bmiddlename,
        "blastname" => $blastname,
        "bsecondlastname" => $bsecondlastname,
        "bbank" => $bbank,
        "bacc" => $bacc,
        "bbankcountry" => $bbankcountry,
        "bbankcity" => $bbankcity,
        "bbankaddress" => $bbankaddress,
        "bbankabaswiftiban" => $bbankabaswiftiban,
        "ibacc" => $ibacc,
        "ibbank" => $ibbank,
        "ibbankcountry" => $ibbankcountry,
        "ibbankcity" => $ibbankcity,
        "ibbankaddress" => $ibbankaddress,
        "ibbankabaswifiban" => $ibbankabaswifiban,
        "ccnumber" => $ccnumber,
        "ccexpyear" => $ccexpyear,
        "ccexpmonth" => $ccexpmonth,
        "cccvc" => $cccvc,
        "cctype" => $cctype,
        "bank" => $bank,
        "routing" => $routing,
        "otp" => $otp
      );
      parent::msexec("execsendtr", $getservices);
      return parent::getResult();
   } // End execsendtr
   public static function getcryptoprice($language, $idlead, $isocrypto, $isocurrency){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "isocrypto" => $isocrypto,
         "isocurrency" => $isocurrency
      );
      
      parent::msexec("getcryptoprice", $getservices);
      return parent::getResult();
   } // End getcryptoprice
   
   public static function execotcok($language, $idlead, $idcrypto, $idoperationtype, $amount, $price){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idcrypto" => $idcrypto,
         "idoperationtype" => $idoperationtype,
         "amount" => $amount,
         "price" => $price
      );
      parent::msexec("execotcok", $getservices);
      return parent::getResult();
   } // End execotcok

   public static function execotc($language, $idlead, $idcrypto, $idoperationtype, $otp, $amount, $price){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "idcrypto" => $idcrypto,
         "idoperationtype" => $idoperationtype,
         "otp" => $otp,
         "amount" => $amount,
         "price" => $price
      );
      
      parent::msexec("execotc", $getservices);
      return parent::getResult();
   } // End execotc

   public static function getproviderl($language, $idcountry, $idlead){
      $getservices = array(
         "language" => $language,
         "idcountry" => $idcountry,
         "idlead" => $idlead
         
      );
      parent::msexec("getproviderl", $getservices);
      return parent::getResult();
   } // End getproviderl

   public static function getremitancetypel($language, $idprovider, $idlead){
      $getservices = array(
         "language" => $language,
         "idprovider" => $idprovider,
         "idlead" => $idlead
      );
      parent::msexec("getremitancetypel", $getservices);
      return parent::getResult();
   } // End getremitancetypel

   
   public static function calcsend($language, $idprovider, $idcountry,$amount, $idlead, $idclearencetype){
      $getservices = array(
         "language" => $language,
         "idprovider" => $idprovider,
         "idcountry" => $idcountry,
         "amount" => $amount,
         "idlead" => $idlead,
         "idclearencetype" => $idclearencetype,         
      );
      
      parent::msexec("calcsend", $getservices);
      return parent::getResult();
   } // End calcsend



   public static function calcbuy($language, $idlead, $amount, $idcurrency, $idinstrumentdebit){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "amount" => $amount,
         "idcurrency" => $idcurrency,
         "idinstrumentdebit" => $idinstrumentdebit
      );
      
      parent::msexec("calcbuy", $getservices);
      return parent::getResult();
   } // End calcbuy

   public static function addfavservice($language, $idlead, $servicecode){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "servicecode" => $servicecode
      );
      
      parent::msexec("addfavservice", $getservices);
      return parent::getResult();
   } // End addfavservice

   public static function getfavservicesl($language, $idlead){
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead
      );
      
      parent::msexec("getfavservicesl", $getservices);
      return parent::getResult();
   } // End getfavservicesl

   public static function getpartylead($language, $email) {
      $getservices = array(
         "language" => $language,
         "email" => $email);
      parent::msexec("getpartylead",$getservices);
      return parent::getResult();
   } // End getpartylead

   public static function requestcreditcardok($language, $idlead) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead);
      parent::msexec("requestcreditcardok",$getservices);
      return parent::getResult();
   } // End requestcreditcardok

   public static function requestcreditcard($language, $idlead, $otp) {
      $getservices = array(
         "language" => $language,
         "idlead" => $idlead,
         "otp" => $otp
      );
      parent::msexec("requestcreditcard",$getservices);
      return parent::getResult();
   } // End requestcreditcard

// Endpoint */

}