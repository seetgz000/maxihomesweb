<section class="content-header">
    <h1>
        Add About Slider
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>AboutSlider/all"><i class="fa fa-article"></i> About Slider</a></li>
        <li><a href="<?= base_url() ?>AboutSlider/add"> Add About Slider</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h4 class="whiteTitle">Add About Slider </h4>
            </div>
            <div>
                <?php if (isset($error)) { ?>
                    <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="post" action="<?= base_url() ?>AboutSlider/add" enctype="multipart/form-data">
                    <div class="mediumBox">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">

                                <img id="thumbnail" src="<?= site_url(); ?>/images/default-image.jpg" class="img-responsive">

                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-10 col-sm-10">
                                Upload a picture <input type="file" name="thumbnail" class="form-control" style="width:50%;" id="thumbnail_selector"> 
                            </div>
                        </div>
                        <hr />
                        <label>About Slider Title</label>
                        <input type='text' name='title' class='form-control' placeholder="About Slider Title" required/>
                        <label>About Slider Location</label>
                        <select class="form-control" name="about_slider_location">
                                <?php
                                foreach ($location as $row) {
                                    ?>
                                    <option value="<?= $row["location_id"] ?>"><?= $row["name"] ?></option>
                                    <?php
                                }
                                ?>
                        </select>
                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:95%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>