<section class="content-header">
    <h1>
        Article Categories
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Article_category/all"><i class="fa fa-book"></i> Article Categories</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle" style='display: inline-block;'> Article Categories</h4>
                <a data-toggle="modal" data-target="#add-article-category" class='btn btn-info pull-right'>
                    <i class='glyphicon glyphicon-plus' ></i> Add</a>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Article Category</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($article_categories as $row) {
                                ?>
                                <tr>
                                    <td><a href="<?= base_url() ?>Article/details/<?= $row["article_category_id"] ?>"><?= $i ?></a></td>
                                    <td><a href="<?= base_url() ?>Article/details/<?= $row["article_category_id"] ?>"><?= $row["article_category"] ?></a></td>
                                    <td><button class="btn btn-danger delete-button" data-id="<?= $row['article_category_id'] ?>"><i class="fa fa-trash"></i> Delete</button></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Article Category</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Modal -->
<div id="add-article-category" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Article Category</h4>
            </div>
            <form method="POST" action="<?= base_url() ?>article_category/add">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <label>Article Category</label>
                            <input type="test" class="form-control" name="article_category" required placeholder="Article Category">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    $(document).on('click', '.delete-button', function (e) {
        if (confirm("Are you sure you want to delete this article category?")) {
            id = $(this).attr('data-id');
            window.location.replace("<?= base_url() ?>article_category/delete/" + id);
        }
    });
</script>