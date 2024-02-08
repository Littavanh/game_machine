<?php
$tokenkey = $_SESSION['gm_tokenkey'];

function LoadUserList($tokenkey,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/LoadUserList/';

   $jsonData = array(
       'tokenKey' => $tokenkey
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
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
function AddNewUser($tokenKey, $userId,$userName,$roleId,$userPass, $publickey,$mobileNumber, $firstName,$lastName, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Account/AddNewUser/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "userId"=> $userId,
        "userName"=> $userName,
        "roleId"=> $roleId,
        "userPass"=> $userPass,
        "publickey"=> $publickey,
        "mobileNumber"=> $mobileNumber,
        "firstName"=> $firstName,
        "lastName"=> $lastName
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}
function EditUser($tokenKey, $userId,$userName,$roleId,$userPass, $publickey,$mobileNumber, $firstName,$lastName,$deviceToken, $api_url) {   
    $message='';
    $urlRoute = $api_url.'/Account/EditUser/';
    $jsonData = array(
       
        "tokenKey"=> $tokenKey,
        "userId"=> $userId,
        "userName"=> $userName,
        "roleId"=> $roleId,
        "userPass"=> $userPass,
        "publickey"=> $publickey,
        "mobileNumber"=> $mobileNumber,
        "firstName"=> $firstName,
        "lastName"=> $lastName,
        "deviceToken"=> $deviceToken
    );
    $arr = callAPI($jsonData, $urlRoute);    
    return $arr;
}

?>