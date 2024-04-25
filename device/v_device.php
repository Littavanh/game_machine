<?php
$tokenkey = $_SESSION['settokenkey'];

?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_addNewDevice">Device</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_device">Device</li>
                    <li class="breadcrumb-item active mn_addNewDevice">Add New Device</li>

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
                <div class="card-header">
                    <button type="button" class="btn btn-primary bt_add" data-toggle="modal" data-target="#modal-lg-New">
                        <i class="fas fa-plus-circle"></i> Add</button>
                </div>
                <!-- /.card-header -->
                <div class="modal fade" id="modal-lg-New">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title mn_addNewDevice">Add Device</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="?d=device/device" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="deviceId">Device ID</label>
                                                <input type="text" name="txtdeviceId" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="mn_rinfo">Info</label>
                                                <select class="form-control" name="cb_info">
                                                    <option class="pleaseSelect" value="0">---please select---</option>
                                                    <?php
                                                    $info = LoadInfoList($tokenkey, $api_url);

                                                    foreach ($info as $data) {
                                                        // $selected = $rowc['type'] == $row['type'] ? "selected" : "";
                                                    ?>
                                                        <option value="<?= $data['infoId'] ?>" <?= $selected ?>><?= $data['infoName'] ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="deviceNo">Device No</label>
                                                <input type="text" name="txtDeviceNo" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="deviceSN">Device SN</label>
                                                <input type="text" name="txtDeviceSN" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="mn_deviceType">Device Type</label>
                                                <select class="form-control" name="cb_deviceType">
                                                    <option class="pleaseSelect" value="0">---please select---</option>
                                                    <?php
                                                    $deviceType = LoadDeviceType($tokenkey, $api_url);

                                                    foreach ($deviceType as $data) {
                                                        // $selected = $rowc['type'] == $row['type'] ? "selected" : "";
                                                    ?>
                                                        <option value="<?= $data['deviceTypeId'] ?>" <?= $selected ?>><?= $data['deviceTypeText'] ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="brand">Brand</label>
                                                <input type="text" name="txtBrand" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="model">Model</label>
                                                <input type="text" name="txtModel" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="details">Details</label>
                                                <input type="text" name="txtDetails" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="address">Address</label>
                                                <input type="text" name="txtAddress" class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="province">Province</label>
                                                <select class="form-control select2" name="cboProvince" required="true" onChange="GetProID(this.value, 1)">
                                                    <option class="pleaseSelect" value="">-- please select --</option>
                                                    <?php
                                                    $province = LoadProvinceList($tokenkey, $api_url);

                                                    foreach ($province as $data) {
                                                    ?>
                                                        <option value="<?= $data['province_id'] ?>"><?= $data['province_name'] ?></option>
                                                    <?php   } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group" id="district1">
                                                <label class="district">District</label>
                                                <select class="form-control select2" name="cboDistrict" required="true" onChange="GetDistrictID(this.value, 1)">
                                                    <option class="pleaseSelect" value="0">-- select province first --</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group" id="villageId1">
                                                <label class="village">Village</label>
                                                <select class="form-control select2" name="cboVillage" required="true">
                                                    <option class="pleaseSelect" value="0">-- select district first --</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="status">Device Status</label>
                                                <select class="form-control" name="cb_deviceStatus">
                                                    <option class="pleaseSelect" value="0">---please select---</option>
                                                    <?php
                                                    $deviceStatus = LoadDeviceStatus($tokenkey, $api_url);

                                                    foreach ($deviceStatus as $data) {
                                                        // $selected = $rowc['type'] == $row['type'] ? "selected" : "";
                                                    ?>
                                                        <option value="<?= $data['deviceStatusId'] ?>" <?= $selected ?>><?= $data['deviceStatusText'] ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="remark">Remark</label>
                                                <input type="text" name="txtRemark" class="form-control" value="">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="txtDeviceImage">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default bt_close" data-dismiss="modal">ປິດ</button>
                                    <button type="submit" name="btnSave" class="btn btn-primary bt_save">ບັນທືກ</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
                <!-- /.modal -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="table table-bordered beautified_report">

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



                                        ?>
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
                                                    <!-- <a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg-Edit<?= $data['deviceId'] ?>"></i></a> -->
                                                    <a href="?d=device/device&del=<?= $data['deviceId'] ?>" onclick="return confirm('do you want to delete this...?')"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                            $i++;
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="application/javascript">
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>