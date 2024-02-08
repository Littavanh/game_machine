<?php
$tokenkey = $_SESSION['gm_tokenkey'];

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
function AddProvince($tokenkey,$province_name,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/AddProvince';

   $jsonData = array(
       'tokenKey' => $tokenkey,
       'province_name' => $province_name
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function UpdateProvince($tokenkey,$province_id,$province_name,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/UpdateProvince';

   $jsonData = array(
    'tokenKey' => $tokenkey,
    'province_id' => $province_id,
    'province_name' => $province_name
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function DeleteProvince($tokenkey,$province_id,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/DeleteProvince';

   $jsonData = array(
    'tokenKey' => $tokenkey,
    'province_id' => $province_id
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
?>