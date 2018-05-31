<section class="filler filler_sunway full">
    <div class="overlay">
        <div class="text">
            <h1>Bandar Sunway</h1>
        </div>
    </div>
</section>
<section class="rooms_listing">
    
    <br><br>
    <div class="row">

    <?php foreach($room as $row){ ?>
        <a href="<?=base_url()?>main/roomDetails/<?=$row["room_id"]?>">
            <div class="col-md-4 room_row">
                <div class="room_card">
                    <div class="img_wrapper">
                        <img src="<?= base_url() . $row['thumbnail'] ?>" class="room_img">
                        <div class="room_price">
                            MYR <?= $row['advance_rental'] ?>
                        </div>
                    </div>
                    <div class="room_details">
                        <h3><?= $row['name'] ?></h3><br>
                        <span class="fa fa-map-pin"></span><?= $row['address'] ?><br>
                        <span class="fa fa-tags"></span>
    
                        <?php 
                            $roomTag = $this->Room_model->get_where(array(
                                "room.room_id" => $row["room_id"]
                            )); 
                            
                            $i = 0; foreach($roomTag[0]['tag'] as $row){  
                                echo $row['tag_name'];
    
                                if ($i < count($roomTag[0]['tag']) - 1) {
                                    echo ", ";
                            } $i++; }
                        ?>
    
                    </div>
                </div>
            </div>
        </a>
    <?php } ?>
    </div>
</section>