<?php

session_start();



$mn_dashboard = "";
$mn_Mmain = "";
$mn_Mmain1 = "";

$mn_deviceType = "";
$mn_info = "";
$mn_role = "";
$mn_user = "";
$mn_permission = "";
$mn_rolePermission = "";
$mn_province = "";
$mn_district = "";
$mn_village = "";

$mn_Mdevice = "";
$mn_Mdevice1 = "";
$mn_device = "";
$mn_deviceList = "";
$mn_approveAddNewDevice = "";
$mn_deviceStatus = "";

$mn_Mreport="";
$mn_Mreport1="";
$mn_reportDeviceByAddress="";
$mn_reportDevice="";

if ($_GET['d'] == 'index') {
  $mn_dashboard = "active";
} else if ($_GET['d'] == 'master/deviceType') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_deviceType = "active";
} else if ($_GET['d'] == 'master/role') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_role = "active";
} else if ($_GET['d'] == 'master/info') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_info = "active";
} else if ($_GET['d'] == 'master/user') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_user = "active";
} else if ($_GET['d'] == 'master/permission') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_permission = "active";
} else if ($_GET['d'] == 'master/rolePermission') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_rolePermission = "active";
} 
else if ($_GET['d'] == 'master/province') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_province = "active";
} else if ($_GET['d'] == 'master/district') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_district = "active";
} else if ($_GET['d'] == 'master/village') {
  $mn_Mmain = "menu-open";
  $mn_Mmain1 = "active";
  $mn_village = "active";
} 
else if ($_GET['d'] == 'device/device') {
  $mn_Mdevice = "menu-open";
  $mn_Mdevice1 = "active";
  $mn_device = "active";
}
else if ($_GET['d'] == 'device/deviceList') {
  $mn_Mdevice = "menu-open";
  $mn_Mdevice1 = "active";
  $mn_deviceList = "active";
}
else if ($_GET['d'] == 'device/approveAddNewDevice') {
  $mn_Mdevice = "menu-open";
  $mn_Mdevice1 = "active";
  $mn_approveAddNewDevice = "active";
}
else if ($_GET['d'] == 'device/deviceStatus') {
  $mn_Mdevice = "menu-open";
  $mn_Mdevice1 = "active";
  $mn_deviceStatus = "active";
}
else if ($_GET['d'] == 'report/device') {
  $mn_Mreport = "menu-open";
  $mn_Mreport1 = "active";
  $mn_reportDevice = "active";
}
else if ($_GET['d'] == 'report/deviceByAddress') {
  $mn_Mreport = "menu-open";
  $mn_Mreport1 = "active";
  $mn_reportDeviceByAddress = "active";
}
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link ml-2">

    <span class="brand-text font-weight-light">Game Machine System.</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="index.php?d=index" class="d-block mn_loginby">Login by: </a>
      </div>
      <div class="info">
        <a href="index.php?d=index" class="d-block"><?= $_SESSION['gm_fullName'] ?></a>
      </div>

    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?d=index" class="nav-link <?= $mn_dashboard ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p class="mn_home">
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview  <?= $mn_Mmain ?>">
          <a href="#" class="nav-link <?= $mn_Mmain1 ?>">
            <i class="nav-icon fas fa-book"></i>
            <p class="mn_master">
              Master
             
            </p>
            <i class="right fas fa-angle-left "></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=master/deviceType" class="nav-link <?= $mn_deviceType ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="mn_deviceType">Device Type</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=master/info" class="nav-link <?= $mn_info ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="mn_info">Info</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=master/user" class="nav-link <?= $mn_user ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="mn_user">User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=master/role" class="nav-link <?= $mn_role ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="mn_role">Role</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=master/permission" class="nav-link <?= $mn_permission ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="mn_permission">Permission</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=master/rolePermission" class="nav-link <?= $mn_rolePermission ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="mn_rolePermission">Role Permission</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=master/province" class="nav-link <?= $mn_province ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="province">Province</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=master/district" class="nav-link <?= $mn_district ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="district">District</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=master/village" class="nav-link <?= $mn_village ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="village">Village</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item has-treeview <?= $mn_Mdevice ?>">
          <a href="#" class="nav-link <?= $mn_Mdevice1 ?>">
            <i class="nav-icon fas fa-toolbox"></i>
            <p class="mn_device">
              Device
            </p>
            <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=device/device" class="nav-link <?= $mn_device ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="mn_addNewDevice">Add New Device</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=device/deviceList" class="nav-link <?= $mn_deviceList ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="deviceList">Device List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=device/approveAddNewDevice" class="nav-link <?= $mn_approveAddNewDevice ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="mn_approveAddNewDevice">Approve Add New Device</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=device/deviceStatus" class="nav-link <?= $mn_deviceStatus ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="mn_deviceStatus">Device Status</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview <?= $mn_Mreport ?>">
          <a href="#" class="nav-link <?= $mn_Mreport1 ?>">
            <i class="nav-icon far fa-list-alt"></i>
            <p class="mn_report">
              Report
             
            </p>
            <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="index.php?d=report/device" class="nav-link <?= $mn_reportDevice ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="mn_reportDevice">Device</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?d=report/deviceByAddress" class="nav-link <?= $mn_reportDeviceByAddress ?>">
                <i class="far fa-circle nav-icon"></i>
                <p class="mn_reportDeviceByAddress">Device By Address</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>