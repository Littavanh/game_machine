<?php
$tokenkey = $_SESSION['gm_tokenkey'];

function LoadDistrictList($tokenkey,$province_id,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/LoadDistrictList';

   $jsonData = array(
       'tokenKey' => $tokenkey,
       'province_id' => $province_id
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function AddDistrict($tokenkey,$province_id,$districtname_la,$districtname_en,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/AddDistrict';

   $jsonData = array(
       'tokenKey' => $tokenkey,
       'province_id' => $province_id,
       'districtname_la' => $districtname_la,
       'districtname_en' => $districtname_en,
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function UpdateDistrict($tokenkey,$province_id,$district_id,$districtname_la,$districtname_en,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/UpdateDistrict';

   $jsonData = array(
    'tokenKey' => $tokenkey,
    'province_id' => $province_id,
    'district_id' => $district_id,
    'districtname_la' => $districtname_la,
    'districtname_en' => $districtname_en,
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function DeleteDistrict($tokenkey,$district_id,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/DeleteDistrict';

   $jsonData = array(
    'tokenKey' => $tokenkey,
    'district_id' => $district_id
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
?>