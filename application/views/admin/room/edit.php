<section class="content-header">
    <h1>
        Edit room
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>room/all"><i class="fa fa-articles"></i> Room</a></li>
        <li><a href="<?= base_url() ?>room/edit/<?= $room["room_id"] ?>"> Edit room</a></li>
    </ol>
</section>
<br>
<section class="content">
<form method="post" action="<?= base_url() ?>Room/edit/<?= $room["room_id"] ?>" enctype="multipart/form-data">
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
                                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
    
                                    <img class="thumbnail" src="<?= base_url() . $room['thumbnail'] ?>">
    
                                </div>
                                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                                    Upload a picture <input type="file" name="thumbnail" class="form-control" style="width:50%;" id="thumbnail_selector"> 
                                </div>
                            </div>
                            <hr />
                            <label>Room Name</label>
                            <input type='text' name='name' class='form-control' placeholder="Room Name" value="<?= $room["name"] ?>" required/>
                            <label>Room Location</label>
                            <select class="form-control" name="room_location_id">
                                <?php
                                foreach ($location as $row) {
                                    ?>
                                    <option value="<?= $row["location_id"] ?>"<?= $row["location_id"] == $room["location_id"] ? "selected" : ""; ?>><?= $row["name"] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <label>Room Address</label>
                            <input type='text' name='address' class='form-control' placeholder="Room Address" value="<?= $room["address"] ?>" required/>
                            <label>Room Description</label>
                            <textarea class="form-control" rows="10" required name="description" placeholder="Room Description" id="textarea"><?= $room["description"] ?></textarea>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>    
        <div class="col-md-6">
            <div class="mediumBox">
                <div class="panel panel-info">
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
                            <input type='text' name='rental_type' class='form-control' placeholder="Room Type" value="<?= $room["rental_type"] ?>" required/>
                            <label>Attached Bathroom</label>
                            <select class="form-control" name="attached_bathroom">
                                <option value = 0 <?= $room["attached_bathroom"] == 0 ? "selected" : ""; ?>>Yes</option>
                                <option value = 1 <?= $room["attached_bathroom"] == 1 ? "selected" : ""; ?>>No</option>
                            </select>
                            <label>Building Type</label>
                            <input type='text' name='building_type' class='form-control' placeholder="Building Type" value="<?= $room["building_type"] ?>" required/>
                            <label>Availability</label>
                            <select class="form-control" name="availability">
                                <option value = 0 <?= $room["availability"] == 0 ? "selected" : ""; ?>>Available Now</option>
                                <option value = 1 <?= $room["availability"] == 1 ? "selected" : ""; ?>>Not Available</option>
                            </select>
                            <label>Minimum Tenure</label>
                            <input type='text' name='minimum_tenure' class='form-control' placeholder="Minimum Tenure" value="<?= $room['minimum_tenure'] ?>" required/>
                            <label>Furnishing</label>
                            <input type='text' name='furnishing' class='form-control' placeholder="Furnishing" value="<?= $room['furnishing'] ?>" required/>
                            <label>Beds In Room</label>
                            <input type='number' name='beds_in_room' class='form-control' placeholder="Beds In Room" min="1" max="10" value="<?= $room['beds_in_room'] ?>" required/>
                            <label>Gender Preference</label>
                            <select class="form-control" name="gender_preference">
                                <option value ="Boys" <?= $room["gender_preference"] == "Boys" ? "selected" : ""; ?>>Boys</option>
                                <option value ="Girls" <?= $room["gender_preference"] == "Girls" ? "selected" : ""; ?>>Girls</option>
                                <option value ="Boys &amp; Girls" <?= $room["gender_preference"] == "Boys &amp; Girls" ? "selected" : ""; ?>>Boys &amp; Girls</option>
                            </select>
                            <br />
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="mediumBox">
                <div class="panel panel-warning">
                    <div class="panel panel-heading">
                        <h4 class="whiteTitle">Add Tag</h4>
                    </div>
                    <div>       
                        <?php if (isset($error)) { ?>
                            <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
                        <div class="mediumBox">
                            <label>Tag Name</label>

                            <div id="tags">
                                <?php $i = 0; foreach($room['tag'] as $row){ ?>
                                <br class="input_<?= $i; ?>">
                                <input type="text" name="tags[]" style="width:80%;display:inline-block;" value="<?= $row['tag_name']; ?>" class="input_<?= $i; ?> form-control" placeholder='Tag'>
                                <a href="javascript:void(0)" class="input_<?= $i; ?>" onclick="remove(<?= $i; ?>)">remove</a>
                                <br class="input_<?= $i; ?>">
                                <?php $i++; } ?>
                            </div>
                            <br />
                            <div style="display:flex">
                                <a onclick='addTag()' class="btn btn-primary" style="margin-left: auto;">Add New Tag</a>
                            </div>
                            <br/>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mediumBox">
                <div class="panel panel-danger">
                    <div class="panel panel-heading">
                        <h4 class="whiteTitle">Room Price</h4>
                    </div>
                    <div>
                        <?php if (isset($error)) { ?>
                            <div class='alert alert-danger alert-dismissable' style="margin-left:10%;margin-right:10%;">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>        
                        <div class="mediumBox">
                            <label>Advance Rental</label>
                            <input type='number' name='advance_rental' class='form-control' placeholder="Advance Rental" step=".01" value="<?= $room['advance_rental'] ?>"  required/>
                            <br />
                            <label>Security Deposit</label>
                            <input type='number' name='security_deposit' class='form-control' placeholder="Security Deposit" step=".01" value="<?= $room['security_deposit'] ?>"  required/>
                            <br />
                            <label>Utilities Deposit</label>
                            <input type='number' name='utilities_deposit' class='form-control' placeholder="Utilities Deposit" step=".01" value="<?= $room['utilities_deposit'] ?>"  required/>
                            <br />
                            <label>Keycard Deposit</label>
                            <input type='number' name='keycard_deposit' class='form-control' placeholder="Keycard Deposit" step=".01" value="<?= $room['keycard_deposit'] ?>"  required/>
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

</form>
</section>

<script>
    inputCounter = <?= $i; ?>;
    function addTag(){
        var padding = '<br class="input_'+ inputCounter + '">';
        var input = '<input type="text" style="width:80%;display:inline-block;" name="tags[]" class="input_'+ inputCounter + ' form-control" placeholder="Tag"> ';
        var remove = '&nbsp;<a href="javascript:void(0)" class="input_'+ inputCounter + '" onclick="remove('+ inputCounter +')">remove</a> ';
        var padding2 = '<br class="input_'+ inputCounter + '">';

        $("#tags").append(padding);
        $("#tags").append(input);
        $("#tags").append(remove);
        $("#tags").append(padding2);

        inputCounter++;
    }
    function remove(id){
        $(".input_" +id).remove();
    }
</script>