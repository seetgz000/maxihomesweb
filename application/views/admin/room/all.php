<section class="content-header">
    <h1>
        Room
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Room/all"><i class="fa fa-book"></i> Room</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'> Room</h4>
                <a href='<?php echo site_url('room/add'); ?>' class='btn btn-info pull-right'>
                    <i class='glyphicon glyphicon-plus' ></i> Add</a>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Advance Rental</th>
                                <th>Location</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($room as $row) {
                                ?>
                                <tr>
                                    <td><a href="<?=base_url()?>Room/details/<?=$row["room_id"]?>"><?= $i ?></a></td>
                                    <td><a href="<?=base_url()?>Room/details/<?=$row["room_id"]?>"><?= $row["name"] ?></a></td>
                                    <td><a href="<?=base_url()?>Room/details/<?=$row["room_id"]?>"><?= $row["advance_rental"] ?></a></td>
                                    <td><a href="<?=base_url()?>Room/details/<?=$row["room_id"]?>"><?= $row["location"] ?></a></td>
                                    <td><a class="btn btn-danger" href="<?= base_url(); ?>Room/delete/<?= $row['room_id']; ?>">delete</a>
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
                                <th>Name</th>
                                <th>Advance Rental</th>
                                <th>Location</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>


</section>