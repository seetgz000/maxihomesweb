    <!-- Footer Area --> 
    <footer class="footer_area">
        <div class="container">
            <div class="row m0 foter_row">
                <div class="col-sm-2 footer_logo p0"><img src="<?= base_url() ?>images/logo.png" width="150px" alt=""></div>
                <div class="col-md-8 col-sm-10 footer_menu"> 
                        <ul class="nav navbar_menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#about-us-link">About Us</a></li>
                            <li><a href="index.html#contact-link">Contacts</a></li>  
                        </ul>
                    </div>         
                <div class="col-md-2 col-sm-12 footer_menu"> 
                    <ul class="nav navbar_menu socail_nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>  
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>  
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>    
                    </ul>
                </div>
            </div>
            <div class="copy_right_area row m0">
                <ul class="privacy">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
                <h5>All Right Reserved &copy; 2017 <a href="#">Maxihomes.co</a></h5> 
            </div>
        </div>
    </footer>
    <!-- End Footer Area --> 
    
    <!-- jQuery JS -->
    <script src="<?= base_url() ?>js/jquery-1.12.4.min.js"></script>
   

    <!-- Bootstrap JS -->
    <script src="<?= base_url() ?>js/bootstrap.min.js"></script>
    <!-- slider JS --> 
    <script src="<?= base_url() ?>vendors/slider/js/slider.1.0.js"></script>
    <!-- Animate JS --> 
    <script src="<?= base_url() ?>vendors/animate/wow.min.js"></script>
    <!-- Counter-Up JS --> 
    <script src="<?= base_url() ?>vendors/Counter-Up/waypoints.min.js"></script> 
    <script src="<?= base_url() ?>vendors/Counter-Up/jquery.counterup.min.js"></script> 
    <!-- Mixitup JS --> 
    <script src="<?= base_url() ?>vendors/mixitup/jquery.mixitup.min.js"></script>    
    <!-- Owl Carousel JS --> 
    <script src="<?= base_url() ?>vendors/owl_carousel/owl.carousel.min.js"></script>  
    <!-- Theme JS -->
    <script src="<?= base_url() ?>js/theme.js"></script>
    <script>
            
                    $(document).ready(function(){
                        $("#multi_slider").owlCarousel({
                            loop:true,
                            margin:10,
                            nav:true,
                            responsive:{
                                0:{
                                    items:1
                                },
                                600:{
                                    items:2
                                },
                                1000:{
                                    items:3
                                }
                            }
                            
                        });
                    });
                    function openNav() {
                    
                        document.getElementById("myNav").style.height = "60vh";
                    }
                    
                    function closeNav() {
                      
                        document.getElementById("myNav").style.height = "0px";
                    }
                    </script>
</body>
</html> 