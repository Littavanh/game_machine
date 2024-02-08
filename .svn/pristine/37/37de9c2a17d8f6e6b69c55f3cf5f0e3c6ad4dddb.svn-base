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
function LoadRolePermissionList($tokenkey,$roleId,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/LoadRolePermissionList/';

   $jsonData = array(
       'tokenKey' => $tokenkey,
       'roleId' => $roleId,
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}

function AddUpdateRolePermission($tokenkey,$roleId,$permissionId,$per_view,$per_add,$per_edit,$per_del,$per_enable,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/AddUpdateRolePermission/';

   $jsonData = array(
    "tokenKey"=> $tokenkey,
    "roleId"=> $roleId,
    "permissionId"=> $permissionId,
    "per_view"=> $per_view,
    "per_add"=> $per_add,
    "per_edit"=> $per_edit,
    "per_del"=> $per_del,
    "per_enable"=> $per_enable
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}


?>