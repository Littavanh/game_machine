<?php
$tokenkey = $_SESSION['settokenkey'];

?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_deviceType">Device Type</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_master">Master</li>
                    <li class="breadcrumb-item active mn_deviceType">Device Type</li>
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
                        <i class="fas fa-plus-circle "></i> Add</button>
                </div>
                <!-- /.card-header -->
                <div class="modal fade" id="modal-lg-New">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title bt_add mn_deviceType">Add Device Type</h4>
                                <h4 class="modal-title mn_deviceType"></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="?d=master/deviceType" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">



                                        <!-- <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>ລະຫັດDevice Type</label>
                                                <input type="input" Name="txtDeviceTypeId" class="form-control">
                                            </div>
                                        </div> -->
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label class="mn_deviceType">Device Type</label>
                                                <input type="input" Name="txtDeviceTypeText" class="form-control">
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
                                            <th class="mn_deviceType">Device Type</th>
                                            <th class="tools" style="text-align:center">Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        $arr = LoadDeviceType($tokenkey, $api_url);
                                        foreach ($arr as $data) {



                                        ?>
                                            <div class="modal fade modal-fullscreen" id="modal-lg-Edit<?= $data['deviceTypeId'] ?>" data-backdrop="false">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title bt_update">Edit Device Type</h4>
                                                            <h4 class="modal-title mn_deviceType">Edit Device Type</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="?d=master/deviceType" enctype="multipart/form-data">
                                                            <div class="modal-body">

                                                                <div class="row col-md-12">
                                                                    <div class="form-group col-md-3">
                                                                        <label class="id">id</label>
                                                                        <input type="text" readonly name="txtDeviceTypeId" value="<?= $data['deviceTypeId'] ?>" class="form-control" autocomplete="off" />
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label class="mn_deviceType">Device Type</label>
                                                                        <input type="text" name="txtDeviceTypeText" value="<?= $data['deviceTypeText'] ?>" class="form-control" autocomplete="off" required="true" />
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
                                                <td><?= $data['deviceTypeText'] ?></td>
                                                <td align="center">
                                                    <a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg-Edit<?= $data['deviceTypeId'] ?>"></i></a>
                                                    <a href="?d=master/deviceType&del=<?= $data['deviceTypeId'] ?>" onclick="return confirm('do you want to delete this...?')"><i class="far fa-trash-alt "></i></a>
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