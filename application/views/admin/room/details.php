<section class="content-header">
    <h1>
        Room details
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>Room/all"><i class="fa fa-book"></i> Room</a></li>
        <li><a href="<?= base_url() ?>room/details/<?= $room['room_id'] ?>"><?= $room['name'] ?></a></li>
    </ol>
</section>
<br>
<section class="content">
<div class="row">
        <div class="col-md-6">
            <div class="mediumBox">
                <div class="panel panel-success" style="padding-bottom:10%;">
                    <div class="panel panel-heading">
                        <a class="pull-right" href="<?= site_url("Room/edit/" . $room['room_id']); ?>">
                            Edit
                        </a>
                        <h4 class="whiteTitle">Room Detail</h4>
                    </div> 
                    <div class="mediumBox">
                        <div class="room-thumbnail-container">
                            <img class="thumbnail" src="<?= base_url() . $room['thumbnail'] ?>">
                        </div>
                        <hr />
                        <h5>Room Name: <?= $room["name"] ?></h5>
                        <h5>Room Location: <?= $room["location"] ?></h5>
                        <h5>Room Address:</h5>
                        <p class="prewrap"><?= $room["address"] ?></p>
                        <h5>Room Description:</h5>
                        <p class="prewrap"><?= $room["description"] ?></p>
                    </div>
                </div>
            </div>
        </div>    
        <div class="col-md-6">
            <div class="mediumBox">
                <div class="panel panel-info">
                    <div class="panel panel-heading">
                        <a class="pull-right" href="<?= site_url("Room/edit/" . $room['room_id']); ?>">
                            Edit
                        </a>
                        <h4 class="whiteTitle">Rental Condition </h4>
                    </div>
                    <div>    
                        <div class="mediumBox">
                            <h5>Rental Type: <?= $room["rental_type"] ?></h5>
                            <h5>Attached Bathroom: 
                                <?php
                                if($room['attached_bathroom'] == 0){
                                    echo "Yes";
                                }else{
                                    echo "No";} ?>
                            </h5>
                            <h5>Building Type: <?= $room["building_type"] ?></h5>
                            <h5>Availability: 
                                <?php
                                if($room['availability'] == 0){
                                    echo "Available Now";
                                }else{
                                    echo "Not Available";} ?>
                            </h5>
                            <h5>Minimum Tenure: <?= $room["minimum_tenure"] ?></h5>
                            <h5>Furnishing: <?= $room["furnishing"] ?></h5>
                            <h5>Beds In Room: <?= $room["beds_in_room"] ?></h5>
                            <h5>Gender Preference: <?= $room["gender_preference"] ?></h5>
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
                        <a class="pull-right" href="<?= site_url("Room/edit/" . $room['room_id']); ?>">
                            Edit
                        </a>
                        <h4 class="whiteTitle">Tag</h4>
                    </div>    
                    <div class="mediumBox">
                        <label>Tag Name</label>
                        <div id="tags">
                            <?php $i = 0; foreach($room['tag'] as $row){ ?>
                                <br class="tag_<?= $i; ?>">
                                <div style="width:70%;display:inline-block;" class="tag_<?= $i; ?>"><?= $row['tag_name']; ?></div>
                                <br class="tag_<?= $i; ?>">
                            <?php $i++; } ?>
                        </div>
                      

                        <br/>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mediumBox">
                <div class="panel panel-danger">
                    <div class="panel panel-heading">
                        <a class="pull-right" href="<?= site_url("Room/edit/" . $room['room_id']); ?>">
                            Edit
                        </a>
                        <h4 class="whiteTitle">Room Price</h4>
                    </div> 
                    <div class="mediumBox">
                        <h5>Advance Rental : <?= $room["advance_rental"] ?></label>
                        <br />
                        <h5>Security Deposit : <?= $room["security_deposit"] ?></label>
                        <br />
                        <h5>Utilities Deposit : <?= $room["utilities_deposit"] ?></label>
                        <br />
                        <h5>Keycard Deposit : <?= $room["keycard_deposit"] ?></label>
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>