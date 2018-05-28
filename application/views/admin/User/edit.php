<section class="content-header">
    <h1>
        Edit user (<?= $user['username'] ?>)
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>user/all"><i class="fa fa-users"></i> User</a></li>
        <li><a href="<?= base_url() ?>user/edit/<?= $user['user_id'] ?>"> Edit user (<?= $user['username'] ?>)</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="box box-success">
            <div class=" box-header">
                <h4 class="box-title">Edit user (<?= $user['username'] ?>)</h4>
            </div>
            <div class="box-body">
                <?php if (isset($error)) { ?>
                    <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="post" action="<?= base_url() ?>User/edit/<?= $user['user_id'] ?>" enctype="multipart/form-data">
                    <div class="mediumBox">
                    <label>Username</label>
                    <input type='text' name='username' class='form-control' placeholder="Username" value="<?= $user['username'] ?>"/>
                    <label>Email</label>
                    <input type='email' name='email' class='form-control' placeholder="Email" value="<?= $user['email'] ?>"/>
                    <label>Contact Person Name</label>
                    <input type='text' name='contact_person' class='form-control' placeholder="contact person" value="<?= $user['contact_person'] ?>"/>
                    <label>Contact Number</label>
                    <input type='text' name='contact_number' class='form-control' placeholder="contact" value="<?= $user['contact_number'] ?>">
                    <label>Address</label>
                    <input type='text' name='address' class='form-control' placeholder="address" value="<?= $user['address'] ?>"/>
                    <label>Expiry</label>
                    <input type='date' name='expiry' class='form-control' placeholder="expiry" value="<?= $user['expiry'] ?>"/>
                    <label>New Password</label>
                    <input type='password' name='password' class='form-control' placeholder="New Password"/>
                    <label>Re-enter password</label>
                    <input type='password' name='password2' class='form-control' placeholder="Re-enter New Password"/> 
                    <label>Allowed Device</label>
                    <input type='number' name='allowed_devices' class='form-control' placeholder="Allowed Device" value="<?= $user['allowed_devices'] ?>"/> 
                       
                        <input type="submit" value="update" class="btn btn-primary" style="margin-bottom:5%;margin-left:90%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<script>
    $(document).on("change", "#form_state_id", function (e) {
        state_id = this.value;

        postParam = {
            state_id: state_id
        };

        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>main/load_area/',
            data: postParam,
            success: function (data) {
                $("#form_area_id").html(data);
            }, error: function () {
                console.log("error");
            }
        });
    });
</script>