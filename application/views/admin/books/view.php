<section class="content-header">
    <h1>
         <?= $book['name']; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Books/all"><i class="fa fa-users"></i> Books</a></li>
        <li><a href="<?= base_url() . 'Books/view/' . $book['books_id']; ?>"> view</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="row">
        <div class="col-4 col-lg-4 col-md-4">
        <div class="box box-success">
            <div class="box box-header">
                <h4 class="box-title "><?= $book['name']; ?> </h4>
            </div>
            <div>
                <?php if (isset($error)) { ?>
                    <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="post" enctype="multipart/form-control">
                    <div class="mediumBox">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <td>: <?= $book['name']; ?></td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                    </div>
                </form>

            </div>
        </div>
        </div>
        </div>
</section>