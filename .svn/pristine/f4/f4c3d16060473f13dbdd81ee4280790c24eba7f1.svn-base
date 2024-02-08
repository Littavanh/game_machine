<?php
$get_tokenkey = $_SESSION['gm_tokenKey'];



if (isset($_POST["btnSave"])) {
    $txtdeviceId = escape_string($_POST['txtdeviceId']);
    $cb_info = escape_string($_POST['cb_info']);
    $txtDeviceNo = escape_string($_POST['txtDeviceNo']);
    $txtDeviceSN = escape_string($_POST['txtDeviceSN']);
    $cb_deviceType = escape_string($_POST['cb_deviceType']);
    $txtBrand = escape_string($_POST['txtBrand']);
    $txtModel = escape_string($_POST['txtModel']);
    $txtDetails = escape_string($_POST['txtDetails']);
    $txtAddress = escape_string($_POST['txtAddress']);
    // $txtDeviceImage = escape_string($_POST['txtDeviceImage']);
    $cboVillage = escape_string($_POST['txtvillageId1']);
    $cb_deviceStatus = escape_string($_POST['cb_deviceStatus']);
    $txtRemark = escape_string($_POST['txtRemark']);

    $tmp_file_name1 = trim($_FILES["txtDeviceImage"]["tmp_name"]);
	//  echo '<script>alert("'.$tmp_file_name1.'")</script>';
	 if($tmp_file_name1 != "") { 		
		 $name1 = $_FILES["txtDeviceImage"]["name"];
        //  $ext1 = end((explode(".", $name1))); # extra () to prevent notice
        //  $file_name1 = date('YmdHms').$GET_userID.".".$ext1; 
         copy($_FILES["txtDeviceImage"]["tmp_name"],"dist/deviceImage/".$name1);
      
		
	 }


    $arr = AddDevice($tokenKey, $cb_info,$txtdeviceId, $txtDeviceNo, $txtDeviceSN, $cb_deviceType, $txtBrand, $txtModel, $txtDetails, $txtAddress, $name1, $cboVillage, $txtRemark, $cb_deviceStatus, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
// if (isset($_POST["btnEdit"])) {
//     $txtRoleId = escape_string($_POST['txtRoleId']);
//     $txtRole = escape_string($_POST['txtRole']);


//     $arr = UpdateRole($get_tokenkey, $txtRoleId, $txtRole, $api_url);
//     $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
//     $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
// }
if (isset($_GET["del"])) {
    $txtdeviceId = $_GET["del"];
$statusId = '';


    $arr = DeleteDevice($get_tokenkey, $txtdeviceId,$statusId, $api_url);
    $_SESSION['gm_api_message_show'] = $_SESSION['gm_message'];
    $_SESSION['gm_api_statusCode'] = $_SESSION['gm_statusCode'];
}
