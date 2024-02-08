<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_reportDeviceByAddress">Report Device By Address</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_report"><a href="#">Report</a></li>
                    <li class="breadcrumb-item active mn_reportDeviceByAddress">Report Device By Address</li>

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
                    <form method="get">
                        <input type="hidden" name="d" value="report/deviceByAddress" />
                        <div class="row">

                            <!-- <div class="col-md-1">
                                <div class="form-group">
                                    <label>Month</label>

                                    <select class="form-control select2" name="cb_month">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>


                                    </select>

                                </div>
                            </div>
                           -->

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="fromDate">From Date</label>
                                    <input type="date" name="strDate" class="form-control" autocomplete="off" value="<?php echo date('Y-m-d');?>" required="required">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="toDate">To Date</label>
                                    <input type="date" name="endDate" class="form-control" autocomplete="off" value="<?php echo date('Y-m-d');?>" required="required">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="province">Province</label>
                                    <select class="form-control select2" name="cboProvince" required="true" onchange="GetProID(this.value, 1)">
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
                            <div class="col-sm-2">
                                <div class="form-group" id="district1">
                                    <label class="district">District</label>
                                    <select class="form-control select2" name="cboDistrict" required="true" onchange="GetDistrictID(this.value, 1)">
                                        <option class="pleaseSelect" value="0">-- select province first --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group" id="villageId1">
                                    <label class="village">Village</label>
                                    <select class="form-control select2" name="cboVillage" required="true" onchange="this.form.submit()">
                                        <option class="pleaseSelect" value="0">-- select district first --</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default" onclick="document.location='?d=report/deviceByAddress'">ຍົກເລີກ</button>
                            <button type="submit" class="btn btn-primary">ຄົ້ນຫາ</button>
                            <?php if ($_GET['strDate'] != '' && $_GET['endDate'] != '') { ?>
                        </div>


                </div>
                <div class="card-body">
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

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $arr = ReportDeviceByAddress($tokenkey,  $_GET['strDate'],  $_GET['endDate'],  $_GET['cboProvince'], $_GET['cboDistrict'], $_GET['cboVillage'], $api_url);
                                            $i = 1;
                                            foreach ($arr as $data) {
                                            ?>
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
                                                    <?php if ($data['approveStatus'] == 'ອະນຸມັດ') {
                                                    ?>
                                                        <td align="center" ><h4><span class="badge badge-pill badge-success"><?= $data['approveStatus'] ?></span></h4></td>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <td align="center"><h4><span class="badge badge-pill badge-warning"><?= $data['approveStatus'] ?></span></h4></td>
                                                    <?php
                                                    }
                                                    ?>

                                                    <td align="center">
                                                        <a href="#"><i class="fas fa-image" data-toggle="modal" data-target="#modal-lg-Image<?= $data['deviceId'] ?>"></i></a>
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
            <?php } ?>
            </form>

            </div>
        </div>
    </div>
    <!-- /.row -->

</section>
<script>

</script>