<?php
$get_tokenkey = $_SESSION['gm_tokenKey'];



if (isset($_POST["btnSave"])) {
  
    $txtInfoName = escape_string($_POST['txtInfoName']);
    $txtInfoTel = escape_string($_POST['txtInfoTel']);
    $txtInfoAddress = escape_string($_POST['txtInfoAddress']);

   

        $arr = AddInfo($get_tokenkey, $txtInfoName,$txtInfoTel,$txtInfoAddress, $api_url);
        $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
        $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
    
}
if (isset($_POST["btnEdit"])) {
    $txtInfoId = escape_string($_POST['txtInfoId']);
    $txtInfoName = escape_string($_POST['txtInfoName']);
    $txtInfoTel = escape_string($_POST['txtInfoTel']);
    $txtInfoAddress = escape_string($_POST['txtInfoAddress']);


    $arr = UpdateInfo($get_tokenkey, $txtInfoId, $txtInfoName,$txtInfoTel,$txtInfoAddress, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
if (isset($_GET["del"])) {
    $txtInfoId = $_GET["del"];



    $arr = DeleteRole($get_tokenkey, $txtInfoId, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
