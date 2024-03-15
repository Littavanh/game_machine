<?php 


 



$tokenkey = $_SESSION['gm_tokenKey'];



function ChangeUserPass($tokenkey,$oldPassword,$newPassword,$newConfirmPassword,$api_url)
{
   
  $ch = curl_init($api_url . 'Account/ChangeUserPass');

  $jsonData = array(
      //The JSON data.
      "tokenkey" => $tokenkey,
      "oldPassword" => $oldPassword,
      "newPassword" => $newPassword,
      "newConfirmPassword" => $newConfirmPassword

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



  if ($arr['statusCode'] == "200") {
   
   
    $_SESSION['gm_messageAlert'] =$arr['message'];
  
 
  }
  else{
 
    $_SESSION['gm_messageAlert'] = $arr['message'];
  
  }
}

if (isset($_POST["btnChangePass"])) {

  
  $txtCurpassword = $_POST['txtCurpassword'];
  $txtNewpassword = $_POST['txtNewpassword'];
  $txtConpassword = $_POST['txtConpassword'];

 $arr = ChangeUserPass($tokenkey,$txtCurpassword,$txtNewpassword,$txtConpassword,$api_url);

}