<?php
$get_tokenkey = $_SESSION['gm_tokenKey'];



if (isset($_POST["btnApprove"])) {
    $txtDeviceId = escape_string($_POST['txtDeviceId']);
    $txtRemark = escape_string($_POST['txtRemark']);




    $arr = ApproveDevice($get_tokenkey, $txtDeviceId, $txtRemark, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
