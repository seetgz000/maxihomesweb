<section class="content-header">
    <h1>
        Agents
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>User/all"><i class="fa fa-users"></i> Agents</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Agents</h4>
                <a href='<?php echo site_url('user/add'); ?>' class='btn btn-info pull-right'>
                    <i class='glyphicon glyphicon-plus' ></i> Add</a>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($agents as $agent) {
                                ?>
                                <tr>
                                    <td><a href="<?= base_url() ?>user/user_details/<?= $agent['user_id'] ?>"><?php echo $i; ?></a></td>
                                    <td>
                                        <a href="<?= base_url() ?>user/user_details/<?= $agent['user_id'] ?>">
                                            <div class=" user-panel">
                                                <div class="pull-left image ">
                                                    <img src="<?= $agent['thumbnail_link'] ?>" class="img-circle user_thumbnail" alt="User Image">
                                                </div>
                                               
                                                <span style="margin-left:20px;" class="pull-left"><?= $agent['full_name'] ?></span>
                                            </div>
                                          
                                        </a></td>
                                    <td><a href="<?= base_url() ?>user/user_details/<?= $agent['user_id'] ?>"><?php echo $agent['role']; ?></a></td>

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