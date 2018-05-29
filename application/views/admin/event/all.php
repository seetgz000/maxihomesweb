<section class="content-header">
    <h1>
        Event
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Event/all"><i class="fa fa-book"></i> Event</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'> Event</h4>
                <a href='<?php echo site_url('event/add'); ?>' class='btn btn-info pull-right'>
                    <i class='glyphicon glyphicon-plus' ></i> Add</a>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($event as $row) {
                                ?>
                                <tr>
                                    <td><a href="<?=base_url()?>Event/details/<?=$row["event_id"]?>"><?= $i ?></a></td>
                                    <td><a href="<?=base_url()?>Event/details/<?=$row["event_id"]?>"><?= $row["title"] ?></a></td>
                                    <td><a class="btn btn-danger" href="<?= base_url(); ?>Event/delete/<?= $row['event_id']; ?>">delete</a>
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
                                <th>Title</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>


</section>