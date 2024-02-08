<?php
$get_tokenkey = $_SESSION['gm_tokenKey'];



if (isset($_POST["btnSave"])) {
  
    $txtRole = escape_string($_POST['txtRole']);

    if ($txtRole != "") {

        $arr = AddRole($get_tokenkey, $txtRole, $api_url);
        $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
        $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
    }
}
if (isset($_POST["btnEdit"])) {
    $txtRoleId = escape_string($_POST['txtRoleId']);
    $txtRole = escape_string($_POST['txtRole']);


    $arr = UpdateRole($get_tokenkey, $txtRoleId, $txtRole, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
if (isset($_GET["del"])) {
    $txtRoleId = $_GET["del"];



    $arr = DeleteRole($get_tokenkey, $txtRoleId, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
