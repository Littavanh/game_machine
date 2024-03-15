<?php
require_once('indexCode.php');
include_once("config.php");
$set_langID = $_SESSION['gm_langId'];
if ($set_langID == "2") {
  $set_langID = "2";
  $_SESSION['gm_langId']  = "2";
} else {
  $_SESSION['gm_langId']  = "1";
  $set_langID = "1";
} 





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Machine System | Dashboard</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <link type="text/css" rel="stylesheet" href="css/element.css" />
    <script src="dist/js/languages.js"></script>
    <script type="text/javascript" src="dist/Action.js"></script>
    <script type='text/javascript' src='dist/jquery.autocomplete.js'></script>
    <script language="javascript" type="text/javascript">
    function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp = false;
        try {
            xmlhttp = new XMLHttpRequest();
        } catch (e) {
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e1) {
                    xmlhttp = false;
                }
            }
        }
        return xmlhttp;
    }

    function SelLang(langID) {
        var strURL = "function/lang.php?langid=" + langID;
        var req = getXMLHTTP();

        document.getElementById("langID").value = langID;

        if (req) {

            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"                    
                    if (req.status == 200) {
                        location.reload();
                        // alert(langID);
                    } else {
                        alert("Problem while using XMLH TTP (LANGUAGE):\n" +
                            req.statusText);
                    }
                }
            }
            req.open("GET", strURL, true);
            req.send(null);
        }
    }

    function GetProID(GetProID, divID) {
        var strURL = "function/findDistrict.php?GetProID=" + GetProID + "&divID=" + divID;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                        document.getElementById('district' + divID).innerHTML = req.responseText;
                        '<option>Select City</option>' +
                        '</select>';
                    } else {
                        alert("Problem while using XMLHTTP (Account List):\n" + req.statusText);
                    }
                }
            }
            req.open("GET", strURL, true);
            req.send(null);
        }
    }

    function GetProID1(GetProID, divID) {
        var strURL = "function/findDistrict1.php?GetProID=" + GetProID + "&divID=" + divID;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                        document.getElementById('district' + divID).innerHTML = req.responseText;
                        '<option>Select City</option>' +
                        '</select>';
                    } else {
                        alert("Problem while using XMLHTTP (Account List):\n" + req.statusText);
                    }
                }
            }
            req.open("GET", strURL, true);
            req.send(null);
        }
    }

    function GetDistrictID(GetDistrictID, divID) {
        var strURL = "function/findVillage.php?GetDisstrictID=" + GetDistrictID + "&divID=" + divID;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                        document.getElementById('villageId' + divID).innerHTML = req.responseText;
                        '<option>Select City</option>' +
                        '</select>';
                    } else {
                        alert("Problem while using XMLHTTP (Account List):\n" + req.statusText);
                    }
                }
            }
            req.open("GET", strURL, true);
            req.send(null);
        }
    }
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <input type="hidden" id="langID" value="<?= $set_langID ?>">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <?php if (file_exists("menu-top.php")) {
        include_once("menu-top.php");
      } ?>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Messages Dropdown Menu -->
                <?php if (file_exists("message-top.php")) {
          include_once("message-top.php");
        } ?>
                <!-- Notifications Dropdown Menu -->
                <?php if (file_exists("notifications.php")) {
          include_once("notifications.php");
        } ?>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li> -->
            </ul>
        </nav>
        <div class="modal fade" id="modal-ChangePass">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form role="form" method="post">
                        <div class="modal-header">
                            <h4 class="modal-title">ປ່ຽນລະຫັດຜ່ານ</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>ລະຫັດຜ່ານເກົ່າ</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" name="txtCurpassword"
                                                id="txtCurpassword" 
                                                required="required">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>ລະຫັດຜ່ານໃໝ່</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" name="txtNewpassword"
                                                id="txtNewpassword" onfocusout="CompairPass();" required="required">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>ຢືນຢັນລະຫັດຜ່ານໃໝ່</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" name="txtConpassword"
                                                id="txtConpassword" onfocusout="CompairPass();"
                                                onkeyup="CompairPass2();" required="required">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group"><label id="lblalert" style="color: red"></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">ປິດ</button>
                            <button type="submit" name="btnChangePass" id="btnChangePass"
                                class="btn btn-primary">ຢືນຢັນການລະຫັດຜ່ານ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php


