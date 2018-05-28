<section class="content-header">
    <h1>
        Users
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>user/all"><i class="fa fa-users"></i> User</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='box box-default'>
            <div class='box-header'>
                <h4 class="whiteTitle" style='display: inline-block;width:100%;'>Users
                <a href="<?= site_url('User/add'); ?>" class="pull-right">Add</a>
                </h4>

            </div>
            <div class='box-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Centre Name</th>
                                <th>Start Date</th>
                                <th>Expiry Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($users as $user) {
                                ?>
                                <tr>
                                    <td><a href="<?= base_url() ?>user/user_details/<?= $user['user_id'] ?>"><?php echo $i; ?></a></td>
                                    <td><a href="<?= base_url() ?>user/user_details/<?= $user['user_id'] ?>"><?php echo $user['username']; ?></a></td>
                                    <td><a href="<?= base_url() ?>user/user_details/<?= $user['user_id'] ?>"><?php echo $user['start_date']; ?></a></td>
                                    <td><a href="<?= base_url() ?>user/user_details/<?= $user['user_id'] ?>"><?php echo $user['expiry']; ?></a></td>
                                    <td><button class="btn btn-danger delete-button" data-id="<?=$user["user_id"]?>"><i class="fa fa-trash"></i> delete</button></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>User Type</th>
                                
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
<script>
    $(document).on('click', '.delete-button', function (e) {
        if (confirm("Are you sure you want to delete this user?")) {
            id = $(this).attr('data-id');
            window.location.replace("<?= base_url() ?>user/delete/" + id);
        }
    });
</script>