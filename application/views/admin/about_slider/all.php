<section class="content-header">
    <h1>
        About Slider
    </h1>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'> About Slider</h4>
                <a href='<?php echo site_url('AboutSlider/add'); ?>' class='btn btn-info pull-right'>
                    <i class='glyphicon glyphicon-plus' ></i> Add</a>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Location</th>
                                <th>Thumbnail</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($about_slider as $row) {
                                ?>
                                <tr>
                                    <td><a href="<?=base_url()?>AboutSlider/details/<?=$row["about_slider_id"]?>"><?= $i ?></a></td>
                                    <td><a href="<?=base_url()?>AboutSlider/details/<?=$row["about_slider_id"]?>"><?= $row["location"] ?></a></td>
                                    <td><a href="<?=base_url()?>AboutSlider/details/<?=$row["about_slider_id"]?>"><?= $row["thumbnail"] ?></a></td>
                                    <td><a class="btn btn-danger" href="<?= base_url(); ?>AboutSlider/delete/<?= $row['about_slider_id']; ?>">delete</a>
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
                                <th>Location</th>
                                <th>Thumbnail</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>


</section>