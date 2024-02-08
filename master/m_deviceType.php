<?php
$tokenkey = $_SESSION['gm_tokenkey'];

function LoadDeviceType($tokenkey,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Devices/LoadDeviceType';

   $jsonData = array(
       'tokenKey' => $tokenkey
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function AddDeviceType($tokenKey, $deviceTypeText, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Devices/AddDeviceType/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "deviceTypeText"=> $deviceTypeText
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function EditDeviceType($tokenKey, $deviceTypeId, $deviceTypeText, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Devices/EditDeviceType/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "deviceTypeId"=> $deviceTypeId,
        "deviceTypeText"=> $deviceTypeText
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function DeleteDeviceType($tokenKey, $deviceTypeId, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Devices/DeleteDeviceType/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "deviceTypeId"=> $deviceTypeId
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
?>