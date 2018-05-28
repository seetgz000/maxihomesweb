<section class="content-header">
    <h1>
        Edit <?= $book['name']; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Admin/all"><i class="fa fa-users"></i> Admin</a></li>
        <li><a href="<?= base_url() . 'Admin/edit/' . $book['books_id']; ?>"> Edit</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h4 class="whiteTitle">Edit Book </h4>
            </div>
            <div>
                <?php if (isset($error)) { ?>
                    <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="post" enctype="multipart/form-data">
                    <div class="mediumBox">
                        <label> Thumbnail </label>
                        <input type="file"  class='form-control' name="thumbnail">
                        <label>Name</label>
                        <input type='text' name='name' class='form-control' value="<?= $book["name"] ?>" placeholder="file name" <?php if (isset($input['username'])) { ?>value="<?= $input['username'] ?>"<?php } ?>/>
                        <label>File Name</label>
                        <input type="text" class="form-control" name="file" value="<?= $book["file"] ?>">
                        <label>Description</label>
                        <textarea class='form-control' name="description"><?= $book["description"] ?></textarea>
                        
                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:90%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>