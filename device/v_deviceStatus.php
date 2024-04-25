<?php
$tokenkey = $_SESSION['settokenkey'];

?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_deviceStatus">Device</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_device">Device</li>
                    <li class="breadcrumb-item active mn_deviceStatus">Device</li>

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
                                <table id="example3" class="table table-bordered beautified_report editable">

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

                                            <th class="date">Date</th>
                                            <th class="approver">Approver</th>
                                            <th style="text-align:center" class="approverStatus">Approve Status</th>
                                            <th class="image">Device Image</th>
                                            <th class="status">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $arr = LoadDeviceList($tokenkey, $api_url);
                                        $i = 1;
                                        foreach ($arr as $data) {



                                        ?>
                                        <div class="modal fade modal-fullscreen"
                                            id="modal-lg-Image<?= $data['deviceId'] ?>" data-backdrop="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title image">Image</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
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
                                                                <img src="<?= $imagePath ?>" class="elevation-2"
                                                                    alt="Device Image" style="height:100%; width:100%">
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
                                            <td><?= $data['province_name'] ?> - <?= $data['districtname_la'] ?> -
                                                <?= $data['villagename_la'] ?></td>
                                            <td><?= $data['address'] ?></td>

                                            <td><?= $data['remark'] ?></td>

                                            <td><?= $data['regDate'] ?></td>
                                            <td><?= $data['approverName'] ?></td>
                                            <?php if ($data['approveTypeId'] == '1') {
                                                ?>
                                            <td align="center">
                                                <h4><span
                                                        class="badge badge-pill badge-success"><?= $data['approveStatus'] ?></span>
                                                </h4>
                                            </td>
                                            <?php
                                                } else {
                                                ?>
                                            <td align="center">
                                                <h4><span
                                                        class="badge badge-pill badge-warning"><?= $data['approveStatus'] ?></span>
                                                </h4>
                                            </td>
                                            <?php
                                                }
                                                ?>

                                            <td align="center">
                                                <a href="#"><i class="fas fa-image" data-toggle="modal"
                                                        data-target="#modal-lg-Image<?= $data['deviceId'] ?>"></i></a>
                                            </td>
                                            <td class="eqcodecols">
                                                <select name="deviceStatusText[]">
                                                    <?php
												$load = LoadDeviceStatus($tokenkey, $api_url);
                                                foreach ($load as $dataLoad) {
													$selected = $data['deviceStatusId'] == $dataLoad['deviceStatusId'] ? "selected" : "";
													?>
                                                    <option value="<?= $dataLoad['deviceStatusId'] ?>" <?= $selected ?>>
                                                        <?= $dataLoad['deviceStatusText'] ?> 
                                                    </option>
                                                    <?php } ?>
                                                </select>
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