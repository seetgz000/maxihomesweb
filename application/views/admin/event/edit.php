<section class="content-header">
    <h1>
        Edit event
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>event/all"><i class="fa fa-events"></i> Event</a></li>
        <li><a href="<?= base_url() ?>event/edit/<?= $event["event_id"] ?>"> Edit event</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h4 class="whiteTitle">Edit Event </h4>
            </div>
            <div>
                <?php if (isset($error)) { ?>
                    <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="post" action="<?= base_url() ?>Event/edit/<?= $event["event_id"] ?>" enctype="multipart/form-data">
                    <div class="mediumBox">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">

                                <img id="thumbnail" src="<?= site_url() . $event["thumbnail"] ?>" class="img-responsive">

                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-10 col-sm-10">
                                Upload a picture <input type="file" name="thumbnail" class="form-control" style="width:50%;" id="thumbnail_selector"> 
                            </div>
                        </div>
                        <hr />
                        <label>Event Title</label>
                        <input type='text' name='title' class='form-control' placeholder="Event Title" required value="<?= $event["title"] ?>"/>
                        <label>Event Description</label>
                        <textarea name='description' class='form-control' placeholder="Event Description" rows="5" required><?=$event["description"]?></textarea>
                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:95%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>