<section class="content-header">
    <h1>
        Edit role
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>role/all"><i class="fa fa-coffee"></i> Role</a></li>
        <li><a href="<?= base_url() ?>role/edit/<?= $role['role_id'] ?>"> Edit role</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h4 class="whiteTitle">Edit Role </h4>
            </div>
            <div>
                <?php if (isset($error)) { ?>
                    <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="post">
                    <div class="mediumBox">
                        <label>Name</label>
                        <input type='text' name='name' class='form-control' placeholder="Name" value="<?= $role['name'] ?>"/>
                        <br/>
                        <label>Permissions</label>
                        <br/>
                        <label>Visitors</label><br/>
                        <label class="checkbox-inline"><input type="checkbox" name="visitor_view" value="1" <?php if ($role['visitor_view'] == 1) { ?> checked="true" <?php } ?>>View visitors</label>
                        <label class="checkbox-inline"><input type="checkbox" name="visitor_add" value="1" <?php if ($role['visitor_add'] == 1) { ?> checked="true" <?php } ?>>Add visitors</label>
                        <label class="checkbox-inline"><input type="checkbox" name="visitor_edit" value="1" <?php if ($role['visitor_edit'] == 1) { ?> checked="true" <?php } ?>>Edit visitors</label>
                        <label class="checkbox-inline"><input type="checkbox" name="visitor_delete" value="1" <?php if ($role['visitor_delete'] == 1) { ?> checked="true" <?php } ?>>Delete visitors</label>
                        <hr />
                        <label>Users</label><br/>
                        <label class="checkbox-inline"><input type="checkbox" name="user_view" value="1" <?php if ($role['user_view'] == 1) { ?> checked="true" <?php } ?>>View users</label>
                        
                        <label class="checkbox-inline"><input type="checkbox" name="user_add" value="1" <?php if ($role['user_add'] == 1) { ?> checked="true" <?php } ?>>Add users</label>
                        <label class="checkbox-inline"><input type="checkbox" name="user_delete" value="1" <?php if ($role['user_delete'] == 1) { ?> checked="true" <?php } ?>>Delete users</label>
                        <hr />
                        <label>Report</label><br/>
                        <label class="checkbox-inline"><input type="checkbox" name="report_view" value="1" <?php if ($role['report_view'] == 1) { ?> checked="true" <?php } ?>>View reports</label>
                        <hr />
                        <label>Logs</label><br/>
                        <label class="checkbox-inline"><input type="checkbox" name="log" value="1" <?php if ($role['log'] == 1) { ?> checked="true" <?php } ?>>View logs</label>
                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:95%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>