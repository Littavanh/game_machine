<?php
$get_tokenkey = $_SESSION['gm_tokenKey'];



if (isset($_POST["btnSave"])) {

    $txtProvince = escape_string($_POST['txtProvince']);

    if ($txtProvince != "") {

        $arr = AddProvince($get_tokenkey, $txtProvince, $api_url);
        $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
        $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
    }
}
if (isset($_POST["btnEdit"])) {
    $txtProvinceId = escape_string($_POST['txtProvinceId']);
    $txtProvince = escape_string($_POST['txtProvince']);


    $arr =  UpdateProvince($get_tokenkey, $txtProvinceId, $txtProvince, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
if (isset($_GET["del"])) {
    $txtProvinceId = $_GET["del"];



    $arr = DeleteProvince($get_tokenkey,$txtProvinceId,$api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
