<section class="content-header">
    <h1>
        Add room
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>room/all"><i class="fa fa-book"></i> Room</a></li>
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
                                    Upload a picture <input type="file" name="thumbnail" class="form-control" style="width:50%;" id="thumbnail_selector" required> 
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
                            <input type='number' name='beds_in_room' class='form-control' placeholder="Beds In Room" min="1" max="10" required/>
                            <label>Gender Preference</label>
                            <select class="form-control" name="gender_preference">
                                <option value ="Boys" >Boys</option>
                                <option value ="Girls" >Girls</option>
                                <option value ="Boys &amp; Girls" >Boys &amp; Girls</option>
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
                                <br class="input_0">
                                <input type='text' name='tags[]' style="width:80%;display:inline-block;" class="input_0 form-control" placeholder="Tag" required/>
                                <a href="javascript:void(0)" class="input_0" onclick="remove(0)">remove</a>
                                <br class="input_0">
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
                            <input type='number' name='advance_rental' class='form-control' placeholder="Advance Rental" step=".01" required/>
                            <br />
                            <label>Security Deposit</label>
                            <input type='number' name='security_deposit' class='form-control' placeholder="Security Deposit" step=".01" required/>
                            <br />
                            <label>Utilities Deposit</label>
                            <input type='number' name='utilities_deposit' class='form-control' placeholder="Utilities Deposit" step=".01" required/>
                            <br />
                            <label>Keycard Deposit</label>
                            <input type='number' name='keycard_deposit' class='form-control' placeholder="Keycard Deposit" step=".01" required/>
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
    inputCounter = 1;
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