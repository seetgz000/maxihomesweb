<section class="content-header">
    <h1>
        Add location
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>location/all"><i class="fa fa-locations"></i> Location</a></li>
        <li><a href="<?= base_url() ?>location/add"> Add location</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h4 class="whiteTitle">Add Location </h4>
            </div>
            <div>
                <?php if (isset($error)) { ?>
                    <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="post" action="<?= base_url() ?>Location/add" enctype="multipart/form-data">
                    <div class="mediumBox">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">

                                <img id="thumbnail" src="<?= site_url(); ?>/images/default-image.jpg" class="img-responsive">

                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-10 col-sm-10">
                                Upload a picture <input type="file" name="thumbnail" class="form-control" style="width:50%;" id="thumbnail_selector" required> 
                            </div>
                        </div>
                        <hr />
                        <label>Location Name</label>
                        <input type='text' name='name' class='form-control' placeholder="Location Name" required/>
                        <label>Location Address</label>
                        <input type='text' name='address' class='form-control' placeholder="Location Address" required/>
                        <label>Location Description</label>
                        <hr>
                        <textarea class="form-control" rows="10" required name="description" placeholder="Location Description" id="textarea"></textarea>
                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:95%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>