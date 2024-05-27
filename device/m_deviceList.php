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
function AddDevice($tokenKey,$infoId,$deviceId,$deviceNo,$deviceSN,$deviceTypeId,$brand,$model,$detail,$address,$deviceImg,$village_id,$remark,$deviceStatusId, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Devices/AddDevice/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "infoId"=> $infoId,
        "deviceId"=> $deviceId,
        "deviceNo"=> $deviceNo,
        "deviceSN"=> $deviceSN,
        "deviceTypeId"=> $deviceTypeId,
        "brand"=> $brand,
        "model"=> $model,
        "detail"=> $detail,
        "address"=> $address,
        "deviceImg"=> $deviceImg,
        "village_id"=> $village_id,
        "remark"=> $remark,
        "deviceStatusId"=> $deviceStatusId
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function UpdateDevice($tokenKey,$deviceId,$infoId,$deviceNo,$deviceSN,$deviceTypeId,$brand,$model,$detail,$address,$deviceImg,$village_id,$remark,$deviceStatusId, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Devices/UpdateDevice/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "deviceId"=> $deviceId,
        "infoId"=> $infoId,
        "deviceNo"=> $deviceNo,
        "deviceSN"=> $deviceSN,
        "deviceTypeId"=> $deviceTypeId,
        "brand"=> $brand,
        "model"=> $model,
        "detail"=> $detail,
        "address"=> $address,
        "deviceImg"=> $deviceImg,
        "village_id"=> $village_id,
        "remark"=> $remark,
        "deviceStatusId"=> $deviceStatusId
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function DeleteDevice($tokenKey, $deviceId,$statusId, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Devices/DeleteDevice/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "deviceId"=> $deviceId,
        "statusId"=> $statusId
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}

function UpdatePrintDeviceStatus($tokenKey, $deviceId, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Devices/UpdatePrintDeviceStatus/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "deviceId"=> $deviceId
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function LoadDeviceByDeviceId($tokenKey, $deviceId, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Devices/LoadDeviceByDeviceId/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "deviceId"=> $deviceId
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function LoadInfoList($tokenkey,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/LoadInfoList/';

   $jsonData = array(
       'tokenKey' => $tokenkey
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
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

function LoadProvinceList($tokenkey,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/LoadProvinceList';

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