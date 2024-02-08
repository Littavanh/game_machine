<?php
session_start();

unset($_SESSION['gm_userId']);
unset($_SESSION['gm_userName']);
unset($_SESSION['gm_tokenKey']);
unset($_SESSION['gm_fullName']);

unset($_SESSION['gm_roleId']);
unset($_SESSION['gm_roleName']);
unset($_SESSION['set_role_id']);
unset($_SESSION['gm_langId']);

header("Location: login.php");
