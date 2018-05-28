<section class="content-header">
    <h1>
        User history (<?= $user['username'] ?>)
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>user/all"><i class="fa fa-users"></i> User</a></li>
        <li><a href="<?= base_url() ?>user/user_details/<?= $user['user_id'] ?>"><?= $user['username'] ?></a></li>
        <li><a href="<?= base_url() ?>user/history/<?= $user['log_id'] ?>">history #<?= $user['log_id']; ?></a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary center">
                <div class="panel-heading">
                    <h3 class="panel-title">User Information</h3>
                </div>
                <div class="panel-body">
                    <table class="formTable">
                        <tr id="history_username">
                            <th>Username</th>
                            <td> 
                                : <?= $user['username'] ?>
                            </td>
                        </tr>
                        <tr id="history_name">
                            <th>Name</th>
                            <td> 
                                : <?= $user['first_name'] . " " . $user['last_name'] ?>
                            </td>
                        </tr>
                        <tr id="history_email">
                            <th>Email</th>
                            <td> 
                                : <?= $user['email'] ?>
                            </td>
                        </tr>
                        <tr id="history_contact">
                            <th>Contact Number</th>
                            <td> 
                                : <?= $user['contact'] ?>
                            </td>
                        </tr>
                        <tr id="history_position">
                            <th>Position</th>
                            <td> 
                                : <?= $user['position'] ?>
                            </td>
                        </tr>
                        <tr id="history_role">
                            <th>Role</th>
                            <td> 
                                : <?= $user['role'] ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>


<script>
    $(document).ready(function () {
        var changes = <?= $user['changes']; ?>;
        console.log(changes);
        for (var i = 0; i < changes.length; i++) {
            if(changes[i] == "first_name" || changes[i] == "last_name"){
                changes[i] = "name";
            }
            var el = $("#history_" + changes[i]).css("background-color", "rgb(230, 240, 255)");
        }
    });
</script>