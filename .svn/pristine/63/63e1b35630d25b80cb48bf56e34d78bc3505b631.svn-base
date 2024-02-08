<?php
$tokenkey = $_SESSION['gm_tokenkey'];

function ReportDeviceByAddress($tokenkey, $fromDate, $toDate, $provinceId,$districtId,$villageId, $api_url)
{
   
    $message = '';

    $urlRoute = $api_url . 'Reports/ReportDeviceByAddress/';

    $jsonData = array(
        'tokenKey' => $tokenkey,
        'fromDate' => $fromDate,
        'toDate' => $toDate,
        'provinceId' => $provinceId,
        'districtId' => $districtId,
        'villageId' => $villageId,
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