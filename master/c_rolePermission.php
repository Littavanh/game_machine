<?php
$get_tokenkey = $_SESSION['gm_tokenKey'];


if (isset($_POST["cboRole"])) {
    $roleId = $_POST["cboRole"];
    $_SESSION['set_role_id'] = $roleId;
    // echo '<script>alert("'.$roleId.'")</script>';
    if ($roleId > 0) {
        $loadRP = LoadRolePermissionList($tokenkey, $roleId, $api_url);
    } else {
        $loadRP = null;
    }
}

if (isset($_POST["btnSave"])) {
    $permissionId    =   $_POST['permissionId'];
    $permissionName     =   $_POST['permissionName'];
    $saveRoleId     =   $_POST['saveRoleId'];
    $canAdd     =   $_POST['canAdd'];
    $canEdit     =   $_POST['canEdit'];
    $canView     =   $_POST['canView'];
    $canDelete     =   $_POST['canDelete'];
    $canEnable     =   $_POST['canEnable'];

    $isadd = false;
    $isedit = false;
    $isview = false;
    $isdelete = false;
    $isEnable = false;

    for ($i = 0; $i < count($permissionId); $i++) {
        //echo '<script>alert("i = '.$i.', chk : '.$canAdd[$i].'")</script>';
        if (isset($canAdd[$i])) {
            $isadd = true;
        } else {
            $isadd = false;
        }
        if (isset($canEdit[$i])) {
            $isedit = true;
        } else {
            $isedit = false;
        }
        if (isset($canView[$i])) {
            $isview = true;
        } else {
            $isview = false;
        }
        if (isset($canDelete[$i])) {
            $isdelete = true;
        } else {
            $isdelete = false;
        }
        if (isset($canEnable[$i])) {
            $isEnable = true;
        } else {
            $isEnable = false;
        }
        $getroleid = $saveRoleId[$i];
        $getpermissionId = $permissionId[$i];
        $_SESSION['set_role_id'] = $getroleid;
    }


    $roleId = $_SESSION['set_role_id'];
    $loadRP = LoadRolePermissionList($tokenkey, $roleId, $api_url);
}