?>
        <script src="plugins/toastr/toastr.min.js"></script>
        <script src="plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript">
       

        function CompairPass() {
            var txtNewpassword = String($('#txtNewpassword').val());
            var txtConpassword = String($('#txtConpassword').val());

            if (txtConpassword != "") {
                if (txtNewpassword != txtConpassword) {
                    $(document).ready(function() {
                        toastr.warning('ລະຫັດຜ່ານໃໝ່ ກັບ ຢືນຢັນລະຫັດຜ່ານໃໝ່ບໍ່ຖືກກັນ')
                    });
                    document.getElementById("btnChangePass").disabled = true;
                    document.getElementById("lblalert").innerHTML = 'ລະຫັດຜ່ານໃໝ່ ກັບ ຢືນຢັນລະຫັດຜ່ານໃໝ່ບໍ່ຖືກກັນ';
                } else {
                    document.getElementById("btnChangePass").disabled = false;
                    document.getElementById("lblalert").innerHTML = '';
                }
            }

        }

        function CompairPass2() {
            var txtNewpassword = String($('#txtNewpassword').val());
            var txtConpassword = String($('#txtConpassword').val());

            if (txtConpassword != "") {
                if (txtNewpassword != txtConpassword) {
                    document.getElementById("lblalert").innerHTML = 'ລະຫັດຜ່ານໃໝ່ ກັບ ຢືນຢັນລະຫັດຜ່ານໃໝ່ບໍ່ຖືກກັນ';
                    document.getElementById("btnChangePass").disabled = true;
                } else {
                    document.getElementById("lblalert").innerHTML = '';
                    document.getElementById("btnChangePass").disabled = false;
                }
            }

        }

        <?php
    if ($_SESSION['gm_messageAlert'] != null) {
      $messageAlert = $_SESSION['gm_messageAlert'];

    ?>
        $(document).ready(function() {
            toastr.info('<?= $messageAlert ?>')
        });
        <?php
      $_SESSION['gm_messageAlert'] = '';
    } ?>
        </script>
        <!-- /.navbar -->
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="MMS Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">

            </a>


            <!-- Sidebar Menu -->

            <?php if (file_exists("menu-sidebar.php")) {
          include_once("menu-sidebar.php");
        } ?>



            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php if (file_exists($vfilename)) include($vfilename); ?>
        </div>
        <!-- /.content-wrapper -->
        <?php if (file_exists("footer.php")) {
      include_once("footer.php");
    } ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="plugins/sparklines/sparkline.js"></script>
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="plugins/toastr/toastr.min.js"></script>

    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <script src="dist/js/pages/dashboard.js"></script>

    <script src="dist/js/languages.js"></script>
    <script>
    <?php
    if ($_SESSION['statusCode'] != '200') {
      $show_message = $_SESSION['commonErrors'];

    ?>
    $(document).ready(function() {
        toastr.error('<?= $show_message ?>')
    });
    <?php
    }
    ?>

    $(function() {
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#example3').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#exampleNoPageNav').DataTable({
            "paging": false,
            "lengthChange": true,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": false,
            "responsive": true,
        });

        $('#example4').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });

    });

    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                icon: 'success',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultInfo').click(function() {
            Toast.fire({
                icon: 'info',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultError').click(function() {
            Toast.fire({
                icon: 'error',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultWarning').click(function() {
            Toast.fire({
                icon: 'warning',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultQuestion').click(function() {
            Toast.fire({
                icon: 'question',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });

        $('.toastrDefaultSuccess').click(function() {
            toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultInfo').click(function() {
            toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultError').click(function() {
            toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultWarning').click(function() {
            toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });

        $('.toastsDefaultDefault').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultTopLeft').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                position: 'topLeft',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultBottomRight').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                position: 'bottomRight',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultBottomLeft').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                position: 'bottomLeft',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultAutohide').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                autohide: true,
                delay: 750,
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultNotFixed').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                fixed: false,
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultFull').click(function() {
            $(document).Toasts('create', {
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                icon: 'fas fa-envelope fa-lg',
            })
        });
        $('.toastsDefaultFullImage').click(function() {
            $(document).Toasts('create', {
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                image: '../../dist/img/user3-128x128.jpg',
                imageAlt: 'User Picture',
            })
        });
        $('.toastsDefaultSuccess').click(function() {
            $(document).Toasts('create', {
                class: 'bg-success',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultInfo').click(function() {
            $(document).Toasts('create', {
                class: 'bg-info',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultWarning').click(function() {
            $(document).Toasts('create', {
                class: 'bg-warning',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultDanger').click(function() {
            $(document).Toasts('create', {
                class: 'bg-danger',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultMaroon').click(function() {
            $(document).Toasts('create', {
                class: 'bg-maroon',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
    });
    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    </script>
</body>

</html>