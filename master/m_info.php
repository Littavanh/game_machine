<?php
$tokenkey = $_SESSION['gm_tokenkey'];

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
function AddInfo($tokenKey, $infoName, $infoTel, $infoAddress, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Account/AddInfo/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "infoName"=> $infoName,
        "infoTel"=> $infoTel,
        "infoAddress"=> $infoAddress,

    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function UpdateInfo($tokenKey,$infoId, $infoName, $infoTel, $infoAddress, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Account/UpdateInfo/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "infoId"=> $infoId,
        "infoName"=> $infoName,
        "infoTel"=> $infoTel,
        "infoAddress"=> $infoAddress,
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function DeleteInfo($tokenKey, $infoId, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Account/DeleteInfo/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "infoId"=> $infoId
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
?>