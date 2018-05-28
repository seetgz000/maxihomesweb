<section class="content-header">
    <h1>
        Article
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Article/all"><i class="fa fa-book"></i> Article</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'> Article</h4>
                <a href='<?php echo site_url('article/add'); ?>' class='btn btn-info pull-right'>
                    <i class='glyphicon glyphicon-plus' ></i> Add</a>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Category</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($articles as $row) {
                                ?>
                                <tr>
                                    <td><a href="<?=base_url()?>Article/details/<?=$row["article_id"]?>"><?= $i ?></a></td>
                                    <td><a href="<?=base_url()?>Article/details/<?=$row["article_id"]?>"><?= $row["title"] ?></a></td>
                                    <td><a href="<?=base_url()?>Article/details/<?=$row["article_id"]?>"><?= $row["article_category"] ?></a></td>
                                    <td><a class="btn btn-danger" href="<?= base_url(); ?>Article/delete/<?= $row['article_id']; ?>">delete</a>
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
                                <th>Category</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>


</section>