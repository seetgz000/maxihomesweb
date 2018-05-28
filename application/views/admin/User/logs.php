<section class="content-header">
    <h1>
        User's log (<?= $user['username']?>)
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>user/all"><i class="fa fa-users"></i> User</a></li>
        <li><a href='<?= base_url() ?>user/logs/<?= $user['user_id']?>'><?= $user['username']?>'s logs</a></li>
    </ol>
</section>
<br>

<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Logs</h4>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Edited By</th>
                                <th>Description</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($logs as $log) {
                                ?>

                                <tr>

                                    <td>
                                        <?php if (isset($log['link'])) { ?>
                                            <a href="<?= $log['link']; ?>">
                                            <?php } ?>
                                            <?= $i ?>
                                            <?php if (isset($log['link'])) { ?>
                                            </a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if (isset($log['link'])) { ?>
                                            <a href="<?= $log['link']; ?>">
                                            <?php } ?>
                                            <?= $log['username'] ?>
                                            <?php if (isset($log['link'])) { ?>
                                            </a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if (isset($log['link'])) { ?>
                                            <a href="<?= $log['link']; ?>">
                                            <?php } ?>
                                            <?= $log['description'] ?>
                                            <?php if (isset($log['link'])) { ?>
                                            </a>
                                        <?php } ?>

                                    </td>
                                    <td>
                                        <?php if (isset($log['link'])) { ?>
                                            <a href="<?= $log['link']; ?>">
                                            <?php } ?>
                                            <?= $log['created_date'] ?>
                                            <?php if (isset($log['link'])) { ?>
                                            </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Edited By</th>
                                <th>Description</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

</section>