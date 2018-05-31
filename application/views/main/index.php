    <!-- Slider Area -->
    <section class="slide-wrapper">
        <div class="container">
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                 </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item item1 active">
                        <div class="fill">  
                            <div class="inner-content">
                                <div class="carousel-img">
                                    
                                </div>
                                <div class="carousel-desc"> 
                                    <h4></h4>
                                    <h2>Maxihomes</h2>
                                    <!-- <a href="#contact-link">Contact Now</a>  -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item item2 ">
                    <div class="fill">  
                        <div class="inner-content">
                            <div class="carousel-img">
                                
                            </div>
                            <div class="carousel-desc"> 
                                <h4></h4>
                                <h2></h2>
                                <!-- <a href="#contact-link">Contact Now</a>  -->
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- End Slider Area -->
    
    <!-- Welcome to EVO Area -->
    <section class="welcome_to_evo" id="about-us-link">
        <div class="container">
            <div class="provide_qualty row m0">
                <div class="col-md-12 p0 provide_qualty_content">
                    <h6>Our Projects</h6>
                 <br><br>
                    <div id="multi_slider" class="owl-carousel  owl-theme">
                        <?php foreach($about_slider as $row){ ?>
                            <a href="<?= base_url() .'main/'. $row['link'] ?>">
                            <div class="item slider_gallery_item">
                                <img src="<?= base_url() . $row['thumbnail'] ?>">
                                <div class="overlay">
                                    <h3><?= $row['title'] ?></h3>
                                </div>
                            </div>
                            </a>
                        <?php } ?>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome to EVO Area -->
    
    <!-- section news -->

    <section class="news">
        <h2 class="title">Events and Happenings</h2>

        <?php 
            $i = 1;
            foreach($event as $row){ 
                if (($i % 2) == 1){
        ?>

            <div class="row news_item">
                <div class="col-md-6 noPad">
                    <img src="<?= base_url() . $row['thumbnail'] ?>" class='full_width'>
                </div>
                <div class="col-md-6 news_details">
                    <h3><?= $row['title'] ?></h3>
                    <P><?= $row['description'] ?></P>
                </div>
            </div>

            <?php } else { ?>
                
            <div class="row news_item">
            <div class="col-md-6 news_details">
                    <h3><?= $row['title'] ?></h3>
                    <P><?= $row['description'] ?></P>
            </div>
            <div class="col-md-6 noPad">
                    <img src="<?= base_url() . $row['thumbnail'] ?>" class='full_width'>
                </div>
            </div>

        <?php 
            }
            $i++;
            } 
        ?>    

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="btn_custom">
                    Read More
                </div>
            </div>
        </div>
    </section>
    
    <!-- latest Project area --> 
    <section class="projects">
        <h2 class="title">
            Find A Room Today
        </h2>
        <div class="container-fluid">
            <?php foreach($location as $row) { ?>
                <div class="row project_row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5 noPad ">
                        <img src="<?= base_url() . $row['thumbnail'] ?>" class="full_width">
                    </div>
                    <div class="col-md-5">
                        <h3><?= $row['name'] ?></h3>
                        <p><?= $row['description'] ?></p>
                        <br><br>
                        <a class="rooms btn_custom white" href="rooms.html">View Rooms</a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            <?php } ?>
        </div>
            
    </section>
    <!-- End latest Project area --> 
 
     <!-- Contact area --> 
    <section class="news" id="contact-link">
        <div class="container-fluid">
            <div class="row contact_row">
                <div class="col-sm-12 send_message">
                    <h2>Can't find what you are looking for ?</h2>
                    <p>Drop by our office today</p> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.097741263127!2d101.5998893151015!3d3.068548354497751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c8f2e63151d%3A0xfbdf9e70b8572d54!2sRock+Cafe!5e0!3m2!1sen!2smy!4v1514704193615" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Map area --> 
     <!-- end contact area -->