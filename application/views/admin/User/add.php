<section class="content-header">
    <h1>
        Add user
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>user/all"><i class="fa fa-users"></i> User</a></li>
        <li><a href="<?= base_url() ?>user/add"> Add user</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="box box-success">
            <div class="box box-header">
                <h4 class="whiteTitle">Add User 
                  
                </h4>
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
                        <input type='text' name='username' class='form-control' placeholder="Username" <?php if (isset($input['username'])) { ?>value="<?= $input['username'] ?>"<?php } ?>/>
                        <label>Email</label>
                        <input type='email' name='email' class='form-control' placeholder="Email" <?php if (isset($input['email'])) { ?>value="<?= $input['email'] ?>"<?php } ?>/>
                        <label>Contact Person Name</label>
                        <input type='text' name='contact_person' class='form-control' placeholder="contact person" <?php if (isset($input['contact_person'])) { ?>value="<?= $input['contact_person'] ?>"<?php } ?>/>
                        <label>Contact Number</label>
                        <input type='text' name='contact_number' class='form-control' placeholder="contact" <?php if (isset($input['contact_number'])) { ?>value="<?= $input['contact_number'] ?>"<?php } ?>/>
                        <label>Address</label>
                        <input type='text' name='address' class='form-control' placeholder="address" <?php if (isset($input['address'])) { ?>value="<?= $input['address'] ?>"<?php } ?>/>
                        <label>Expiry</label>
                        <input type='date' name='expiry' class='form-control' placeholder="expiry" <?php if (isset($input['expiry'])) { ?>value="<?= $input['expiry'] ?>"<?php } ?>/>
                        <label>Password</label>
                        <input type='password' name='password' class='form-control' placeholder="Password"/>
                        <label>Re-enter password</label>
                        <input type='password' name='password2' class='form-control' placeholder="Re-enter Password"/>
                       
                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:90%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>