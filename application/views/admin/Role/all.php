<section class="content-header">
    <h1>
        Roles
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>role/all"><i class="fa fa-coffee"></i> Role</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Roles</h4>
                <a href='<?php echo site_url('role/add'); ?>' class='btn btn-info pull-right' >
                    <i class='glyphicon glyphicon-plus' ></i> Add</a>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Roles</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($roles as $role) {
                                ?>
                                <tr>
                                    <td><a href="<?= base_url() ?>role/details/"><?= $role['role_id'] ?></a></td>
                                    <td><a href="<?= base_url() ?>role/details/<?= $role['role_id'] ?>"><?= $role['name'] ?></a></td>
                                    <td><a href="<?= base_url() ?>role/edit/<?= $role['role_id'] ?>"><button class="btn btn-warning">Edit</button></a></td>
                                  
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Roles</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>