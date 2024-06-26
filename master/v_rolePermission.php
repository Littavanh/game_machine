<?php
$tokenkey = $_SESSION['settokenkey'];

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mn_rolePermission">Role Permission</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item mn_home"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item mn_master"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active mn_rolePermission">Role Permission</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="form-group">
                            <table>
                                <tr class="text-center">
                                    <td>
                                        <label class="mn_role" for="roledrp">Role </label>
                                    </td>
                                    <td>
                                        <form method="POST" action="index.php?d=master/rolePermission">
                                            <select class="form-control" id="cboRole" name="cboRole" data-for="Role Name" onchange="this.form.submit()">
                                                <option class="pleaseSelect" value="0">---please select---</option>
                                                <?php
                                                $deviceType = LoadRoleList($tokenkey, $api_url);

                                                foreach ($deviceType as $row) {
                                                    // $selected = $rowc['type'] == $row['type'] ? "selected" : "";
                                                ?>
                                                    <option value="<?= $row['roleId'] ?>" <?php if ($_SESSION['set_role_id'] == $row['roleId']) echo 'selected="selected"'; ?>><?= $row['roleName'] ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </form>
                                    </td>

                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="index.php?d=master/rolePermission">
                            <table id="tblrolepermission" name="tblrolepermission" class="table table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th style="width: 10%;" class="align-center mn_permission">Permission</th>
                                        <th style="width: 6%;" class="align-center ">Add
                                            <br />
                                            <input id="chkbxAddSelectAll" style="width: 20px; height: 20px;" type="checkbox" onclick="checkAllAdd(this);" />
                                        </th>
                                        <th style="width: 6%;" class="align-center ">Edit
                                            <br />
                                            <input id="chkbxEditSelectAll" style="width: 20px; height: 20px;" type="checkbox" onclick="checkAllEdit(this);" />
                                        </th>
                                        <th style="width: 6%;" class="align-center ">View
                                            <br />
                                            <input id="chkbxViewSelectAll" style="width: 20px; height: 20px;" type="checkbox" onclick="checkAllView(this);" />
                                        </th>
                                        <th style="width: 6%;" class="align-center ">Delete
                                            <br />
                                            <input id="chkbxDeleteSelectAll" style="width: 20px; height: 20px;" type="checkbox" onclick="checkAllDelete(this);" />
                                        </th>
                                        <th style="width: 6%;" class="align-center ">Enable
                                            <br />
                                            <input id="chkbxEnableSelectAll" style="width: 20px; height: 20px;" type="checkbox" onclick="checkAllEnable(this);" />
                                        </th>



                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $i = 1;



                                    foreach ($loadRP as $row) {
                                    ?>
                                        <tr class="text-center">
                                            <td><?= $row['permissionName'] ?></td>
                                            <td><input type="checkbox" style="width: 20px; height: 20px;" class="checkboxadd" name="canAdd[<?php echo $i - 1; ?>]" <?php if ($row['per_add'] === "1") echo 'checked="checked"'; ?>></td>
                                            <td><input type="checkbox" style="width: 20px; height: 20px;" class="checkboxedit" name="canEdit[<?php echo $i - 1; ?>]" <?php if ($row['per_edit'] === "1") echo 'checked="checked"'; ?>></td>
                                            <td><input type="checkbox" style="width: 20px; height: 20px;" class="checkboxview" name="canView[<?php echo $i - 1; ?>]" <?php if ($row['per_view'] === "1") echo 'checked="checked"'; ?>></td>
                                            <td><input type="checkbox" style="width: 20px; height: 20px;" class="checkboxdelete" name="canDelete[<?php echo $i - 1; ?>]" <?php if ($row['per_del'] === "1") echo 'checked="checked"'; ?>></td>
                                            <td><input type="checkbox" style="width: 20px; height: 20px;" class="checkboxenable" name="canEnable[<?php echo $i - 1; ?>]" <?php if ($row['per_enable'] === "1") echo 'checked="checked"'; ?>></td>
                                            <input type="hidden" name="permissionId[]" value='<?= $row['permissionId'] ?>'>
                                            <input type="hidden" name="permissionName[]" value='<?= $row['permissionName'] ?>'>
                                            <input type="hidden" name="saveRoleId[]" value='<?= $row['roleId'] ?>'>
                                        </tr>
                                    <?php $i++;
                                    } ?>
                                </tbody>
                            </table>
                            <div class="card-header">

                            </div>
                            </br>
                            <button type="submit" name="btnSave" class="btn btn-primary bt_save">Save</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

<script type="text/javascript">
    function checkAllAdd(chk) {
        var ischecked = chk.checked;
        var row_count = $('#tblrolepermission >tbody >tr').length;
        var checkboxes = document.getElementsByClassName("checkboxadd");
        for (var i = 0; i < row_count; i++) {
            checkboxes[i].checked = ischecked;

        }
    }

    function checkAllEdit(chk) {
        var ischecked = chk.checked;
        var row_count = $('#tblrolepermission >tbody >tr').length;
        var checkboxes = document.getElementsByClassName("checkboxedit");
        for (var i = 0; i < row_count; i++) {
            checkboxes[i].checked = ischecked;

        }
    }

    function checkAllView(chk) {
        var ischecked = chk.checked;
        var row_count = $('#tblrolepermission >tbody >tr').length;
        var checkboxes = document.getElementsByClassName("checkboxview");
        for (var i = 0; i < row_count; i++) {
            checkboxes[i].checked = ischecked;

        }
    }

    function checkAllDelete(chk) {
        var ischecked = chk.checked;
        var row_count = $('#tblrolepermission >tbody >tr').length;
        var checkboxes = document.getElementsByClassName("checkboxdelete");
        for (var i = 0; i < row_count; i++) {
            checkboxes[i].checked = ischecked;

        }
    }

    function checkAllEnable(chk) {
        var ischecked = chk.checked;
        var row_count = $('#tblrolepermission >tbody >tr').length;
        var checkboxes = document.getElementsByClassName("checkboxenable");
        for (var i = 0; i < row_count; i++) {
            checkboxes[i].checked = ischecked;

        }
    }
</script>