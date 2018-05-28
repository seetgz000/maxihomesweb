<section class="content-header">
    <h1>
        Edit location
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>location/all"><i class="fa fa-locations"></i> Location</a></li>
        <li><a href="<?= base_url() ?>location/edit/<?= $location["location_id"] ?>"> Edit location</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class="panel panel-success">
            <div class="panel panel-heading">
                <h4 class="whiteTitle">Edit Location </h4>
            </div>
            <div>
                <?php if (isset($error)) { ?>
                    <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>

                <form method="post" action="<?= base_url() ?>Location/edit/<?= $location["location_id"] ?>">
                    <div class="mediumBox">
                        <hr />
                        <label>Location Name</label>
                        <input type='text' name='name' class='form-control' placeholder="Location Title" required value="<?= $location["name"] ?>"/>
                        <label>Location Address</label>
                        <input type='text' name='address' class='form-control' placeholder="Location Title" required value="<?= $location["address"] ?>"/>
                        <br />
                        <input type="submit" value="save" class="btn btn-primary" style="margin-bottom:5%;margin-left:95%;">
                        <br />
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>