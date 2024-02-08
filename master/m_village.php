<?php
$tokenkey = $_SESSION['gm_tokenkey'];

function LoadVillageList($tokenkey,$district_id,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/LoadVillageList';

   $jsonData = array(
       'tokenKey' => $tokenkey,
       'district_id' => $district_id
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function AddVillage($tokenkey,$district_id,$villagename_la,$villagename_en,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/AddVillage';

   $jsonData = array(
       'tokenKey' => $tokenkey,
       'district_id' => $district_id,
       'villagename_la' => $villagename_la,
       'villagename_en' => $villagename_en,
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function UpdateVillage($tokenkey,$district_id,$village_id,$villagename_la,$villagename_en,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/UpdateVillage';

   $jsonData = array(
    'tokenKey' => $tokenkey,
    'district_id' => $district_id,
    'village_id' => $village_id,
    'villagename_la' => $villagename_la,
    'villagename_en' => $villagename_en,
   );
   $arr = callAPI($jsonData, $urlRoute);    
   return $arr;
}
function DeleteVillage($tokenkey,$village_id,$api_url)
{
    $message='';
    
    $urlRoute = $api_url.'Account/DeleteVillage';

   $jsonData = array(
    'tokenKey' => $tokenkey,
    'village_id' => $village_id
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
?>