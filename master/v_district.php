<?php
$tokenkey = $_SESSION['settokenkey'];

?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="district">district</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_master">Master</li>
                    <li class="breadcrumb-item active district">District</li>
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
                    <div class="row">
                        <div class="col-md-1">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary bt_add" data-toggle="modal" data-target="#modal-lg-New">
                                    <i class="fas fa-plus-circle "></i> Add</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <form method="POST" action="index.php?d=master/district">
                                    <select class="form-control select2" name="cbProvince" required="true" onchange="this.form.submit()">
                                        <option class="pleaseSelect" value="">-- please select --</option>
                                        <?php
                                        $province = LoadProvinceList($tokenkey, $api_url);

                                        foreach ($province as $data1) {
                                        ?>
                                            <option value="<?= $data1['province_id'] ?>" <?php if ($_SESSION['set_province_id'] == $data1['province_id']) echo 'selected="selected"'; ?>><?= $data1['province_name'] ?></option>
                                        <?php   } ?>
                                    </select>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="modal fade" id="modal-lg-New">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title bt_add ">Add district</h4>
                                <h4 class="modal-title district"></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="?d=master/district" enctype="multipart/form-data">
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
                                                <label>ລະຫັດdistrict</label>
                                                <input type="input" Name="txtDeviceTypeId" class="form-control">
                                            </div>
                                        </div> -->
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label class="districtLa">District Lao</label>
                                                <input type="input" Name="txtDistrictLa" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label class="districtEN">District EN</label>
                                                <input type="input" Name="txtDistrictEN" class="form-control">
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
                <!-- /.modal -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="table table-bordered beautified_report">

                                    <thead>
                                        <tr>
                                            <th class="no">No</th>
                                            <th class="districtLa">District Lao</th>
                                            <th class="districtLa">District EN</th>
                                            <th class="province">Province</th>
                                            <th class="tools" style="text-align:center">Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;

                                        foreach ($loadDistrict as $data) {



                                        ?>
                                            <div class="modal fade modal-fullscreen" id="modal-lg-Edit<?= $data['district_id'] ?>" data-backdrop="false">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title bt_update">Edit District</h4>
                                                            <h4 class="modal-title district"> District</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="?d=master/district" enctype="multipart/form-data">
                                                            <div class="modal-body">

                                                                <div class="row col-md-12">
                                                                   
                                                                        <input type="hidden" readonly name="txtDistrictId" value="<?= $data['district_id'] ?>" class="form-control" autocomplete="off" />
                                                                   
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label class="province">Province</label>
                                                                        
                                                                            <select class="form-control select2" name="province_id2" required="true">
                                                                                <option class="pleaseSelect" value="">-- please select --</option>
                                                                                <?php
                                                                                $provinces = LoadProvinceList($tokenkey, $api_url);
                                                                              
                                                                                foreach ($provinces as $data2) {
                                                                                    $selected = $data['province_name'] == $data2['province_name'] ? "selected" : "";
                                                                                ?>
                                                                                    <option value="<?= $data2['province_id'] ?>" <?=$selected?>><?= $data2['province_name'] ?></option>
                                                                                <?php   } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="districtLa">district</label>
                                                                        <input type="text" name="txtDistrictLa" value="<?= $data['districtname_la'] ?>" class="form-control" autocomplete="off" required="true" />
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="districtEN">district</label>
                                                                        <input type="text" name="txtDistrictEN" value="<?= $data['districtname_en'] ?>" class="form-control" autocomplete="off" required="true" />
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default bt_close" data-dismiss="modal">Close</button>
                                                                <button type="submit" name="btnEdit" class="btn btn-primary bt_update">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>

                                            </div>


                                            <tr>


                                                <td><?= $i ?></td>
                                                <td><?= $data['districtname_la'] ?></td>
                                                <td><?= $data['districtname_en'] ?></td>
                                                <td><?= $data['province_name'] ?></td>
                                                <td align="center">
                                                    <a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg-Edit<?= $data['district_id'] ?>"></i></a>
                                                    <a href="?d=master/district&del=<?= $data['district_id'] ?>" onclick="return confirm('do you want to delete this...?')"><i class="far fa-trash-alt "></i></a>
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