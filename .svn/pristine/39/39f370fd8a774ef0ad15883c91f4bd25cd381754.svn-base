<?php
$tokenkey = $_SESSION['settokenkey'];

?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_info">Info</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_master">Master</li>
                    <li class="breadcrumb-item active mn_info">Info</li>
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
                                <h4 class="modal-title bt_add">Add Info</h4>
                                <h4 class="modal-title mn_info">Add Info</h4>
                                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="?d=master/info" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label class="mn_info">Info Name</label>
                                                <input type="input" Name="txtInfoName" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label class="tel">Info Tel</label>
                                                <input type="input" Name="txtInfoTel" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label class="address">Info Address</label>
                                                <input type="input" Name="txtInfoAddress" class="form-control">
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
                                            <th class="mn_info">Info</th>
                                            <th class="tel">Tel</th>
                                            <th class="address">Address</th>
                                            <th class="tools" style="text-align:center">Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $arr = LoadInfoList($tokenkey, $api_url);
                                        $i = 1;
                                        foreach ($arr as $data) {



                                        ?>
                                            <div class="modal fade modal-fullscreen" id="modal-lg-Edit<?= $data['infoId'] ?>" data-backdrop="false">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title bt_update">Edit Info</h4>
                                                            <h4 class="modal-title mn_info">Edit Info</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="?d=master/info" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="txtInfoId" value="<?= $data['infoId'] ?>" class="form-control" autocomplete="off" />
                                                                <div class="row col-md-12">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="mn_info">Info Name</label>
                                                                        <input type="text" name="txtInfoName" value="<?= $data['infoName'] ?>" class="form-control" autocomplete="off" />
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="tel">Info Tel</label>
                                                                        <input type="text" name="txtInfoTel" value="<?= $data['infoTel'] ?>" class="form-control" autocomplete="off" />
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="address">Info Address</label>
                                                                        <input type="text" name="txtInfoAddress" value="<?= $data['infoAddress'] ?>" class="form-control" autocomplete="off" />
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
                                                <td><?= $data['infoName'] ?></td>
                                                <td><?= $data['infoTel'] ?></td>
                                                <td><?= $data['infoAddress'] ?></td>
                                                <td align="center">
                                                    <a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg-Edit<?= $data['infoId'] ?>"></i></a>
                                                    <a href="?d=master/info&del=<?= $data['infoId'] ?>" onclick="return confirm('do you want to delete this...?')"><i class="far fa-trash-alt"></i></a>
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