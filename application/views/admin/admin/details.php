<section class="content-header">
    <h1>
        Admin details (<?= $user['username'] ?>)
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Admin/all"><i class="fa fa-users"></i> Admin</a></li>
        <li><a href="<?= base_url() ?>Admin/details/<?= $user['admin_id'] ?>"><?= $user['username'] ?></a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary center">
                <div class="box-header">
                    <h3 class="box-title">Admin Information

                        <?php if ($this->session->userdata("user")['role_id'] >= $user['role_id']) { ?>
                            <a class="pull-right" href="<?= site_url("Admin/edit/" . $user['admin_id']); ?>">
                                Edit
                            </a>
                        <?php } ?>
                    </h3>
                </div>
                <div class="box-body">
                    <table class="formTable">
                        <tr>
                            <th>Username</th>
                            <td> 
                                : <?= $user['username'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td> 
                                : <?= $user['email'] ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td> 
                                : <?= $user['contact'] ?>
                            </td>
                        </tr>

                    
                        <tr>
                            <th>Role</th>
                            <td> 
                                : <?= $user['role'] ?>
                            </td>
                        </tr>

                        <?php if ($this->session->userdata("user")['admin_id'] != $user['admin_id'] && $this->session->userdata("user")['role_id'] > $user['role_id']) { ?>
                            <tr>
                                <td></td>
                                <td>
                                    <a class="btn btn-danger" href="<?= site_url("Admin/delete/" . $user['admin_id']); ?>">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
            </div>
        </div>

    </div>
</section>