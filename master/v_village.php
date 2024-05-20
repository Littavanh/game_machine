<?php
$tokenkey = $_SESSION['gm_tokenKey'];

?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="village">village</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_master">Master</li>
                    <li class="breadcrumb-item active village">Village</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="modal fade" id="modal-lg-New">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title bt_add ">Add village</h4>
                <h4 class="modal-title village"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="?d=master/village" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="province">Province</label>
                                <select class="form-control select2" name="province_id" required="true">
                                    <option class="pleaseSelect" value="">-- please select --</option>
                                    <?php
                                    $provinces = LoadProvinceList($tokenkey, $api_url);

                                    foreach ($provinces as $data2) {
                                    ?>
                                        <option value="<?= $data2['province_id'] ?>"><?= $data2['province_name'] ?></option>
                                    <?php   } ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ລະຫັດvillage</label>
                                                <input type="input" Name="txtDeviceTypeId" class="form-control">
                                            </div>
                                        </div> -->
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="villageLa">village Lao</label>
                                <input type="input" Name="txtvillageLa" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="villageEN">village EN</label>
                                <input type="input" Name="txtvillageEN" class="form-control">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default bt_close" data-dismiss="modal">Close</button>
                    <button type="submit" name="btnSave" class="btn btn-primary bt_save">Save</button>
                </div>
            </form>
        </div>

    </div>

</div>
<!-- Main content -->
<section class="content">

    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <form method="get">
                        <input type="hidden" name="d" value="master/village" />
                        <div class="row">
                            <!-- <div class="col-md-1">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary bt_add" data-toggle="modal" data-target="#modal-lg-New">
                                        <i class="fas fa-plus-circle "></i> Add</button>
                                </div>
                            </div> -->

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="province">Province</label>
                                    <select class="form-control select2" name="cboProvince" required="true" onchange="GetProID1(this.value, 1)">
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
                                    <select class="form-control select2" name="cboDistrict" required="true">
                                        <option class="pleaseSelect" value="0">-- select province first --</option>
                                    </select>
                                </div>
                            </div>


                        </div>

                </div>
                <!-- /.card-header -->
                <?php if ($_GET['cboProvince'] != '' && $_GET['txtdistrictId1'] != '') { ?>
                    <!-- /.modal -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table table-bordered beautified_report">

                                        <thead>
                                            <tr class="text-center">
                                                <th class="no">No</th>
                                                <th class="village">Village</th>
                                                <th class="district">District</th>
                                                <th class="province">Province</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $loadVillage = LoadVillageList($tokenkey, $_GET['txtdistrictId1'], $api_url);
                                            foreach ($loadVillage as $data) {



                                            ?>



                                                <tr class="text-center">


                                                    <td><?= $i ?></td>
                                                    <td><?= $data['villagename_la'] ?> | <?= $data['villagename_en'] ?></td>
                                                    <td><?= $data['districtname_la'] ?> | <?= $data['districtname_en'] ?></td>
                                                    <td><?= $data['province_name'] ?></td>

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
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- /.row -->

</section>