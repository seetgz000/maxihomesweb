<section class="content-header">
    <h1>
        Add book
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>books/all"><i class="fa fa-users"></i> book</a></li>
        <li><a href="<?= base_url() ?>books/add"> Add book</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="box box-success">
            <div class="box box-header">
                <h4 class="whiteTitle">Add book </h4>
            </div>
            <div class="box-body">
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
                        <input type='text' name='name' class='form-control' placeholder="name" <?php if (isset($input['username'])) { ?>value="<?= $input['username'] ?>"<?php } ?>/>
                        <label>File Name</label>
                       <input type="text" class="form-control" name="file" placeholder="file name">
                       <label>Description</label>
                       <textarea class='form-control' name="description" placeholder="description"></textarea>

                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:90%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>