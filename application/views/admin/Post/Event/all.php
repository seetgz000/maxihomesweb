<section class="content-header">
    <h1>
        Events
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>post/events"><i class="fa fa-comments"></i> Events</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'>Agents</h4>
                <a href='<?php echo site_url('event/add'); ?>' class='btn btn-info pull-right'>
                    <i class='glyphicon glyphicon-plus' ></i> Add</a>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Banner</th>
                                <th>Title</th>
                                <th>Created by</th>
                                <th>Court</th>
                                <th>Approved</th>
                                <th>Date and Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($events as $row) {
                                ?>
                            <td><?= $i ?></td>
                            <td><img src="<?= base_url() . $row['banner'] ?>"></td>
                            <td><?= $row['title'] ?></td>
                            <td><?= $row['created_by'] ?></td>
                            <td><?= $row['court'] ?></td>
                            <td><?php
                                if ($row['approved'] == 1) {
                                    ?>
                                    YES
                                    <?php
                                } else if ($row['approved'] == 0) {
                                    ?>
                                    NO
                                    <?php
                                }
                                ?></td>
                            <td><?= $row['date'] . " " . $row['time'] ?></td>
                            <?php
                            $i++;
                        }
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Banner</th>
                                <th>Title</th>
                                <th>Created by</th>
                                <th>Court</th>
                                <th>Approved</th>
                                <th>Date and Time</th>
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