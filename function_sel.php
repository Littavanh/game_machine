<?php
include_once("config.php");
$log_id = $_SESSION['gm_userId'];
ob_start(); // Turn on output buffering
system('ipconfig /all'); //Execute external program to display output
$mycom = ob_get_contents(); // Capture the output into a variable
ob_clean(); // Clean (erase) the output buffer

$findme = "Physical";
$pmac = strpos($mycom, $findme); // Find the position of Physical text
$mac = substr($mycom, ($pmac + 36), 17); // Get Physical Address

$_SESSION['gm_macadd'] = $mac;



function checkLogin($passKey,$userName, $userPassword,$deviceToken,$webToken, $api_url)
{
   
    $ch = curl_init($api_url . 'Account/UserLogin');

    $jsonData = array(
        //The JSON data.
        "passkey" => $passKey,
        "userName" => $userName,
        "userPassword" => $userPassword,
        "deviceToken" => $deviceToken,
        "webToken" => $webToken

    );
    $payload = json_encode($jsonData);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    // printf($result);
    $arr = json_decode($result, true);

    $_SESSION['statusCode'] = $arr['statusCode'];
    $_SESSION['modelErrors'] = $arr['modelErrors'];
    $_SESSION['isSuccess'] = $arr['isSuccess'];
    $_SESSION['commonErrors'] = $arr['commonErrors'];
    $_SESSION['message'] = $arr['message'];

    if (isset($arr['resultObject']) && $arr['statusCode'] == "200") {
        foreach ($arr['resultObject'] as $data) {
       
            $_SESSION['gm_userId'] = $data['userId'];
            $_SESSION['gm_userName'] = $data['userName'];
            $_SESSION['gm_tokenKey'] = $data['tokenKey'];
            $_SESSION['gm_fullName'] = $data['fullName'];
            $_SESSION['gm_roleId'] = $data['roleId'];
            $_SESSION['gm_roleName'] = $data['roleName'];
            $_SESSION['gm_langId'] = "1";

            header("Location: index.php");
            exit();
        }
    }
}
