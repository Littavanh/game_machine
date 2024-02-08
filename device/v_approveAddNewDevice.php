<?php
$tokenkey = $_SESSION['settokenkey'];

?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_approveAddNewDevice">Approve</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item mn_device"><a href="#">Device</a></li>
                    <li class="breadcrumb-item active mn_approveAddNewDevice">Approve Device</li>

                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card">


                <!-- /.modal -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered beautified_report">

                                    <thead>
                                        <tr>
                                            <th class="no">No</th>
                                            <th class="mn_info">Info</th>
                                            <th class="deviceNo">Device No</th>
                                            <th class="deviceSN">Device SN</th>
                                            <th class="mn_deviceType">Device Type</th>
                                            <th class="brand">Brand</th>
                                            <th class="model">Model</th>
                                            <th class="details">detail</th>
                                            <th class="address">address</th>
                                            <th class="address">address</th>

                                            <th class="remark">Remark</th>
                                            <th class="status">Status</th>
                                            <th class="date">Date</th>
                                            <th class="approver">Approver</th>
                                            <th style="text-align:center" class="approverStatus">Approve Status</th>
                                            <th class="image">Device Image</th>
                                            <th class="tools" style="text-align:center">tool</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $arr = LoadDeviceList($tokenkey, $api_url);
                                        $i = 1;
                                        foreach ($arr as $data) {

                                            if ($data['approveTypeId'] == '2') {
                                                # code...

                                        ?>

                                                <div class="modal fade modal-fullscreen" id="modal-lg-Edit<?= $data['deviceId'] ?>" data-backdrop="false">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Approve Device</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form method="post" action="?d=device/approveAddNewDevice" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="txtDeviceId" value="<?= $data['deviceId'] ?>" class="form-control" autocomplete="off" />
                                                                    <div class="row col-md-12">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="deviceNo">Device No</label>
                                                                            <input type="text" readonly name="txtDeviceNo" value="<?= $data['deviceNo'] ?>" class="form-control" autocomplete="off" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row col-md-12">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="remark">Remark</label>
                                                                            <input type="text" name="txtRemark" class="form-control" autocomplete="off" required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default bt_close" data-dismiss="modal">Close</button>
                                                                    <button type="submit" name="btnApprove" class="btn btn-success approve">Approve</button>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="modal fade modal-fullscreen" id="modal-lg-Image<?= $data['deviceId'] ?>" data-backdrop="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title image">Image</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="col-sm-12">
                                                                    <!-- text input -->
                                                                    <div class="form-group">
                                                                        <?php
                                                                        $imagePath = "dist/deviceImage/" . $data['deviceImg'];
                                                                        if (!file_exists($imagePath) || $data['deviceImg'] == '') {
                                                                            $imagePath = "dist/img/image.png";
                                                                        }
                                                                        ?>
                                                                        <img src="<?= $imagePath ?>" class="elevation-2" alt="Device Image" style="height:100%; width:100%">
                                                                    </div>
                                                                </div>

                                                            </div>


                                                        </div>

                                                    </div>

                                                </div>

                                                <tr>


                                                    <td><?= $i ?></td>
                                                    <td><?= $data['infoName'] ?></td>
                                                    <td><?= $data['deviceNo'] ?></td>
                                                    <td><?= $data['deviceSN'] ?></td>
                                                    <td><?= $data['deviceTypeText'] ?></td>
                                                    <td><?= $data['brand'] ?></td>
                                                    <td><?= $data['model'] ?></td>
                                                    <td><?= $data['detail'] ?></td>
                                                    <td><?= $data['province_name'] ?> - <?= $data['districtname_la'] ?> - <?= $data['villagename_la'] ?></td>
                                                    <td><?= $data['address'] ?></td>

                                                    <td><?= $data['remark'] ?></td>
                                                    <td><?= $data['deviceStatusText'] ?></td>
                                                    <td><?= $data['regDate'] ?></td>
                                                    <td><?= $data['approverName'] ?></td>
                                                    <?php if ($data['approveTypeId'] == '1') {
                                                    ?>
                                                        <td align="center" ><h4><span class="badge badge-pill badge-success"><?= $data['approveStatus'] ?></span></h4></td>
                                                    <?php
                                                    } else {
                                                    ?>
                                                       <td align="center" ><h4><span class="badge badge-pill badge-warning"><?= $data['approveStatus'] ?></span></h4></td>
                                                    <?php
                                                    }
                                                    ?>

                                                    <td align="center">
                                                        <a href="#"><i class="fas fa-image" data-toggle="modal" data-target="#modal-lg-Image<?= $data['deviceId'] ?>"></i></a>
                                                    </td>
                                                    <td align="center">
                                                        <button class="btn btn-success approve" data-toggle="modal" data-target="#modal-lg-Edit<?= $data['deviceId'] ?>">Approve</button>
                                                        <!-- <a href="?d=device/device&del=<?= $data['deviceId'] ?>" onclick="return confirm('do you want to delete this...?')"><button class="btn btn-success">ອະນຸມັດ</button></a> -->
                                                    </td>
                                                </tr>
                                        <?php
                                                $i++;
                                            }
                                        }  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->