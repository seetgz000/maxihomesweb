<section class="content-header">
    <h1>
        Edit <?= $user['username']; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Admin/all"><i class="fa fa-users"></i> Admin</a></li>
        <li><a href="<?= base_url() . 'Admin/edit/' . $user['admin_id']; ?>"> Edit</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h4 class="whiteTitle">Edit Admin </h4>
            </div>
            <div>
                <?php if (isset($error)) { ?>
                    <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="post">
                    <div class="mediumBox">
                        <label>Username</label>
                        <input type='text' name='username' class='form-control' placeholder="Username" value="<?= $user["username"] ?>"/>
                        <label>Password</label>
                        <input type='password' name='password' class='form-control' placeholder="Password"/>
                        <label>Re-enter password</label>
                        <input type='password' name='password2' class='form-control' placeholder="Re-enter Password"/>

                        <label>Email</label>
                        <input type='email' name='email' class='form-control' placeholder="Email" value="<?= $user['email']; ?>"/>
                        <label>Contact Number</label>
                        <input type='text' name='contact' class='form-control' placeholder="Contact Number"  value="<?= $user['contact']; ?>" />
                        <label>Role</label>
                        <select name="role" class="form-control">
                            <?php foreach ($roles as $role) { ?>
                                <option value="<?= $role['admin_role_id']; ?>" <?php
                                if ($user["role_id"] == $role["admin_role_id"]) {
                                    ?>
                                            selected
                                            <?php
                                        }
                                        ?>><?= $role['role']; ?></option>
                                    <?php } ?>
                        </select>
                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:90%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>