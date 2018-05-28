<section class="content-header">
    <h1>
        Role details (<?= $role['name'] ?>)
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>role/all"><i class="fa fa-coffee"></i> Role</a></li>
        <li><a href="<?= base_url() ?>role/details/<?= $role['role_id'] ?>"><?= $role['name'] ?></a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary center">
                <div class="panel-heading">
                    <h3 class="panel-title">Role Information</h3>
                </div>
                <div class="panel-body">
                    <table class="formTable">
                        <tr>
                            <th>
                                Name
                            </th>
                            <td>
                                : <?= $role['name'] ?>
                            </td>
                        </tr>
                    </table>
                    <br/>
                    <label>Permissions</label>
                    <br/>
                    <label>Visitor</label><br/>
                    <label class="checkbox-inline"><input type="checkbox" name="visitor_view" value="1" <?php if ($role['visitor_view'] == 1) { ?> checked="true" <?php } ?> disabled="true">View visitors</label>
                    <label class="checkbox-inline"><input type="checkbox" name="visitor_add" value="1" <?php if ($role['visitor_add'] == 1) { ?> checked="true" <?php } ?> disabled="true">Add visitors</label>
                    <label class="checkbox-inline"><input type="checkbox" name="visitor_edit" value="1" <?php if ($role['visitor_edit'] == 1) { ?> checked="true" <?php } ?> disabled="true">Edit visitors</label>
                    <label class="checkbox-inline"><input type="checkbox" name="visitor_delete" value="1" <?php if ($role['visitor_delete'] == 1) { ?> checked="true" <?php } ?> disabled="true">Delete visitors</label>
                    <br/>
                    <label>User</label><br/>
                    <label class="checkbox-inline"><input type="checkbox" name="user_view" value="1" <?php if ($role['user_view'] == 1) { ?> checked="true" <?php } ?> disabled="true">View users</label>
                  
                    <label class="checkbox-inline"><input type="checkbox" name="user_add" value="1" <?php if ($role['user_add'] == 1) { ?> checked="true" <?php } ?> disabled="true">Add users</label>
                    <label class="checkbox-inline"><input type="checkbox" name="user_delete" value="1" <?php if ($role['user_delete'] == 1) { ?> checked="true" <?php } ?> disabled="true">Delete users</label>
                    <br/>
                    <label>Report</label><br />
                    <label class="checkbox-inline"><input type="checkbox" name="report_view" value="1" <?php if ($role['report_view'] == 1) { ?> checked="true" <?php } ?> disabled="true">View reports</label>
                    <br/>
                    <label>Logs</label><br/>
                    <label class="checkbox-inline"><input type="checkbox" name="log" value="1" <?php if ($role['log'] == 1) { ?> checked="true" <?php } ?> disabled="true">View logs</label>
                    <br />
                </div>
            </div>
        </div>

    </div>
</section>