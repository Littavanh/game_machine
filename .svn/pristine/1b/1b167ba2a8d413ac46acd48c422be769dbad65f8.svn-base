<?php
$get_tokenkey = $_SESSION['gm_tokenKey'];



if (isset($_POST["btnSave"])) {
  
    $txtPermissionName = escape_string($_POST['txtPermissionName']);

    if ($txtPermissionName != "") {

        $arr = AddPermission($get_tokenkey, $txtPermissionName, $api_url);
        $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
        $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
    }
}
if (isset($_POST["btnEdit"])) {
    $txtPermissionId = escape_string($_POST['txtPermissionId']);
    $txtPermissionName = escape_string($_POST['txtPermissionName']);


    $arr = UpdatePermission($get_tokenkey, $txtPermissionId, $txtPermissionName, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
if (isset($_GET["del"])) {
    $txtPermissionId = $_GET["del"];



    $arr = DeletePermission($get_tokenkey, $txtPermissionId, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
