<section class="content-header">
    <h1>
        Admins
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>admin/all"><i class="fa fa-users"></i> Admin</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Admin</h4>

                <a href='<?php echo site_url('admin/add'); ?>' class='btn btn-info pull-right'>
                    <i class='glyphicon glyphicon-plus' ></i> Add</a>

            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($users as $user) {
                                ?>
                                <tr>
                                    <td><a href="<?= base_url() ?>admin/details/<?= $user['admin_id'] ?>"><?php echo $i; ?></a></td>
                                    <td><a href="<?= base_url() ?>admin/details/<?= $user['admin_id'] ?>"><?php echo $user['username']; ?></a></td>
                                    <td><a href="<?= base_url() ?>admin/details/<?= $user['admin_id'] ?>"><?php echo $user['role']; ?></a></td>

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
                                <th>Role</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>