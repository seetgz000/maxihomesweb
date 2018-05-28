<section class="content-header">
    <h1>
        Edit article
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>article/all"><i class="fa fa-articles"></i> Article</a></li>
        <li><a href="<?= base_url() ?>article/edit/<?= $article["article_id"] ?>"> Edit article</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h4 class="whiteTitle">Edit Article </h4>
            </div>
            <div>
                <?php if (isset($error)) { ?>
                    <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="post" action="<?= base_url() ?>Article/edit/<?= $article["article_id"] ?>" enctype="multipart/form-data">
                    <div class="mediumBox">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">

                                <img id="thumbnail" src="<?= site_url() . $article["thumbnail"] ?>" class="profile_picture">

                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-10 col-sm-10">
                                Upload a picture <input type="file" name="thumbnail" class="form-control" style="width:50%;" id="thumbnail_selector"> 
                            </div>
                        </div>
                        <hr />
                        <label>Article Title</label>
                        <input type='text' name='title' class='form-control' placeholder="Article Title" required value="<?= $article["title"] ?>"/>
                        <label>Article Category</label>
                        <select class="form-control" name="article_category_id">
                            <?php
                            foreach ($article_categories as $row) {
                                ?>
                                <option value="<?= $row["article_category_id"] ?>" <?php
                                if ($row["article_category_id"] == $article["article_category_id"]) {
                                    ?>
                                            selected
                                            <?php
                                        }
                                        ?>><?= $row["article_category"] ?></option>
                                        <?php
                                    }
                                    ?>
                        </select>
                        <label>Article Description</label>
                        <textarea name='description' class='form-control' placeholder="Article Description" rows="5" required><?=$article["description"]?></textarea>
                        <label>Article Content</label>
                        <textarea class="form-control" rows="10" required name="content" placeholder="Article Content" id="textarea"><?= $article["content"] ?></textarea>
                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:95%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $('#textarea').richText();
    });
</script>