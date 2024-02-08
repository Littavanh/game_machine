<?php
$tokenkey = $_SESSION['gm_tokenkey'];

function ReportDevice($tokenkey, $fromDate, $toDate, $approveTypeId, $api_url)
{
   
    $message = '';

    $urlRoute = $api_url . 'Reports/ReportDevice/';

    $jsonData = array(
        'tokenKey' => $tokenkey,
        'fromDate' => $fromDate,
        'toDate' => $toDate,
        'approveTypeId' => $approveTypeId,
    );
    $arr = callAPI($jsonData, $urlRoute);
    return $arr;
}
