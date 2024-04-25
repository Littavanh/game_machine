<?php
$tokenkey = $_SESSION['gm_tokenkey'];

function LoadDeviceList($tokenkey,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Devices/LoadDeviceList/';

   $jsonData = array(
       'tokenKey' => $tokenkey
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function LoadDeviceStatus($tokenkey,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Devices/LoadDeviceStatus';

   $jsonData = array(
       'tokenKey' => $tokenkey
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}