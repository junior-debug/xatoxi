<?php
set_time_limit(0);
class xmicroservice {
   private static $url = "https://www.italcontroller.com/italsisdev/includes/rest/SERVER/XATOXI/services.php";
   private static $serviceData = array (
            'wsuser' => "WSITALCAMBIO",
            'wspwd' => "1cc61eb7ae2187eb91f97d1ae5300919",
            'version' => "2.0",
            'channel' => "WEB"
   );
   private static $result;

   public static function msexec($endpoint,$data){
      // header('Access-Control-Allow-Origin: *');
      // header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
      // header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
      // header("Allow: GET, POST, OPTIONS, PUT, DELETE");
    
      $info = array ($endpoint => array_merge(self::$serviceData, $data));

      $client = curl_init(self::$url);
      $h1 = "Cache-Control: no-cache";
      $h2 = "Content-Type: application/json";
      curl_setopt($client, CURLOPT_HTTPHEADER, array($h1, $h2));
      curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($client, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($client, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($client, CURLOPT_SSL_VERIFYPEER, 0);

      $jsondata = json_encode($info);

      curl_setopt($client, CURLOPT_POSTFIELDS, $jsondata);
      $response = curl_exec($client);
      curl_close($client);
      self::$result = json_decode($response, true);
    }
    public static function getResult(){
      return self::$result;
    }
}