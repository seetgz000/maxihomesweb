<section class="content-header">
    <h1>
        Add room
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>room/all"><i class="fa fa-rooms"></i> Room</a></li>
        <li><a href="<?= base_url() ?>room/add"> Add room</a></li>
    </ol>
</section>
<br>
<section class="content">
<form method="post" action="<?= base_url() ?>Room/add" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="mediumBox">
                <div class="panel panel-success" style="padding-bottom:10%;">
                    <div class="panel panel-heading">
                        <h4 class="whiteTitle">Room Detail</h4>
                    </div>
                    <div>
                        <?php if (isset($error)) { ?>
                            <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
        
                        
                            <div class="mediumBox">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2">
        
                                        <img id="thumbnail" src="<?= site_url(); ?>/images/default-image.jpg" class="profile_picture">
        
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-xs-10 col-sm-10">
                                        Upload a picture <input type="file" name="thumbnail" class="form-control" style="width:50%;" id="thumbnail_selector"> 
                                    </div>
                                </div>
                                <hr />
                                <label>Room Name</label>
                                <input type='text' name='name' class='form-control' placeholder="Room Name" required/>
                                <label>Room Location</label>
                                <select class="form-control" name="room_location_id">
                                    <?php
                                    foreach ($location as $row) {
                                        ?>
                                        <option value="<?= $row["location_id"] ?>"><?= $row["name"] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <label>Room Address</label>
                                <input type='text' name='address' class='form-control' placeholder="Room Address" required/>
                                <label>Room Description</label>
                                <textarea class="form-control" rows="10" required name="description" placeholder="Room Description" id="textarea"></textarea>
                            </div>
                        </form>
        
                    </div>
                </div>
            </div>
        </div>    
        <div class="col-md-6">
            <div class="mediumBox">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <h4 class="whiteTitle">Rental Condition </h4>
                    </div>
                    <div>
                        <?php if (isset($error)) { ?>
                            <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
        
                            <div class="mediumBox">
                                <label>Rental Type</label>
                                <input type='text' name='rental_type' class='form-control' placeholder="Room Type" required/>
                                <label>Attached Bathroom</label>
                                <select class="form-control" name="attached_bathroom">
                                    <option value = 0 >Yes</option>
                                    <option value = 1 >No</option>
                                </select>
                                <label>Building Type</label>
                                <input type='text' name='building_type' class='form-control' placeholder="Building Type" required/>
                                <label>Availability</label>
                                <select class="form-control" name="availability">
                                    <option value = 0 >Yes</option>
                                    <option value = 1 >No</option>
                                </select>
                                <label>Minimum Tenure</label>
                                <input type='text' name='minimum_tenure' class='form-control' placeholder="Minimum Tenure" required/>
                                <label>Furnishing</label>
                                <input type='text' name='furnishing' class='form-control' placeholder="Furnishing" required/>
                                <label>Beds In Room</label>
                                <input type='number' name='beds_in_room' class='form-control' placeholder="Beds In Room" required/>
                                <label>Gender Preference</label>
                                <select class="form-control" name="gender_preference">
                                    <option value ="Boys" >Boys</option>
                                    <option value ="Girls" >Girls</option>
                                    <option value ="Boys &amp; Girls" >Boys &amp; Girls</option>
                                </select>
                                <br />
                                <div style="display:flex">
                                    <input type="submit" value="save" class="btn btn-primary" style="margin-left: auto;">
                                </div>
                                <br />
                            </div>
                        
        
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="row">
        <div class="col-md-6">
        </div>
    </div>

    </form>
</section>