<section class="content-header">
    <h1>
        Add role
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>role/all"><i class="fa fa-coffee"></i> Role</a></li>
        <li><a href="<?= base_url() ?>role/add"> Add role</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h4 class="whiteTitle">Add Role </h4>
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
                        <input type='text' name='name' class='form-control' placeholder="Name"/>
                        <br/>
                        <label>Permissions</label>
                        <br/>
                        <label class="checkbox-inline"><input type="checkbox" name="visitor_view" value="1">View visitors</label>
                        <label class="checkbox-inline"><input type="checkbox" name="visitor_add" value="1">Add visitors</label>
                        <label class="checkbox-inline"><input type="checkbox" name="visitor_edit" value="1">Edit visitors</label>
                        <label class="checkbox-inline"><input type="checkbox" name="visitor_delete" value="1">Delete visitors</label>
                        <label class="checkbox-inline"><input type="checkbox" name="user_view" value="1">View users</label>
                        <br>
                        <label class="checkbox-inline"><input type="checkbox" name="user_add" value="1">Delete users</label>
                        <label class="checkbox-inline"><input type="checkbox" name="user_delete" value="1">Delete users</label>
                        <label class="checkbox-inline"><input type="checkbox" name="report_view" value="1">View reports</label>
                        <label class="checkbox-inline"><input type="checkbox" name="log" value="1">View logs</label>
                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:95%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>