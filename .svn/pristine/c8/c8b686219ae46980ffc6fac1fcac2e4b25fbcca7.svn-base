<?php
$tokenkey = $_SESSION['settokenkey'];

?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_role">Role</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_master">Master</li>
                    <li class="breadcrumb-item active mn_role">Role</li>
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
                                <h4 class="modal-title bt_add">Add Role</h4>
                                <h4 class="modal-title mn_role">Add Role</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="?d=master/role" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label class="mn_role">Role</label>
                                                <input type="input" Name="txtRole" class="form-control">
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
                                            <th class="mn_role">Role</th>
                                            <th class="tools" style="text-align:center">Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $arr = LoadRoleList($tokenkey, $api_url);
                                        $i = 1;
                                        foreach ($arr as $data) {



                                        ?>
                                            <div class="modal fade modal-fullscreen" id="modal-lg-Edit<?= $data['roleId'] ?>" data-backdrop="false">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title bt_update">Edit Role</h4>
                                                            <h4 class="modal-title mn_role">Edit Role</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="?d=master/role" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="txtRoleId" value="<?= $data['roleId'] ?>" class="form-control" autocomplete="off" />
                                                                <div class="row col-md-12">
                                                                    <div class="form-group col-md-6">
                                                                        <label class="mn_role">Role</label>
                                                                        <input type="text" name="txtRole" value="<?= $data['roleName'] ?>" class="form-control" autocomplete="off" />
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
                                                <td><?= $data['roleName'] ?></td>
                                                <td align="center">
                                                    <a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg-Edit<?= $data['roleId'] ?>"></i></a>
                                                    <a href="?d=master/role&del=<?= $data['roleId'] ?>" onclick="return confirm('do you want to delete this...?')"><i class="far fa-trash-alt"></i></a>
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