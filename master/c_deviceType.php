<?php
$get_tokenkey = $_SESSION['gm_tokenKey'];



if (isset($_POST["btnSave"])) {
   
    $txtDeviceTypeText = escape_string($_POST['txtDeviceTypeText']);

    if ($txtDeviceTypeText != "") {

        $arr = AddDeviceType($get_tokenkey, $txtDeviceTypeText, $api_url);
        $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
        $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
    }
}
if (isset($_POST["btnEdit"])) {
    $txtDeviceTypeId = escape_string($_POST['txtDeviceTypeId']);
    $txtDeviceTypeText = escape_string($_POST['txtDeviceTypeText']);


    $arr = EditDeviceType($get_tokenkey, $txtDeviceTypeId, $txtDeviceTypeText, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
if (isset($_GET["del"])) {
    $txtDeviceTypeId = $_GET["del"];



    $arr = DeleteDeviceType($get_tokenkey, $txtDeviceTypeId, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
