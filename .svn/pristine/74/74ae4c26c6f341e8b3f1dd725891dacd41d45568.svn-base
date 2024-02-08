<?php
$tokenkey = $_SESSION['gm_tokenkey'];

function LoadPermissionList($tokenkey,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/LoadPermissionList/';

   $jsonData = array(
       'tokenKey' => $tokenkey
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function AddPermission($tokenKey, $permissionName, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Account/AddPermission/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "permissionName"=> $permissionName
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function UpdatePermission($tokenKey, $permissionId, $permissionName, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Account/UpdatePermission/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "permissionId"=> $permissionId,
        "permissionName"=> $permissionName
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function DeletePermission($tokenKey, $permissionId, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Account/DeletePermission/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "permissionId"=> $permissionId
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
?>