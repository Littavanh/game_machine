<?php
$get_tokenkey = $_SESSION['gm_tokenKey'];



if (isset($_POST["btnActive"])) {
    $txtDeviceId = escape_string($_POST['txtDeviceId']);
   



    
    $arr = ActiveDeviceStatus($get_tokenkey,$txtDeviceId,$api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
if (isset($_POST["btnBroken"])) {
    $txtDeviceId = escape_string($_POST['txtDeviceId']);
   



    
    $arr = BrokenDeviceStatus($get_tokenkey,$txtDeviceId,$api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
if (isset($_POST["btnRepair"])) {
    $txtDeviceId = escape_string($_POST['txtDeviceId']);
   



    
    $arr = RepairingDeviceStatus($get_tokenkey,$txtDeviceId,$api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
if (isset($_POST["btnInActive"])) {
    $txtDeviceId = escape_string($_POST['txtDeviceId']);
   



    
    $arr = InactiveDeviceStatus($get_tokenkey,$txtDeviceId,$api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
