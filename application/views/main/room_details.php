<section class="contact_area rooms_listing">
       
       <div class="row">
           
            <div class="col-md-1"></div>
            <div class="col-md-6">
                    <h1><?= $room["name"] ?></h1>
                    <br><br>
               <div class="img_wrapper">
                    <img src="<?= base_url() . $room['thumbnail'] ?>" class="room_img">
                   
                </div>
               <div class="room_details">
                   <h3><?= $room["name"] ?></h3><br>
                   <span class="fa fa-map-pin"></span> <?= $room["location"] ?> <br>
                   <span class="fa fa-tags"></span> Single room with Attached Bathroom
                   <?php $i = 0; foreach($room['tag'] as $row){ ?>
                        <?= $row['tag_name']; ?> 
                    <?php $i++; } ?>
                    <br> <br> <br>
                   <h3>Description</h3>
                   <p><?= $room["description"] ?></p>
                   <hr>
                   <h3>Rental Conditions</h3>
                   <br>
                   <br>
                   <table class="rental_table">
                       <tr>
                           <td>
                               Advance Rental
                           </td>
                           <td class="right">
                               RM <?= $room["advance_rental"] ?>
                           </td>
                       </tr>
                       <tr>
                            <td>
                                 Security Deposit
                            </td>
                            <td class="right">
                                RM <?= $room["security_deposit"] ?>
                            </td>
                        </tr>
                        <tr>
                           <td>
                               Utilities Deposit
                           </td>
                           <td class="right">
                               RM <?= $room["utilities_deposit"] ?>
                           </td>
                       </tr>
                       <tr>
                            <td>
                                Keycard Deposit
                            </td>
                            <td class="right">
                                RM <?= $room["keycard_deposit"] ?>
                            </td>
                        </tr>
                        <tr class="total">
                                <td>
                                    Total 
                                </td>
                                <td class="right">
                                    RM <?= $room["advance_rental"] +
                                        $room["security_deposit"] + 
                                        $room["utilities_deposit"] + 
                                        $room["keycard_deposit"] ?>
                                </td>
                            </tr>
                   </table>
                   <table class="rental_table">
                        <tr>
                            <td>
                                Rental Type
                            </td>
                            <td class="right">
                                <?= $room["rental_type"] ?>
                            </td>
                        </tr>
                        <tr>
                             <td>
                                  Attached Bathroom
                             </td>
                             <td class="right">
                                <?php
                                if($room['attached_bathroom'] == 0){
                                    echo "Yes";
                                }else{
                                    echo "No";} ?>
                             </td>
                         </tr>
                         <tr>
                            <td>
                                Building Type
                            </td>
                            <td class="right">
                                <?= $room["building_type"] ?>
                            </td>
                        </tr>
                        <tr>
                             <td>
                                 Availability
                             </td>
                             <td class="right">
                                <?php
                                if($room['availability'] == 0){
                                    echo "Available Now";
                                }else{
                                    echo "Not Available";} ?>
                             </td>
                         </tr>
                         <tr>
                                <td>
                                    Minimum Tenure
                                </td>
                                <td class="right">
                                    <?= $room["minimum_tenure"] ?>
                                </td>
                            </tr>
                            <tr>
                                    <td>
                                        Furnishing
                                    </td>
                                    <td class="right">
                                        <?= $room["furnishing"] ?>
                                    </td>
                                </tr>
                                <tr>
                                        <td>
                                            Location
                                        </td>
                                        <td class="right">
                                            <?= $room["location"] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                            <td>
                                                Beds in Room
                                            </td>
                                            <td class="right">
                                                <?= $room["beds_in_room"] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                                <td>
                                                    Gender Preference
                                                </td>
                                                <td class="right">
                                                    <?= $room["gender_preference"] ?>
                                                </td>
                                            </tr>
                    </table>
               </div>
           </div>
           <div class="col-md-4 talk_to_team">
                <div class="room_price">
                    <h2>MYR <?= $room["advance_rental"] ?></h2>
                </div>

                <div class="details">
                    <h4>Talk to Our Team </h4>
                  
                    <label>Full Name</label>
                    <input type="text" class="form-control" placeholder="full name">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="email">
                    <label>Mobile Number</label>
                    <input type="text" class="form-control" placeholder="mobile">
                    <label>Message</label>
                    <textarea class="form-control">
                        
                    </textarea>
                    <br><br>
                    <button class="btn btn-info">
                        Enquire Now
                    </button>
                         
                </div>
           </div>
           <div class="col-md-1"></div>
          
       
       </div>
      
   </section>