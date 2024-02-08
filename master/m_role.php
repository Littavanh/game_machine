<?php
$tokenkey = $_SESSION['gm_tokenkey'];

function LoadRoleList($tokenkey,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/LoadRoleList/';

   $jsonData = array(
       'tokenKey' => $tokenkey
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function AddRole($tokenKey, $roleName, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Account/AddRole/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "roleName"=> $roleName
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function UpdateRole($tokenKey, $roleId, $roleName, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Account/UpdateRole/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "roleId"=> $roleId,
        "roleName"=> $roleName
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function DeleteRole($tokenKey, $roleId, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Account/DeleteRole/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "roleId"=> $roleId
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
?>