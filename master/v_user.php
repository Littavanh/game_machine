<?php
$tokenkey = $_SESSION['settokenkey'];

?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_user">User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active mn_master">Master</li>
                    <li class="breadcrumb-item active mn_user">User</li>
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
                                <h4 class="modal-title bt_add">Add User</h4>
                                <h4 class="modal-title mn_user">Add User</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="?d=master/user" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="userName">UserName</label>
                                                <input type="input" Name="txtUserName" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="firstName">FirstName</label>
                                                <input type="input" Name="txtFirstName" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="lastName">LastName</label>
                                                <input type="input" Name="txtLastName" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="mn_role">Role</label>
                                                <select class="form-control" name="cb_role">
                                                    <option class="pleaseSelect" value="0">---please select---</option>
                                                    <?php
                                                    $role = LoadRoleList($tokenkey, $api_url);

                                                    foreach ($role as $data) {
                                                        // $selected = $rowc['type'] == $row['type'] ? "selected" : "";
                                                    ?>
                                                        <option value="<?= $data['roleId'] ?>" <?= $selected ?>><?= $data['roleName'] ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
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
                                        <tr class="text-center">
                                            <th class="no">No</th>
                                            <th class="userName">UserName</th>
                                            <th class="fullName">FullName</th>
                                            <th class="mn_role">Role</th>
                                            <th class="tools" style="text-align:center">Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $arr = LoadUserList($tokenkey, $api_url);
                                        $i = 1;
                                        foreach ($arr as $data) {



                                        ?>
                                            <div class="modal fade modal-fullscreen" id="modal-lg-Edit<?= $data['userId'] ?>" data-backdrop="false">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title bt_update">Edit User</h4>
                                                            <h4 class="modal-title mn_user">Edit User</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="?d=master/user" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="txtUserId" value="<?= $data['userId'] ?>" class="form-control" autocomplete="off" />
                                                                <div class="row col-md-12">
                                                                    <div class="form-group col-md-4">
                                                                        <label class="userName">UserName</label>
                                                                        <input type="text" name="txtUserName" value="<?= $data['userName'] ?>" class="form-control" autocomplete="off" />
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="firstName">FirstName</label>
                                                                        <input type="text" name="txtFirstName" value="<?= $data['firstName'] ?>" class="form-control" autocomplete="off" />
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label class="lastName">LastName</label>
                                                                        <input type="text" name="txtLastName" value="<?= $data['lastName'] ?>" class="form-control" autocomplete="off" />
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="mn_role">Role</label>
                                                                            <select class="form-control" name="cb_role">
                                                                                <option class="pleaseSelect" value="0">---please select---</option>
                                                                                <?php
                                                                                $role = LoadRoleList($tokenkey, $api_url);

                                                                                foreach ($role as $row) {
                                                                                    $selected = $data['roleId'] == $row['roleId'] ? "selected" : "";
                                                                                ?>
                                                                                    <option value="<?= $row['roleId'] ?>" <?= $selected ?>><?= $row['roleName'] ?></option>
                                                                                <?php }
                                                                                ?>
                                                                            </select>
                                                                        </div>
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


                                            <tr class="text-center">


                                                <td><?= $i ?></td>
                                                <td><?= $data['userName'] ?></td>
                                                <td><?= $data['firstName'] ?> <?= $data['lastName'] ?></td>
                                                <td><?= $data['roleName'] ?></td>
                                                <td align="center">
                                                    <a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#modal-lg-Edit<?= $data['userId'] ?>"></i></a>
                                                    <a href="?d=master/user&del=<?= $data['userId'] ?>" onclick="return confirm('do you want to delete this...?')"><i class="far fa-trash-alt"></i></a>
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