<?php
$get_tokenkey = $_SESSION['gm_tokenKey'];




if (isset($_GET["del"])) {
    $txtdeviceId = $_GET["del"];
    $statusId = '';


    $arr = DeleteDevice($get_tokenkey, $txtdeviceId, $statusId, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}

if (isset($_GET["print"])) {
    $txtdeviceId = $_GET["print"];
    $statusId = '';


    $arr = UpdatePrintDeviceStatus($get_tokenkey, $txtdeviceId, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
