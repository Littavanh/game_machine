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
function ApproveDevice($tokenKey,$deviceId,$remarks, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Devices/ApproveDevice/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "deviceId"=> $deviceId, 
        "remarks"=> $remarks,
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
